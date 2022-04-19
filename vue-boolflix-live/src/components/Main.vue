<template>
    <div class="container-fluid">
        <div class="row text-center justify-content-center">
            <ul class="card">
                <li v-for="(movie, index) in movies" :key="index+'movie'+movie.id">
                    <h2>
                        <h2>{{movie.title}} {{movie.name}}</h2>
                        <p>{{movie.original_title}}</p>
                        <p>{{movie.original_language}}</p>
                        <p>{{movie.vote_average}}</p>
                    </h2>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'MainHeader',
    props : ['movies']
}
</script>

<style>

</style>