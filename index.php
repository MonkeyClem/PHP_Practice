
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
      Does this text appear on localhost ?? <br/>";
      
      //echo peut être utilisé directement avec des guillemets
      echo "Ceci est du texte <br/>"; 
   
      // <!-- Ou bien, avec des parenthèses -->
      echo("Ceci est du texte"); 

?>

<!-- POSSIBILITÉ D'INCLURE DU PHP DIRECTEMENT DANS UNE BALISE HTML  -->
<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>


<!-- PREMIERES VARIABLES --> 
<?php
$name = "Clément";
$userAge = 27;
echo("Bonjour "); 
echo($name);  
echo(". Vous avez : "); 
echo($userAge);
echo(" ans. <br/>");
?>

<!-- POSSIBILITÉE DE CONCATÉNER LES VARIABLES --> 

<?php 
$fullName = "Clément JEULIN";

      echo('Bonjour ' . $fullName  . ' Nous sommes le ' . date('d/m/Y') . ' et il est actuellement : '. date('h:i:s') . '<br/>')
?>

<!-- LES CONDITIONS -->

<?php 

$isEnabled = true;

if($isEnabled == true){
      echo('Cette phrase est affichée via l\'utilisation des conditions');
}else{
      echo 'Accès refusé';
};

$isAllowed = true;

if($isAllowed == true){
      echo 'You are allowed';
}else{
      echo 'You are not allowed';
}

?>

<!-- LE ENDIF -->

<?php $chickenRecipesEnabled = true; ?>

<?php if ($chickenRecipesEnabled): ?> 

<h1>Liste des recettes à base de poulet</h1>

<?php endif; ?>

<!-- Les Switchcase -->
<?php

$note = 5;

switch ($note) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
  
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>




<!-- LES TERNAIRES -->
<!-- Exemple : -->
<?php
$userAge = 24;

if ($userAge >= 18) {
	$isAdult = true;
}
else {
	$isAdult = false;
}
?>

<!-- On peut faire la même chose en une seule ligne grâce à une structure ternaire -->
<?php
$userAge = 24;

$isAdult = ($userAge >= 18) ? true : false;

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 18);
?>


                                                      <!-- LES BOUCLES ET LES TABLEAUX -->

<?php

// Premier utilisateur
$userName1 = 'Mickaël Andrieu';
$userEmail1 = 'mickael.andrieu@exemple.com';
$userPassword1 = 'S3cr3t';
$userAge1 = 34;

// Deuxième utilisatrice
$userName2 = 'Laurène Castor';
$userEmail2 = 'laurene.castor@exemple.com';
$userPassword2 = 'P4ssW0rD';
$userAge2 = 28;

// ... et ainsi de suite pour les autres utilisateurs. 
// ATTENTION : IL NE S'AGIT PAS D'UNE BONNE PRATIQUE

?>

<?php

$user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];


echo $user1[0]; // "Mickaël Andrieu"
echo $user1[1]; // "email"
echo $user1[3]; // 34

$mickael = ['Mickaël Andrieu', 'mickaêl.andrieu@exemple.com', 'S3cr3t', 34];
$charlene = [ 'Charlène Soja', 'charlene.soja@exemple.com', 'S3cr3t', 31];
$mathieu = ['Mathieu Castor', 'mathieu.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $charlene, $mathieu];

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];


echo '<br/> Salut, voici les infos de l\'index 0 du user1 :', $users[1][0], '<br/>';


// $lines = 3; // nombre d'utilisateurs dans le tableau
// $counter = 0;

// while ($counter < $lines) {
//     echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
//     $counter++; // Ne surtout pas oublier la condition de sortie !
// }

?>

<html>
<!-- <head>
    <title>Affichage des recettes</title>
</head> -->
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>