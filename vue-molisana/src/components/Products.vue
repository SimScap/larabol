<template>
    <div class="centralize">
        <h2>Lista prodotti</h2>
        <div class="pasta-container">
            <ProductCard
                v-for="(element, index) in pastas"
                :key="index"
                :pastaObject="element"
            />
        </div>
    </div>
</template>

<script>
// ! COME COMUNICARE CON UN COMPONENT FIGLIO (anche se è adolescente)
// | Creo un nuovo component
// # Lo importo nello script, lo aggiungo nei components del component parent che lo usa, infine lo istanzio nel template con un self-closing html tag.
// § aggiungo tanti attributi "custom" quanti ne avrò bisogno nel singolo component figlio
// ? nel component figlio andrò a definire (utilizzando una delle annotazioni) i props in arrivo dal parent
// * uso i props in arrivo esattamente come se fossero variabili nel data

import ProductCard from './ProductCard.vue';

export default {
    name: 'IndexProducts',
    components: {
        ProductCard
    },
    data: function() {
        return {
            pastas :  [
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/04/1-spaghetto-quadrato.jpg",
                    titolo: "N.4 Spaghetto Quadrato Bucato",
                    tipo: "lunga",
                    cottura: 6,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/04/5-fettuccine.jpg",
                    titolo: "N.5 Fettuccine",
                    tipo: "lunga",
                    cottura: 13,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/04/6-linguine.jpg",
                    titolo: "N.6 Linguine",
                    tipo: "lunga",
                    cottura: 12,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/04/7-mezze-linguine.jpg",
                    titolo: "N.7 Mezze Linguine",
                    tipo: "lunga",
                    cottura: 11,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/04/11-spaghettino-quadrato.jpg",
                    titolo: "n.11 Spaghettino Quadrato",
                    tipo: "lunga",
                    cottura: 9,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/05/38-mezze-maniche.jpg",
                    titolo: "N.38 Mezze maniche",
                    tipo: "corta",
                    cottura: 12,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/05/44-sedani.jpg",
                    titolo: "N.44 Sedani",
                    tipo: "corta",
                    cottura: 8,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/05/49-sedani.jpg",
                    titolo: "N.49 Sedanini",
                    tipo: "corta",
                    cottura: 8,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/05/53-lumachine.jpg",
                    titolo: "N.53 Lumachine",
                    tipo: "corta",
                    cottura: 12,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/05/55-chifferi-rigati.jpg",
                    titolo: "N.55 Chifferi rigati",
                    tipo: "corta",
                    cottura: 12,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/05/58-misto-corto.jpg",
                    titolo: "N.58 Misto corto",
                    tipo: "corta",
                    cottura: 9,
                },
                {
                    src: "https://www.lamolisana.it/wp-content/uploads/2021/06/84-ditale-quadrato.jpg",
                    titolo: "N.84 Ditale Quadrato",
                    tipo: "cortissima",
                    cottura: 12,
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
    @import "../assets/scss/partials/_variables.scss";

    div.centralize{
        display: flex;
        flex-direction: column;
        color: $brandColor;
        padding: 4rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
        background-image: url('../assets/images/fondo-pag-speciali.jpg');

        h2{
            margin-bottom: 2rem;
        }
    }

    div.pasta-container{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 80%;
        margin: 0 auto;

    }

</style>