<template>
    <div class="col-4">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                <img :src="'../assets/img/' + pokemon.name + '.png'" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{pokemon.name}}
                    </h5>
                    <p class="card-text">
                        {{pokemon.name}}
                    </p>
                    <p class="card-text">
                        <small class="text-muted">
                            {{pokemon.additional_type}}
                        </small>
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: 'Pokemon',
    props: ['pokemon']
}
</script>

<style>

</style>