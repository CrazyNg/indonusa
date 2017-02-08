<?php
session_start();
include("konek.php");
$query=mysql_query("select * from tbl_user where username='".$_POST['nama']."' and password='".$_POST['password']."'");
if(mysql_num_rows($query)==1){
	//jika benar;
	$_SESSION['pasti']="admin";
	$_SESSION['nama']=mysql_result($query,0,1);
	$_SESSION['password']=mysql_result($query,0,2);
	header("location:login.php");
	/*echo "<script language='JavaScript'>alert('Login Berhasil');
document.location='login.php'</script>";*/
}
else{// jika salah login
	//header("location:login.html");
	echo "<script language='JavaScript'>alert('User dan Password Salah');
document.location='login.php'</script>";
}
?>