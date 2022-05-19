<?php 
    include "../account/login/config.php";

    if($_GET["id_update"]){
        $resultData = getDataId($_GET["id_update"]);
    }

    if(isset($_POST["submit"])){
        if(isset($_POST["updateEmail"]) || isset($_POST["updatePassword"])){
            $resultDataUpdate = updateDataAdmin($_GET["id_update"], $_POST);
            
         
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