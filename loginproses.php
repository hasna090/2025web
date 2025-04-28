<?php 
session_start();
include "koneksi.php"; //konksinya

$nim = $_POST['nim']; //mendapatkan data 
$password = $_POST['password'];

$query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$hasil = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($hasil); //mengambil baris pertama dari data 


if (password_verify($password, $data['password'])) {
   $_SESSION['login'] = true ;
    header("location:index.php");
} else {
    header("location:login.html");
}


?>