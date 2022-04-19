<template>
    <div class="col">
        <div class="card">
            <img v-if="element.poster_path" :src="`https://image.tmdb.org/t/p/w342${element.poster_path}`" :alt="getTitle">
            <img v-else src="https://dummyimage.com/312x468/878787/fff.png&text=Poster+not+available" :alt="getTitle">
            <div class="card-body">
                <country-flag :country='getLanguage()'/>
                <h5 class="card-title">{{ getTitle}}</h5>
                <p class="card-text">{{ element.original_language }}</p>
                <p class="card-text">{{ element.vote_average }}</p>
                <div>
                    <span v-for="number in getVote" :key="number+'star'" class="fa fa-star"></span>
                    <span v-for="number in 5-getVote" :key="number+'empty-star'" class="far fa-star"></span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ElementCard",
    props: ['element'],
    data: function(){
        return{

        }
    },
    methods: {
        getLanguage(){
            switch (this.element.original_language){
                case 'en':
                    return 'gb';
                case 'ja':
                    return 'jp';
                case 'zh':
                    return 'cn';
                default:
                    return this.element.original_language;
            }
        },
    },
    computed: {
        getTitle(){
            if (this.element.title) {
                return this.element.title;
            } return this.element.name;
        },
        getVote(){
            return Math.round(this.element.vote_average / 2);
        }
    }
}
</script>

<style lang="scss" scoped>
    .poster{
        height: 200px;
    }
</style>