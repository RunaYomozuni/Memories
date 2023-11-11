<?php require_once 'utils/common.php';
require_once 'utils/database.php';
$pdo = connectToDbAndGetPdo();

$data = $_POST['textarea'];
$id_joueur = $_SESSION['user']['userId'];
$pdoStatement = $pdo->prepare("INSERT INTO messages (id_game, id_sender, message, date_and_hour) 
VALUES (1, '$id_joueur', '$data', CURRENT_TIMESTAMP);");
$pdoStatement->execute();
?>