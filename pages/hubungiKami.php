<?php 
    $dataSvg = [
        ["nameSvg" => "../icon/meta.svg"],
        ["nameSvg" => "../icon/instagram.svg"],
        ["nameSvg" => "../icon/twitter.svg"],
        ["nameSvg" => "../icon/github.svg"]
    ];

?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
    <title>Hubungi Kami</title>
</head>

<body class="h-100" style="background-color: #e9ecef;">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
        <a href="#" class="bg-light p-2 rounded-circle">
            <img src="../icon/logo.svg" alt="logo" width="30px">
        </a>

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


    <section class="jumbotron contact-form mh-100 position-relative">
        <div class="container">
            <h2 class="text-center my-4 my-md-5 font-weight-bold">Contact Us</h2>
            <div class="row">

                <div class="col-12 col-md-6 d-none d-md-block">
                    <article class="p-2">
                        <h5 class="font-weight-bold">Email address</h5>
                    </article>

                    <article class="mt-4 p-2">
                        <h5 class="font-weight-bold">No Contact</h5>
                    </article>

                    <article class="mt-4 p-2">
                        <h5 class="font-weight-bold">Message</h5>
                    </article>

                    <div class="about-me mt-2 px-2">
                        <h5 class="font-weight-bold mb-2">Follow Me</h5>
                        <div class=" icon d-flex flex-wrap">
                            <?php foreach($dataSvg as $icon): ?>
                            <img class="mr-4" src="<?php echo $icon['nameSvg'] ?>" style="width: 35px; height: 35px;"
                                role="button">
                            <?php endforeach?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <form>

                        <div class="form-group">
                            <h5 class="font-weight-bold d-block d-md-none ">Email address</h5>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="@gmail.com">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <h5 class="font-weight-bold d-block d-md-none">No Contact</h5>
                            <input type="contact" class="form-control" id="exampleInputPassword1" placeholder="62+">
                        </div>
                        <div class="">
                            <h5 class="font-weight-bold d-block d-md-none">Message</h5>
                            <textarea class="w-100" rows="4" placeholder="blablabla..."></textarea>
                        </div>

                        <div class="accordion d-block d-md-none my-3" id="accordionExample">
                            <div class="card">
                                <div class="bg-info" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <h5 class="font-weight-bold mb-2 text-white" role="button">Follow Me</h5>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class=" icon d-flex flex-wrap justify-content-between">


                                            <?php foreach($dataSvg as $icon): ?>
                                            <img src="<?php echo $icon['nameSvg'] ?>" style="width: 35px; height: 35px;"
                                                role="button">
                                            <?php endforeach?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark w-100 position-absolute fixed-bottom">
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