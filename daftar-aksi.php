<?php
include "config/kon.php";

  $kar1=strstr($_POST['email'], "@");
  $kar2=strstr($_POST['email'], ".");
  $pass=$_POST['password'];
  $username = htmlspecialchars($_POST['username']);
  
  
  $sql =mysql_query ('SELECT username FROM pelanggan WHERE username ="'.$username.'"');
  $command=mysql_num_rows($sql);
  
  if ($command > 0){
  ?> <script type="text/javascript">alert('Username Sudah Terdaftar, cari yang lain');</script>
  <meta http-equiv="refresh" content="0;url=tambah-pelanggan.html"> <?
   }
  elseif (!preg_match("([a-z|A-Z])","$_POST[nama_lengkap]")){
  echo "Nama tidak boleh diisi dengan angka atau simbol.<br />
 	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
      }
  elseif (strlen($kar1)==0 OR strlen($kar2)==0){
  echo "Alamat email Anda tidak valid, mungkin kurang tanda titik (.) atau tanda @.<br />
 	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
       }
  else {
  mysql_query("INSERT INTO pelanggan(username,
                                             password,
                                             nama_pelanggan,
                                             alamat,
                                             telpon,
                                             email) 
	                                    VALUES('$username',
                                             '$pass',
                                             '$_POST[nama_lengkap]',
                                             '$_POST[alamat]',
                                             '$_POST[no_telp]',
                                             '$_POST[email]')");
                                             
       ?> <script type="text/javascript">alert('Anda Berhasil Daftar');</script>
         <meta http-equiv="refresh" content="0;url=index.php"> <?php                                      
       }?>
