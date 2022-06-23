<?php
  session_start();


 
  if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    ?>
<script language="javascript">
alert('Login dulu')
document.location = '../account/login/index.php';
</script>
<?php
  } else {
      
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard - Movie.com</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <!-- Icon Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="trix.css">
    <script type="text/javascript" src="trix.js"></script>

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <link href="dashboard.css?<?php echo time(); ?>" rel="stylesheet">
</head>

<body>
    <?php 

        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $page = end($link_array);

        if($page == "dashboard.php" && !isset($_GET["dashboard"])){
            include "header.php";
            
        }else if(!in_array("laporan", explode("/", $_GET["dashboard"]))){
            include "header.php";
        }

        
    ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "navbar.php";?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php
            if(isset($_GET['dashboard'])){
              include $_GET['dashboard'].".php";
              
            }
              else{
                include "none.php";
              }
          ?>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
<?php
  }
?>