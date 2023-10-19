<?php
    require_once('../../function/db.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/style.css">
    <title>Tableau</title>
</head>
<body>
    <!-- Il devra avoir un tableau HTML qui récupère toute les lignes de la 
    base de donnée annuaire 

    En devra avoir la possibilité de modifier certaine ligne ou supprimé-->

    <fieldset>
        <legend>Informations</legend>
        <form method="post">
            <label for="nom">Nom* :</label>
            <input type="text" name="nom" id="nom" maxlength="30" required value="<?php $nom ?>">
            
            <label for="prenom">Prénom* :</label>
            <input type="text" name="prenom" id="prenom" maxlength="30" required value="<?php $prenom ?>">
            
            <label for="telephone">Téléphone* :</label>
            <input type="tel" name="telephone" id="telephone" maxlength="10" required value="<?php $telephone ?>">
            
            <label for="profession">Proféssion :</label>
            <input type="text" name="profession" id="profession" maxlength="30" value="<?php $profession ?>">
            
            <label for="ville">Ville :</label>
            <input type="text" name="ville" id="ville" maxlength="30" value="<?php $ville ?>">
            
            <label for="codepostal">Code Postal :</label>
            <input type="tel" name="codepostal" id="codepostal" maxlength="5" value="<?php $codepostal ?>">
            
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" maxlength="30" value="<?php $adresse ?>">
            
            <label for="date_de_naissance">Date de naissance :</label>
            <input type="date" name="date_de_naissance" id="date_de_naissance" value="2000-01-01" value="<?php $dateNaissance ?>">
            
            <br>

            <label for="sexes">sexe</label>
            <div>
                <label for="sexe">homme</label>
                <input type="radio" name="sexe" id="sexe" value="m" required> 
                
                <label for="sexe">femme</label>
                <input type="radio" name="sexe" id="sexe" value="f" required>
            </div>

            <br>
            
            <label for="description">Description :</label>
            <textarea name="description" id="description" cols="25" rows="5"></textarea>

            <input type="submit" value="enregistrement">
        </form>
    </fieldset>

    <form method="post">
        <table>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>téléphone</th>
                <th>profession</th>
                <th>ville</th>
                <th>code postal</th>
                <th>adresse</th>
                <th>date de naissance</th>
                <th>sexe</th>
                <th>description</th>
            </tr>

            <?php
                $select = $bdd->prepare('SELECT * FROM annuaire');
                $select->execute();
                $select = $select->fetchAll();
                if (!empty($select)) {
                    foreach ($select as $valeur) {
                        $id = $valeur['id_annuaire'];
                        $nom = $valeur['nom'];
                        $prenom = $valeur['prenom'];
                        $telephone = $valeur['telephone'];
                        $profession = $valeur['profession'];
                        $ville = $valeur['ville'];
                        $codepostal = $valeur['codepostal'];
                        $adresse = $valeur['adresse'];
                        $dateNaissance = $valeur['date_de_naissance'];
                        $sexe = $valeur['sexe'];
                        $description = $valeur['description'];

                        echo "<tr> 
                            <td> $id </td>
                            <td> $nom </td>
                            <td> $prenom </td>
                            <td> $telephone </td>
                            <td> $profession </td>
                            <td> $ville </td>
                            <td> $codepostal </td>
                            <td> $adresse </td>
                            <td> $dateNaissance </td>
                            <td> $sexe </td>
                            <td> $description </td>
                            <td> <button name='delete' value='$id'>Supprimer</button> </td>
                            <td> <button name='delete' value='$id'>Modifier</button> </td>
                        </tr>";
                    }
                }
            ?>
        </table>
    </form>

    <?php
        if (!empty($_POST['delete'])) {
            $delete = $bdd->prepare('DELETE FROM annuaire WHERE id_annuaire=?');
            $delete->execute(array(
                $_POST['delete']
            ));
        }
    ?>

</body>
</html>