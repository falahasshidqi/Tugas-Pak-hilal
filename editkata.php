<!DOCTYPE html>

<html>

<head>

</head>

<body>

<?php
$i=$_POST["Teks"];
$r=$_POST["ganti"];
$rr="<b><font color=blue>$r</b></font>";
$r2=$_POST["ganti2"];
$rr2="<b><font color=red>$r2</b></font>";
$kalimat_sebelum=str_replace($r, $rr, $i);
$kalimat_sesudah=str_replace($r, $rr2, $i);
echo "<b>Kalimat asli :</b><br><br> $kalimat_sebelum <br><br>";
echo "<b>Kalimat setelah diUbah :</b><br><br> $kalimat_sesudah.<p>.<p>";
echo "Keterangan : <br>";
echo "Warna Biru Adalah Teks Sebelum Di ubah.<br>";
echo "Warna Merah Adalah Teks Setelah Di ubah.<p>";
?>

	<form method=post action="htmlnya.html">

		<table border=0>

			<tr>

				<td><input type=submit value=kembali></td>

			</tr>

			</form>


</body>

</html>
