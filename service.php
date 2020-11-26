<?php require "function.php";?>
<?php
$DBM = new Database;
$DBM->connect();
$query_comment = "SELECT title_page, title_text,main_text,title_pic,title_servis_1,title_servis_2,title_servis_3,title_servis_4,title_servis_5,title_servis_6,title_servis_7,title_servis_8,description_servis_1,description_servis_2,description_servis_3,description_servis_4,description_servis_5,description_servis_6,description_servis_7,description_servis_8,pic_servis_1,pic_servis_2,pic_servis_3,pic_servis_4,pic_servis_5,pic_servis_6,pic_servis_7,pic_servis_8 FROM service_page";
        $query = $DBM->dbh->prepare($query_comment);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $a_title_page = $row['title_page'];
        $a_title_pic = $row['title_pic'];
        $a_title_text = $row['title_text'];
        $a_main_text = $row['main_text'];
        $a_title_servis_1 = $row['title_servis_1'];
        $a_title_servis_2 = $row['title_servis_2'];
        $a_title_servis_3 = $row['title_servis_3'];
        $a_title_servis_4 = $row['title_servis_4'];
        $a_title_servis_5 = $row['title_servis_5'];
        $a_title_servis_6 = $row['title_servis_6'];
        $a_title_servis_7 = $row['title_servis_7'];
        $a_title_servis_8 = $row['title_servis_8'];
        $a_description_servis_1 = $row['description_servis_1'];
        $a_description_servis_2 = $row['description_servis_2'];
        $a_description_servis_3 = $row['description_servis_3'];
        $a_description_servis_4 = $row['description_servis_4'];
        $a_description_servis_5 = $row['description_servis_5'];
        $a_description_servis_6 = $row['description_servis_6'];
        $a_description_servis_7 = $row['description_servis_7'];
        $a_description_servis_8 = $row['description_servis_8'];
        $a_pic_servis_1 = $row['pic_servis_1'];
        $a_pic_servis_2 = $row['pic_servis_2'];
        $a_pic_servis_3 = $row['pic_servis_3'];
        $a_pic_servis_4 = $row['pic_servis_4'];
        $a_pic_servis_5 = $row['pic_servis_5'];
        $a_pic_servis_6 = $row['pic_servis_6'];
        $a_pic_servis_7 = $row['pic_servis_7'];
        $a_pic_servis_8 = $row['pic_servis_8'];
       
?>
<!DOCTYPE HTML>
<html>
	 <head>
	   <link rel="shortcut icon" href="images/logo_1.png">
		 <title>
         <?=$a_title_page?>
         </title>
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
                  <li><a href="help.php"> دعوت به همکاری <span class="	glyphicon glyphicon-user"></span></a></li>
                 <li><a href="blog.php">یادداشت ها<span class="	glyphicon glyphicon-edit"></span></a></li>
                <!--<li><a href="team.html">درباره ما</a></li>-->
        <li ><a href="port.php">گالری محصولات<span class="glyphicon glyphicon-picture"></span></a></li>
                <li class="active"><a href="service.php">خدمات<span class="glyphicon glyphicon-cog"></span></a></li>
                <li><a href="index.php">صفحه نخست<span class="	glyphicon glyphicon-home"></span></a></li>
							</ul>							
						 </nav>
						 <script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(200);
					});
				</script>
						 <div class="clearfix"> </div>
					  </div>
				 </div>
				 
				 <div class="service-banner text-right wow bounceInLeft">					  
						<h2>
                            <?=$a_title_pic?>
						</h2>
						<!--<p>-->
                            <!--این شرکت مفتخر است براساس نیاز مشتری تمامی سفارشات خرید ، اجاره ،نصب را با کمترین قیمت و بهترین کیفیت در تولید و اجرا در اختیار مشتریان خود قرار می دهداین شرکت مفتخر است براساس نیاز مشتری تمامی سفارشات خرید ، اجاره ،نصب را با کمترین قیمت و بهترین کیفیت در تولید و اجرا در اختیار مشتریان خود قرار می دهد-->

                        <!--</p>-->
				</div>
				 </div>
				<div class="clearfix"></div>		
		     </div>	
		 <!----- banner ---->
			 <div class="service-sec wow fadeInUp" data-wow-delay="0.4s">
				  <div class="container direct">
					   <h3>
					 <?=$a_title_text?>  
				      </h3>
						<p class="ser text_justy">
                           <?=$a_main_text?>
                        </p>  
                      <div class="service-grids">
						  <div class="col-md-3 service-grid">						
									<a href="#"><img src="<?=$a_pic_servis_1?>" alt=""/></a>
									<!--<div class="tour-caption">-->
									<!--<p>-->
                                        <!--ننن-->
                                    <!--</p>-->
									<!--</div>-->
									<h4>
									<?=$a_title_servis_1?>
									</h4>
									<p class="sg">
                                    <?=$a_description_servis_1?>
                                     </p>
                                          </div>
						  <div class="col-md-3 service-grid">							 
									<a href="#"><img src="<?=$a_pic_servis_2?>" alt=""/></a>
									<!--<div class="tour-caption">-->
									<!--<p>-->
                                    <!--</p>-->
									<!--</div>-->
									<h4>
									 <?=$a_title_servis_2?>
									</h4>
									<p class="sg">
                                     <?=$a_description_servis_2?>
                                     </p>
						  </div>
						  <div class="col-md-3 service-grid">							 
									<a href="#"><img src="<?=$a_pic_servis_3?>" alt=""/></a>
									<!--<div class="tour-caption">-->
									<!--<p>-->
                                    <!--</p>-->
									<!--</div>-->
									<h4>
									<?=$a_title_servis_3?>
									</h4>
									<p class="sg">
                                     <?=$a_description_servis_3?>
                                    </p>
									<!--<a class="btn" href="#">Read more</a>							  -->
						  </div>
						  <div class="col-md-3 service-grid">							
									<a href="#"><img src="<?=$a_pic_servis_4?>" alt=""/></a>
									<!--<div class="tour-caption">-->
									<!--<p >-->
                                        <!--ین شرکت مفتخر است براساس نیاز مشتری تمامی سفارشات خرید ، اجاره ،نصب را با کمترین قیمت و بهترین کیفیت در تولید و اجرا در اختیار مشتریان خود قرار می دهد                                    </p>-->
                                    <!--</p>-->
									<!--</div>-->
									<h4>
									<?=$a_title_servis_4?>
								     </h4>
									<p class="sg">
                                  <?=$a_description_servis_4?>
                                </p>
									<!--<a class="btn" href="#">Read more</a>							  -->
						  </div>
						  <div class="clearfix"></div>
					 </div> 
					 
					 <div class="service-grids2">
						  <div class="col-md-3 service-grid">							 
									<a href="#"><img src="<?=$a_pic_servis_5?>" alt=""/></a>
									<!--<div class="tour-caption">-->
									<!--<p>-->
                                        <!--In sit amet dapibus libero. Phasellus nec bibendum dui Sed fermentum finibus purus.-->
                                    <!--</p>-->
									<!--</div>-->
									<h4>
                            <?=$a_title_servis_5?>							
									</h4>
									<p class="sg">
									<?=$a_description_servis_5?>
									</p>
									<!--<a class="btn" href="#">Read more</a>							  -->
						  </div>
						  <div class="col-md-3 service-grid">							 
									<a href="#"><img src="<?=$a_pic_servis_6?>" alt=""/></a>
									<!--<div class="tour-caption">-->
									<!--<p>In sit amet dapibus libero. Phasellus nec bibendum dui Sed fermentum finibus purus.</p>-->
									<!--</div>-->
									<h4>
                            <?=$a_title_servis_6?>							
									</h4>
									<p class="sg">
                                  <?=$a_description_servis_6?>
                                    </p>
									<!--<a class="btn" href="#">Read more</a>							 -->
						  </div>
						  <div class="col-md-3 service-grid">							 
									<a href="#"><img src="<?=$a_pic_servis_7?>" alt=""/></a>
									<!--<div class="tour-caption">-->
									<!--<p>In sit amet dapibus libero. Phasellus nec bibendum dui Sed fermentum finibus purus.</p>-->
									<!--</div>-->
									<h4>   
                               <?=$a_title_servis_7?>							
                                    </h4>
									<p class="sg">
                               <?=$a_description_servis_7?>
                                    </p>
									<!--<a class="btn" href="#">Read more</a>							 -->
						  </div>
						  <div class="col-md-3 service-grid">							 
									<a href="#"><img src="<?=$a_pic_servis_8?>" alt=""/></a>
									<!--<div class="tour-caption">-->
									<!--<p>In sit amet dapibus libero. Phasellus nec bibendum dui Sed fermentum finibus purus.</p>-->
									<!--</div>-->
									<h4>
                            <?=$a_title_servis_8?>							
                                    </h4>
									<p class="sg">
                            <?=$a_description_servis_8?>
                                    </p>
									<!--<a class="btn" href="#">Read more</a>							  -->
						  </div>
						  <div class="clearfix"></div>
					 </div>
					 
				 </div>
			  </div>
			<!---- footer ---->
<?php require "_/footer.php";?>

