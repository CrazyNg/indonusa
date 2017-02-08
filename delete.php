<?php ob_start();
     include "konek.php";
     



$id = isset($_REQUEST['judul']) ? $_REQUEST['judul'] : '';
if ($id <> '') {
mysql_query("delete from tbl_artikel where judul='$id'");
    echo 'data dengan judul = '.$id.' berhasil dihapus';
	header('location:pos.php');
}
?>