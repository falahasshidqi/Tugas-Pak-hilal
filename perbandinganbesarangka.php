<?php 
$isian1 = $_POST['nilai1'];
$isian2 = $_POST['nilai2'];
if ($isian1 > $isian2) {
	echo "$isian1";
}elseif($isian2 > $isian1) {
	echo "$isian2";
}elseif ($isian2 == $isian1) {
	echo "Nilai Sama";
}elseif ($isian1 == $isian2) {
	echo "Nilai Sama";
}
 ?>
