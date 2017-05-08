<main id="gestionAutorites" class="content container">
    <h2 class="soustitre">Gestion des autorités</h2>



    <h3>Auteurs :</h3>

    <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn" href="#modal_auteur">Ajouter un auteur</a>

    <!-- Modal Structure -->
    <div id="modal_auteur" class="modal">
        <div class="modal-content">
            <h4>Ajouter un auteur</h4>
            <form class="col s12" action="/projetolibrary/OLibrary/Etape3/Olibrary/autorites/" method="post">

                <div class="row center">
                    <div class="input col l5 s12">
                        <input ctype="text" name="auteur_nom" placeholder="Nom">
                    </div>
                    <div class="input col l5 s12">
                        <input type="text" name="auteur_prenom" placeholder="Prénom">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn waves-effect waves-light blue modal-action modal-close" name="auteur" value="VALIDER">
                </div>
            </form>
        </div>
    </div>



    <table class="centered responsive-table highlight">
        <thead>
        <tr>

            <th>Nom</th>
            <th>Prénom</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($requete_auteur as $req_auteur){ ?>
            <tr>
                <td><?= $req_auteur['auteur_nom']?></td>
                <td><?= $req_auteur['auteur_prenom']?></td>
                <td><i class="material-icons">mode_edit</i></td>
                <td><a href="<?= BASE_URL."/SupprimerAuteur"; ?>/?id=<?= $req_auteur['auteur_id'] ?>"><i class="material-icons">delete</i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>


    <h3>Ajouter un editeur :</h3>


    <a class="waves-effect waves-light btn" href="#modal_editeur">Ajouter un éditeur</a>

    <!-- Modal Structure -->
    <div id="modal_editeur" class="modal">

        <div class="modal-content">
            <h4>Ajouter un éditeur</h4>
            <form action="/projetolibrary/OLibrary/Etape3/Olibrary/autorites/" method="post">
                <div class="row center"><div class="input col l10 s12"><input type="text" name="editeur_nom" placeholder="Nom de l'éditeur"></div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn waves-effect waves-light blue modal-action modal-close" name="editeur"></div>
        </div>
        </form>
    </div>
    </div>





    <table class="centered responsive-table highlight">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($requete_editeur as $req_editeur){ ?>
            <tr>
                <td><?= $req_editeur['editeur_id']?></td>
                <td><?= $req_editeur['editeur_nom']?></td>
            </tr> <?php } ?>
        </tbody>
    </table>


    <h3>Ajouter un fournisseur :</h3>


    <a class="waves-effect waves-light btn" href="#modal_fournisseur">Ajouter un fournisseur</a>

    <!-- Modal Structure -->
    <div id="modal_fournisseur" class="modal">

        <div class="modal-content">
            <h4>Ajouter un fournisseur</h4>
            <form action="/projetolibrary/OLibrary/Etape3/Olibrary/autorites/" method="post">
                <div class="row center">
                    <div class="input col l10 s12">
                        <input type="text" name="fournisseur_nom" placeholder="Nom du fournisseur">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn waves-effect waves-light blue modal-action modal-close" name="fournisseur">
                </div>
            </form>
        </div>
    </div>


    <table class="centered responsive-table highlight">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($requete_fournisseur as $req_fournisseur){ ?>
            <tr>
                <td><?= $req_fournisseur['fournisseur_id']?></td>
                <td><?= $req_fournisseur['fournisseur_nom']?></td>
            </tr> <?php } ?>
        </tbody>
    </table>




    <h3>Ajouter une collection :</h3>


    <a class="waves-effect waves-light btn" href="#modal_collection">Ajouter une collection</a>

    <!-- Modal Structure -->
    <div id="modal_collection" class="modal">

        <div class="modal-content">
            <h4>Ajouter une collection</h4>
            <form class="col s12" action="/projetolibrary/OLibrary/Etape3/Olibrary/autorites/" method="post">
                <div class="row center"><div class="input col l5 s12"><input type="text" name="collection_nom" placeholder="Nom de la collection"></div>
                    <div class="col l5 s12>"> <select name="editeur_id">
                            <option disabled selected>Editeur id </option>
                            <?php
                            foreach($editeur_id as $edit_id){
                                echo "<option>".$edit_id['editeur_id']." - ".$edit_id['editeur_nom'];?> </option><?php } ?>
                        </select></div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn waves-effect waves-light blue modal-action modal-close" name="collection">
                </div>
            </form>
        </div>
    </div>



    <table class="centered responsive-table highlight">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Id de l'éditeur</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($requete_collection as $req_collection){ ?>
            <tr>
                <td><?= $req_collection['collection_id']?></td>
                <td><?= $req_collection['collection_nom']?></td>
                <td><?= $req_collection['editeur_id']?></td>
            </tr> <?php } ?>
        </tbody>
    </table>




    <h3>Ajouter un livre :</h3>


    <a class="waves-effect waves-light btn" href="#modal_livre">Ajouter un livre</a>

    <!-- Modal Structure -->
    <div id="modal_livre" class="modal">


        <div class="modal-content">

            <h4>Ajouter un livre</h4>
            <form action="/projetolibrary/OLibrary/Etape3/Olibrary/autorites/" method="post">

                <div class="row center">
                    <div class="col l2 s12">
                        <input type="text" name="livre_ISBN" placeholder="ISBN">
                    </div>
                    <div class="col l2 s12">
                        <input type="text" name="livre_titre" placeholder="Titre">
                    </div>

                    <div class="col l2 s10">
                        <input type="date" name="date" placeholder="Date parution">
                    </div>

                    <div class="col l2 s12">

                        <select name="auteur_id">

                            <option disabled selected>Auteur id </option>
                            <?php
                            foreach($auteur_id as $aut_id){
                                echo "<option>".$aut_id['auteur_id']." - ".$aut_id['auteur_nom'];?> </option>
                            <?php }
                            ?>
                        </select>

                    </div>

                    <div class="col l2 s12">

                        <select name="collection_id">
                            <option disabled selected>Collection id </option>
                            <?php
                            foreach($collection_id as $coll_id){
                                echo "<option placeholder='Collection'>".$coll_id['collection_id']." - ".$coll_id['collection_nom'];?> </option>
                            <?php }
                            ?>
                        </select>

                    </div>

                    <div class="col l2 s12"><select name="fournisseur_id">
                            <option disabled selected>Fournisseur id </option>
                            <?php
                            foreach($fournisseur_id as $fourn_id){
                                echo "<option>".$fourn_id['fournisseur_id']." - ".$fourn_id['fournisseur_nom'];?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>


                <div class="row center">
                    <div class="col l2 s4">
                        <input type="text" name="nb_exemplaire" placeholder="Nombre d'exemplaires">
                    </div>

                    <div class="col l8 s12">
                        <textarea name="synopsis" placeholder="Synopsis"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn waves-effect waves-light blue modal-action modal-close" name="livre">
                </div>

            </form>
        </div>
    </div>



</main>

<script>
    $(document).ready(function() {
        $('select').material_select();
        $('.modal').modal();
    });
</script>