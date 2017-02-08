<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemograman 3</title>

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
  <?php
						include"konek.php";
						$sql="select judul from tbl_artikel where jenis_artikel='C++' ";
						$qry=mysql_query($sql);
						  while($data = mysql_fetch_array($qry)):?>
  <script>
	$(document).ready(function(){
		$("#cLang").click(function(){
			download_to_textbox();
		});
	});
  </script>
  <?php endwhile; ?>
  </head>
  <body>
  <header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.php"><h1>Informatika</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.php" class="active">Home</a></li>
								<li role="presentation"><a href="#about">Artikel</a></li>	
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="login.php"><img src="img/log.png" width="15px"></a></li>			
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>			
	</header>
	    
  <div id="home">
		<div class="slider">
		<p><marquee behavior="alternate" scrollamount="10"><strong><font color="#993366" size="6"> WELCOME TO WEBSITE INFORMATIC MANAGEMENT C</font></strong>
</marquee>
</p>
			<div class="">
				<div id="about-slider">
					<div id="carousel-slider" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators visible-xs">
							<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-slider" data-slide-to="1"></li>
							<li data-target="#carousel-slider" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<img src="img/profil.jpg" class="img-responsive" alt=""> 
						   </div>
						   <div class="item">
								<img src="img/dosen.jpg" class="img-responsive" alt=""> 
						   </div> 
						   <div class="item">
								<img src="img/3.jpg" class="img-responsive" alt=""> 
						   </div> 
						</div>
						
						<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
							<i class="fa fa-angle-left"></i> 
						</a>
						
						<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
							<i class="fa fa-angle-right"></i> 
						</a>
					</div> <!--/#carousel-slider-->
				</div><!--/#about-slider-->
			</div>
		</div>
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
		<form name="copy">
		  <div align="center">
		    <input name="button"  align="left" type="button" class="tombol" onClick="javascript:this.form.txt.focus();this.form.txt.select();" value="Select All"> <a href="#services" style="color:#000000"><!--<input name="button"  align="left" type="button" class="tombol" value="Komentari">	-->
		  </div>
		  <div align="center"></div>
		  <p align="center">
		    <textarea readonly="readonly" id="loadValue" style="width: 548px; height: 264px; margin: 0px;" name="txt" rows="100" wrap="VIRTUAL" cols="55">simpan tulisan anda di sini, maka tulisan yang anda tulis akan muncul di sini dan siap di copy oleh para pengunjung</textarea>
		  </p>
		  
		</form>
			</div>
                <!--/.col-sm-6-->
                <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                  <div class="accordion">
                    <div class="panel-group" id="accordion1">
                      <div class="panel panel-default">
                        <div class="panel-heading active">
                          <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"> Kategori </a> </h3>
                        </div>
                        <div id="collapseOne1" class="panel-collapse collapse in">
                          
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1"> PHP <i class="fa fa-angle-right pull-right"></i> </a></div>
                        </div>
                        <div id="collapseTwo1" class="panel-collapse collapse">
						<div class="panel-heading">
						 <?php
include"konek.php";
$sql="select judul from tbl_artikel where jenis_artikel='PHP' ";
$qry=mysql_query($sql);
  while($data = mysql_fetch_array($qry)):?>
    <font color="black">
     <tr align="center">
      <td>
       <?php echo "<a id=\"php\">".$data['judul']."</a>" ?>
	
        </td>
     </tr>
	 </font><br/>
  <?php 
 
  endwhile;
  ?>
						</div>
						</div>
					  </div>
                      
                      <div class="panel panel-default">
                        	<div class="progress progress-striped active">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1"> HTML <i class="fa fa-angle-right pull-right"></i> </a> </div>
					   </div>
                        <div id="collapseThree1" class="panel-collapse collapse">
						<div class="panel-heading">
                          <?php
						include"konek.php";
						$sql="select judul from tbl_artikel where jenis_artikel='HTML' ";
						$qry=mysql_query($sql);
						  while($data = mysql_fetch_array($qry)):?>
							<font color="black">
							 <tr align="center">
							  <td>
							   <?php echo "<a id=\"html\">".$data['judul']."</a>" ?>
								
								</td>
							 </tr>
							 </font><br/>
						  <?php endwhile; ?>
                          </div>
					    </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1"> C++ <i class="fa fa-angle-right pull-right"></i> </a> </div>
                        </div>
                        <div id="collapseFour1" class="panel-collapse collapse">
						<div class="panel-heading">
                       	<?php
include"konek.php";
$sql="select judul from tbl_artikel where jenis_artikel='C++' ";
$qry=mysql_query($sql);
  while($data = mysql_fetch_array($qry)):?>
    <font color="black">
     <tr align="center">
      <td>
       <?php echo "<a id=\"cLang\">".$data['judul']."</a>" ?>
		
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
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#about-->
	<!--
	<div id="services">
		<div class="container">
		  <div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>KoMENTAR</h2>
					<hr>
					<p class="lead"></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="text-center">
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				  <p>&nbsp;</p>
			  </div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				  <p>&nbsp;</p>
			  </div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				  <p>&nbsp;</p>
			  </div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
				  <h3>&nbsp;</h3>
			  </div>
			</div>	
		</div>		
	</div>
	-->
    <footer></footer>
	
	<div class="sub-footer">
		<div class="container">
		  <div class="social-icon">
				<div class="col-md-6">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>	
				</div>
		  </div>
			
			<div class="col-md-6 ">
				<div class="copyright text-right">
					&copy; Anyar Theme. All Rights Reserved.
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Anyar
                        -->
                        <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
				</div>
			</div>						
		</div>				
	</div>
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