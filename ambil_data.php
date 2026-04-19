<?php
include "koneksi.php";

$data = mysqli_query($koneksi,"SELECT * FROM pelanggaran");

$result = [];

while($row = mysqli_fetch_assoc($data)){
    $result[] = $row;
}

echo json_encode($result);
?>