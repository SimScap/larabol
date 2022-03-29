
/**
 * Vittorio : problematiche con la ripetizione della chiamata (10 email tutte uguali)
 *
 * Luca : non mi funzionava il v-for
 * Funzione dentro methods: proviamo
 *
 */

const app = new Vue({
    el: '#app',
    data : {
        emailList : [],
    },
    methods: {
    },
    created(){},
    mounted(){
        const self = this;

        for (let i = 0 ; i < 10 ; i++){
            axios.get('https://flynn.boolean.careers/exercises/api/random/mail')
            .then(function (answer) {
                self.emailList.push(answer.data.response);
            });
        }
    }
});



/**
 * cd => change directory
 * mkdir => make directory
 * rmdir => remove directory
 * 
 */