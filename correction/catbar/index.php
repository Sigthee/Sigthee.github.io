<?php 
session_start();
require_once('../../function/dbcat.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Accueil</title>
</head>
<body>
    <?php 
        $_GET['page'] = 'index';
        include 'inc/header.php'; ?>
    <br><br><br><br><br>
    <div>
        <p>Bienvenue petit chaventurier</p>
    </div>

    <?php if(!empty($_SESSION)) : ?>
        <!-- Je créer un if global qui ce permet de passer en html pour
        executer ou non les lignes qui trouve entre les balise if et endif -->

        <div>
            <form method="post">
                <h2>Faire une réservation (15 min)</h2>
                <label for="cat">Chat :</label>
                <!-- <datalist id="cat">
                    <option value="Ronron"></option>
                    <option value="Lily"></option>
                    <option value="Pompette"></option>
                    <option value="Garfield"></option>
                </datalist>
                <input list='cat'> -->
                <select name="cat" id="catSelect" required>
                    <?php
                        $select = $bdd->prepare('SELECT * FROM cat WHERE veto=0 AND transfer=0');
                        $selectCat->execute();
                        $selectCat = $selectCat->fetchAll();
                        if (!empty($selectCat)) {
                            $selectRes = $bdd->prepare('SELECT * FROM reservation');
                            $selectRes->execute();
                            $selectRes = $selectRes->fetchAll();
                            

                            // for ($i=0; $i < count($select) ; $i++) { 
                            //     echo "<option value='" . $select[$i]['id'] . "'>" . $select[$i]['prenom'] . "</option>";
                            // }
                        }
                    ?>
                </select>
                <label for="table">N° Table :</label>
                <select name="table" id="table" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="date">Date :</label>
                <input type="datetime-local" name="date" id="date" oninput="ChangeDate()"
                    value="<?php echo date('Y-n-d'); ?>T<?php echo date('H')+2; ?>:00" 
                    min="<?php echo date('Y-n-d'); ?>T08:00"
                    step="900"
                    max="<?php echo date('Y-n')?>-<?php echo date('d')+7; ?>T10:00" required>

                    <script>
                        function ChangeDate() {
                            let Element = document.getElementById('date')
                            let temporaire = Element.value.split('T')

                            if (parseint(temporaire[1]) > 19) {
                                Element.setCustomValidity('A cette heure on est fermé')
                            } else {
                                Element.setCustomValidity('')
                            }
                            let theo = [
                                '00',
                                '15',
                                '30',
                                '45'
                            ]

                            let minute = temporaire[1].split(':')[1]

                            theo.forEach(function(lavabo) {
                                if (minute)
                            })
                        }
                    </script>
                    
                <label for="comment">Commentaire :</label>
                <textarea name="comment" id="comment" cols="30" rows="5" maxlength='255'></textarea>
                <input type="submit" value="Faire ma réservation">
            </form>
        </div>

        <?php 
        if (isset($_POST) && !empty($_POST)) {
            $insert = $bdd->prepare('INSERT INTO reservation(id_client, id_cat, date, comment, tab) VALUES (?, ?, ?, ?, ?)');
            $insert->execute(array(
                (int)$_SESSION['id'],
                (int)$_POST['cat'],
                str_replace('T', ' ', $_POST['date']),
                $_POST['comment'],
                (int)$_POST['table']
            ));
            header('Location: index.php');
        }
        ?>
    <?php endif; ?>


<br><br><br>

    <?php include 'inc/footer.php'; ?>
</body>
</html>