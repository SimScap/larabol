<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Simple Blog</title>

    <!-- Montserrat google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

    <!-- Font-Awesome cdn v6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Bootstrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style/style.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

</head>
<body>
    <div id="app">
        <?php  include_once __DIR__ . '/partials/header.php'; ?>

        <main  class="posts-container">
            <div class="container-fluid">
                <div class="card mb-3 p-4" v-for="post in posts">
                    <img :src="post.post_thumbnail"
                    class="card-img-top":alt="post.title">

                    <div class="card-body">
                        <h5 class="card-title">
                            {{ post.title }}
                        </h5>
                        <p class="card-text">
                            {{ post.post_content }}
                        </p>
                        <p class="card-text">
                            <small class="text-muted">{{ post.author }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </main>

        <?php  include_once __DIR__ . '/partials/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>