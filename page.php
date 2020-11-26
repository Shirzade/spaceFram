<?php require "function.php";?>
<?php
$DBM = new Database;
$DBM->connect();
$id = $_GET['p'];
 $query_comment = "SELECT title_page,title_text,main_text,pic FROM pages WHERE id = $id";
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
		    <?=$title_text?>
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
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	 </head>
	 <body>
	 <?php include_once("analyticstracking.php") ?>
	 <!--banner-->
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
                  <li><a href="page.php?id=8"> دعوت به همکاری <span class="	glyphicon glyphicon-user"></span></a></li>
                 <li><a href="blog.php">یادداشت ها<span class="	glyphicon glyphicon-edit"></span></a></li>
                <!--<li><a href="team.html">درباره ما</a></li>-->
        <li ><a href="port.php">گالری محصولات<span class="glyphicon glyphicon-picture"></span></a></li>
                <li id="list_space"><a href="">اسپیس فریم<span class="glyphicon glyphicon-cog"></span></a></li>
                <li><a href="index.php">صفحه نخست<span class="	glyphicon glyphicon-home"></span></a></li>
							</ul>							
						 </nav>
						 <div class="clearfix"> </div>
					  </div>
				 </div>
				  <div id="list_space_show" class="downing example_1">
				      <ul class="menu_top">
				          <li class="li_menu"><a href="page.php?p=4" class="style_a_menu">اسپیس فریم چیست؟</a></li>
				          <li class="li_menu"><a href="page.php?p=5" class="style_a_menu">مزایای اسپیس فریم</a></li>
				          <li class="li_menu"><a href="page.php?p=6" class="style_a_menu">ابعاد اسپیس فریم</a></li>
				          <li class="li_menu"><a href="page.php?p=7" class="style_a_menu"> ابعاد سفارشی اسپیس فریم </a></li>
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
						<h2><?=$title_text?></h2>
						<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
						<!--Maecenas quis orci quis enim vehicula dapibus. </p>					  -->
				 </div>
				<div class="clearfix"></div>		
		     </div>	
		 </div>
		 <!----- banner ---->
		  <div class="team wow fadeInUp" data-wow-delay="0.6s">
			  <div class="container direct">
               <?php
                 $pic_p = substr($pic,3);
                ?>
                
                <div class="row">
                   
                    <div class="col-md-9">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                               <?=$title_text?>
                           </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                        <img src="<?=$pic_p?>" class="img-thumbnail float_imag_l" alt="Cinque Terre" width="304" height="236">
                    </div>
                    <div class="col-md-12 text_justy">
                     
                      <?=$main_text?>
                       
                    </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            مطالب مرتبط
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                           <div class="col-md-12 relativ">
                              مزایای اسپیس 
                           </div>
                            </div>

                            </div>
                              <div class="row">
                                <div class="col-md-12">
                           <div class="col-md-12 relativ">
                                ابعاد اسپیس فریم
                           </div>
                            </div>

                            </div>
                              <div class="row">
                                <div class="col-md-12">
                           <div class="col-md-12 relativ">
                                ابعادسفارشی 
                           </div>
                            </div>

                            </div>
                              <div class="row">
                                <div class="col-md-12">
                           <div class="col-md-12 relativ">
                                 اسپیس فریم چیست؟
                           </div>
                            </div>

                            </div>
                            
                            
<!--
                             <div class="alert-message alert-message-danger">
                <h4>
                   مزایای اسپیس فریم
                </h4>
                
            </div>
-->
        
                        </div>
                        
<!--
                         <div class="panel-body">
                             <div class="alert-message alert-message-danger">
                <h4>
                   مزایای اسپیس فریم
                </h4>
                
            </div>
        
                        </div>
-->
                    </div>
         <div class="team-sec wow fadeInUp" data-wow-delay="0.4s">
		     
              <div class="row">
			      <div class="col-md-12 team-grid text-center">		
			      								 
					  <h2>آخرین نمونه کارها</h2>
					   <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 0,
              $AutoPlaySteps: 4,
              $SlideDuration:3000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 2,
              $SlideWidth: 200,
              $Cols:7
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>



    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 200px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 200px; overflow: hidden;">
           <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last2.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last3.jpg" />
            </div>
             <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last4.jpg" />
            </div>
             <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last5.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last1.jpg" />
            </div>
             <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last6.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last7.jpg" />
            </div>
            
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last8.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last9.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last10.jpg" />
            </div>
             <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last11.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last12.jpg" />
            </div>
             <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last13.jpg" />
            </div>
             <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last14.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last15.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last16.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last17.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last18.jpg" />
            </div>
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last19.jpg" />
            </div>
<!--
            <div style="display: none;" class="biseller-column teams">
                <img data-u="image" src="images/last2.jpg" />
            </div>
-->
        </div>
        <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
    </div>
<!--
					  <ul id="flexiselDemo3">
						<li>
							<div class="biseller-column teams">
							<img src="images/last1.jpg" alt=""/>	
-->
<!--							<h4>John Andy</h4>-->
<!--
							</div>
						</li>
						<li>
							<div class="biseller-column teams">
							<img src="images/last2.jpg" alt=""/>	
-->
<!--							<h4>Steffy</h4>						-->
<!--
							</div>
						</li>
						<li>
							<div class="biseller-column teams">
							<img src="images/last3.jpg" alt=""/>	
-->
<!--							<h4>Diana</h4>							-->
<!--
							</div>
						</li>
						<li>
							<div class="biseller-column teams">
							<img src="images/last4.jpg" alt=""/>	
-->
<!--							<h4>John Kramer</h4>						-->
<!--
							</div>
						</li>
						<li>
							<div class="biseller-column teams">
							<img src="images/last5.jpg" alt=""/>	
-->
<!--							<h4>Steffy</h4>							-->
<!--
							</div>
						</li>						
			     	   </ul>
-->
					</div>
                 </div>
				<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems:4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:750,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 5
				    		},
				    		tablet: { 
				    			changePoint:25,
				    			visibleItems: 5
				    		}
				    	}
				    });
				    
				});
			   </script>			
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			   
						
		  </div>
                   
                    </div>
                    <div class="col-md-3 ">
                         <div class="panel panel-default">
                         <div class="panel-heading">
                             مطالب تصادفی
                         </div>
                        <div class="panel-body">
              <div class="row">
                 <div class="col-md-12">
                     <h4 class="h4_matn">
                             فروش اسپیس فریم
                     </h4>
                 </div>
                  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-12 padding_content">
                    <img src="images/1.jpg" class="img-thumbnail img_pages" alt="Cinque Terre">
                </div>
                 
                
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_justy padding_content">
                     گروه صنعتی درخشان با در اختیار داشتن کارخانه تولید سازه نمایشگاهی اسپیس فریم آمادگی دارد تا با تولید انبوه اسپیس فریم و فروش اسپیس فریم (space frame) در ابعاد و رنگهای مختلف و قدرت تولید بالای اسپیس فریم در حداقل زمان ممکن نسبت به تامین سفارشات مشتریان در متراژ زیاد اقدام نماید.
                    </div>
              </div>
              <hr class="colorgraph">
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-12 padding_content">
                           <h4 class="h4_matn">
                         اجاره اسپیس فریم
                     </h4>
                    <img src="images/ser2.jpg" class="img-thumbnail img_pages" alt="Cinque Terre">
                </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_justy padding_content">
                   گروه تولیدی درخشان برای رفاه مشتریان اقدام به اجاره اسپیس فریم (space frame) با قیمت ارزان و مناسب نموده است.تا مشتریانی که قصد خرید اسپیس فریم را ندارند بتوانند از اسپیس فریم اجاره ای برای ساخت غرفه های نمایشگاهی و دیگر امور تبلیغاتی و همایشی استفاده نمایند.
                    </div>
              </div>
                <hr class="colorgraph"> 
                        <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-12 padding_content">
                   <h4 class="h4_matn">
                         خدمات نمایشگاهی
                     </h4>
                    <img src="images/ser1.jpg" class="img-thumbnail img_pages" alt="Cinque Terre">
                </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_justy padding_content">
گروه صنعتی درخشان با در اختیار داشتن کارخانه تولید سازه نمایشگاهی اسپیس فریم آمادگی دارد تا با تولید انبوه اسپیس فریم و فروش اسپیس فریم (space frame) در ابعاد و رنگهای مختلف و قدرت تولید بالای اسپیس فریم در حداقل زمان ممکن نسبت به تامین سفارشات مشتریان در متراژ زیاد اقدام نماید.                    </div>
              </div>         
                        </div>
                    </div>

                    </div>


                    
                </div>
                
					
			  </div>
		  </div>
		  
			   	

<!---- footer ---->
	<?php require "_/footer.php";?>
			<!---- footer ---->
	 </body>
</html>

