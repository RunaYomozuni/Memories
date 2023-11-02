<?php require_once 'utils/common.php';
require_once 'utils/database.php';

$passwordPattern = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/';
$namePattern = '/^{4,}$/';

if (isset($_POST['submit'])) {
    if ($_POST['password'] !== $_POST['passwordConfirm']) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
}

if (!empty($_POST)) {
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('INSERT INTO `Utilisateur`(`user_mail`, `user_pseudo` , `user_mdp`)VALUES(:email,:name,:password)');
    $userHasBeenInserted = $pdoStatement->execute([
        ':email' => $_POST['email'],
        ':name' => $_POST['name'],
        ':password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
    ]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<?php
require_once SITE_ROOT . 'partials/head.php';
?>

<body>
    <!-- navbar -->
    <?php
    require_once SITE_ROOT . 'partials/header.php';
    ?>

    <main>
        <div class="title-banner">
            <!--Partie bannière-->
            <div>Inscription</div>
        </div>

        <div class="identifiants">
            <!--Cors de texte de la partie des identifiants-->
            <form method="post">
                <input class="case" type="email" id="email" name="email" placeholder="Email"><br>
                <input class="case" type="text" id="name" name="name" placeholder="Pseudo"><br>
                <input class="case" type="password" id="password" name="password" placeholder="Mot de passe"><br>
                <input class="case" type="password" id="passwordComfirm" name="passwordConfirm" placeholder="Confirmer le mot de passe"><br>
                <input class="submit" type="submit" name="submit" value="Inscription">
            </form>
        </div>
        <div class="lien-connexion">
            <p>Déjà un compte ?<a class="lien" href="<?= PROJECT_FOLDER ?>login.php">Créer un compte</a></p>
        </div>
    </main>

    <?php
    require_once SITE_ROOT . 'partials/footer.php';
    ?>
</body>

</html>