// /**
//  *    Voglio scrivere una funzione che mostri quello che scrivo su console
//  */

// scrivi(true, "Io vado a pesca");

// /**
//  * Function that writes a variable in the console
//  */
// function scrivi(output, type){
//    console.log(output);
//    console.log(type);
// }

// /**
//  * Function that print a random numer between two values (both included)
//  */
// function randomInteger(minimumValue, maximumValue){
//    if ( isNaN(parseInt(minimumValue)) || isNaN(parseInt(maximumValue)) ){
//       console.error('randomInteger(min, max) needs two numbers as argument');
//    }
//    return ( Math.floor(Math.random() * ((maximumValue + 1) - minimumValue) + minimumValue));
// }

// function sommaNumeri(num1, num2) {
//    alert(num1 + num2);
// }

/**
 * Function that writes content into the innerHTML of a single DOM Element.
 *
 * @param {*} domElementId the dom element (html) ID of the single element to fill
 * @param {*} contentToAdd the content to be inserted
 */
function writeIntoDomElement(domElementId, contentToAdd){
   const domElement = document.getElementById(domElementId);
   domElement.innerHTML += contentToAdd;
}

// //! Uncaught ReferenceError: domElement is not defined
// // console.log(domElement);


// writeIntoDomElement('output', 'Scrivi questa frase');


// /**
//  * Function that adds two numbers.
//  *
//  * @param {*} num1 first number to add
//  * @param {*} num2 second number to add
//  * @returns the sum of the two numbers
//  */
// function sum(num1, num2) {
//    return num1 + num2;
// }

// // !! MAI USARE VARIABILI ESTERNE ALLA FUNZIONE DENTRO LA FUNZIONE STESSA


// console.log(sum(2512,342));

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


// Voglio una funzione che mi dica se un numero sia pari oppure dispari


/**
 * Function that checks if the given number is even.
 *
 * @param {*} number the number to check
 * @returns true if the number is even, false otherwise.
 */
function isEven(number){
   if ( number % 2 === 0 ){
      return true;
   }
   return false;
}

// if( isEven(randomInteger(0,100)) ){
//    writeIntoDomElement('output', 'Ho generato un numero pari');
// } else {
//    writeIntoDomElement('output', 'Ho generato un numero dispari');
// }

console.log( isEven( randomInteger(0,100) ) );


/*** SNACK TIME */


/**
 *
 *
   Crea due tag div con due id diversi:
   un div avrà il testo colorato di rosso mentre l’altro di verde.
   Partendo da un array di numeri, creo una funzione che controlla se siano pari o dispari.
   Se sono pari li stampo nell'div "rosso",
   se sono dispari li stampo nell'div "verde".
 *
 */



/**
 *  A ) Creiamo due div:
 *    --    primo div con color: red
 *    --    secondo div con color: green
 *
 *  B ) Prendiamo un array di 10 numeri
 *       --(che popoliamo con un for per inserire i numeri randomici) per ora sospendo
 *
 *  C ) Esaminiamo i singoli numeri nell'array --> ovvero uno per uno --> ciclo for
 *       -- uno per uno verifico che il numero preso si pari o dispari
 *          *** se è pari lo inserisco nel div red
 *          *** se invece è disperi lo inserisco nel div green
 *
 */

const redDiv = document.getElementById('red');
const greenDiv = document.getElementById('green');

let nuovoArray = [2,5,215,1,5124,56124156,4124,241251,2412412,52242,1111,3333,52221,2412325,75];

for ( let i  = 0 ; i < nuovoArray.length ; i++){
   if( isEven(nuovoArray[i]) ){
      console.log(nuovoArray[i] + " è un numero pari");
      redDiv.innerHTML += nuovoArray[i] + ", ";
   } else {
      console.log(nuovoArray[i] + " è un numero dispari");
      greenDiv.innerHTML += nuovoArray[i]+ ", ";
   }
}

// ci dice se un numero è pari o dispari
function isEven(number){
   if (number % 2 == 0){
      return true;
   } else {
      return false;
   }
}


   /**
    * creo un'altra funzione che controlla che la somma di due numeri x e y sia pari
    *
    * sommaPari(24214, 12451241) ==> true se la somma mi dà un numero pari
    *                            ==> false se la somma mi dà un numero dispari
    */


function checkIfSumIsEven(num1, num2){
   return (num1 + num2) % 2 === 0;

   // if ((num1 + num2) % 2 === 0){
   //    return true;
   // } else {
   //    return false;
   // }
}

/**
 * Function that checks if the given number is even.
 *
 * @param {*} number the number to check
 * @returns true if the number is even, false otherwise.
 */
function isEven(number){
   return number % 2 === 0;
   // if ( number % 2 === 0 ){
   //    return true;
   // }
   // return false;
}