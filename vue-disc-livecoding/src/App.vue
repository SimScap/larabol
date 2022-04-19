<template>
  <div id="app">
    <Header :genresList="genresList"   @changedSelGenre="updateSelectedGenres" />
    <Main   @loadedGenres="updateGenresList" :selectedGenre="selectedGenre"/>
  </div>
</template>

<script>
import Header from './components/Header.vue';
import Main from './components/Main.vue';

export default {
  name: 'App',
  components: {
    Header,
    Main
  },
  data: function(){
    return{
      genresList : [],
      selectedGenre : '',
    }
  },
  methods: {
    updateGenresList(genresList){
      this.genresList = genresList;
    },
    updateSelectedGenres(selectedGenre){
      this.selectedGenre = selectedGenre;
    },
  }
}
</script>

<style lang="scss">
@import "./assets/styles/style.scss";
</style>
