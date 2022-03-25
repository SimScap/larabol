
const app = new Vue({
    el: '#app',
    data : {
        playerNumber: 0,
        pcNumber: 0,
        counter: 0,
    },
    methods: {
        startGame(){
            this.counter++;
            const self = this;
            axios.get('https://flynn.boolean.careers/exercises/api/random/int')
            .then(function (answer) {
                self.playerNumber = answer.data.response;
            });

            axios.get('https://flynn.boolean.careers/exercises/api/random/int')
            .then(function (answer) {
                self.pcNumber = answer.data.response;
            });
        }
    },
    created(){},
    mounted(){
    }
});
