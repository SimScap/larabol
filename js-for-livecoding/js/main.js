



// § Ho creato un ciclo for che farà partire una variabile di indice dal valore 0
// # finché la variabile indice sarà minore di 3, esegui il blocco di codice interno al ciclo for
// ? al termine di ogni singola esecuziona del blocco incrementa di uno l'indice
// | quando non sarà più verificata la condizione iterativa allora usciremo dal ciclo e
// | e proseguirà l'esecuzione del resto del programma
// for (let indice = 0; indice <= 10 ; indice = indice + 1 ){
//     console.log(indice);
// }

// // * parto da un indice=0 e finché l'indice è minore uguale di cinque lo incremento di uno
// for (let indice = 0; indice <= 5; indice = indice + 2 ){
//     console.log(indice);
// }

// La prima volta indice = 0
// La seconda volta indice = 1
// La terza volta indice = 2


// A)   -   Recupero l'elemento DOM <ul class=list>
//          - Alternativa 1 by id via getElementById()
//          - Alternativa 2 by css selector via querySelector()

// const ulList = document.querySelector('ul.list');

// come faccio ad aggiungere un elemento li al nostro ul?
//  - la funzione append() su un elemento del DOM che ci consente di aggiungere un figlio come elemento del dom

//  - creare un elemento li del dom customizzato



// ciclo for dovrà andare da 0 a 10
// for ( let i = 0; i < 10 ; i++){
//     let newLi = document.createElement('li');
//     newLi.classList.add('bg-dark', 'text-white', 'p-3');
//     newLi.innerHTML = "Ciao mamma guarda come mi diverto! Sono al km " + i;
//     ulList.append(newLi);
// }


// ESERCIZIO 3
const wrapper = document.getElementById('for-wrapper');

for (let i = 1 ; i<= 100 ; i++){

    // creo il div di riferimento
    let newDiv = document.createElement('div');

    // aggiungo al div appena creato le classi necessarie
    newDiv.classList.add('box', 'm-3');

    // se l'indice è multiplo sia di 3 che di 5 allora ==> sia multiplo di 15
    if (i % 15 == 0){
        // cambio il contenuto del div appena creato inserendovi il valore dell'indice
        newDiv.classList.add('bg-magenta');
        newDiv.innerHTML = "FizzBuzz";

    // se invece l'indice è esclusivamente multiplo di 3 allora
    } else if (i % 3 == 0) {
        newDiv.classList.add('bg-yellow');
        newDiv.innerHTML = "Fizz";

    // se invece l'indice è esclusivamente multiplo di 5 allora
    } else if (i % 5 == 0) {
        newDiv.classList.add('bg-cyan');
        newDiv.innerHTML = "Buzz";

    // in tutti gli altri casi allora
    } else {
        newDiv.innerHTML = i;
    }

    // infine aggiungo il div creato al parent al quale voglio aggiungerlo
    wrapper.append(newDiv);
}

// ? A ) Che dati ci servono, o di quali dati abbiamo bisogno prima di eseguire i nostri calcol

// # B ) In che modo questi dati devono essere manipolati per ottenere il risutato cercato?

// § C ) Organizzare il risultato o i risultati ottenuti per essere visualizzati correttamente


// Se x è multiplo di 3
// se (x % 3 == 0)

// * Operatore modulo : % ==> ci restituisce il resto della divisione tra i due operandi
// §  30 / 10 = 3 con resto 0.

/**
 *
 * Scrivi un programma che stampi i numeri da 1 a 100,
    ma per i multipli di 3 stampi “Fizz” al posto del numero e per i multipli di 5 stampi Buzz.
    Per i numeri che sono sia multipli di 3 che di 5 stampi FizzBuzz.
 */