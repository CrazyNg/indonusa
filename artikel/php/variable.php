<h1>Contoh Variabel,Konstanta dan Operator</h1> 
<?php
  echo "<br><B>Variabel dan operator</B><BR>"; 
  $a = 5.25; 
  $b = 10; 
$c = $a+$b; 
//echo "\$a bernilai= ".$a;
  // Ini adalah komentar per baris 
  print "\$a = $a, \$b = $b, \$c = $c<BR>"; 
  $a++; //echo $a;
  print "\$a++ ekivalen dgn \$a = \$a+1, \$a menjadi $a<BR>"; 
  $a++; //echo $a;
  print "\$a += 10 ekivalen dgn \$a = \$a+10, \$a menjadi $a<BR>"; 
  $a = "SEPULUH"; 
  print "Sekarang \$a nilainya $a<BR>"; 
echo "<B>Penggunaan petik ganda dan petik tunggal pada variabel</B><BR>"; 
  $var = "12345"; 
  $ket1 = "Contoh ".$var." dengan tanda petik ganda"; 
  $ket2 = 'Contoh '.$var.' dengan tanda petik tunggal'; 
  echo "$ket1<BR>"; 
  echo "$ket2<BR>"; 
   /* Ini komentar per blok yg diawali dengan /* dan diakhiri 
     dengan */ 
  echo "<B>Penggunaan konstanta</B><BR>"; 
  define("Judul", "WebProg1"); 
  define("PHI", 3.1425); 
  print "Isi konstanta Judul = " . Judul . "<BR>"; 
  printf("Isi konstanta PHI = %f<BR>", PHI); 
  $r = 10; 
  $kel = 2*PHI*$r*$r; 
  echo "Jari-jari r = $r, keliling = $kel<BR>"; ?> 
