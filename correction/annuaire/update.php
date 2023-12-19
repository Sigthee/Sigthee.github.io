<?php
    require_once('../../function/db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET) && !empty($_GET["id_annuaire"])) {
            $ligne = $bdd->prepare('SELECT * FROM annuaire WHERE id_annuaire=?');
            $ligne->execute(array(
                $_GET['id_annuaire']
            ));
            $ligne = $ligne->fetch(PDO::FETCH_ASSOC);
            if (!empty($ligne)) {
            };
        };
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Informations</legend>
            <pre>
                <label for="nom">Nom *</label>
                <input type="text" name="nom" id="nom" maxlength="30" required value="<?php echo $ligne['nom'] ?>">
                <label for="prenom">Prénom *</label>
                <input type="text" name="prenom" id="prenom" maxlength="30" required value="<?php echo $ligne['prenom'] ?>">
                <label for="prenom">Telephone *</label>
                <input type="tel" name="tel" id="tel" minlength="10" maxlength="10" required value="<?php echo $ligne['telephone'] ?>">
                <label for="nom">Profession</label>
                <input type="text" name="profession" id="profession" maxlength="30" value="<?php echo $ligne['profession'] ?>">
                <label for="nom">Ville</label>
                <input type="text" name="ville" id="ville" maxlength="30" value="<?php echo $ligne['ville'] ?>">
                <label for="postale">Code Postal</label>
                <input type="tel" name="postale" id="postale" minlength="5" maxlength="5" pattern="[0-9]{5}" value="<?php echo $ligne['codepostal'] ?>">
                <label for="adresse">Adresse</label>
                <textarea name="adresse" id="adresse" cols="30" rows="2" maxlength="30"><?php echo $ligne['adresse'] ?></textarea>
                <label for="nom">Date de Naissance</label>
                <input type="date" name="date" id="date" value="<?php echo $ligne['date_de_naissance'] ?>">
                <label for="sexe">Sexe</label>
                <label for="homme">Homme: </label> <input type="radio" name="sexe" id="homme" value="m" required <?php echo $ligne['sexe'] == "m" ? 'checked' : ''  ?>>  <label for="femme">Femme: </label><input type="radio" name="sexe" id="femme" value="f" required <?php echo $ligne['sexe'] == "f" ? 'checked' : ''  ?>> 
                <label for="description">Description</label>
                <textarea name="desc" id="desc" cols="30" rows="5"><?php echo $ligne['description'] ?></textarea>
                <input type="submit" value="Modifier">
            </pre>
        </fieldset>
    </form>
    <?php
        if (isset($_POST) && !empty($_POST)) { 
            $update = $bdd->prepare('UPDATE annuaire SET nom=?, prenom=?, telephone=?, profession=?, ville=?, codepostal=?, adresse=?, date_de_naissance=?, sexe=?, description=? WHERE id_annuaire=?');
            $update->execute(array(
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['tel'],
                strlen($_POST['profession']) <= 0 ? NULL : $_POST['profession'],
                strlen($_POST['ville']) <= 0 ? NULL : $_POST['ville'] ,
                strlen($_POST['postale']) <= 0 ? NULL : $_POST['postale'],
                strlen($_POST['adresse']) <= 0 ? NULL : $_POST['adresse'],
                strlen($_POST['date']) <= 0 ? NULL : $_POST['date'],     
                $_POST['sexe'],
                strlen($_POST['desc']) <= 0 ? NULL : $_POST['desc'],
                $_GET['id_annuaire']
                
            ));
            header('Location: list.php');
        }
    ?>
</body>
</html>