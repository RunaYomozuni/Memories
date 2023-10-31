<header>
    <nav>
        <h2>The Power Of Memory</h2>

        <div class="navbar-links">    
            <?php if ($pageName == 'accueil') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>index.php">ACCUEIL</a></li>
                <?php
            } else {
                ?>
                <li><a href="<?= PROJECT_FOLDER ?>index.php">ACCUEIL</a></li>
                <?php 
            }
            ?>

            <?php if ($pageName == 'game') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>games/memory/index.php">JEU</a></li>
                <?php
            } else {
                ?>
                <li><a href="<?= PROJECT_FOLDER ?>games/memory/index.php">JEU</a></li>
                <?php 
            }
            ?>

            <?php if ($pageName == 'score') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>games/memory/score.php">LES SCORES</a></li>
                <?php
            } else {
                ?>
                <li><a href="<?= PROJECT_FOLDER ?>games/memory/score.php">LES SCORES</a></li>
                <?php 
            }
            ?>

            <?php if ($pageName == 'contact') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>contact.php">NOUS CONTACTER</a></li>
                <?php
            } else {
                ?>
                <li><a href="<?= PROJECT_FOLDER ?>contact.php">NOUS CONTACTER</a></li>
                <?php 
            }
            ?>

            <?php if ($pageName == 'profil') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>profil.php">MON ESPACE</a></li>
                <?php
            } else {
                ?>
                <li><a href="<?= PROJECT_FOLDER ?>profil.php">MON ESPACE</a></li>
                <?php 
            }
            ?>
            
            <?php if ($pageName == 'login') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>login.php">SE CONNECTER</a></li>
                <?php
            } elseif ($pageName == 'register') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>register.php">SE CONNECTER</a></li>
                <?php 
            } else {
                ?>
                <li><a href="<?= PROJECT_FOLDER ?>login.php">SE CONNECTER</a></li>
                <?php 
            }
            ?>

            <?php if ($pageName == 'register') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>register.php"></a></li>
                <?php
            } else {
                ?>
                <li><a href="<?= PROJECT_FOLDER ?>register.php"></a></li>
                <?php 
            }
            ?>

            <?php if ($pageName == 'edit_email') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>profil.php"></a></li>
                <?php
            } else {
                ?>
                <li><a href="<?= PROJECT_FOLDER ?>profil.php"></a></li>
                <?php 
            }
            ?>

            <?php if ($pageName == 'edit_email') {
                ?>
                <li><a class="onglet-color" href="<?= PROJECT_FOLDER ?>profil.php"></a></li>
                <?php
            } else {
                ?>
                <li><a href="<?= PROJECT_FOLDER ?>profil.php"></a></li>
                <?php 
            }
            ?>

            <!-- CORRIGER LES LIENS (EDIT_EMAIL) et (eDIT_MDP) + RECTIFIER LR CSS -->

        </div>
    </nav>
</header>