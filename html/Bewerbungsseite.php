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
        <link rel="stylesheet" href="../css/styleBewerbungsseite.css">
    </head>

    <body>

        <video autoplay muted loop>
            <source src="../Video/Background2.mp4" type="video/mp4">
            Dein Browser unterstützt das Video-Tag nicht.
        </video>
         
        <main>
        
        <article>

          <section class="table__header">
            <h1>Aktuelle Stellenangebote</h1>
            <h2> Schauen Sie sich um und finden Sie heraus, ob etwas dabei ist, das zu Ihren Fähigkeiten passt.</h2>
            
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        
                        <th style="width:85%">Wir suchen</th>
                       
                        <th>Bewirb dich jetzt</th>
                        
                    </tr>
                </thead>
                <tbody>
                   
                       
                    <tr>
                        <td>Dieb</td>
                       
                        
                        <td><a href="personaldata.php" title="Hier als Dieb bewerben"> bewerben</a></td>
                        
                    </tr>
                    
                    <tr>
                        <td>Züchter</td>
                       
                        
                        <td><a href="personaldata.php" title="Hier als Züchter bewerben"> bewerben</a></td>
                       
                    </tr>
                    <tr>
                        <td>Kurier</td>
                        
                        
                        <td><a href="personaldata.php" title="Hier als Kurier bewerben"> bewerben</a></td>
                        
                    </tr>
                    
                </tbody>
            </table>
        </section>

        </article>

      </main>
         
    </body>

</html>
<?php
    include("footer.html");
?>