<template>
    <div class="pasta-element">
        <img :src="pastaObject.src" :alt="pastaObject.titolo">
        <h4>{{ pastaObject.titolo }}</h4>
    </div>
</template>

<script>
export default {
    name: 'ProductCard',
    data: function(){
        return{
            listItem : [1,2,3,4,5]
        }
    },
    // props: ['pastaObject'],
    props: {'pastaObject' : Object},
    methods: {
        // sendAlert(message){
        //     alert(message + ' minuti');
        // }
    },
    mounted(){
        // console.warn(this.pastaObject);
    }
}
</script>

<style lang="scss" scoped>


    .pasta-element{
        width: calc(25% - (.8rem));
        margin: .1rem;
        background-color: white;
        padding: 1rem;
        text-align: center;

        img{
            width: 100%;
        }
    }
</style>