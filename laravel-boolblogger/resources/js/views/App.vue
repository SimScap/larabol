
<template>
    <div class="container-fluid">
        <PostList/>
    </div>
</template>

<script>
// import axios from 'axios';
import PostList from '../components/PostList.vue';
export default {
    name: "App",
    components: {
        PostList
    }
}
</script>

<style scoped>
</style>