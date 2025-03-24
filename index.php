<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
$data = ambildata($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <br> 
    <a href ="tambahmahasiswa.php">Tambah</a>
<table border= "1" cellspacing ="0" cellpadding = "1">
        <thead> 
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Telp</th>
            <th>Email</th>
            <th>id</th>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach($data as $d) : ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $d["nim"] ?></td>
            <td><?php echo $d["nama"] ?></td>
            <td><?php echo $d["tanggalLahir"] ?></td>
            <td><?php echo $d["telp"] ?></td>
            <td><?php echo $d["email"] ?></td>
            <td><?php echo $d["idprodi"] ?></td>
          
        </tr>
            <?php endforeach;?>    
</tbody>
    </table>
</body>
</html>