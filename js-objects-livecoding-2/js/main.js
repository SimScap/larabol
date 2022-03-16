// let nomeStudentessa = "Francesca";
// let etàStudentessa = 24;
// let emailStudentessa = "francesca24@gmail.com"

// student = {
//     name : nomeStudentessa,
//     age : etàStudentessa,
//     email : emailStudentessa
// };

// // let firstName = "Francesca";
// // let age = 24;
// // let email = "francesca24@gmail.com"

// // const studentTwo = {
// //     firstName, // firstName = firstName
// //     age, // age = age
// //     email // email = email
// // };

// // assegna a const name = student.name e a const email = student.email
// const {email} = student;

// console.log(email);


// function somma(...stringhe){
//     if (stringhe.length <= 1){
//         return stringhe[0];
//     }

//     let somma = 0;
//     stringhe.forEach((addendo) => {
//         if (!isNaN(parseInt(addendo)))
//         {
//             somma += parseInt(addendo)
//         }
//     } );
//     return somma;
// }


/**
 * Crea un array di 10 oggetti che rappresentino una zucchina.
 * indicando per ognuna varietà, peso e lunghezza.
 *
 * A - Calcola quanto pesano tutte le zucchine
 * B - Dividi in due array separati le zucchine che misurano più o meno di 15cm
 * C - Stampa separatamente quanto pesano i due gruppi di zucchine
 *
 * */

const zucchinis = [
    {
        tipo: 'romanesco',
        peso: 40,
        lunghezza: 10,    },
    {
        tipo: 'romanesco',
        peso: 20,
        lunghezza: 15,    },
    {
        tipo: 'fiorentino',
        peso: 60,
        lunghezza: 18,    },
    {
        tipo: 'trombetta',
        peso: 10,
        lunghezza: 8,    },
    {
        tipo: 'romanesco',
        peso: 58,
        lunghezza: 26,    },
    {
        tipo: 'fiorentino',
        peso: 38,
        lunghezza: 16,    },
    {
        tipo: 'marchigiano',
        peso: 40,
        lunghezza: 27,    },
    {
        tipo: 'napoletano',
        peso: 30,
        lunghezza: 16,    },
    {
        tipo: 'romanesco',
        peso: 70,
        lunghezza: 21,    },
    {
        tipo: 'trombetta',
        peso: 60,
        lunghezza: 31,    },]

// A => foreach

// B => due filter

// C => foreach

/**
 * A - Calcola quanto pesano tutte le zucchine
 * B - Dividi in due array separati le zucchine che misurano più o meno di 15cm
 * C - Stampa separatamente quanto pesano i due gruppi di zucchine
 *
 * */

// let totalWeight = 0;

// let lateZucchinisWeight = 0;
// const lateZucchinis = [];

// let earlyZucchinisWeight = 0;
// const earlyZucchinis = [];

// zucchinis.forEach((element) => {
//     totalWeight += element.peso;
//     if (element.lunghezza >= 15){
//         lateZucchinis.push(element);
//         lateZucchinisWeight += element.peso;
//     } else {
//         earlyZucchinis.push(element);
//         earlyZucchinisWeight += element.peso;
//     }
// });

// console.log(totalWeight, lateZucchinis, earlyZucchinis, lateZucchinisWeight, earlyZucchinisWeight)



/**
 *
    A - Scrivi una funzione che accetti una stringa come argomento e la ritorni girata (es. Ciao -> oaiC)
    B - Scrivi una funzione che accetti un numero come argomento e ritorni il suo opposto (inverso additivo) es (34 -> -34)
    C - Data una lista di 10 numeri e 10 stringhe, restituisci una copia della lista con tutte le stringhe girate e i numeri opposti.
    *
 */

//     console.log(reverseString('supercalifragilistichespiralidoso'));

// function reverseString(string){
//     return string.split('').reverse().join('');
// }

// function getAdditiveInverse(number){
//     return -number;
// }

// const list = [
//     1,42,2512,6125,1251,25,1245,125,12456,6.56,
//     "ciaoo", "ciaoo23ddw", "asdasdo", "sdqs", "xfxgjqrw", "asdasdo", "asdasdo", "niqwodniwoq", "dnuiwondq", "dniuown"
// ]

// const newList = list.map((element) => (isNaN(parseInt(element))) ? reverseString(element) : getAdditiveInverse(element) );

// console.table(newList);

/**
 *
 *
    Scrivi una funzione che fonda due array (aventi lo stesso numero di elementi) prendendo alternativamente gli elementi da uno e dall’altro
    es. [a,b,c], [1,2,3] → [a,1,b,2,c,3].

 *
 */

// const array1 = ['a','b','c','d','e','f','g'];
// const array2 = [1, 2, 3, 4, 5, 6, 7];

// function arrayCoupler(firstArray, secondArray){
//     const minimunLength = Math.min(firstArray.length, secondArray.length);
//     const coupledArray = [];
//     for (let i = 0; i < minimunLength ; i++){
//         coupledArray.push(firstArray[i], secondArray[i]);
//     }
//     return coupledArray;
// }

// console.log(array1,array2);
// console.table(arrayCoupler(array1, array2));

/**
    *  Dato un array, genera randomicamente due numeri:
    *   il primo numero che dovrà essere sempre minore del numero degli elementi dell'array
    *   il secondo numero che dovrà essere sempre minore del primo numero
    *
    * Scrivi una funzione che accetti tre argomenti: l'array e i due numeri nell'ordine scritto prima.
    * La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa tra il primo numero e il secondo numero
*/

// const array = ['tot','elementi','scritti','come','stringhe','nell','array','stesso'];
// const aNumber =  randomInt(0, array.length - 1);
// const bNumber =  randomInt(0, aNumber - 1);


// function arraySplitter(array, numA, numB){
//     if (numA >= array.length || numB >= array.length){
//         console.error('One of the given numbers exceeds the last index of the given array');
//         return false;
//     } else {
//         const newArray = [];
//         for ( let i = numB; i <= numA ; i++){
//             newArray.push(array[i]);
//         }
//         return newArray;
//     }
// }

// function randomInt(min, max){
//     return Math.floor(Math.random() * (max - min + 1)) + min;
// }

// console.table(array);
// console.log(aNumber, bNumber);
// console.table(arraySplitter(array, aNumber, bNumber));

// function random(number) {
//     return Math.floor(Math.random() * (number+1));
// }

// document.querySelector('button').addEventListener('click', () =>
//     {
//         document.body.style.backgroundColor = `rgb(${random(255)}, ${random(255)}, ${random(255)})`;
//     });


// const title = document.querySelector('h1');

// document.querySelector('input').addEventListener('keydown', function (event){
//     // console.log(event.key);
//     if(event.key == "Enter"){
//         console.warn('INVIA IL DOCUMENTO');
//         this.value = "";
//         title.innerHTML = "";
//     } else {
//         title.innerHTML = this.value;
//     }
// });

// console.log(sum(5,6));
// newLog('ciaonzolo');
for ( let i = 0; i < zucchinis.length ; i++){
    if (zucchinis[i].tipo == "trombetta") break;
}