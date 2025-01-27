<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> Eine erste Seite </title>

    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta name="author" content="Luna Meli" />
    <link rel="stylesheet" type="text/css" href="./css/framework.css" />
    <link rel="stylesheet" id="old_style" type="text/css" href="./css/styles-css-only.css" />
    <link rel="stylesheet" id="new_style" type="text/css" href="./css/styles-css-switcher.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
        integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
</head>

<body>

        <div class="side-menu" style="display: none;">
            <h3>Navigation</h3>
            <ul class="side-menu-navigation">
                <li><a href=#>Home </a></li>
                <li><a href=#facts>Portrait </a></li>
                <li><a href=#gallery>Gallerie </a></li>
                <li><a href=#contact>Contact </a></li>
            </ul>
        </div>


        <div class="header">
            <div class="container">
                <div class="header-brand-wrapper">
                    <a class="header-brand" href="index.html.">Photography by Lia</a>
                </div>

                <nav class="header-navbar">
                    <button id="side-menu-trigger"><i class="fas fa-bars"></i></button>
                    <ul class="header-navbar-links">
                        <li><a href=#>Home </a></li>
                        <li><a href=#facts>Portrait </a></li>
                        <li><a href=#gallery>Gallerie </a></li>
                        <li><a href=#contact>Contact </a></li>
                    </ul>

                </nav>

            </div>
        </div>



        <div class="service" id="facts">
            <div class="container">
                <div class="row">
                    <div class="eight columns">
                        <h2> Photography is my passion!</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                            voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="four columns">
                        <div class="service_icon">
                            <i class="fas fa-camera-retro"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="service service-gray">
            <div class="container">
                <div class="row">
                    <div class="four columns">
                        <div class="service_icon">
                            <img src="img/Lia.jpg" class="client-circle client-image" alt="Photgrahper Portrait" />
                        </div>
                    </div>
                    <div class="eight columns">
                        <h2> Also colorful fluffy pompoms are the result of torturing an animal!</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                            voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <div class="feature-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="feature-text">
                            <a class="h6" href="https://www.instagram.com/daphy.s/?hl=de">Find us on Instagram!</a>
                        </div>
                    </div>
                    <div class="six columns">
                        <div class="feature-icon">
                            <i class="far fa-money-bill-alt"></i>
                        </div>
                        <div class="feature-text">
                            <a class="h6" href="donate.html.">Prices</a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <div class="feature-icon">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="feature-text">
                            <a class="h6"
                                href="https://www.facebook.com/lia.schmidt.503/photos_all?sk=wall&lst=1603764994%3A100006210728416%3A1542912070">Find
                                us on facebook!</a>
                        </div>
                    </div>
                    <div class="six columns">
                        <div class="feature-icon">
                            <i class="far fa-images"></i>
                        </div>
                        <div class="feature-text">
                            <a class="h6" href="gallery.html.">Gallerie</a>
                        </div>

                    </div>

                </div>
            </div>

    </div>
    
    <div class="galery" id="gallery">
        <div class="container">
            <div class="row">
                <div class="six columns">
                    <div class="galery-icon">
                        <img src="img/Women/Women.jpg" class="client-circle client-image" alt="Women Portrait" />
                    </div>
                    <div class="galery-text">
                        <a class="h6" href="facts.html.">Women</a>
                    </div>
                </div>
                <div class="six columns">
                    <div class="galery-icon">
                        <img src="img/Men/Men2.jpg" class="client-circle client-image" alt="Women Portrait" />
                    </div>
                    <div class="galery-text">
                        <a class="h6" href="donate.html.">Men</a>
                    </div>

                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="six columns">
                    <div class="galery-icon">
                        <img src="img/Landscape.jpg" class="client-circle client-image" alt="Beautiful Landscape" />
                    </div>
                    <div class="galery-text">
                        <a class="h6" href="https://www.facebook.com/pg/antipelz/about/?ref=page_internal">Landscape</a>
                    </div>
                </div>
                <div class="six columns">
                    <div class="galery-icon">
                        <img src="img/Animal.jpg" class="client-circle client-image" alt="Animals" />
                    </div>
                    <div class="galery-text">
                        <a class="h6">Animals</a>
                    </div>

                </div>


            </div>

        </div>
    </div>
    <div class="clients" id="quotes">
        <div class="container">
            <h2 class="clients-heading"> Quotes </h2>
            <p class="clients-subheading">Bla bla bla bla bla</p>
            <div class="row">
                <div class="three columns">
                    <img src="img/client1.jpg" class="client-circle client-image" alt="Osbourne" />
                </div>
                <div class="nine columns">
                    <div class="client-quote">
                        <p> " When I see you waring fur & using it as a fashion statement, the fact that defensless
                            animals have been killed so you can get picture in the press is abhorrent to me."</p>
                        <p class="client-quote-author">
                            <img src="img/client1.jpg" class="client-quote-image" alt="Stella McCarteney" />
                            - Sharon Osbourne
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="nine columns">
                    <div class="client-quote-2">
                        <p> " There is no excuse for fur in this days and age ."</p>
                        <p class="client-quote-author">
                            <img src="img/client1.jpg" class="client-quote-image" alt="Stella McCarteney" />
                            - Stella McCartney
                        </p>

                    </div>
                </div>
                <div class="three columns">
                    <img src="img/client1.jpg" class="client-circle client-image" alt="Stella McCarteney" />
                </div>

            </div>
        </div>
    </div>
    

    <div class="newModels" id="models">
        <div class="container">
            <div class="row">
                <div class="six columns">
                    <div id="canvas">
                        <canvas id="myCanvas" height="225" width="225"></canvas>
                    </div>
                </div>
                <div class="six columns">
                    <div id="application">
                        <h2>Bewirb dich jetzt!</h2>
                        <p>Wir sind ständig auf der Suche nach neuen Models</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="diashow" id="diashow">
            <div class="container">
                    <div>
                        <h2 class="diashow-heading"> Diashow </h2>
                    </div>
            
                </div>
            
                <div class="container">
            
            
                    <div class="content_diashow">
                        <img class="img-diashow" src="img/Women/Women1.jpg" style="width:60%"</img>
                        <img class="img-diashow" src="img/Women/Women.jpg" style="width:60%" </img>
                        <img class="img-diashow" src="img/Women/Women1.jpg" style="width:60%"</img>
                        <img class="img-diashow" src="img/Women/Women.jpg" style="width:60%"</img>
            
            
            
                        <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
                    </div>
            
                </div>




    </div>
    <div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="columns six">
                    <h2 class="contact-heading"> Questions?</h2>
                    <p class="contact-subheading">Say Hello. Comments and feedback are welcome!</p>
                    <ul class="contact-methods">
                        <li>
                            <span class="contact-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </span>
                            +41 79 695 18 93
                        </li>
                        <li>
                            <span class="contact-icon">
                                <i class="fas fa-at"></i>
                            </span>
                            luna.serena@bluewin.ch
                        </li>
                        <li>
                            <span class="contact-icon">
                                <i class="fab fa-facebook-square"></i>
                            </span>
                            <a class="h6"
                                href="">facebook.com
                            </a>
                        </li>
                        <li>
                            <span class="contact-icon">
                                <i class="fab fa-instagram"></i>
                            </span>
                            <a class="h6" href="">instagram.com</a>
                        </li>

                    </ul>
                </div>
                

                <div class="columns six">
                    <?php if (isset($_GET['contacted'])): ?>
                                <p>Das Formular wurde erfolgreich abgeschickt.</p>
                    <?php endif; ?>

                    <form class="contact-form" action="form.php" methods="POST">
                        <label for="contact-name" class="contact-label">Your Name *</label>
                        <input name="name" id="contact-name" class="contact-input" type="text" placeholder="Your Name *"
                            required="required" />

                        <label for="contact-email" class="contact-label">Your Email* </label>
                        <input name="email" id="contact-email" class="contact-input" type="text"
                            placeholder="Your Email *" required="required" />

                        <label for="contact-message" class="contact-label">Your message * </label>
                        <textarea name="message" class="contact-input contact-message" placeholder="Your message *" 
                           required="required"></textarea>
                        <input class="contact-submit" id="contact-message" type="submit" value="Submit message"/>
                    </form>


                </div>
            </div>
        </div>



    </div>
    <div class="footer">
        <div class="container">
            <hr />
            <i class="far fa-copyright"></i>Luna Meli <a href="#">Nach oben</a>
        </div>
        <div class="styleswitcher" id="styleswitcher">
            <button onclick="changeActiveStyle()">Switcher<i class="styleswitcher"></i></button>
        </div>
    </div>

    <script src="index.js"></script>
    <script src="./vendor/jquery-3.2.0/jquery-3.3.1.js"></script>
    <script src="./vendor/jpanelmenu/jquery.jpanelmenu.js"></script>
    <script src="./vendor/modernizr/modernizr-custom.js"></script>

    

    <!-- Navigation animieren -->
    <script>
        jQuery(document).ready(function ($) {
            var jPM = $.jPanelMenu({ menu: '.side-menu', trigger: '#side-menu-trigger', direction: 'right' });
            jPM.on();

            $(".side-menu a").click(function () {
                jPM.close();
            });

        });
    </script>

    <!-- Canvas zeichnen + Animation -->
    <script>
        var mainCanvas = document.querySelector("#myCanvas");
        var mainContext = mainCanvas.getContext("2d");
        var canvasWidth = mainCanvas.width;
        var canvasHeight = mainCanvas.height;
        var angle = 0;


        var requestAnimationFrame = window.requestAnimationFrame || //
            window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.msRequestAnimationFrame;

        function drawCircle() {
            mainContext.clearRect(0, 0, canvasWidth, canvasHeight);

            // Hintergrund
            mainContext.fillStyle = "rgb(245, 245, 245)";
            mainContext.fillRect(0, 0, canvasWidth, canvasHeight);

            // Kreis zeichnen
            mainContext.beginPath();

            var radius = 12.5 + 75 * Math.abs(Math.cos(angle)); //Variation des Radius
            mainContext.arc(112.5, 112.5, radius, 0, Math.PI * 2, false);

            mainContext.closePath();



            // Kreis mit Farbe füllen 

            mainContext.fillStyle = "rgb(118,143,197)";
            mainContext.fill();

            angle += Math.PI / 64;

            requestAnimationFrame(drawCircle);

        }
        drawCircle();


    </script> -->

    <!--Slideshow -->

<script type="text/javascript">
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("img-diashow");
        if (n > x.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = x.length };
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>



    <!-- Style Switcher ohne Cookie
    

        jQuery(document).ready(function () {
            var getStyle = 0;
          $("#styleswitcher").click(function(){
              $(".contact, .clients").css("background-color", " rgb(119,147,197)");
              getStyle = 1;
              
            });

        }); -->

        <script>

    //Sytleswitcher

    // Funktion um den aktiven Style der Site zu wechseln, indem geprüft wird welcher gerade aktiv ist
function changeActiveStyle() {
    // Abfragen ob das Stylesheet 'old_style' im moment aktiv ist
    if (document.getElementById('old_style').disabled === false) {
        document.getElementById('old_style').disabled = true; //old_style wird deaktiviert
        document.getElementById('new_style').disabled = false;//new_style wird aktiviert
    } else {
        // falls 'old_style' deaktiviert ist, wird 'new_style' deaktiviert und 'old_style' aktiviert
        document.getElementById('new_style').disabled = true;
        document.getElementById('old_style').disabled = false;
    }
}
 
// Funktion um den momentan aktiven Style der Site abzufragen
function getActiveStyle() {
    var activeStyle;
    // Abfragen ob das Stylesheet 'new_style' im moment aktiv ist
    if (document.getElementById('new_style').disabled === false) {
        // falls 'new_style' aktiv ist, wird der Wert 1 in die Variable activeStyle geschrieben
        activeStyle = 1;
    } else if (document.getElementById('old_style').disabled === false)  {
        activeStyle = 2;
    }
    else{
        alert("Fehler!");
    }
    // die Funktion gibt den zum aktien zugehörigen Wert zurück
    return activeStyle;
}



    // Cookie speichern

    function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    // im Cookie steht nachher ein String! mit dem Inhalt "CNAME=CVALUE; DATUM"
    document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
}

//Cookie lesen

function getCookie(cname) {
    /* Der String im Cookie wird bei ";" aufgeteilt; es entsteht ein Array mit den beiden 
    Teilen "CNAME=CVALUE" und " DATUM" */
    var ca = document.cookie.split(';');
    /* das erste Arrayelement "CNAME=CVALUE" wird bei "=" aufgeteilt; es entsteht ein weiteres Array mit
    den beiden Teilen "CNAME" und "CVALUE" */
    var cb = ca[0].split('=');
    // das zweite Arrayelement "CVALUE" wird auf seinen Inhalt überprüft; der Inhalt ist immernoch ein String!
    if (cb[1] === "1") {
        // Ist der Inhalt "1", wurde 'new_style' verwendet
        var value = 1;
        return value;
    } else {
        // Ist der Inhalt "2", wurde 'old_style' verwendet
        value = 2;
        return value;
    }
}

// onload und onunload Handling
 
/* Funktion wird beim Laden der Seite ausgeführt, überprüft den zuletzt genutzten Style
und stellt diesen wieder ein */
window.onload = function () {
    // der Inhalt des Cookies wird abgefragt
    var savedStyle = getCookie("style");
    
    if (savedStyle === 1) {
        // 'new_style' aktivieren
        document.getElementById('old_style').disabled = true;
        document.getElementById('new_style').disabled = false;
    }
    else if (savedStyle === 2) {
        // 'old-style' aktivieren
        document.getElementById('new_style').disabled = true;
        document.getElementById('old_style').disabled = false;
    }
};
 
// Funktion wird beim Verlassen der Seite ausgeführt und speichert den momentan genutzten Style im Cookie
window.onunload = function () {
    // den momentanen Style abfragen
    var style = getActiveStyle();
    // den momentanen Style in das Cookie speichern
    setCookie("style", style, 365);
};


    
    </script>
</body>

</html>