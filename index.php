<?php require_once '../../utils/common.php';
?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<?php
        require_once SITE_ROOT . 'partials/head.php';
    ?>

    <body id="acceuil">
        <div id="grandeImage">
        <?php
        require_once SITE_ROOT . 'partials/header.php';
    ?>
    
    <main>
        <section id="intro">
            <article>
                <h1>bienvenue dans notre studio !</h2>
                <p>Venez challeger les cerveaux les plus agiles !</p>
                <a href="../Memories/views/Jeu.html"><button>Jouer !</button></a>
            </article>
        </section>
    </div>
        <div id="container">
        <section id="contenu">
            <div id="galerie">
                <img src="assets/images/gengar.jpeg" alt="">
                <img src="assets/images/gravityFalls.jpeg" alt="">
                <img src="assets/images/wormHole.jpeg" alt="">
            </div>
            <div id="lorem">
            <article>
                <span>01</span>
                <div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ullam asperiores culpa eligendi perspiciatis assumenda quos distinctio delectus necessitatibus. Molestias sequi illo deserunt? Tempora, doloribus? Eius perferendis ab molestias doloribus?</p>
                </div>
            </article>

            <article>
                <span>02</span>
                <div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ullam asperiores culpa eligendi perspiciatis assumenda quos distinctio delectus necessitatibus. Molestias sequi illo deserunt? Tempora, doloribus? Eius perferendis ab molestias doloribus?</p>
                </div>
                </article>

            <article>
                <span>03</span>
                <div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ullam asperiores culpa eligendi perspiciatis assumenda quos distinctio delectus necessitatibus. Molestias sequi illo deserunt? Tempora, doloribus? Eius perferendis ab molestias doloribus?</p>
                </div>
            </article>
        </div>

            <div id="containerChiffre">
                <div id="imgChiffre">
                    <img src="assets/images/purple.jpeg" alt="">
                </div>
                <div id="chiffreCle">
                    <div id="parties"><span>310</span><p>Parties Jouées</p></div>
                    <div id="connecter"><span>1020</span><p>Joueurs Connectés</p></div>
                    <div id="record"><span>10 sec</span><p>Temps Record</p></div>
                    <div id="inscrits"><span>21 300</span><p>Joueurs Inscrits</p></div>
                </div>
            </div>

        </section>

        <section id="equipe">
            <h4>Notre Équipe</h4>
            <span>Quisque commodo facilisis purus. interdum volutoat arcu viverra seg</span>
            <hr class="accessory"/>
            <div id="equipes">
        <div class="equipe">
            <img src="assets/images/saturn.jpeg" alt="">
            <span>hamilton</span>
            <p>Games developer</p>
            <div class="reseaux">
                <ul>
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-pinterest"></i></li>
                </ul>
            </div>
        </div>
    
        <div class="equipe">
            <img src="assets/images/neptune.jpeg" alt="">
            <span>mickhel</span>
            <p>Games developer</p>
            <div class="reseaux">
                <ul>
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-pinterest"></i></li>
                </ul>
            </div>
            </div>

            <div class="equipe">
                <img src="assets/images/jupiter.jpeg" alt="">
                <span>arnold</span>
                <p>Games developer</p>
                <div class="reseaux">
                    <ul>
                        <li><i class="fa-brands fa-facebook"></i></li>
                        <li><i class="fa-brands fa-twitter"></i></li>
                        <li><i class="fa-brands fa-pinterest"></i></li>
                    </ul>
                </div>
            </div>
        
        </section>
    </div>
    </main>
    <?php
        require_once  SITE_ROOT . 'partials/footer.php';
    ?>
    </body>
</html>