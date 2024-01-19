<?php
    include("header.html");
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Anmelden</title>
        <link rel="icon" type="image/png" href="../Icons/DragonIcon.png"> 
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel='stylesheet' href='../css/stylelogin.css'>
        <script src="../JavaScript/login_script.js" defer></script>
    </head>
    
<body>

  <video autoplay loop muted class="background-clip">
    <source src="../Video/Background2.mp4" type="video/mp4">
  </video>

  <section>
    <div class="login">
        <form action="index.php">
            <h1>Anmelden</h1>
            <div class="input-box">
                <input type="text" id="username" title="Bitte geben sie Ihren Nutzernamen ein" placeholder="Nutzername" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" title="Bitte geben sie Ihr Passwort ein" placeholder="Passwort" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
          
            <div class="remember-forgot">
                <label><input type="checkbox" title="Bleiben Sie angemeldet">Remember me /</label>
                <a href="forgotpwd.php" title="Hier können Sie Ihr Passwort zurücksetzen">&nbsp;Passwort vergessen</a>
            </div>
            <!-- Hinzugefügtes ID-Attribut für den Anmelde-Button -->
            <button type="submit" class="btn" id="loginButton" onclick="login()">Anmelden</button>
            <div class="register-link">
                <p>Haben Sie kein Konto? &nbsp;<a href="register.php" title="Hier können Sie sich registrieren"> Registrieren</a></p>
            </div>
        </form>
    </div>
</section>

  </body>
</html>
<?php
    include("footer.html");
?>