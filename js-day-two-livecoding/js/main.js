
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
//     console.log("Quattro è quattro!");
// } else {
//     console.log("l'if che controlla se valore è uguale a 4 è negativo");
// }

// console.log("Ciao");

const primaParola = prompt('inserisci una parola');
const secondaParola = prompt('inserisci un\'altra parola');

// Verificare quale parola sia la più lunga oppure se siano uguali.

//  Devo trovare il modo di estrarre il numero
//  di caratteri di una stringa dalla singola stringa

if ( primaParola.length > secondaParola.length ){
    console.log('La prima parola è la più lunga');
    document.getElementById('output').innerHTML = "La prima parola è la più lunga";
} else if ( primaParola.length < secondaParola.length ) {
    console.log('La seconda parola è la più lunga');
    document.getElementById('output').innerHTML = "La seconda parola è la più lunga";
} else {
    console.log('Le parole sono ugualmente lunghe');
    document.getElementById('output').innerHTML = "Le parole sono ugualmente lunghe";
}