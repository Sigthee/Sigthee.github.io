<?php
require_once('../../function/db.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <pre>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
            
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Connexion"><a href="register.php">Créer un compte</a>
        </pre>
    </form>

    <?php
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare("SELECT * FROM connexion WHERE username=? and password=?");
        $select->execute(array(
            $_POST['username'],
            sha1($_POST['password'])
        ));
        $select = $select->fetchAll();
        echo count($select);
        if (count($select) > 0)
            header("Location: ./index.php");
        else
            echo "<script> alert('Nom d\'utilisateur ou mot de passe incorrect') </script>";
    } 
    ?>
</body>
</html>