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
   <div class="footer">
    <div class="container direct_class">
        <div class="footer-grids">

<!--            <div class="col-md-3 footer-grid ftr-sec wow fadeInLeft" data-wow-delay="0.4s">-->
<!--                <h3>For Clients</h3>-->
<!--                <ul>-->
<!--                    <li><a href="#">Forums</a></li>-->
<!--                    <li><a href="#">Pramotions</a></li>-->
<!--                    <li><a href="#">Sign in</a></li>-->
<!--                    <li><a href="#">News</a></li>-->
<!--                </ul>-->
<!--            </div>-->
            <div class="col-md-4 footer-grid ftr-sec wow fadeInRight" data-wow-delay="0.4s">
                <h3>
                    ما رو در شبکه های اجتماعی دنبال کنید
                </h3>
                <ul class="social-icons">
                    <li><a class="twitter" href="#"><span> </span>twitter</a></li>
                    <li><a class="facebook" href="#"><span> </span>Facebook</a></li>
                    <li><a class="googlepluse" href="#"><span> </span>google+</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-grid ftr-sec ftr wow fadeInRight" data-wow-delay="0.4s">
                <h3>
                    با ما در تماس باشید
                </h3>
           
                <ul class="location">
                    <li><a class="hm" href="#"><span> </span>
                    <?=$a_address?>
                    </a></li>
                    <li><a class="phn" href="#"><span> </span>
                        <b>تلفن:</b>
                        <?=$a_phone?>
                    </a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-grid ftr-sec wow fadeInLeft" data-wow-delay="0.4s">
                <h3>
                    فهرست
                </h3>
                <ul>
                    <li><a href="index.php">صفحه نخست</a></li>
<!--                    <li><a href="#">درباره ما</a></li>-->
                    <li><a href="service.php">خدمات</a></li>
                    <li><a href="port.php">گالری محصولات</a></li>
                    <!--<li><a href="#">Products</a></li>-->
                    <li><a href="contact.php">تماس با ما</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <p class="copy-right wow bounceInRight" data-wow-delay="0.4s"">2014 &copy; Design by <a href="http://">spasesazeh</a></p>
    </div>
</div>
<!---- footer ---->
</body>
</html>