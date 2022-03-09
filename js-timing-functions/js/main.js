/**
 *
 * Io vorrei avere un calcolo basato su un esecuzione temporale:
 *
 *  A)  ogni minuto io voglio verificare la temperatura:
 *      se è inferiore ai 16 gradi => accendo il riscaldamento
 *
 *  B)  dato un lasso di tempo in secondi, eseguo il codice che voglio eseguire solo dopo che questo tempo sia trascorso.
 *
 */

function funzione(arg1, arg2){

}

funzione();

// ! lv.1 : Butta la pasta
// Il progtramma chiede all'utente quanti secondi mancano alla cottura della pasta:
// dopo il tempo indicato appare un alert.

// const seconds = parseInt ( prompt('Quanti secondi mancano alla cottura della pasta?') );

// setTimeout( function() {
//     alert('La pasta è cotta!');
// }, 1000);

// ! lv.1 : Buon anno!
// Simuliamo un countdown di 10 secondi che alla fine dica "Buon anno"

// const clockBomb = setInterval( function() {
//     console.log('Buon anno!');
// }, 5000);


// ! lv.3 : Buon anno!
// Cronometro

// cliccare su un pulsante che avvii un cronometro
// per fermare il cronometro dovrò cliccare sul secondo pulsante

let clock;
let time = 0;

document.getElementById('start').addEventListener('click', function(){
        clock = setInterval( function() {
            // setTimeout(()=>console.log('ciao', time), 3000);
            time++;
            console.log(time);
            document.querySelector('h2').innerHTML = time;
        }, 1000)
});

document.getElementById('pause').addEventListener('click', function(){
    clearInterval(clock);
});

document.getElementById('stop').addEventListener('click', () => {
    time = 0;
    clearInterval(clock)
});