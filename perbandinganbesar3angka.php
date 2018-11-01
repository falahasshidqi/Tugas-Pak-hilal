<?php 
$isian1 = $_POST['nilai1'];
$isian2 = $_POST['nilai2'];
$isian3 = $_POST['nilai3'];
if ($isian1>$isian2&&$isian2>$isian3) {
	echo "$isian1,$isian2,$isian3";
}elseif ($isian1<$isian2&&$isian2<$isian3){
	echo "$isian3,$isian2,$isian1";
}elseif ($isian1<$isian2&&$isian2>$isian3&&$isian1>$isian3){
	echo "$isian2,$isian1,$isian3";
}elseif ($isian1>$isian2&&$isian2<$isian3){
	echo "$isian1,$isian3,$isian2";
}elseif ($isian1<$isian2&&$isian2>$isian3&&$isian1<$isian3){
	echo "$isian2,$isian3,$isian1";
}
?>


