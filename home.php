<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:index.php');
}
?>
<html>
<head>
<title>Contoh Web Company Profile </title>
</head>
<body>
<table border="1" align="center" width="800">
<tr><td colspan="2" height="200"><img src="capture.jpg" height="100" width="600" /></td></tr>
<tr><td colspan="2" height="25">
<marquee behavior = "alternate">Selamat Datang DiWebsite PT.PLN (PERSERO) P3B </marquee></td></tr>

<tr><td width="200" height="350"><title>LOGIN</title>
<link rel="stylesheet" href="css/style_login.css" type="text/css"/>
</head>

<body class="no-side">

<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3 align = "center">Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3 align = "center" >Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3 align = "center">Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3 align = " center">Username dan Password tidak terdaftar!</h3>';
	}
}
?>
<div class="login-box">
<div class="login-border">
<div class="login-style">
	<div class="login-header">
		<div class="logo clear">
			<div align="center">
            	<span class="title">
                <img src="img/login.gif" alt="" width="285" height="80" class="picture" />
                </span>
			</div>
		</div>
	</div>
<form name="login" action="otentikasi.php" method="post">
<div class="login-inside">
			<div class="login-data">
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
             
	<tr>
                  <td>
                  <div align="center">
                    <table cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="25">Username</td>
                        <td> :
                          <input type="text" name="username"  class="text" id="username" /></td>
                      </tr>
                      <tr>
                        <td height="26">Password</td>
                        <td> :
                          <input type="password" class="text" name="password" id="password" /></td>
                      </tr>
		<td>		
<select name = "Jabatan">
<option value="Kpl Gudang">Kpl Gudang</option>
<option value="Spv">Spv</option>
<option value="Staff">Staff</option>
</td>
                        <td colspan="2">
                        <div align="right">
                        <input name="submit"  class="submit" type="submit" value="LOGIN" />
                        </div></td>
                      </tr>
                    </table>
                  </div>
                  </td>
                </tr>
</select>
</table>
</form>
</td>

<td width="350"> Isi Web
</td></tr>
<tr><td colspan="2" height="100"> <img src="Gambar.jpg" height="100" width="900" /></td></tr>
</table>
</body>
</html>