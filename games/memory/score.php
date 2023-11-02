<?php require_once '../../utils/common.php';
require_once '../../utils/database.php';
$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('SELECT name_of_the_game, user_pseudo, difficulty, scored,`time`
FROM Score AS S
JOIN Utilisateur AS U 
    ON U.user_id = S.user_id
JOIN jeu AS j
    ON S.id_game = j.id
    
ORDER BY name_of_the_game ASC,
(
    CASE difficulty
        WHEN "facile" THEN 1
        WHEN "normal" THEN 2
        WHEN "difficile" THEN 3
    END), 
    
    scored ASC;');
$pdoStatement->execute();
$score = $pdoStatement->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<?php
require_once SITE_ROOT . 'partials/head.php';
?>

<body id="score">
    <!-- navbar -->
    <?php
    require_once SITE_ROOT . 'partials/header.php';
    ?>

    <main>
        <div class="title-banner">
            <!--Partie bannière-->
            <div>SCORES</div>
        </div>
        <!--Main page score-->
        <div class="tableau">
            <table class="score_table">
                <tr>
                    <th style="width:30%">Pseudo</th>
                    <th style="width:20%">Niveau de difficulté</th>
                    <th>Temps</th>
                    <th>Date et heure</th>
                </tr>

                <?php foreach ($score as $row) { ?>
                    <tr>
                        <td><?= $row->user_pseudo ?>
                            <!-- <img src="<?= PROJECT_FOLDER ?>/assets/images/1erM.png" width="30" height="30" />-->
                        </td>
                        <td><?= $row->difficulty ?></td>
                        <td><?= $row->scored ?>S</td>
                        <td><?= $row->time ?></td>
                    </tr>

                <?php } ?>
                <!-- 
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
                     -->
            </table>
        </div>
    </main>

    <?php
    require_once SITE_ROOT . 'partials/footer.php';
    ?>
</body>

</html>