<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Horloge</title>
</head>
<body>
    <!-- Faite un minuteur numérique
    On doit pouvoir changer le te,ps qu'il dure avec un formulaire -->

    <?php
    $heure = 24;
    $minute = 60;
    $seconde = 60;
    ?>
    <script>
        var heure = <?php echo $heure; ?>;
        var minute = <?php echo $minute; ?>;
        var seconde = <?php echo $seconde; ?>;
        
        function Minuteur() {
            
            if (heure > 0) {
                heure--
            } else if (heure == 0) {
                heure = 0
                minute--
            }
            if (minute == 0) {
                minute = 60
                seconde--
            }
            console.log(heure, minute, seconde)
            setInterval(Minuteur, 1000)
        } 

    </script>
</body>
</html>