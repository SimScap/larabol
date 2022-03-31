<template>
  <div id="app">
    <Header />
    <Main />
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Main from './components/Main.vue'

export default {
  name: 'App',
  components: {
    Header,
    Main,
  }
}
</script>

<style lang="scss">
@import '@/styles/style.scss';

  .component-element{
        // border: 3px solid;
        position: relative;

        div.component-description{
            padding: .2rem;
            font-size: .8rem;
            position: absolute;
            display:inline-block;
            top: 0;
            right: 0;
            color:white;
        }
    }

</style>
