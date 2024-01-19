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
        <script src="../JavaScript/login_script.js" defer></script>
    </head>

    <body>

        <video autoplay muted loop>
            <source src="../Video/Sparks.mp4" type="video/mp4">
            Dein Browser unterstützt das Video-Tag nicht.
        </video>

    <main>

        <div class="containerProdukte"> 
            <h1>Hot Dragons</h1>
        
            <div class="mainBox">
                <div class="mainBoxChild">
                    <a href="FireDragon.php"
                        target="_self"
                        title="FireDragonEgg">
                        <img id="imgFireDragon" src= "../Bilder/FireDragonEgg.png"
                        alt="This is a picture of a Fire-Dragon Egg"
                        height="200">
                        </a>
                    <div>
                        <a id="divFire" href="FireDragon.php"
                        target="_self"
                        title="FireDragonEgg">
                        <h2>FireDragon Egg</h2>
                        <p>Erleben Sie die Hitze mit unseren brandneuen Feuerdrachen, die Ihnen den Atem rauben werden!
                             Unsere Drachen sind aus hochwertigen Materialien gefertigt und bieten eine hervorragende Wärme an kalten Tagen.
                              Mit einer Vielzahl von Farben und Designs zur Auswahl, ist für jeden Geschmack etwas dabei.
                               Bestellen Sie jetzt und erhalten Sie 10% Rabatt auf Ihre erste Bestellung!</p>
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
                        <a id="divLava" href="LavaDragon.php"
                        target="_self"
                        title="LavaDragonEgg">
                        <h2>LavaDragon Egg</h2>
                        <p>Erleben Sie die Hitze mit unseren brandneuen Lavadrachen, die Ihnen den Atem rauben werden!
                             Unsere Drachen sind aus hochwertigen Materialien gefertigt und bieten eine hervorragende Wärme an kalten Tagen.
                              Mit einer Vielzahl von Farben und Designs zur Auswahl, ist für jeden Geschmack etwas dabei.
                               Bestellen Sie jetzt und erhalten Sie 10% Rabatt auf Ihre erste Bestellung!</p>
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
                        <a id="divSun" href="SunDragon.php"
                        target="_self"
                        title="SunDragonEgg">
                        <h2>SunDragon Egg</h2>
                        <p>Erleben Sie den Sommer auf eine neue Art und Weise mit unserem Sonnendrachen!
                             Der Drachen ist aus hochwertigen Materialien hergestellt und verfügt über einzigartige Designs,
                              die ihn von anderen Drachen abheben. Mit seinen leuchtenden Farben und der Fähigkeit,
                               in der Luft zu schweben, ist unser Sonnendrachen ein wahrer Hingucker am Himmel. Egal,
                                ob Sie ihn alleine oder mit Freunden fliegen lassen, unser Sonnendrachen wird Ihnen ein unvergessliches Erlebnis bescheren.
                                 Bestellen Sie jetzt und genießen Sie den Sommer in vollen Zügen!</p>
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