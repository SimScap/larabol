/**
 *
 * Palidroma:

    Chiedere all’utente di inserire una parola
    Creare una funzione per capire se la parola inserita è palindroma

Pari e Dispari

    L’utente sceglie pari o dispari e inserisce un numero da 1 a 5.
    Generiamo un numero random (sempre da 1 a 5) per il computer (usando una funzione).
    Sommiamo i due numeri
    Stabiliamo se la somma dei due numeri è pari o dispari (usando una funzione)
    Dichiariamo chi ha vinto.
 *
 */

let userChoice = "";

// devo verificare che la scritta userChoice o sia 'odd' oppure sia 'even'
while ( userChoice != 'even' && userChoice != 'odd' ){
   userChoice = prompt('Odd or even?').toLowerCase().trim();
}


let userNumber = 0;

while ( (userNumber < 1 || userNumber > 5) || isNaN(userNumber) ){
   userNumber = parseInt(prompt('Insert a number between 1 and 5').trim());
}

const aINumber = randomInteger(1,5);
console.log(aINumber);
const sum = aINumber + userNumber;


if ( (userChoice == 'even' && isEven(sum))  ||
   ( userChoice == 'odd' && !isEven(sum))){
   console.log('hai vinto!', ' la somma è: ', sum);
} else {
   console.log('hai vinto!', ' la somma è: ', sum);
}


// const parolaUtente = prompt('Inserisci una parola');

// console.log(isPalindromeInPlace(parolaUtente));

// console.log(isPalindromeByArray(parolaUtente));


/**
*
* dobbiamo verificare che la parola data sia uguale alla sua parola "inversa"
*
* ciao = oaic => se sono uguali allora sarà palindroma altrimenti no
*
*/


/**
* Penso ad una stringa come un elemento che abbia una determinata lunghezza:
*
*  creiamo un ciclo for che parta dall'ultimo elemento e arrivi all'elemento 0:
*    -- ogni carattere lo aggiungiamo ad una stringa interna
*    -- controlliamo che la stringa generata sia uguale a quella data
*
*/
function isPalindromeInPlace(stringToCheck){
   let reversedString = "";

   for ( let i = stringToCheck.length - 1 ; i >= 0  ; i-- ){
      reversedString += stringToCheck.charAt(i) //  reversedString += stringToCheck[i]
   }

   if (reversedString == stringToCheck){
      return true;
   }

   // come se scrivessi l'else poiché il return è definitivo
   return false;
}

function isPalindromeByArray(stringToCheck){
   return (stringToCheck.split('').reverse().join('') == stringToCheck);
   // let arrayDaStringa = stringToCheck.split("");
   // console.log(arrayDaStringa);
   // arrayDaStringa = arrayDaStringa.reverse();
   // console.log(arrayDaStringa);
   // arrayDaStringa = arrayDaStringa.join("");
   // console.log(arrayDaStringa);
}

/**
 * Function that returns a random numer between two values (both included).
 *
 * @param {*} minimumValue The minimum value of the random number to be generated
 * @param {*} maximumValue The maximum value of the random number to be generated
 * @returns The randon generated number.
 */
function randomInteger(minimumValue, maximumValue){
   if ( isNaN(parseInt(minimumValue)) || isNaN(parseInt(maximumValue)) ){
      console.error('randomInteger(min, max) needs two numbers as argument');
   }
   return ( Math.floor(Math.random() * ((maximumValue + 1) - minimumValue) + minimumValue));
}


/**
 * Function that checks if the given number is even.
 *
 * @param {*} number the number to check
 * @returns true if the number is even, false otherwise.
 */
function isEven(number){
   return number % 2 === 0;
}