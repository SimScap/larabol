
//  Chiedo all'utente le informazioni necessarie
const firstName = prompt('Inserisci il tuo nome');
const lastName = prompt('Inserisci il tuo cognome');
const favColour = prompt('Inserisci il tuo colore preferito');

// Calcolo la complicatissima e sicurissima password e la salvo in una variabile
let password = firstName + lastName + favColour + 22;

// La mostro in console
console.log(password);

// Sovrascrivo gli elementi html dei singoli paragrafi
document.getElementById('my-first-name').innerHTML = firstName;
document.getElementById('my-last-name').innerHTML = lastName;
document.getElementById('my-fav-colour').innerHTML = favColour;
document.getElementById('my-password').innerHTML = password;