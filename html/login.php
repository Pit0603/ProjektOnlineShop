<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Anmelden</title>
        <link rel="icon" type="image/png" href="../Icons/DragonIcon.png"> 
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel='stylesheet' href='../css/stylelogin.css'>
        <script src="/JavaScript/login_script.js" defer></script>
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
    <div class="login">
        <form action="index.php">
            <h1>Anmelden</h1>
            <div class="input-box">
                <input type="text" id="username" placeholder="Nutzername" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" placeholder="Passwort" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
          
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="forgotpwd.php">Passwort vergessen</a>
            </div>
            <!-- Hinzugefügtes ID-Attribut für den Anmelde-Button -->
            <button type="submit" class="btn" id="loginButton" onclick="login()">Anmelden</button>
            <div class="register-link">
                <p>Haben Sie kein Konto? <a href="register.php"> Registrieren</a></p>
            </div>
        </form>
    </div>
</section>

  </body>
</html>