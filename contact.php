<!DOCTYPE html>
<html lang="fr">
<?php
        require_once 'partials/head.php';
    ?>

    <body id="contact">
    <?php
        require_once 'partials/header.php';
    ?>
    
        <main>
            <!-- /* CRÉATION BANNIÈRE -->
            <div class="title-banner">
                <div>NOUS CONTACTER</div>
            </div>

            <!-- /* -- CASES INFORMATIONS -- */ -->

            <div class="bg-info">
                <div class="box1">
                    <div class="item1">
                        <div class="item1-1"><i class="fa-solid fa-mobile-screen-button"></i></div>
                        <p class="color-info">06 05 04 03 02</p>
                    </div>
                </div>
                <div class="box2">
                    <div class="item2">
                        <div class="item2-1"><i class="fa-regular fa-envelope"></i></div>
                        <p class="color-info">support@powerofmemory.com</p>
                    </div>
                </div>
                <div class="box3">   
                    <div class="item3">
                        <div class="item3-1"><i class="fa-solid fa-location-dot"></i></div>
                        <p class="color-info">Paris</p>
                    </div>
                </div>
                <script src="https://kit.fontawesome.com/f09ae54942.js" crossorigin="anonymous"></script>
            </div>

            <!-- /* -- FORMULAIRE -- */ -->

            <div class="form-contact">
                <form action="" method="post">
                    <div class="two-case">
                        <label for="name"></label>
                        <input class="case-contact" type="text" name="name" id="name" placeholder="Nom">
                        <label for="email"></label>
                        <input class="case-contact" type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <br>
                    <div>
                        <label for="sujet"></label>
                        <input class="case-sujet" type="text" name="sujet" id="sujet" placeholder="Sujet">
                        <br>
                        <textarea class="case-message" name="message" id="message" cols="56" rows="7" placeholder="Message"></textarea>
                    </div>
                    <br>
                    <div>
                        <input class="submit-contact" type="button" value="Connexion"/>
                    </div>
                </form>
            </div>
        </main>

        <?php
        require_once 'partials/footer.php';
    ?>
    </body>
</html>