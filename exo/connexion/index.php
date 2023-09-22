<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <style>
        body {
            font-size: 5em;
        }
    </style>
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