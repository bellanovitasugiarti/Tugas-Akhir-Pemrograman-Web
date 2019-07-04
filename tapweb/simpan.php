<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<style>
		body{ 
			background-image: url(3.jpg);
			width: 100%;
			height: 100%;
			background-size: 100%

	}
</style>
<div class="jumbotron">

<?php
echo "<head><title>DATA REGISTRASI</head></title>"; //echo digunakan untuk menampilkan hasil output sebanyak satu atau lebih data yang dipisahkan tanda koma pada browser
$fp = fopen("dataregistrasi.txt","a+"); //membuka file untuk read/write saja
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$alamat = $_POST['alamat'];
$birthday_day = $_POST['birthday_day'];
$birthday_month = $_POST['birthday_month'];
$birthday_year = $_POST['birthday_year'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$password = $_POST['password'];
$file = $_FILES["file"];
$tmp_name = $_FILES["file"]["tmp_name"];
move_uploaded_file($tmp_name, "images/".$file);

fputs($fp,"$firstname|$lastname|$alamat|$birthday_day|$birthday_month|$birthday_year|$jenis_kelamin|$username|$password|$file\n");
fclose($fp); //untuk menutup file yang telah dibuka menggunakan fopen()
echo " Terima Kasih Atas Partisipasi Anda Telah Mengisi Form Registrasi<br>";
echo "<a class=btn href=formregis.html> Isi Buku Tamu </a><br>";
echo "<a class=btn href=index2.php> Lihat Profile </a><br> ";
?>
</div>
</body>
</html>