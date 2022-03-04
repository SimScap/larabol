// creare una griglia 8x8 all'interno della quale vi siano quadratini cliccabili che si colorano al click

const gridElement = document.getElementById('grid');

// Arrow function che restituisce un div di square sotto forma di elemento del DOM
const createGridSquare = () => {
    const currentElement = document.createElement('div');
    // inseriamo tutto il necessario per ogni square
    currentElement.classList.add('square-element');
    return currentElement;
}

for (let i = 0 ; i < 64 ; i++){
    // creo un singolo quadrato
    const currentSquare = createGridSquare();

    // aggiungo l'evento di click e i suoi effetti
    currentSquare.addEventListener('click', function() {
        console.log(this); // this = currentSquare;
        this.classList.toggle('clicked');
    })

    // infine lo aggiungo al parent
    gridElement.appendChild(currentSquare);
}