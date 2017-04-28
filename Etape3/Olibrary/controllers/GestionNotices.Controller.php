<?php



if(!isset($_SESSION["connect"])){

    $_SESSION["erreur"]="Vous devez vous connecter pour accéder a cette page ";

    //$token_error = true;
    header('Location: '.BASE_URL.'/connexion/');
}

/*$requete_livre =
    "SELECT livre_titre, livre_groupe, auteur_nom, auteur_prenom, COUNT(livre_groupe) AS cpt
    FROM livre l, auteur a
    WHERE l.auteur_id = a.auteur_id
    GROUP BY livre_groupe, livre_titre, auteur_nom, auteur_prenom";*/


$requete_livre =
    "SELECT notice_titre, notice_id, auteur_nom, auteur_prenom, count(notice_id) AS cpt
    FROM notice n, auteur a, exemplaire e
    WHERE n.notice_auteur_id = a.auteur_id
    AND e.exemplaire_notice_id = n.notice_id
    GROUP BY notice_titre, notice_id, auteur_nom, auteur_prenom";

$reponse_livre = $bdd->query($requete_livre);
$resultat_livre = $reponse_livre->fetchAll();



require $_dir["views"]."GestionNotices.php";