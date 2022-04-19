<template>
    <div id="main-content">
        <div class="my-container">
                <h2> ---> Content goes here </h2>
        </div>
    </div>
</template>

<script>
export default {
    name : 'MainContent',

}
</script>

<style lang="scss" scoped>
    @import '../assets/scss/partials/_variables.scss';

    div#main-content{
        height: 13vh;
        background-color: $darkGrayColor;
        line-height: 13vh;
        h2{
            color: white;
        }
    }

</style>