<?php 
require_once 'utils/common.php';
require_once 'utils/database.php';
use function PHPSTORM_META\type;
$pageName = "chat";
$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('SELECT message, user_pseudo, date_and_hour, user_id = 1 AS isSender
FROM messages 
LEFT JOIN Utilisateur AS U
ON U.user_id = messages.id_sender 
WHERE date_and_hour >= NOW() - INTERVAL 1 DAY;
');
$pdoStatement->execute();
$messages = $pdoStatement->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">


<body id="chat">
    <div id="chatPopup" class="chat-popup">
        <div id="chatHeader" class="chat-header">
            <span>Chat of PowerOfMemory</span>
            <button id="closeChat" class="close-button">X</button>
        </div>
        <div id="chatMessages" class="chat-messages">
            <!-- Les messages du chat s'afficheront ici -->

                <?php foreach ($messages as $row) { ?>
                    <div class="senderMessages">
                        <p><?= $row->user_pseudo ?> : <?= $row->message ?></p>
                    </div>
                <?php } ?>

                <div id="userMessages">
                    <div id="user-message"></div>
                </div>
        </div>
        <form id="sendForm">
            <input id="message" class="message-input" placeholder="Entrer votre message ici">
            <!-- <textarea name="" id="message" class="message-input" cols="30" rows="1" ></textarea> -->
            <button type="submit"  id="sendMessage" class="send-button" >Envoyer</button>
        </form>
    </div>

    <button id="openChat" class="open-chat-button">Ouvrir le chat</button>
    <script src="../../assets/js/chat.js"></script>

</body>
</html>