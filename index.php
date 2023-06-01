
<!-- HTML, dans lequel nous pouvons aussi inclure du PHP-->

<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
      
    <h1>Notre première instruction : echo</h1>

        <h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette ligne a été écrite entièrement en HTML.<br/>
        </p>

        <?php echo("Celle-ci a été écrite entièrement en PHP.<br/>"); ?>

        
    </body>
</html>


<!-- PASSAGE AU PHP PUR -->

<?php

echo "Hello world ! <br/> 
      Le retour à la ligne fonctionne-t-il ?<br/>
      Does this text appear on localhost ??";
      
      //echo peut être utilisé directement avec des guillemets
      echo "Ceci est du texte"; 
   
      // <!-- Ou bien, avec des parenthèses -->
      echo("Ceci est du texte"); 

?>

<!-- POSSIBILITÉ D'INCLURE DU PHP DIRECTEMENT DANS UNE BALISE HTML  -->
<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

