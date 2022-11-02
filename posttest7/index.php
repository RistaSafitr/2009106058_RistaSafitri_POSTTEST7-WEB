<?php
session_start();
require 'config.php';

if (isset($_SESSION['login'])) {
    header('Location: home.php');
    exit;
}

if (isset($_POST['login'])) {
    $regisUsername = $_POST['regisUsername'];
    $regisPassword = $_POST['regisPassword'];

    $cek_username = "SELECT * FROM users WHERE regisUsername = '$regisUsername'";
    $result = mysqli_query($conn, $cek_username);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($regisPassword, $row['regisPassword'])) {
            $_SESSION['login'] = true;

            echo "<script>
                alert('Login berhasil!');
                document.location.href = 'home.php';
            </script>";
        } else {
            echo "
                <script>
                    alert('Gagal Login!!!');
                    location.href = 'index.php';
                </script>
                ";
        }
    }

    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Online Samarinda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylelogin.css">
    <script src="javaScript.js"></script>
    <script src="jquery.js"></script>
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

    <div class="main-login">
        <div class="tabel">
            <table>
                <tr>
                    <th colspan="2"><center><h2>Login Using Username and Password</h2></center></th>
                </tr>
                <tr>
                    <th class="login-pic"><img src="images/3d-business-young-woman-has-an-idea.png" alt=""></th>
                    <th>
                        <form class="login" action="" method="post">
                            <div class="input-icon">
                            <label for="regisUsername"></label> <br>
                            <i class="login-icon"><img src="logo/icons8-contacts-32.png"></i>
                            <input type="text" name="regisUsername" id="regisUsername" required>
                            

                            <label for="regisPassword"></label> <br>
                            <i class="login-icon"><img src="logo/icons8-padlock-50.png" width="30px"></i>
                            <input type="password" name="regisPassword" id="regisPassword" required> <br>

                            <input type="submit" name="sumbit" value="Login"> <br>

                            <p>Belum Punya Akun? <a href="registrasi.php">Registrasi</a></p>
                            </div>
                        </form>
                    </th>
                </tr>
            </table>
        </div>
    </div>

    <div class="copyright">
        <p><center>@Copyright 2022 - by Rista Safitri</center></p>
    </div>
    <script src="javaScript.js"></script>
</body>
</html>