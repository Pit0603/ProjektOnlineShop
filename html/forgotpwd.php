<?php
    include("header.html");
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Passwort zurücksetzen</title>
        <link rel="icon" type="image/png" href="Bilder/favicon.png">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel='stylesheet' href='../css/styleforgotpwd.css'>
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
      
    <div class="resetpassword">
        <form action="login.php">
          <h1>Passwort zurücksetzen</h1>
          <div class="input-box">
            <input type="password" placeholder="Passwort" required>
            <i class='bx bxs-lock-alt' ></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Passwort zurücksetzen" required>
            <i class='bx bxs-lock-alt' ></i>
          </div>
        
        
          <button type="submit">zurücksetzen</button>
          
        </form>
      </div>
    </section>      
</body>
</html>
<?php
    include("footer.html");
?>