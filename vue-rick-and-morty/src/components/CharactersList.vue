<template>
    <main class="container-fluid px-5">
        <div class="row text-center p-2 mb-2">
            <div class="col-12">
                <h1> {{ searchString }} </h1>
            </div>
        </div>
        <div class="row" v-if="charactersList">
            <div v-for="element in newSearch" :key="element.id" class="col-6 col-md-4 col-lg-3 mb-3">
                <Character
                    :title="element.name"
                    :image="element.image"
                    :description="element.status"
                    :boldDescription="element.species"
                />
            </div>
            <div class="col-12 text-center m-3">
                <button class="btn btn-primary" @click="getApiList(apiNextAddress)">
                    Next
                </button>
            </div>
            <div class="col-12">
                <p class="text-small text-end">Ho caricato {{ newSearch.length }} personaggi</p>
            </div>
        </div>

        <div class="row text-center m-5 p-5" v-else>
            <div class="col-12">
                <Loader />
            </div>
        </div>
    </main>
</template>


<script>
import axios from "axios"; // inizializziamo la libreria 'axios' come variabile axios
import Character from './Character.vue'
import Loader from './Loader.vue'

export default {
    name: "CharactersList",
    props: { 'searchString': String },
    components: {
        Character,
        Loader
    },

    data: function(){
        return{
            apiBaseAddress: "https://rickandmortyapi.com/api/character",
            apiNextAddress : null,
            charactersList : null,
        }
    },
    created: function(){
        setTimeout(this.getApiList, 2000, this.apiBaseAddress);
    },
    methods: {
        getApiList(apiAddress){
            console.log(apiAddress);
            axios
            .get(apiAddress)
            .then((result) => {
                // console.warn(result.data.info.next);
                this.charactersList = result.data.results;
                this.apiNextAddress = result.data.info.next;

                console.log(this.charactersList);
            })
            .catch((error) => {
                console.error(error);
            })
        },
    },
    computed: {
        newSearch(){
            if ( this.searchString.toLowerCase().trim() === ''){
                console.warn('Stai cercando una stringa vuota');
                return this.charactersList;
            }

            // Filtra tra i charactersList con la lista dei personaggi che hanno all'interno del nome la stringa cercata e ritornala sottoforma di nuovo array (computed).
            return this.charactersList.filter(
                (element) => element.name.toLowerCase().includes(this.searchString.toLowerCase().trim())
            );
        }
    }
}
</script>

<style>

</style>