<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP include</title>
    <link rel="stylesheet" href="style/style.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

</head>
<body>
    <?php  include_once __DIR__ . '/partials/header.php'; ?>

    <main id="app">
        <div class="posts-container">
            <div class="post" v-for="post in posts">
                <h1>{{ post.title }}</h1>
                <img :src="post.post_thumbnail" :alt="post.title"></img>
                <h3>{{ post.author }}</h3>
                <p>{{ post.post_content }}</p>
            </div>


        </div>
    </main>

    <?php  include_once __DIR__ . '/partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

<?php
            /**
             * foreach($posts as $post){ ?>
                <h1><?= $post['title']; ?></h1>
                <img src="<?= $post['post_thumbnail']; ?>" alt="<?= $post['title']; ?>"></img>
                <h3><?php echo $post['author']; ?></h3>
                <p><?= $post['post_content']; ?></p>
                <?php } ?>
             *
             **/
            ?>