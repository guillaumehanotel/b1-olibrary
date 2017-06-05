<main id="gestionEmprunteurs"  class="content container">

    <h2 class="soustitre">Gestion des Emprunteurs</h2>



    <?php
    if($resultat_cpt_retard['cpt'] != 0) {
        ?>

        <h3>Liste des retards</h3>
        <table class="centered striped">
            <thead>
            <tr>
            <tr>
                <th data-field="utilisateur"><a id="utilisateur" href="#" class="asc">Utilisateur</a></th>
                <th data-field="notice"><a id="notice" href="#" class="asc">Nom des Livres</a></th>
                <th data-field="dateEmprunt"><a id="dateEmprunt" href="#" class="asc">Emprunt date début</a></th>
                <th data-field="dateEmpruntRetour"><a id="dateEmpruntRetour" href="#" class="asc">Emprunt date
                        retour</a></th>
            </tr>
            </thead>
            <tbody id="bodyEmprunts">

            <?php
            foreach ($resultat_emprunt_retard as $value) { ?>

                <tr class="selectable link_emprunts" id="row_<?= $value['user_num'] ?>">
                    <td class="user_name"><?= $value['user_prenom']; ?> <?= $value['user_nom']; ?></td>
                    <td class="notice_name"><?= $value['notice_titre']; ?></td>
                    <td class="emprunt_date"><?= date('d/m/Y', strtotime($value['emprunt_date'])); ?> </td>
                    <td class="emprunt_retour"><?= date('d/m/Y', strtotime($value['emprunt_retour'])); ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <br>


        <?php
    }
    ?>



    <h3>Liste des emprunts</h3>
    	 <table class="centered striped">
    	 <thead>
    	 <tr>
    	 	<tr>
                <th data-field="utilisateur"><a id="utilisateur" href="#" class="asc">Utilisateur</a></th>
                <th data-field="notice"><a id="notice" href="#" class="asc">Nom des Livres</a></th>
                <th data-field="dateEmprunt"><a id="dateEmprunt" href="#" class="asc">Emprunt date début</a></th>
                <th data-field="dateEmpruntRetour"><a id="dateEmpruntRetour" href="#" class="asc">Emprunt date retour</a></th>
         </tr>
    	 </thead>
    	 <tbody id="bodyEmprunts">

    	<?php
        foreach ($resultat_emprunt_ok as $value) {?>

            <tr class="selectable link_emprunts" id="row_<?= $value['user_num'] ?>">
                <td class="user_name"><?= $value['user_prenom'];?> <?=$value['user_nom'];?></td>
                <td class="notice_name"><?= $value['notice_titre'];?></td>
                <td class="emprunt_date"><?= date('d/m/Y', strtotime($value['emprunt_date'])); ?> </td>
                <td class="emprunt_retour"><?= date('d/m/Y', strtotime($value['emprunt_retour'])); ?></td>
            </tr>
            <?php
        }
        ?>
         </tbody>
         </table>
    <br>







    <h3>Liste des réservations</h3>
    <table class="centered striped">
        <thead>
        <tr>
            <th data-field="utilisateur"><a id="utilisateur" href="#" class="asc">Utilisateur</a></th>
            <th data-field="notice"><a id="notice" href="#" class="asc">Nom des Livres</a></th>
            <th data-field="dateEmprunt"><a id="dateEmprunt" href="#" class="asc">Emprunt date début</a></th>
            <th data-field="dateEmpruntRetour"><a id="dateEmpruntRetour" href="#" class="asc">Emprunt date retour</a></th>
        </tr>
        </thead>
        <tbody id="bodyEmprunts">
        <?php
        foreach ($resultat_reservation as $value) {?>
            <tr class="selectable link_emprunts" id="row_<?= $value['user_num'] ?>">
                <td class="user_name"><?= $value['user_prenom'];?> <?=$value['user_nom'];?></td>
                <td class="notice_name"><?= $value['notice_titre'];?></td>
                <td class="emprunt_date"><?=  date('d/m/Y', strtotime($value['emprunt_date'])) ?></td>
                <td class="emprunt_retour"><?=  date('d/m/Y', strtotime($value['emprunt_retour'])); ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>











    <br>

    <script type="text/javascript">
        var $base_url = <?php echo json_encode(BASE_URL); ?>;
    </script>




</main>