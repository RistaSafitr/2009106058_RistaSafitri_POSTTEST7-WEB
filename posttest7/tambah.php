<?php
require "config.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $telp = $_POST['telp'];
  $email = $_POST['email'];
  $regisUsername = $_POST['regisUsername'];
  $regisPassword = $_POST['regisPassword'];
  date_default_timezone_set("Asia/Makassar");
  $waktu0 = strtotime("now");
  $waktu = date("Y/m/d H:i:s a", $waktu0);
  $query = mysqli_query($db,"INSERT INTO users (nama,telp,email,regisUsername,regisPassword) VALUES ('$nama','$telp','$email','$regisUsername','$regisPassword')");
  // var_dump($_FILES);
  if(!empty($_FILES['gambar']['name'])){
    $query = mysqli_query($db, "SELECT * FROM users WHERE regisUsername='$regisUsername'");
    $result = mysqli_fetch_assoc($query);
    $id = $result['id'];
    $nama = $_POST['nama_gambar'];
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $gambar_baru = "$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    if(move_uploaded_file($tmp,"images/.$gambar_baru")) {
      $query = mysqli_query($db, "INSERT INTO datagambar VALUES ('',$id,'$nama', '$gambar_baru', '$waktu')");
      if($query){
        header("Location:index.php");
      } else {
        echo "Tambah data error";
      }
    }
  }
}
?>