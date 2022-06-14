<?php 
    include "../account/login/config.php";
    
    if(isset($_GET["user"])){
        $idData = $_GET["id"];

        $resultData = DeleteDataAdmin("DELETE FROM user_login WHERE id=$idData");
        if($resultData > 0){
            echo "
                <script>
                    alert('Success Delete Data :)');
                    window.location.assign('../dashboards/dashboard.php?dashboard=data_user');
                </script>
            ";
            
        
        }else{
            echo "
            <script>
                alert('Failed Delete Data :(');
                window.location.assign('../dashboards/dashboard.php?dashboard=data_user');
            </script>";
        }
    
    }elseif(isset($_GET["mahasiswa"])){
        $idData = $_GET["mahasiswa"];
        
        $resultData = DeleteDataAdmin("DELETE FROM user_mahasiswa WHERE id=$idData");
        if($resultData > 0){
            echo "
                <script>
                    alert('Success Delete Data :)');
                    window.location.assign('../dashboards/dashboard.php?dashboard=data_mahasiswa');
                </script>
            ";
            
        
        }else{
            echo "
            <script>
                alert('Failed Delete Data :(');
                window.location.assign('../dashboards/dashboard.php?dashboard=data_mahasiswa');
            </script>";
        }

    }else{
        $idData = $_GET["id"];
        $nameImg = getDataId($idData, "user_kegiatan");
        deleteImgInfolder($nameImg["foto_kegiatan"]);

        $resultData = DeleteDataAdmin("DELETE FROM user_kegiatan WHERE id=$idData");

        if($resultData > 0){
            echo "
                <script>
                    alert('Success Delete Data :)');
                    window.location.assign('../dashboards/dashboard.php?dashboard=data_kegiatan');
                </script>
            ";
            
        
        }else{
            echo "
            <script>
                alert('Failed Delete Data :(');
                window.location.assign('../dashboards/dashboard.php?dashboard=data_kegiatan');
            </script>";
        }
    }



?>