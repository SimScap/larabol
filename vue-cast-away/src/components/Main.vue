<template>
    <main class="component-element">
        <div class="container-fluid px-3">

            <div class="row text-center justify-content-center">
                <div class="col-12">
                    <div class="plane-container text-white fs-2">
                        <pre>@callForHelp="sendCallForHelp"</pre>
                        <p>IO SONO IL MAIN e sono in ascolto sul "canale" @callForHelp</p>
                    </div>
                </div>
            </div>

            <div class="row text-center justify-content-center">
                <div class="col-6">

                    <RescueHeli
                    coordinates="col-12 qui sotto"
                    :isHelpNeeded="isHelpNeeded"
                    :castAwayMessage="helpMessage"
                    />

                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-6">

                    <CastAway
                        imgUrl="https://movieplayer.net-cdn.it/t/images/2020/03/03/cast_away_jpg_375x0_crop_q85.jpg"
                        imgAlt="Castaway picture"
                        cardTitle="Cast away"
                        cardDescription="Naufrago in un'isola deserta"
                        buttonDescription="Chiedi aiuto"
                        @callForHelp="sendCallForHelp"
                        />

                        <!-- // § ^ quando ricevo una chiamata a questo indirizzo @callForHelp, chiamo la funzione sendCallForHelp -->
                    <!-- <div class="card">
                        <img src="https://movieplayer.net-cdn.it/t/images/2020/03/03/cast_away_jpg_375x0_crop_q85.jpg" class="card-img-top" alt="Castaway picture">
                        <div class="card-body">
                            <h5 class="card-title">Cast Away</h5>
                            <p class="card-text">Naufrago in un'isola deserta</p>
                            <a href="#" class="btn btn-primary">Chiedi aiuto</a>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-12">
                    <h4>Live camera:</h4>
                    <input type="text" v-model="message">
                    <pre>{{ message }}</pre>
                </div>
            </div> -->
        </div>
        <div class="component-description">
            Main.vue
        </div>
    </main>
</template>

<script>
import CastAway from "./CastAway.vue";
import RescueHeli from "./RescueHeli.vue";

export default {
    name: 'MainContent',
    components: {
        CastAway,
        RescueHeli
    },
    data: function(){
        return{
            message : '',
            helpMessage : '',
            isHelpNeeded: false,
        }
    },
    methods: {
        sendCallForHelp(helpMessage){
            this.isHelpNeeded = true;
            this.helpMessage = helpMessage;
            console.log('CastAway ha richiesto aiuto, coordinate col-12, inviare rescue team, con messaggio di aiuto: ' + helpMessage);
        }
    }
}
</script>

<style lang="scss" scoped>
    .component-element{
        border: 3px solid blue;
        .component-description{
            background-color: blue;
        }

        div.plane-container{
            background: url('https://i.giphy.com/media/CBk7SJxNUwwmc/giphy.webp');
            height: 180px;

        }
    }
</style>
