<html>
<head>

		<title>
		PEMROGRAMAN WEB</title>
		</head>
		
		<style>
		body{ 
			background-image: url(3.jpg);
			width: 100%;
			height: 100%;
			background-size: 100%

	}
</style>
		<center> <font color="black"size="7" face="rog fonts"><b>PEMROGRAMAN WEB</b></font><br><br></center>
		<center> <font color="black"size="6" face="rog fonts"><b>MY PROFILE</b></font><br><br></center>
		
		<div>
		<justify><br>
		<div style="background-color : #0006; border:0px solid #17202A;height:auto; margin:10px 0px; padding:5px; text-align:left; width:auto;">
		<a href="profil.jpg"><img src="profil.jpg" border="2" align="left" width="200px" height ="300px"/></a>
		
		<font color="black"size="4">
		<center-left>
		<pre><p>	 Nama			: BELLA NOVITA SUGIARTI </p></pre>
		<pre><p>	 Tempat / Tanggal Lahir	: Lampung, 12 Januari 2001</p></pre>
		<pre><p>	 Alamat			: Mumbang Jaya Kec. Jabung Kab. Lampung Timur</p></pre>
		<pre><p>	 Fakultas		: Teknologi Industri</p></pre>
		<pre><p>	 Jurusan		: Teknik Informatika</p></pre>
		<pre><p>	 Hobby			: Shopping dan Volley Ball</p></pre>
		<pre><p>	 Cita-Cita 		: Menjadi Orang Yang Sukses Dan Bahagia Dunia Akhirat</p></pre>
		</font>
<a aling="center" href="formregis.html" class="btn btn-primary btn-lg">Buku Tamu</a>
<a aling="center" href="lihat2.php" class="btn btn-info btn-lg">Lihat Pengunjung</a>
<?php
$filecounter="counter.txt"; //untuk memanipulasi file....
$fl=fopen($filecounter,"r+"); //untuk membuka filemread/write, pointer file dimulai dari awal file
$hit=fread($fl,filesize($filecounter)); //untuk membaca isi dari file yang sudah dibuka menggunakan fopen() 
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF><tr>");
echo("<td width=250 valign=middle align=center>");
echo("<font face=verdana size=2 color=#FF0000><b>");
echo("Anda pengunjung yang ke:"); //echo digunakan untuk menampilkan hasil output sebanyak satu atau lebih data yang dipisahkan tanda koma pada browser
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl); //untuk menutup file
$fl=fopen($filecounter,"w+"); //untuk membuka file
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit)); //untuk membuka file read/write
fclose($fl); //untuk menutup file yang telah dibuka menggunakan fopen()
?>
</body>
</html>