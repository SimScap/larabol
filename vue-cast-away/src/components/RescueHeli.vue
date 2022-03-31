<template>
    <div v-if="isHelpNeeded" class="component-element">
        <div class="card">
            <img src="https://i.giphy.com/media/xKSB7TTLav6g0/giphy.webp" class="card-img-top" alt="Very professional rescue helicoper">
            <div class="card-body">
                <h5 class="card-title">Rescue Heli</h5>
                <p class="card-text">Elicottero di salvataggio in arrivo</p>
                <pre class="text-danger">{{ castAwayMessage }}</pre>
                <!-- <a href="#" class="btn btn-primary" @click="callForHelp">Chiedi aiuto</a> -->
            </div>
        </div>
        <div class="component-description">
            RescueHeli.vue
        </div>
    </div>
</template>

<script>
export default {
    name: 'RescueHeli',
    props: {
        'isHelpNeeded' : Boolean,
        'coordinates' : String,
        'castAwayMessage' : String,
    }
}
</script>
<style lang="scss" scoped>
    div.component-element{
        border: 3px solid rgb(255, 0, 247);
        div.component-description{
            background-color: rgb(255, 0, 247);
        }
    }
</style>