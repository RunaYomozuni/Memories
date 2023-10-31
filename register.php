<?php require_once 'utils/common.php';
$pageName = "register";
?>
<!DOCTYPE html>
<html lang="fr">
<?php
        require_once SITE_ROOT . 'partials/head.php';
    ?>
    <body> 
        <!-- navbar -->
        <?php
        require_once SITE_ROOT . 'partials/header.php';
    ?>
        
        <main>
            <div class="title-banner">
                <!--Partie bannière-->
                <div>Inscription</div>
            </div>

            <div class="identifiants">
                <!--Cors de texte de la partie des identifiants-->
                <form action="" method="post">
                    <input class="case" type="email" id="email" name="email" placeholder="Email"><br>
                    <input class="case" type="text" id="name" name="name" placeholder="Pseudo"><br>
                    <input class="case" type="password" id="password" name="password" placeholder="Mot de passe"><br>
                    <input class="case" type="password" id="password" name="password" placeholder="Confirmer le mot de passe"><br>
                    <input class="submit" type="submit" value="Inscription">
                </form>
            </div>
            <div class="lien-connexion">
                <p>Déjà un compte ?<a class="lien" href="<?= PROJECT_FOLDER ?>login.php">Se connecter</a></p>
            </div>
        </main>

        <?php
        require_once SITE_ROOT . 'partials/footer.php';
    ?>
    </body>
</html>