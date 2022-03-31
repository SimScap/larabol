<template>
    <nav class="navbar navbar-light bg-light mb-3">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="#">{{ message }} - {{ searchInput }}</a>
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                v-model.trim="searchInput"
                @keyup="startNewCharSearch">
                <button class="btn btn-outline-success" type="submit" @click="startNewCharSearch">Search</button>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'IndexHeader',
    props: ['message'],
    data: function(){
        return {
            searchInput : ''
        }
    },
    methods:{
        startNewCharSearch(){
            if(this.searchInput === '') {
                console.warn('Stai cercando una stringa vuota, la ricerca non verrà chiamata');
            } else {
                // ? tu oggetto del component attuale EMETTI un evento chiamato 'searchChar' al tuo parent
                // § e passagli come argomento this.searchInput
                this.$emit('searchChar', this.searchInput);
            }
        }
    }
}
</script>

<style>

</style>