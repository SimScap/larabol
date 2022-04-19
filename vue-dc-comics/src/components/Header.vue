<template>
    <header>
        <div class="my-container">
            <div class="header-logo">
                <img src="../assets/img/dc-logo.png" alt="DC Comics main logo">
            </div>

            <nav class="header-nav">
                <ul>
                    <li v-for="(element, index) in navList"
                    :key=index :class="{'active' : element.active}">
                        <a :href="element.url">
                            {{ element.text }}
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name : "IndexHeader",
    data: function() {
        return {
            navList: [
                {
                    text: "characters",
                    url : "#",
                    active: false
                },
                {
                    text: "comics",
                    url : "#",
                    active: true
                },
                {
                    text: "movies",
                    url : "#",
                    active: false
                },
                {
                    text: "tv",
                    url : "#",
                    active: false
                },
                {
                    text: "games",
                    url : "#",
                    active: false
                },
                {
                    text: "collectibles",
                    url : "#",
                    active: false
                },
                {
                    text: "videos",
                    url : "#",
                    active: false
                },
                {
                    text: "fans",
                    url : "#",
                    active: false
                },
                {
                    text: "news",
                    url : "#",
                    active: false
                },
                {
                    text: "shop",
                    url : "#",
                    active: false
                },
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '../assets/scss/partials/_variables.scss';

    header{
        margin: 2rem 0;
        height: 13vh;
        // background-color: aquamarine;
    }

    div.my-container{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;


        img{
            height: 70%;
            padding: 1rem;
        }

        ul{
            display: flex;

            li{
                list-style-type: none;
                padding: 0 .6rem;
                line-height: 12vh;

                a{
                    font-size: .7rem;
                    text-decoration: none;
                    text-transform: uppercase;
                    font-weight: 600;
                    color: black;
                }

                &:active,
                &.active{
                    border-bottom: $primaryColor 5px solid;
                }
            }
        }
    }

    nav.header-nav,
    ul {
        height: 100%;
    }
</style>