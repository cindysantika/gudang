<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:index.php');
}
?>
<html>
<head>
<title>Stok Gudang </title>
</head>
<body>
<table border="1" align="center" width="800">
<tr><td colspan="2" height="200"><img src="img/header.jpg" height="300" width="900" /></td></tr>
<tr><td colspan="2" height="25">
<marquee behavior = "alternate">Selamat Datang Di Website PT.PLN (PERSERO) P3B </marquee></td></tr>

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
<td width="500"> 
<style type='text/css'>
    #slideshow img
    {
        position: absolute;
        left: 0;
        top: 0;
    }
    </style>
 
    <!--jquery, bisa didownload di jquery.com
    // atau ambil dari google CDN (seperti dibawah)-->
    <script type='text/javascript'
        src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'>
    </script>
 
    <!--script animasi-->
    <script type='text/javascript'>
 
    // Fungsi yang menjadi inti dari script animasi ini
    function simpleSlideshow(slideContainer, duration)
    {
        // gambar/foto yang akan dianimasikan
        // adalah child (anak) pertama dari container yang digunakan
        var currentSlide = $('img:nth-child(1)', slideContainer);
 
        // slide tersebut akan dimodifikasi sedemikian rupa
        $(currentSlide)
        .css({
            opacity: 0 // buat opacity-nya menjadi 0, sehingga tidak terlihat (transparan)
        })
        // appendTo akan membuat anak pertama menjadi anak terakhir,
        // sehingga akan berada dibagian paling depan.
        // namun meskipun berada dipaling depan,
        // tidak akan terlihat karena sudah transparan (step sebelumnya)
        .appendTo(slideContainer)
 
        // animasikan tingkat opacity menjadi 1 (FULL),
        // sehingga pelan-pelan akan terlihat
        .animate({
            opacity: 1
        }, 'normal', function(){
            setTimeout(function(){
                // fungsi akan dijalankan kembali
                // setelah sekian detik sesuai dengan duration
                // sehingga menampilkan efek animasi berulang-ulang
                simpleSlideshow(slideContainer, duration);
            }, duration);
        })
    }
 
    // implementasi
    // jalankan fungsi animasi ketika document sudah di-load (ready)
    $(function(){
        var duration = 3000; // millsecond        
        var slideContainer = $('#slideshow');
        simpleSlideshow(slideContainer, duration);
    });
    </script>
<div id='slideshow'>
    <img src='img/1.jpg'>
    <img src='img/2.jpg'>
    <img src='img/3.jpg'>

</div>
</td></tr>
<tr><td colspan="2" height="100"> <img src="Gambar.jpg" height="100" width="900" /></td></tr>
</table>
</body>
</html>