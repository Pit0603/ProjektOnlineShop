<?php
    include("header.html");
?>

<link rel='stylesheet' href='../css/styleforgotpwd.css'>

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
        
        
          <button type="submit" id="loginButton">Zurücksetzen</button>
          
        </form>
      </div>
    </section>      

<?php
    include("footer.html");
?>