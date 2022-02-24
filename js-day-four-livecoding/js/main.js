/**
 *
 *
 * Il programma dovrà mostrare una form (a piacere) da compilare con cui chiedere all'utente il numero di chilometri che vuole percorrere e l'età del passeggero.Sulla base di queste informazioni dovrà calcolare il prezzo totale del viaggio, secondo queste regole:

    il prezzo del biglietto è definito in base ai km (0.27 € al km)
    va applicato uno sconto del 17% per i minorenni
    va applicato uno sconto del 33% per gli over 65.

    L'output del prezzo finale va visualizzato con massimo due decimali, per indicare centesimi sul prezzo.
 *
 */

    /**
     *
     * A)   prendiamo le informazioni necessarie dall'utente:
     *      -   quanti chilometri devi fare
     *      -   quanti anni ha il passeggero
     *
     * B)   sistema di calcolo      (Vittorio)
     *      -
     *      -
     *
     * C)   rappresentazione        (Alessio)
     *      -
     *      -
     *
     *
     * Last ) Creiamo una struttura HTML che ci permetta la visualizzazione dei dati consentiti
     */


    // recuperiamo gli elementi di input in HTML
    let userDistance = document.getElementById('input-km');
    let userAge = document.querySelector('#input-age');
    let userName = document.getElementById('input-name');

    // prezzo base al km
    const basePricePerKm = 0.27;

    // recupero il bottone che genera il biglietto
    const ticketGeneratorButton = document.getElementById('button-generate');

    // Recupero l'elemento all'interno del quale voglio inserire l'outpu
    const outputElement = document.querySelector('#ticket-desk');

    // aggiungo un event listener su evento click al bottone che genera i biglietti
    ticketGeneratorButton.addEventListener('click', function()  { // condizioni e calcoli per ogni click sul bottone
        /**
         *
            il prezzo del biglietto è definito in base ai km (0.27 € al km)
            va applicato uno sconto del 17% per i minorenni
            va applicato uno sconto del 33% per gli over 65.
         */

        // recupero i dati inseriti dall'utente

        console.log(userName.value);

        let ticketPrice = basePricePerKm * userDistance.value;
        console.log(ticketPrice);

        console.log(userAge.value);

        if (userAge.value == "minorenne"){
            ticketPrice = ticketPrice * 0.83;
            console.log('Scontato del 17%');
        } else if ( userAge.value == "over65" ){
            ticketPrice -= ticketPrice * 0.33;
            console.log("Scontato del 33%");
        } else {
            console.log("Nessuno sconto applicato");
        }
        console.log(ticketPrice);

        // Se il valore della distanza inserito non ha la possibilità di essere convertito a numero
        // oppure se il nome contiene numeri
        if (isNaN(parseInt(userDistance.value)) || (/[^a-zA-Z]\s/.test(userName.value)) ){
            // aggiungo la classe text-warning all'output
            outputElement.classList.add('text-warning');

            // rimuovo eventuali text-white dall'output
            outputElement.classList.remove('text-white');

            // Inserisco il messaggio che comunica l'errore
            outputElement.innerHTML = `La distanza inserita o il nome non sono corretti`;
        } else {
            // rimuovo la classe text-warning, se presente, dall'output
            outputElement.classList.remove('text-warning');

            // aggiungo la classe text-white all'output
            outputElement.classList.add('text-white');

            // Inserisco il messaggio con i dati del biglietto
            outputElement.innerHTML = `Il biglietto di ${userName.value} ha un costo di ${ticketPrice.toFixed(2)}€`;
        }
        document.getElementById('output').classList.remove('d-none');

    })


    const ticketReset = document.getElementById('button-reset');

    // aggiungo un event listener su evento click al bottone che genera i biglietti
    ticketReset.addEventListener('click', function(){


        userName.value = "";
        userAge.value = "maggi";
        userDistance.value = "";
        outputElement.innerHTML = "";

        document.getElementById('output').classList.add('d-none');
    });
