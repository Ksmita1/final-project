<?php
    require __DIR__ . '/scripts/app.php';
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baigiamasis projektas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://kit.fontawesome.com/6c0c080e32.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <script>
        function myFunction() {
            let x = document.getElementById("mMenu");
            if (x.style.display == "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>

</head>
<body>

    <!--headeris-->

    <header class="site-header">
        <div class="container flex-container">

            <!--logotipas-->

            <div class="logo">
               <a href="#"><img src="images/logotipas/logotipas.png" alt="Elnio logotipas"></a>
            </div>

            <!--tekstas-->

            <div class="main-text">
                <h1>Šmitų elnių ūkis</h1>
            </div>

            <!--navigacija-->

            <nav class="dropdown">
                <button class="dropbtn">&middot; meniu</button>
                <div class="dropdown-content">
                    <a href="#">Pagrindinis</a>
                    <a href="#">Apie mus</a>
                    <a href="#">Naujienos</a>
                    <a href="#">Nuotraukų galerija</a>
                    <a href="#">Šiuo metu siūlome</a>
                    <a href="#">Kur mus rasti?</a>
                </div>
            </nav>

            <!--mobili navigacija-->

            <nav class="mobile-nav">
                <div id="mMenu" class="dropdown-content">
                    <a href="#">Pagrindinis</a>
                    <a href="#">Apie mus</a>
                    <a href="#">Naujienos</a>
                    <a href="#">Nuotraukų galerija</a>
                    <a href="#">Šiuo metu siūlome</a>
                    <a href="#">Kur mus rasti?</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>

            <!--search-->

            <nav class="search">
                <input type="text" placeholder="&middot; Ieškoti...">
            </nav>
        </div>
    </header>

    <!--Centrinė hero dalis-->

    <section class="hero">
        <div class="container">
            <h2>Šmitų elnių ūkis</h2>
            <p>Auginame tauruosius elnius bei danielius!</p>

            <!--language select mygtukas-->

            <div class="lang-select"> <!--pasitvarkyti pozicija, nes mobiliuosiuose įrenginiuose, išlenda iš section skyrelio-->
                <select>
                    <option value="0">Pasirinkite kalbą:</option>
                    <option value="1">LT</option>
                    <option value="2">EN</option>
                    <option value="3">RU</option>
                </select>
            </div>
        </div>
    </section>

    <!--Apie skiltis-->

   <section class="about-us">
        <div class="container">
            <h2>
                Šmitų elnių ūkis - tai šeimos valdomas elnių ūkis.
                Ūkis įkurtas 2011 metais.
                Turime įsirengę gaudykles, todėl gaudant gyvūnus jie patiria mažiau streso.
                Auginame ir parduodame (bei pristatome) Tauruosius elnius bei Danielius.
            </h2>
            <p> <!--sutvarkyti, kad suskleidžiant ekraną, nedigtų p tekstas / pamėginti FLOAT funkciją float right-->
                Šiuo metu turime apie 300 Tauriųjų elnių bei 50 Danielių pardavimui.
                Dėl platesnės informacijos, atsiskaitymų ar pristatymų prašome kreiptis tiesiogiai:
                <a href="tel:+17064634897">+370 646 34897</a>
            </p>
        </div>
    </section>

        <!--foto galerija-->

    <section class="photo-galery"> <!--Pasiklausti kaip pakeisti navAsThumbnails spalvą-->
        <div class="container">
            <div class="section-heading">
                <h2>Foto galerija</h2>
            </div>
            <div class="foto-slider">
                <div class="">
                    <img class="myImages" id="myImg" src="images/slider/big-1.jpg" alt="Taurusis elnias" width="350" height="200">
                    <h3>Kaip mano nauja šukuosena?</h3>
                </div>
                <div class="">
                    <img class="myImages" id="myImg" src="images/slider/big-2.jpg" alt="Taurusis elnias" width="350" height="200">
                    <h3>Žieminiai ragai</h3>
                </div>
                <div class="">
                    <img class="myImages" id="myImg" src="images/slider/big-3.jpg" alt="Danieliai" width="350" height="200">
                    <h3>I am fabulous!</h3>
                </div>
                <div class="">
                    <img class="myImages" id="myImg" src="images/slider/big-4.jpg" alt="Taurieji elniai" width="350" height="200">
                    <h3>Jonai kur tu? Nerandu tavęs!</h3>
                </div>
                <div class="">
                    <img class="myImages" id="myImg" src="images/slider/big-5.jpg" alt="Taurusis elnias" width="350" height="200">
                    <h3>:P</h3>
                </div>
                <div class="">
                    <img class="myImages" id="myImg" src="images/slider/big-6.jpg" alt="Mažylis danielius" width="350" height="200">
                    <h3>Mažiukai :)</h3>
                </div>
                <div class="">
                    <img class="myImages" id="myImg" src="images/slider/big-7.jpg" alt="Taurieji elniai" width="350" height="200">
                    <h3>Vyrų kova!</h3>
                </div>
                <div class="">
                    <img class="myImages" id="myImg" src="images/slider/big-8.jpg" alt="Danielius" width="350" height="200">
                    <h3>Bandos vadas</h3>
                </div>
            </div>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>   
        </div>
    </section>

    <!--Naujienų skiltis-->

    <section class="news-section">
        <div class="container">
            <div class="section-heading">
                <h2> Naujienos</h2>
            </div>
            <div class="section-content flex-container">
                <div class="news">
                    <a href="#"><img src="images/naujienos/naujienos-1.jpg" alt="Mažas šuo"></a>
                    <h3>Elnių ūkis turi naują sargybinį!</h3>
                    <p>Nors dar ir mažas, bet žiauriai galingas! :)</p>
                </div>
                <div class="news">
                    <a href="#"><img src="images/naujienos/naujienos-2.jpg" alt="Suaugęs šuo"></a>
                    <h3>Elnių ūkio sargybinis jau užaugo!</h3>
                    <p>Praėjo net visi šeši mėnesiai, bet mūsų sargybinis pagaliau užaugęs.</p>
                </div>
                <div class="news">
                    <a href="#"><img src="images/naujienos/naujienos-3.jpg" alt="Katė vairuoja traktorių"></a>
                    <h3>Ar katinai gali vairuoti?</h3>
                    <p>Šmitų elnio ūkio katinas gali! :)</p>
                </div>
            </div>
        </div>
    </section>

    <!--kontaktinė forma-->

    <section class="contact">
        <div class="container">
            <div class="section-heading">
                <h2>Susisiekite</h2>
                <p>Tel. Nr: <a href="tel:+37064634897">+370 646 34897</a></p><br>
                <address>
                    Mus rasite:<br>
                    Ręsčių k. 4,<br>
                    Šilalės raj. Laukuvos sen.
                </address>
            </div>

            <!--forma-->

            <div class="section-content">
               <form class="contact-form" action="index.php" method="post">
                    <div class="input-row">
                        <input type="text" name="vardas" placeholder="Vardas Pavardė" required>
                        <input type="email" name="email" placeholder="El. paštas" required>
                    </div>
                    <textarea name="message" rows="8" placeholder="Jūsų žinutė" required></textarea>
                    <input class="btn btn-form" type="submit" id="contact-submit" name="submit" value="Siųsti">
                </form>
            </div>
        </div>
    </section>

    <!--Footeris-->

    <footer class="footer">
        <div class="container">
            <nav class="nav footer-nav">

                <!--nuorodos į socialinius tinklus-->

                <ul class="flex-container">
                    <li><a href="https://www.facebook.com/smitoselniuukis.gintas.1">Facebook</a></li>
                </ul>
            </nav>
            <div class="footer-text">
                <p>Šmitų elnių ūkis © 2021</p>
            </div>
        </div>
    </footer>

    <script src="scripts/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="scripts/foto-slider.js"></script>
    <script src="scripts/lang-change.js"></script>

</body>
</html>