<table border="3px">
<?php
$baris=4;
$kolom=3;
echo"<tr>";
echo "<th>No.</th>";
for($k=1;$k<=$kolom;$k++){
echo "<th>Kolom $k</th>";
}
echo"</tr>";
for($b=1;$b<=$baris;$b++){
	echo"<tr>";
	echo"<td>$b.</td>";
	for($k=1;$k<=$kolom;$k++){
	echo "<td>Baris $b Kolom $k</td>";
	}
	echo"</tr>";
}
?>
</table>
