<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Calculatrice</title>
</head>
<body>
    <!-- Faire un formulaire en forme de calculatrice ou on poura calculer -->

    <script>
        function ajoutValeur(value) {
            document.getElementById("result").value += value;
        }
        function clearResult() {
            document.getElementById("result").value = "";
        }
        function calculResult () {
            const result = eval(document.getElementById("result").value);
            document.getElementById("result").value = result;
        }
    </script>


    <section>
        <form>
            <div id="divCentre">
                <input type="text" name="result" id="result" readonly>
            </div>
            <div id="numpad">
                <div class="button" onclick="ajoutValeur('7')">7</div>
                <div class="button" onclick="ajoutValeur('8')">8</div>
                <div class="button" onclick="ajoutValeur('9')">9</div>
                <div class="button" onclick="ajoutValeur('/')">/</div>
                <div class="button" onclick="ajoutValeur('4')">4</div>
                <div class="button" onclick="ajoutValeur('5')">5</div>
                <div class="button" onclick="ajoutValeur('6')">6</div>
                <div class="button" onclick="ajoutValeur('*')">x</div>
                <div class="button" onclick="ajoutValeur('1')">1</div>
                <div class="button" onclick="ajoutValeur('2')">2</div>
                <div class="button" onclick="ajoutValeur('3')">3</div>
                <div class="button" onclick="ajoutValeur('-')">-</div>
                <div class="button" onclick="ajoutValeur('0')">0</div>
                <div class="button" onclick="clearResult()">C</div>
                <div class="button" onclick="calculResult()">=</div>
                <div class="button" onclick="ajoutValeur('+')">+</div>
            </div>
        </form>
    </section>
</body>
</html>