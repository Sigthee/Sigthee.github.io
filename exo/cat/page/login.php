<?php
    require_once("../../../function/dbPaChat.php");
    session_start();
    if (!empty($_SESSION)) {
        header('Location: userpage.php');
    }
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
        <h1>PaChat Login</h1>
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
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" value="Login">
                <a href="./register.php">Créer un compte</a>
            </div>
        </form>
    </section>

    <?php 

        if (isset($_POST) && !empty($_POST)) {
            $select = $bdd->prepare('SELECT * FROM users WHERE (username=:login OR mail=:login) AND password=:password');
            $select->execute(array(
                'login' => $_POST['username'],
                'password' => sha1($_POST['password'])
            ));
            $select = $select->fetch(PDO::FETCH_ASSOC);
            if (empty($select)) {
                echo '<script> alert("Username ou Mot de passe invalide")</script>';
            }else if ($select['auth'] == 2){
                $_SESSION = $select;
                header('Location: adminpannel.php');
            } else if ($select['auth'] == 1){
                $_SESSION = $select;
                header('Location: cashierpannel.php');
            } else {
                $_SESSION = $select;
                header('Location: userpage.php');
            }
        }
    ?>
</body>
</html>