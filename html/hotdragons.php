<?php
    include("header.html");
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../Icons/DragonIcon.png">
        <title>Dragon Egg Emporium</title>
        <link rel="stylesheet" href="../css/styleHotDragons.css">
        <script src="/JavaScript/login_script.js" defer></script>
    </head>

    <body>

        <video autoplay muted loop>
            <source src="../Video/Sparks.mp4" type="video/mp4">
            <!-- Füge hier weitere Source-Tags hinzu, um unterschiedliche Videoformate zu unterstützen -->
            Dein Browser unterstützt das Video-Tag nicht.
        </video>

    <main>

        <div class="containerProdukte"> <!-- @todo: article tag -->
            <h1>Hot Dragons</h1>
        
            <div class="mainBox"> <!-- @todo: section tag -->
                <div class="mainBoxChild">
                    <a href="FireDragon.php"
                        target="_self"
                        title="FireDragonEgg">
                        <img id="imgFireDragon" src= "../Bilder/FireDragonEgg.png"
                        alt="This is a picture of a Fire-Dragon Egg"
                        height="200">
                        </a>
                    <div>
                        <a href="FireDragon.php"
                        target="_self"
                        title="FireDragonEgg">
                        <h3>FireDragon Egg</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi inventore nemo impedit sed vel doloribus nesciunt,
                             aliquid illo deleniti facere, tempore fugit aliquam dolor voluptates veritatis architecto unde! Maxime, distinctio.</p>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mainBox">
                <div class="mainBoxChild">
                    <a href="LavaDragon.php"
                        target="_self"
                        title="LavaDragonEgg">
                        <img id="imgLavaDragon" src= "../Bilder/LavaDragonEgg.png"
                        alt="This is a picture of a Lava-Dragon Egg"
                        height="200">
                        </a>
                    <div>
                        <a href="LavaDragon.php"
                        target="_self"
                        title="LavaDragonEgg">
                        <h3>LavaDragon Egg</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi inventore nemo impedit sed vel doloribus nesciunt,
                             aliquid illo deleniti facere, tempore fugit aliquam dolor voluptates veritatis architecto unde! Maxime, distinctio.</p>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mainBox">
                <div class="mainBoxChild">
                    <a href="SunDragon.php"
                        target="_self"
                        title="SunDragonEgg">
                        <img id="imgSunDragon" src= "../Bilder/SunDragonEgg.png"
                        alt="This is a picture of a Sun-Dragon Egg"
                        height="200">
                        </a>
                    <div>
                        <a href="SunDragon.php"
                        target="_self"
                        title="SunDragonEgg">
                        <h3>SunDragon Egg</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi inventore nemo impedit sed vel doloribus nesciunt,
                             aliquid illo deleniti facere, tempore fugit aliquam dolor voluptates veritatis architecto unde! Maxime, distinctio.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
        
        
    </body>
<?php
    include("footer.html");
?>