<?php
$nilai=99;
if($nilai>=0 && $nilai<=30){
	echo "Anda Tidak Lulus";
}
elseif($nilai>=31 && $nilai<=55){
	echo "Anda Lulus dengan Nilai D";
}
elseif($nilai>=56 && $nilai<=70){
	echo "Anda Lulus dengan Nilai C";
}
elseif($nilai>=71 && $nilai<=80){
	echo "Anda Lulus dengan Nilai B";
}
elseif($nilai>=81 && $nilai<=100){
	echo "Anda Lulus dengan Nilai A";
}
echo "<br>".$nilai;
?><hr>
<?php
if($nilai>=0 && $nilai<=30){
	echo "Anda Tidak Lulus";
}
elseif($nilai>=81 && $nilai<=100){
	echo "Anda Lulus dengan Nilai A";
}
elseif($nilai>=31 && $nilai<=55){
	echo "Anda Lulus dengan Nilai D";
}
elseif($nilai>=56 && $nilai<=70){
	echo "Anda Lulus dengan Nilai C";
}
elseif($nilai>=71 && $nilai<=80){
	echo "Anda Lulus dengan Nilai B";
}
echo "<br>".$nilai;
?><hr>
<?php
//$nilai="41";
if($nilai<=30){
	echo "Anda Tidak Lulus";
}
elseif($nilai<=55){
	echo "Anda Lulus dengan Nilai D";
}
elseif($nilai<=70){
	echo "Anda Lulus dengan Nilai C";
}
elseif($nilai<=80){
	echo "Anda Lulus dengan Nilai B";
}
elseif($nilai<=100){
	echo "Anda Lulus dengan Nilai A";
}
echo "<br>".$nilai;
?><hr>
<?php
if($nilai>=81){
	echo "Anda Lulus dengan Nilai A";
}
elseif($nilai>=71){
	echo "Anda Lulus dengan Nilai B";
}
elseif($nilai>=56){
	echo "Anda Lulus dengan Nilai C";
}
elseif($nilai>=31){
	echo "Anda Lulus dengan Nilai D";
}
elseif($nilai>=0){
	echo "Anda Tidak Lulus";
}
echo "<br>".$nilai;
?><hr>
<br>
<strong style="text-align:center">bermain dengan variable </strong><br>
<hr>


<?php
/*if($nilai<=30){
	echo "Anda Tidak Lulus";
}
elseif($nilai<=55){
	$hasil="D";
}
elseif($nilai<=70){
	$hasil="C";
}
elseif($nilai<=80){
	$hasil="B";
}
elseif($nilai<=100){
	$hasil="A";
}
echo "Anda Lulus dengan Nilai ".$hasil."<br>";
echo "Anda memasukkan \$nilai=".$nilai."<br>";
*/?><hr>


<?php
$nilai=98;
echo gettype($nilai)."<br>";
if($nilai >=0 && $nilai<=100 && is_int($nilai)){
	if($nilai<=30){
		echo "Anda Tidak Lulus";
	}
	elseif($nilai<=55){
		echo "Anda Lulus dengan Nilai D";
	}
	elseif($nilai<=70){
		echo "Anda Lulus dengan Nilai C";
	}
	elseif($nilai<=80){
		echo "Anda Lulus dengan Nilai B";
	}
	elseif($nilai<=100){
		echo "Anda Lulus dengan Nilai A";
	}
}
else {echo "ERROR";}
echo "<br>Input \$nilai=".$nilai;
?><hr>
