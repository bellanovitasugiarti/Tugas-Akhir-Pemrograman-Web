<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> <!--style css-->
	<script type="text/javascript" src="js/jquery.js"></script> <!--style js-->
	<script type="text/javascript" src="js/bootstrap.js"></script> <!--style js-->
</head>

<?php
echo "<head><title>DATA FORM REGISTRASI</title></head>";
$fp = fopen("dataregistrasi.txt","r"); //membuka file untuk dibaca saja
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td>Firstname</td><td>: $pisah[0]</td></tr>"; //echo digunakan untuk menampilkan hasil output sebanyak satu atau lebih data yang dipisahkan tanda koma pada browser
echo "<tr><td>Lastname </td><td>: $pisah[1]</td></tr>";
echo "<tr><td>Alamat </td><td>: $pisah[2]</td></tr>";
echo "<tr><td>Birthday_day </td><td>: $pisah[3]</td></tr>";
echo "<tr><td>Birthday_month </td><td>: $pisah[4]</td></tr>";
echo "<tr><td>Birthday_year </td><td>: $pisah[5]</td></tr>";
echo "<tr><td>Jenis Kelamin </td><td>: $pisah[6]</td></tr>";
echo "<tr><td>Username </td><td>: $pisah[7]</td></tr>";
echo "<tr><td>Password </td><td>: $pisah[8]</td></tr>";
echo "<tr><td>Bukti </td><td>: <img src=images/$pisah[9] width=200 height=200 ></td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a class=btn href=formregis.html> Isi Buku tamu </a>";
echo "<a class=btn href=index2.php> Profile </a>";
?>

</html>