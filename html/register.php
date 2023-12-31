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
    <link rel="stylesheet" href="../css/styleregister.css">
</head>

<body>

  <div class="divheader">
    <header class="headercontainer">
        <label>
            <a href="index.php" target="_self" title="Hier kommen Sie zur Startseite" >
                Dragon Egg Emporium
            </a>
        </label>
      
    </header>
    <hr>
</div>

  <video autoplay loop muted class="background-clip">
    <source src="../Video/Background2.mp4" type="video/mp4">
    </video>

<section>
    
  <div class="register">
    <form action="index.php">

      <h1>Registrieren</h1>
      

      <div class="input-box">
        <input type="text" placeholder="Vorname" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Nachname" required>
      </div>
        <div class="input-box">
            <input type="text" placeholder="Nutzername" required>
            
          </div>
          <div class="input-box">
            <input type="email" placeholder="Email" required>
           
          </div>
          <div class="input-box">
            <input type="password" placeholder="Passwort" required>
            
          </div>
          <div class="input-box">
            <input type="password" placeholder="Psswort bestätigen" required>
            
          </div>
        
          <button type="submit" class="submit">Registrieren</button>

          
    
      
      
      
    </form>
  </div>
</section>
      
  </body>
</html>
<?php
    include("footer.html");
?>