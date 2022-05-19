<?php 
    include "../account/login/config.php";
    

    $resultData = DeleteDataAdmin($_GET["id"]);
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

?>