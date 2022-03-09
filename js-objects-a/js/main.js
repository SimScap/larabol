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

// for (let chiave in studente){
//     console.log(chiave, ":", studente[chiave]);

//     // 1° caso : studente['nome']
//     // 2° caso : studente['età-attuale']
//     // 3° caso : studente['presente']
//     // ...
//     // n caso : studente[chiaveN]
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

const listaAnimali = [
    {
        specie: "gatto comune",
        nome: 'Fuffi',
        età: 7,
        miagola: function(){
            return 'miao';
        }
    },
    {
        specie: "lince europea",
        nome: 'Lulli',
        età: 5,
        ruggisce: function(){
            return 'roar';
        }
    },
    {
        specie: "cane comune",
        nome: 'Cerberino',
        età: 6,
        abbaia: function(){
            return 'bau bau';
        }
    }
]


const listaStudenti = [
    {
        nome: 'Fuffi',
        cognome: 'Ciaons',
        età: 7,
        nomeCompleto : function() {
            return this.nome + " " + this.cognome;
        }
    }
];

