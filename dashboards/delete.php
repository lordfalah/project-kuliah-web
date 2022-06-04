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
    
    }else{
        $idData = $_GET["id"];
        $nameImg = getDataId($idData, "user_kegiatan");
        deleteImgInfolder($nameImg["foto"]);

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