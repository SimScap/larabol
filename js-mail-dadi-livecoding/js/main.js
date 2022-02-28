/**
 *
 *  **Mail**
    Chiedi all’utente la sua email,
    controlla che sia nella lista di chi può accedere,
    stampa un messaggio appropriato sull’esito del controllo.

    *Gioco dei dadi*
    Generare un numero random da 1 a 6, sia per il giocatore sia per il computer.
    Stabilire il vincitore, in base a chi fa il punteggio più alto.
 *
 */

// //  Database fittizio che contiene le mail registrate
// const emailList = [
//    'riccardo@gmail.com',
//    'viviana@gmail.com',
//    'massimo@gmail.com',
//    'manuel@gmail.com',
//    'arianna@gmail.com',
//    'gianfranco@gmail.com'
// ];

// // chiediamo all'utente di inserire il suo indirizzo email
// const userEmail = prompt('Insert your email').toLowerCase().trim();

// // creo una variabile "flag" che assegnerò a true ==> troverò userMail in emailList
// let isRegistered = false;

// // creo un ciclo for per tutta la lunghezza della nostra lista emailList
// for ( let i = 0 ; i < emailList.length ; i++ ){
//    if( emailList[i] == userEmail ){
//       isRegistered = true;
//    }
// }

// // stampo un messaggio in console che mi dice se la mail è di un utente registrato oppure no
// if ( isRegistered == true ){  // potrei scrivere la condizione anche come ( isRegistered )
//    console.log('l\'utente è registrato');
// } else {
//    console.log('l\'utente non è registrato');
// }


// genero un numero randomico da 1 a 6 inclusi.
const playerNumber = Math.floor(Math.random() * 6) + 1;
console.log('Il tuo valore è '+playerNumber);

// genero un numero randomico da 1 a 6 inclusi.
const aINumber = Math.floor(Math.random() * 6) + 1;
console.log('Il mio valore è '+aINumber);

// verifico le varie condizioni
if ( playerNumber > aINumber){
   console.log('Hai vinto!');
} else if ( aINumber > playerNumber){
   console.log('Ha vinto l\'AI!');
} else {
   console.log('Siamo pari!');
}




