<?php 
    include "../account/login/config.php";
    $querySql = "SELECT * FROM user_kegiatan";
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
                <th>Nama Kegiatan</th>
                <th>Deskripsi</th>
                <th>Foto Kegiatan</th>
            </tr>
        </thead>
        <tbody>
            <?php if($resultData == true): ?>
            <?php foreach($resultData as $key=>$data): ?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $data["nama_kegiatan"]; ?></td>
                <td><?php echo $data["deskripsi"]; ?></td>
                <td><img src="uploads/<?php echo $data['foto_kegiatan']; ?>" alt=<?php echo $data["nama_kegiatan"];?>
                        width="200px" height="200px">
                </td>
                <?php endforeach?>
                <?php endif?>
        </tbody>
    </table>
    <script>
    window.print();
    </script>
</body>