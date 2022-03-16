
// § creo una nuova istanza di un oggetto di classe Vue con le caratteristiche inserite al suo interno
const app = new Vue(
    {
        // # il contenuto della proprietà el sarà l'id dell'elemento di partenza di Vue
        el : '#app',

        // | i dati raggiungibili dal lato html attraverso v-bind, v-model, ecc..
        data : {
            firstName : '',
            lastName: '',
            classeScelta : '',
        },

        // | i metodi (funzioni) raggiungibili dal lato html
        methods : {
            // saluta(){}
            // () => {}
            saluta : function() {
                console.log("Ciao!");
                console.log(this.firstName);
            }
        }
    }
)