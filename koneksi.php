<?php

//koneksi ke database

$conn = mysqli_connect("localhost","root","","login");


//cek koneksi
if(mysqli_connect_errno()){
    echo"koneksi db gagal : " . mysqli_connect_error();
}

?>