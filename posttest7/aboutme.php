<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Saya</title>
    <link rel="stylesheet" href="style0.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
    <script src="jquery.js"></script>
</head>

<body>
    <div class="header">
        <div class="header-logo">Print Online Samarinda</div>
        <div class="header-item">
            <ul>
                <li><button id="mode"><img src="logo/icons8-waning-gibbous-50.png" alt="dark mode" width="25px"></button></li>
                <li><img src="logo/icons8-cart-32.png" alt="cart"></li>
                <li><img src="logo/icons8-user-30.png" alt="akun"></li>
                <li><a href="home.php"><img id="home" src="logo/icons8-home-page-50.png" alt="Akun" width="40px" height="40px"></a></li>
            </ul>
            </div>
        </div>
    </div>

    <div class="list-table center" style="overflow-x: auto;">
        <h1></h1>
        <div class="searching">
            <form action="" method="get">
                <input type="text" name="search" placeholder="Searching for.." class="search">
                <input type="submit" name="submit" value="cari" class="cari">
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th colspan="9" class="thead">
                        <h3 class="center">Informasi Akun</h3>
                    </th>
                </tr>
                <tr>
                    <th nowrap>Nama Lengkap</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Gambar</th>
                    <th>Waktu Registrasi</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "config.php";
                if(isset($_GET['search'])){
                    $search = $_GET['search'];
                    $query = mysqli_query($db, "SELECT * FROM users INNER JOIN datagambar ON users.id=datagambar.id_users WHERE nama LIKE '%$search%'");;
                } else {
                    $query = mysqli_query($db, "SELECT * FROM users INNER JOIN datagambar ON users.id=datagambar.id_users");
                }
                
                $i = 1;
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td nowrap><center><?=$row['nama']?></center></td>
                        <td><center><?=$row['telp']?></center></td>
                        <td><center><?=$row['email']?></center></td>
                        <td><center><?=$row['regisUsername']?></center></td>
                        <td><center><?=$row['regisPassword']?></center></td>
                        <td><center><img width="60px" src="images/.<?=$row['file']?>" alt="<?=$row['file']?>"></center> </td>
                        <td><center><?=$row['waktu']?></center></td>
                        <td class="edit">
                            <a href="edit.php?id=<?=$row['id']?>">
                                <center><img src="logo/icons8-edit-64.png" alt="edit" width="30" height="30"></center>
                            </a>
                        </td>
                        <td class="hapus">
                            <a href="hapus.php?id=<?=$row['id']?>">
                                <center><img src="logo/icons8-delete-64.png" alt="hapus"width="30" height="30"></center>
                            </a>
                        </td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
        <img class="latar" src="image/login-background0.jpg" alt="">
    </div>

    <div class="copyright">
        <p><center>@Copyright 2022 - by Rista Safitri</center></p>
    </div>
</body>

</html>