<?php


if(!empty($_POST)){

    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["repassword"]) &&
        isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["repassword"])) {


        if( $_POST["password"] == $_POST["repassword"]) {


            if(DansBase($_POST['email'],$bdd) == false) {


                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $email = $_POST["email"];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                
                if(isset($_POST['admin'])){
                    $admin =1;
                } else {
                    $admin=0;
                }

                $requete = "INSERT INTO utilisateur (user_nom,user_prenom,user_mail,user_mdp,is_admin)
               VALUES ('$nom','$prenom','$email','$password','$admin')";
                $bdd->query($requete);



                header('Location: '.BASE_URL.'/connexion/');


            } else {
                alertMsg("Adresse mail déjà dans base");
            }


        } else {
            alertMsg("Merci de rentrer le même mot de passe");
        }


    } else {
        alertMsg("Veuillez compléter tous les champs");
    }

} else {
    //formulaire pas envoyé
}

require $_dir["views"]."Inscription.php";