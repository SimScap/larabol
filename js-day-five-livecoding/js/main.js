/**
 *
 * Consegna:
    Scrivi un programma che stampi i numeri da 1 a 100, ma per i multipli di 3 stampi “Fizz” al posto del numero e per i multipli di 5 stampi Buzz.
    Per i numeri che sono sia multipli di 3 che di 5 stampi FizzBuzz.Prima di partire a scrivere codice poniamoci qualche domanda:
 *
 */


/**
 *
 *  §   A)  Scrivo una serie di istruzioni per stampare su console tutti i numeri da 1 a 100
 *          - mi scrivo un ciclo for da 1 a 100 all'interno del quale
 *              -   console.log(indice)
 *
 *  #   B)  Implementare una condizione per realizzare la consegna: ovvero scrivere:
 *          -   Fizz se il numero è % 3 == 0
 *          -   Buzz se il numero è % 5 == 0
 *          -   FuzzBuzz se il numero è % 3 == 0 && % 5 == 0
 *
 */

// // § ciclo per i primi cento numeri: da 1 a 100 inclusi
// for(let i = 1 ; i <= 100; i++){

//     // se l'indice è multiplo sia di 3 che di 5 allora
//     if ((i % 3 == 0) && (i % 5 == 0)){
//         console.log('FizzBuzz');

//     // se invece l'indice è esclusivamente multiplo di 3 allora
//     } else if (i % 3 == 0) {
//         console.log('Fizz');

//     // se invece l'indice è esclusivamente multiplo di 5 allora
//     } else if (i % 5 == 0) {
//         console.log('Buzz');

//     // in tutti gli altri casi allora
//     } else {
//         console.log(i);
//     }
// }



// // § ciclo per i primi cento numeri: da 1 a 100 inclusi
// for(let i = 1 ; i <= 100; i++){

//     // se l'indice è multiplo sia di 3 che di 5 allora ==> sia multiplo di 15
//     if (i % 15 == 0){
//         console.log('FizzBuzz');

//     // se invece l'indice è esclusivamente multiplo di 3 allora
//     } else if (i % 3 == 0) {
//         console.log('Fizz');

//     // se invece l'indice è esclusivamente multiplo di 5 allora
//     } else if (i % 5 == 0) {
//         console.log('Buzz');

//     // in tutti gli altri casi allora
//     } else {
//         console.log(i);
//     }
// }

// § ciclo per i primi cento numeri: da 1 a 100 inclusi
for(let i = 1 ; i <= 100; i++){
    let output = "";

    // se i è multiplo di tre scrivo nell'output Fizz
    if (i % 3 == 0) {
        output += "Fizz";
    }

    // se i è multiplo di cinque scrivo nell'output Buzz
    if (i % 5 == 0) {
        output += "Buzz";
    }

    // se non ho scritto né Fizz né Buzz allora attribuisco ad output il valore dell'indice
    if (output.length == 0){
        output = i;
    }

    console.log(output);
}