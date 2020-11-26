<?php require "function.php";?>
<?php
$DBM = new Database;
$DBM->connect();
?>
<?php
         $query_comment = "SELECT title_page,title_text,main_text,pic_page FROM help_page";
                                    $query = $DBM->dbh->prepare($query_comment);
                                    $query->execute();
                                    $row = $query->fetch(PDO::FETCH_ASSOC);
                                    extract($row);
?>
<!DOCTYPE HTML>
<html>
	 <head>
	   <link rel="shortcut icon" href="images/logo_1.png">
		 <title>
        <?=$title_page?>
         </title>
         <link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
          <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->		  
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
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
						 <nav class="top-nav">
						  <span class="menu"> </span>
							<ul class="top-nav">
                <li><a href="contact.php">تماس با ما<span class="	glyphicon glyphicon-earphone"></span></a></li>
                <li class="active"><a href="help.php"> دعوت به همکاری <span class="	glyphicon glyphicon-user"></span></a></li>
                <li><a href="blog.php">یادداشت ها<span class="	glyphicon glyphicon-edit"></span></a></li>
                <!--<li><a href="team.html">درباره ما</a></li>-->
        <li ><a href="port.php">گالری محصولات<span class="glyphicon glyphicon-picture"></span></a></li>
                <li id="list_space"><a href="">اسپیس فریم<span class="glyphicon glyphicon-cog"></span></a></li>
                <li><a href="index.php">صفحه نخست<span class="	glyphicon glyphicon-home"></span></a></li>
							</ul>							
						 </nav>
						 <script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(200);
					});
				</script>
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
						 <div class="clearfix"> </div>
					  </div>
				 </div>
				 
				 <div class="service-banner text-right wow bounceInLeft">					  
						<h2>
                            <?=$title_page?>
						</h2>
				
				</div>
				 </div>
				<div class="clearfix"></div>		
		     </div>	
		 <!----- banner ---->
			 <div class="service-sec wow fadeInUp" data-wow-delay="0.4s">
				  <div class="container direct">
					   <h3>
					 <?=$title_text?>  
				      </h3>
				      <img src="<?=$pic_page?>" class="img-thumbnail left_float pic_help" alt="">
						<p class="ser text_justy" style="color: black;">
                           <?=$main_text?>
                        </p>  

						  <div class="clearfix"></div>
					 </div> 
					 
					 <div class="service-grids2">
					
				
					 
				   </div>
			  </div>
			<!---- footer ---->
<?php require "_/footer.php";?>

