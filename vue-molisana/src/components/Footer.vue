<template>
    <div>
        <div class="centralize">
            <a href="#">
                <img src="../assets/images/la-molisana-logo.png" alt="">
            </a>

            <div>
                <h4>Pastificio</h4>
                <nav>
                    <ul>
                        <li v-for="(link, index) in footerMenuProductionLinks" :key="index">
                            <a :href="link.url"> {{link.text}} </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div>
                <h4>Prodotti</h4>
                <nav>
                    <ul>
                        <li v-for="(link, index) in footerMenuProductLinks" :key="index">
                            <a :href="link.url"> {{link.text}} </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="footer-last">
            <img src="../assets/images/footer-montagne-bottom.jpg" alt="Mountains image">
        </div>
    </div>

</template>

<script>
export default {
    name: 'IndexFooter',
    data: function(){
        return{
            footerMenuProductLinks: [
                        {
                            text: "Le classiche",
                            url: "#",
                        },
                        {
                            text: "Le Integrali",
                            url: "#",
                        },
                        {
                            text: "Le Speciali",
                            url: "#",
                        },
                        {
                            text: "Le Biologiche",
                            url: "#",
                        },
                        {
                            text: "Le Gluten-free",
                            url: "#",
                        }

            ],
            footerMenuProductionLinks: [
                        {
                            text: "Il Pastificio",
                            url: "#",
                        },
                        {
                            text: "Grano",
                            url: "#",
                        },
                        {
                            text: "Filiera",
                            url: "#",
                        },
                        {
                            text: "100 anni di pasta",
                            url: "#",
                        },
                        {
                            text: "Sartoria della pasta",
                            url: "#",
                        }
            ],
        }
    }
}
</script>

<style lang="scss" scoped>
    @import "../assets/scss/partials/_variables.scss";

    div.centralize{
        justify-content: space-evenly;
        margin-bottom: 4rem;

        h4{
            text-transform: uppercase;
            color: $brandColor;
            margin-bottom: .5rem;
        }

        ul{
            li{
                list-style-type: none;
                padding: .05rem;
                font-size: .8rem;

                a{
                    font-weight: 400;
                    text-decoration: none;
                    color: black;
                }

                &:active,
                &.active{
                    background-color: $hoverBgColor;
                }
            }
        }
    }

</style>