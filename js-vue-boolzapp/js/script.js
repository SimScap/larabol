/**
 * Matteo L, Luca P, Vittorio, Manuel : non seguo la logica giusta
 *
 *
 * Milestone 1
 *
    Replica della grafica con la possibilità di avere messaggi scritti dall’utente (verdi)
    e dall’interlocutore (bianco) assegnando due classi CSS diverse

    Visualizzazione dinamica della lista contatti:
    tramite la direttiva v-for, visualizzare nome e immagine di ogni contatto

 *
 */


    /**
     *
     * fare un v-for sui contatti
     * mi salvo "da qualche parte" su che contatto "sto"
     * ciclo con un v-for sui messaggi del contatto su cui "sto"
     *
     */

/**
 *
 *  day.js che si spacca
 *
 *
 */

const app = new Vue({
    el: '#app',
    data : {

        // indice attraverso il quale tengo il contatto selezionato al momento

        newMessageContent : '',

        contactSearchContent : '',

        activeContact : 0,

        contactsNotFound: [],

        contacts: [
            {
                name: 'Michele',
                avatar: '_1',
                visible: true,
                messages: [
                    {
                        date: '10/01/2020 15:30:55',
                        message: 'Hai portato a spasso il cane?',
                        status: 'sent'
                    },
                    {
                        date: '10/01/2020 15:50:00',
                        message: 'Ricordati di stendere i panni',
                        status: 'sent'
                    },
                    {
                        date: '10/01/2020 16:15:22',
                        message: 'Tutto fatto!',
                        status: 'received'
                    }
                ],
            },
            {
                name: 'Giangiovanni',
                avatar: '_8',
                visible: true,
                messages: [
                ],
            },

            {
                name: 'Fabio',
                avatar: '_2',
                visible: true,
                messages: [
                    {
                        date: '20/03/2020 16:30:00',
                        message: 'Ciao come stai?',
                        status: 'sent'
                    },
                    {
                        date: '20/03/2020 16:30:55',
                        message: 'Bene grazie! Stasera ci vediamo?',
                        status: 'received'
                    },
                    {
                        date: '20/03/2020 16:35:00',
                        message: 'Mi piacerebbe ma devo andare a fare la spesa.',
                        status: 'sent'
                    }
                ],
            },
            {
                name: 'Samuele',
                avatar: '_3',
                visible: true,
                messages: [
                    {
                        date: '28/03/2020 10:10:40',
                        message: 'La Marianna va in campagna',
                        status: 'received'
                    },
                    {
                        date: '28/03/2020 10:20:10',
                        message: 'Sicuro di non aver sbagliato chat?',
                        status: 'sent'
                    },
                    {
                        date: '28/03/2020 16:15:22',
                        message: 'Ah scusa!',
                        status: 'received'
                    }
                ],
            },
            {
                name: 'Alessandro B.',
                avatar: '_4',
                visible: true,
                messages: [
                    {
                        date: '10/01/2020 15:30:55',
                        message: 'Lo sai che ha aperto una nuova pizzeria?',
                        status: 'sent'
                    },
                    {
                        date: '10/01/2020 15:50:00',
                        message: 'Si, ma preferirei andare al cinema',
                        status: 'received'
                    }
                ],
            },
            {
                name: 'Alessandro L.',
                avatar: '_5',
                visible: true,
                messages: [
                    {
                        date: '10/01/2020 15:30:55',
                        message: 'Ricordati di chiamare la nonna',
                        status: 'sent'
                    },
                    {
                        date: '10/01/2020 15:50:00',
                        message: 'Va bene, stasera la sento',
                        status: 'received'
                    }
                ],
            },
            {
                name: 'Claudia',
                avatar: '_6',
                visible: true,
                messages: [
                    {
                        date: '10/01/2020 15:30:55',
                        message: 'Ciao Claudia, hai novità?',
                        status: 'sent'
                    },
                    {
                        date: '10/01/2020 15:50:00',
                        message: 'Non ancora',
                        status: 'received'
                    },
                    {
                        date: '10/01/2020 15:51:00',
                        message: 'Nessuna nuova, buona nuova',
                        status: 'sent'
                    }
                ],
            },
            {
                name: 'Federico',
                avatar: '_7',
                visible: true,
                messages: [
                    {
                        date: '10/01/2020 15:30:55',
                        message: 'Fai gli auguri a Martina che è il suo compleanno!',
                        status: 'sent'
                    },
                    {
                        date: '10/01/2020 15:50:00',
                        message: 'Grazie per avermelo ricordato, le scrivo subito!',
                        status: 'received'
                    }
                ],
            },
            {
                name: 'Davide',
                avatar: '_8',
                visible: true,
                messages: [
                    {
                        date: '10/01/2020 15:30:55',
                        message: 'Ciao, andiamo a mangiare la pizza stasera?',
                        status: 'received'
                    },
                    {
                        date: '10/01/2020 15:50:00',
                        message: 'No, l\'ho già mangiata ieri, ordiniamo sushi!',
                        status: 'sent'
                    },
                    {
                        date: '10/01/2020 15:51:00',
                        message: 'OK!!',
                        status: 'received'
                    }
                ],
            }
        ]
    },
    methods: {

        /**
         * Function that changes the active contact index.
         * @param {*} index The index to be updated
         */
        changeContactIndex(index){
            if (this.contacts[index] === undefined)
            {
                console.warn('l\'indice inserito non è valido come elemento dell\'array contacts');
            } else {
                this.activeContact = index;
            }
        },

        sendNewMessage(contacts, index, messageContent){
            const today = new Date();
            const newMessage = {
                date: today.getDay() +'/'+ today.getMonth()  +'/'+ today.getFullYear(),
                message: messageContent,
                status: 'sent'
            };

            if (messageContent.trim() != ''){
                contacts[index].messages.push(newMessage);
                this.clearMessageInput();
            }
        },

        clearMessageInput(){
            this.newMessageContent = '';
        },

        filterContacts(stringToSearch){
            const self = this;
            self.contactsNotFound = [];

            self.contacts.forEach((contact) => {
                if (contact.name.toLowerCase().startsWith(stringToSearch.toLowerCase().trim()))   // se lo trovo
                {
                    contact.visible = true; // rendo visibile il contatto
                } else { // se invece non lo trovo
                    // rendo invisibile il contatto
                    contact.visible = false;
                    self.contactsNotFound.push(contact.name);
                }
            });
        }

    }
});


/**
 * perso due ore per il setTimeout()
 * vittorio richiede cambio data su ultimo accesso del contatto
 *
 *
 *
 *
 */