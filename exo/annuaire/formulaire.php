<?php
    require_once('../../function/db.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="./style/style.css">
    <meta charset="UTF-8">
    <title>Annuaire</title>
</head>
<body>
    <!-- Créer un formulaire en php qui resemble à celui ci : 
    https://cdn.discordapp.com/attachments/550289332812906504/1163773698625511424/image.png?ex=6540cbb7&is=652e56b7&hm=aa9c41f65f2692145768cac347b0c78eeb43e691f311679e1ab7d64bddde95a8&
    
    Il devra être fonctionnel et être incrémenter dans une base donnée
    dans une table qui s'appelle annuaire qui resembler à ceci :

    - id_annuaire (INT, 3, AI)
    - nom (VARCHAR, 30)
    - prenom (VARCHAR, 30)
    - telephone (INT, 10)
    - profession (VARCHAR, 30)
    - ville (VARCHAR, 30)
    - codepostal (INT, 5)
    - adresse (VARCHAR, 30)
    - date_de_naissance (DATE)
    - sexe (tinyint,1, 'm','f')
    - description (TEXT) -->

    <img src="./img/image.png" alt="formulaire">

        <fieldset>
            <legend>Informations</legend>
            <form method="post">
                <label for="nom">Nom* :</label>
                <input type="text" name="nom" id="nom" maxlength="30" required>
                
                <label for="prenom">Prénom* :</label>
                <input type="text" name="prenom" id="prenom" maxlength="30" required>
                
                <label for="telephone">Téléphone* :</label>
                <input type="tel" name="telephone" id="telephone" maxlength="10" required>
                
                <label for="profession">Proféssion :</label>
                <input type="text" name="profession" id="profession" maxlength="30">
                
                <label for="ville">Ville :</label>
                <input type="text" name="ville" id="ville" maxlength="30">
                
                <label for="codepostal">Code Postal :</label>
                <input type="tel" name="codepostal" id="codepostal" maxlength="5"">
                
                <label for="adresse">Adresse :</label>
                <input type="text" name="adresse" id="adresse" maxlength="30">
                
                <label for="date_de_naissance">Date de naissance :</label>
                <input type="date" name="date_de_naissance" id="date_de_naissance" value="2000-01-01">
                
                <br>

                <label for="sexes">sexe</label>
                <div>
                    <label for="sexe">homme</label>
                    <input type="radio" name="sexe" id="sexe" value="m" required> 
                    
                    <label for="sexe">femme</label>
                    <input type="radio" name="sexe" id="sexe" value="f" required>
                </div>

                <br>
                
                <label for="description">Description :</label>
                <textarea name="description" id="description" cols="25" rows="5"></textarea>

                <input type="submit" value="enregistrement">
            </form>
        </fieldset>

        <?php
            if (isset($_POST) && !empty($_POST)) {
                $insert = $bdd->prepare('INSERT INTO annuaire (nom, prenom, telephone, profession, ville, codepostal, adresse, date_de_naissance, sexe, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
                $insert->execute(array (
                    $_POST['nom'],
                    $_POST['prenom'],
                    $_POST['telephone'],
                    $_POST['profession'],
                    $_POST['ville'],
                    (INT)$_POST['codepostal'],
                    $_POST['adresse'],
                    $_POST['date_de_naissance'],
                    $_POST['sexe'],
                    $_POST['description']
                ));
            }
        ?>
        
</body>
</html>