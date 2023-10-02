<?php
    require_once("../../function/db.php");
    require_once('./mail.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/connexion.css">
    <title>mot de passe oublié</title>
</head>
<body>
    <form action="" method="post">
        <h1>Réinitialisation du mot de passe</h1>
        <label for="mail">Adresse Email</label>
        <input type="email" name="mail" id="mail" required>
        <input type="submit" value="envoyer le lien">
    </form>

    <?php
        if (isset($_POST) && !empty($_POST)) {
            $select = $bdd->prepare("SELECT * FROM users WHERE mail=?");
            $select->execute(array($_POST['mail']));
            $select = $select->fetchAll();
            if (empty($select)) {
                echo '<script>alert ("Email incconue") </script>';
            } else {
                $token = GenerateToken(50);
                $update = $bdd->prepare("UPDATE users SET token=? WHERE mail=? AND id=?");
                $update->execute(array(
                    $token,
                    $_POST['mail'],
                    $select[0]['id']
                ));
                $msg = "Lien pour réinitialiser votre mot de passe : http://localhost/cours/Sigthee.github.io/correction/connexion_C/reset.php?id=" . $select[0]['id'] . "&token=$token";  
                SendEmail($_POST['mail'], $msg, 'Réinitialisation du mot de passe', 'DWWM');
            }
        }
    ?>
</body>
</html>