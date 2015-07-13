<html>

<head>

<title>Cara Membuat Dropdown Menu HTML/CSS</title>


<!--Kode CSS MULAI // bisa digunakan juga untuk external css-->

 <style>

  /*General*/

  html,
  body
  {margin:0; padding:0; font-size:12px; font-family:arial, san-serif;}

  .l{float:left;}/*berulang kekiri*/

  .r{float:right;}/*berulang kekanan*/

  .c{clear:both;}/*untuk Menghentikan proses float*/

   #navigasi{width:710px; margin:0 auto; background:#000;padding:15px;} /*Buat Area tempat menu lebar 650px posisi tengah background hitam*/

   .menu{list-style:none; margin:0; padding:0; background:#fafafa;} /*menghilangkan list style dan mengatur margin padding jadi nol*/

   .menu > li {float:left; margin:0 10px 0 0; padding:10px 15px; border:1px solid #fff; position:relative;}/* Membuat button berulang kekiri danga jarak ke kanan 10 px dan padding atas bawah 10px dan kanan kiri 15px dan border 1px warna putih serta buat posisi nol mulai dropdown disini*/

   .menu > li a{color:#333; font-weight:bold; text-decoration:none;}/*Membuat huruf link button berwarna gelap, dengan ketebalan huruf bold dan menghilagkan garis bawah*/

   .menu > li:hover{cursor:pointer; background:#333;}/*Saat button di hover buat cursor bentuk tangan dan background jadi gelap*/

   .menu > li:hover a{color:#fff;}/*Buat hurufnya berwarna putih*/

   .menu > li > .submenu{display:none; position: absolute; z-index:1; top:15px; left:0;width:150px;}/*hilangkan submenu posisi menumpuk keatas butoon dengan jarak 1px mengacu relative sebelumnya pada posisi kiri n0l dan atas 15px*/

   .menu > li:hover > .submenu{display:block; overflow:hidden;}/*Tampilkan hanya saat hover dan menghilangkan semua yang terjadi di luar area*/

   .menu > li ul{background:#ccc; padding:0; margin:20px 0 0 0; list-style:none; border:1px solid #333; border-top:0; border-radius: 0 0 10px 10px; -moz-border-radius: 0 0 10px 10px; -webkit-border-radius: 0 0 10px 10px;}
   /*Buat submenu background #abu-abu dengan padding kanan kiri nol; menghilangkan list style memberikan border, menghilangkan border-top dan membuat lengkunngan dibawah 10px*/

   .menu > li > .submenu > ul > li{padding:5px;}/*Atur padding atas bawah kakan kiri 5px untuk button submenu*/

   .menu > li > .submenu > ul > li a{color:#000;}/*warnal link huruf button submenu jadi hitam*/

   .menu > li > .submenu > ul > li:hover{background:#333;}/*Saat subitem button di hover background jadi gelap*/

   .menu > li > .submenu > ul > li:hover a{color:#fff;}/*warna huruf jadi putih*/

   .menu > li > .submenu > ul > li:last-child{border-radius: 0 0 10px 10px; 
-moz-border-radius: 0 0 10px 10px; -webkit-border-radius: 0 0 10px 10px;}/*Button submenu terakhir dibuat rounded saat hover*/

 </style>

 
<!--Kode CSS END-->


</head>

<body>

 <nav id="navigasi">

 <div>

	<ul class="menu l">

		<li><a href=" index.php" title="Halaman Utama">Beranda</a></li>


		<li><a href="http://www.blogger.com/blogger.g?blogID=77827092934645996#" title="Informasi Profil">Profil</a>

			<div class="submenu">

				 <ul>

					<li><a href="http://www.blogger.com/blogger.g?blogID=77827092934645996#">Welcome</a></li>

					<li><a href="http://www.blogger.com/blogger.g?blogID=77827092934645996#">Visi Misi</a></li>

					<li><a href="http://www.blogger.com/blogger.g?blogID=77827092934645996#">Struktur Organisasi</a></li>

				</ul>

			</div>

		</li>

		<li><a href="http://www.blogger.com/blogger.g?blogID=77827092934645996#" title="Informasi Produk">Produk</a>
			<div class="submenu">
			 <ul>
				<li><a href="http://www.blogger.com/blogger.g?blogID=77827092934645996#">Kursus Jahit</a></li>

				<li><a href="http://www.blogger.com/blogger.g?blogID=77827092934645996#">Kursus Masak</a></li>

				<li><a href="http://www.blogger.com/blogger.g?blogID=77827092934645996#">Kursus Program</a></li>

			</ul>

		</div>

		</li>

		<li><a href="http://www.blogger.com/blogger.g?blogID=77827092934645996#" title="Galeri dan Gambar">Galeri</a></li>


	</ul>


<div class="c">


 </div>

 </nav>

</body>

</html>