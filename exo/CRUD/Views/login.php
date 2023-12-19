<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="post">
        <pre>
            <h2>Connexion</h2>
            <label for="pseudo">Pseudo :</label>
            <input type="text" name='pseudo'>
            
            <label for="password">Mot de passe :</label>
            <input type="password" name='password'>

            <input type="submit" value="Se connecter">
        </pre>
    </form>
    <?php
        if (isset($_POST) && !empty($_POST)) {
            require_once('../inc/db.php');
            $select = $bdd->prepare('SELECT * FROM user WHERE pseudo=?');
            $select->execute(array(
                $_POST['pseudo']
            ));
            $select = $select->fetch();
            
            if (password_verify($_POST['password'], $select['mot_de_passe'])){
                echo '<script> alert("Bon mot de passe") </script>';
            } else {
                echo '<script> alert("Mauvais mot de passe") </script>';
            }
        }
    ?>
</body>
</html>