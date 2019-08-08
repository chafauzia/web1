
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>-- Adventure --</title>

<style type="text/css">
body{
	color:#333333;
	font-family:Verdana,Arial,Helvetica,sans-serif;
	font-size:11px;
	background-image: url(gambar/New%20folder/images/tenda/STROM2.jpg);
	}

a {
	font-family: Verdana, Geneva, sans-serif;
	color: #FFF;
	font-size:12px;
	font-weight: bold;
}
a:link {
	text-decoration: none;
	color:#090;
}
a:visited {
	text-decoration: none;
	color: #090;
}
a:hover {
	text-decoration: none;
	color:#FF0;
}
a:active {
	text-decoration: none;
	color: #090;
}

.link {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}


.border  { border: 1px solid #3B884B;}  
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 2%;
}
</style>
</head>

<body>
<table width="800" align="center" cellpadding="0" cellspacing="0" bordercolor="#B2C0C0" background="gambar/the-retro-classic-pattern-background----vector-material_34-57934.jpg" class="border">
  <tr>
    <td height="293">
<table width="800" height="319"  align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td height="124" colspan="3"><table width="100%" border="0" bordercolor="#B1BEC4">
      <tr>
        <td align="center" bgcolor="#FFFFFF"><div>
          <p>&nbsp;</p>
          </div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23" colspan="3" bgcolor="#B2BECA">
      <table width="100%" border="0">
        <tr>
          <td width="61%" height="23" bgcolor="#FFFFFF">&nbsp;</td>
          <td width="12%" bgcolor="#FFFFFF"><a href="index.php">BERANDA</a></td>
          <td width="11%" bgcolor="#FFFFFF"><a href="?page=katalog-depan">KATALOG</a></td>
          <td width="16%" bgcolor="#FFFFFF"><a href="?page=contact">HUBUNGI KAMI</a></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td width="183" height="79" valign="top" bgcolor="#FFFFFF"><table width="200" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="13" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="172" valign="top" bgcolor="#FFFFFF"><?php include"login-pelanggan.php"; ?></td>
        <td width="15" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
    </table></td>
    <td width="603" valign="top" bgcolor="#FFFFFF"><table width="100%" height="56" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF"><strong>
          <marquee>
        Selamat Datang di Website Adventure 
          </marquee>
        </strong><br /></td>
      </tr>
      <tr>
        <td width="16" height="31">&nbsp;</td>
        <td width="565" valign="top" bgcolor="#FFFFFF">
		<?php
	$page = @$_GET['page'];
	$file ="$page.php";
	if (!file_exists($file)) 
	{ include ("home.php");	} 
	else // jika file tidak ada
	{ include ("$page.php"); }
	?></td>
      </tr>
    </table>
      <br />
	  <br />  </td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="31" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25" colspan="3"><div align="center"><strong>Copyright@webpro Adventure </strong></div></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
