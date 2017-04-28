
<?php

$titre = $_GET['titre'];
$date = $_GET['date'];
$synopsis = $_GET['synopsis'];
$auteur = $_GET['auteur'];
$auteur_id = intval($_GET['auteur_id']);


$auteurs = json_decode($_GET['auteurs'], true);

$default_date = new DateTime('2000-01-01');

?>

<div class="row" id="notice_edit">

    <form class="col s12 m10 offset-m1" action="" method="post">
        <div class="card row">


            <div class="card-content white-text">


                <!--<i id="clear_edit"  class="small material-icons right">mode_edit</i>-->
                <i id="cancel_edit" class="white-text fa fa-times fa-3x right" aria-hidden="true"></i>

                <h5 class="center">NOTICE</h5>

                <div class="row">
                    <div class="input-field col m6">
                        <input id="titre" name="titre" type="text" value="<?= $titre ?>" class="validate">
                        <label class="active" for="titre">Titre</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col m6">

                        <select name="auteur_id" id="select_auteur">
                            <option disabled >Auteur</option>
                            <?php
                            foreach($auteurs as $auteur){
                                if($auteur['auteur_id'] == $auteur_id){
                                    echo "<option selected>".$auteur['auteur_id']." - ".$auteur['auteur_prenom'].' '.$auteur['auteur_nom']."</option>";
                                } else {
                                    echo "<option>".$auteur['auteur_id']." - ".$auteur['auteur_prenom'].' '.$auteur['auteur_nom']."</option>";
                                }
                            } ?>
                        </select>
                        <label for="select_auteur">Auteur</label>

                    </div>


                <div class="row">
                    <div class="input-field col m3">
                        <input id="date" name="date" type="text" value="<?= $date ?>" class="validate">
                        <label class="active" for="date">Date de parution</label>
                    </div>
                </div>


            </div>


            <div class="card-action white-text">
                <div class="row">
                    <div class="input-field">
                        <textarea id="synopsis" name="synopsis" type="text" class="materialize-textarea"><?= $synopsis ?></textarea>
                        <label class="active" for="synopsis">Synopsis</label>
                    </div>
                </div>
            </div>


            <!--<label for="submit_notice"><i id="check_edit"  class="medium material-icons right">done</i></label>-->
            <label for="submit_notice"><i id="check_notice" class="white-text fa fa-check fa-4x" aria-hidden="true"></i></label>

            <input type="submit" value="go" id="submit_notice" hidden>


        </div>
    </form>

</div>

<script>

    $(document).ready(function() {
        $('select').material_select();
    });


</script>
