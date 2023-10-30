<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon espace</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar">
                <h1><a href="../index.html" id="not">The Power Of Memory</a></h1>
                <ul class="navElements">
                    <li><a href="../index.html">ACCUEIL</a></li>
                    <li><a href="../views/Jeu.html">JEU</a></li>
                    <li><a href="../views/score.html">LES SCORES</a></li>
                    <li><a href="../views/contact.html">NOUS CONTACTER</a></li>
                    <li><a href="../views/profil.html">MON ESPACE</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <!-- /* CRÉATION BANNIÈRE */ -->
            <div class="title-banner">
                <div>MON ESPACE</div>
            </div>

            <div class="espace">
                <table class="tab-form">
                    <tr class="tr-espace">
                        <th class="th-espace"><a class="espace-form-text" href="./profil.html">Mes infos personnelles</a></th>
                    </tr>

                    <tr class="tr-espace">
                        <th class="th-espace"><a class="espace-form-text" href="./edit_email.html">Changer mon email</a></th>
                    </tr>
                    
                    <tr class="tr-espace">
                        <th class="th-espace"><a class="espace-form-text" href="./edit_mdp.html">Changer mon mot de passe</a></th>
                    </tr>
                </table>

                <div class="banner-profil">
                    <form class="form-profil" action="" method="post">
                        <label for="email"></label>
                        <input class="case" type="email" name="email" id="email" placeholder="Nouvel email">
                        <br>
                        <input class="submit-profil" type="button" value="Confirmer"/></div>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <div class="ap5">
                <div class="ap1">
                    <div class="ap3">
                        <p class="title-foot">Infomation</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><span>Tél :</span> 06 05 04 03 02</p>
                        <p><span>Email :</span> support@powerofmemory.com</p>
                        <p><span>Location :</span> Paris</a></p>
                    </div>
                    <div class="logo-sm">
                        <script src="https://kit.fontawesome.com/f09ae54942.js" crossorigin="anonymous"></script>
        
                        <a href="facebook.com"><div class="logo"><i class="fa-brands fa-facebook" style="color: #fafcff;"></i></div></a>
                        <a href="twitter.com"><div class="logo"><i class="fa-brands fa-x-twitter" style="color: #fafcff;"></i></div></a>
                        <a href="google.com"><div class="logo"><i class="fa-brands fa-google-plus" style="color: #fafcff;"></i></div></a>
                        <a href="pinterest.com"><div class="logo"><i class="fa-brands fa-pinterest" style="color: #fafcff;"></i></div></a>
                        <a href="instagram.com"><div class="logo"><i class="fa-brands fa-instagram" style="color: #fafcff;"></i></div></a>
                    </div>
                </div>
        
        
                <div class="ap2">
                    <div class="ap4">
                        <p class="title-foot">Power Of Memory</p>
                        <ul class="list-ap">
                            <li><a class="underline" href="../views/Jeu.html">Jouer !</a></li>
                            <li><a class="underline" href="../views/score.html">Les scores</a></li>
                            <li><a class="underline" href="../views/contact.html">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="contentDeepFooter">
                <p>Copyright &copy 2022 Tous droits réservés</p>
                <a href="#top"><div id="onTop"><i class="fa-solid fa-chevron-up"></i></div></a>
            </div>
        </footer>
    </body>
</html>