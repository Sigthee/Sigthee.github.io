<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création user</title>
</head>
<body>
    <a href="../index.php">HUB</a>
    <form action="../Controllers/create_ctrl.php"  method="post">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo">
        
        <label for="mot_de_passe">Mot de passe</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe">
        
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
        
        <input type="submit" value="Créer">
    </form>
</body>
</html>