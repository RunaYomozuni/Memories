<?php
require_once '../../utils/common.php';
?>
<!DOCTYPE html>
<html lang="fr">
<?php
        require_once SITE_ROOT.'partials/head.php';
    ?>
    <body id="score">
        <!-- navbar -->
        <?php
        require_once SITE_ROOT.'partials/header.php';
    ?>
        
        <main>
            <div class="title-banner">
            <!--Partie bannière-->
                <div>SCORES</div>
            </div>
            <!--Main page score-->
            <div class="tableau">
                <table class="score_table" >
                    <tr>
                        <th style="width:30%">Pseudo</th>
                        <th style="width:20%">Niveau de difficulté</th>
                        <th>Temps</th>
                        <th>Date et heure</th>
                    </tr>
                    <tr>
                        <td>Joueur 1 <img src="<?= PROJECT_FOLDER ?>/assets/images/1erM.png" width="30" height="30" /></td>
                        <td>Facile</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                    <tr>
                        <td>Joueur 2 <img src="<?= PROJECT_FOLDER ?>/assets/images/2eM.png" width="30" height="30" /></td>
                        <td>Moyen</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                    <tr>
                        <td>Joueur 3 <img src="<?= PROJECT_FOLDER ?>/assets/images/3eM.png" width="30" height="30" /></td>
                        <td>Difficile</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                    <tr>
                        <td>Joueur 4</td>
                        <td>Facile</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                    <tr>
                        <td>Joueur 5</td>
                        <td>Moyen</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                    <tr>

                        <td>Joueur 6</td>
                        <td>Difficile</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                    <tr>
                        <td>Joueur 7</td>
                        <td>Facile</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                    <tr>
                        <td>Joueur 8</td>
                        <td>Moyen</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                    <tr>
                        <td>Joueur 9</td>
                        <td>Difficile</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                    <tr>
                        <td>Joueur 10</td>
                        <td>Facile</td>
                        <td>00:00:00s</td>
                        <td>JJ/MM/AAAA 00:00</td>
                    </tr>
                </table>
            </div>
        </main>

        <?php
        require_once SITE_ROOT.'partials/footer.php';
    ?>
    </body>
</html>