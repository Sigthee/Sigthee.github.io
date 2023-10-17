<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fonction</title>
</head>
<body>
    <?php
        # Créer une fonction en php qui s'appel MajourOuMinour qui a comme paramètre l'âge et 
        # qui doit retourner 'tou es minour' si l'âge est plus petit que 18 sinon ca retourne 'tou es majour'
    ?>

    <form>
        <label for="age">Age :</label>
        <input type="number" name="age" id="age" min="0" max="99">
        <input type="button" value="VERIFIE TON AGE FILS DE PORTUGAIS DE MERDE DE TOUTE FACON TU AS ETE ADOPTE GROS CHIEN, dsl bisous mon bébou <3" onclick="portugech()">
    </form>

    <script>
        function portugech() {
            var ageInput = document.getElementById('age');
            var age = parseInt(ageInput.value);

            if (age < 18) {
                alert('tou es minour')
            } else {
                alert('tou es majour')
            }
        }
    </script>

    <?php
        # Créer une fonction EN PHP qui s'appel RemplacerLesLettres avec un paramètre qui s'appel phrase
        # Exemple : Comment tou tou pelle => C0mment t0u t0u p3ll3 
        # Exemple : Bonjour les amis => B0nj0ur l3s am1s
        # Elle va devoir remplacer les o par des zero
        # Et remplacer les e par des trois 
        # Et aussi les i en 1


        function RemplacerLesLettres($phrase) {
            $phrase = str_replace('o', '0', $phrase);
            $phrase = str_replace('i', '1', $phrase);
            $phrase = str_replace('e', '3', $phrase);
            return $phrase;
        }
        $phrase = "Comment tou tou pelle";
        $resultat = RemplacerLesLettres($phrase);
        echo $resultat;


        // function DernierElementDuTableau($table) {
        //     if(!empty($table)) {
        //         $dernierElement = end($tableau);
        //         return $dernierElement;
        //     } else {
        //         return null;
        //     }
        // }

        // $tableau = [42, 78, 48, 1486658, "Une Autruche"];
        // $result = DernierElementDuTableau($tableau);
        // if ($resultat !== null) {
        //     echo "Le dernier element du tableau est" . $result;
        // } else {
        //     echo "Le tableau est vide.";
        // }


        function PremierElementDuTableau($tab2) {
            if (!empty($tab2)) {
                return $tab2[0];
            } else {
                return null;
            }
        }
        
        $tab2 = ['Les Cramptés', 10, 47.6579, 'cléopatre', 'autruche' ];
        echo PremierElementDuTableau($tab2);
        


        function Capitale($pays) {
            switch ($pays) {
                case "France":
                    echo "Paris";
                    break;
                case "Allemagne":
                    echo "Berlin";
                    break;
                case "Italie":
                    echo "Rome";
                    break;
                case "Maroc":
                    echo "Rabat";
                    break;
                case "Portugal":
                    echo "Lisbonne";
                    break;
                case "Angleterre":
                    echo "London";
                    break;
                default:
                    echo "Inconnu";
                    break;
                }
            };

        $pays = "Italie";
        echo Capitale($pays);


        function VerifyPassword($password) {
            if (strlen($password) < 8) {
                return false;
            }

            if (!preg_match('/[0-9]/', $password)) {
                return false;
            }

            if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
                return false;
            }
            return true;
        }

        $password = "M0tDeP@ss";
        $is_valid = VerifyPassword($password);
        if ($is_valid) {
            echo "mot de passe valide";
        } else {
            echo "mot de passe invalide";
        }


        function Factorio($nombre) {
            if ($nombre < 0) return 'Ta gueule btrd';
            $temporaire = 1;
            for ($i = $nombre; $i > 0 ; $i--) { 
                $temporaire *= $i; 
                echo ($i == $nombre ? '' : ' * ') . $i;
                // $temporaire = $temporaire * $i;
                # += Equivaut a dire que j'additiionne la variable plus ce que je lui donne juste après
            }
            return ' = ' . $temporaire;
        }
        # Afficher les calculs 

        echo Factorio(5);


        function LigneTriangle($x) {
            for ($e = 1; $e <= $x; $e++) {
                // Utilisez str_repeat pour répéter le chiffre $i $i fois
                $line = str_repeat($e, $e);
                echo $line . "<br>";
            }
        }
        LigneTriangle(50);


        echo strrev('CUCU');

        function mb_strrev($str){
            $r = '';
            for ($i = mb_strlen($str); $i>=0; $i--) {
                $r .= mb_substr($str, $i, 1);
            }
            return $r;
        }
        
        echo mb_strrev("Bijour Bijour");



        echo ("<br>");

        function Acronyme($phrase) {
            $mots = explode(" ", $phrase);
            $acronyme = '';
            
            foreach ($mots as $mot) {
                $acronyme .= $mot[0];
            }
        
            return $acronyme;
        }
        
        echo Acronyme("coucou mon reuf je suis au soleil");




        
        
        $tab = [
            'mdupond' => [
                'prenom' => 'Martin',
                'nom' => 'Dupond',
                'age' => 25,
                'ville' => 'Paris'
            ],
            'didier' => [
                'prenom' => 'Martin',
                'nom' => 'Dupond',
                'age' => 25,
                'ville' => 'Paris'
            ]
        ];
        
        function AffhichageTableau($tableau) {
            echo "<table>
                    <tr>
                        <th>prenom</th>
                        <th>nom</th>
                        <th>age</th>
                        <th>ville</th>
                    </tr>";
            
            foreach ($tableau as $index) {
                $prenom = $index['prenom'];
                $nom = $index['nom'];
                $age = $index['age'];
                $ville = $index['ville'];
                
                echo "<tr>
                        <td> $prenom </td>
                        <td> $nom </td>
                        <td> $age </td>
                        <td> $ville </td>
                    </tr>";
            }
         echo "</table>";
        }

        echo AffhichageTableau($tab);
        
        
        
        
        
    ?>
</body>
</html>