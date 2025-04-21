<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggalLahir = $_POST["tanggalLahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$idprodi = $_POST["idprodi"];

$query = "UPDATE mahasiswa SET nama = '$nama', tanggalLahir = '$tanggalLahir', 
telp = '$telp', email = '$email', idprodi = '$idprodi' WHERE nim = '$nim'";

mysqli_query($conn, $query);

header("location:index.php");

?>