<?php
    require_once ("../../function/crud.php");
    ob_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
    <!-- CRUD: CREATE, READ(SELECT), UPDATE, DELETE -->
    <!-- Vous allez avoir plusieurs fichier 
    Dans un dossier 'Views' vous avez: create.php, read.php, update.php
    Dans un dossier 'Controllers' vous avez: create_ctrl.php, read_ctrl.php, update_ctrl.php, delete_ctrl.php 

    Vous devez créer une base de donnée que vous nommerez crud avec interclassement 
    utf8_general_ci (mb3 ou mb4)

    Dans cette base de donnée, vous allez créer une table user avec 3 attributs id, pseudo, mot_de_passe, description

    L'id' sera un entier et la clé primaire de la table sera auto incrémenté
    "Pseudo" sera en varchar 255 tout comme "motDePasse"
    "description" sera en TEXT

    L'index.php affichera un tableau de user, chaque ligne de ce tableau affichera les informations 
    (id, pseudo, mot de passe hashé, description) de cet user et permettra aussi la suppression, 
    la modification et l'affichage d'un user via un bouton ou un lien
    L'index.php affichera  aussu un bouton permettant la création d'un user
    create.php affichera le formulaire de création d'user
    update.php affichera le formulaire prérempli d'user afin de la modifier
    read.php afficher une liste à puce des informations de l'user
    -->

    <a href="./Views/create.php">Création User</a>
    <form method="post">

    
        <table>
            <tr>
                <th>ID</th>
                <th>Pseudo</th>
                <th>Mot de passe</th>
                <th>Description</th>
            </tr>
        

            <?php
                $tableau = $bdd->prepare('SELECT * FROM user');
                $tableau->execute();
                $tableau = $tableau->fetchAll(PDO::FETCH_CLASS);

                if (!empty($tableau)) {
                    foreach ($tableau as $ligne) {
                        echo "<tr>";
                        
                        foreach ($ligne as $colonne) {
                            echo "<td>$colonne</td>";
                        }
                        
                        echo '<td> 
                            <button name="remove" value="' . $ligne->id . '">Supprimer</button>
                            <button name="modify" value="' . $ligne->id . '">Modifier</button> 
                            </td>';

                        echo "</tr>";
                    }
                    if (isset($_POST) && !empty($_POST)) {
                        if (!empty($_POST['remove'])) {
                            $delete = $bdd->prepare("DELETE FROM user WHERE id=?");
                            $delete->execute(array(
                                $_POST['remove']
                            ));
                            header("Location: index.php");
                        } elseif (!empty($_POST['modify'])) {
                            header("Location: ./Controllers/update_ctrl.php?id=". $_POST['modify']);
                        }
                    }
                }
            ?>

        </table>
    </form>
</body>
</html>