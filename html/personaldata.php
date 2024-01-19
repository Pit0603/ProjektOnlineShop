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
        <link rel="stylesheet" href="../css/stylePersonalData.css">
    </head>

    <body>
        
        <video autoplay loop muted plays-inline class="background-clip">
            <source src="../Video/Background2.mp4" type="video/mp4">
          </video>

        <section>
        
            <div class="bewerben">
  
            <form action="Bewerbungsseite.html">
                <h1>Ihre persönlichen Daten</h1>
                <h2>Bitte geben Sie die folgenden Daten ein, um den Bewerbungsprozess zu starten.</h2>
                <div class="input-box">
                    <input type="text" title="Bitte geben sie Ihren Vornamen ein" placeholder="Vorname" required>
                    
                  </div>
                  <div class="input-box">
                    <input type="text" title="Bitte geben sie Ihren Nachnamen ein" placeholder="Nachname" required>
                    
                  </div>
                  <div class="input-box">
                    <input type="email" title="Bitte geben sie Ihre Email Adresse ein" placeholder="Email" required>
                   
                  </div>
                
                
                  <button type="submit" class="btn" title="Senden sie ihre Bewerbung ab">Absenden</button>
                  
            </form>

          </div>

        </section>      
        
    </body>

</html>
<?php
    include("footer.html");
?>