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
        <link rel="stylesheet" href="../css/styleCoolDragons.css">
        <script src="/JavaScript/login_script.js" defer></script>
    </head>

    <body>
        

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
        
        
    </body>
</html>
<?php
    include("footer.html");
?>