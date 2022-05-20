<?php 

    $linkBool = true;
    
    if(in_array("pages", explode("/",$_SERVER["PHP_SELF"]))){
        $linkBool = true;
    

    }else{
        $linkBool = false;
    }


?>

<nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
    <a class="navbar-brand text-white" href="#">Movies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-flex-md justify-content-end" id="navbarSupportedContent">

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-white" href="<?php 
                    if($linkBool){
                        echo "../index.php";
                    
                    }else{
                        echo "index.php";
                    }
                ?>">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <ul class="navbar-nav  ">
            <li class="nav-item active">
                <a class="nav-link text-white" href="<?php 
                    if($linkBool){
                        echo "tentangKami.php";
                    }else{
                        echo "pages/tentangKami.php";
                    }
                ?>">Tentang Kami <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <ul class="navbar-nav  ">
            <li class="nav-item active">
                <a class="nav-link text-white" href="<?php 
                if($linkBool){
                    echo "organisasi.php";
                }else{
                    echo "pages/organisasi.php";
                }
                
                ?>">Organisasi
                    <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <ul class="navbar-nav  ">
            <li class="nav-item active">
                <a class="nav-link text-white" href="<?php 
                    if($linkBool){
                        echo "kegiatan.php";
                    }else{
                        echo "pages/kegiatan.php";
                    }
                ?>">Kegiatan <span class="sr-only">(current)</span></a>
            </li>

        </ul>
        <ul class="navbar-nav  ">
            <li class="nav-item active">
                <a class="nav-link text-white" href="<?php 
                    if($linkBool){
                        echo "hubungiKami.php";
                    }else{
                        echo "pages/hubungiKami.php";
                    }
                ?>">Hubungi Kami <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <ul class="navbar-nav  ">
            <li class="nav-item active">
                <a class="nav-link text-white" href="<?php 
                    if($linkBool){
                        echo "../account/login/";
                    }else{
                        echo "account/login/";
                    }
                ?>">Login <span class="sr-only">(current)</span></a>
            </li>

        </ul>
    </div>
</nav>