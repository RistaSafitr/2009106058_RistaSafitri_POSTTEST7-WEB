<?php
session_start();
require 'config.php';

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek_username = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $cek_username);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;

            echo "<script>
                alert('Login berhasil!');
                document.location.href = 'index.php';
            </script>";
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
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylelogin.css">
    <script src="javaScript.js"></script>
    <script src="jquery.js"></script>
</head>

<body>
    <h1>Form Login</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-weight:600;">Username/Password Salah!</p>
    <?php endif; ?>
    <br>
    <form action="" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" autocomplete="off" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" autocomplete="off" required><br><br>
        <button type="submit" name="login">Login</button>
        <a href="registrasi.php">
        <button type="submit" name="registrasi">Registrasi</button>
        </a>
        
    </form>
</body>

</html>