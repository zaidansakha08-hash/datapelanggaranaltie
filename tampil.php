<?php
include "koneksi.php";

$data = mysqli_query($koneksi,"SELECT * FROM pelanggaran");

$result = [];

while($d = mysqli_fetch_assoc($data)){
    $result[] = $d;
}

echo json_encode($result);
?>