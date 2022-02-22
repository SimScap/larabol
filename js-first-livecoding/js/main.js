/*
    scrivo accedendo all'elemento document, grazie al suo metodo
    writeln quello che inserisco all'interno delle virgolette
    nelle parentesi (argomento)
*/
// document.writeln('<pre>Ciao mondo!</pre>');

/*
    scrivo un messaggio come argomento (nelle virgolette)
    della funzione alert per aprire un pop-up con lo stesso
    messaggio per l'utente che visita la pagina
*/
// alert('Hanno suonato al citofono!');

/*
    scrivo accedento all'elemento document, grazie al suo metodo
    getElementById, all'elemento html con il dato id e al suo interno
    inserisco le informazioni che scrivo dopo l'uguale.
*/
// document.getElementById('my-paragraph').innerHTML = "Io sono stato aggiunto direttamente da Javascript";

// // ! getElementById = camelCase
// // # è il nostro nuovo modo di scrivere praticamente ogni contenuto in js


// console.log('Fatti gli affari tuoi');

// creoVariabile numero = 5;

// const constantNumber = 100;
// console.log(constantNumber);

// constantNumber = 500;
// console.log(constantNumber);

// console.log(fraction);

// let sum = 5 + 3;
// let difference = 5-3;
// let product = 5 * 3;
// let fraction = 5 / 3;



// const firstName = prompt("Dimmi come ti chiami");
// console.log(firstName);
// let birthYear = prompt("Dimmi in che anno sei nato");

// // # La funzione parseInt prende una stringa qualsiasi e ne estrae
// // # il valore numerico INTERO.
// let age = 2022 - parseInt(birthYear);

// birthYear = "Fatte l'affari tua";
// console.log(age);

// document.getElementById('my-paragraph').innerHTML =
// `Ciao ${firstName}!
// Sappiamo che hai ${birthYear} anni`
// ;


const firstName = prompt("Come ti chiami?")
document.getElementById('my-name').innerHTML = firstName;

const birthYear = prompt("In che anno sei nato?")
document.getElementById('my-year').innerHTML = birthYear;

let age = 2022 - parseInt(birthYear);
document.getElementById('my-age').innerHTML = age;

const nickname = prompt("Qual'è il tuo nickname?")
document.getElementById('my-nickname').innerHTML = nickname;
