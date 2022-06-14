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

    }elseif(isset($_GET["mahasiswa"])){
        if($_GET["id_update"]){
            $resultData = getDataId($_GET["id_update"], "user_mahasiswa");
        }


        if(isset($_POST["submit"])){


             if(isset($_POST["nameMahasiswa"]) && isset($_POST["tempat"]) && isset($_POST["nim_mahasiswa"]) 
             && isset($_POST["email"]) && isset($_POST["date"]) && isset($_POST["gender"]) && isset($_POST["telepon"]) && isset($_POST["alamat"])){
                 $resultDataUpdate = updateDataAdmin($_GET["id_update"], $_POST, "user_mahasiswa");
                
                 if($resultDataUpdate > 0){
                     echo "
                         <script>
                             alert('Success Data Update');
                             window.location.assign('dashboard.php?dashboard=data_mahasiswa');
                         </script>
                     ";
                
                 }else{
                     echo "
                         <script>
                             alert('Failed Data Update');
                             window.location.assign('dashboard.php?dashboard=data_mahasiswa');
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
    <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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

                    <?php if(isset($_GET["mahasiswa"])) :?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nameMahasiswa">Nama Mahasiswa</label>
                            <input required type="text" name="nameMahasiswa"
                                value="<?php echo $resultData['nama_mahasiswa']; ?>" class="form-control"
                                id="nameMahasiswa" aria-describedby="nameMahasiswa">
                            <small id="nameMahasiswa" class="form-text text-muted">We'll never share your kegiatan with
                                anyone
                                else.</small>
                        </div>

                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input required type="text" name="tempat" class="form-control"
                                value="<?php echo $resultData['tempat'] ?>" id="tempat">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input required type="text" name="alamat" class="form-control"
                                value="<?php echo $resultData['alamat']; ?>" id="alamat">
                        </div>

                        <div class="form-group">
                            <label for="nim_mahasiswa">NIM Mahasiswa</label>
                            <input required type="number" name="nim_mahasiswa" class="form-control" id="nim_mahasiswa"
                                value="<?php echo $resultData['nim_mahasiswa']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">email</label>
                            <input required type="email" name="email" class="form-control" id="email"
                                value="<?php echo $resultData['email']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input required type="date" id="date" name="date" class="form-control"
                                value="<?php echo $resultData['tanggal_lahir']; ?>">
                        </div>


                        <div class="form-group">
                            <p>Select Gender</p>
                            <div class="d-flex gap-4">
                                <div>
                                    <label for="gender_pria">Pria</label>
                                    <input required type="radio" id="gender_pria" value="pria" name="gender">
                                </div>

                                <div>
                                    <label for="gender_wanita">Wanita</label>
                                    <input required type="radio" id="gender_wanita" value="wanita" name="gender">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input required type="number" id="telepon" name="telepon" class="form-control"
                                value="<?php echo $resultData['telepon']; ?>">
                        </div>

                        <div class=" form-group">
                            <label for="image">Select image to upload:</label>
                            <input required type="file" name="fileToUpload" class="form-control" id="fileToUpload">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    <?php endif?>


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
            const nameUrl = window.location.href.split("&").slice(-1)[0].split("=");
            if (nameUrl.includes("kegiatan")) {
                window.location.assign(
                    `dashboard.php?dashboard=data_kegiatan`
                );

            } else if (nameUrl.includes("user")) {
                window.location.assign(
                    `dashboard.php?dashboard=data_user`
                );

            } else {
                window.location.assign(
                    `dashboard.php?dashboard=data_mahasiswa`
                );
            }
        })
    })

    document.addEventListener("click", function(e) {
        if (e.target.getAttribute("id") === "myModal") {
            const nameUrl = window.location.href.split("&").slice(-1)[0].split("=");
            if (nameUrl.includes("kegiatan")) {
                window.location.assign(
                    `dashboard.php?dashboard=data_kegiatan`
                );

            } else if (nameUrl.includes("user")) {
                window.location.assign(
                    `dashboard.php?dashboard=data_user`
                );

            } else {
                window.location.assign(
                    `dashboard.php?dashboard=data_mahasiswa`
                );
            }

        }
    })
    </script>
</body>

</html>