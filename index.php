<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <title>Cours PHP</title>
</head>
<body>
    <?php 
    echo "<p class='test'>Bonjour</p> <br>";
    // j'affiche "Bonjour" sur ma page dans une balise p avec comme classe "test"
    echo "<p>" . "Bonjour" . "</p>";
    $cookie = 10; // integer
    // $ = var/let
    // Je défini ma variable avec "$" puis je lui donne le nom "cookie" et je lui rentre la valeur "10"

    $phrase = "<br>Je suis une phrase"; //String
    
    $nombre = 1.4; // float

    $choix = true; // booléen

    /* 
    Integer => Nombre Entier comme 50, 47, 874698
    Float => Nombre a virgule comme 14.54, 4.54224234, 1.0005
    String => Chaine de caratères comme
        "Bonjour"
        "Je code sur ordinateur"
    Booléen => true(vrai) ou false(faux)
    Array =>
        Indexés
        Associatif
    Null => NULL
    */
    echo $phrase;

    //les conditions

    $condition = false;

    if ($condition) {
        echo "<br>Je passe ici donc c'est vrai";
    } else {
        echo "<br>Je passe par la donc c'est faux";
    }

    $code = 4227;

// Le "==" prend en compte aue la variable soit égale
// Le "===" prend en compte aue la variable soit égale et du même type
    if ($code == 4227) {
        echo "<br>Le code est correct";
    } else {
        echo "<br>Le code n'est pas correct";
    }

$couleur = "bleu";
echo "<p>J'ai une Autruche de couleur" . $couleur . "</p>";

if ($couleur == "rouge") {
    echo "<p>J'ai une autruche de couleur rouge</p>";
} else if ($couleur == "bleu") {
    echo "<p>J'ai une autruche de couleur bleue</p>";
} else {
    echo "<p>J'ai pas d'autruche</p>";
}


// écriture Ternaire

$a = 15;
$un = $a > 11 ? 1 : 0;
// Si "$a" est suprérieur a "11" alors "$un" est égal à "1" sinon il sera égal à 0

//les switch

echo "didier";
$tailles = 187;
switch ($tailles) {
    case 120:
        echo "<p>Tu as atteind le nanisme.</p>";
        break;
    case 150:
        echo "<p>Tu es très petit(e)</p>";
        break;
    case 170:
        echo "<p>Tu as une taille convenable</p>";
        break;
    case 200:
        echo "<p>Trop grand</p>";
        break;
    default:
        echo "<p>Tu n'existe pas</p>";
        break;
}

    //les tableaux
//           0  1   2    3         4
$tableau = [42, 78, 48, 148, "Une Autruche"];
echo $tableau[4];

echo '<pre>';
var_dump($tableau);
echo '<pre>';

$exo = [4, 12, 78, 98, 65];
$resultat = $exo[2] - ($exo[0]*$exo[1]);
echo $resultat;
// 78-(4*12)
//la valeur de $resultat doit etre egal a 30 en utilisant  que les nombres qui se trouve dans le tableau

//tableaux associatifs

$tab_assoc = [
    "voiture" => "Wolkswagen", //type string
    "animal" => "Perroquet", //type string
    "chiffre" => 10, //type integer
    "calvitie" => true, // type booleene
    "legume" => null // type null
];
// j'ai fait un tableau associatif avec 5 valeurs qui on une index que j'ai défini moi même
// "voiture" est une index et "wolkswagen" est sa valeur
// "animal" est une index et "Perroquet" est sa valeur
// ainsi de suite

$tab_assoc['bras'] = false;
// j'ai défini un nouvel index bras avec comme valeur faux

echo "<pre>";
var_dump($tab_assoc);
echo "</pre>";

//les boucles

//la boucle while

$o = 0;
while(false) {
    $o++;
    echo "<p>Je passe dans la boucle</p>";
    if ($o == 5) {
        break;
    }
}


//la boucle do-while

do {
    echo "Je passe dans la boucle do-while";
} while (false);


// la boucle for

for ($i=0; $i < 10; $i++) {
    echo "<br>Je suis passé " . $i+1 . " fois dans la boucle for";
}

   /* 
    Créer un tableau Associatif en mettant une 
    index bras de type booléen et une index 
    jambe qui va être un integer
    */

    /* 
    Si il n'a pas de jambe ni de bras
        Tu es un e-tronc !
    Sinon si il n'a pas de bras
        Pas de bras pas de chocolat
    Sinon
        Tu es basique donc tu es nul
    */

$tab_exo = [
    "bras" => true,
    "jambe" => 51,
];

if ($tab_exo["bras"] == false && $tab_exo["jambe"] == 0) {
    echo "<br><p>Tu es un e-tronc</p>";
} else if ($tab_exo["bras"] == false) {
        echo "<br><p>Pas de bras pas de chocolat</p>";
    } else {
        echo "<br><p>Tu es un Fred</p>";
    }

    
    ?>


</html>