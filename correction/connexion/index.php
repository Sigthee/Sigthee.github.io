<?php 
session_start();
    if (empty($_SESSION)) 
        header('Location: login.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour, <?php echo $_SESSION['genre'] == 'm' ? 'M' : 'Mme' ?> <?php echo $_SESSION['nom']?> <?php echo $_SESSION['prenom']?> !</h1>

    <a href="deconnexion.php">Déconnexion</a>


</body>
</html>