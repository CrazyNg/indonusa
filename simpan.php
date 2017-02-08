<?php
include"konek.php";

$dataartikel=$_POST['artikel'];
$datajudul=$_POST['judul'];
$datajenis=$_POST['jenis'];


mysql_query("INSERT INTO tbl_artikel(artikel,judul,jenis_artikel) VALUES ('$dataartikel','$datajudul','$datajenis')");

 echo "<meta http-equiv='refresh' content='0;url=pos.php'>";
?>
