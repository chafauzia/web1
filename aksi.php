<?php
session_start();
include "config/kon.php";

$page=@$_GET['page'];
$act=@$_GET['act'];

date_default_timezone_set("Asia/Jakarta");

$tgl_sekarang = date("Ymd");
$jam_sekarang = date("H:i:s");

if ($page=='keranjang' AND $act=='tambah'){

	$sql = mysql_query("SELECT id_barang FROM kantong WHERE id_barang='$_GET[id]'");
	$ketemu=mysql_num_rows($sql);
	
	if ($ketemu==0){	
	//simpan dalam keranjang belanja
	mysql_query("INSERT INTO kantong (kode, jumlah, tgl_kantong, jam_kantong,username)
				VALUES ('$_GET[id]', 1 , '$tgl_sekarang', '$jam_sekarang','$_SESSION[username]')");
	}
	else {
	// update barang kalau di klik ulang
		mysql_query("UPDATE kantong SET jumlah = (jumlah + 1)	WHERE kode='$_GET[id]'");		
	}	
	echo "<script>alert('Terima Kasih $_SESSION[namalengkap] telah berbelanja, silahkan cek Keranjang Belanja anda..');
        window.location=('index-pelanggan.php?page=keranjang')</script>";
}		

elseif ($page=='keranjang' AND $act=='hapus'){
	mysql_query("DELETE FROM kantong WHERE kode='$_GET[id]'");
	header('location:index-pelanggan.php?page=keranjang');				
}

elseif ($page=='keranjang' AND $act=='update'){
  		              
  $id       = $_POST['id'];
  $jml_data = count($id);
  $jumlah   = $_POST['jml']; // quantity
  
  for ($i=1; $i <= $jml_data; $i++){
  mysql_query("UPDATE kantong SET jumlah = '$jumlah[$i]' WHERE id_kantong = '$id[$i]'"  );
      header('Location:index-pelanggan.php?page=keranjang');	
    }   
}
?>
