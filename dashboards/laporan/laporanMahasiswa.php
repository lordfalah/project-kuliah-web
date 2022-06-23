<?php 
    include "../account/login/config.php";
    $querySql = "SELECT * FROM user_mahasiswa";
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
                <th>Nama Mahasiswa</th>
                <th>Tempat</th>
                <th>Alamat</th>
                <th>NIM</th>
                <th>Foto Mahasiswa</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Email</th>

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
                <td><img src="uploads/<?php echo $data['foto_mahasiswa']; ?>" alt=<?php echo $data["nama_mahasiswa"];?>
                        width="200px" height="200px">
                </td>
                <td><?php echo $data["tanggal_lahir"]; ?></td>
                <td><?php echo $data["jenis_kelamin"]; ?></td>
                <td><?php echo $data["telepon"]; ?></td>
                <td><?php echo $data["email"]; ?></td>
                <?php endforeach?>
                <?php endif?>
        </tbody>
    </table>
    <script>
    window.print();
    </script>

</body>