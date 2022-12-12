<?php
include 'inc/init.inc.php'; // initialisation du site
include 'inc/fonctions.inc.php'; // des fonctions utiles

    // restriction d'accés

    if(! user_is_connected()) { // si l'utilisateur n'es pas connecté on le redirige sur connexion.php
        header('location: connexion.php');
    }



    // Traitements PHP





// début des affihages

include 'inc/header.inc.php';
include 'inc/nav.inc.php';
// echo '<pre>'; print_r($_SESSION); echo '</pre>';


?>

    
        <div class="bg-light p-5 rounded">
            <h1 class="text-center border-bottom pb-3">Blog | profil</h1>
            <p class="lead text-center">Bienvenue sur notre blog</p>
            <?php echo $msg; ?>
        </div>

        <div class="container">
            <div class="row">
                <div class="md-6 align-items-center">
                    <ul class="list-group">

                        <li class="list-group-item">N° utilisateur : <?php echo $_SESSION['utilisateur']['id_utilisateur']; ?></li>
                        <li class="list-group-item">Pseudo : <?php echo $_SESSION['utilisateur']['pseudo']; ?></li>
                        <li class="list-group-item">Email : <?php echo $_SESSION['utilisateur']['email']; ?></li>
                        <li class="list-group-item">Date d'inscription : <?php echo $_SESSION['utilisateur']['date_inscription']; ?></li>
                        <li class="list-group-item">Statut : <?php echo $_SESSION['utilisateur']['statut']; ?></li>

                    </ul>

                </div>
                <div class="md-6 mt-3">
                <img src="assets/img/joker.jpg" alt="image de profil" class="img-thumbnail ">
                    
                </div>
                

            </div>
        </div>

        

<?php


include 'inc/footer.inc.php';