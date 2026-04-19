<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM pelanggaran");

while($data = mysqli_fetch_array($query)){
    echo "Nama: ".$data['nama']."<br>";
    echo "Kelas: ".$data['kelas']."<br>";
    echo "Tanggal: ".$data['tanggal']."<br>";
    echo "Pelanggaran: ".$data['pelanggaran']."<br>";
    echo "<hr>";
}
?>