<template>
    <nav id="main-nav">
        <div class="my-container">
            <ul>
                <li v-for="(element, index) in listItem" :key=index>
                    <a href="#">
                        <img :src="require(`@/assets/img/${element.img}`)" alt="">
                        <h4> {{element.name }}</h4>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'MainNav',
    data: function() {
        return{
                listItem:
                [
                    {
                        name:"digital Comics",
                        img: 'buy-comics-digital-comics.png',
                        url:"#"
                    },
                    {
                        name:"dc Merchiandise",
                        img: "buy-comics-merchandise.png",
                        url:"#"
                    },
                    {
                        name:"subscription",
                        img:"buy-comics-subscriptions.png",
                        url:"#"
                    },
                    {
                        name:"comic Shop Locator",
                        img:"buy-comics-shop-locator.png",
                        url:"#"
                    },
                    {
                        name:"dc power Visa",
                        img:"buy-dc-power-visa.svg",
                        url:"#"
                    }
            ]
        }
    },
    methods:
        {
            getImageUrl(imageFolder, imagePath){
                const finalPath = imageFolder + '/' + imagePath;
                return require(finalPath);
            }
        }
}
</script>

<style lang="scss" scoped>
@import '../assets/scss/partials/_variables.scss';

    nav#main-nav{
        background-color: $primaryColor;
        height: 16vh;

        div.my-container{
            display: flex;
            justify-content: center;
            height: 100%;
        }

        ul{
            display: flex;

            li{
                list-style-type: none;
                padding: 0 .6rem;
                line-height: 5.5vh;


                a{
                    display: flex;
                    font-size: .8rem;
                    align-items: center;
                    text-decoration: none;
                    text-transform: uppercase;
                    font-weight: 100;
                    color: white;
                    height: 100%;

                    img{
                        height: 40%;
                        margin-right: 1rem;
                    }
                }
            }
        }
    }


</style>