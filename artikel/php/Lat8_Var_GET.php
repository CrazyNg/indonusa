<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lat8_Var_GET</title>
</head>
<body>
<a href="Lat8_Var_GET.php?fungsi=Increment&nilai_akhir=10">Increment - Batas Nilai 10</a> | <a href="Lat8_Var_GET.php?fungsi=Increment&nilai_akhir=20">Increment - Batas Nilai 20</a> | <a href="Lat8_Var_GET.php?fungsi=Decrement&nilai_akhir=10">Decrement - Batas Nilai 10</a> | <a href="Lat8_Var_GET.php?fungsi=Decrement&nilai_akhir=20">Decrement - Batas Nilai 20</a>
<hr />
<?php
if($_GET['nilai_akhir']<=20){
	if($_GET['fungsi']=="Increment"){
		for($i=1;$i<=$_GET['nilai_akhir'];$i++){
			echo $_GET['fungsi']." ke-".$i."<br>";
		}
	}
	elseif($_GET['fungsi']=="Decrement"){
		for($i=$_GET['nilai_akhir'];$i>=1;$i--){
			echo $_GET['fungsi']." ke-".$i."<br>";
		}
	}
}
else{echo "<script>alert('terjadi kesalahan, input anda ".$_GET['nilai_akhir']." lebih dari 20')</script>";}
?>
</body>
</html>