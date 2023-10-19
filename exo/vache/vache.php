<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="../../scripts/jquery-3.7.1.min.js"></script>
    <title>Vache Bleu</title>
</head>
<body>
    <h1>La vache <span class="couleuw">Bleu</span> par Gelett Burgess</h1>
    <p>Je n'ai jamais vu une vache <span class="couleuw">Bleu</span></p>
    <input type="text" name="texte" id="texte">
    <button type="button" class="sub">Changer !</button>
    <script>
        $(document).ready(function() {
            $('.sub').click(function() {
                var couleurVache = $('#texte').val();
                $('.couleuw').text(couleurVache);
            });
        });
    </script>
</body>
</html>