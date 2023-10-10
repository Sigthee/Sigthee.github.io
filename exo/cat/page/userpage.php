<?php
session_start();
    if (empty($_SESSION)) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/userpage.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Pachat</title>
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
        <div>
            <box-icon type='solid' name='user-circle' color="black" size="100px"></box-icon>
            <h2><?php echo $_SESSION['username']?></h2>
        </div>
    </section>
</body>
</html>