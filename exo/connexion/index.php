<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/index.css">
    <title>Page d'accueil</title>
</head>
<body>
    <?php
    session_start();
    
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $firstName = $user['firstName'];
        $lastName = $user['lastName'];
        echo "Bienvenue, $firstName $lastName!";
    } else {
        header("Location: login.php");
    }
    ?>
</body>
</html>