<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="../../scripts/jquery-3.7.1.min.js"></script>
    <title>Panier</title>
</head>
<body>

        <!-- LISTE A -->
    <select id="listeA" name="listeA" multiple>
        <option value="1">Élément 1</option>
        <option value="2">Élément 2</option>
        <option value="3">Élément 3</option>
        <option value="4">Élément 4</option>
        <option value="5">Élément 5</option>
        <option value="6">Élément 6</option>
        <option value="7">Élément 7</option>
        <option value="8">Élément 8</option>
        <option value="9">Élément 9</option>
        <option value="10">Élément 10</option>
    </select>

        <!-- LISTE B -->
    <select id="listeB" name="listeB" multiple>

    </select>

        <!-- Bouttons -->
    <button id="deplacer" disabled>Déplacer</button>
    <button id="supprimer" disabled>Supprimer</button>
    <form method="post">
        <button id="pay" disabled>Payer</button>
    </form>

    <script>
        $(document).ready(function() {

                // Gérer les sélections dans la liste A
            $("#listeA").change(function() {
                var selectA = $("#listeA option:selected");         // Vérifier si la liste A est vide
                
                $('#deplacer').prop('disabled', selectA.length == 0);
                $('#supprimer').prop('disabled', true);
            });

                // Gérer les sélections dans la liste B
            $("#listeB").change(function() {
                var selectB = $("#listeB option:selected");         // Vérifier si la liste B est vide
                
                $('#supprimer').prop('disabled', selectB.length == 0);
                $('#deplacer').prop('disabled', true);

                if (selectB.length > 0) {
                    $('#pay').prop('disabled', false);              // Activer le bouton "Payer" si des éléments sont sélectionnés dans la liste B
                } else {
                    $('#pay').prop('disabled', true);
                }
            });

                // Gérer le bouton de déplacement
            $("#deplacer").click(function() {
                var ajouter = $("#listeA option:selected");         // Sélectionner l'élément sélectionné dans la liste A
                
                if (ajouter.length > 0) {
                    var cloneA = ajouter.clone();                   // Cloner l'élément sélectionné
                    $("#listeB").append(cloneA);                    // Ajouter le clone à la liste B
                    ajouter.remove();                               // Supprimer l'élément original de la liste A
                }
                ajouter.prop('selected', false);                    // Désélectionner les éléments après déplacement
                $('#deplacer').prop('disabled', true);              // Désactiver le bouton
                $('#supprimer').prop('disabled', false);             // Désactiver le bouton supprimer
                $('#pay').prop('disabled', true);                   // Désactiver le bouton "Payer" lors du déplacement
            });

                // Gérer le bouton supprimer
            $("#supprimer").click(function() {
                var supr = $("#listeB option:selected");            // Sélectionner l'élément sélectionné dans la liste B
                
                if (supr.length > 0) {
                    var cloneB = supr.clone();                      // Cloner l'élément sélectionné
                    $("#listeA").append(cloneB);                    // Ajouter le clone à la liste A
                    supr.remove();                                  // Supprimer l'élément original de la liste B
                }
                supr.prop('selected', false);                       // Désélectionner les éléments après suppression
                $('#supprimer').prop('disabled', true);             // Désactiver le bouton
                $('#deplacer').prop('disabled', true);              // Désactiver le bouton déplacer
                $('#pay').prop('disabled', true);                   // Désactiver le bouton "Payer" lors de la suppression
            });
        });
    </script>

</body>
</html>