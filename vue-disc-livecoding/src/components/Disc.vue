<template>
    <div>
        <div class="disc-element p-3 text-center">
            <img class="img-fluid mb-2" :src="discElement.poster" :alt="discElement.title">
            <h4 class="title text-uppercase fw-bold">
                {{ discElement.title }}
            </h4>
            <p class="author mb-0 fs-5"> {{ discElement.author }}</p>
            <p class="year mb-0 fs-5"> {{ discElement.year }}</p>
            <p> {{ discElement.genre }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'DiscCard',
    props: ['discElement']
}
</script>

<style lang="scss">
    div.disc-element{
        background-color: #2e3a46;
        // height: 100%;

        div.author,
        div.year{
            color: #504a4d;
        }

    }

</style>