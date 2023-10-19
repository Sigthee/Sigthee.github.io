<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="boate.css">
    <script src="../../scripts/jquery-3.7.1.min.js"></script>
    <title>Les Boates</title>
</head>
<body>
    <section>
        <div id="boiteBoite">
            <div class="boite"></div>
            <div class="boite"></div>
            <div class="boite"></div>
        </div>
        <h1>Modifications</h1>
        <div id="menu">
            <button id="addColor">Activer/Desactiver la Couleur</button>
            <button id="addBorderRadius">Activer/Desactiver les bords arrondis</button>
            <button id="addBox">Ajouter une nouvelle boîte</button>
        </div>

        <h1>Descriptions:</h1>

        <ul>
            <li>Activer/Désactiver la couleur: Activer/Désactiver la couleur rouge</li>
            <li>Activer/Désactiver les bords arrondis: Le contour des boîtes alterne entre arrondis ou droit</li>
            <li>Ajouter une nouvelle boîte: Ajouter une boîte au conteneur.</li>
        </ul>
    </section>
    
    <script>
        $(document).ready(function() {
            $('#addBox').click(function() {
                $("#boiteBoite").append("<div class='boite'></div>");
            })
            $('#addColor').click(function() {
                $(".boite").toggleClass("rouge");
            });
            $('#addBorderRadius').click(function() {
                $(".boite").toggleClass("radius");
            });
        });
    </script>

</body>
</html>