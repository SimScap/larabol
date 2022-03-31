<template>
    <div class="component-element">
        <div class="card">
            <img v-show="!hasCalledForHelp" :src="imgUrl" class="card-img-top" :alt="imgAlt">
            <img v-show="hasCalledForHelp" src="https://i.giphy.com/media/SXCr0czRagXorpiewG/giphy.webp" class="card-img-top" alt="Castaway picture">

            <div class="card-body">
                <h5 class="card-title">{{ cardTitle }}</h5>
                <p class="card-text">{{ cardDescription }}</p>
                <input type="text" placeholder="Messaggio di aiuto" v-model="helpMessage">
                <a href="#" class="btn btn-primary"
                @click="callForHelp">
                {{ buttonDescription }}
                </a>
            </div>
        </div>
        <div class="component-description">
            CastAway.vue
        </div>
    </div>
</template>

<script>
export default {
    name: 'CastAway',
    props: ['imgUrl', 'imgAlt', 'cardTitle', 'cardDescription', 'buttonDescription'],
    data: function(){
        return {
            hasCalledForHelp: false,
            helpMessage : '',
        }
    },
    methods: {
        callForHelp(){
            console.warn('AIUTO!');
            this.hasCalledForHelp = true;

            // ! Warning: quando chiamiamo l'emit fuori dal template dobbia sempre usare la direttiva this
            this.$emit('callForHelp', this.helpMessage);
        }
    }
}
</script>


<style lang="scss" scoped>
    div.component-element{
        border: 3px solid lime;
        div.component-description{
            background-color: lime;
        }
    }
</style>