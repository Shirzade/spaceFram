<?php require "function.php";?>
<?php
$DBM = new Database;
$DBM->connect();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/logo_1.png">
<title>تماس با ما</title>
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
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
                <script type="text/javascript">
                function initialize() {
                    var myLatlng = new google.maps.LatLng(35.735147, 51.486507);
                    var mapOptions = {
                        zoom: 15,
                        center: myLatlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }

                    var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

                    var contentString = '<div style="direction: rtl;color:#000; text-align: right;font-family: Tahoma;">' +
                             '<h6>شرکت اسپیس سازه</h6>'+
                            '</div>';

                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title: 'شرکت اسپیس سازه'
                    });

                    infowindow.open(map, marker);
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });
                }
    </script>
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
			<ul class="top-nav wow bounceInDown" data-wow-delay="0.4s">
                <li class="active"><a href="contact.php">تماس با ما<span class="	glyphicon glyphicon-earphone"></span></a></li>
                                                  <li><a href="page.php?id=8"> دعوت به همکاری<span class="	glyphicon glyphicon-user"></span></a></li>
                 <li><a href="contact.php">یادداشت ها<span class="	glyphicon glyphicon-edit"></span></a></li>
                <!--<li><a href="team.html">درباره ما</a></li>-->
                <li ><a href="port.php">گالری محصولات<span class="glyphicon glyphicon-picture"></span></a></li>
                <li><a href="service.php">خدمات<span class="glyphicon glyphicon-cog"></span></a></li>
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
				 
				 <div class="contact-banner text-right wow bounceInLeft">					  
						<h2>
                            تماس با ما
                        </h2>
						<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
						<!--Maecenas quis orci quis enim vehicula dapibus. </p>						 -->
				 </div>
				<div class="clearfix"></div>		
		     </div>	
		 </div>
<!----- banner ---->
	 <div class="container wow fadeInUp">
	      <div class="contact-us">				

				<div class="contact_right direct">
				  <div class="contact-form">
				  	<h3 class="style">
                         فرم تماس با ما
                      </h3>
                      <?php
                      if(isset($_POST['send_massage'])){
                       $a_userName = $_POST['userName'];
                       $a_userEmail = $_POST['userEmail'];
                       $a_userPhone = $_POST['userPhone'];
                       $a_userMsg = $_POST['userMsg'];
         $query_comment ="INSERT INTO form_contact(name,email,phone,massege)
	            VALUES ('$a_userName','$a_userEmail','$a_userPhone','$a_userMsg')";
               $query = $DBM->dbh->prepare($query_comment);
               $query->execute();                          
                      }
                      ?>
					    <form method="post" action="">
					    	<div>
						    	<p>نام :</p>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<p>
                                    آدرس ایمیل:
						    	</p>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<p>
                                    شماره تماس:
                                 </p>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<p>
                                    پیام شما:
                                </p>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<input type="submit"  name="send_massage" value="ارسال ">
						  </div>
					    </form>
				    </div>
  				</div>
              <div class="contact-us_left direct">
                  <div class="contact-us_info">
                      <h3 class="style">
                         مارا روی نقشه پیدا کنید
                      </h3>
                      <div  id="googleMap" style=" height: 250px;width: 97%;">
                      </div>
                  </div>
            <?php
           $query_comment = "SELECT address,email,phone,cell_phone FROM index_space";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
           $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_address= $row['address'];
               $a_email= $row['email'];
               $a_phone = $row['phone'];
               $a_cell_phone = $row['cell_phone'];
               ?>
                  <div class="company_address">
                      <h3 class="style">
                          راه های تماس با ما
                      </h3>
                      <p></p>
                      <p>
                          آدرس :
                          <?=$a_address?>
                      </p>
                      <p>تلفن همراه :
                      <?=$a_cell_phone?>
                      </p>
                      <p>فکس :
                      <?=$a_phone?>
                      </p>
                      <p>آدرس ایمیل:<a href="mailto:info@mycompany.com">
                        <?=$a_email?>
                      </a></p>
                      <!--<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>-->
                  </div>
              </div>
  				<div class="clear"></div>		
		  </div>
	 </div>	
</div>
<?php require "_/footer.php";?>