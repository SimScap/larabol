
// //  Chiedo all'utente le informazioni necessarie
// const firstName = "Giangiuseppina";

// // Calcolo la complicatissima e sicurissima password e la salvo in una variabile
// let password = "";
// // La mostro in console
// console.log(password);
// // Sovrascrivo gli elementi html dei singoli paragrafi
// document.getElementById('my-first-iteration').innerHTML = password;

// password = firstName;
// document.getElementById('my-second-iteration').innerHTML = password;

// // voglio che password abbia come valore firstName + 72
// password = firstName + 72;
// document.getElementById('my-third-iteration').innerHTML = password;

// password = "1";
// document.getElementById('my-fourth-iteration').innerHTML = password;




// let somma = 0;
// let addendo = 8;

// somma = addendo + addendo;
// console.log(somma);

// // somma = addendo + addendo + addendo;
// somma = somma + addendo;
// somma += addendo;
// console.log(somma);

// somma += 8;


// let scritta = "ciao, ";
// console.log(scritta);

// // scritta = "Riccardo";
// // console.log(scritta);   //  # -> Riccardo

// // scritta = scritta + "Riccardo";  // # -> ciao, Riccardo
// scritta += "Riccardo";
// console.log(scritta); // # -> ciao, Riccardo

// // | ciao, Riccardo + Riccardo
// scritta += "Riccardo";

// // | ciao, RiccardoRiccardo + Riccardo
// scritta += "Riccardo";

// console.log(scritta);


// const baseNumber = 75;
// const numeroUtente = parseInt( prompt("Inserisci un numero da sommare a 75") );
// let somma = numeroUtente + baseNumber;

// document.getElementById('my-first-iteration').innerHTML = " " + somma;

// document.getElementById('my-second-iteration').innerHTML += somma;

// const patente = prompt('Hai la patente?');

// // Se la condizione si verifica allora =>
// if ( (patente == "si") || (patente == "Si") || (patente == "SI") ) {
//     console.log('vai a fare la spesa');
// } else if (patente == "vodka") {    // se invece si verifica quest'altra condizione faccio =>
//     console.log('bevi responsabilmente');
// } else {    // altrimenti, ovvero in tutti gli altri casi
//     console.log('allora guido io');
// }

// let valore = (4 == "4");
// // console.log("Valore di verifica se 4 == '4' " + valore);

// // valore = (4 === 4);
// // console.log("Valore di verifica se 4 === '4' " + valore);

// if (4==4){
//     valore = 51789024;
//     console.log("Quattro ?? quattro!");
// } else {
//     console.log("l'if che controlla se valore ?? uguale a 4 ?? negativo");
// }

// // console.log("Ciao");

// const primaParola = prompt('inserisci una parola');
// const secondaParola = prompt('inserisci un\'altra parola');

// // Verificare quale parola sia la pi?? lunga oppure se siano uguali.

// //  Devo trovare il modo di estrarre il numero
// //  di caratteri di una stringa dalla singola stringa

// if ( primaParola.length > secondaParola.length ){
//     console.log('La prima parola ?? la pi?? lunga');
//     document.getElementById('output').innerHTML = "La prima parola ?? la pi?? lunga";
// } else if ( primaParola.length < secondaParola.length ) {
//     console.log('La seconda parola ?? la pi?? lunga');
//     document.getElementById('output').innerHTML = "La seconda parola ?? la pi?? lunga";
// } else {
//     console.log('Le parole sono ugualmente lunghe');
//     document.getElementById('output').innerHTML = "Le parole sono ugualmente lunghe";
// }

// const etaUtenteUno = parseInt(prompt("Dicci l'et?? del primo utente"));
// const etaUtenteDue = parseInt(prompt("Dicci l'et?? del secondo utente"));

// console.log(etaUtenteUno);
// console.log(etaUtenteDue);

// let outputLog = "";

// if (etaUtenteUno > etaUtenteDue) {
//     // utente uno ?? pi?? grande
//     outputLog = "Utente uno ?? pi?? grande";
// } else if ( etaUtenteDue > etaUtenteUno) {
//     // utente due ?? pi?? grande
//     outputLog = "Utente due ?? pi?? grande";
// } else {
//     // gli utenti hanno la stessa et??
//     outputLog = "Gli utenti hanno la stessa et??";
// }

// document.getElementById('output').innerHTML = outputLog;
// document.getElementById('output').innerHTML += `,
// poich?? il primo utente ha ${etaUtenteUno} anni ed il secondo utente ha ${etaUtenteDue} anni.`;

// metodo di creazione di un'istanza di un oggetto
// const dataDiOra = new Date();
// console.log(dataDiOra.getHours());
// console.log(Math.floor(Math.random() * 1000));


// chiedo all'utente se vuole pari o dispari
// e un numero da uno a 9 (compresi)
// genero un numero causale compreso tra 1 e 9
// stabilisco chi vinca tra l'utente e il computer
// lo comunico all'utente

// let oddOrEven = prompt("Vuoi pari o dispari?").toLowerCase();
// console.log(oddOrEven);

// // se non ?? n?? dispari n?? pari
// if( (oddOrEven != "dispari" && oddOrEven != "pari") ){
//     console.warn("Mi dispiace il valore inserito non ?? valido, sceglier?? per te: pari");
//     oddOrEven = 'pari';
// }

// let userNumber = parseInt(prompt("Scegli un numero da 1 a 9"));
// console.log(userNumber);

// if( (isNaN(userNumber) || (userNumber > 9 || userNumber < 1 ) ) ){
//     console.log('Hai scelto un numero non valido, generer?? un numero casuale a tuo nome');
//     userNumber = Math.floor(Math.random() * 9) + 1;
//     console.log('Il nuovo numero generato dal computer per conto dell\'utente ?? ' + userNumber );
// }

// // generiamo un numero randomico tra 1 e 9 compresi
// const randomInt = Math.floor(Math.random() * 9) + 1;
// console.log(randomInt);

// // # n % 2 => 0 vuol dire che il numero ?? pari
// // # n % 2 => 1 vuol dire che il numero ?? dispari

// let somma = userNumber + randomInt;
// let risultato;

// if (somma % 2 == 0) // se il numero dell'utente ?? pari
// {
//     console.log('La somma ?? pari');
//     risultato = "pari";
// } else {
//     console.log('La somma ?? dispari');
//     risultato = "dispari";
// }

// // Se il risultato ?? uguale a quello che ha scritto l'utente all'inizio, allora
// if (risultato == oddOrEven){
//     console.log('Hai vinto!');
// } else { // altrimenti
//     console.log('Ha vinto gliavascript!');
// }

// ?    Quanto manca?
//  usando le funzioni dell'oggeto Date stabiliamo l'ora attuale
//  e scriviamo su console quanti minuti manchino alla fine dell'ora.

// const oraAttuale = new Date();
// const minutiNellOra = 60;
// // abbiamo l'ora
// const minutiMancanti = minutiNellOra - oraAttuale.getMinutes();
// console.log( minutiMancanti);

// document.getElementById('output').innerHTML += `Mancano ben ${minutiMancanti} minuti alla fine dell'ora`;


// let numeroUtente = parseInt(prompt('Scegli un giorno della settimana da 0 a 6'));

// if ((numeroUtente < 0 || numeroUtente > 6) || isNaN(numeroUtente) ){
//     numeroUtente = Math.floor(Math.random() * 7);
// }

// // controllo sulla variabile selezionata che nei casi specificati possa avvenire quello
// // che indico negli stessi + break. Infine aggiungo un caso di default (= else finale)
// switch (numeroUtente) {
//     case 0:
//         console.log('mannaggia ?? luned??');
//         break;
//     case 1:
//         console.log('?? marted??');
//         break;
//     case 2:
//         console.log('?? mercoled??');
//         break;
//     case 3:
//         console.log('?? gioved??: gnocchi!');
//         break;
//     case 4:
//         console.log('?? venerd??: eddaje');
//         break;
//     case 5:
//         console.log('?? sabbeto, trippa!');
//         break;
//     case 6:
//         console.log('?? dommenica: maalox');
//         break;

//     // IN TUTTI GLI ALTRI CASI
//     default:
//         console.error('bugghissimo imprevedibilissimo')
// }

//

/**
 *
 * Il programma dovr?? chiedere all'utente il numero di chilometri che vuole percorrere e l'et?? del passeggero.
    Sulla base di queste informazioni dovr?? calcolare il prezzo totale del viaggio, secondo queste regole:
        -   il prezzo del biglietto ?? definito in base ai km (0.21 ??? al km)
        -   va applicato uno sconto del 20% per i minorenni
        -   va applicato uno sconto del 40% per gli over 65.

        L'output del prezzo finale va emesso con massimo due decimali, per indicare centesimi sul prezzo.

        Questo richieder?? un minimo di ricerca.
 *
 *
 *
 *
 */
        // vittorio => Problemi implementativi con i template literals
        // matteo l. => sia prezzo pieno che il prezzo scontato



    /**
     *
     *  1)   Chiediamo all'utente:
     *      -   numero di chilometri da percorrere
     *      -   et?? del passeggero
     *
     *  2)  Calcolare il prezzo del biglietto:
     *      >   0.21??? al km
     *      >   sconto del 20% per minorenni
     *          --  minorenne:  et?? del passeggero < 18
     *          --  20% :   calcolo percentuale
     *      >   sconto del 40% per gli anzianotti > 65 anni
     *
     *  3)  Restituire l'output e mostrarlo all'utente con al massimo due decimali
     *      >   Prendo il calcolo del prezzo
     *      >   Lo elaboro per trasformarlo con al massimo due decimali
     *          --  devo cercare un modo per trasformare un numero con virgola e limitare
     *              le sue cifre decimali a due
     *      >   Mostrer?? all'utente
     *
     *  4)  Bonus (se ho tempo):
     *      >   mostro tutti i dettagli a schermo
     *      >   li rendo caruccetti
     *
     *
     */

// Chiedo all'utente i km da percorrere e lo converto a numero reale
const tripDistance = parseFloat( prompt('Inserisci la distanza che vuoi percorrere in chilometri'));

// Chiedo all'utente l'et?? del passeggero e lo converto a numero intero
const userAge = parseInt( prompt('Inserisci l\'et?? del passeggero'));

// controllo che nessun valore sia nan
if ((isNaN(tripDistance)) || (isNaN(userAge))){
    console.error('Uno dei due valori inseriti non ?? valido');
}


// Stabilisco un prezzo per chilometro
const pricePerKm = 0.21;
// calcolo il prezzo del biglietto sulla base della distanza
let basePrice = pricePerKm * tripDistance;
let price = basePrice;
// applico eventuali sconti:

let message = "";


if ((userAge < 18) && (userAge > 0)) {     // se il passeggero ?? minorenne
    // ?? price = price - (price * 0.2);
    price -= price * 0.2;
    message = `Hai diritto al 20% di sconto poich?? il passeggero ha ${userAge} anni,
    pertanto il prezzo totale del biglietto sar?? di: ${price}???, invece di ${basePrice}`;
} else if ((userAge >= 65) && (userAge <= 115)){
    // ?? price = price - (price * 0.4);
    // ?? price -= price * 0.4;
    // ?? price = price * 0.6;
    price *= 0.6;
    message = `Hai diritto al 40% di sconto poich?? il passeggero ha ${userAge} anni,
    pertanto il prezzo totale del biglietto sar?? di: ${price}???, invece di ${basePrice}`;
} else {
    message = `Non hai diritto a nessuno sconto poich?? il passeggero ha ${userAge} anni,
    pertanto il prezzo totale del biglietto sar?? di: ${price}???`;
}

// converto il prezzo a due sole cifre decimali
// let message = "Il prezzo del biglietto ??: " + price.toFixed(2) + '???';
console.log(message);
document.getElementById('output').innerHTML = message;