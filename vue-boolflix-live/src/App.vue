<template>
  <Header @newSearch="updateMovieSearch"/>
  <Main :movies="moviesAndSeries"/>
</template>

<script>
import Header from './components/Header.vue';
import Main from './components/Main.vue';
import axios from 'axios';

export default {
  name: 'App',
  components: {
    Header,
    Main
  },
  data:
    function() {
      return {
        movies : [],
        series : [],
        moviesAndSeries : [],
        apiURL : 'https://api.themoviedb.org/3/search/',
        apiKey : '?api_key=e99307154c6dfb0b4750f6603256716d&query=',
        movieSearch : '',
      }
    },
  methods : {
    updateMovieSearch(inputString){
      this.movieSearch = inputString;
      console.warn(this.movieSearch);
      this.getMovies();
      this.getSeries();
    },
    getMovies(){
      axios
      .get(this.apiURL + 'movie' + this.apiKey + this.movieSearch)
      .then((response) => {
        console.log(response.data.results);
        this.movies = response.data.results;
        this.moviesAndSeries = [...this.movies, ...this.series];
      })
      .catch ((error) => {
        console.log(this.apiURL);
        console.log(this.movieSearch);
        console.log(error);
      });
    },
    getSeries(){
      axios
      .get(this.apiURL + 'tv' + this.apiKey + this.movieSearch)
      .then((response) => {
        console.log(response.data.results);
        this.series = response.data.results;
        this.moviesAndSeries = [...this.movies, ...this.series];
      })
      .catch ((error) => {
        console.log(this.apiURL);
        console.log(this.movieSearch);
        console.log(error);
      });
    }
  }
}
</script>

<style lang="scss">
@import '~bootstrap/scss/bootstrap.scss';

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
