<?php 
    include "../account/login/config.php";
    $querySql = "SELECT * FROM user_login";
    $resultData = configurationDB($querySql);

?>

<body class="my-5">
    <table class="table table-dark table-striped table-hover table-bordered border-light">
        <div class="text-center">
            <h2>LAPORAN KEGIATAN KAMPUS</h2>
            <h2>SEMESTER GENAP TA. 2021/2022</h2>
        </div>
        <thead>
            <tr>
                <th>No.</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($resultData as $key=>$data): ?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $data["email"]; ?></td>
                <td><?php echo $data["password"]; ?></td>
            </tr>
            <?php endforeach?>

        </tbody>
    </table>

    <script>
    window.print();
    </script>
</body>