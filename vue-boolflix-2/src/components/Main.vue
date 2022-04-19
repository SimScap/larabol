<template>
    <div class="container-fluid">
        <div class="row text-center justify-content-center row-cols-4">
            <Card
            v-for="(element, index) in movies"
            :key="index+'movie'+element.id"
            :element="element" />
        </div>
    </div>
</template>

<script>
import Card from './Card.vue';

export default {
    name: 'MainHeader',
    props : ['movies'],
    components : {
        Card
    }
}
</script>

<style>

</style>