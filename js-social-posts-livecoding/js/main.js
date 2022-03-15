
/**
 * Descrizione
Ricreiamo un feed social aggiungendo al layout di base fornito, il nostro script JS in cui:

Milestone 2 - Prendendo come riferimento il layout di esempio presente nell'html, stampiamo i post del nostro feed.

Milestone 3 - Se clicchiamo sul tasto "Mi Piace" cambiamo il colore al testo del bottone e incrementiamo il counter dei likes relativo. Salviamo in un secondo array gli id dei post ai quali abbiamo messo il like.
 *
 *
 */

const posts = [
    {
        "id": 1,
        "content": "Placeat libero ipsa nobis ipsum quibusdam quas harum ut. Distinctio minima iusto. Ad ad maiores et sint voluptate recusandae architecto. Et nihil ullam aut alias.",
        "media": "https://unsplash.it/600/300?image=171",
        "author": {
            "name": "Phil Mangione",
            "image": "https://unsplash.it/300/300?image=15"
        },
        "likes": 80,
        "created": "2021-06-25"
    },
    {
        "id": 2,
        "content": "Placeat libero ipsa nobis ipsum quibusdam quas harum ut. Distinctio minima iusto. Ad ad maiores et sint voluptate recusandae architecto. Et nihil ullam aut alias.",
        "media": "https://unsplash.it/600/400?image=112",
        "author": {
            "name": "Sofia Perlari",
            "image": "https://unsplash.it/300/300?image=10"
        },
        "likes": 120,
        "created": "2021-09-03"
    },
    {
        "id": 3,
        "content": "Placeat libero ipsa nobis ipsum quibusdam quas harum ut. Distinctio minima iusto. Ad ad maiores et sint voluptate recusandae architecto. Et nihil ullam aut alias.",
        "media": "https://unsplash.it/600/400?image=234",
        "author": {
            "name": "Chiara Passaro",
            "image": "https://unsplash.it/300/300?image=20"
        },
        "likes": 78,
        "created": "2021-05-15"
    },
    {
        "id": 4,
        "content": "Placeat libero ipsa nobis ipsum quibusdam quas harum ut. Distinctio minima iusto. Ad ad maiores et sint voluptate recusandae architecto. Et nihil ullam aut alias.",
        "media": "https://unsplash.it/600/400?image=24",
        "author": {
            "name": "Luca Formicola",
            "image": null
        },
        "likes": 56,
        "created": "2021-04-03"
    },
    {
        "id": 5,
        "content": "Placeat libero ipsa nobis ipsum quibusdam quas harum ut. Distinctio minima iusto. Ad ad maiores et sint voluptate recusandae architecto. Et nihil ullam aut alias.",
        "media": "https://unsplash.it/600/400?image=534",
        "author": {
            "name": "Alessandro Sainato",
            "image": "https://unsplash.it/300/300?image=29"
        },
        "likes": 95,
        "created": "2021-03-05"
    }
];

const likedPosts = [];

const containerElement = document.getElementById('container');

posts.forEach((element) => {
    // console.log(element);
    containerElement.innerHTML += generatePostContent(element);
});

function generatePostContent(postElement){

    // destrutturazione degli oggetti
    // per ogni const che ho creato assegna la proprietà dell'oggetto dopo l'uguale come se accedessi alla stessa

    // § const {id} = postElement ===> const id = postElement.id
    // § const {author} = postElement ===> const id = postElement.author
    const { id, author, content, created, media, likes} = postElement;

    return `
    <div class="post">
        <div class="post__header">
            <div class="post-meta">
                <div class="post-meta__icon">
                    <img class="profile-pic" src="${author.image}" alt="${author.name}">
                </div>
                <div class="post-meta__data">
                    <div class="post-meta__author">${author.name}</div>
                    <div class="post-meta__time">${created}</div>
                </div>
            </div>
        </div>
        <div class="post__text">${content}</div>
        <div class="post__image">
            <img src="${media}" alt="Immagine post con id ${id}">
        </div>
        <div class="post__footer">
            <div class="likes js-likes">
                <div class="likes__cta">
                    <a class="like-button  js-like-button" href="#" data-postid="${id}">
                        <i class="like-button__icon fas fa-thumbs-up" aria-hidden="true"></i>
                        <span class="like-button__label">Mi Piace</span>
                    </a>
                </div>
                <div class="likes__counter">
                    Piace a <b id="like-counter-${id}" class="js-likes-counter">${likes}</b> persone
                </div>
            </div>
        </div>
    </div>
    `;
}


// Soluzione Grande : cambiamo like-counter-${element.id}
// Soluzione Carusante : tutti i bottoni e con un for gli aggiungo l'event listener
const likeCounters = document.querySelectorAll(`.js-likes-counter`);
const likeButtons = document.querySelectorAll(`.js-like-button`);

for (let i = 0 ; i < likeButtons.length ; i++){
    const element = likeButtons[i];

    console.warn(element);
    element.addEventListener('click', (event) => {
        event.preventDefault();

        if ( element.classList.contains('like-button--liked') ){
            element.classList.remove('like-button--liked');

            // mi prendo il counter attuale dei like
            likeCounters[i].innerHTML = parseInt(likeCounters[i].innerHTML) - 1;
            likedPosts.splice( likedPosts.indexOf(likeButtons[i].getAttribute('data-postid') ));

        } else {
            element.classList.add('like-button--liked');

            // mi prendo il counter attuale dei like
            likeCounters[i].innerHTML = parseInt(likeCounters[i].innerHTML) + 1;
            likedPosts.push(likeButtons[i].getAttribute('data-postid'));
        }
    })
}

