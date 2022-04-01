<template>
    <main class="container px-5 mt-4">
        <div class="row flex-wrap row-cols-5 gx-5">
            <Disc
                v-for="(discElement, index) in filteredDiscsList "
                :key="index"
                :discElement="discElement"
                class="col mb-3"
                />
        </div>
    </main>
</template>

<script>
import axios from 'axios';
import Disc from './Disc.vue';

export default {
    name: 'MainDiscContainer',
    components: {
        Disc,
    },
    props : [ 'selectedGenre' ],
    data: function() {
        return{
            genresList : [],
            discsList : [],
        }
    },
    computed: {
        filteredDiscsList(){
            if(this.selectedGenre === ''){
                return this.discsList;
            }
            return this.discsList.filter(
                (element) => element.genre === this.selectedGenre)
        }
    },


    created(){
        axios
            .get('https://flynn.boolean.careers/exercises/api/array/music')
            .then((result) => {
                // this.genresList = [];
                // mi serve un modo per salvarmi i dischi da qualche parte
                this.discsList = result.data.response;

                // Per ogni disco presente nella risposta alla chiamata axios
                // se non è già presente il genere nella lista dei generi
                // allora aggiungilo
                this.discsList.forEach((discElement) => {
                    if (!this.genresList.includes(discElement.genre)){
                        this.genresList.push(discElement.genre)
                    }
                })

                this.$emit('loadedGenres', this.genresList);

            })
            .catch((error) => {
                console.error(error);
            })
    }
}
</script>