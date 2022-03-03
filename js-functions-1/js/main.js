/**
 *    Voglio scrivere una funzione che mostri quello che scrivo su console
 */

scrivi(true, "Io vado a pesca");

/**
 * Function that writes a variable in the console
 */
function scrivi(output, type){
   console.log(output);
   console.log(type);
}

/**
 * Function that print a random numer between two values (both included)
 */
function randomInteger(minimumValue, maximumValue){
   if ( isNaN(parseInt(minimumValue)) || isNaN(parseInt(maximumValue)) ){
      console.error('randomInteger(min, max) needs two numbers as argument');
   }
   return ( Math.floor(Math.random() * ((maximumValue + 1) - minimumValue) + minimumValue));
}

function sommaNumeri(num1, num2) {
   alert(num1 + num2);
}

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

//! Uncaught ReferenceError: domElement is not defined
// console.log(domElement);


writeIntoDomElement('output', 'Scrivi questa frase');


/**
 * Function that adds two numbers.
 *
 * @param {*} num1 first number to add
 * @param {*} num2 second number to add
 * @returns the sum of the two numbers
 */
function sum(num1, num2) {
   return num1 + num2;
}

// !! MAI USARE VARIABILI ESTERNE ALLA FUNZIONE DENTRO LA FUNZIONE STESSA


console.log(sum(2512,342));