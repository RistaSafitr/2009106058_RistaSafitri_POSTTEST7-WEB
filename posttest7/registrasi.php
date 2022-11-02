<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
    <script src="jquery.js"></script>
    <title>Register</title>
</head>
<body>
    <div class="header">
        <div class="header-logo">Print Online Samarinda</div>
        <div class="header-item">
            <ul>
                <li><button id="mode"><img src="logo/icons8-waning-gibbous-50.png" alt="dark-mode" width="25px"></button></li>
                <li><img src="logo/icons8-cart-32.png" alt="cart"></li>
                <li><img src="logo/icons8-user-30.png" alt="akun"></li>
                <li><a href=""><img id="home" src="logo/icons8-home-page-50.png" alt="Akun" width="40px" height="40px"></a></li>
            </ul>
        </div>
    </div>

    <div id="main-regis">
        <center>
            <h2 id="judul-regis">Registrasi</h2> <br> </center>
            <form action="tambah.php" method="post" enctype="multipart/form-data">

            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" required>

            <label for="">Nomor Telepon</label>
            <input type="text" name="telp" id="telp" placeholder="  xxxx-xxxx-xxxx" pattern="^\d{4}-\d{4}-\d{4}$" required>

            <label for="">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="">Username</label>
            <input type="text" name="regisUsername" id="regisUsername" required>

            <label for="">Password</label>
            <input type="password" name="regisPassword" id="regisPassword" required>

            <label for="password">Konfirmasi Password: </label>
            <input type="password" name="konfirPassword" id="konfirPassword" required>

            <label for="nama_gambar">Disimpan Sebagai: </label>
            <input type="text" name="nama_gambar" required>

            <label for="gambar">Profil Picture</label>
            <input type="file" name="gambar">  <br><br>

            <input type="submit" name="submit" value="Kirim">

            </form>
    <img class="latar" src="images/login-background0.jpg" alt="">
    </div>

    <div class="copyright">
        <p><center>@Copyright 2022 - by Rista Safitri</center></p>
    </div>
    <script src="javaScript.js"></script>
</body>
</html>