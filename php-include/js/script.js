const app = new Vue(
    {
        el: '#app',
        data: {
            posts : []
        },
        created(){
            // CHIAMATA AXIOS;
            axios.get('http://localhost:80/php-include/server/controller.php').then(
                (result) => {
                    this.posts = result.data.results.reverse();
                    console.log(result);
                }).catch((error) => {
                    console.warn(error);
                });
        }
    }
)