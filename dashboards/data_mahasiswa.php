<?php 
    include "../account/login/config.php";


    if(isset($_POST["submit"])){
        
        if(isset($_POST["tempat"]) && isset($_POST["nameMahasiswa"]) && isset($_POST["nim_mahasiswa"]) 
        && isset($_POST["email"]) && isset($_POST["date"]) && isset($_POST["gender"]) 
        && isset($_POST["telepon"])){    


            $resultDataAdd = addDataAdmin($_POST, "user_mahasiswa");
            
            
            if($resultDataAdd > 0){

                echo "
                    <script>
                        alert('Success Data Add');
                    </script>
                ";
            
            }else{
                echo "
                    <script>
                        alert('Failed Data Add');
                    </script>
                ";
            }
        }

        
    }


    $querySql = "SELECT * FROM user_mahasiswa";
    $resultData = configurationDB($querySql);
    
?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Mahasiswa</h1>
</div>
<section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data Mahasiswa</h5>

                </div>
                <div class="modal-body">
                    <form action="dashboard.php?dashboard=data_mahasiswa" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nameMahasiswa">Nama Mahasiswa</label>
                            <input required type="text" name="nameMahasiswa" class="form-control" id="nameMahasiswa"
                                aria-describedby="nameMahasiswa">
                            <small id="nameMahasiswa" class="form-text text-muted">We'll never share your kegiatan with
                                anyone
                                else.</small>
                        </div>

                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input required type="text" name="tempat" class="form-control" id="tempat">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input required type="text" name="alamat" class="form-control" id="alamat">
                        </div>

                        <div class="form-group">
                            <label for="nim_mahasiswa">NIM Mahasiswa</label>
                            <input required type="number" name="nim_mahasiswa" class="form-control" id="nim_mahasiswa">
                        </div>

                        <div class="form-group">
                            <label for="email">email</label>
                            <input required type="email" name="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input required type="date" id="date" name="date" class="form-control">
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
                            <input required type="number" id="telepon" name="telepon" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="image">Select image to upload:</label>
                            <input required type="file" name="fileToUpload" class="form-control" id="fileToUpload">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="container mt-5">

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tempat</th>
                        <th>Alamat</th>
                        <th>NIM</th>
                        <th>Foto Mahasiswa</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($resultData == true): ?>
                    <?php foreach($resultData as $key=>$data): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $data["nama_mahasiswa"]; ?></td>
                        <td><?php echo $data["tempat"]; ?></td>
                        <td><?php echo $data["alamat"]; ?></td>
                        <td><?php echo $data["nim_mahasiswa"]; ?></td>
                        <td><img src="uploads/<?php echo $data['foto_mahasiswa']; ?>"
                                alt=<?php echo $data["nama_mahasiswa"];?> width="200px" height="200px">
                        </td>
                        <td><?php echo $data["tanggal_lahir"]; ?></td>
                        <td><?php echo $data["jenis_kelamin"]; ?></td>
                        <td><?php echo $data["telepon"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>

                        <td>
                            <a href="delete.php?id=<?php echo $data['id']; ?>&mahasiswa=<?php echo $data['id']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-trash3 " viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <a
                                href=" update.php?id_update=<?php echo $data['id']; ?>&mahasiswa=<?php echo $data['id']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" style="cursor: pointer;"
                                    data-bs-toggle="modal" data-bs-target="#sampleModal" fill="currentColor"
                                    class="bi bi-gear " viewBox="0 0 16 16">
                                    <path
                                        d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                    <path
                                        d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach?>
                    <?php endif?>
                </tbody>
            </table>
        </div>
    </div>
</section>