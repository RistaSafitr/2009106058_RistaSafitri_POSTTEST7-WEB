<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM users WHERE id=$_GET[id]");
    $result = mysqli_fetch_array($query);
    $nama = $result['nama'];
    $telp = $result['telp'];
    $email = $result['email'];
    $regisUsername = $result['regisUsername'];
    $regisPassword = $result['regisPassword'];
}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE users SET nama='$_POST[nama]',telp='$_POST[telp]',email='$_POST[email]',regisUsername='$_POST[regisUsername]',regisPassword='$_POST[regisPassword]' WHERE id=$_GET[id]");
    if($query){
        header("Location:aboutme.php");
    } else {
        echo "Update gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Print Samarinda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style0.css">
    <script src="jquery.js"></script>
</head>
<body>
    <div class="header">
        <div class="header-logo">Print Online Samarinda</div>
        <div class="header-item">
            <ul>
                <li><button id="mode"><img src="logo/icons8-180-degree-30.png" alt="dark mode"></button></li>
                <li><button id="keranjang" onclick="cart()"><img src="logo/icons8-cart-32.png" alt="cart"></button></li>
                <li><a href="home.html" style="text-decoration: none;">Beranda</li></a>
                <li style="text-decoration: none;">Akun</li>
                <li>Login/Daftar</li>
            </ul>
            </div>
        </div>
    </div>
    
    <div class="edit-data">
        <center><h2>Edit Data Akun</h2></center>
        <form action="" method="post">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" class="form-text" value='<?=$nama?>' required>
            
            <label for="">Nomor Telpon</label>
            <input type="text" name="telp" class="form-text" value='<?=$telp?>' required>
            
            <label for="">Email</label>
            <input type="email" name="email" class="form-text" value='<?=$email?>' required>
            
            <label for="">Username</label>
            <input type="text" name="regisUsername" class="form-text" value='<?=$regisUsername?>' required>

            <label for="">Password</label>
            <input type="text" name="regisPassword" class="form-text" value='<?=$regisPassword?>' required><br>

            <input type="submit" name="submit" value="Kirim" class="tombol-submit">
        </form>
    </div>

    <div class="copyright">
        <p><center>@Copyright 2022 - by Rista Safitri</center></p>
    </div>
</body>
</html>