const app = new Vue({
    el: '#app',
    data: {

        activeImage : 0,
        hasAutoScroll : null,
        isAutoScrollActive : true,
        isNextDirection : true,
        // url, title, description
        images : [
            {
                url: 'http://www.viaggiareonline.it/wp-content/uploads/2014/11/sweden_148857365.jpg',
                title: 'Svezia',
                description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
            },

            {
                url: 'https://static1.evcdn.net/images/reduction/1513757_w-1920_h-1080_q-70_m-crop.jpg',
                title: 'Perù',
                description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
            },

            {
                url: 'https://img.itinari.com/pages/images/original/0d3ed180-d22d-48e8-84df-19c4d888b41f-62-crop.jpg?ch=DPR&dpr=2.625&w=1600&s=7ebd4b5a9e045f41b4e0c7c75d298d6c',
                title: 'Chile',
                description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
            },
            {
                url: 'https://static1.evcdn.net/images/reduction/1583177_w-1920_h-1080_q-70_m-crop.jpg',
                title: 'Argentina',
                description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
            },
            {
                url: 'https://cdn.sanity.io/images/24oxpx4s/prod/ed09eff0362396772ad50ec3bfb728d332eb1c30-3200x2125.jpg?w=1600&h=1063&fit=crop',
                title: 'Colombia',
                description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam.'
                }],


    },

    /**
     * Intercetto l'hook created per informare attraverso il log che l'istanza sia stata creata
     */
    created() {
        console.log('istanza di Vue creata');
    },

    /**
     * L'insieme dei metodi che voglio utilizzare nella mia istanza di Vue
     */
    methods: {

        /**
         * Funzione che rende visibile la slide precedente cambiando l'indice della proprietà activeImage
         */
        previousSlide(){
            console.log('prevSlide() chiamata');
            if ( this.activeImage === 0 ){
                this.activeImage = this.images.length - 1;
            } else {
                this.activeImage--;
            }
        },

        /**
         * Funzione che rende visibile la slide successiva cambiando l'indice della proprietà activeImage
         */
        nextSlide(){
            console.log('nextSlide() chiamata');
            if ( this.activeImage ===   this.images.length - 1 ){
                this.activeImage = 0;
            } else {
                this.activeImage++;
            }
        },

        /**
         * Funzione che cambia la slide attiva ad una selezionata attraverso l'argomento imageIndex
         * @param {number} imageIndex L'indice dell'immagine selezionata, se e solo se è nel range degli indici della lista delle immagini
         */
        changeSlide(imageIndex){
            if ( this.images[imageIndex] !== undefined ) this.activeImage = imageIndex;
            else console.warn('Che stamo a fa? - Hai inserito un indice piùttosto arbitrario, ovvero: ' +imageIndex + ', mentre l\'array dispone di ' + this.images.length + ' elementi');
        },

        /**
         * Funzione che gestisce il meccanismo di esecuzione dell'autoscroll delle slide
         */
        autoScroll(){
            if (this.isAutoScrollActive){
                console.warn('Scroll partito');
                this.hasAutoScroll = setInterval(() => {
                    if (this.isNextDirection){
                        this.nextSlide();
                    } else {
                        this.previousSlide();
                    }
                }, 1000);
            } else {
                console.log('Scroll non attivo, funzione chiamata senza inizializzazione dell\'autoscroll')
            }

        },

        /**
         * Funzione che interrompe il meccanismo di autoscroll delle slide
         */
        stopScroll(){
            clearInterval(this.hasAutoScroll);
            console.warn('Scroll interrotto');
            this.hasAutoScroll = null;
        },

        /**
         * Attiva o disattiva la funzionalità di autoscroll
         */
        toggleAutoScroll(){
            this.isAutoScrollActive = !this.isAutoScrollActive;
            if (!this.isAutoScrollActive) this.stopScroll();
            else this.autoScroll()
        },

    /**
     *  Dobbiamo invertire la direzione in caso di changeDirection, ma la direzione dello scroll
     *
     * alpha - dobbiamo creare una funzione che quando è chiamata cambi la direzione
     * A - dobbiamo gestire dove indicare che la direzione è stata cambiata, o invertita
     * B - dobbiamo cambiare il comportamento dell'autoscroll sulla base della direzione scelta
     *
     */

        /**
         *  Funzione che inverte il verso di autoscroll
         */
        changeDirection(){
            this.isNextDirection = !this.isNextDirection;
        },

        /**
         * Funzione che ritorna il valore attuale del verso di autoscroll
         * @returns Variabile booleana che indica il verso di autoscroll: verso destra se positiva, verso sinistra se negativa
         */
        checkDirection(){
            return this.isNextDirection;
        }
    }
});