// Sia Cosmo che Salvatore hanno avuto difficoltà per il numero di generazioni successive al primo

/**
L'utente indica un livello di difficoltà in base al quale viene generata una griglia di gioco di quadrati, in cui ogni cella contiene un numero tra quelli compresi in un range:

    con difficoltà 1 => tra 1 e 100
    con difficoltà 2 => tra 1 e 81
    con difficoltà 3 => tra 1 e 49

Quando l'utente clicca su ogni cella, la cella cliccata si colora di azzurro.
 */

// const playButton = document.getElementById('play');
document.getElementById('play').addEventListener( "click",
    function(){
        createNewGame();
    }
)

// funzione per generare una nuova partita SOVRASCRIVENDO la precedente
function createNewGame(){

    // Reset generale per il contenitore interno della grid
    document.querySelector('#grid').innerHTML = "";

    // prima di tutto recupero il livello selezionato dall'utente
    // stabilisco le condizioni date dal livello selezionato
    const level = parseInt( document.getElementById('level').value );
    console.log(level);

    // GENERAZIONE DELLA GRIGLIA
    // stabilire il numero delle caselle che devono apparire:
        //  prendere il valore in base alla difficoltà
        // due valori : numero di celle per riga e numero di celle totali

    let cellsPerRow;
    let cellsNumber;

    switch (level ) {
        case 1:
        default:
            cellsNumber = 100;
            // cellsPerRow = 10;
            break;
        case 2:
            cellsNumber = 81;
            // cellsPerRow = 9;
            break;
        case 3:
            cellsNumber = 49;
            // cellsPerRow = 7;
            break;
    }

    // if ( level == 1 ){
    //     cellsNumber = 100;
    // } else if (level == 2 ){
    //     cellsNumber = 81;
    // }  else if (level == 3 ){
    //     cellsNumber = 49;
    // }

    //  cellsPerRow => radice quadrata di cellsNumber
    cellsPerRow = Math.sqrt(cellsNumber);

    //  prendo il parent
    //  ciclo per tutti gli elementi che voglio creare
    //  aggiungo un event listener per far colorare il bottone
    //  li inserisco come elementi figli del nostro parent selezionato

    for ( let i = 1; i <= cellsNumber; i++){
        const cell = createSquare(i, cellsPerRow);
        cell.addEventListener('click', function(){
            this.classList.add('clicked');
        });
        document.querySelector('#grid').appendChild(cell);
    }

}

// genera il singolo quadrato
function createSquare(number, cellsPerRow){
    let cell = document.createElement('div');
    // cell.className = ('square');
    cell.classList.add('square');

    cell.style.width = `calc(100% / ${cellsPerRow})`
    cell.style.height = cell.style.width;

    cell.innerHTML = `<span>${number}</span>`;

    return cell;
}