<?php  session_start();

include "konek.php";

if (isset($_POST['login'])){
	//koneksi terpusat

	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$domain=$_POST['domain'];
	
	if($domain=="admin"){
		$query=mysql_query("select * from tbl_user where username='$username' and password='$password'");
		$cek=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		$id_user=$row['id_user'];
		
		if($cek){
			$_SESSION['nama']=$username;
			$_SESSION['id_user']=$id_user;
			$_SESSION['domain']=$domain;
			$_SESSION['waktu']=date("Y-m-d H:i:s");
			
			?><script language="javascript">document.location.href="index.php";</script><?php
			
		}else{
			?><script language="javascript">document.location.href="login.php?status=Gagal Login";</script><?php
		}	
	}
			
}else{
	unset($_POST['login']);
}
?>