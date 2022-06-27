<?php
session_start(); //untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser
include "koneksi.php"; //untuk memanggil file 'koneksi.php'
?>

<!DOCTYPE html>
<head>
    <?//jenis font untuk tulisan di halaman login ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">

    <?//link untuk menghubungkan dengan file CSS?>
    <link rel="stylesheet" href="style2.css">
    <title>Halaman Login</title>
</head>
<body>
    <form action="" method="POST">
    <div class="container">
        <span class="text1">Selamat datang</span>
        <br><br><br>
        <span class="text2">Di Website</span>
    </div>

    <div class="text-container">
        <h1>ENJOY</h1>
    </div>

    <?//membuat form login?>
    <div class="login-box">
        <h1>Login</h1>
        <div class="textbox">
            <input type="text" placeholder="Username" name="username" value="">
        </div>

        <div class="textbox">
            <input type="password" placeholder="Password" name="password" value="">
        </div>

        <input class="btn" type="submit" name="masuk" value="Login">   
    </form>

    <?php
    if(isset($_POST['masuk'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $qry = mysqli_query($koneksi, "SELECT * FROM tablogin WHERE username = '$username' AND password = '$password' ");

        //mengecek ada berapa baris dari data username dan password yang dimasukkan ke form login
        $cek = mysqli_num_rows($qry);

        //jika dicek nilainya sama dengan 1 maka akan di lempar ke web lain (web.php) 
        if ($cek==1) {
            $_SESSION['userweb']=$username;
            header("location:tampil.php");
            exit;
        }
        
        //jika tidak ada nilai data yang sama makan akan muncul pesan warning
        else{
            echo "maaf username atau password salah";
        }
    }
    ?>
</body>
</html>
