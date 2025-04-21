<?php
include "koneksi.php";

$query = "SELECT m.*, p.nama namaProdi FROM mahasiswa m join prodi p ON m.idprodi = p.id_prodi";
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
            <th>Prodi</th>
            <th>Aksi</th>
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
            <td><?php echo $d["namaProdi"] ?></td>
            <td><a href="deletemahasiswa.php?nim=<?= $d['nim']; ?>"
            onclick="return confirm('Yakin ingin hapus?')">Delete</a> |
             <a href="editmahasiswa.php?nim=<?= $d['nim']; ?>">Edit</a></td>
          
        </tr>
            <?php endforeach;?>    
</tbody>
    </table>
</body>
</html>