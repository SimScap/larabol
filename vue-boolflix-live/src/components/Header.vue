<template>
    <div class="container-fluid">
        <!-- // ? Domanda: quando ho bisogno che l'informazione venga inviata? -->
        <!-- // ? quando premo invio -->
        <!-- // § Invio un'informazione al parent attraverso la funzione di emit -->
        <!-- // § funzione emit era: $emit('nomeDellEventoOsservatoDalParent', varibili da passare con la emit) -->
        <input type="text" v-model.trim="stringToSearch" @keyup.enter="$emit('newSearch', stringToSearch)">
    </div>
</template>

<script>
export default {
    name: 'MainHeader',
    data: function(){
        return{
            stringToSearch: ''
        }
    }
}
</script>

<style>

</style>