/**
 *
 *
 *
Riprendiamo l'esercizio carosello e rifacciamolo, questa volta usando gli oggetti, prendendo come riferimento il codice scritto oggi insieme a lezione, che troverete direttamente nella mia repository di github a questo link: [link github]

Modifichiamo il codice dell'esercizio per renderlo funzionante con un array di oggetti al posto dei tre array separati, con una sola regola: non è possibile modificare l'HTML ma solamente JS e CSS.
Ricordiamo sempre l'importanza dell'integrità del dato.

Bonus 1:
Sperimentiamo attraverso l'uso delle timing functions anche una funzionalità di scorrimento al nostro carosello:
al click di un bottone o già dall'inizio possiamo far partire, ad intervalli di tempo a piacere, lo scorrimento delle immagini disponibili nel carosello stesso.

Bonus 2:
E se volessi un bottone per invertire la "direzione" del carosello?

 *
 */

// const images = [
//     {
//         url: 'http://www.viaggiareonline.it/wp-content/uploads/2014/11/sweden_148857365.jpg',
//         title: 'Svezia',
//         description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
//     },

//     {
//         url: 'https://static1.evcdn.net/images/reduction/1513757_w-1920_h-1080_q-70_m-crop.jpg',
//         title: 'Perù',
//         description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
//     },

//     {
//         url: 'https://img.itinari.com/pages/images/original/0d3ed180-d22d-48e8-84df-19c4d888b41f-62-crop.jpg?ch=DPR&dpr=2.625&w=1600&s=7ebd4b5a9e045f41b4e0c7c75d298d6c',
//         title: 'Chile',
//         description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
//     },
//     {
//         url: 'https://static1.evcdn.net/images/reduction/1583177_w-1920_h-1080_q-70_m-crop.jpg',
//         title: 'Argentina',
//         description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
//     },
//     {
//         url: 'https://cdn.sanity.io/images/24oxpx4s/prod/ed09eff0362396772ad50ec3bfb728d332eb1c30-3200x2125.jpg?w=1600&h=1063&fit=crop',
//         title: 'Colombia',
//         description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
//     },
// ];

// let itemsContent = '';
// let thumbnailsContent = '';
// let isForwardScroll = true;

// for (let i = 0 ; i < images.length ; i++){
//     itemsContent += `
//     <div class="my-carousel-item">
//         <img class="img-fluid" src="${images[i].url}" alt="${images[i].title} picture">
//         <div class="item-description px-3">
//             <h2>${images[i].title}</h2>
//             <p>${images[i].description}</p>
//         </div>
//     </div>`

//     thumbnailsContent += `
//     <div class="my-thumbnail">
//         <img class="img-fluid" src="${images[i].url}" alt="Thumbnail of ${images[i].title} picture">
//     </div>`
// }

// // recupero il wrapper dei singoli items
// const itemsElement = document.querySelector('div#my-carousel .my-carousel-images');

// // ne riempio il contenuto sovrascrivendolo
// itemsElement.innerHTML = itemsContent;

// // recupero il wrapper dei thumbnails
// const thumbnailsElement = document.querySelector('div#my-carousel  .my-thumbnails');

// // lo aggiungo al contenuto già presente (i bottoni prev e next)
// thumbnailsElement.innerHTML += thumbnailsContent;

// // inizializzo gli elementi che voglio visualizzare in active per primi
// let activeElement = 1;

// //  ho preso la lista degli items e da questa ho preso l'elemento all'indice activeElement, al quale ho aggiunto la classe active
// document.getElementsByClassName('my-carousel-item')[activeElement].classList.add('active');

// //  ho preso la lista dei thumbnail e da questa ho preso l'elemento all'indice activeElement, al quale ho aggiunto la classe active
// document.getElementsByClassName('my-thumbnail')[activeElement].classList.add('active');

// // recupero l'elemento sul quale voglio applicare il comportamento "previous"
// const prev = document.querySelector('div.my-previous');

// // gli aggiungo un event listener con una funzione anonima che
// prev.addEventListener('click', function() {
//     let oldElement = activeElement;
//     if( activeElement === 0){
//         activeElement = images.length - 1;
//     } else {
//         activeElement--;
//     }
//     switchToImage('my-carousel-item', 'my-thumbnail', activeElement, oldElement);
// });

// // recupero l'elemento sul quale voglio applicare il comportamento "next"
// const next = document.querySelector('div.my-next');

// // gli aggiungo un event listener con una funzione anonima che
// next.addEventListener('click', function() {
//     let oldElement = activeElement;
//     if( activeElement === images.length - 1){
//         activeElement = 0;
//     } else {
//         activeElement++;
//     }
//     switchToImage('my-carousel-item', 'my-thumbnail', activeElement, oldElement);
// });

// let autoScroll = setInterval(function(){
//     if (isForwardScroll) {
//         next.click();
//     }
//     else {
//         prev.click();
//     }
// }, 5000);

// function switchToImage(carouselSelector, thumbnailSelector, activeElement, elementToHide){
//     document.getElementsByClassName(carouselSelector)[elementToHide].classList.remove('active');
//     document.getElementsByClassName(thumbnailSelector)[elementToHide].classList.remove('active');

//     // infine aggiunge ai nuovi elementi selezionati la classe active
//     document.getElementsByClassName(carouselSelector)[activeElement].classList.add('active');
//     document.getElementsByClassName(thumbnailSelector)[activeElement].classList.add('active');
// }

// document.getElementById('my-after-carousel').innerHTML += `
// <button id="my-button" class="btn btn-primary">Inverti l\'ordine di scorrimento</button>
// <button id="my-stop-button" class="btn btn-primary">Interrompi lo scorrimento</button>`;

// document.getElementById('my-button').addEventListener('click', function(){
//     isForwardScroll = !isForwardScroll;
// })

// document.getElementById('my-stop-button').addEventListener('click', function(){
//     clearInterval(autoScroll);
// })



const list = [" 12312 w1nio qwd ", " 15152      ", "    125124    ", "33 NDKNSDNK  DNQIO DD     ", " 783129 78219 734891 12 12 121 ", "djionjdwq", "dniqondiw", "dwnhjiqonhwd"];
// for (let i = 0; i  < list.length; i++ ){
//     console.log(list[i]);
// }

// # il foreach è un ciclo for applicato esclusivamente agli array che cicla per ogni elemento definito come argomento alla arrow function ad esso assegnata
list.forEach((element, index) => {
    console.log(index, element);
});

// // § array.map ci consente di creare una copia dell'array su cui sto eseguendo la funzione che abbia come elementi i nuovi elementi restituiti all'interno della arrow function del map()
// const newList = list.map((element) => {
//     return parseInt(element.trim());
// })

numbers = [1,2,3,4,5,6,7,8,9,11,12,13,14];

const oddNumbers = numbers.filter((element) => {
    if (element % 2 === 0){
        return false;   // non inserirlo nel nuovo array
    }
    return true; // inseriscilo nel nuovo array
})

// ? funzione che filtra tutti gli elementi che rispettano la condizione per cui viene ritornato true e li restituisce in una copia dell'array che contiene solo questi elementi.
const evenNumbers = numbers.filter((element) => {
    if (element % 2 === 0){
        return true;   // non inserirlo nel nuovo array
    }
    return false; // inseriscilo nel nuovo array
})

console.log(numbers);
console.warn(oddNumbers);
console.warn(evenNumbers);