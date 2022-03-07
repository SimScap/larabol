/**
 *Pari e Dispari

    L’utente sceglie pari o dispari e inserisce un numero da 1 a 5.
    Generiamo un numero random (sempre da 1 a 5) per il computer (usando una funzione).
    Sommiamo i due numeri
    Stabiliamo se la somma dei due numeri è pari o dispari (usando una funzione)
    Dichiariamo chi ha vinto.

Consigli del giorno

    Scriviamo sempre in italiano i passaggi che vogliamo fare
    Scriviamo sempre solo un pezzetto di codice alla volta, se funziona allora andiamo avanti.

 *
 * Palidroma:
    Chiedere all’utente di inserire una parola
    Creare una funzione per capire se la parola inserita è palindroma
 *
 */


// ho bisogno di un'argomento? Si perché dobbiamo controllare la parola che ci viene data dall'utente
function isPalindrome(word){
    // funzione che controlla che ci sia qualcosa nell'argomento word
    if (word.length === 0) {
        console.error('hai inserito una stringa vuota nella funzione isPalindrome()')
        return false;
    } else if (word.length === 1) {
        return true;
    } else {
        // e che questa sia palindroma
        // acbc => [a,c,b,c] ==> [c,b,c,a] ==> cbca
        const invertedWord = word.split('').reverse().join('');
        if (invertedWord === word ){
            return true;
        } else {
            return false;
        }
    }

    // se è palindroma restituisce vero
    // altrimenti falso
}

const input = prompt('inserisci una parola');
console.log(input);

if ( isPalindrome(input) ) {
    console.log(input, ' è palindroma');
} else {
    console.log(input, ' non è palindroma');
}