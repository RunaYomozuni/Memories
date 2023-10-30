<!DOCTYPE html>
<html lang="fr">
<?php
        require_once 'partials/head.php';
    ?>
    <body>
    <?php
        require_once 'partials/header.php';
    ?>

        <main>
            <!-- /* CRÉATION BANNIÈRE */ -->
            <div class="title-banner">
                <div>MON ESPACE</div>
            </div>

            <div class="espace">
                <table class="tab-form">
                    <tr class="tr-espace">
                        <th class="th-espace"><a class="espace-form-text" href="./profil.html">Mes infos personnelles</a></th>
                    </tr>

                    <tr class="tr-espace">
                        <th class="th-espace"><a class="espace-form-text" href="./edit_email.html">Changer mon email</a></th>
                    </tr>
                    
                    <tr class="tr-espace">
                        <th class="th-espace"><a class="espace-form-text" href="./edit_mdp.html">Changer mon mot de passe</a></th>
                    </tr>
                </table>

                <div class="banner-profil">
                    <form class="form-profil" action="" method="post">
                        <label for="email"></label>
                        <input class="case" type="email" name="email" id="email" placeholder="Nouvel email">
                        <br>
                        <input class="submit-profil" type="button" value="Confirmer"/></div>
                    </form>
                </div>
            </div>
        </main>

        <?php
        require_once 'partials/footer.php';
    ?>
    </body>
</html>