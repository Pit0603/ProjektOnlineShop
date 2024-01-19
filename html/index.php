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

        <div class="cookie" id="cookiesBanner">
            <!--<header>
              <i class="bx bx-cookie"></i>
              <h3>Wir nutzen Cookies...</h3>
            </header>-->
            <div class="data">
            <h3>Wir nutzen Cookies...</h3>
              <p>Wir verwenden Cookies und ähnliche Tools, die erforderlich sind, um dir das Tätigen von Einkäufen zu ermöglichen,
                 dein Einkaufserlebnis zu verbessern und unsere Dienste bereitzustellen, wie in unserem Cookie-Hinweis beschrieben.
                  Wir verwenden diese Cookies auch, um zu verstehen, wie Kunden unsere Dienste nutzen (z. B. durch Messung der Websiteaufrufe),
                   damit wir Verbesserungen vornehmen können.<a href="#"> Mehr lesen...</a></p>
            </div>
            <div class="buttons">
              <button class="button" id="acceptBtn" title="Akzeptieren sie unsere Cookie-Richtlinien">Accept</button>
              <button class="button" id="declineBtn" title="Lehnen sie unsere Cookie-Richtlinien ab">Decline</button>
            </div>
          </div>
      
          <script>
            document.addEventListener('DOMContentLoaded', function () {
                var cookiesBanner = document.getElementById('cookiesBanner');
                var acceptBtn = document.getElementById('acceptBtn');
                var declineBtn = document.getElementById('declineBtn');
      
                // Event listener for the "Accept" button
                acceptBtn.addEventListener('click', function () {
                    // Hide the banner by setting its display property to 'none'
                    cookiesBanner.style.display = 'none';
                });
      
                // Event listener for the "Decline" button
                declineBtn.addEventListener('click', function () {
                    // Hide the banner by setting its display property to 'none'
                    cookiesBanner.style.display = 'none';
                });
            });
        </script>

    <main>

        <article>
            <h1>Startseite</h1>
        
            <section>
                <a href="hotdragons.php"
                        target="_self" 
                        tabindex="0"
                        title="Hier kommen Sie zur Kategorie Hot Dragons">
                    <div class="mainBoxChild" tabindex="-1">
                        <img id="imgHotDragons" src= "../Bilder/HotDragonEggs.png"
                        alt="This is a picture of a Fire-Dragon Egg"
                        height="200">
                    <div>
                        <h2 id="H2HotDragons">Hot Dragons</h2>
                        <p>Erleben Sie die Faszination von Feuer-, Lava- und Sonnendrachen! Unsere Drachen sind nicht nur wunderschön anzusehen,
                             sondern auch unglaublich lebendig. Mit ihren leuchtenden Farben und ihrem feurigen Atem werden sie Ihre Fantasie beflügeln.
                              Ob als Geschenk für Ihre Liebsten oder als Dekoration für Ihr Zuhause, unsere Drachen sind einzigartig und unverwechselbar.
                               Bestellen Sie noch heute und lassen Sie sich von der Magie unserer Drachen verzaubern!</p>
                    </div>
                </div>
            </a>

            </section>
           
            <section>
                    <a href="cooldragons.php"
                        target="_self"
                        tabindex="0"
                        title="Hier kommen Sie zur Kategorie Cool Dragons">
                            <div class="mainBoxChild" tabindex="-1">

                            <img id="imgCoolDragons" src= "../Bilder/CoolDragonEggs.png"
                            alt="This is a picture of an Ice-Dragon Egg"
                            height="200">
                    <div>
                        <h2 id="H2CoolDragons">Cool Dragons</h2>
                        <p>Erleben Sie die Faszination von Eis- und Wasserdrachen! Unsere Drachen sind nicht nur wunderschön anzusehen,
                             sondern auch unglaublich lebendig. Mit ihren kühlen Farben und ihrem erfrischenden Atem werden sie Ihre Fantasie beflügeln.
                              Ob als Geschenk für Ihre Liebsten oder als Dekoration für Ihr Zuhause, unsere Drachen sind einzigartig und unverwechselbar.
                               Bestellen Sie noch heute und lassen Sie sich von der Magie unserer Drachen verzaubern!</p>
                    </div>
                </div>
                </a>

            </section>
            
            <section>
                    <a href="miscellaneousdragons.php"
                        target="_self"
                        tabindex="0"
                        title="Hier kommen Sie zur Kategorie Miscellaneous Dragons">
                        <div class="mainBoxChild" tabindex="-1">
                            <img id="imgMiscellaneousDragons" src= "../Bilder/MiscellaneousDragonEggs.png"
                            alt="This is a picture of an Earth-Dragon Egg"
                            height="200">
                        <div>
                            <h2 id="H2MiscellaneousDragons">Miscellaneous Dragons</h2>
                            <p>Erleben Sie die Faszination von Galaxy-, Erde-, Stein-, und Enderdrachen! Unsere Drachen sind nicht nur wunderschön anzusehen,
                                sondern auch unglaublich lebendig. Mit ihren einzigartigen Farben und ihrem atemberaubenden Atem werden sie Ihre Fantasie beflügeln.
                                Ob als Geschenk für Ihre Liebsten oder als Dekoration für Ihr Zuhause, unsere Drachen sind einzigartig und unverwechselbar.
                                Bestellen Sie noch heute und lassen Sie sich von der Magie unserer Drachen verzaubern!</p>
                        </div>
                </div>
                    </a>

            </section>
        </article>

    </main>

    </body>

</html>
<?php
    include("footer.html");
?>