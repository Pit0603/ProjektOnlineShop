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
        <link rel="stylesheet" href="../css/styleStoneDragonEgg.css">
        <script src="../JavaScript/login_script.js" defer></script>
    </head>

    <body>

    <video autoplay muted loop>
            <source src="../Video/StoneBackground.mp4" type="video/mp4">
            Dein Browser unterstützt das Video-Tag nicht.
    </video>
        
    <main>
        <div class="FireDragonSeite">
            <img
            src="../Bilder/StoneDragonEggFrame.png"
            alt="This is a picture of a Stone-Dragon Egg"
            title="This is a picture of a Stone-Dragon-Egg"
            height="500" width="500">
                <div>
                    <h1>Stone-Dragon-Egg</h1>
        
                    <p>Ein Steindrache ist ein mythisches Wesen, das in vielen Kulturen vorkommt.
                         Es ist ein Drache, der Feuer speien kann und oft als gefährlich und mächtig dargestellt wird.
                          In vielen Geschichten und Legenden wird der Feuerdrache als eine Art Wächter oder Beschützer dargestellt,
                           der seine Macht einsetzt, um diejenigen zu verteidigen, die er beschützt.<br>

                    Ein Feuerdrache hat normalerweise eine rote oder orange Farbe, die an das Feuer erinnert,
                     das er speit. Seine Schuppen sind hart und widerstandsfähig, um ihn vor Angriffen zu schützen.
                      Seine Augen sind oft gelb oder rot und leuchten im Dunkeln.<br>

                    In vielen Geschichten wird der Feuerdrache als eine Art Kreatur dargestellt,
                     die in einer Höhle oder einem Berg lebt. Er bewacht oft einen Schatz oder ein Artefakt,
                      das von großer Bedeutung ist. In anderen Geschichten wird der Feuerdrache als eine Art Kreatur dargestellt,
                       die in einem Wald oder einer Wüste lebt und diejenigen angreift, die ihm zu nahe kommen.<br>

                       Erleben Sie die Hitze mit unseren brandneuen Steindrachen, die Ihnen den Atem rauben werden!
                        Unsere Drachen sind aus hochwertigen Materialien gefertigt und bieten eine hervorragende Wärme an kalten Tagen.
                         Mit einer Vielzahl von Farben und Designs zur Auswahl, ist für jeden Geschmack etwas dabei.
                          Bestellen Sie jetzt und erhalten Sie 10% Rabatt auf Ihre erste Bestellung!</p>
                </div>
            </div>
            <div id="divbutton">
                <form action="MakeOffer.php">
                    <button type="submit" class="fantasy">
                        <span class="double">
                            <span class="text">Angebot machen</span>
                        </span>
                    </button>
                </form>
            </div>    
    </main>
        
    </body>
</html>
<?php
    include("footer.html");
?>