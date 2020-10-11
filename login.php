<?php
session_start();

//koneksi ke database
require 'koneksi.php';

if(  isset($_POST["login"])  ) {

    $Username = $_POST["username"];
    $Password = $_POST["password"];


    $result = mysqli_query($conn, "SELECT * FROM user WHERE username ='$Username'");

    //cek username
    if( mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify( $password, $row["password"])  ){

            //set session
            $_SESSION["login"] = true;

            header("Location: index.php");

            exit;
}
 }

    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="box">
        <h1>LOGIN</h1>
        <form>
            <div class="inputbox">
                <input type="text" name="" required="">
                <label>Username</label>
            </div>
            <div class="inputbox">
                <input type="Password" name="" required="">
                <label>Password</label>
            </div>
            <input type="Submit" name="" value="Submit">
</form>
    </div>
</body>
</html>