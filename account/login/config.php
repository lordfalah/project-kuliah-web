<?php 
    $connectionDB = mysqli_connect("localhost", "root", "", "admin");

    function configurationDB($query){
        global $connectionDB;
        $temp = [];

        if(!$connectionDB){
            echo "<script>
                alert('Fail Connect to DataBase');
            </script>";
            die("Connection failed: " . mysqli_connect_error());
        };

        $resultDB = mysqli_query($connectionDB, $query);
        

        if(mysqli_affected_rows($connectionDB) > 0){
            while($row = mysqli_fetch_assoc($resultDB)){
                $temp[] = $row;
            };
            
            return $temp;
        
        }else{
            return false;
        }
    }

    function getDataId($id, $tabelName){
        global $connectionDB;

        
        $getDataSql = "SELECT * FROM $tabelName WHERE id='$id'";

        $resultDB = mysqli_query($connectionDB, $getDataSql);
        if(mysqli_affected_rows($connectionDB) > 0){
            return mysqli_fetch_assoc($resultDB);
        
        }else{
            return false;
        }
    }

    function confirmAccount($resultData, $emailSubmit, $passwordSubmit){


        if($resultData){
            foreach($resultData as $data){

                if($data){
                    if(password_verify($passwordSubmit, $data["password"])){
                       
                        // session
                        $_SESSION["email"] = $emailSubmit;
                        $_SESSION["password"] = $passwordSubmit;
                    
        
                        echo "<script>
                            alert('Success Login :)');
                            window.location.assign('../../dashboards/dashboard.php');
                        </script>";
                        
                    }else{
                        echo "
                            <script>
                                alert('Fail Auth Account :(');
                            </script>";
                    }
        
                }else{
                    echo "<script>
                        alert('Fail Login :(');
                    </script>";
                }
            }
            
        }else{
            echo "<script>
                alert('Error form data :(');
            </script>";
        }

    }


    function addDataAdmin($data, $tabelName){
        global $connectionDB;

        if($tabelName == "user_login"){
            $emailSubmit = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["email"]));
            $passwordSubmit = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["password"]));
    
            $resultEncrypt = password_hash($passwordSubmit, PASSWORD_DEFAULT);
    
    
            $addQuerySql = "INSERT INTO $tabelName
            VALUES (0, '$emailSubmit', '$resultEncrypt')";
    
            mysqli_query($connectionDB, $addQuerySql);
            return mysqli_affected_rows($connectionDB);
        
        }elseif($tabelName == "user_mahasiswa"){
            $nameMahasiswa = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["nameMahasiswa"]));
            $tempat = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["tempat"]));
            $nim_mahasiswa = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["nim_mahasiswa"]));
            $email = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["email"]));
            $date = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["date"]));
            $gender = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["gender"]));
            $telepon = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["telepon"]));
            $alamat = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["alamat"]));
            $resultImage = uploadImage($_FILES);

            if($resultImage){
                $addQuerySql = "INSERT INTO $tabelName
                VALUES (0, '$nim_mahasiswa', '$nameMahasiswa', '$tempat', '$date', '$gender', '$alamat',
                '$telepon', '$email', '$resultImage')";
        
                mysqli_query($connectionDB, $addQuerySql);
                return mysqli_affected_rows($connectionDB);
            }
        
        }else{
            $namaKegiatan = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["nameKegiatan"]));
            $deskripsi = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["deskripsi"]));
            $resultImage = uploadImage($_FILES);
        
            if($resultImage){
                $addQuerySql = "INSERT INTO $tabelName
                VALUES (0, '$namaKegiatan', '$deskripsi', '$resultImage')";
        
                mysqli_query($connectionDB, $addQuerySql);
                return mysqli_affected_rows($connectionDB);
            }

            return false;
        }
    }
    


    $uploadOk = 1;
    function uploadImage($image){
        if(!$image["fileToUpload"]["error"] == 4){
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    
            // Check if image file is a actual image or fake image
            
            $check = getimagesize($image["fileToUpload"]["tmp_name"]);
            $resultImg = genereteNameImg($imageFileType);
        }


        
        if(imgIsNull($image) && checkImg($check) && imgIsAlready($target_dir.$resultImg)
        && limitImgSize($image) && allowFormatFile($imageFileType)){
            
            finishUploadImg($image, $target_dir.$resultImg);
            return $resultImg;
        
        };

        return false;
    }

    // generate new name file img
    function genereteNameImg($imageFileType){
        $newNameFileImg = uniqid();
        $newNameFileImg .= ".";
        $newNameFileImg .= $imageFileType;

        return $newNameFileImg;
    }

    function imgIsNull($image){
        if($image["fileToUpload"]["error"] == 4){
            echo "<script>
                alert('Must have image');
            </script>";
            return false;
        
        }else{
            return true;
        }
    }

    // Check if image file is a actual image or fake image
    function checkImg($check){
        global $uploadOk;

        if($check == false) {
            echo "<script>
                alert('File is not an image.');
            </script>";
            $uploadOk = 0;
            return false;
        
        }else{
            return true;
        }
    }

    //  Check if file already exists
    function imgIsAlready($target_file){
        global $uploadOk;

        if (file_exists($target_file)) {
            echo "<script>
                alert('Sorry, file already exists.');
            </script>";
            
            $uploadOk = 0;
            return false;
        
        }else{
            return true;
        }
    }

    // Check file size
    function limitImgSize($image){
        global $uploadOk;

        if ($image["fileToUpload"]["size"] > 5000000) {            
            echo "<script>
                alert('Sorry, your file is too large.');
            </script>";
            $uploadOk = 0;
            return false;
        
        }else{
            return true;
        }
    }


    function allowFormatFile($imageFileType){
        global $uploadOk;

        // Allow certain file formats
        $formatImg = ["jpg", "png", "jpeg"];

        if(!in_array($imageFileType, $formatImg)){
            echo "<script>
                alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. and = $imageFileType');
            </script>";
            $uploadOk = 0;
            return false;
        
        }else{
            return true;
        }
    }


    // if everything is ok, try to upload fil
    function finishUploadImg($image, $target_file){
        if (move_uploaded_file($image["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $image["fileToUpload"]["name"])). " has been uploaded.";
        
        } else {
            echo "<script>
                alert('Sorry, there was an error uploading your file.');
            </script>";
        }
    }


    function DeleteDataAdmin($querySql){
        global $connectionDB;

        
        mysqli_query($connectionDB, $querySql);
        return mysqli_affected_rows($connectionDB);
    }

    function deleteImgInfolder($nameImg){
        $path = "uploads/$nameImg";
        unlink($path);
    }




    function updateDataAdmin($idData, $data, $tabelName){
        global $connectionDB;

        if($tabelName == "user_login"){
            $passwordSubmit = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["updatePassword"]));
        
            $resultEncrypt = password_hash($passwordSubmit, PASSWORD_DEFAULT);
    
            $updateQuerySql = "UPDATE user_login 
            SET password='$resultEncrypt' 
            WHERE id='$idData'";
            
            mysqli_query($connectionDB, $updateQuerySql);
            return mysqli_affected_rows($connectionDB);
        
        }elseif($tabelName == "user_mahasiswa"){
            $nameMahasiswa = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["nameMahasiswa"]));
            $tempat = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["tempat"]));
            $nim_mahasiswa = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["nim_mahasiswa"]));
            $email = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["email"]));
            $date = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["date"]));
            $gender = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["gender"]));
            $telepon = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["telepon"]));
            $alamat = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["alamat"]));
            $updateImage = uploadImage($_FILES);

            if($updateImage){
                $nameImgOld = getDataId($idData, $tabelName);
                deleteImgInfolder($nameImgOld["foto_mahasiswa"]);

                $updateQuerySql = "UPDATE $tabelName 
                SET nim_mahasiswa='$nim_mahasiswa', nama_mahasiswa='$nameMahasiswa', tempat='$tempat', tanggal_lahir='$date', jenis_kelamin='$gender', alamat='$alamat', telepon='$telepon', email='$email', foto_mahasiswa='$updateImage'
                WHERE id='$idData'";

                mysqli_query($connectionDB, $updateQuerySql);
                return mysqli_affected_rows($connectionDB);
            }

        }else{
            $updateKegiatan = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["namaKegiatanUpdate"]));
            $updateDeskripsi = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["deskripsiUpdate"]));
            $updateImage = uploadImage($_FILES);
            if($updateImage){
                $nameImgOld = getDataId($idData, $tabelName);
                deleteImgInfolder($nameImgOld["foto_kegiatan"]);
    
                $updateQuerySql = "UPDATE $tabelName 
                SET nama_kegiatan='$updateKegiatan', deskripsi='$updateDeskripsi', foto_kegiatan='$updateImage' 
                WHERE id='$idData'";
                
                mysqli_query($connectionDB, $updateQuerySql);
                return mysqli_affected_rows($connectionDB);
            }

            return false;
        }
    }

?>