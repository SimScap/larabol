/**
    Consegna:
    Dati tre array contenenti:

        una lista ordinata di 5 immagini,
        una lista ordinata dei relativi 5 luoghi e
        una lista di 5 news,

    creare un carosello come nella foto allegata.

    MILESTONE 1
    Per prima cosa, creiamo il markup statico: costruiamo il container e inseriamo l'immagine grande a sinistra e le thumbnails sulla destra in modo da poter stilare lo slider; avremo così la struttura base e gli stili pronti per poterci poi concentrare solamente sull'aspetto logico.

    MILESTONE 2
    Adesso rimuoviamo tutto il markup statico e inseriamo le immagini dinamicamente servendoci dell'array fornito e un semplice ciclo for che concatena un template literal. Al termine di questa fase ci ritroveremo con lo stesso slider, ma costruito dinamicamente attraverso JavaScript.

    MILESTONE 3
    Al click dell'utente sulle frecce verso l'alto o verso il basso, l'immagine attiva diventa visibile in formato grande a sinistra e nel suo angolo in basso a destra dovranno essere aggiunti i relativi:

        titolo
        e testo.

    Allo stesso tempo nelle miniature l'immagine attiva dovrà apparire in evidenza rispetto alle altre.
 */

const images = [
    'img/01.jpg',
    'img/02.jpg',
    'img/03.jpg',
    'img/04.jpg',
    'img/05.jpg'
];

const title = [
    'Svezia',
    'Svizzera',
    'Gran Bretagna',
    'Germania',
    'Paradise'
];

const text = [
    'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam, cumque provident totam omnis, magnam dolores dolorum corporis.',
    'Lorem ipsum',
    'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
    'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam,',
    'Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam,',
]

// § Milestone 1
/**
 *     Per prima cosa, creiamo il markup statico: costruiamo il container e inseriamo l'immagine grande a sinistra e le thumbnails sulla destra in modo da poter stilare lo slider; avremo così la struttura base e gli stili pronti per poterci poi concentrare solamente sull'aspetto logico.
 */


/**
 *
 *    <!-- <div class="item active">
            <img src="img/01.jpg" alt="Random place picture">
            <div class="item-description px-3">
                <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo corporis odio temporibus sit quisquam cumque labore voluptate consequuntur voluptas non nihil cum amet fugit qui assumenda, unde deserunt. Consequuntur, dolor?</p>
            </div>
        </div> -->


                        in thumbnails:

                        <!-- <div class="thumbnail active">
                            <img src="img/01.jpg" alt="Random place picture">
                        </div> -->

 *
 */

let itemsContent = '';
let thumbnailsContent = '';


for (let i = 0 ; i < images.length ; i++){
    itemsContent += `
    <div class="item">
        <img src="${images[i]}" alt="${title[i]} picture">
        <div class="item-description px-3">
            <h2>${title[i]}</h2>
            <p>${text[i]}</p>
        </div>
    </div>`

    thumbnailsContent += `
    <div class="thumbnail">
        <img src="${images[i]}" alt="Thumbnail of ${title[i]} picture">
    </div>`
}

// § riempiamo i conenuti

// recupero il wrapper dei singoli items
const itemsElement = document.querySelector('div.slider .items');

// ne riempio il contenuto sovrascrivendolo
itemsElement.innerHTML = itemsContent;

// recupero il wrapper dei thumbnails
const thumbnailsElement = document.querySelector('div.slider .thumbnails');

// lo aggiungo al contenuto già presente (i bottoni prev e next)
thumbnailsElement.innerHTML += thumbnailsContent;


// inizializzo gli elementi che voglio visualizzare in active per primi
let activeElement = 1;

//  ho preso la lista degli items e da questa ho preso l'elemento all'indice activeElement, al quale ho aggiunto la classe active
document.getElementsByClassName('item')[activeElement].classList.add('active');

//  ho preso la lista dei thumbnail e da questa ho preso l'elemento all'indice activeElement, al quale ho aggiunto la classe active
document.getElementsByClassName('thumbnail')[activeElement].classList.add('active');


// recupero l'elemento sul quale voglio applicare il comportamento "previous"
const prev = document.querySelector('div.prev');

// gli aggiungo un event listener con una funzione anonima che
prev.addEventListener('click', function() {
    // rimuove dagli elementi coinvolti le classi active
    document.getElementsByClassName('item')[activeElement].classList.remove('active');
    document.getElementsByClassName('thumbnail')[activeElement].classList.remove('active');

    // fa un controllo sul raggiungimento dell'ultimo elemento
    if( activeElement === 0){
        activeElement = images.length - 1;
    } else {
        activeElement--;
    }

    // infine aggiunge ai nuovi elementi selezionati la classe active
    document.getElementsByClassName('item')[activeElement].classList.add('active');
    document.getElementsByClassName('thumbnail')[activeElement].classList.add('active');
});


// recupero l'elemento sul quale voglio applicare il comportamento "next"
const next = document.querySelector('div.next');

// gli aggiungo un event listener con una funzione anonima che
next.addEventListener('click', function() {
    // rimuove dagli elementi coinvolti le classi active
    document.getElementsByClassName('item')[activeElement].classList.remove('active');
    document.getElementsByClassName('thumbnail')[activeElement].classList.remove('active');

    // fa un controllo sul raggiungimento dell'ultimo elemento
    if( activeElement === images.length - 1){
        activeElement = 0;
    } else {
        activeElement++;
    }

    // infine aggiunge ai nuovi elementi selezionati la classe active
    document.getElementsByClassName('item')[activeElement].classList.add('active');
    document.getElementsByClassName('thumbnail')[activeElement].classList.add('active');
});