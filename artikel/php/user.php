<?php session_start();
if($_SESSION['nama']!="admin"){	
echo "<script language='JavaScript'>alert('Anda Harus Login Dulu');
document.location='login.html'</script>";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman User </title>
</head>

<body>
<?php
echo  "Selamat Datang ".$_SESSION['nama'];
?>
<a href="logout.php">Logout</a>
</body>
</html>
