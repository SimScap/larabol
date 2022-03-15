/**
    Creare un oggetto che rappresenti un giocatore di basket, con le seguenti proprietà:
    Codice giocatore, Nome, Cognome, Età,  Media punti fatti per partita, Percentuale di successo per tiri da 3 punti

    Generare casualmente le statistiche di gioco, secondo queste regole:

    A - il codice giocatore deve essere formato da 3 lettere maiuscole casuali e 3 cifre casuali

    B - la media punti fatti per partita deve essere compresa tra 0 e 50

    C - la percentuale di successo per da 3 punti deve essere compresa tra 0 e 100
 */

// const giocatore = {
//     "codice-giocatore" : "",
//     nome: "",
//     cognome: "",
//     età: "",
//     mpp: "",
//     pct3 : ""
// }

// giocatore["codice-giocatore"] = generatePlayerCode();
// giocatore.mpp = Math.floor(Math.random() * ((50 + 1) - 0) + 0);
// giocatore.pct3 = Math.floor(Math.random() * ((100 + 1) - 0) + 0);

// function generatePlayerCode(){
//     return makeid(3) + makeNumericId(3);
// }

// console.log(generatePlayerCode());

// function makeid(length) {
//     let result           = '';
//     let characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXY';
//     let charactersLength =  characters.length;
//     for ( let i = 0; i < length; i++ ) {
//         result += characters.charAt(Math.floor(Math.random() *  charactersLength));
//     }
//     return result;
// }

// function makeNumericId(length) {
//     let result           = '';
//     let characters       = '1234567890';
//     let charactersLength =  characters.length;
//     for ( let i = 0; i < length; i++ ) {
//         result += characters.charAt(Math.floor(Math.random() *  charactersLength));
//     }
//     return result;
// }

// console.table(giocatore);


//

/**
 *
 *
    Crea un array composto da 12 automobili.
    Ogni oggetto automobile avrà le seguenti proprietà: marca, modello e alimentazione (benzina, diesel, gpl, elettrico, metano).

    Dividi le automobili in 3 array separati: nel primo array solo le auto a benzina, nel secondo solo le auto a diesel, nel terzo il resto delle auto.

    Infine stampa separatamente i 3 array.

 *
 */

// const autos =[
//     {
//         marca : "pegeout",
//         modello: "108",
//         alimentazione: "gpl",
//     },
//     {
//         marca : "pegeout",
//         modello: "208",
//         alimentazione: "benzina",
//     },
//     {
//         marca : "pegeout",
//         modello: "5008",
//         alimentazione: "diesel",
//     },
//     {
//         marca : "toyota",
//         modello: "celica",
//         alimentazione: "benzina",
//     },
//     {
//         marca : "subaru",
//         modello: "impreza",
//         alimentazione: "benzina",
//     },
//     {
//         marca : "toyota",
//         modello: "ch-r",
//         alimentazione: "elettrica",
//     },
//     {
//         marca : "volkswagen",
//         modello: "up",
//         alimentazione: "metano" ,
//     },
//     {
//         marca : "nissan",
//         modello: "gtr",
//         alimentazione: "benzina",
//     },
//     {
//         marca : "nissan",
//         modello: "pulsar",
//         alimentazione: "diesel",
//     },
//     {
//         marca : "chevrolet",
//         modello: "camaro ss",
//         alimentazione: "gpl",
//     },
//     {
//         marca : "chevrolet",
//         modello: "matiz",
//         alimentazione: "metano",
//     },
//     {
//         marca : "fiat",
//         modello: "panda",
//         alimentazione: "metano",
//     }
// ];

// const gasoline = autos.filter((element) =>{
//     if (element.alimentazione == "benzina") return true
// } );
// const diesel =  autos.filter((element) =>{
//     if (element.alimentazione == "diesel") return true
// } );

// const others =  autos.filter((element) =>{
//     if (element.alimentazione != "benzina" && element.alimentazione != 'diesel') return true
// } );

// console.table(gasoline);
// console.table(diesel);
// console.table(others);

// console.table(autos);

/**
 *
    A partire da un array di stringhe, crea un secondo array formattando le stringhe del primo array in minuscolo e con l’iniziale maiuscola.

    Es: [‘pippo’, ‘PLUTO’, ‘Paperino’] => [‘Pippo’, ‘Pluto’, ‘Paperino’]

 *
 */

// const stringhe = ['pippo', 'PlUTO', 'Paperina'];

// const nuoveStringhe = stringhe.map((element) => {
//     return element.charAt(0).toUpperCase() +
//     element.substring(1).toLowerCase();
// })

// console.table(stringhe);
// console.table(nuoveStringhe);

/**
 *
 *
    Crea un array di oggetti che rappresentano degli animali.
    Ogni animale ha un nome, una famiglia e una classe.
    Es:

    [
        { nome: ‘leone’, famiglia: ‘felidi’, classe: ‘mammiferi’ },
        { nome: ‘cane’, famiglia: ‘canidi’, classe: ‘mammiferi’ },
        { nome: ‘gallina’, famiglia: ‘fasianidi’, classe: ‘uccelli’ },
    ]

    Crea un nuovo array con la lista dei mammiferi.

 *
 */

const animali = [
    {
        nome: 'leone',
        famiglia: 'felidi',
        classe: 'mammiferi',
    },        {
        nome: 'cane',
        famiglia: 'canidi',
        classe: 'mammiferi',
    },        {
        nome: 'gallina',
        famiglia: 'fasianidi',
        classe: 'uccelli',
    },        {
        nome: "ornitoriunco",
        famiglia: "gesuiti",
        classe: "mammiferi",
    },        {
        nome: "cocorita",
        famiglia: "volatili",
        classe: "ovipari",
    },        {
        nome: "coccodrillo",
        famiglia: "rettili",
        classe: "ovipari",
    }
];

const animaliFiltrati = animali.filter((element) =>{
    if (element.classe == 'mammiferi') return true;
});

console.table(animali);
console.table(animaliFiltrati);


/**
 *
 *
    Crea un array di oggetti che rappresentino delle persone.
    Ogni persona ha un nome, un cognome e un’età.

    Crea quindi un nuovo array inserendo, per ogni persona, una frase con il nome e cognome e l’indicazione se può guidare, in base all’età.
 *
 */

    /**
 *
 *
    Crea un array di oggetti che rappresentino delle persone.
    Ogni persona ha un nome, un cognome e un’età.

    Crea quindi un nuovo array inserendo, per ogni persona, una frase con il nome e cognome e l’indicazione se può guidare, in base all’età.
 *
 */

// const people = [
//     {
//         firstName : "Salvatore",
//         lastName : "Bresku",
//         age : "21"
//     },
//     {
//         firstName : "Giangiuseppe",
//         lastName : "Capriolo",
//         age : "12",
//     },
//     {
//         firstName : "Signora",
//         lastName : "Lopez",
//         age : "28",
//     },
//     {
//         firstName : "Vichingo",
//         lastName : "Ferrante",
//         age : "17",
//     }
// ];

// const driveAge = people.map((element) => {
//     let drivingAgeStatement = (parseInt(element.age) >= 18) ? " può guidare" : " non può guidare";
//     return `${element.firstName} ${element.lastName} ${drivingAgeStatement}`
// })

// console.table(driveAge);