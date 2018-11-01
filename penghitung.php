<?php 
$var1=$_POST['angka1'];
$var2=$_POST['angka2'];
$varTes=$_POST['tes'];
if ($var1!=0&&$var2!=0) {
	if ($varTes=="/") {
		$hasil=$var1/$var2;
		echo "$var1 / $var2=$hasil";
	}
else if ($varTes=="*") {
		$hasil=$var1*$var2;
		echo "$var1 * $var2=$hasil";
	}
else if ($varTes=="+") {
		$hasil=$var1+$var2;
		echo "$var1 + $var2=$hasil";
	}	
	else if ($varTes=="%") {
		$hasil=$var1%$var2;
		echo "$var1 % $var2=$hasil";
	}	
	else if ($varTes=="-") {
		$hasil=$var1-$var2;
		echo "$var1 - $var2=$hasil";
	}	
	
}
else {
		echo "Data Belum Dimasukkan 1!1!1!";
	}
