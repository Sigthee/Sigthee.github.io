<?php
    require_once ('../../../function/crud.php');
?>


<?php
        if (isset($_POST) && !empty($_POST)) {
            $insert = $bdd->prepare ("INSERT INTO user (pseudo, mot_de_passe, description) VALUES (?,?,?)");
            $insert->execute(array(
                $_POST['pseudo'],
                password_hash($_POST['mot_de_passe'], PASSWORD_ARGON2I),
                $_POST['description']
            ));
            header('Location: ../index.php');
        }
    ?>