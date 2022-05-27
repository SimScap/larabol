<template>
    <div>
        <div class="wrapper w-75 mx-auto">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="m-5 p-3"> Pokemon disponibili: </h1>
                    </div>

                    <Pokemon v-for="(pokemon, index) in pokemons" :key="index" :pokemon="pokemon"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Pokemon from '../components/Pokemon';
export default {
    name : 'App',
    components : {
        Pokemon,
    },
    data: function() {
        return {
            pokemons: [],
        }
    },
    methods: {
        getPokemons(){
            axios.get('http://127.0.0.1:8000/api/pokemons')
            .then( (result) => {
                this.pokemons = result.data.data;
                console.log(result.data.data);
            })
            .catch( (error)  => {
                console.warn(error);
            });
        }
    },
    mounted(){
        this.getPokemons();
    }

}
</script>

<style>

</style>