<?php
include"konek.php";
	 $kode = $_POST['judul'];
	 $id = $_POST['id_art'];
     $nama = $_POST['artikel'];
     $harga = $_POST['jenis_artikel'];   
             $sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");
             $query = mysql_query("update tbl_artikel set judul='$kode', artikel='$nama', jenis_artikel='$harga' where id_artikel='$id'") ;

			 if($query == true){
				 echo "<p> Data sudah ter-update <a href=\"pos.php\">kembali</a></p>";
			 } else {
				 echo "gagal";
			 }
			 mysql_close($sambung);
?>

