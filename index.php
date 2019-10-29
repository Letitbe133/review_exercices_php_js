<?php

// #25 26 27 Calcul TVA
function TVA($montant, $taux) {
    return $montant * $taux;
}

// #28 argument optionnel
function Calc($multiple, $nombre=100 ) {
    return $nombre * $multiple;
}

// #29 30 Météo
function meteo($saison, $deg) {
    // méthode classique avec if

    // if($deg >= -1 && $deg <=1) {
    //     return "Nous sommes actuellement en $saison et il fait $deg degré";
    // }
    // return "Nous sommes actuellement en $saison et il fait $deg degrés";

    // méthode avec opérateur ternaire

    $degre = ($deg >= -1 && $deg <= 1) ? "degré" : "degrés";

    return "Nous sommes actuellement en $saison et il fait $deg $degre";
}

// #31 Portée des variables
$nom = 'Doe';
$prenom = 'John';

function sayHello($prenom, $nom) {
    echo 'Salut ' . $prenom . ' ' . $nom . '<br>';
}

// #34 calcul sur la valeur d'une variable
$a = 10;
$b = 2;

echo $a += $b;

// equiv $a = $a + $b

// #35 la matrice
// on a une série de chiffres de 0 à 99
// on veut les afficher sous forme de matrice en commençant chaque ligne par une dizaine

// #37 bitcoin
$prix = 6120;
$limite = 1000000;
$multiplicateur = 3.25;
$annee = 2019;
$naissance = 1968;

function convertToPasta($prix, $limite, $multiplicateur, $annee, $naissance) {
    $anneesRetraite = 65 - ($annee - $naissance);

    for ($i=0; $i<$anneesRetraite; $i++) {

        $anneeCourante = $annee + $i;
        $poidsCourant = number_format(($prix * 0.250), 2, ',', ' ');
        $unite = ($prix * 0.250) < $limite ? 'kgs' : 'tonnes';

        echo "Pour $anneeCourante la valeur du Bitcoin est de " .  number_format($prix, 0, ',', ' ') . " € soit un équivalent de $poidsCourant $unite de pâtes<br>";

        $prix *= $multiplicateur;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corrections PHP && JS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Hello Fucking World !</h1>
<div class="box">
    <h2>PHP</h2>
    <?php

    echo "<h3>#25 #26 #27 calcul de TVA avec une fonction a 2 arguments</h3>";
    echo 'Le montant TTC est de ' . TVA(200, 1.2) . "€<br>";

    echo "<h3>#28 calcul de TVA avec une fonction a 1 argument optionnel</h3>";
    echo 'Le montant TTC est de ' . Calc(1.2) . '€ avec un montant par défaut de 100€<br>';

    echo "<h3>#29 #30 affichage conditionnel de la météo</h3>";
    echo meteo("hiver", -1) . "<br>";

    echo "<h3>#31 portée des variables</h3>";
    sayHello($prenom, $nom);

    echo '<br>';
    echo "<h3>#35 la matrice</h3>";

    // option #1
    for($i = 0; $i<100; $i++) {
        echo "<span style='border: 1px solid purple';> $i </span>";
        if ($i % 10 == 9) {
            echo '<br>';
        }
    }

    echo '<br>';

    // option #2
    echo "<table border=1>";
        $p=0;
        for ($row=0; $row <= 9; $row++) { 
            echo "<tr>";
            for ($col=0; $col <= 9; $col++) { 
            echo "<td>" . $p++ . "</td>";
                }
                echo "</tr>";
        }
    echo "</table>";
    
    echo "<h3>#37 Bitcoin</h3>";

    convertToPasta($prix, $limite, $multiplicateur, $annee, $naissance);
    ?>
</div>
<div class="box" id="jsBox">
    <h2>JS</h2>
</div>
    <script src="main.js"></script>
</body>
</html>