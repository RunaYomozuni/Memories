<?php require_once 'utils/common.php';
require_once 'utils/database.php';
$pdo = connectToDbAndGetPdo();


$id_joueur = $_SESSION['user']['userId'];
$pdoStatement = $pdo->prepare("SELECT message
FROM messages 
WHERE id_sender='$id_joueur' AND date_and_hour >= NOW() - INTERVAL 1 DAY;");
$pdoStatement->execute();
$messages = $pdoStatement->fetchAll();
echo json_encode($messages);
?>
ensuite y'a les liens des pages a mettre dans le <body> dans le fichier index.php :
<?php
    require_once SITE_ROOT . 'partials/header.php';
    require_once SITE_ROOT . 'chat.php';
    ?>