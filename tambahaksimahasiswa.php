<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggalLahir = $_POST["tanggalLahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$idprodi = $_POST["idprodi"];

$query = "INSERT INTO mahasiswa (nim, nama, tanggalLahir, telp, email, idprodi) VALUES 
('$nim', '$nama', '$tanggalLahir', '$telp', '$email', '$idprodi')";

mysqli_query($conn, $query);

header("location:index.php");

?>