
const app = new Vue({
    el: "#app",
    data: {
        todoList : [
            {
                text : 'patate',
                done: false,
            },
            {
                text : 'latte',
                done: false,
            },
            {
                text : 'sorbetto triste',
                done: true,
            },
            {
                text : 'seitan',
                done: false,
            }
        ],

        newTodoContent: "",
    },
    methods: {

        // una funzione che aggiunga un elemento
        // una funzione che rimuova un elemento

        addTodoElement(todoContent, isTodoDone) {
            if(todoContent.trim() != "") {

                const newTodoElement = {
                    text : todoContent.trim(),
                    done : isTodoDone
                }

                this.todoList.push(newTodoElement);
                this.newTodoContent = "";
            } else {
                console.warn('Stai cercando di inserire un elemento vuoto: non sarà inserito')
            }
        },

        removeTodoElement(todoIndex) {
            if (this.todoList[todoIndex] != undefined){
                this.todoList.splice(todoIndex, 1);
            } else {
                console.warn('Stai cercando di rimuovere un elemento che non esiste dalla todo list');
            }

        },

        toggleDone(todoIndex){
            if (this.todoList[todoIndex] != undefined){
                this.todoList[todoIndex].done = !this.todoList[todoIndex].done;
            } else {
                console.warn('Stai cercando di attivare una funzionalità su un elemento che non esiste dalla todo list');
            }
        }

    }
});

// function getRandomColor() {
//     var letters = '0123456789ABCDEF';
//     var color = '#';
//     for (var i = 0; i < 6; i++) {
//       color += letters[Math.floor(Math.random() * 16)];
//     }
//     return color;
// }



// ! elemento
/**
 *
    text, una stringa che indica il testo del todo
    done, un booleano (true/false) che indica se il todo è stato fatto oppure no
 *
 */


/**
 *
 * Ale O, Fra Gio, Simo And, Eka, DanielJarnig, MattiaP  : cambiare il done dell'oggetto => come cambiare la proprietà dell'oggetto?
 *
 * Ale O. : difficoltà nella sintassi della scrittura delle funzioni
 *
 * Manuel Ger, Busna : quando rimuovo le todolist mi dà errore.
 *
 * Fra Capr, Busna: quando metto al penultimo il done, cancellandolo passava all'ultimo.
 *
 * Salvo : implementiamo di nuovo il remove
 *
 *
 *
 */