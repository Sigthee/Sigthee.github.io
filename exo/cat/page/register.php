<?php
    require_once("../../../function/dbPaChat.php")
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="../style/login.css">
    <title>Login PaChat</title>
</head>
<body>
<nav>
        <h1>PaChat Register</h1>
        <div>
            <h2>Contact</h2>
            <a href="../index.php">Accueil</a>
            <box-icon type='solid' name='moon' color="#fff" animation='tada-hover'></box-icon>
            <box-icon name='sun' type='solid' color="#fff" animation='tada-hover'></box-icon>
        </div>
    </nav>
    <section>
        <form method="post">
            <div>
                <label for="username">Utilisateur :</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div>
                <label for="mail">Email :</label>
                <input type="mail" name="mail" id="mail" required>
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" oninput="confirmation()" required>
            </div>
            <div>
                <label for="confirm">Confirmer mot de passe :</label>
                <input type="password" name="confirm" id="confirm" oninput="confirmation()" required>
            </div>
            <div>
                <input type="submit" value="Register">
                <a href="./login.php">Déja un compte ?</a>
            </div>
        </form>
    </section>

    <?php 
        if (isset($_POST) && !empty($_POST)) {
            $select = $bdd->prepare("SELECT * FROM users WHERE username=? AND mail=?");
            $select->execute(array($_POST['username'], $_POST['mail']));
            $select = $select->fetchAll();
            if (empty($select)) {
                $insert = $bdd->prepare("INSERT INTO users (username, mail, password, auth) VALUE (?, ?, ?, 0)");
                $insert->execute(array(
                    $_POST["username"],
                    $_POST["mail"],
                    sha1($_POST["password"]),
                    $_POST['auth']
                ));
                header('Location: login.php');
            } else {
                echo '<script>alert ("Pseudo ou Adresse mail déja utilisée")</script>';
            }
        }
    ?>

    <script>
        function confirmation() {
            let password = document.getElementById('password')
            let confirmPassword = document.getElementById('confirm')

            if (password.value == confirmPassword.value) {
                confirmPassword.setCustomValidity('')
            }
            else 
            confirmPassword.setCustomValidity('Les mots de passe doivent être identique')
        }
    </script>
</body>
</html>