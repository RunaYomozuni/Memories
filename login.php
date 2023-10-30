<!DOCTYPE html>
<html lang="fr">
<?php
        require_once 'partials/head.php';
    ?>

    <body id="login">
    <?php
        require_once 'partials/header.php';
    ?>

        <main>
            <!-- /* CRÉATION BANNIÈRE -->
            <div class="title-banner">
                <div>Connexion</div>
            </div>

            <!-- CRÉATION DU FORMULAIRE DE CONNEXION -->
            <div class="banner">
                <form action="" method="post">
                    <label for="email"></label>
                    <input class="case" type="email" name="email" id="email" placeholder="Email">
                    <br>
                    <label for="password"></label>
                    <input class="case" type="password" name="password" id="password" placeholder="Mot de passe">
                    <br>
                    <input class="submit" type="button" value="Connexion"/>
                </form>
            </div>

            <div class="lien-inscription">
                <p>Pas de compte ?<a class="lien" href="register.html">Se connecter</a></p>
            </div>
        </main>

        <?php
        require_once 'partials/footer.php';
    ?>
    </body>
</html>