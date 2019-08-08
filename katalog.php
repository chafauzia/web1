<?php 
	include"config/kon.php";
    echo "Produk Baju Online<br /><br />"; 
	$entries=2; 
	//awal paging
	$query=mysql_query("SELECT * FROM barang ORDER BY id_barang DESC"); //input
	$get_pages=mysql_num_rows($query); //dapatkan jumlah semua data
	
	if ($get_pages>$entries)  //jika jumlah semua data lebih banyak dari nilai awal yang diberikan
	{
		echo "Hal : ";
		$pages=1;
		while($pages<=ceil($get_pages/$entries))
		{
			if ($pages!=1)
			{
			   echo " | ";	
			}
		//Membuat link sesuai nama halaman
		$page=$pages-1;
		echo"<a href=?page=katalog&id=$page>$pages</a>"; 
		$pages++;
		}
	}
	else
	{
		$pages=0;
	}
	echo"<br>";
	//**akhir paging**//
		
	$page=@$_GET['id'];
	$offset=$page*$entries;
	
	//menampilkan data dengan menggunakan limit sesuai parameter paging yang diberikan
	$result=mysql_query("SELECT * FROM barang ORDER BY id_barang DESC limit $offset,$entries"); //output
	$jumlah=mysql_num_rows($query);
	echo "<br>";

while($d=mysql_fetch_array($result)){
?>
<br />
<table width="515" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4">-- <?php echo"$d[nama]"; ?> --</td>
  </tr>
  <tr>
    <td width="153" rowspan="6"><img src="../gambar/<?php echo $data['gambar_galeri'];?>" alt="salah input" width=140 height=137></td>
    <td width="118">&nbsp;</td>
    <td width="19">&nbsp;</td>
    <td width="225">&nbsp;</td>
  </tr>
  <tr>
    <td>Kode</td>
    <td><div align="center">:</div></td>
    <td><?php echo"$d[kode]"; ?></td>
  </tr>
  <tr>
    <td>Jenis</td>
    <td><div align="center">:</div></td>
    <td><?php echo"$d[jenis]"; ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><div align="center">:</div></td>
    <td><?php echo"$d[nama]"; ?></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td><div align="center">:</div></td>
    <td><?php echo"$d[harga]"; ?></td>
  </tr>
  <tr>
    <td><a href="aksi.php?page=keranjang&act=tambah&id=<?php echo"$d[id_barang]"; ?>">
        <input type="button" value="BELI" /></a></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
<?php } ?>

