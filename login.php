<?php require_once 'utils/common.php';
require_once 'utils/database.php';
$pageName = "login";
if (!empty($_GET)) {
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT user_id, user_mail, user_mdp, user_pseudo, user_signDate, user_currentConnection
        FROM Utilisateur 
        WHERE user_mail = :email
        AND user_mdp = :mdp
    ');
    $pdoStatement->execute([
        ':email' => $_GET['email'],
        ':mdp' => $_GET['password']
    ]);
    $user = $pdoStatement->fetch();
    if ($user) {
        $_SESSION['user'] = [
            "userId" => $user->user_id,
            "pseudo" => $user->user_pseudo,
        ];
        echo "Bienvenue" . " " . $_SESSION['user']['pseudo'];
    } else {
        echo "identifiants inconnus";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<?php
require_once  SITE_ROOT . 'partials/head.php';
?>

<body id="login">
    <?php
    require_once  SITE_ROOT . 'partials/header.php';
    ?>

    <main>
        <!-- /* CRÉATION BANNIÈRE -->
        <div class="title-banner">
            <div>Connexion</div>
        </div>

        <!-- CRÉATION DU FORMULAIRE DE CONNEXION -->
        <div class="banner">
            <form method="get">
                <label for="email"></label>
                <input class="case" type="email" name="email" id="email" placeholder="Email">
                <br>
                <label for="password"></label>
                <input class="case" type="password" name="password" id="password" placeholder="Mot de passe">
                <br>
                <input class="submit" type="submit" value="Connexion" />
            </form>
        </div>

        <div class="lien-inscription">
            <p>Pas de compte ?<a class="lien" href="<?= PROJECT_FOLDER ?>register.php">Créer un compte</a></p>
        </div>
    </main>

    <?php
    require_once  SITE_ROOT . 'partials/footer.php';
    ?>
</body>

</html>