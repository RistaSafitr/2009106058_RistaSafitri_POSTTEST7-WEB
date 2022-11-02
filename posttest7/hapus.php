<?php
require "config.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE FROM users WHERE id=$_GET[id]");
  $query_gambar = mysqli_query($db,"SELECT * FROM datagambar WHERE id=$_GET[id]");
  $result = mysqli_fetch_assoc($query_gambar);
  $profil_lama = $result['file'];
  if($query){
    unlink('images/'.$profil_lama);
    $query = mysqli_query($db,"DELETE FROM users WHERE id=$_GET[id]");
    $query_profil = mysqli_query($db,"DELETE FROM datagambar WHERE id = $_GET[id]");
    header("Location:aboutme.php");
  } else {
    echo "
      <script>
        alert('Gagal Menghapus Data');
        location.href = 'aboutme.php';
      </script>
    ";
  }
}
?>