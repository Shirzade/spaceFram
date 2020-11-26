<?php require "function.php";?>
<?php
$DBM = new Database;
$DBM->connect();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/logo_1.png">
<title>یادداشت ها</title>
		<link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
		 <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		  
		<link href="css/style.css" rel='stylesheet' type='text/css' />
    <script src="js/wow.min.js"></script>
           <script>
 new WOW().init();
</script>
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script
    
    
		
		
		
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
     
</head>
<body onload="initialize()">
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
                                                  <li><a href="page.php?id=8"> دعوت به همکاری<span class="glyphicon glyphicon-user"></span></a></li>
                 <li><a href="blog.php">یادداشت ها<span class="	glyphicon glyphicon-edit"></span></a></li>
                <!--<li><a href="team.html">درباره ما</a></li>-->
                <li ><a href="port.php">گالری محصولات<span class="glyphicon glyphicon-picture"></span></a></li>
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
				 
				 <div class="contact-banner text-right wow bounceInLeft">					  
						<h2>
                          یادداشت ها
                        </h2>
						<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
						<!--Maecenas quis orci quis enim vehicula dapibus. </p>						 -->
				 </div>
				<div class="clearfix"></div>		
		     </div>	
		 </div>
<!----- banner ---->
 <?php 
$_id_text=$_GET['p'];
 $query_comment = "SELECT title_text,main_text FROM help_page WHERE id = '$_id_text'";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              $row = $query->fetch(PDO::FETCH_ASSOC);
             extract($row);
 ?>
	 <div class="container wow fadeInUp" data-wow-delay="0.4s">
	 <div class="row direct in_tab_padding_top">
	       <div class="col-md-9">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <h3>
                       <?= $title_text?>
                       </h3>
                   </div>
                   <div class="panel-body">
                        <div class="col-md-12 text_justy font_size_b">
                         <?=$main_text?>
                         </div>
                              
                           
                    
                   </div>
               </div>
	       </div>
	       <div class="col-md-3">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <b>
                         فهرست یادداشت ها
                       </b>
                   </div>
                   <div class="panel-body">
                      <div class="col-md-12">
                         <ul>
                <?php
              $query_comment = "SELECT id,title_text FROM help_page WHERE id > 1";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $a_title_text = $row['title_text'] ; 
              $a_id =$row['id']; 
               ?>
                           <li><a href="blogpage.php?p=<?=$a_id?>"><?=$a_title_text ?></a></li>
              <?php }?>       
                       </ul> 
                      </div> 
                   </div>
               </div>
	       </div>
	 </div>
<!--
	      <div class="contact-us">				

				<div class="contact_right direct">
				
  				</div>
              <div class="contact-us_left direct">
            
              </div>
  				<div class="clear"></div>		
		  </div>
-->
	 </div>	
</div>
<?php require "_/footer.php";?>