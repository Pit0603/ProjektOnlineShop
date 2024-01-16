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
        <link rel="stylesheet" href="../css/styleMakeOffer.css">
        <script src="../JavaScript/login_script.js" defer></script>
    </head>

    <body>
        
    <video autoplay loop muted plays-inline class="background-clip">
            <source src="../Video/Background2.mp4" type="video/mp4">
          </video>
    <main>

         <div class="MakeOffer">
        <form method="get" enctype="multipart/form-data"> <!--When sending much data (Example: Image) - split them in parts and reform in data at server destination-->
            <h1>machen Sie ein Angebot</h1>
            <br>

            <label for="title" style="color: aliceblue;">Geschlecht:</label>
            <select id="title">
                <option value="Herr">Herr</option>
                <option value="Frau">Frau</option>
                <option value="Kampfhelikopter">Kampfhelikopter</option>
                <option value="Nonbinaer">Non-binär</option>
                <option value="Geschlechtsqueer">Geschlechtsqueer</option>
                <option value="Geschlechtsfluid">Geschlechtsfluid</option>
                <option value="Agender">Agender</option>
                <option value="Bigender">Bigender</option>
                <option value="TwoSpirit">Two-Spirit</option>
                <option value="Demiboy">Demiboy</option>
                <option value="Demigirl">Demigirl</option>
                <option value="Androgyn">Androgyn</option>
                <option value="Neutrois">Neutrois</option>
                <option value="Genderqueer">Genderqueer</option>
                <option value="Pangender">Pangender</option>
                <option value="Transgender">Transgender</option>
                <option value="Cisgender">Cisgender</option>
                <option value="GenderNonkonform">Gender-nonkonform </option>
                <option value="Hijra">Hijra</option>
                <option value="FTM">FTM (female-to-male)</option>
                <option value="MTF">MTF (male-to-female)</option>
            </select>

            <br>

            <label for="name" style="color: aliceblue;"> Voller Name: </label>
            <input type="text" id="name" placeholder="Max Mustermann">

            <br>

            <label for="email" style="color: aliceblue;"> E-Mail: </label>
            <input type="email" id="email" placeholder="YourEmail@yourProvider.com">
            
            <br>
            
            <label for="phone" style="color: aliceblue;"> Telefonnummer: </label>
            <input type="tel" id="phone" required placeholder="+49-12345678987" pattern="[0-9]{2}-[0-9]{11}">
            
           <br>
            <label for="quantity" style="color: aliceblue;">Anzahl: </label>
            <input type="number" id="quantity" min="1" max="99" value="1">

            <br>
            <label for="price" style="color: aliceblue;">Angebotspreis: </label>
            <input type="price" id="price" placeholder="min. 10.000$">
            
      
           

            
            <br>
          
            <label for="makeOffer" style="color: aliceblue;"></label>
            <textarea id="makeOffer" rows="3" cols="25" placeholder="Dear Shop. I would like to purchase the Dragon Egg."></textarea>
      
        
            <button type="submit" class="btn">Senden</button>
        </form>
    </div>
        </main>
            <footer class="footercontainer">
                <hr>
                <div>
                <a href="https://de.facebook.com" target="_blank" title="Hier kommen sie zu unserer Facebook Seite">
                <img src="../Icons/facebook-app-round-white-icon.svg" alt="Facebook"></a>
                <a href="https://twitter.com" target="_blank" title="Hier kommen sie zu unserer X Seite">
                <img id="X" src="../Icons/x-social-media-white-icon.svg" alt="X"></a>
                <a href="https://instagram.com" target="_blank" title="Hier kommen sie zu unserer Instagram Seite">
                <img src="../Icons/instagram-white-icon.svg" alt="Instagram"></a>
            </div>
            <h2>Rechtliches</h2>
                <ul>
                    <li><a href="Impressum.php" target="_self" title="Hier kommen Sie zu unserem Impressum">Impressum</a><br></li>
                    <li><a href="Datenschutz.php" target="_self" title="Hier kommen Sie zu unserer Datenschutzerklärung">Datenschutz</a><br></li>
                    <li><a href="Barrierefreiheit.php" target="_self" title="Hier kommen sie zur Erklärung zur Barrierefreiheit">Barrierefreiheit</a><br></li>
                    <li><a href="Kontakt.php" target="_self" title="Hier kommen Sie zu unseren Kontaktinformationen">Kontakt</a><br></li>
                </ul>
                    <p>
                    Corvin, Mohamed, Pit<br>
                    <small> &copy; 2023 All Rights Reserved </small>
                    </p>
            </footer>
    </body>
</html>
<?php
    include("footer.html");
?>