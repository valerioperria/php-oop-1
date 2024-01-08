<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Cast.php";
require_once __DIR__ . "/Models/Details.php";

$Movies = [
    new Movie('Oppenheimer', new Cast('Christopher Nolan', 'Cillian Murphy', 'Robert Downey Jr.'), new Details('180 min', false, 4)),
    new Movie('The Conjuring', new Cast('Michael Chaves, James Wan', 'Vera Farmiga, Patrick Wilson', 'Sterling Jerins'), new Details('112 min', true, 4)),
    new Movie('Cast Away', new Cast('Robert Zemeckis', 'Tom Hanks', 'Helen Hunt'), new Details('143 min', false, 5))
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($Movies as $Movie) { ?>
        <h1><?php echo $Movie->film ?></h1>
        <span>
            <?php echo $Movie->cast->printFullCast(); ?>
            <?php echo '<p>' ?>
            <?php echo $Movie->details->printFullDetails(); ?>
        </span>
    <?php } ?>

</body>

</html>