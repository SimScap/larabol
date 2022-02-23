// let outputElement = document.getElementById('output').innerHTML;
// // let h2 = document.getElementById('title').innerHTML;
// console.log(outputElement);
// console.log(outputElement.outerHTML);
// console.log(outputElement.innerHTML);
// console.log(outputElement.className);
// console.log(typeof outputElement);

// // lista di elementi con la query css selezionata
// § let elements = document.querySelectorAll('.blue');

// prendo il primo elemento con la query css selezionata
// let preOutput= document.querySelector('main pre');
// console.log(preOutput);

// § rimuovere o aggiungere una classe alla lista delle classi di un elemento del DOM (.classList)
// preOutput.classList.remove('text-white');
// preOutput.classList.add('text-warning');

// § modificare apertamente le classi di un elemento del DOM (.className) sotto forma di stringa
// preOutput.className += " text-warning fs-1";
// console.log(preOutput.className);

// preOutput.style.margin = "3rem";
// console.log(preOutput.style);

// let listElement= document.querySelector('main ul');
// let liElement = document.createElement("li");
// liElement.innerHTML = "Elemento";
// liElement.classList.add('text-warning', 'fs-1', 'white');

// let liPrependElement = document.createElement("li");
// liPrependElement.innerHTML = "Primo elemento";

// // aggiunge un elemento alla fine dei suoi figli
// listElement.append(liElement);
// // aggiunge un elemento all'inizio dei suoi figli
// listElement.prepend(liPrependElement);

// let newButton = document.createElement('button');
// newButton.classList.add('btn', 'btn-dark', 'bg-dark');
// newButton.innerHTML = "Cliccami!"

// document.querySelector('main').append(newButton);
// newButton.parentElement.classList.add('text-center');

// newButton.addEventListener('click',  function() {
//         alert('Ciao!');
//         newButton.innerHTML = "Oh yeah!"
//         newButton.parentElement.classList.remove('text-center');
//         preOutput.innerHTML = "NOW WE ARE TALKING!";
//     });


let userInput = document.getElementById('user-text-input');

const userButton = document.querySelector('main button');
userButton.addEventListener('click', function() {
    console.log(userInput.value);
    document.querySelector('main p').innerHTML = userInput.value;
    userInput.value = "";
});