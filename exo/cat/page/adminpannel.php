<?php
    require_once("../../../function/dbPaChat.php");
session_start();
    if (empty($_SESSION)) {
        header('Location: login.php');
    }

    function GenerateToken($length) {
        $token = "0123456789";
        return substr(str_shuffle(str_repeat($token, $length)), 0, $length);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/adminpannel.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Pachat ADMIN</title>
</head>
<body>
    <nav>
        <h1>PaChat</h1>
        <div>
            <h2>Contact</h2>
            <a href="deconnexion.php">Déconnexion</a>
            <box-icon type='solid' name='moon' color="#fff" animation='tada-hover'></box-icon>
            <box-icon name='sun' type='solid' color="#fff" animation='tada-hover'></box-icon>
        </div>
    </nav>

    <section>
        <div class='user'>
            <h1>Panneau d'accès ADMINISTRATEUR</h1>
            <div>
                <box-icon type='solid' name='user-circle' color="black" size="100px"></box-icon>
                <h2><?php echo $_SESSION['username']?></h2>
            </div>
        </div>

        <div class='cashiers'>
            <h2>Ajout Caissier</h2>
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
                </div>
            </form>
        </div>

        <div class='cats'>
            <h2>Ajouter un chat</h2>
            <form method="post">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name">

                <label for="color">Couleur :</label>
                <input type="text" name="color" id="color">

                <input type="submit" value="Ajouter">
            </form>
        </div>
            
    </section>

    <?php
    
    // Ajout de Cashiers

        if (isset($_POST) && !empty($_POST)) {
            $select = $bdd->prepare("SELECT * FROM users WHERE username=? AND mail=?");
            $select->execute(array($_POST['username'], $_POST['mail']));
            $select = $select->fetchAll();
            if (empty($select)) {
                $insert = $bdd->prepare("INSERT INTO users (username, mail, password, auth) VALUE (?, ?, ?, 1)");
                $insert->execute(array(
                    $_POST["username"],
                    $_POST["mail"],
                    sha1($_POST["password"])
                ));
            }
        }


        // Ajout de chats

        if (isset($_POST) && !empty($_POST)) {
            $token = GenerateToken(15);
            $select = $bdd->prepare("SELECT * FROM cat WHERE name=? AND token=?");
            $select->execute(array(
                $_POST['name'],
                $token
            ));
            $select = $select->fetchAll();
            if (empty($select)) {
                $insert = $bdd->prepare('INSERT INTO cat(name, color, token) VALUE (?, ?, ?)');
                $insert->execute(array(
                    $_POST['name'],
                    $_POST['color'],
                    $token
                ));
            }
        }
    ?>
</body>
</html>