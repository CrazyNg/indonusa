
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anyar-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/style.css" rel="stylesheet" />	
<!-- =======================================================
    Theme Name: Anyar
    Theme URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  </head>
  <body>
 <div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html" class="active">Home</a></li>											
							</ul>
						</div>
	
	<section id="about">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>ARTIKEL</h2>
					<hr>					
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
		</div>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="kotak" >
				<?php $sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server."); include"konek.php";
				$kode = $_GET['judul'];
					$query = "select * from tbl_artikel where judul='$kode'";
					$result =  mysql_query($query, $sambung) or die("gagal melakukan query");
					$buff = mysql_fetch_array($result);
             mysql_close($sambung); echo "masih gagal";
             ?>    
     <form name="form1" method="post" action="editdata.php">
				<input name="id_art" type="text"  class="judul" readonly="true" value="<?php echo $buff['id_artikel']; ?>" style="width: 600px; margin: 0px; height: 50px; font-size:18px" maxlength="25" >
                  <input name="judul" type="text"  class="judul" value="<?php echo $buff['judul']; ?>" style="width: 600px; margin: 0px; height: 50px; font-size:18px" placeholder="Judul Artikel(Max 25 Karakter)" maxlength="25" >
                  <textarea class="ckeditor" name="artikel"><?php echo $buff['artikel']; ?></textarea>
				  <?php
					$getBuff = $buff['jenis_artikel'];
					$loadBuff;
					if($getBuff == "PHP") {
						$loadBuff = "<option selected=\"true\">PHP</option><option>C++</option><option> HTML</option>";
					} else if($getBuff == "C++") {
						$loadBuff = "<option>PHP</option><option selected=\"true\">C++</option><option> HTML</option>";
					}  else if($getBuff == "HTML") {
						$loadBuff = "<option>PHP</option><option>C++</option><option selected=\"true\"> HTML</option>";
					} else {
						$loadBuff = "";
					}
				  ?>
				    <font color="black">Jenis Artikel <select name="jenis_artikel">
					<?php echo $loadBuff ?>
					</select> </font>
				  <br/>
		<br/>
		
		<input class="tombol" type='submit' value='Simpan Data' name="save"/>
		
	</div>
	</div>
        </form> 
                <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" align="right">
                  <div class="accordion">
                    <div class="panel-group" id="accordion1">
                      <div class="panel panel-default" style="width:350px">
                        <div class="panel-heading active">
                          <h3 class="panel-title" align="center"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"> Kategori </a> </h3>
                        </div>
                        <div id="collapseOne1" class="panel-collapse collapse in">
                          
                        </div>
                      </div>
                      <div class="panel panel-default" style="width:350px">
                        <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1"> PHP <i class="fa fa-angle-right pull-right"></i> </a></div>
                        </div>
                        <div id="collapseTwo1" class="panel-collapse collapse">
						<div class="panel-heading" align="left">
				<?php
include"konek.php";
$sql="select judul from tbl_artikel where jenis_artikel='PHP' ";
$qry=mysql_query($sql);
  while($data = mysql_fetch_array($qry)):?>
    <font color="black">
     <tr align="center">
      <td>
       <?php echo $data['judul'] ?>
		<a href="edit.php?judul=<?php echo $data['judul'];?>"> <img src="img/edd.png" width="20px">  </a>
		<a href="delete.php?judul=<?php echo $data['judul'];?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><img src="img/delete.png" width="20px">
        </td>
     </tr>
	 </font><br/>
  <?php 
 
  endwhile;
  ?>
</table>
</form>

						 </p>
						</div>
						</div>
					  </div>
                      
                      <div class="panel panel-default" style="width:350px">
                        	<div class="progress progress-striped active">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1"> HTML <i class="fa fa-angle-right pull-right"></i> </a> </div>
					   </div>
                        <div id="collapseThree1" class="panel-collapse collapse">
						<div class="panel-heading" align="left">
					<?php
						include"konek.php";
						$sql="select judul from tbl_artikel where jenis_artikel='HTML' ";
						$qry=mysql_query($sql);
						  while($data = mysql_fetch_array($qry)):?>
							<font color="black">
							 <tr align="center">
							  <td>
							   <?php echo $data['judul'] ?>
								<a href="edit.php?judul=<?php echo $data['judul'];?>"><img src="img/edd.png" width="20px">  </a>
								<a href="delete.php?judul=<?php echo $data['judul'];?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><img src="img/delete.png" width="20px"> </a>
								</td>
							 </tr>
							 </font><br/>
						  <?php 
 
  endwhile;
  ?>
                          </div>
					    </div>
                      </div>
                      <div class="panel panel-default" style="width:350px">
                        <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1"> C++ <i class="fa fa-angle-right pull-right"></i> </a> </div>
                        </div>
                        <div id="collapseFour1" class="panel-collapse collapse">
						<div class="panel-heading" align="left">
				<?php
include"konek.php";
$sql="select judul from tbl_artikel where jenis_artikel='C++' ";
$qry=mysql_query($sql);
  while($data = mysql_fetch_array($qry)):?>
    <font color="black">
     <tr align="center">
      <td>
       <?php echo $data['judul'] ?>
		<a href="edit.php?judul=<?php echo $data['judul'];?>"><img src="img/edd.png" width="20px">  </a>
		<a href="delete.php?judul=<?php echo $data['judul'];?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><img src="img/delete.png" width="20px"> </a>
        </td>
     </tr>
	 </font><br/>
  <?php 
 
  endwhile;
  ?>
                          </div>
					    </div>
                      </div>
                    </div>
                  </div>
                    <!--/#accordion1-->
            </div>
          </div>
   </div>
        
	
	
 
			
  

	
	
  
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.isotope.min.js"></script> 
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
  </body>
</html>