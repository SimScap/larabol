<template>
    <div id="index-header">
        <img src="../assets/images/la-molisana-logo.png" alt="La Molisana main logo">
        <nav>
            <ul>
                <li v-for="(link, index) in headerLinks" :key="index" @click="setActivePage(index)" :class="
{ active: link.current}" >
                    <a :href="link.url">
                        {{ link.text }}
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</template>

<script>
export default {
    name: 'IndexHeader',
    data: function() {
        return {
            headerLinks:[
                {
                    text: "Home",
                    url: "#",
                    current: false,
                },
                {
                    text: "Prodotti",
                    url: "#",
                    current: true,
                },
                {
                    text: "Chi Siamo",
                    url: "#",
                    current: false,
                },
                {
                    text: "Contatti",
                    url: "#",
                    current: false,
                },
            ],
        }
    },
    methods:{
        setActivePage(baseIndex){
            this.headerLinks.forEach((element, index) => {
                if (baseIndex === index ){
                    element.current = true;
                } else {
                    element.current = false;
                }
            });
        }
    }
}
</script>

<style lang="scss" scoped>
    @import "../assets/scss/partials/_variables.scss";

    div#index-header{
        text-align: center;

        img{
            margin-bottom: 1.6rem;
        }
    }

    ul{
        display: flex;
        justify-content: center;
        // width: 70%;
        margin: 0 auto;


        li{
            list-style-type: none;
            padding: 1rem;

            a{
                font-weight: 600;
                text-decoration: none;
                color: black;
            }

            &:active,
            &.active{
                background-color: $hoverBgColor;
            }
        }
    }
</style>