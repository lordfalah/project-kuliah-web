<?php 

    include "../account/login/config.php";

    if(isset($_GET["id_mhs"])){
        $resultDataMhs = getDataId($_GET["id_mhs"], "user_mahasiswa");
    }
    
    

?>


<div class="container">
    <h3 class="text-center my-3">Details Mahasiswa</h3>
    <div class="row align-items-center">
        <div class="col-4">
            <div>
                <img src='uploads/<?php echo $resultDataMhs["foto_mahasiswa"]; ?>'
                    alt=<?php echo $resultDataMhs["nama_mahasiswa"] ?> class="w-100" />
            </div>
        </div>
        <div class="col-8">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div>
                            <h6>Nama Mahasiswa</h6>
                            <p><?php echo $resultDataMhs["nama_mahasiswa"] ?></p>
                        </div>

                        <div>
                            <h6>Tempat Mahasiswa</h6>
                            <p><?php echo $resultDataMhs["tempat"] ?></p>
                        </div>

                        <div>
                            <h6>Jenis Kelamin</h6>
                            <p><?php echo $resultDataMhs["jenis_kelamin"] ?></p>
                        </div>

                        <div>
                            <h6>Email Mahasiswa</h6>
                            <p><?php echo $resultDataMhs["email"] ?></p>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <h6>Nim Mahasiswa</h6>
                            <p><?php echo $resultDataMhs["nim_mahasiswa"] ?></p>
                        </div>

                        <div>
                            <h6>Tanggal Lahir</h6>
                            <p><?php echo $resultDataMhs["tanggal_lahir"] ?></p>
                        </div>

                        <div>
                            <h6>Alamat Mahasiswa</h6>
                            <p><?php echo $resultDataMhs["alamat"] ?></p>
                        </div>

                        <div>
                            <h6>Telepon Mahasiswa</h6>
                            <p><?php echo $resultDataMhs["telepon"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>