<?php
session_start();

if(!isset($_SESSION["login"])  ){
    header("Location: login.php");
    exit;
}

//koneksi ke database
require 'koneksi.php';

$admin = query("SELECT * FROM admin ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
    <h1>My Friends Ambyar</h1>

    <div class="container">

        <ul class="gallery">
            <li>
                <a href="#gambar1">
                <img src="img/thumb/chip120.jpg" alt="Chipmang">
                <span>Alvian</span>
                </a>

                <div class="overlay" id="gambar1">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar9" class="prev">prev</a>
                    <img src="img/foto1/chip600.jpg" alt="Alvian">
                    <a href="#gambar2" class="next">next</a>
                </div>
                </li>
            <li>
                <a href="#gambar2">
                <img src="img/thumb/ted120.jpg" width="120px" height="120px" alt="lukman">
                <span>Lukman</span>
                </a>
                <div class="overlay" id="gambar2">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar1" class="prev">prev</a>
                    <img src="img/foto1/ted600.jpg" alt="Lukman">
                    <a href="#gambar3" class="next">next</a>
                </div>
            </li>

            <li>
                <a href="#gambar3">
                <img src="img/thumb/tis 120.jpg"  alt="Tis ">
                <span>Tis</span>
                </a>
                <div class="overlay" id="gambar3">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar2" class="prev">prev</a>
                    <img src="img/foto1/tis600.jpg" alt="Tis">
                    <a href="#gambar4" class="next">next</a>
                </div>
            </li>

            <li>
                <a href="#gambar4">
                <img src="img/thumb/hiro120.jpg" width="120px" height="120px" alt="Bima">
                <span>Bima</span>
                </a>
                <div class="overlay" id="gambar4">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar3" class="prev">prev</a>
                    <img src="img/foto1/hiro600.jpg" alt="Bima">
                    <a href="#gambar5" class="next">next</a>
                </div>
            </li>

            <li>
                <a href="#gambar5">
                <img src="img/thumb/dillah120.jpg" width="120px" height="120px" alt="Fadillah">
                <span>Fadillah</span>
                </a>
                <div class="overlay" id="gambar5">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar4" class="prev">prev</a>
                    <img src="img/foto1/dillah600.jpg" alt="Bima">
                    <a href="#gambar6" class="next">next</a>
                </div>
            </li>

            <li>
                <a href="#gambar6">
                <img src="img/thumb/Fadil120.jpg" alt="Fadil">
                <span>Fadil</span>
                </a>
                <div class="overlay" id="gambar6">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar5" class="prev">prev</a>
                    <img src="img/foto1/Fadil600.jpg" alt="Fadil">
                    <a href="#gambar7" class="next">next</a>
                </div>
            </li>

            <li>
                <a href="#gambar7">
                <img src="img/thumb/fauzi120.jpg"  alt="Fauzi">
                <span>Fauzi</span>
                </a>
                <div class="overlay" id="gambar7">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar6" class="prev">prev</a>
                    <img src="img/foto1/fauzi600.jpg" alt="Fauzi">
                    <a href="#gambar8" class="next">next</a>
                </div>
            </li>

            <li>
                <a href="#gambar8">
                <img src="img/thumb/anggi120.jpg"  alt="Anggi">
                <span>Anggi</span>
                </a>
                <div class="overlay" id="gambar8">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar7" class="prev">prev</a>
                    <img src="img/foto1/anggi600.jpg" alt="Anggi">
                    <a href="#gambar9" class="next">next</a>
                </div>
            </li>

            <li>
                <a href="#gambar9">
                <img src="img/thumb/delin120.jpg"  alt="Delin">
                <span>Delin</span>
                </a>
                <div class="overlay" id="gambar9">
                    <a href="#" class="close">X CLOSE</a>
                    <a href="#gambar8" class="prev">prev</a>
                    <img src="img/foto1/delin600.jpg" alt="Delin">
                    <a href="#gambar1" class="next">next</a>
                </div>
            </li>

            <div class="clear"></div>
        </ul>
    </div>
</body>
</html>