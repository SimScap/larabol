/**
 * L’utente inserisce due numeri in successione, con due prompt.
   Il software stampa il maggiore.
 */

// const firstNumber = parseInt( prompt('Inserisci il primo numero') );
// const secondNumber = parseInt( prompt('Inserisci il secondo numero') );

// if ( isNaN(firstNumber) || isNaN(secondNumber) ){
//    console.log('Uno dei due numeri non è valido');
// } else if ( firstNumber === secondNumber ){
//    console.log('I numeri sono uguali');
// } else if (firstNumber > secondNumber){
//    console.log('Il numero maggiore è '+ firstNumber);
// } else {
//    console.log('Il numero maggiore è '+ secondNumber);
// }

/**
 *
   L’utente inserisce due parole in successione, con due prompt.
   Il software stampa prima la parola più corta, poi la parola più lunga.
 */

// const firstWord   = prompt('Inserisci la prima parola');
// const secondWord  = prompt('Inserisci la seconda parola');

// if (firstWord.length === secondWord.length){
//    console.log('Le parole hanno la stessa lunghezza');
// } else if ( firstWord.length >= secondWord.length ) {
//    console.log(firstWord + " " + secondWord);
// } else {
//    console.log(secondWord + " " + firstWord);
// }


/**
 *
   Il software deve chiedere per 10 volte all’utente di inserire un numero.
   Il programma stampa la somma di tutti i numeri inseriti.
 */

// let sum = 0;

// for (let i = 0 ; i < 10 ; i++){
//    const currentNumber = parseInt( prompt('Inserisci un nuovo numero'));
//    sum += currentNumber;  // sum = sum + currentNumber
// }

// console.log(sum);

/**
 *
   In un array sono contenuti i nomi degli invitati alla festa del grande Gatsby, chiedi all’utente il suo nome e comunicagli se può partecipare o no alla festa.
 *
 */

// const guests = ['Claudio', 'Donatella', 'Alessio', 'Patricia', 'Alessandro', 'Salvatore', 'Airowl'];

// const userName = prompt('Inserisci il nome di un\'invitato').trim();

// // § Implementazione con ciclo for manuale
// let isGuest = false;

// // scorro tutta la lista degli invitati
// for (let i = 0; i < guests.length ; i++){
//    if( guests[i].toLowerCase() === userName){
//       isGuest = true;
//    }
// }

// if (isGuest){ // isGuest == true
//    console.log('Il nome inserito è tra gli invitati');
// } else {
//    console.log('Il nome inserito non è tra gli invitati');
// }


// § Implementazione senza ciclo for, con indexOf()
// if ( guests.indexOf(userName) > -1){
//    console.log('Il nome inserito è tra gli invitati');
// } else {
//    console.log('Il nome inserito non è tra gli invitati');
// }

// § Implementazione senza ciclo for, con includes()
// if ( guests.includes(userName) ){
//    console.log('Il nome inserito è tra gli invitati');
// } else {
//    console.log('Il nome inserito non è tra gli invitati');
// }


/**
 *
   Crea un array vuoto.
   Chiedi per 10 (6) volte all’utente di inserire un numero,
   se è dispari inseriscilo nell’array.
 *
 */

// const numbers = [];

// for (let i = 0 ; i < 10 ; i++){
//    const currentNumber = parseInt ( prompt ( 'Inserisci un numero' ) );
//    if ( (currentNumber % 2 != 0) && (!isNaN(currentNumber)) ){
//       numbers.push(currentNumber);
//    }
// }

// console.log(numbers);

/**
 *
   Chiedi un numero di 7 cifre all’utente
   e calcola la somma di tutte le cifre che compongono il numero.
 *
 */

const userNumber = prompt('Insersici un numero di 7 cifre');

let sum = 0;

for (let i = 0; i < userNumber.length ; i++) {
   sum += parseInt(userNumber.charAt(i));
}

console.log(sum);