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
        <link rel="stylesheet" href="../css/styleindex.css">
        <script src="../JavaScript/login_script.js" defer></script>
    </head>
    
    <body>

        <video autoplay muted loop>
            <source src="../Video/Background2.mp4" type="video/mp4">
            <!-- Füge hier weitere Source-Tags hinzu, um unterschiedliche Videoformate zu unterstützen -->
            Dein Browser unterstützt das Video-Tag nicht.
        </video>

    <main>

        <article>
            <h1>Startseite</h1>
        
            <section>
                <div class="mainBoxChild">
                    <a href="hotdragons.php"
                        target="_self"
                        title="Hot Dragons">
                        <img id="imgHotDragons" src= "../Bilder/HotDragonEggs.png"
                        alt="This is a picture of a Fire-Dragon Egg"
                        height="200">
                        </a>
                    <div>
                        <a href="hotdragons.php"
                        target="_self"
                        title="Hot Dragons">
                        <h2 id="H2HotDragons">Hot Dragons</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi inventore nemo impedit sed vel doloribus nesciunt,
                             aliquid illo deleniti facere, tempore fugit aliquam dolor voluptates veritatis architecto unde! Maxime, distinctio.</p>
                        </a>
                    </div>
                </div>
            </section>
           
            <section>
                <div class="mainBoxChild">
                    <a href="cooldragons.php"
                        target="_self"
                        title="Cool Dragons">
                        <img id="imgCoolDragons" src= "../Bilder/CoolDragonEggs.png"
                        alt="This is a picture of an Ice-Dragon Egg"
                        height="200">
                        </a>
                    <div>
                        <a href="cooldragons.php"
                        target="_self"
                        title="Cool Dragons">
                        <h2 id="H2CoolDragons">Cool Dragons</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi inventore nemo impedit sed vel doloribus nesciunt,
                             aliquid illo deleniti facere, tempore fugit aliquam dolor voluptates veritatis architecto unde! Maxime, distinctio.</p>
                        </a>
                    </div>
                </div>
            </section>
            
            <section>
                <div class="mainBoxChild">
                    <a href="miscellaneousdragons.php"
                        target="_self"
                        title="Miscellaneous Dragons">
                        <img id="imgMiscellaneousDragons" src= "../Bilder/MiscellaneousDragonEggs.png"
                        alt="This is a picture of an Earth-Dragon Egg"
                        height="200">
                    </a>
                    <div>
                        <a href="miscellaneousdragons.php"
                        target="_self"
                        title="Miscellaneous Dragons">
                        <h2 id="H2MiscellaneousDragons">Miscellaneous Dragons</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi inventore nemo impedit sed vel doloribus nesciunt,
                             aliquid illo deleniti facere, tempore fugit aliquam dolor voluptates veritatis architecto unde! Maxime, distinctio.</p>
                        </a>
                    </div>
                </div>
            </section>
        </article>

    </main>

    </body>

</html>
<?php
    include("footer.html");
?>