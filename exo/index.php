<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Menu Exercice</title>
</head>
<body>
    <style>
        body {
            background-color: #212121;
            background-image: url("https://www.transparenttextures.com/patterns/diamond-upholstery.png");
            margin: 0;
        }
        h1 {
            top : 0; right : 0; left: 0;
            background-color: #000000;
            background-image: url("https://www.transparenttextures.com/patterns/brick-wall.png");
            color: white;
            font-size: 50px;
            margin-bottom: 400px;
            margin-top: 0;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            border-bottom: 2px ridge gray;
        }
        ul {
            list-style-type: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px 0;
            margin: 400px auto;
            text-align: center;
            width: 800px;
            border-radius: 15px;
            border: 2px ridge black;
            background-color: #000000;
            background-image: url("https://www.transparenttextures.com/patterns/skulls.png");
        }
        li {
            font-size: 40px;
            padding: 10px 10px;
            margin: 40px 0;
            background-color: gray;
            width: 400px;
            border-radius: 15px;
        }
        a {
            color: white;
            text-decoration: none;
        }
    </style>

    <h1>Menu de navigation</h1>
    <?php
        $dir = '../exo';
        $dossiers = scandir($dir);
        echo '<ul>';
        foreach ($dossiers as $lien) {
            if ($lien!= '.' && $lien!= '..') {
                echo "<li><a href=" . $lien . ">" . $lien ."</a></li>";
            } elseif ($lien == '..') {
                echo "<li><a href=" . $lien . "> Retour arrière</a></li>";
            }
        }
        echo '</ul>';
    ?>
    <!-- z index -->
</body>
</html>