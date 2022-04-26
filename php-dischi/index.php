<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>

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
        <header class="d-flex align-items-center justify-content-between">
            <div class="logo-brand p-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="spotify logo">
            </div>

            <div class="header-select pe-5">
                <span>Select genre: </span>
                <select @change="filterDiscsByGenre" v-model="selectedGenre">
                    <option value="all">All</option>
                    <option :value="genre.toLowerCase()" v-for="genre in genres">
                        {{ genre }}
                    </option>
                </select>
            </div>
        </header>

        <main  class="container px-5 mt-4">
            <div class="row flex-wrap row-cols-5 gx-5">
                <div class="col mb-3 disc-element" v-for="discElement in filteredDiscs">
                    <div class="disc-element p-3 text-center">
                        <img class="img-fluid mb-2" :src="discElement.poster" :alt="discElement.title">
                        <h4 class="title text-uppercase fw-bold">
                            {{ discElement.title }}
                        </h4>
                        <p class="author mb-0 fs-5">
                            {{ discElement.author }}
                        </p>
                        <p class="year mb-0 fs-5">
                            {{ discElement.year }}
                        </p>
                        <p>
                            {{ discElement.genre }}
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>