<?php
    include("header.html");
?>
<link rel="stylesheet" href="../css/stylePersonalData.css">
        
        <video autoplay loop muted class="background-clip">
            <source src="../Video/Background2.mp4" type="video/mp4">
          </video>

        <section>
        
            <div class="bewerben">
  
            <form action="Bewerbungsseite.php">
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
        
<?php
    include("footer.html");
?>