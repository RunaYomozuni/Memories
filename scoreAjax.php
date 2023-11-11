<?php require_once '../../utils/common.php';
require_once '../../utils/database.php';

$joueurId = $_SESSION['id_joueur'];
$difficult = $_POST['difficulte'];
$score = $_POST['score_joueur'];

$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('INSERT INTO Score (user_id, difficulty, scored) VALUES ($joueurId, $difficult, $score)');
$userHasBeenInserted =  $pdoStatement->execute([
    ':user_id' => $user_id,
    ':difficulty' => $difficulty,
    ':scored' => $scored,
]);
