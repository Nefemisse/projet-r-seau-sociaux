<?php

$thomas = ['Thomas Niaux', 'thomasiaux@hotmail.be', 'azertyuiop', '29']; // = 0
$benjamin = ['Toto Niaux', 'Toto@hotmail.fr', 'azertyu', '30']; // = 1
$charlotte = ['Titi Heuberg', 'Titi@hotmail.it', 'poiuytre', '26']; // = 2
$dushnoc = ["Dushnoc d'hazaincourt", 'dushnocdhazaincourt@hotmail.li', 'loikn', '54']; // = 3

$users = [$thomas, $Toto, $Titi, $dushnoc];

    $lines = 4; // nombre d'utilisateurs dans le tableau
    $counter = 0;

        while ($counter < $lines) {
            echo $users[$counter][0] . ' ' . $users[$counter][1] . ' ' . $users[$counter][3] . ' ' . '<br />';
            $counter++; // Ne surtout pas oublier la condition de sortie !
        }

        for ($lines = 0; $lines <= 3; $lines++) {
            echo $users[$lines][0] . ' ' . $users[$lines][1] . ' ' . $users[$lines][3] . ' ' . '<br />';
        }
?>

<?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>