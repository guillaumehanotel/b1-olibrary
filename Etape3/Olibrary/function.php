<?php


function DansBase($email,$bdd) {
    $sql = "SELECT user_mail FROM utilisateur WHERE user_mail='$email'";
    $resultat = $bdd->query($sql);
    $info = $resultat->fetchAll(PDO::FETCH_ASSOC);
    if($info!=null) {
        return true;
    } else {
        return false;
    }
}

function GetUser($email,$bdd) {
    $sql = "SELECT * FROM utilisateur WHERE user_mail='$email'";
    $resultat = $bdd->query($sql);
    $user = $resultat->fetch();
    if(!empty($user)) {
        return $user;
    } else {
        return null;
    }
}

function alertMsg($string){
    echo "<script type=\"text/javascript\">";
    echo "alert('$string');";
    echo "window.history.back();";
    echo "</script>";
}

function securify($str){
    $invalid_characters = array("$", "%", "#", "<", ">", "|");
    $string = str_replace($invalid_characters, "", $str);
    return htmlspecialchars($string);
}


/*
function isEnRetard($date){

    // comparer date du jour et date en paramètre et renvoie vrai si la date passée en paramètre est supérieur à la date du jour
    $today = date("Y-m-d");

    $today_time = strtotime($today);
    $date_time = strtotime($date);

    return $today_time > $date_time ? true : false;
}
*/

// $_SESSION['user_num']
function isEnRetard($bdd, $user_id){
    $requete_pret=
        "SELECT *
	FROM utilisateur u, emprunte em, exemplaire ex, notice n
	WHERE u.user_num = em.user_num
	AND em.exemplaire_id = ex.exemplaire_id
	AND ex.exemplaire_notice_id = n.notice_id
	AND u.user_num = $user_id ";

// Seulement les emprunts
    $requete_emprunt = $requete_pret . " AND is_reservation = 0";

// Seulement les emprunts en retard
    $requete_emprunt_retard = $requete_emprunt . " AND em.emprunt_retour < now()";
    $resultat_emprunt_retard = getResultatsRequete($bdd, $requete_emprunt_retard);

    return !empty($resultat_emprunt_retard) ? true : false;

}






function getEmprunt($bdd, $id){
    $requeteemprunt = "SELECT * FROM emprunte WHERE exemplaire_id=$id ORDER BY emprunt_retour DESC";
    return getResultatRequete($bdd, $requeteemprunt);
}

function isReservation($bdd, $id){
    return ( getEmprunt($bdd, $id)['is_reservation'] == 1 ) ? true : false;
}

function getDateRetour($bdd, $id){
    return getEmprunt($bdd, $id)['emprunt_retour'];
}




function getResultatsRequete($bdd, $requete){
    $reponse_requete = $bdd->query($requete);
    if($reponse_requete != false) {
        $resultat_requete = $reponse_requete->fetchAll();
        return $resultat_requete;
    } else {
        printErrorInfo($bdd);
        return array();
    }
}


function getResultatRequete($bdd, $requete){

    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $reponse_requete = $bdd->query($requete);
    if($reponse_requete != false) {
        $resultat_requete = $reponse_requete->fetch();
        return $resultat_requete;
    } else {
        printErrorInfo($bdd);
        return array();
    }
}

function printErrorInfo($bdd){

    echo "<br><strong style='text-align: center'>PDO::errorInfo():</strong>";

    echo "<table border='1' style='border:1px solid; margin-left: auto ; margin-right : auto ; width: 60%'>"
    ,"<thead>"
    ,"<tr>"
    ,"<th>SQL STATE</th>"
    ,"<th>DRIVER ERROR CODE</th>"
    ,"<th>MESSAGE</th>"
    ,"</tr>"
    ,"</thead>"

    ,"<tbody>"
    ,"<tr>";
    foreach($bdd->errorInfo() as $key => $element){
        $str ="";
        switch($key){
            case 0 :
                $str.=$element;
                break;
            case 1 :
                $str.=$element;
                break;
            case 2 :
                $str.=$element;
                break;
            default :
                $str.="Undefined";
                break;
        }
        echo "<td><a target='_blank' href='http://www.google.com/search?q=".urlencode($str)."'>$str</a></td>";
    }
    echo "</tr>"
    ,"</tbody>"
    ,"</table>";


}







