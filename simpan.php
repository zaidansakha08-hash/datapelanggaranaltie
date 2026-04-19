<?php
session_start();

if($_SESSION['role']!="admin"){
die("Akses ditolak");
}

include "koneksi.php";

$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$pelanggaran=$_POST['pelanggaran'];
$tanggal=$_POST['tanggal'];

mysqli_query($koneksi,"INSERT INTO pelanggaran VALUES(NULL,'$nama','$kelas','$pelanggaran','$tanggal')");

session_start();

if(!isset($_SESSION['role']) || $_SESSION['role']!="admin"){
die("Akses ditolak");
}

?>