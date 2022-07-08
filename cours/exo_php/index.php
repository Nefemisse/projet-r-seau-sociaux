<?php 
$color = array('blanche', 'verte', 'rouge', 'plomb', 'black');

echo "Le souvenir de cette scène pour moi est comme une image de film figée à jamais à ce moment : le tapis ".$color[2]. ", la pelouse "
.$color[1]. ", la maison " .$color[0]. ", le ciel de " .$color[3]. ". Le nouveau président et sa première dame. - Richard M. Nixon";


$color = array('blanche', 'vert', 'rouge');

"Ecrivez un script PHP qui affichera les couleurs de la manière suivante :

vert
rouge
blanche";
echo "</br>";
echo "</br>exo 2</br>";
echo "</br>" .$color[1] ;
echo "</br>" .$color[2] ;
echo "</br>" .$color[0] ;
echo "</br>";
echo "</br>exo 3</br>";
echo "</br>";

$ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen",
"Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" =>
"Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" =>
"Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta",
"Austria" => "Vienna", "Poland" => "Warsaw");

"Créez un script PHP qui affiche la capitale et le nom du pays à partir du tableau ceu ci-dessus. Triez la liste par la
capitale du pays (utiliser asort()).";

asort($ceu);



foreach($ceu as $pays => $capitale){

   echo "La capitale du pays : " .$pays. ", est " .$capitale. ".</br>";
};    

echo"</br>";
echo"</br>";
echo"</br>";

$color = array(
    "couleur" => array("a" => "Rouge", "b" => "Vert", "c" => "Blanc"),
    "nombres" => array(1, 2, 3, 4, 5, 6),
    "trou" => array("1er", 5 => "2eme", "3eme")
);

'Écrivez un script PHP pour afficher "2eme" et "Rouge" à partir du tableau ci-dessus';

echo $color["trou"][5]. " et " .$color["couleur"]["a"];

"#PHP - Les tableaux ##Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs suivantes :";

echo"</br>";
echo"</br>";
echo"</br>";

$mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");

"janvier
février
mars
avril
mai
juin
juillet
aout
septembre
octobre
novembre
décembre";

echo "</br>";
echo "</br>exo 4</br>";
echo "</br>";
echo "</br>";

"##Exercice 2 Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.";

echo $mois[2];

"##Exercice 3 Avec le tableau de l'exercice , afficher la valeur de l'index 5.";

echo"</br>";
echo"</br>";
echo"</br>";
echo $mois[5];

##Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.

echo"</br>";
echo"</br>";
echo"</br>";
echo $mois[7] = "août";

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>exo 5</br>";
echo "</br>";
echo "</br>";
##Exercice 5 Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.

"Aisne (02)
Nord (59)
Oise (60)
Pas-de-Calais (62)
Somme (80)";

$dep_HF = array( 02 => "Aisne", 59 => "Nord", 60 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme");

print_r($dep_HF);

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>exo 6</br>";
echo "</br>";
echo "</br>";

##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.

echo $dep_HF[59];

##Exercice 7 Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims (51).

$dep_HF[51] = "Reims";

asort($dep_HF);
print_r($dep_HF);


##Exercice 8 Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
echo "</br>";
echo "</br>";
foreach($mois as $moi){
    echo $moi. ", ";
}
echo "</br>";
echo "</br>";
##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

foreach($dep_HF as $nbr){
    echo $nbr;
};

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>exo 7</br>";
echo "</br>";
echo "</br>";

##Exercice 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
'Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement.';

foreach($dep_HF as $dep => $nbr){
    echo $dep. " de " .$nbr;
};

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>exo 8</br>";
echo "</br>";
echo "</br>";

"Afficher tous les nombres pairs qui sont inférieurs à 20 en commençant par 2, 
les nombres doivent être affichés les uns au-dessous des autres.";

$i = 1;
while ($i <19) {
    $i++;
    if($i % 2 != 1) {
        echo $i. ", </br>";
    }
}

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>exo 9</br>";
echo "</br>";
echo "</br>";

"Afficher la table de multiplication de 8 dans un tableau HTML. 
Les résultats suivants doivent s’afficher horizontalement |1 * 8 = 8| 2 * 8 = 16 jusqu’à 10 * 8 = 80. 
Les bordures du tableau seront définis en CSS.";

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

?>

<table>
    <tbody>
        <tr>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo '<td style="border: 2px solid black">' .$i. " * 8 =". 8*$i. " </td>";
                }
            ?>
        </tr>
    </tbody>
</table>