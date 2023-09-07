var tableau = ["pomme", "poire", "citron", "fraise", "grenade", 1, 2, 3, 4, 5]
var tableau2 = ["pomme", "poire", "citron", "fraise", "grenade", 1, 2, 3, 4, 5]

while (false) {
    //while crée une boucle, si ce qui est dans les paarnthèses est "true" elle tournera
}


for(var i=1; i < 10; i++) {
    //Je défni une variable "i" qui s'incrémentera de 1 tout les tours de la boucle grace a "i++"
    //Et je lui demande de tourner jusqu'a ce que "i" soit supérieur à 10
}
console.log(i)


for(var i=0; i < tableau.length; i++) {
    console.log(tableau[i])
    //La boucle tournera jusqu'a la fin du taleau
}


for(var i=0; i < tableau.length; i++) {
    console.log(tableau[i])
    if (i == 3) {
        break
    // "i" s'arretera a la 4eme valeur
    }
}


do {
    console.log('Bonjour')
    //Elle s'execute même si la condition est fausse ou vraie
} while (false)



for (index in tableau) {
    console.log(index)
}

for(var i=10; i>= 0; i--) {
    //console.log ("il reste", i, "lignes à écrire")
    console.log (`Il reste ${i} ligne${i <= 1 ? '' : 's'} à écrire`)
}

// i <= 1 ? '' : 's'
// Reviens a faire 
// if (i<= 1) {
//     console.log(`Il reste ${i} lignes à écrire`)
//}  else {
//     console.log(`Il reste ${i} ligne à écrire`)
//}

function diviseur(n) {
    var i = 2
    var temp = '1'
    while (i <= n) {
        if (n % i == 0) {
            temp = temp + ', ' + i;
        }
        i++;
    }
    return temp
}

for (let index = 1; index <= 10; index++) {
    console.log(`Les diviseurs de ${index} sont: ${diviseur(index)}`)
}