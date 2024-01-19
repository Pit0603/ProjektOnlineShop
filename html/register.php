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
    <link rel="stylesheet" href="../css/styleregister2.css">
</head>

<body>

  <video autoplay loop muted class="background-clip">
    <source src="../Video/Background2.mp4" type="video/mp4">
    </video>

<section>
    
  <div class="register">
    <form action="index.php">

      <h1>Registrieren</h1>
      

      <div class="input-box">
        <input type="text" placeholder="Vorname" required title="Geben Sie hier ihren Vornamen ein">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Nachname" required title="Geben Sie hier ihren Nachnamen ein">
      </div>
        <div class="input-box">
            <input type="text" placeholder="Nutzername" required title="Geben Sie hier ihren gewünschten Nutzernamen ein">
            
          </div>
          <div class="input-box">
            <input type="email" placeholder="Email" required title="Geben Sie hier ihre E-Mail Adresse ein">
           
          </div>
          <div class="input-box">
            <input type="password" placeholder="Passwort" required title="Geben Sie hier ihr gewünschtes Passwort ein">
            
          </div>
          <div class="input-box">
            <input type="password" placeholder="Passwort bestätigen" required title="Geben Sie hier ihr gewünschtes Passwort erneut ein">
            
          </div>
        
          <button type="submit" class="submit" title="Klicken Sie hier um sich zu Registrieren" >Registrieren</button>
          
    
      
      
      
    </form>
  </div>
</section>
      
  </body>
</html>
<?php
    include("footer.html");
?>