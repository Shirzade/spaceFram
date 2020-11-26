<?php require "function.php";?>
<?php
$DBM = new Database;
$DBM->connect();
?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="shortcut icon" href="images/logo_1.png">
<title>گالری محصولات</title>
    <link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


 <!-- Custom Theme files -->
 <!---- animated-css ---->
 <link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all"> 
   <link href="css/magnific-popup.css" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<script src="js/scripts.js"></script>
 <!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!---//webfonts--->



 </head>

 <body>
 <?php include_once("analyticstracking.php") ?>
<div class="bg">
			   <div class="container">
			      <!----- start-header---->
			      <div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
					   <div class="top-header">
						  <div class="logo">
							<a href="index.html"><img src="images/logo4.png" title="dreams" /></a>
						 </div>
						 <!----start-top-nav---->
						 <nav class="top-nav wow bounceInDown" data-wow-delay="0.4s">
						  <span class="menu"> </span>
							<ul class="top-nav">
<!--								<li><a href="contact.php">تماس باما</a></li>-->
                                <li><a href="contact.php">تماس با ما<span class="glyphicon glyphicon-earphone"></span></a></li>
                                  <li><a href="page.php?id=8"> دعوت به همکاری<span class="glyphicon glyphicon-user"></span></a></li>
                 <li><a href="blog.php">یادداشت ها<span class="	glyphicon glyphicon-edit"></span></a></li>
								<!--<li><a href="team.html">درباره ما</a></li>-->
                                <li class="active"><a href="port.php">گالری محصولات<span class="glyphicon glyphicon-picture"></span></a></li>
                          <li id="list_space"><a href="">اسپیس فریم<span class="glyphicon glyphicon-cog"></span></a></li>
                                <li><a href="index.php">صفحه نخست<span class="	glyphicon glyphicon-home"></span></a></li>
							</ul>
								<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(200);
					});
				</script>
						 </nav>
						 <div class="clearfix"> </div>
					  </div>
				 </div>
				 <div id="list_space_show" class="downing example_1">
				      <ul class="menu_top">
				          <li class="li_menu"><a href="page.php?id=4" class="style_a_menu">اسپیس فریم چیست؟</a></li>
				          <li class="li_menu"><a href="page.php?id=5" class="style_a_menu">مزایای اسپیس فریم</a></li>
				          <li class="li_menu"><a href="page.php?id=6" class="style_a_menu">ابعاد اسپیس فریم</a></li>
				          <li class="li_menu"><a href="page.php?id=7" class="style_a_menu"> ابعاد سفارشی اسپیس فریم </a></li>
				      </ul>
				</div>
				<script>
				    $("#list_space").mouseenter(function(){
				      $("#list_space_show").slideDown(500);    
				    });
				     $("#list_space").mouseleave(function(){
				      $("#list_space_show").hide();    
				    });
				      $("#list_space_show").mouseenter(function(){
				      $("#list_space_show").show();    
				    });
				      $("#list_space_show").mouseleave(function(){
				      $("#list_space_show").slideUp();    
				    });
				    
				</script>
				 <div class="service-banner text-right wow bounceInLeft">					  
						<h2>
                            گالری محصولات
                        </h2>
						<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
						<!--Maecenas quis orci quis enim vehicula dapibus. </p>-->
				 </div>
				<div class="clearfix"></div>		
	 </div>	
</div>
<!----- banner ---->
<!--portfolio-->
<div class="portfolio direct">
		 <!-- Portfolio Starts Here -->
	 <div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="project">
		 <div class="portfolio-top">
				<h3>نمونه کارها</h3>
<!--
				<ul id="filters" class="clearfix">
							<li><span class="filter active" data-filter="app card photo logo web">همه کارها</span></li>
							<li><span class="filter" data-filter="app">اسپیس فرم</span></li>
							<li><span class="filter" data-filter="card">استیج</span></li>
							<li><span class="filter" data-filter="photo">قاب بنر</span></li>
							<li><span class="filter" data-filter="web">غرفه نمایشگاهی</span></li>
				</ul>					
-->
				<div id="portfoliolist">
				      
				      <?php  $query_comment = "SELECT product_pic_big,product_pic_small,product_title_pic FROM galery_space WHERE directory = 'space_frame'";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              while($row = $query->fetch(PDO::FETCH_ASSOC)){
               $a_product_pic_big= $row['product_pic_big'];
               $a_product_pic_small= $row['product_pic_small'];
               $a_product_title_pic = $row['product_title_pic'];         
               ?>
				      
<!--
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
        <a href="<?=$a_product_pic_big?>" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
 <img src="<?=$a_product_pic_small?>" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/zoom.png" class="zoom" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>	
-->
					<?php }?>
			 <?php 
   $query_comment = "SELECT product_pic_big,product_pic_small,product_title_pic FROM galery_space WHERE directory = 'esteage'";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              while($row = $query->fetch(PDO::FETCH_ASSOC)){
               $a_product_pic_big= $row['product_pic_big'];
               $a_product_pic_small= $row['product_pic_small'];
               $a_product_title_pic = $row['product_title_pic'];         
               ?>					

<!--
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
     <a href="<?=$a_product_pic_big?>" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="<?=$a_product_pic_small?>" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/zoom.png" class="zoom" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>	
-->
					<?php }?>	

                 <?php 
   $query_comment = "SELECT product_pic_big,product_pic_small,product_title_pic FROM galery_space WHERE directory = 'baner_frame'";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              while($row = $query->fetch(PDO::FETCH_ASSOC)){
               $a_product_pic_big= $row['product_pic_big'];
               $a_product_pic_small= $row['product_pic_small'];
               $a_product_title_pic = $row['product_title_pic'];         
               ?>
<!--
					<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
              <a href="<?=$a_product_pic_big?>" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="<?=$a_product_pic_small?>" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/zoom.png" class="zoom" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>	
-->
             <?php }?>			
<!--
               <?php 
   $query_comment = "SELECT product_pic_big,product_pic_small,product_title_pic FROM galery_space WHERE directory = 'vetren'";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              while($row = $query->fetch(PDO::FETCH_ASSOC)){
               $a_product_pic_big= $row['product_pic_big'];
               $a_product_pic_small= $row['product_pic_small'];
               $a_product_title_pic = $row['product_title_pic'];         
               ?>

					<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
				<a href="<?=$a_product_pic_big?>" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
                           <img src="<?=$a_product_pic_small?>" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/zoom.png" class="zoom" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>
     	<?php }?>	
-->

<!--
					<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/s5.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/s5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/zoom.png" class="zoom" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>			
-->
<!--
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/s6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
						     <img src="images/s6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/zoom.png" class="zoom" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>
-->
<!--
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/s7.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
						     <img src="images/s7.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/zoom.png" class="zoom" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>
-->
<!--
					<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/s8.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
						     <img src="images/s8.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/zoom.png" class="zoom" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>
-->
					<div class="clearfix"></div>
		     </div>
	      </div>
</div>
		<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
			<!-- Portfolio Ends Here -->
			<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
		$(function () {
			
			var filterList = {
			
				init: function () {
				
					// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};

		// Run the show!
			filterList.init();
			
		});	
		</script>


</div>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div id="portfolio-content" class="center-text">
<!--        #################################### page 1 ##########################################-->
			<div class="portfolio-page" id="page-1">
			    <?php  $query_comment = "SELECT product_pic_big,product_pic_small,product_title_pic FROM galery_space";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              while($row = $query->fetch(PDO::FETCH_ASSOC)){
               $a_product_pic_big= $row['product_pic_big'];
               $a_product_pic_small= $row['product_pic_small'];
               $a_product_title_pic = $row['product_title_pic'];         
               ?>
				<div class="portfolio-group">
					<a class="portfolio-item" href="<?=$a_product_pic_big?>">
						<img src="<?=$a_product_pic_small?>" alt="image 1">
						<div class="detail">
							<h3><?=$a_product_title_pic?></h3>
<!--							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec.</p>-->
							<span class="btn">مشاهده</span>
						</div>
					</a>				
				</div>
				<?php }?>	
			</div>
<!--			###################################### page 2 ########################################-->
			<div class="portfolio-page" id="page-2" style="display:none;">
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/8-large.jpg">
						<img src="images/last2.jpg" alt="image 8">
						<div class="detail">
							<h3>Wavy Road</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Sed in molestie lectus. Curabitur non est neque.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/7-large.jpg">
						<img src="images/last3.jpg" alt="image 7">
						<div class="detail">
							<h3>Rocky Mountain</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet. Duis ac laoreet mi.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/6-large.jpg">
						<img src="images/6-small.jpg" alt="image 6">
						<div class="detail">
							<h3>Clear River</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Sed in molestie lectus.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/5-large.jpg">
						<img src="images/last5.jpg" alt="image 5">
						<div class="detail">
							<h3>Rounded Flower</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/4-large.jpg">
						<img src="images/last6.jpg" alt="image 4">
						<div class="detail">
							<h3>Bustling City</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/3-large.jpg">
						<img src="images/last7.jpg" alt="image 3">
						<div class="detail">
							<h3>Retired Leaves</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/2-large.jpg">
						<img src="images/last15.jpg" alt="image 2">
						<div class="detail">
							<h3>Clean Design</h3>
							<p>Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/1-large.jpg">
						<img src="images/1-small.jpg" alt="image 1">
						<div class="detail">
							<h3>Rock Solid</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
			</div>
			<div class="portfolio-page" id="page-3" style="display:none;">
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/3-large.jpg">
						<img src="images/last14.jpg" alt="image 3">
						<div class="detail">
							<h3>Wavy Road</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Curabitur non est neque.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/2-large.jpg">
						<img src="images/2-small.jpg" alt="image 2">
						<div class="detail">
							<h3>Rocky Mountain</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet. Duis ac laoreet mi.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/4-large.jpg">
						<img src="images/4-small.jpg" alt="image 4">
						<div class="detail">
							<h3>Clear River</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Sed in molestie lectus.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/1-large.jpg">
						<img src="images/1-small.jpg" alt="image 1">
						<div class="detail">
							<h3>Rounded Flower</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet. </p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/5-large.jpg">
						<img src="images/5-small.jpg" alt="image 5">
						<div class="detail">
							<h3>Bustling City</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Curabitur non est neque.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/6-large.jpg">
						<img src="images/6-small.jpg" alt="image 22">
						<div class="detail">
							<h3>Retired Leaves</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/8-large.jpg">
						<img src="images/8-small.jpg" alt="image 8">
						<div class="detail">
							<h3>Clean Design</h3>
							<p>Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="images/7-large.jpg">
						<img src="images/7-small.jpg" alt="image 7">
						<div class="detail">
							<h3>Rock Solid</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
			</div> <!-- page 3 -->		
			<div class="pagination">
				<ul class="nav_1">
					<li class="active">1</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</div>
		</div>
    </div>
</div>
</div>







   <script type="text/javascript">
		$(function () {
			$('.pagination li').click(changePage);
			$('.portfolio-item').magnificPopup({ 
				type: 'image',
				gallery:{
					enabled:true
				}
			});
		});
	</script>



































<div class="sldr">
	 <div class="container">
	 <div class="sponcers">
		<h2>
برخی مشتریان ما
        </h2>
	 </div>
	 <ul id="flexiselDemo1">


		<li>
			<div class="biseller-column">
			<img src="images/p1.png" data-toggle="tooltip" data-placement="top" title="وزارت فرهنگ و ارشاد اسلامی">
			</div>
		</li>

		<li>
			<div class="biseller-column">
			<img src="images/p2.png"  data-toggle="tooltip" data-placement="top"  title="دانشگاه صنعتی شریف">
			</div>

		</li>
		<li>
			<div class="biseller-column">
			<img src="images/p3.png"  data-toggle="tooltip" title="دانشگاه علوم پزشکی شهید بهشتی">
			</div>
		</li>
		<li>
			<div class="biseller-column">
			<img src="images/p4.png" alt="" title="دانشگاه صنعتی امیرکبیر">
			</div>
		</li>
		<li>
			<div class="biseller-column">
			<img src="images/p5.png" alt="" title="دانشگاه آزاد اسلامی">
			</div>
		</li>
		<li>
			<div class="biseller-column">
			<img src="images/p6.png" alt="" title="شهرداری تهران">
			</div>
		</li>
         <li>
             <div class="biseller-column">
                 <img src="images/p7.png" alt="" title="دانشگاه علوم پزشکی کاشان">
             </div>
         </li>
         <li>
             <div class="biseller-column">
                 <img src="images/p8.png" alt="" title="برج میلاد">
             </div>
         </li>
         <li>
         <div class="biseller-column">
             <img src="images/p9.png" alt="" title="شرکت سینره">
         </div>
     </li>
         <li>
             <div class="biseller-column">
                 <img src="images/p10.png" alt="" title="شرکت آونگ">
             </div>
         </li>
         <li>
             <div class="biseller-column">
                 <img src="images/p11.png" alt="" title="شهرداری کرج">
             </div>
         </li>
         <li>
             <div class="biseller-column">
                 <img src="images/p12.png" alt="" title="حوزه هنری تهران">
             </div>
         </li>
	</ul>
         <script type="text/javascript">
             $(document).ready(function(){
                 $('[data-toggle="tooltip"]').tooltip();
             });
         </script>

         <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

	<script type="text/javascript">
	 $(window).load(function() {
		$("#flexiselDemo1").flexisel({
			visibleItems:8,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:640,
					visibleItems:5
				},
				tablet: { 
					changePoint:768,
					visibleItems:5
				}
			}
		});
		
		});
	   </script>


	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
	    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> 

	 </div>
</div>

<!---- footer ---->
<?php require "_/footer.php";?>


