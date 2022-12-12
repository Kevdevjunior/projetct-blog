<?php

// la vue
include 'inc/init.inc.php'; // initialisation du site
include 'inc/fonctions.inc.php'; // des fonctions utiles
include 'controller/gestion_article.php';

    

    // Récupération des catégorie pour construire les options du select
    // $liste_categories = $pdo->query("SELECT * FROM categorie ORDER BY nom_categorie");  // nous utilisons query car il n'y a pas de variable
    // $categories = $liste_categories->fetchAll(PDO::FETCH_ASSOC);
    // $options = '';
    // foreach($categories AS $sous_tableau ) {
    //     $options .= '<option value="' . $sous_tableau['id_categorie'] . '">' . $sous_tableau['nom_categorie'] . '</option>';
    // }   j'ai mis tous ça en commentaire car cette fonction son mis dans mes dossiers gestion article et je les incorpore grace a mon include controler/gestion_article.php


    // echo '<pre>'; print_r($categories); echo '</pre>';


// début des affihages

include 'inc/header.inc.php';
include 'inc/nav.inc.php';



?>

    
        <div class="bg-light p-5 rounded">
            <h1 class="text-center border-bottom pb-3">Blog</h1>
            <p class="lead text-center">Bienvenue sur notre blog</p>
            <?php echo $msg; ?>
        </div>

        <div class="container">
            <div class="row">
                <div class='col-sm-6 mx-auto'>

                    <form method="post" class="border mt-5 p-3" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="titre">Titre</label>
                                <input type="text" name="titre" id="titre" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="img_principale">Image principale</label>
                                <input type="text" name="img_principale" id="img_principale" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="id_categorie">Catégorie</label>
                                <select name="id_categorie" id="id_categorie" class="form-select">
                                <?php echo $options; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="contenu">Contenu</label>
                                <textarea name="contenu" id="contenu" class="form-control" rows="14"></textarea>
                            </div>
                        
                            <button type="submit" class="btn btn-outline-dark w-100">Enregistrement</button>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered mt-5">
                        <tr>
                            <th>Id article</th>
                            <th>Id utilisateur</th>
                            <th>Titre</th>
                            <th>Catégorie</th>
                            <th>Contenu</th>
                            <th>Image principale</th>
                            <th>Date enregistrement</th>
                            <th>Action</th>
                        </tr>
                        <?php echo $tableau; ?>
                    </table>
                </div>
            </div>
        </div><!-- fermeture class="container" -->

        

<?php


include 'inc/footer.inc.php';