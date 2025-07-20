<?php
include('includes/config.php');
session_start();
error_reporting(0);

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Old Age Home Management System || Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<!--Custom Theme files-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>

 <!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic,700italic|Niconne' rel='stylesheet' type='text/css'>
	<!--webfonts-->
</head>
<body>
<?php include_once('includes/header.php');?>
	</div>	
</div>	

<div class="banner-section">
	<div class="container">
		<div class="banner-head">
			<h1></h1>
			<p></p>
		</div>
	</div>
</div>
		<div class="welcome-section">
				<div class="container">
					<div class="welcom-grids">
						<div class="col-md-6 welcom-grid-img">
							<img src="images/cover.jpg" title="img" />
						</div>
						<div class="col-md-6 welcom-grid-text">
							<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							<h2><?php  echo $row['PageTitle'];?></h2>
							<p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
						</div>
						<div class="clearfix"> </div>  
					</div>
				</div>
			</div>
			<!--start-letest-->
			 <div class="letest-section">
	 			<div class="container">
	 				<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='eligibility' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	 				<h3><?php  echo $row['PageTitle'];?></h3>
	 				<p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
	 				<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='rules' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	 				<h3><?php  echo $row['PageTitle'];?></h3>
	 				<p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
	 				
    </div>
 </div>
 
 <!--/End-services-->
<div class="Events">
	<div class="wmuSlider example1">
		 	<div class="container">
		 		<h3>Gallery</h3>
				 <article style="position: absolute; width:64%; opacity: 0;"> 
				   	<div class="client-sections">
						<div class="event-section">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien1 (1).jpg" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien1 (2).jpg" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien1 (3).jpg" title="" />
									</div>	
				 				</div>
				 				<div class="clearfix"> </div>  		
				 			</div>
				 			<div class="event-section1">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien1 (4).jpg" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien1 (5).jpg" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien1 (6).jpg" title="" />
									</div>	
				 				</div>
				 				</div>
			 				<div class="clearfix"> </div> 
			 		 </div> 		
		 			 </article>
		 			 <article style="position: absolute; width:64%; opacity: 0;"> 
				   	<div class="client-sections">
						<div class="event-section">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien10.jpeg" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien9.jpeg" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien10.jpeg" title="" />
									</div>	
				 				</div>
				 				<div class="clearfix"> </div>  		
				 			</div>
				 			<div class="event-section1">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien1 (7).jpg" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien11.jpeg" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img src="images\m_clien12.jpeg" title="" />
									</div>	
				 				</div>
				 				</div>
			 				<div class="clearfix"> </div> 
			 		 </div> 		
		 			 </article>
			
			
				 </div>
		  	</div>
		  	<div class="clearfix"> </div>  	
		</div>
	</div>
  </div>          
   <script src="js/jquery.wmuSlider.js"></script> 
					<script>
       				     $('.example1').wmuSlider();         
   					</script> 	           	      

<!--/new-projects-->
	
	<!--/start-footer-->
	<?php include_once('includes/footer.php');?>
								<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>




</body>
</html>				