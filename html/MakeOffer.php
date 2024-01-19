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
        
    <video autoplay loop muted class="background-clip">
            <source src="../Video/Background2.mp4" type="video/mp4">
          </video>
    <main>

         <div class="MakeOffer">
        <form method="get" enctype="multipart/form-data"> <!--When sending much data (Example: Image) - split them in parts and reform in data at server destination-->
            <h1>Machen Sie ein Angebot</h1>
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
            <input type="email" id="email" placeholder="deineemail@email.com">
            
            <br>
            
            <label for="phone" style="color: aliceblue;"> Telefonnummer: </label>
            <input type="tel" id="phone" required placeholder="+49-12345678987" pattern="[0-9]{2}-[0-9]{11}">
            
           <br>
            <label for="quantity" style="color: aliceblue;">Anzahl: </label>
            <input type="number" id="quantity" min="1" max="99" value="1">

            <br>
            <label for="price" style="color: aliceblue;">Angebotspreis: </label>
            <input type="number" id="price" placeholder="min. 10.000€">
            
      
           

            
            <br>
          
            <label for="makeOffer" style="color: aliceblue;"></label>
            <textarea id="makeOffer" rows="3" cols="25" placeholder="Seien Sie gegrüßt, ich hätte Interesse an einem Ihrer Dracheneier. Hochachtungsvoll Ihr Kunde"></textarea>
      
        
            <button type="submit" class="btn" title="Angebot Absenden">Senden</button>
        </form>
    </div>
        </main>
            
    </body>
</html>
<?php
    include("footer.html");
?>