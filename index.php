<?php 
// quand le fichier est lu on veux que le fichier sois lu aussi
require_once("db.php")
?>
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

echo '<pre>'; // pre fait des retour a la ligne avec style
var_dump($tableau);
echo '</pre>';

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

<h2>Register</h2>

<form action="validation.php" method="post">
    <label for="firstname">First name:</label>
    <br>
    <input type="text" name="firstname" id="firstname">
    <br><br>
    <label for="lastname">Last Name:</label>
    <br>
    <input type="text" name="lastname" id="lastname">
    <br><br>
    <label for="email">Email:</label>
    <br>
    <input type="email" name="email" id="email">
    <br><br>
    <label for="password">Password:</label>
    <br>
    <input type="password" name="password" id="password">
    <br><br>
    <label for="cpassword">Confirm password:</label>
    <br>
    <input type="password" name="cpassword" id="cpassword">
    <br>

    <input type="radio" name="gender" id="male" value="male">
    <label for="male">Male</label>

    <input type="radio" name="gender" id="female" value="female">
    <label for="female">Female</label>

    <input type="radio" name="gender" id="other" value="other">
    <label for="other">Other</label>
    <br>

    <input type="submit" value="Submit">
</form>

<?php
//si method "post" rentrer dans le formulaire il faut utiliser "$S_POST"
//sinon si la method "get" est rentrer dans le formulaire il faut utiliser "$_GET"
//la fonction isset sert a regarder si la variable qui lui est donnée est bien définie dans ce cas si elle regarde
//Si la variable "$_POST" est défini
//     if (isset($_POST) && !empty($_POST)) {  // $_GET
//         echo "<pre>"; var_dump($_POST); echo "<pre>";
//         echo $_POST['firstname'];
//         //"sha1" Hash le mot, c'est a dire qu'il le rend illisible
//         //"sha1" "md5"
//         echo sha1($_POST["password"]);

//         $insert = $bdd->prepare("INSERT INTO utilisateur(firstname, lastname, email, password, gender) VALUES (?, ?, ?, ?, ?)");
//         $insert->execute(array($_POST["firstname"],
//         $_POST["lastname"],
//         $_POST["email"],
//         md5($_POST["password"]),
//         $_POST["gender"]
//     ));


// } 

// Je prépare ma commande
$select = $bdd->prepare("SELECT * FROM utilisateur WHERE gender= ?;");

//Je l'execute en lui donnant une valeur à la place des "?"
$select->execute(array($_POST["female"]));

//Je récupère tout ce que me renvoie ma commande
$total = $select->fetchAll(PDO::FETCH_ASSOC);

//Je l'affiche
echo "<pre>";
var_dump($total);
echo "</pre>";

echo $total[8]["gender"];

?>




    <form action="" method="post">
        <label for="yourname">Your name</label><br>
        <input type="text" name="yourname" id="yourname">
        <br>
        <label for="email2">Your mail</label><br>
        <input type="mail" name="email2" id="email2">
        <br>
        <label for="message">Your message</label><br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <label for="number">Give me a number</label><br>
        <input type="number" name="number" id="number">
        <br>
        <input type="submit" value="Envoyer">
    </form>

<?php 


    if (isset($_POST) && !empty($_POST)) {
        settype($_POST["number"], "integer");
        $insert = $bdd->prepare("INSERT INTO utilisateurs2(yourname, email2, message, number) VALUES (?, ?, ?, ?)");
        $insert->execute(array(
            $_POST["yourname"],
            $_POST["email2"],
            $_POST["message"],
            $_POST["number"]
        ));
    }
    
?>

</body>
</html>