<?php
include"config/kon.php";

$username = $_POST['username'];
$pass     = $_POST['pass'];

$login=mysql_query("SELECT * FROM pelanggan WHERE username='$username' AND password='$pass' ");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

//Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['username']     = $r['username'];
  $_SESSION['namalengkap']  = $r['nama_pelanggan'];
  $_SESSION['pass']         = $r['password'];
  $_SESSION['alamat']       = $r['alamat'];
  $_SESSION['telpon']       = $r['telpon'];
  $_SESSION['email']        = $r['email'];
  
  echo"<script>alert('Selamat Datang, Sdr/Sdri $_SESSION[namalengkap]')</script>";
  echo"<script>location='index-pelanggan.php'</script>";
}
else
{
  echo"<script>alert('Anda Gagal LOGIN..!!')</script>";
  echo"<script>location='index.php'</script>";
}
?>




