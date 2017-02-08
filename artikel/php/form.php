<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variable Form Sample</title>
</head>

<body>
<form method="post" action="">
Bilangan pertama :<input type="text" size="3" name="bil1" required> 
<BR> 
Bilangan kedua :<input type="text" size="3" name="bil2" required> 
<BR> 
<input type="submit" name="submit" value="Cek"> 
<input type="reset"> 
</form> 
<?php
if(isset($_POST['submit'])){
echo "Bilangan 1=".$_POST['bil1']."<br>";
echo "Bilangan 2=".$_POST['bil2']."<br>";
echo "Hasil Operasi Penjumlahan = ".($_POST['bil1'] + $_POST['bil2'])."<br>";
echo "Hasil Operasi perkalian = ".$_POST['bil1']*$_POST['bil2']."<br>";
echo "Hasil Operasi Pembagian = ".$_POST['bil1']/$_POST['bil2']."<br>";
echo "Hasil Operasi Pengurangan = ".($_POST['bil1']-$_POST['bil2'])."<br>";
}
?>




<hr>
<form method="post" action="">
<input type="text" size="3" name="nilai" placeholder="Masukkan Nilai"> 
<input type="submit" name="submit2" value="Cek"> 
<input type="reset"> 
</form> 
<?php
if($_POST['nilai']>=0 && $_POST['nilai']<=30){
	echo "Anda Tidak Lulus";
}
elseif($_POST['nilai']>=31 && $_POST['nilai']<=55){
	echo "Anda Lulus dengan Nilai D";
}
elseif($_POST['nilai']>=56 && $_POST['nilai']<=70){
	echo "Anda Lulus dengan Nilai C";
}
elseif($_POST['nilai']>=71 && $_POST['nilai']<=80){
	echo "Anda Lulus dengan Nilai B";
}
elseif($_POST['nilai']>=81 && $_POST['nilai']<=100){
	echo "Anda Lulus dengan Nilai A";
}
echo "<br>".$_POST['nilai'];
?><hr>

</body>
</html>