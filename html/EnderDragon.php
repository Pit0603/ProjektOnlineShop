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
        <link rel="stylesheet" href="../css/styleEnderDragonEgg.css">
        <script src="../JavaScript/login_script.js" defer></script>
    </head>

    <body>

    <video autoplay muted loop>
            <source src="../Video/EnderBackground.mp4" type="video/mp4">
            Dein Browser unterstützt das Video-Tag nicht.
    </video>
        
    <main>
        <div class="FireDragonSeite">
            <img
            src="../Bilder/EnderDragonEggFrame.png"
            alt="This is a picture of a Ender-Dragon Egg"
            title="This is a picture of a Enderr-Dragon-Egg"
            height="500" width="500">
                <div>
                    <h1>Ender-Dragon-Egg</h1>
        
                    <p>Der Enderdrache ist einer der mächtigsten Gegner in der Welt von Minecraft.
                         Er zählt (wie der Wither) zu den Bossmonstern und lebt im Ende,
                          das man nur durch ein Enderportal erreichen kann. Der Enderdrache ist ein riesiger schwarzer Drache mit lilaglühenden Augen,
                           die schon von weitem zu sehen sind. Seine schwarze Textur erinnert an die Textur der Endermen,
                            die ebenfalls natürlich im Ende spawnen. Lediglich an den Flügeln sind die Ränder z. T. grau abgesetzt. 
                            Der Enderdrache ist als Bossmonster sehr mächtig. Er hat 200 Lebenspunkte, die er immer wieder auffüllt,
                             wenn er sich durch die Enderkristalle heilt, die an der Spitze von Obsidiansäulen sitzen.
                              Die Säulen sind kreisförmig um das deaktivierte Endportal verteilt. </p>
                </div>
            </div>
            <div id="divbutton">
                <form action="MakeOffer.php">
                    <button type="submit" class="fantasy" title="Make an offer">
                        <span class="double">
                            <span class="text">Angebot machen</span>
                        </span>
                    </button>
                </form>
            </div>    
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