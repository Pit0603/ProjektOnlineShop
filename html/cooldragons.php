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
        <script src="../JavaScript/login_script.js" defer></script>
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
                        <img id="imgIceDragon" src= "../Bilder/IceDragonEgg.png"
                        alt="This is a picture of an Ice-Dragon Egg"
                        height="200">
                        </a>
                    <div id="divIce">
                        <a href="IceDragon.php"
                        target="_self"
                        title="IceDragonEgg">
                        <h2>IceDragon Egg</h2>
                        <p>Die Kombination aus der Kühle des Eises und der Wärme der Umgebung schafft eine faszinierende Atmosphäre,
                             die jeden in ihren Bann zieht. Ein Eisdrache ist nicht nur ein Kunstwerk,
                              sondern auch ein Symbol für Stärke und Macht. Es ist ein perfektes Geschenk für jeden,
                               der das Besondere liebt.</p>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mainBox">
                <div class="mainBoxChild">
                    <a href="WaterDragon.php"
                        target="_self"
                        title="WaterDragonEgg">
                        <img id="imgWaterDragon" src= "../Bilder/WaterDragonEgg.png"
                        alt="This is a picture of an Water-Dragon Egg"
                        height="200">
                        </a>
                    <div id="divWater">
                        <a href="WaterDragon.php"
                        target="_self"
                        title="WaterDragonEgg">
                        <h2>WaterDragon Egg</h2>
                        <p>Die Kombination aus der Kühle des Wassers und der Wärme der Umgebung schafft eine faszinierende Atmosphäre,
                             die jeden in ihren Bann zieht. Ein Drache mit der Macht des Wassers ist nicht nur ein Kunstwerk,
                              sondern auch ein Symbol für Stärke und Macht. Es ist ein perfektes Geschenk für jeden,
                               der das Besondere liebt.</p>
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