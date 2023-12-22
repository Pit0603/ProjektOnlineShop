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
        <link rel="stylesheet" href="../css/style.css">
        <script src="/JavaScript/login_script.js" defer></script>
    </head>

    <body>
        

        <video autoplay muted loop>
            <source src="../Video/Fire.mp4" type="video/mp4">
            <!-- Füge hier weitere Source-Tags hinzu, um unterschiedliche Videoformate zu unterstützen -->
            Dein Browser unterstützt das Video-Tag nicht.
        </video>

    <main>
        
        <div class="FireDragonSeite">
            <img
            src="../Bilder/SunDragonEggFrame.png"
            alt="This is a picture of a Sun-Dragon Egg"
            title="This is a picture of a Sun-Dragon-Egg"
            height="500" width="500">
                <div>
                    <h1>Sun-Dragon-Egg</h1>
        
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, doloremque harum error aperiam, 
                        voluptatibus nesciunt odit doloribus ipsa labore quidem soluta quam ea voluptatum dolorem in veniam quisquam perferendis commodi.
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eum quos corrupti quis ad culpa quasi nesciunt sapiente delectus ipsam blanditiis,
                          deleniti tempore cupiditate non exercitationem harum facere magni neque.</p>
                </div>
            </div>
            <div id="divbutton">
                <button class="fantasy">
                    <span class="double">
                     <span class="text">Angebot machen</span>
                    </span>
                   </button>
            </div>          
        <!--<audio autoplay>
            <source src="Audio/DragonSound.mp3" type="Audio/mp3">
            <source src="Audio/DragonSound.wav" type="Audio/wav">
        </audio>-->
        
    </main>

        
    </body>
<?php
    include("footer.html");
?>