<?php
session_start();

if($_SESSION['role']!="admin"){
die("Akses ditolak");
}

include "koneksi.php";

$id=$_GET['id'];

mysqli_query($koneksi,"DELETE FROM pelanggaran WHERE id='$id'");

session_start();

if(!isset($_SESSION['role']) || $_SESSION['role']!="admin"){
die("Akses ditolak");
}

?>