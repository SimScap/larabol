/**
 *
 * Descrizione:
            -   Visualizzare in pagina 5 numeri casuali.

            -   Da lì parte un timer di 30 secondi.

            -   Dopo 30 secondi l'utente deve inserire, uno alla volta, i numeri che ha visto precedentemente, tramite il prompt().

            -   Dopo che sono stati inseriti i 5 numeri, il software dice quanti e quali dei numeri da indovinare sono stati individuati
 */

/**
 *
 * A1 - Funzione per creare numeri randomici (unici)
 * A2 - ciclo for => stampare da uno a cinque gli elementi dom generati con A1
 * A3 - creare array : 1 per inserire numeri casuali, 2 per i numeri dell'utente,
 * 3 per inserire i numeri che sono inclusi in entrambi gli array
 *
 * B1 - Settare un timeout a 30 secondi (a 5)
 * B2 - Chiedere all'utente con un prompt i numeri da inserire (con 5 prompt diversi)
 *
 * C1 - Mostriamo il risultato:
 *      --  confrontare gli array creati => i numeri dell'utente e quelli generati
 *      --  trovare quelli in comune e mostrarli con il punteggio.
 *
 */

// inizializzo un nuovo array per contenere i numeri randomicamente generati
const generatedNumbers = [];

// ciclo per cinque volte
for (i = 0 ; i < 5 ; i++){
    // posso creare un elemento e poi stamparlo individualmente
    // oppure creare un array e alla fine stampare lui su schermo
    generatedNumbers.push( generateUniqueRandomNumber(generatedNumbers, 0, 100));
}

document.getElementById('numbers').innerHTML = generatedNumbers.join(', ');
console.log(generatedNumbers);

setTimeout( hideNumbers, 5000 );
setTimeout( askUser, 5700, generatedNumbers );

function hideNumbers(){
    document.getElementById('numbers').innerHTML = "";
}

function askUser(givenNumbers){
    const userNumbers = [];
    const guessedNumbers = [];

    for (i = 0 ; i < 5 ; i++){
        const currentNumber = parseInt( prompt('inserisci un numero'));

        // solo se il numero scelto dall'utente è un numero allora
        if (!isNaN(currentNumber)){

            // inserisco il numero convalidato nella lista dei numeri scelti dall'utente
            userNumbers.push(currentNumber);

            // se è presente nella lista dei numeri generali allora
            if (givenNumbers.includes(currentNumber)){
                // l'utente ha indovinato nu nuovo numero e lo inserisco nella lista dei numeri indovinati
                pushUnique(guessedNumbers, currentNumber);
            }
        }
    }

    // ? assegnazione = (CONDIZIONE BOOLEANA) ? ValoreDiVero : ValoreDiFalse;
    // assegno a numberPrefix il valore:
    //      -   "numero" se guessedNumbers == 1
    //      -   "numeri" altrimenti
    const numberPrefix = (guessedNumbers == 1) ? "numero" : "numeri";

    document.getElementById('numbers').innerHTML = `Hai indovinato
    ${guessedNumbers.length} ${numberPrefix} validi, ovvero:
    ${guessedNumbers.join(', ')}, sui numeri mostrati
    che erano ${givenNumbers.join(', ')}` ;
}

/**
 * Adds an element into an array IN PLACE only if is not already present.
 *
 * @param {*} array the array to change
 * @param {*} elementToAdd the unique element to add
 * @returns The given array
 */
function pushUnique(array, elementToAdd){
    if (!array.includes(elementToAdd)){
        array.push(elementToAdd);
        return array;
    }
}

/**
 * Function that generates a random number between two included values, which is not already present in the given blacklist.
 *
 * @param {*} numsBlacklist The blacklist to check.
 * @param {*} min The minimum value of the random generated integer.
 * @param {*} max The maximum value of the random generated integer.
 * @returns A random generated integer which is not present in the blacklist.
 */
function generateUniqueRandomNumber( numsBlacklist, min, max){
    let check = false;
    let randomInt;

    while ( !check ){
        randomInt  = Math.floor(Math.random() * ((max + 1) - min) + min);
        if ( !numsBlacklist.includes(randomInt) ){
            check = true;
        }
    }
    return randomInt;
}
