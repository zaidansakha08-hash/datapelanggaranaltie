<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if($data){

if($password == $data['password']){
        $_SESSION['role']=$data['role'];

        echo json_encode([
            "status"=>"success",
            "role"=>$data['role']
        ]);

    }else{

        echo json_encode([
            "status"=>"error"
        ]);

    }

}else{

    echo json_encode([
        "status"=>"error"
    ]);

}
?>