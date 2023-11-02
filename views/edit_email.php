<?php require_once '../utils/common.php';
$pageName = "edit_email";
?>
<!DOCTYPE html>
<html lang="fr">
<?php
        require_once SITE_ROOT.'partials/head.php';
    ?>
    <body id="profil">
    <?php
        require_once SITE_ROOT.'partials/header.php';
    ?>

        <main>
            <!-- /* CRÉATION BANNIÈRE */ -->
            <div class="title-banner">
                <div>MON ESPACE</div>
            </div>

            <div class="espace">
                <table class="tab-form">
                    <tr class="tr-espace">
                        <th class="th-espace"><a class="espace-form-text" href="<?= PROJECT_FOLDER ?>profil.php">Mes infos personnelles</a></th>
                    </tr>

                    <tr class="tr-espace">
                        <th class="th-espace"><a class="espace-form-text" href="<?= PROJECT_FOLDER ?>views/edit_email.php">Changer mon email</a></th>
                    </tr>
                    
                    <tr class="tr-espace">
                        <th class="th-espace"><a class="espace-form-text" href="<?= PROJECT_FOLDER ?>views/edit_mdp.php">Changer mon mot de passe</a></th>
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
        require_once SITE_ROOT.'partials/footer.php';
    ?>
    </body>
</html>