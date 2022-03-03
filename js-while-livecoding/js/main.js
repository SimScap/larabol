
// let output = document.getElementById('output');
// let composedPhrase = "";

// let i = 0;  // ! NON E' FACOLTATIVA MA OBBLIGATORIA
// while ( i <10 ){
//     composedPhrase += i+ ": ciao compongo con il while! <br>"
//     i++; // ! NON E' FACOLTATIVA MA OBBLIGATORIA
// }

// for (let x = 10; x < 20 ; x++ ){
//     composedPhrase += x+ ": ciao Penny con il for! <br>"
// }

// output.innerHTML = composedPhrase;


/**
 *
    Crea un array vuoto e chiedi all’utente un numero da inserire nell’array.
    Continua a chiedere i numeri all’utente e a inserirli nell’array fino a quando la somma degli elementi è minore di 200.
 *
 */

// const tempArray = [];
// let somma = 0;
// while ( somma < 200){
//     tempArray.push( parseInt(prompt('inserisci un nuovo numero')));

//     // prendo la somma e gli aggiungo l'elemento all'indice indicato tra le quadre dell'array tempArray
//     somma += tempArray[tempArray.length - 1];

//     console.log('La somma degli elementi è: ', somma);
// }

// console.log(tempArray)

/**
 * | Snack base
 *
    Fai inserire un numero, che chiameremo N, all’utente.
    Genera N array, ognuno formato da 10 numeri casuali tra 4 e 4532.
    Ogni volta che ne crei uno, stampalo a schermo.

 *
 */

    /**
 *
 * § BONUS 1
 *
    Fai inserire due numeri, che chiameremo N & M, all’utente.
    Genera N array, ognuno formato da M numeri casuali tra 4 e 4532.
    Ogni volta che ne crei uno, stampalo a schermo.

 *
 */
   /**
 *
 * # BONUS 2
 *
    Fai inserire tre numeri, che chiameremo N & M & L, all’utente.
    Genera N array, ognuno formato da M numeri casuali tra 4 e 4532 che sommati diano almeno L.
    Ogni volta che ne crei uno, stampalo a schermo.

 *
 */

   /**
 *
 * # BONUS 3
 *
    Fai inserire tre numeri, che chiameremo N & M & L, all’utente.
    Genera N array, ognuno formato da M numeri casuali tra 4 e 4532 che sommati diano al più L.
    Ogni volta che ne crei uno, stampalo a schermo.

 *
 */

/**
     *
    Fai inserire un numero, che chiameremo N, all’utente.
    Genera N array, ognuno formato da 10 numeri casuali tra 4 e 4532.
    Ogni volta che ne crei uno, stampalo a schermo.

    *
*/
const userNumber = parseInt(prompt('Inserisci un numero'));
while (isNaN(userNumber)){
    userNumber = parseInt(prompt('Inserisci un numero'));
}

if (userNumber >= 500){
    userNumber = 500;
}

// const arraysList = [];
for ( i = 0 ; i < userNumber ; i++){
    const tempArray = [];
    while ( tempArray.length < 10){
        tempArray.push(Math.floor(Math.random() * 4528) + 4);
    }
    console.log(tempArray);
    // arraysList.push(tempArray);
}

// console.log(arraysList);