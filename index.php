<?php 
    $dataImg = [
        ["nameImg" => "https://source.unsplash.com/400x400?batman", "title" => "Batman Forever", "body" => "Batman/Wayne is/are the love focus of Dr. Chase Meridan."],
        ["nameImg" => "https://source.unsplash.com/400x400?The Meg", "title" => "The Meg", "body" => "A military vessel that is searching for an. "],
        ["nameImg" => "https://source.unsplash.com/400x400?superman", "title" => "The Superman", "body" => "An alien orphan is sent from his dying planet to Earth,"],
        ["nameImg" => "https://source.unsplash.com/400x400?marvel", "title" => "The Marvel", "body" => "All Marvel Movies In Order Of Release Dates"],
        ["nameImg" => "https://source.unsplash.com/400x400?superman", "title" => "The Superman", "body" => "An alien orphan is sent from his dying planet to Earth,"],
        ["nameImg" => "https://source.unsplash.com/400x400?marvel", "title" => "The Marvel", "body" => "All Marvel Movies In Order Of Release Dates"]
    ];

    $dataSvg = [
        ["nameSvg" => "icon/meta.svg"],
        ["nameSvg" => "icon/instagram.svg"],
        ["nameSvg" => "icon/twitter.svg"],
        ["nameSvg" => "icon/github.svg"]
    ];


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>

    <?php 
        include "components/navbar.php";
    ?>



    <div class="jumbotron jumbotron-fluid template">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6">
                    <div class="text-white p-2 p-sm-0">
                        <h1 class="font-weight-bolder">Welcome to my Movies </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam, quisquam obcaecati ad
                            necessitatibus fuga omnis reiciendis explicabo, id amet commodi est in debitis consectetur
                            facilis cumque beatae suscipit nesciunt.</p>

                        <button type="button" class="btn btn-light font-weight-bolder">About Me</button>
                    </div>
                </div>

                <div class="col-0 col-sm-4 col-md-6">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img src="https://source.unsplash.com/300x300?logo"
                            class="rounded-circle w-50 d-none d-md-block">
                    </div>
                </div>
            </div>

        </div>
    </div>


    <section>
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach($dataImg as $data): ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
                    <div class="w-100 card shadow rounded" style="width: 18rem;">
                        <img src=<?php echo $data['nameImg'] ?> class="w-100 rounded-top">
                        <div class="card-body bg-dark text-white rounded-bottom">
                            <h4 class="font-weight-bolder card-title"><?php echo $data["title"] ?></h4>
                            <p class="card-text"><?php echo $data["body"] ?></p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>


    <section class="mt-5 jumbotron">
        <div class="container">
            <h2 class="text-center my-4 my-md-5 font-weight-bold">Support Me</h2>
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


    <footer class="bg-dark w-100 h-100">
        <div class="container text-white">
            <article class="d-flex justify-content-center align-items-center ">
                <h4 class="p-4 font-weight-bold">Copyright by mr.fal-2022</h4>
            </article>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


</body>

</html>