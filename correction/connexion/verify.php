<?php 
require_once('../../function/db.php');

if (isset($_GET) && !empty($_GET)) {
    $select = $bdd->prepare('SELECT * FROM users WHERE token=?');
    $select->execute(array(
        $_GET['token']
    ));
    $select = $select->fetchAll();
    if (empty($select))
        header('Location: login.php');
} else 
    header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification du mail</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="confirm" value="Confirmer">
    </form>

    <?php 
        if (isset($_POST['confirm'])) {
            $update = $bdd->prepare("UPDATE users SET token=NULL, confirm=1 WHERE token=?");
            $update->execute(array(
            $_GET['token']
            ));
            $update = $update->rowCount();
            if ($update > 0) {
                header("Location: login.php?sucess=mail");
            }
            else {
                echo '<script> alert ("Une erreur est survenue") </script>';
            }
        }
    ?>

</body>
</html>