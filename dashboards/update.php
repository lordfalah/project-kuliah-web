<?php 
    include "../account/login/config.php";




    if(isset($_GET["user"])){
        if($_GET["id_update"]){
            $resultData = getDataId($_GET["id_update"], "user_login");
        }

        if(isset($_POST["submit"])){
            if(isset($_POST["updateEmail"]) || isset($_POST["updatePassword"])){
                $resultDataUpdate = updateDataAdmin($_GET["id_update"], $_POST, "user_login");
                
             
                if($resultDataUpdate > 0){
                    echo "
                        <script>
                            alert('Success Data Update');
                            window.location.assign('dashboard.php?dashboard=data_user');
                        </script>
                    ";
                
                }else{
                    echo "
                        <script>
                            alert('Failed Data Update');
                            window.location.assign('dashboard.php?dashboard=data_user');
                        </script>
                    ";
                }
    
            }else{
                echo "
                <script>
                    alert('Data Harus Lengkap');
                </script>
            ";
            }
        }

    }else{
        if($_GET["kegiatan"]){
            $resultData = getDataId($_GET["kegiatan"], "user_kegiatan");
            
        }
        
        if(isset($_POST["submit"])){
            if(isset($_POST["namaKegiatanUpdate"]) && isset($_POST["deskripsiUpdate"])){
                $resultDataUpdate = updateDataAdmin($_GET["id_update"], $_POST, "user_kegiatan");
                
             
                if($resultDataUpdate > 0){
                    echo "
                        <script>
                            alert('Success Data Update');
                            window.location.assign('dashboard.php?dashboard=data_kegiatan');
                        </script>
                    ";
                
                }else{
                    echo "
                        <script>
                            alert('Failed Data Update');
                            window.location.assign('dashboard.php?dashboard=data_kegiatan');
                        </script>
                    ";
                }
    
            }else{
                echo "
                <script>
                    alert('Data Harus Lengkap');
                    window.location.assign('dashboard.php?dashboard=data_kegiatan');
                </script>
            ";
            }
        }
    }



    

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Form Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#myModal").modal('show');
    });
    </script>
</head>



<body>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Data</h5>
                    <button type="button" class="exit" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php if(isset($_GET["user"])) :?>
                    <form method="POST">
                        <div class="form-group">
                            <input required name="updateEmail" type="email" class="form-control"
                                placeholder="Email Address" disabled value=<?php echo $resultData["email"] ?>>
                        </div>
                        <div class="form-group">
                            <input required name="updatePassword" type="password" class="form-control"
                                placeholder="password">
                        </div>

                        <div class="">
                            <button name="submit" type="submit" class="btn btn-primary ">
                                Save Change
                            </button>

                            <button name="submit" type="submit" class="btn btn-primary exit">
                                Cancel
                            </button>
                        </div>
                    </form>

                    <?php endif;?>

                    <?php if(isset($_GET["kegiatan"])) :?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="namaKegiatanUpdate">Nama Kegiatan</label>
                            <input required type="text" name="namaKegiatanUpdate" class="form-control"
                                id="namaKegiatanUpdate" aria-describedby="emailHelp"
                                placeholder="<?php echo $resultData['nama_kegiatan']; ?>">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsiUpdate">Deskripsi</label>
                            <input required type="text" name="deskripsiUpdate" class="form-control" id="deskripsiUpdate"
                                aria-describedby="emailHelp" placeholder="<?php echo $resultData['deskripsi']; ?>">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>

                        <div class="form-group">
                            <label for="fileToUpload">Select image to Update:</label>
                            <input required type="file" name="fileToUpload" class="form-control" id="fileToUpload">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button name="submit" type="submit" class="btn btn-primary ">
                                Update
                            </button>

                            <button name="submit" type="submit" class="btn btn-primary exit">
                                Cancel
                            </button>
                        </div>
                    </form>
                    <?php endif?>
                </div>
            </div>
        </div>
    </div>

    <script>
    const getExit = document.querySelectorAll(".exit");
    const getBody = document.querySelector("body");

    getExit.forEach(close => {
        close.addEventListener("click", () => {
            window.location.assign('dashboard.php?dashboard=data_user');
        })
    })

    document.addEventListener("click", function(e) {
        if (e.target.getAttribute("id") === "myModal") {
            window.location.assign('dashboard.php?dashboard=data_user');
        }
    })
    </script>
</body>

</html>