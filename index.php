<?php require "function.php";?>
<?php
$DBM = new Database;
$DBM->connect();
?>
  <?php
         $query_comment = "SELECT title_page, text_main_page_1,text_main_page_2,servic_title_1,servic_title_2,servic_title_3,servic_discription_1,servic_discription_2,servic_discription_3,title_text_main_page_1,title_text_main_page_2,servic_data_month_1,servic_data_day_1,servic_data_month_2,servic_data_day_2,servic_data_month_3,servic_data_day_3,servic_1,servic_2,servic_3,servic_4,servic_5,servic_6,servic_7,servic_8,servic_9 FROM index_space";
                                    $query = $DBM->dbh->prepare($query_comment);
                                    $query->execute();
                                    $row = $query->fetch(PDO::FETCH_ASSOC);
                                    $a_title_page = $row['title_page'];
                                    $a_text_main_page = $row['text_main_page_1'];
                                    $a_title_text_main_page = $row['title_text_main_page_1'];
                                    $a_text_main_page_2 = $row['text_main_page_2'];
                                    $a_title_text_main_page_2 = $row['title_text_main_page_2'];
                                    $a_servic_title_1 = $row['servic_title_1'];
                                    $a_servic_title_2 = $row['servic_title_2'];
                                    $a_servic_title_3 = $row['servic_title_3'];
                                    $a_servic_discription_1 = $row['servic_discription_1'];
                                    $a_servic_discription_2 = $row['servic_discription_2'];
                                    $a_servic_discription_3 = $row['servic_discription_3'];
                                   $a_servic_data_month_1= $row['servic_data_month_1'];
                                   $a_servic_data_day_1= $row['servic_data_day_1'];
                                   $a_servic_data_month_2= $row['servic_data_month_2'];
                                   $a_servic_data_day_2= $row['servic_data_day_2'];
                                   $a_servic_data_month_3= $row['servic_data_month_3'];
                                   $a_servic_data_day_3= $row['servic_data_day_3'];
                                   $a_servic_1= $row['servic_1'];
                                   $a_servic_2= $row['servic_2'];
                                   $a_servic_3= $row['servic_3'];
                                   $a_servic_4= $row['servic_4'];
                                   $a_servic_5= $row['servic_5'];
                                   $a_servic_6= $row['servic_6'];
                                   $a_servic_7= $row['servic_7'];
                                   $a_servic_8= $row['servic_8'];
                                   $a_servic_9= $row['servic_9'];

                                    ?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
        <meta charset="UTF-8">
        <meta name="google-site-verification" content="sUUwafZhZd1VLI4sBK011Pl_Li8mK9HTU3hg4JMDZ8k" />
        <link rel="shortcut icon" href="images/logo_1.png">
		<title>
		<?=$a_title_page?>
		</title>
		<link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
	
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>-->
		<!---- animated-css ---->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="این شرکت مفتخر است براساس نیاز مشتری تمامی سفارشات خرید ، اجاره ،نصب را با کمترین قیمت و بهترین کیفیت در تولید و اجرا در اختیار مشتریان خود قرار می دهد بدیهی است خرید مستقیم از تولید کننده به نفع خریدار می باشد">
        <meta name="keywords" content="اجاره و فروش اسپیس ،پارتیشن ،">
        <meta name="author" content="شرکت بست دکور">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
	

		<!---//webfonts--->
	</head>
	-
				<div class="banner text-right">
					<div class="container">
                   <div class=" row margin_top_slider wow fadeIn">
                       <div class="col-md-12">
                           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider_2.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="images/slider_3.jpg" alt="...">
      <div class="carousel-caption">
          صنایع شرکت درخشان
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                      <script>
                          $('.carousel').carousel();
                      </script>
                       </div>
                   </div>
                    <div class="row margin_top_slider wow fadeIn">
                        <div class="col-md-12">
                             
                        </div>
                    </div>
           <div class="baner wow bounceIn">
               <h1>
                   صنایع اسپیس درخشان 
               </h1>
               <div class="clearfix"></div>
               <p class="baner_p">
                   فروش و اجاره انواع اسپیس 
               </p>
               <div class="row">
                    <div class="col-md-5 col-md-offset-3 margin_b_index">
                        <div class="col-md-6">
                              0912-6465376
                              <span class="glyphicon glyphicon-phone"></span>
                        </div>
                        <div class="col-md-6">
                           021-77189757
                            <span class="glyphicon glyphicon-phone-alt"></span>
                        </div>
                    </div>
                   
               </div>
           </div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!----- banner ---->
			</div>
			<!----- //End-header---->
			<!----- top-grids ----->
			<div class="container direct_class">
			<div class="welcome-note">

				</div>
			</div>
			<div class="clearfix"> </div>
			<!----- top-grids ----->
			<!----- mid-grids ----->
			
			<div class="bottom-grids">
			<div class="container">
			    <div class="row wow bounceInLeft">
                       <div class="col-md-12 text_center margin_bottom_index">
                           <h2>
                               خدمات ما
                           </h2>
                       </div>
                       
             
			           <div class="col-md-12">
			               <div class="col-md-4 text_center padding_top_index ">
                            <?php 
                              $query_comment = "SELECT t_servic_1,p_servic_1,link_1 FROM index_space WHERE id ='1'";
                              $query = $DBM->dbh->prepare($query_comment);
                              $query->execute();
                              $row = $query->fetch(PDO::FETCH_ASSOC);
                              extract($row);                                                                
                              ?>
			                   <img src="images/ser1.jpg" class="img-circle" alt="صنایع اسپیس درخشان">
			                    <h3 class="margin_top_ser">
                                  <?=$t_servic_1?>
                               </h3>
			                    <p class="p_ser_index">
			                     <?=$p_servic_1?>
			                    </p>
                          	 <div class="col-md-12">
                          	     <a href="<?=$link_1?>">
                                  <button type="button" class="btn btn-primary btn-md place_butt">توضیحات بیشتر</button>
                                   </a>
                          	 </div>		              
                           </div>
			               <div class="col-md-4 text_center padding_top_index">
                          <?php 
                              $query_comment = "SELECT t_servic_2,p_servic_2,link_2 FROM index_space WHERE id ='1'";
                              $query = $DBM->dbh->prepare($query_comment);
                              $query->execute();
                              $row = $query->fetch(PDO::FETCH_ASSOC);
                              extract($row);                                                                
                              ?>
                           <img src="images/ser2.jpg" class="img-circle" alt="صنایع درخشان">
                             <h3 class="margin_top_ser"r>
                                 <?=$t_servic_2?>                            
                           </h3>
                            <p class="p_ser_index">
			                         <?=$p_servic_2?>
			                    </p>
                            <div class="col-md-12">
                          	     <a href="<?=$link_2?>">
                                  <button type="button" class="btn btn-primary btn-md place_butt">توضیحات بیشتر</button>
                                   </a>
                          	 </div>
                            </div>
			               <div class="col-md-4 text_center padding_top_index">
                           <?php 
                              $query_comment = "SELECT t_servic_3,p_servic_3,link_3 FROM index_space WHERE id ='1'";
                              $query = $DBM->dbh->prepare($query_comment);
                              $query->execute();
                              $row = $query->fetch(PDO::FETCH_ASSOC);
                              extract($row);                                                                
                              ?>
                           <img src="images/ser.jpg" class="img-circle" alt="صنایع اسپیس درخشان">
                            <h3 class="margin_top_ser">
                                    <?=$t_servic_3?>   
                                 </h3>
                            <p class="p_ser_index">
                               <?=$p_servic_3?>
			                    </p>
                          <div class="col-md-12">
                          	     <a href="<?=$link_3?>">
                                  <button type="button" class="btn btn-primary btn-md place_butt">توضیحات بیشتر</button>
                                   </a>
                          	 </div>                         
                            </div>
			           </div>
			    </div>
			</div>
			</div>
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-delay="0.5s">
			        <div class="col-md-12 text_center margin_top_index">
			            <h2>
			                آخرین نمونه کارها
			            </h2>
     <?php 
     $query_comment = "SELECT
 title_sample_1,title_sample_2,title_sample_3,title_sample_4,title_sample_5,title_sample_6,title_pic_sample_1,title_pic_sample_2,title_pic_sample_3,title_pic_sample_4,title_pic_sample_5,title_pic_sample_6,text_sample_1,text_sample_2,text_sample_3,text_sample_4,text_sample_5,text_sample_6 FROM index_space";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
          $row = $query->fetch(PDO::FETCH_ASSOC);
          extract($row);
        ?>
			            <div class="col-md-12 margin_top_index">
                             <div class="col-md-3">
                              <div class="portfolio-group">
					<a class="portfolio-item" href="images/1-large.jpg">
						<img src="images/last1.jpg" title="<?=$title_pic_sample_1?>" alt="<?=$title_pic_sample_1?>">
						<div class="detail">
							<h3><?=$title_sample_1?></h3>
							<p>
							  <?=$text_sample_1?>
							</p>
<!--							<span class="btn">View</span>-->
						</div>
					</a>				
				</div>
 </div>
<!--                             ###############################################-->
                             <div class="col-md-3">
                              <div class="portfolio-group">
					<a class="portfolio-item" href="images/1-large.jpg">
						<img src="images/last2.jpg" title="<?=$title_pic_sample_2?>" alt="<?=$title_pic_sample_2?>">
						<div class="detail">
							<h3><?=$title_sample_2?></h3>
							<p>
							  <?=$text_sample_2?>
							</p>
						</div>
					</a>				
				</div>
</div>
<!--                             #############################################-->
                             <div class="col-md-3">
                              <div class="portfolio-group">
					<a class="portfolio-item" href="images/1-large.jpg">
						<img src="images/last12.jpg" title="<?=$title_pic_sample_5?>" alt="<?=$title_pic_sample_5?>">
						<div class="detail">
							<h3><?=$title_sample_5?></h3>
							<p>
							  <?=$text_sample_5?>
							</p>
						</div>
					</a>				
				</div>                                                  
              </div>
<!--                           #######################################################-->
                           <div class="col-md-3">
                 <div class="portfolio-group">
					<a class="portfolio-item" href="images/1-large.jpg">
						<img src="images/last10.jpg" title="<?=$title_pic_sample_4?>" alt="<?=$title_pic_sample_4?>">
						<div class="detail">
							<h3><?=$title_sample_4?></h3>
							<p>
							  <?=$text_sample_4?>
							</p>				
						</div>
					</a>				
				</div>
  </div>
<!--                           ###################################################-->
                           <div class="col-md-3">
                           <div class="portfolio-group">
					<a class="portfolio-item" href="images/1-large.jpg">
						<img src="images/last5.jpg" title="<?=$title_pic_sample_5?>" alt="<?=$title_pic_sample_5?>">
						<div class="detail">
							<h3><?=$title_sample_5?></h3>
							<p>
							  <?=$text_sample_5?>
							</p>
						</div>
					</a>				
				</div>
          </div>
<!--                           ##################################################-->
                           <div class="col-md-3">
                              <div class="portfolio-group">
					<a class="portfolio-item" href="images/last6.jpg">
						<img src="images/last6.jpg" alt="<?=$title_pic_sample_6?>" title="<?=$title_pic_sample_6?>">
						<div class="detail">
							<h3><?=$title_sample_6?></h3>
							<p>
							  <?=$text_sample_6?>
							</p>
						</div>
					</a>				
				</div>
				                </div>
<!--                          #######################################-->
                           <div class="col-md-3">
                              <div class="portfolio-group">
					<a class="portfolio-item" href="images/last6.jpg">
						<img src="images/last7.jpg" alt="<?=$title_pic_sample_6?>" title="<?=$title_pic_sample_6?>">
						<div class="detail">
							<h3><?=$title_sample_6?></h3>
							<p>
							  <?=$text_sample_6?>
							</p>
						</div>
					</a>				
				</div>
				                </div>
<!--                          ############################-->
                           <div class="col-md-3">
                              <div class="portfolio-group">
					<a class="portfolio-item" href="images/last6.jpg">
						<img src="images/last8.jpg" alt="<?=$title_pic_sample_6?>" title="<?=$title_pic_sample_6?>">
						<div class="detail">
							<h3><?=$title_sample_6?></h3>
							<p>
							  <?=$text_sample_6?>
							</p>
						</div>
					</a>				
				</div>
				                </div>
                           </div>
                            
			            </div>
			        </div>
			    </div>
			</div>


			<script>
			$("#last_pic").hover(function(){
                     $('#caption').fadeIn("slow");
                },
                function(){
                     $('#caption').hide();
                });
               $("#caption").hover(function(){
                     $('#caption').show();
                },
                function(){
                     $('#caption').hide();
                });
                          
<!--                          ################################-->
                          $("#last_pic_1").hover(function(){
                     $('#caption_1').fadeIn("slow");
                },
                function(){
                     $('#caption_1').hide();
                });
               $("#caption_1").hover(function(){
                     $('#caption_1').show();
                },
                function(){
                     $('#caption_1').hide();
                });
<!--                          ######################################-->
                      $("#last_pic_two").hover(function(){
                     $('#caption_two').fadeIn("slow");
                },
                function(){
                     $('#caption_two').hide();
                });
               $("#caption_two").hover(function(){
                     $('#caption_two').show();
                },
                function(){
                     $('#caption_two').hide();
                });
<!--                      #############################################     -->
            $("#last_pic_three").hover(function(){
                     $('#caption_three').fadeIn("slow");
                },
                function(){
                     $('#caption_three').hide();
                });
               $("#caption_three").hover(function(){
                     $('#caption_three').show();
                },
                function(){
                     $('#caption_three').hide();
                });
<!--                ##########################################################-->
            $("#last_pic_four").hover(function(){
                     $('#caption_four').fadeIn("slow");
                },
                function(){
                     $('#caption_four').hide();
                });
               $("#caption_four").hover(function(){
                     $('#caption_four').show();
                },
                function(){
                     $('#caption_four').hide();
                });
			
			<!--                ##########################################################-->
            $("#last_pic_five").hover(function(){
                     $('#caption_five').fadeIn("slow");
                },
                function(){
                     $('#caption_five').hide();
                });
               $("#caption_five").hover(function(){
                     $('#caption_five').show();
                },
                function(){
                     $('#caption_five').hide();
                });
			</script>

		


			<!----- mid-grids ----->
			<!----- bottom-grids ----->
<!--
			<div class="mid-grids">
				<div class="container direct_class">
					<div class="mid-grid">
                           

							<div class="col-md-12 mid-grid-right  wow fadeInLeft" data-wow-delay="0.6s">
     <img src="images/2.jpg" class="mid-grid-left  wow fadeInRight pic_in_index" data-wow-delay="0.4s" title="name" />

								<h3>
                                       <?=$a_title_text_main_page?>
                                </h3>
								     <p>
                                   
                                    <?= $a_text_main_page?>
                                   </p>
							</div>
                        
                        
						<div class="clearfix"> </div>
					
				</div>
			</div>
-->
        
        
        
        
        
        
        
        
        
        
        
        
			<div class="bottom-grids">
			<div class="container direct_class">
       <div class="col-md-12">
                <div class="sponcers">
                    <h2>
                        برخی از خدمات صنایع درخشان
                    </h2>
                </div>
           <div class="col-md-6">
               <div class="panel panel-default">
               <div class="panel-heading headcon">
                     <h4>
                         ساخت سازه های نمایشگاهی
                     </h4>
               </div>
	<div class="panel-body">
	       <img src="images/pic_index1.jpg" class="" alt="Cinque Terre" style="width: 100%;">
	       <div class="tdiv">
              گروه تولیدی درخشان برای رفاه مشتریان اقدام به اجاره اسپیس فریم (space frame) با قیمت ارزان و مناسب نموده است.تا مشتریانی که قصد خرید اسپیس فریم را ندارند بتوانند از اسپیس فریم اجاره ای برای ساخت غرفه های نمایشگاهی و دیگر امور تبلیغاتی و همایشی استفاده نمایند.گروه تولیدی درخشان برای رفاه مشتریان اقدام به اجاره اسپیس فریم (space frame) با قیمت ارزان و مناسب نموده است.تا مشتریانی که قصد خرید اسپیس فریم را ندارند بتوانند از اسپیس فریم اجاره ای برای ساخت غرفه های نمایشگاهی و دیگر امور تبلیغاتی و همایشی استفاده نمایند.
          </div>
	       

	</div>
</div>

           </div>
           <div class="col-md-6">
                        <div class="panel panel-default">
               <div class="panel-heading headcon">
                   <h4>
                     انجام پروژه های مناسبتی
                   </h4>
               </div>
	<div class="panel-body">
	       <img src="images/pic_index2.jpg" class="" alt="Cinque Terre" style="width: 100%;">
              <div class="tdiv">
              گروه تولیدی درخشان برای رفاه مشتریان اقدام به اجاره اسپیس فریم (space frame) با قیمت ارزان و مناسب نموده است.تا مشتریانی که قصد خرید اسپیس فریم را ندارند بتوانند از اسپیس فریم اجاره ای برای ساخت غرفه های نمایشگاهی و دیگر امور تبلیغاتی و همایشی استفاده نمایند.گروه تولیدی درخشان برای رفاه مشتریان اقدام به اجاره اسپیس فریم (space frame) با قیمت ارزان و مناسب نموده است.تا مشتریانی که قصد خرید اسپیس فریم را ندارند بتوانند از اسپیس فریم اجاره ای برای ساخت غرفه های نمایشگاهی و دیگر امور تبلیغاتی و همایشی استفاده نمایند.
          </div>
	</div>
           </div>
           
       </div>
       <div class="col-md-6">
              <div class="panel panel-default">
              <div class="panel-heading headcon">
                  غرفه آرایی
              </div>
	<div class="panel-body">
	   <img src="images/pic_index4.jpg" class="" alt="Cinque Terre" style="width: 100%;">
	   <div class="tdiv">
              گروه تولیدی درخشان برای رفاه مشتریان اقدام به اجاره اسپیس فریم (space frame) با قیمت ارزان و مناسب نموده است.تا مشتریانی که قصد خرید اسپیس فریم را ندارند بتوانند از اسپیس فریم اجاره ای برای ساخت غرفه های نمایشگاهی و دیگر امور تبلیغاتی و همایشی استفاده نمایند.گروه تولیدی درخشان برای رفاه مشتریان اقدام به اجاره اسپیس فریم (space frame) با قیمت ارزان و مناسب نموده است.تا مشتریانی که قصد خرید اسپیس فریم را ندارند بتوانند از اسپیس فریم اجاره ای برای ساخت غرفه های نمایشگاهی و دیگر امور تبلیغاتی و همایشی استفاده نمایند.
          </div>
	</div>
</div>

       </div>
       <div class="col-md-6">
           <div class="panel panel-default">
           <div class="panel-heading headcon">
               فروش و اجاره پارتیشن
           </div>
	<div class="panel-body">
     <div class="col-md-12">
       <img src="images/pic_index3.jpg" class="" alt="Cinque Terre" style="width: 100%;"> 
          <div class="tdiv">
              گروه تولیدی درخشان برای رفاه مشتریان اقدام به اجاره اسپیس فریم (space frame) با قیمت ارزان و مناسب نموده است.تا مشتریانی که قصد خرید اسپیس فریم را ندارند بتوانند از اسپیس فریم اجاره ای برای ساخت غرفه های نمایشگاهی و دیگر امور تبلیغاتی و همایشی استفاده نمایند.گروه تولیدی درخشان برای رفاه مشتریان اقدام به اجاره اسپیس فریم (space frame) با قیمت ارزان و مناسب نموده است.تا مشتریانی که قصد خرید اسپیس فریم را ندارند بتوانند از اسپیس فریم اجاره ای برای ساخت غرفه های نمایشگاهی و دیگر امور تبلیغاتی و همایشی استفاده نمایند.
          </div>
     </div>
	</div>
</div>

       </div>
   </div>
				
				
			
				
					
							
				
				
				
				
				<div class="container direct_class">
					<div class="col-md-4 recent">
						<div class="recent-news">
							<h2>
                                آخرین کارها
							</h2>
							<div class="recent-news-grid wow fadeInLeft" data-wow-delay="0.5s">

								<div class="recent-news-right">
									<h3>
									    <?=$a_servic_title_1?>
									</h3>
									<!--<span>ipsum condimentum a</span>-->
									<p>
                                      <?=$a_servic_discription_1?>
                                    </p>
								</div>
                                <div class="recent-news-left text-center">
                                    <span><?=$a_servic_data_day_1?></span>
                                    <br>
                                    <label><?=$a_servic_data_month_1?></label>
                                </div>
								<div class="clearfix"> </div>
							</div>
							<div class="recent-news-grid wow fadeInRight" data-wow-delay="0.5s">
								<div class="recent-news-left text-center">
									<span><?=$a_servic_data_day_2?></span>
                                    <br>
									<label><?=$a_servic_data_month_2?></label>
								</div>
								<div class="recent-news-right">
									<h3> 
									<?=$a_servic_title_2?>
									</h3>
									<!--<span>ipsum condimentum a</span>-->
									<p>
                                   <?=$a_servic_discription_2?>
                                    </p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="recent-news-grid wow fadeInLeft" data-wow-delay="0.5s">
								<div class="recent-news-left text-center">
									<span><?=$a_servic_data_day_3?></span>
                                    <br>
									<label><?=$a_servic_data_month_3 ?></label>
								</div>
								<div class="recent-news-right">
									<h3>
									<?= $a_servic_title_3?>
								    </h3>
									<!--<span>ipsum condimentum a</span>-->
									<p>
                                   <?=$a_servic_discription_3?>
                                    </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<!----->
				<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
						<div class="about-us">
							<h2>
                                درباره ما
                            </h2>
							<h4>
                           <?=$a_title_text_main_page_2?>
                            </h4>
							<img src="images/1.jpg" title="name" />
							<p class="justy_class">
                                <?=$a_text_main_page_2?>
                        </div>
				</div>
				<!----->
				<!----->
				<div class="col-md-4">
						<div class="ourservices">
							<h2>
                                دیگر خدمات ما
                            </h2>
							<ul>
								<li><a href="service.php"><span> </span>
                                     <?=$a_servic_1?>
                                    </a></li>
								<li><a href="service.php"><span> </span>
                                     <?=$a_servic_2?>
                                    </a></li>
								<li><a href="service.php"><span> </span>
                                    <?=$a_servic_3?>
                                     </a></li>
								<li><a href="service.php"><span> </span>
                                     <?=$a_servic_4?>
                                    </a></li>
								<li><a href="service.php"><span> </span>
                                  <?=$a_servic_5?>  
                                  </a></li>
								<li><a href="service.php"><span> </span>
                                    <?=$a_servic_6?>
                                    </a></li>
								<li><a href="service.php"><span> </span>
                                    <?=$a_servic_7?>
                             </a></li>
							</ul>
						</div>
				</div>
				<!----->
				<div class="clearfix"> </div>
				</div>
			</div>
			<!----- bottom-grids ----->
			<!----- news-letter ----->
			<!--<div class="news-letter wow fadeInLeft" data-wow-delay="0.4s">-->
				<!--<div class="container">-->
					<!--<div class="news-letter-grid">-->
						<!--<div class="news-letter-grid-left">-->
							<!--<h3>ALIQUAM AC FELIS TORTOR ?</h3>-->
							<!--<p>Nunc aliquet condimentum mauris, sit amet commodo ipsum condimentum a</p>-->
						<!--</div>-->
						<!--<div class="news-letter-grid-right">-->
							<!--<form>-->
								<!--<input type="text" class="text" maxlength="20" value="Your Email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}">-->
								<!--<input type="submit" value=" " />-->
							<!--</form>-->
						<!--</div>-->
						<!--<div class="clearfix"> </div>-->
					<!--</div>-->
				<!--</div>-->
			<!--</div>-->
			<!----- news-letter ----->
			<!---- footer ---->
<?php require "_/footer.php"?>

