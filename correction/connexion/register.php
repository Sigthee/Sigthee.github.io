<?php
    require_once("../../function/db.php");
    require_once("./mail.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/connexion.css">
    <title>Inscription</title>
</head>
<body>
    <form action="" method="post">
        <pre>
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" id="firstname" required>

            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" required>

            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required oninput="singleUsername()">

            <label for="mail">Email : </label>
            <input type="email" name="mail" id="mail" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>

            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" name="confirm_password" id="confirm_password" oninput="changeValue()" required>

            <label for="masculin">Masculin</label><input type="radio" name="genre" id="genre" value="m" required>
            <label for="feminin">Féminin </label><input type="radio" name="genre" id="genre" value="f" required>
            <br>
            <input type="submit" value="S'inscrire">
            <a href="./login.php">Vous avez déja un compte ?</a>
        </pre>
    </form>

    <?php
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare("SELECT * FROM users WHERE username=? AND mail=?");
        $select->execute(array($_POST['username'], $_POST['mail']));
        $select = $select->fetchAll();
        if (empty($select)) {
            $token = GenerateToken(50);
            $insert = $bdd->prepare('INSERT INTO users(prenom, nom, username, mail, genre, password, token) VALUE (?, ?, ?, ?, ?, ?, ?);');
            $insert->execute(array(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['username'],
                $_POST['mail'],
                $_POST['genre'],
                sha1($_POST['password']),
                $token
            ));
            $msg = "Lien pour vérifier votre adresse mail : http://localhost/cours/Sigthee.github.io/correction/connexion_C/verify.php?token=$token";
            SendEmail($_POST['mail'], $msg, "Validation adresse mail", "DWWM");

            header("Location: login.php");
        } else
            echo '<script>alert ("Ce pseudo est déja utilisé</script>';
    }
    ?>

    <script>
        function changeValue() {
            let password = document.getElementById('password')
            let confirmPassword = document.getElementById('confirm_password')

            if (password.value == confirmPassword.value)
                confirmPassword.setCustomValidity('')

                else
                confirmPassword.setCustomValidity('Les mots de passe doivent être identique')
        }
        function singleUsername() {

        }
    </script>
</body>
</html>