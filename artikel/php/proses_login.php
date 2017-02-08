<?php
session_start();
if($_POST['nama']=="admin" && $_POST['pass']=="12345"){
	//jika benar;
	$_SESSION['nama']=$_POST['nama'];
	header("location:user.php");
	/*echo "<script language='JavaScript'>alert('Login Berhasil');
document.location='user.php'</script>";*/
}
else{// jika salah login
	//header("location:login.html");
	echo "<script language='JavaScript'>alert('User dan Password Salah');
document.location='login.html'</script>";
}
?>