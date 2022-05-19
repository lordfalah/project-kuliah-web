<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Kegiatan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
        <a class="navbar-brand text-white" href="#">Movies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex-md justify-content-end" id="navbarSupportedContent">

            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="tentangKami.php">Tentang Kami <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>

            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="organisasi.php">Organisasi <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>

            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="kegiatan.php">Kegiatan <span
                            class="sr-only">(current)</span></a>
                </li>

            </ul>
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="hubungiKami.php">Hubungi Kami <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>

            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="../account/login/">Login <span
                            class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>


    <?php 
        // cardsss
        include "../components/cards.php";
    ?>

    <footer class="bg-dark w-100 h-100">
        <div class="container text-white">
            <article class="d-flex justify-content-center align-items-center ">
                <h4 class="p-4 font-weight-bold">Copyright by mr.fal-2022</h4>
            </article>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>