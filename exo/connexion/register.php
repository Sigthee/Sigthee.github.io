<?php
require_once('../../function/db.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/register.css">
    <title>Register</title>
</head>
<body>
    
    <form action="" method="post">
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName" id="firstName"required>
            <br>
            <label for="lastName">Nom</label>
            <input type="text" name="lastName" id="lastName" required>
            <br>
            <label for="username">Nom D'utilisateur</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="confirmPassword">Confirmer MDP</label>
            <input type="password" name="confirmPassword" id="confirmPassword" onchange="checkPassword()" required>
            <br>
            <input type="submit" value="Register" >
            <br>
            <a href="login.php" >Vous avez déja un compte ?</a>
    </form>

    <?php
        if (isset($_POST) && !empty($_POST)) {
            $select = $bdd->prepare('SELECT * FROM connexion WHERE username=?');
            $select-> execute(array($_POST['username']));
            $select = $select->fetchAll();
            if (count($select) <=0) {
                $insert = $bdd->prepare('INSERT INTO connexion(firstName, lastName, username, password) VALUES (?, ?, ?, ?)');
                $insert->execute(array(
                    $_POST['firstName'],
                    $_POST['lastName'],
                    $_POST['username'],
                    sha1($_POST['password'])
            ));
            header("Location: login.php");
            } else {
                echo '<script> alert("Nom d\'utilisateur déja pris") </script>';
            }
        }
    ?>

    <script>
        function checkPassword() {
            let password = document.getElementById('password')
            let confirm = document.getElementById('confirmPassword')

            if (password.value !== confirm.value) {
                confirm.setCustomValidity('Les mots de passes ne sont pas identique')
            } else
                confirm.setCustomValidity('')
        }
    </script>

</body>
</html>