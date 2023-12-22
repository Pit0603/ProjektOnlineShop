<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../Icons/DragonIcon.png">
        <title>Dragon Egg Emporium</title>
        <link rel="stylesheet" href="../css/styleCoolDragons.css">
        <script src="/JavaScript/login_script.js" defer></script>
    </head>

    <body>
        <div class="divheader">
            <header class="headercontainer">
                <label>
                    <a href="index.php" target="_self" title="Hier kommen Sie zur Startseite" >
                        Dragon Egg Emporium
                    </a>
                </label>
                <nav>
                    <a href="login.php" target="_self" title="Hier können Sie sich Anmelden" id="usernameText">
                        <h2>Anmelden</h2>
                    </a>
                </nav>
            </header>
            <hr>
        </div>

        <video autoplay muted loop>
            <source src="../Video/SnowfallBackground4.mp4" type="video/mp4">
            <!-- Füge hier weitere Source-Tags hinzu, um unterschiedliche Videoformate zu unterstützen -->
            Dein Browser unterstützt das Video-Tag nicht.
        </video>

    <main>

        <div class="containerProdukte">
            <h1>Cool Dragons</h1>
        
            <div class="mainBox">
                <div class="mainBoxChild">
                    <a href="IceDragon.php"
                        target="_self"
                        title="IceDragonEgg">
                        <img src= "../Bilder/IceDragonEgg.png"
                        alt="This is a picture of an Ice-Dragon Egg"
                        height="200">
                        </a>
                    <div>
                        <a href="IceDragon.php"
                        target="_self"
                        title="IceDragonEgg">
                        <h3>IceDragon Egg</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi inventore nemo impedit sed vel doloribus nesciunt,
                             aliquid illo deleniti facere, tempore fugit aliquam dolor voluptates veritatis architecto unde! Maxime, distinctio.</p>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mainBox">
                <div class="mainBoxChild">
                    <a href="WaterDragon.php"
                        target="_self"
                        title="WaterDragonEgg">
                        <img src= "../Bilder/WaterDragonEgg.png"
                        alt="This is a picture of an Water-Dragon Egg"
                        height="200">
                        </a>
                    <div>
                        <a href="WaterDragon.php"
                        target="_self"
                        title="WaterDragonEgg">
                        <h3>WaterDragon Egg</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi inventore nemo impedit sed vel doloribus nesciunt,
                             aliquid illo deleniti facere, tempore fugit aliquam dolor voluptates veritatis architecto unde! Maxime, distinctio.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
        
        <footer class="footercontainer">
            <hr>
            <div>
                <a href="https://de.facebook.com" target="_blank" title="Hier kommen sie zu unserer Facebook Seite">
                <img src="../Icons/facebook-app-round-white-icon.svg" alt="Facebook"></a>
                <a href="https://twitter.com" target="_blank" title="Hier kommen sie zu unserer X Seite">
                <img id="X" src="../Icons/x-social-media-white-icon.svg" alt="X"></a>
                <a href="https://instagram.com" target="_blank" title="Hier kommen sie zu unserer Instagram Seite">
                <img src="../Icons/instagram-white-icon.svg" alt="Instagram"></a>
            </div>
            <h2>Rechtliches</h2>
            <ul>
                <li><a href="Impressum.php" target="_self" title="Hier kommen Sie zu unserem Impressum">Impressum</a><br></li>
                <li><a href="Datenschutz.php" target="_self" title="Hier kommen Sie zu unserer Datenschutzerklärung">Datenschutz</a><br></li>
                <li><a href="Barrierefreiheit.php" target="_self" title="Hier kommen sie zur Erklärung zur Barrierefreiheit">Barrierefreiheit</a><br></li>
                <li><a href="Kontakt.php" target="_self" title="Hier kommen Sie zu unseren Kontaktinformationen">Kontakt</a><br></li>
            </ul>
                <p>
                Corvin, Mohamed, Pit<br>
                <small> &copy; 2023 All Rights Reserved </small>
                </p>
        </footer>
    </body>
</html>