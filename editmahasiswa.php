<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

$nim = $_GET['nim'];
$querymahasiswa = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$datamahasiswa = ambildata($querymahasiswa);
$datamahasiswa = $datamahasiswa[0];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="editaksimahasiswa.php" method ="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" required value="<?= $datamahasiswa['nim']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required value="<?= $datamahasiswa['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggalLahir" required value="<?= $datamahasiswa['tanggalLahir']; ?>"></td>
            </tr>  
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="telp" required value="<?= $datamahasiswa['telp']; ?>"></td>
            </tr>  
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required value="<?= $datamahasiswa['email']; ?>"></td>
            </tr> 
             <tr>
                <td>Prodi</td>
                <td>
                    <select name="idprodi"> 
                     <?php foreach($data as $d) : ?>
                        <option value="<?php echo $d['id_prodi'] ?>"
                        <?= 
                        $d['id_prodi'] == $datamahasiswa['idprodi'] ?
                        "SELECTED" : ""
                        ?>
                        ><?php echo $d['nama'] ?></option>
                      <?php endforeach; ?>
                    </select>
            </td>
            </tr>
        </table>
        <a href="index.php">Kembali</a>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>