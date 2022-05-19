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

    function getDataId($id){
        global $connectionDB;

        
        $getDataSql = "SELECT * FROM user_login WHERE id='$id'";

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


    function addDataAdmin($data){
        global $connectionDB;

        $emailSubmit = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["email"]));
        $passwordSubmit = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["password"]));

        $resultEncrypt = password_hash($passwordSubmit, PASSWORD_DEFAULT);


        $addQuerySql = "INSERT INTO user_login
        VALUES (0, '$emailSubmit', '$resultEncrypt')";

        mysqli_query($connectionDB, $addQuerySql);
        return mysqli_affected_rows($connectionDB);
    }





    function DeleteDataAdmin($idData){
        global $connectionDB;

        $deleteQuerySql = "DELETE FROM user_login WHERE id='$idData'";

        mysqli_query($connectionDB, $deleteQuerySql);
        return mysqli_affected_rows($connectionDB);
    }


    function updateDataAdmin($idData, $data){
        global $connectionDB;

        $passwordSubmit = mysqli_real_escape_string($connectionDB, htmlspecialchars($data["updatePassword"]));
        
        $resultEncrypt = password_hash($passwordSubmit, PASSWORD_DEFAULT);

        $updateQuerySql = "UPDATE user_login 
        SET password='$resultEncrypt' 
        WHERE id='$idData'";
        
        mysqli_query($connectionDB, $updateQuerySql);
        return mysqli_affected_rows($connectionDB);
    }

?>