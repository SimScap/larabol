const app = new Vue(
    {
        el: '#app',
        data: {
            posts : [],
            navLinks : [],
        },
        created(){
            // CHIAMATA AXIOS;
            axios.get('http://localhost:80/php-simple-blog/server/controller.php').then(
                (result) => {
                    this.posts = result.data.results.reverse();
                    console.log(result);
                }).catch((error) => {
                    console.warn(error);
                });

            axios.get('http://localhost:80/php-simple-blog/server/headerController.php').then(
                (result) => {
                    this.navLinks = result.data.results;
                    console.log(result);
                }).catch((error) => {
                    console.warn(error);
                });

        }
    }
)