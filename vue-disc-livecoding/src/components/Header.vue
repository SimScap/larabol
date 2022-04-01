<template>
    <header class="d-flex justify-content-between px-4 align-items-center">
        <div class="logo-brand p-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="">
        </div>
        <div class="">
            <select
                class="form-select"
                v-model="selectedGenre"
                @change="$emit('changedSelGenre', selectedGenre)"
                >


                <!-- option con v-for per ogni genere acchiappato dalla lista dischi -->
                <option value="">All</option>
                <option v-for="(genre, index) in genresList" :key="index" :value="genre"> {{ genre }}</option>
            </select>
        </div>
    </header>
</template>

<script>
export default {
    name: 'IndexHeader',
    props: {
        genresList : Array
    },
    data: function(){
        return{
            selectedGenre : '',
        }
    },
    methods: {
    }
}
</script>

<style lang="scss" scoped>
    header{
        height: 75px;
        background-color: #2e3a46;
        img{
            width:50px;
        }
    }
</style>