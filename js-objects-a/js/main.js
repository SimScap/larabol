// // ? creiamo un nuovo oggetto studente

// const studente = {
//     nome: 'Francesco',
//     'età-attuale': 18,
//     hobby: ["pesca", "caccia", "gattosità"],
//     presente: true,
//     classe: '55',
// };

// // console.log(studente);
// // console.log(typeof studente);

// // | accesso con dot notation studente.nome
// // # accesso con notazione con quadre studente[nome]

// console.warn(studente);

// oggetto = {
//     "a" : 2,
//     "b" : 55,
//     c : 102,
//     d : 1000,
// }

// for (let chiave in oggetto){
//     console.log(chiave, ":", oggetto[chiave]);
// }

// console.log(document.getElementById('output'));

// let coppieStudenti = [
//     ['Felicia', 'Luca'],
//     ['Ekaterina', 'Matteo']
// ];

// console.log(coppieStudenti[0][1]);

// // array di oggetti
// let studenti = [
//     {
//         nome: 'Donatella',
//         classe : '55',
//     },
//     {
//         nome: 'Alessio',
//         classe : '55',
//     },
//     {
//         nome: 'Viviana',
//         classe : '55',
//     },
// ];

// console.log(studenti);
// console.log(studenti[2]);
// console.log(studenti[2].nome);

// console.log(studenti[2].voti.push(7,8,7,9,10));

// const listaAnimali = [
//     {
//         specie: "gatto comune",
//         nome: 'Fuffi',
//         età: 7,
//         miagola: function(){
//             return 'miao';
//         }
//     },
//     {
//         specie: "lince europea",
//         nome: 'Lulli',
//         età: 5,
//         ruggisce: function(){
//             return 'roar';
//         }
//     },
//     {
//         specie: "cane comune",
//         nome: 'Cerberino',
//         età: 6,
//         abbaia: function(){
//             return 'bau bau';
//         }
//     }
// ]


// const listaStudenti = [
//     {
//         nome: 'Fuffi',
//         cognome: 'Ciaons',
//         età: 7,
//         nomeCompleto : function() {
//             return this.nome + " " + this.cognome;
//         }
//     }
// ];


// const campoDaGolf = {
//     'città': 'Belfast',
//     numeroDiTesserati : 1242,
//     "lunghezza-percorso" : 12000,
// }

// // io voglio modificare la proprietà numero di tesserati perché si sono iscritte 5 nuove giocatrici

// campoDaGolf.numeroDiTesserati += 5;
// campoDaGolf['lunghezza-percorso'] += 1000;

// console.log(campoDaGolf);


const classi = [
    {
        nome: 'Classe#38',
        numeroStudenti : 35,
        mainTeacher : 'Marco'
    },
    {
        nome: 'Classe#41',
        numeroStudenti : 26,
        mainTeacher : 'Riccardo'
    },
    {
        nome: 'Classe#55',
        numeroStudenti : 37,
        mainTeacher : 'Riccardo'
    },
    {
        nome: 'Classe#62',
        numeroStudenti : 35,
        mainTeacher : 'Olga'
    }
];

const nuovaClasse = {
    nome: 'Classe#99',
    numeroStudenti: "boh",
    mainTeacher: "chi lo sa!?"
}

classi.push(nuovaClasse);
console.log(classi);
