<?php
require_once('../../function/db.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    
    <form action="" method="post">
        <pre>
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName" id="firstName"required>

            <label for="lastName">Nom</label>
            <input type="text" name="lastName" id="lastName" required>

            <label for="username">Nom D'utilisateur</label>
            <input type="text" name="username" id="username">

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>

            <label for="confirmPassword">Confirmer le mot de passe</label>
            <input type="password" name="confirmPassword" id="confirmPassword" onchange="checkPassword()" required>

            <input type="submit" value="Register" ><a href="login.php" >Vous avez déja un compte ?</a>
        </pre>
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