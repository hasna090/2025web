<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
<h1>DATA PRODI</h1>
    <br>
    <table border= "1" cellspacing ="0" cellpadding = "1">
        <thead> 
            <th>No</th>
            <th>id_prodi</th>
            <th>nama</th>
            <th>kaprodi</th>
            <th>jurusan</th>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach($data as $d) : ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $d["id_prodi"] ?></td>
            <td><?php echo $d["nama"] ?></td>
            <td><?php echo $d["kaprodi"] ?></td>
            <td><?php echo $d["jurusan"] ?></td>
        </tr>
            <?php endforeach;?>    
</tbody>
    </table>
</body>
</html>