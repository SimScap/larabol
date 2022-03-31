<template>
    <header class="component-element">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid px-3">
                <a class="navbar-brand" href="#">
                Vue Cast-Away
                </a>
            </div>
        </nav>
        <div class="component-description">
            header.vue
        </div>
    </header>
</template>

<script>
export default {
    name: 'MainHeader'
}
</script>

<style lang="scss" scoped>
    .component-element{
        border: 3px solid red;
        .component-description{
            background-color: red;
        }
    }
</style>