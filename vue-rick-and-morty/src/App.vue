<template>
  <div id="app">
    <!-- Main header -->
    <!-- // ? <NomeComponent prop="Prop statico" @nomeEmitDelFiglio='funzioneCheChiamoQuandoEmitVieneTriggerato' -->
    <Header message="Rick&Morty #55" @searchChar="newSearch"/>

    <!-- Main content with the list of characters -->
    <CharactersList :searchString="searchString" />

  </div>
</template>

<script>
import Header from './components/Header.vue'
import CharactersList from './components/CharactersList.vue'

export default {
  name: 'App',
  components: {
    // HelloWorld
    Header,
    CharactersList,
  },
  data: function(){
    return{
      searchString : '',
    }
  },
  methods: {
    newSearch(stringToSearch){
      if (stringToSearch.trim() === ''){
        console.warn('La stringa che stai cercando è vuota');
        console.warn(stringToSearch);
      }
      this.searchString = stringToSearch;
    }
  }
}
</script>

<style lang="scss">
@import '@/style/main-style.scss';

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
}
</style>
