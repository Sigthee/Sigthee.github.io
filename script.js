    //let et var permet de dire que je crée une variable d'un nom souhaité
let Autruche = "Animal"
var Perche = "Poisson"
    //J'ai défini des variables de type "string" (chaine de caratères)
let NombreStagiaire = 10
    //J'ai défini une variable avec le nom NombreStagiaire et je lui ai donné comme donnée le nombre 10. J'ai défini une variable de type int (nmobre entier)
var heure = 14.31
    // J'ai crée une variable avec le nom heure, je lui ai donné 14.31. J'ai défini une variable de type float/double (nombre a virgule)
let Allumer = true
    //J'ai crée une variable avec le nom Allumer, et come valeur je lui ai donné true (vrai). Cette variable est Boolean (true/false)
var Ventilo = null
    // J'ai crée une variable avec le nom Ventilo et avec la valeur null qui est "rien du tout". Le type est null
let Phrase = "J'aime l'" + Autruche + " mais pas le " + Perche
    // J'aime l'Animal mais pas le Poisson
    // J'ai concaténé (+) les chaines de caractère et les variables
var calcul = heure + NombreStagiaire
    // 14.31 + 10
console.log(Phrase)
console.log(calcul)
    // Permet d'afficher une valeur donnée dans la console du navigateur

    // Je crée une fonction qui se nomme horloge sans paramètre
var temps = 1
function horloge() {
    // si temps est plus petit ou égal à 10 on éxécute l'addtition et le console.log sinon rien
    if (temps <= 10) { // <, >, <=, >=, ==, !=
        temps = temps + 1
        //temps ++ //temps --
        //temps += 1 // temps -=
        // J'additionne 1 à ma variable temps
        console.log(temps)
    }
}

setInterval(horloge, 1000)


// Je voudrais avoir un compte à rebours qui commence à 50 et qui fini à 0 et qui descend toute les 2 secondes
var rebours = 51


function montre() {
    if (rebours >= 1) {
        rebours = rebours - 1
        console.log(rebours)
    }
}

setInterval(montre, 2000)
