<!DOCTYPE html>
<html lang="fr">
<?php
        require_once 'partials/head.php';
    ?>
    <body id="profil">
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

                <!-- INFOS PERSO PAGE -->

                <div class="perso-info">
                    <div class="perso-box1">
                        <div class="perso-prenom">
                            <h5>Prénom</h5>
                            <p class="perso-prenom-case">First Name</p>
                        </div>

                        <div class="perso-name">
                            <h5>Nom</h5>
                            <p class="perso-name-case">Last Name</p>
                        </div>
                    </div>
                    <div class="perso-box2">
                        <div class="perso-email">
                            <h5>Adresse email</h5>
                            <p class="perso-email-case">user@memories.com</p>
                        </div>

                        <div class="perso-num">
                            <h5>Numéro</h5>
                            <p class="perso-num-case">06 05 04 03 02</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php
        require_once 'partials/footer.php';
    ?>
    </body>
</html>