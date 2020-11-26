<?php require "_/header.php";?>
<?php require "lib/function.php"?>
<?php
$DBM = new Database;
$DBM->connect();
?>   
    <div class="row">
       <div class="col-md-12">
           ddd
       </div>
    </div>
    <div class="row">

        <div class="col-md-9 direct">
            <div class="panel panel-default">
                <div class="panel-heading text_center">
                   <b>
                       صفحه نخست
                   </b>
                </div>
                <div class="panel-body">
                   <div class="row">
                       <div class=" text_center">
                              <ul class="list-inline">
                              <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour_10" aria-expanded="false" aria-controls="collapseThree">
                                           <button class="btn btn-success"><span class="glyphicon  glyphicon-th-large"></span>
                                            بخش اسلایدر   
                                          </button>
                            </a>  
                        </li>
                          <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour_1" aria-expanded="false" aria-controls="collapseThree">
                                           <button class="btn btn-success"><span class="glyphicon glyphicon-cog"></span>
                                             بخش خدمات ما   
                                          </button>
                            </a>  
                        </li>
                        <li>
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                         <button class="btn btn-success"><span class="glyphicon glyphicon-bookmark"></span>بخش آخرین کارها</button>
                          </a>
                        </li>
                       
                          <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour_2" aria-expanded="false" aria-controls="collapseThree">
                                           <button class="btn btn-success"><span class="glyphicon glyphicon-cog"></span>
                                             بخش  نمونه کارها   
                                          </button>
                            </a>  
                        </li>
                        <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           <button class="btn btn-success"><span class="glyphicon glyphicon-cog"></span>بخش دیگر خدمات
                                           </button>
                            </a> 
                        </li>
                        <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                           <button class="btn btn-success"><span class="glyphicon glyphicon-cog"></span>
                                           متن درباره ما   
                                          </button>
                            </a>  
                        </li>
                    </ul>
                       </div>
                   </div>
                  
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    
                        <div class="">
                            <div  role="tab" id="headingTwo">
                               
                                   
                               
                                <h4 class="panel-title">
     
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                   <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                                بخش آخرین کار ها در صفحه نخست  
                                             </h2>
                                           </div>
                                    </div>
                                   <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">وارد کردن کار جدید</a></li>
<!--    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>-->
<!--    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content background_color_tab">
    <div role="tabpanel" class="tab-pane active" id="home">
                 <?php 
                 if(isset($_POST['update_work'])){
                   $a_title_work_1 = $_POST['title_work_1'];
                   $a_title_work_2 = $_POST['title_work_2'];
                   $a_title_work_3 = $_POST['title_work_3'];
                   $a_text_work_1 = $_POST['text_work_1'];
                   $a_text_work_2 = $_POST['text_work_2'];
                   $a_text_work_3 = $_POST['text_work_3'];
                   $a_month_1 = $_POST['month_1'];
                   $a_day_1 = $_POST['day_1'];
                   $a_month_2 = $_POST['month_2'];
                   $a_day_2 = $_POST['day_2'];
                   $a_month_3 = $_POST['month_3'];
                   $a_day_3= $_POST['day_3'];
         $update=" UPDATE index_space SET servic_title_1='$a_title_work_1',servic_title_2='$a_title_work_2',servic_title_3='$a_title_work_3',servic_discription_1='$a_text_work_1',servic_discription_2='$a_text_work_2',servic_discription_3='$a_text_work_3',servic_data_month_1='$a_month_1',servic_data_day_1='$a_day_1',servic_data_month_2='$a_month_2',servic_data_day_2='$a_day_2',servic_data_month_3='$a_month_3',servic_data_day_3='$a_day_3' WHERE id='1'";
           $stmt=$DBM->dbh->prepare($update);
           $stmt->execute();
                 }
         
                  ?>
                          <?php
           $query_comment = "SELECT
           servic_title_1,servic_title_2,servic_title_3,servic_discription_1,servic_discription_2,servic_discription_3,servic_data_month_1,servic_data_month_2,servic_data_month_3,servic_data_day_1,servic_data_day_2,servic_data_day_3 FROM index_space";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
           $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_servic_title_1= $row['servic_title_1'];
               $a_servic_title_2= $row['servic_title_2'];
               $a_servic_title_3= $row['servic_title_3'];
               $a_servic_discription_1= $row['servic_discription_1'];
               $a_servic_discription_2= $row['servic_discription_2'];
               $a_servic_discription_3= $row['servic_discription_3'];
               $a_servic_data_month_1= $row['servic_data_month_1'];
               $a_servic_data_day_1= $row['servic_data_day_1'];
               $a_servic_data_month_2= $row['servic_data_month_2'];
               $a_servic_data_day_2= $row['servic_data_day_2'];
               $a_servic_data_month_3= $row['servic_data_month_3'];
               $a_servic_data_day_3= $row['servic_data_day_3'];
               ?>
                  <form action="" method="post">
                  <div class="row padding_t">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">کار سوم:</label>
                    <input type="text" name="title_work_3" class="form-control" value="<?=$a_servic_title_3?>">
                                </div>
                                <div class="form-group">
   <textarea name="text_work_3" class="form-control" cols="30" rows="5"><?=$a_servic_discription_3?></textarea>
                                </div>
                                 <div class="col-md-6">
                               <div class="form-group">
                                    <label for="">ماه انجام کار:</label>
                         <input type="text"  name="month_3" class="form-control" value="<?=$a_servic_data_month_3?>">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <label for=""> روز انجام کار:</label>
                         <input type="text"  name="day_3" class="form-control" value="<?=$a_servic_data_day_3?>">
                                </div>
                           </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">کار دوم:</label>
                        <input type="text" name="title_work_2" class="form-control" value="<?=$a_servic_title_2?>">
                                </div>
                                  <div class="form-group">
             <textarea name="text_work_2" class="form-control" cols="30" rows="5"><?=$a_servic_discription_2?></textarea>
<!--                                    <input type="email" class="form-control" id="email">-->
                                </div>
                                 <div class="col-md-6">
                               <div class="form-group">
                                    <label for="">ماه انجام کار:</label>
                         <input type="text"  name="month_2" class="form-control" value="<?=$a_servic_data_month_2?>">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <label for=""> روز انجام کار:</label>
                         <input type="text"  name="day_2" class="form-control" value="<?=$a_servic_data_day_2?>">
                                </div>
                           </div>
                            </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">کار اول:</label>
                         <input type="text"  name="title_work_1" class="form-control" value="<?=$a_servic_title_1?>">
                                </div>
                                  <div class="form-group">
         <textarea name="text_work_1" class="form-control" cols="30" rows="5"><?=$a_servic_discription_1?></textarea> 
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <label for="">ماه انجام کار:</label>
                         <input type="text"  name="month_1" class="form-control" value="<?=$a_servic_data_month_1?>">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <label for=""> روز انجام کار:</label>
                         <input type="text"  name="day_1" class="form-control" value="<?=$a_servic_data_day_1?>">
                                </div>
                           </div>
                            </div>
                                   <div class="row">
                            <div class="col-md-12 text_center">
                                <button name="update_work" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                            </div>
                        </div>
                        </div>
                        </form>
    </div>
  </div>
                                   
                                   
                                   
                                   
                             
                           
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                   
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                   <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                            بخش درباره ما در صفحه نخست  
                                             </h2>
                                           </div>
                                    </div>
                                    <div class="row">
                                        <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home_2" aria-controls="home" role="tab" data-toggle="tab">
    اصلاح خدمات وارد شده
    </a></li>
<!--    <li role="presentation"><a href="#profile_2" aria-controls="profile" role="tab" data-toggle="tab">اصلاح خدمات وارد شده</a></li>-->
  </ul>
  <div class="tab-content background_color_tab">
<!--
    <div role="tabpanel" class="tab-pane active" id="home_2">
        <div class="row padding_t">
            <div class="col-md-4 col-md-offset-4">
                  <div class="form-group">
                                    <label for="">وارد کردن خدمت جدید :</label>
                                    <input type="email" class="form-control" >
                    </div>
                           <div class="row">
                            <div class="col-md-12 text_center">
                                <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                            </div>
                        </div>
            </div>
        </div>
    </div>
-->
    <div role="tabpanel" class="tab-pane active" id="home_2">
       <form action="" method="post">
       <?php 
        if(isset($_POST['button_servic_page'])){
               $a_servic_1 = $_POST['servic_1'];
               $a_servic_2 = $_POST['servic_2'];
               $a_servic_3 = $_POST['servic_3'];
               $a_servic_4 = $_POST['servic_4'];
               $a_servic_5 = $_POST['servic_5'];
               $a_servic_6 = $_POST['servic_6'];
               $a_servic_7 = $_POST['servic_7'];
               $a_servic_8 = $_POST['servic_8'];
               $a_servic_9 = $_POST['servic_9'];
     $update=" UPDATE index_space SET servic_1='$a_servic_1',servic_2='$a_servic_2',servic_3='$a_servic_3',servic_4='$a_servic_4',servic_5='$a_servic_5',servic_6='$a_servic_6',servic_7='$a_servic_7',servic_8='$a_servic_8',servic_9='$a_servic_9' WHERE id='1'";
           $stmt=$DBM->dbh->prepare($update);
           $stmt->execute();
               }
        ?>
    <?php
$query_comment = "SELECT servic_1,servic_2,servic_3,servic_4,servic_5,servic_6,servic_7,servic_8,servic_9 FROM index_space";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
           $row = $query->fetch(PDO::FETCH_ASSOC);
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
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="">خدمت سوم:</label>
                         <input type="text"  name="servic_3" class="form-control" value="<?=$a_servic_3?>">
                                </div>
            </div>
            <div class="col-md-4"><div class="form-group">
                                    <label for="">خدمت دوم:</label>
                         <input type="text"  name="servic_2" class="form-control" value="<?=$a_servic_2?>">
                                </div>
            </div>
            <div class="col-md-4"><div class="form-group">
                                    <label for="">خدمت اول:</label>
                         <input type="text"  name="servic_1" class="form-control" value="<?=$a_servic_1?>">
                                </div>
             </div>
        </div>
         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="">خدمت ششم:</label>
                         <input type="text"  name="servic_6" class="form-control" value="<?=$a_servic_6?>">
                                </div>
            </div>
            <div class="col-md-4"><div class="form-group">
                                    <label for="">خدمت پنجم:</label>
                         <input type="text"  name="servic_5" class="form-control" value="<?=$a_servic_5?>">
                                </div>
            </div>
            <div class="col-md-4"><div class="form-group">
                                    <label for="">خدمت چهارم:</label>
                         <input type="text"  name="servic_4" class="form-control" value="<?=$a_servic_4?>">
                                </div>
             </div>
        </div>
          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="">خدمت نهم:</label>
                         <input type="text"  name="servic_9" class="form-control" value="<?=$a_servic_9?>">
                                </div>
            </div>
            <div class="col-md-4"><div class="form-group">
                                    <label for="">خدمت هشتم:</label>
                         <input type="text"  name="servic_8" class="form-control" value="<?=$a_servic_8?>">
                                </div>
            </div>
            <div class="col-md-4"><div class="form-group">
                                    <label for="">خدمت هفتم:</label>
                         <input type="text"  name="servic_7" class="form-control" value="<?=$a_servic_7?>">
                                </div>
             </div>
        </div>
         <div class="row">
                            <div class="col-md-12 text_center">
                                <button  type="submit" name="button_servic_page" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                            </div>
                        </div>
                        </form>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages_2">.hhh.</div>
    <div role="tabpanel" class="tab-pane" id="settings_2">.hhhhh.</div>
  </div>

</div>
                                    </div>
                                </div>
                            </div>
                           
<!--                       ################################### بخش درباره ما #####################################-->
               <?php 
                if(isset($_POST['button_about_us_b'])){
                   $a_title_top = $_POST['title_top'];
                   $a_text_top = $_POST['text_top'];
                   $update=" UPDATE index_space SET text_main_page_1='$a_text_top',title_text_main_page_1='$a_title_top' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                   
                   
               } 
               if(isset($_POST['button_about_us_s'])){
           $a_title_button = $_POST['title_button'];
           $a_text_button = $_POST['text_button'];
           $update=" UPDATE index_space SET text_main_page_2='$a_text_button',title_text_main_page_2='$a_title_button' WHERE id='1'";
           $stmt=$DBM->dbh->prepare($update);
           $stmt->execute();
                   
               }
                ?>
                
                <?php
   $query_comment = "SELECT
           title_text_main_page_1,title_text_main_page_2,text_main_page_1,text_main_page_2 FROM index_space";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
           $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_text_main_page_1= $row['text_main_page_1'];
               $a_title_text_main_page_1= $row['title_text_main_page_1'];
               $a_title_text_main_page_2= $row['title_text_main_page_2'];
               $a_text_main_page_2= $row['text_main_page_2'];
                ?>
                
                 <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                       <form action="" method="post">
                                         <div class="panel-body">
                            <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                            بخش درباره ما
                                             </h2>
                                           </div>
                                    </div>
                                      <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home_3" aria-controls="home" role="tab" data-toggle="tab">
        متن  درباره ما بالای صفحه
       </a></li>
    <li role="presentation"><a href="#profile_3" aria-controls="profile" role="tab" data-toggle="tab">
    متن درباره ما پایین صفحه
      </a></li>
  </ul>
    <div class="tab-content background_color_tab">
    <div role="tabpanel" class="tab-pane active" id="home_3">
        <div class="row padding_t">
            <div class="col-md-8 col-md-offset-2">
                  <div class="form-group">
                                    <label for="">عنوان متن:</label>
                                    <input type="text" name="title_top" class="form-control" value="<?=$a_title_text_main_page_1?>">
                    </div>
                   <div class="form-group">
                                    <label for="">متن درباره ما:</label>
 <textarea name="text_top" class="form-control" id="" cols="30" rows="8"><?=$a_text_main_page_1?></textarea>
                                    
                    </div>
                           <div class="row">
                            <div class="col-md-12 text_center">
                                <button  type="submit" name="button_about_us_b" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile_3">
        <div class="row padding_t">
            <div class="col-md-8 col-md-offset-2">
                  <div class="form-group">
                                    <label for="">عنوان متن:</label>
                                    <input type="text" name="title_button" class="form-control" value="<?=$a_title_text_main_page_2?>">
                    </div>
                   <div class="form-group">
                                    <label for="">متن درباره ما:</label>
  <textarea name="text_button" class="form-control" id="" cols="30" rows="8"><?=$a_text_main_page_2?></textarea>
                                    
                    </div>
                           <div class="row">
                            <div class="col-md-12 text_center">
                                <button type="submit" name="button_about_us_s" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    </div>

                        </div>
                       </form>
              
                 </div>
               <div id="collapsefour_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                   
                    <form action="" method="post" enctype="multipart/form-data">
                     <div class="panel-body">
                                   <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                            بخش خدمات ما
                                             </h2>
                                           </div>
                                    </div>
  <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home_4" aria-controls="home" role="tab" data-toggle="tab">
             خدمت اول
       </a></li>
    <li role="presentation"><a href="#profile_4" aria-controls="profile" role="tab" data-toggle="tab">
       خدمت دوم
      </a></li>
      <li role="presentation"><a href="#profile_5" aria-controls="profile" role="tab" data-toggle="tab">
       خدمت سوم
      </a></li>
  </ul>
         <div class="tab-content background_color_tab">
    <div role="tabpanel" class="tab-pane active" id="home_4">
        <div class="row padding_t">

                   <?php
                    if(isset($_POST['button_ser_1'])){
                   $a_title_1 = $_POST['title_1']; 
                   $a_page_1 = $_POST['select_page'];
                   $a_text_1 = $_POST['text_1']; 
//                     $a_name_pic= $_FILES['pic_1']['name'];
//                   $a_target_dir = "../images/";
//                   $a_target_file = $a_target_dir.basename($a_name_pic);
//                  $a_imageFileType = pathinfo($a_target_file,PATHINFO_EXTENSION);
//                   move_uploaded_file($_FILES["pic_1"]["tmp_name"], $a_target_file);
                  
                    $update=" UPDATE index_space SET 
                    t_servic_1='$a_title_1',p_servic_1='$a_text_1',link_1='$a_page_1' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
                   $stmt->execute();
                    
                }  
                   ?>

                    <div class="col-md-8 col-md-offset-2">
              <?php 
              $query_comment = "SELECT t_servic_1,p_servic_1,pic_1 FROM index_space";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              $row = $query->fetch(PDO::FETCH_ASSOC);
               extract($row); 
               ?>
<!--
                 <div class="col-md-6">
                    <img src="image/1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
                 </div>
--> <div class="col-md-6">
                     <img src="image/1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">

                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                    <label for="">عنوان متن:</label>
            <input type="text" name="title_1" class="form-control" value="<?=$t_servic_1?>">
                    </div>
                    <div class="form-group">
                    <label for="">انتخاب صفحه :</label>
            <select class="form-control" name="select_page">
                <option value="">صفحه خود را انتخاب کنید</option>
             <?php 
              $query_comment = "SELECT id,title_text FROM pages WHERE id > '7'";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
               while($row = $query->fetch(PDO::FETCH_ASSOC)){
               extract($row); 
               ?>
                    <option value="page.php?p=<?=$id?>"><?=$title_text?></option>
               <?php }?>
            </select>
                  </div>
                 
<!--
                 <div class="col-md-6">
                   
                 </div>
-->
                 </div>
                
                  
                   <div class="form-group">
                                    <label for="">متن درباره ما:</label>
  <textarea name="text_1" class="form-control" id="" cols="30" rows="8"><?=$p_servic_1?></textarea>
                                    
                    </div>
                           <div class="row">
                            <div class="col-md-12 text_center">
                                <button type="submit" name="button_ser_1" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>به روز رسانی</button>
                            </div>
                        </div>
            </div>
        </div>
    </div>
<!--    ############################################################################################-->
    <div role="tabpanel" class="tab-pane" id="profile_4">
        <div class="row padding_t">
             <?php
                    if(isset($_POST['button_ser_2'])){
                   $a_title_2 = $_POST['title_2']; 
                   $a_page_2 = $_POST['select_page_2'];
                   $a_text_2 = $_POST['text_2'];
//                    $a_name_pic= $_FILES['pic_2']['name'];
//                   $a_target_dir = "../images/";
//                   $a_target_file = $a_target_dir.basename($a_name_pic);
//                  $a_imageFileType = pathinfo($a_target_file,PATHINFO_EXTENSION);
//                   move_uploaded_file($_FILES["pic_2"]["tmp_name"], $a_target_file);
                    $update=" UPDATE index_space SET 
                    t_servic_2='$a_title_2',p_servic_2='$a_text_2',link_2='$a_page_2' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
                   $stmt->execute();
                    
                }  
                   ?>
            <div class="col-md-8 col-md-offset-2">
                <?php 
              $query_comment = "SELECT t_servic_2,p_servic_2,pic_2 FROM index_space";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              $row = $query->fetch(PDO::FETCH_ASSOC);
               extract($row); 
               ?>
                 <div class="col-md-6">
                     <img src="<?=$pic_2?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                    <label for="">عنوان متن:</label>
            <input type="text" name="title_2" class="form-control" value="<?=$t_servic_2?>">
                    </div>
                    <div class="form-group">
                    <label for="">انتخاب صفحه :</label>
            <select class="form-control" name="select_page_2">
                   <option value="">صفحه خود را انتخاب کنید</option>
                    <?php 
              $query_comment = "SELECT id,title_text FROM pages WHERE id > '7'";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
               while($row = $query->fetch(PDO::FETCH_ASSOC)){
               extract($row); 
               ?>
                    <option value="page.php?p=<?=$id?>"><?=$title_text?></option>
               <?php }?>
            </select>
                  </div>
                  <div class="form-group">
                    <label for="">عنوان متن:</label>
            <input type="file" name="pic_2" class="form-control" value="<?=$a_title_text_main_page_2?>">
                    </div>
                 </div>
                  
                   <div class="form-group">
                                    <label for="">متن درباره ما:</label>
  <textarea name="text_2" class="form-control" id="" cols="30" rows="8"><?=$p_servic_2?></textarea>
                                    
                    </div>
                           <div class="row">
                            <div class="col-md-12 text_center">
                                <button type="submit" name="button_ser_2" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>به روز رسانی</button>
                            </div>
                        </div>
            </div>
        </div>
    </div>
     <div role="tabpanel" class="tab-pane" id="profile_5">
        <div class="row padding_t">
                  <?php
                    if(isset($_POST['button_ser_3'])){
                   $a_title_3 = $_POST['title_3']; 
                   $a_page_3 = $_POST['select_page_3'];
                   $a_text_3 = $_POST['text_3']; 
//                    $a_name_pic= $_FILES['pic_3']['name'];
//                   $a_target_dir = "../images/";
//                   $a_target_file = $a_target_dir.basename($a_name_pic);
//                  $a_imageFileType = pathinfo($a_target_file,PATHINFO_EXTENSION);
//                   move_uploaded_file($_FILES["pic_3"]["tmp_name"], $a_target_file);
                    $update=" UPDATE index_space SET 
                    t_servic_3='$a_title_3',p_servic_3='$a_text_3',link_3='$a_page_3' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
                   $stmt->execute();
                    
                }  
                   ?>
                   <div class="col-md-8 col-md-offset-2">
                   <?php 
              $query_comment = "SELECT t_servic_3,p_servic_3,pic_3 FROM index_space";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              $row = $query->fetch(PDO::FETCH_ASSOC);
               extract($row); 
               ?>
                 <div class="col-md-6">
                     <img src="<?=$pic_3?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">

                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                    <label for="">عنوان متن:</label>
            <input type="text" name="title_3" class="form-control" value="<?=$t_servic_3?>">
                    </div>
                    <div class="form-group">
                    <label for="">انتخاب صفحه :</label>
            <select class="form-control" name="select_page_3">
                        <option value="">صفحه خود را انتخاب کنید</option>
                         <?php 
              $query_comment = "SELECT id,title_text FROM pages WHERE id > '7'";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
               while($row = $query->fetch(PDO::FETCH_ASSOC)){
               extract($row); 
               ?>
                    <option value="page.php?p=<?=$id?>"><?=$title_text?></option>
               <?php }?>
            </select>
                  </div>
                  <div class="form-group">
                    <label for="">عنوان متن:</label>
            <input type="file" name="pic_3" class="form-control" value="">
                    </div>
                 </div>
                  
                   <div class="form-group">
                                    <label for="">متن درباره ما:</label>
  <textarea name="text_3" class="form-control" id="" cols="30" rows="8"><?=$p_servic_3?></textarea>
                                    
                    </div>
                           <div class="row">
                            <div class="col-md-12 text_center">
                                <button type="submit" name="button_ser_3" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>به روز رسانی</button>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    </div>
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                      <div class="row">
                                      
                                      </div>  
                      </form>              
                   </div>
                </div>
<!--                            ##################################-->
     <div id="collapsefour_10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
               <div class="panel-body">
                                   <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                            بخش اسلایدر
                                             </h2>
                                           </div>
                                    </div>
                                    <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home_10_1" aria-controls="home" role="tab" data-toggle="tab">
              وارد کردن مطلب جدید
       </a></li>
    <li role="presentation"><a href="#profile_10_2" aria-controls="profile" role="tab" data-toggle="tab">
        ویرایش مطالب وارد شده
      </a></li>
<!--
      <li role="presentation"><a href="#profile_10_3" aria-controls="profile" role="tab" data-toggle="tab">
       خدمت سوم
      </a></li>
-->
  </ul>
  <form action="" method="post" enctype="multipart/form-data">
 <div class="tab-content background_color_tab">
    
      <?php 
       if(isset($_POST['button_aslider'])){
                $a_title_slider = $_POST['title_slider'];
                $a_name_pic= $_FILES['pic_slider']['name'];
                $a_target_dir = "../images/";
                $a_target_file = $a_target_dir.basename($a_name_pic);
                $a_imageFileType = pathinfo($a_target_file,PATHINFO_EXTENSION);
                move_uploaded_file($_FILES["pic_slider"]["tmp_name"], $a_target_file);
                    $query_comment ="INSERT INTO slider_index(pic,title_pic)
	            VALUES ('$a_target_file','$a_title_slider')";
               $query = $DBM->dbh->prepare($query_comment);
               $query->execute();
                }
       ?>
      
       <div role="tabpanel" class="tab-pane active" id="home_10_1">
        <div class="row padding_t">
                 <div class="col-md-5">
                      <div class="form-group">
                         <label for=""> انتخاب عکس :</label>
             <input type="file" name="pic_slider" class="form-control">
                    </div>
                 </div>
                 <div class="col-md-7">
                      <div class="form-group">
                <label for="">متن روی اسلایدر:</label>
                <input type="text" name="title_slider" class="form-control">
                    </div>
                 </div>
                 <div class="row">
                            <div class="col-md-12 text_center">
 <button type="submit" name="button_aslider" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                            </div>
                        </div>
        </div>
        
    
  
   </div> 
   </form>
<!--    ############################################################################################-->
    <div role="tabpanel" class="tab-pane" id="profile_10_2">
        <div class="row padding_t">
               <?php 
                  if(isset($_POST['button_delet_slider'])){
            $id_pic_slider = $_GET['p'];
            $query_comment_d = "DELETE FROM slider_index  WHERE id = '$id_pic_slider'";                                              $query = $DBM->dbh->prepare($query_comment_d);
           $query->execute();
               }
                 if(isset($_POST['button_update_slider'])){
                     $id_pic_slider = $_GET['p'];
                       $a_name_pic= $_FILES['update_slider_pic']['name'];
                        $a_target_dir = "../images/";
                        $a_target_file = $a_target_dir.basename($a_name_pic);
                        $a_imageFileType = pathinfo($a_target_file,PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES["update_slider_pic"]["tmp_name"], $a_target_file);
                     
                     
                     $a_update_slider_text = $_POST['update_slider_text'];
            $update=" UPDATE slider_index SET pic='$a_target_file',title_pic='$a_update_slider_text' WHERE id=$id_pic_slider";
           $stmt=$DBM->dbh->prepare($update);
           $stmt->execute();
                   
               }
 
                ?>
                <?php 
              $query_comment = "SELECT id,pic,title_pic FROM slider_index";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
               while($row = $query->fetch(PDO::FETCH_ASSOC)){
               extract($row); 
               ?> 
            <div class="col-md-6 margin_top">
                 <div class="panel panel-default">
                    <div class="panel-body">
                    <div class="col-md-12">
                    <form action="homepage.php?p=<?=$id?>" method="post" enctype="multipart/form-data">
          <img src="<?=$pic?>" class="img-thumbnail" style="width: 500px;
    height: 185px;">
                   <div class="form-group">
                <label for="">انتخاب عکس جدید:</label>
                <input type="file" name="update_slider_pic" class="form-control">
                    </div>
                    <div class="form-group">
                <label for="">عنوان جدیدعکس:</label>
                <input type="text" name="update_slider_text" class="form-control" value="<?=$title_pic?>" >
                    </div>
                    </div>
                        
                        
                       <div class="col-md-6">
                           <div class="row">
                           
                            <div class="col-md-12 text_center">
                                <button type="submit" name="button_update_slider" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>به روزرسانی</button>
                            </div>
                        </div>
                       </div>
                      
                       <div class="col-md-6">
                           <div class="row">
                            <div class="col-md-12 text_center">
                            
                            
                            
     <button type="submit" name="button_delet_slider" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span>حذف مطلب</button>
                            
                                
                            
                             
                            </div>
                            </form>
                        </div>
                       </div>
                    </div>
                    
                </div>

                          
            </div>
            <?php }?>
        </div>
    </div>

    </div>
                                         
                                   
                                    </div>
     </div>
     
<!--                ########################################################-->

                <div id="collapsefour_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
               <div class="panel-body">
                    <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                            بخش نمونه کارها 
                                             </h2>
                                           </div>
                                    </div>         
     <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home_10" aria-controls="home" role="tab" data-toggle="tab">
    نمونه1
    </a></li>
    <li role="presentation"><a href="#home_11" aria-controls="profile" role="tab" data-toggle="tab">نمونه 2 </a></li>
    <li role="presentation"><a href="#home_12" aria-controls="profile" role="tab" data-toggle="tab">نمونه 3</a></li>
    <li role="presentation"><a href="#home_13" aria-controls="profile" role="tab" data-toggle="tab">نمونه 4</a></li>
    <li role="presentation"><a href="#home_14" aria-controls="profile" role="tab" data-toggle="tab">نمونه 5</a></li>
    <li role="presentation"><a href="#home_15" aria-controls="profile" role="tab" data-toggle="tab">نمونه 6</a></li>
  </ul>
                           <div class="tab-content background_color_tab">

    <div role="tabpanel" class="tab-pane active" id="home_10">
    <?php require "scripts.js";?>
    
        <?php 
     $query_comment = "SELECT
 title_sample_1,title_sample_2,title_sample_3,title_sample_4,title_sample_5,title_sample_6,title_pic_sample_1,title_pic_sample_2,title_pic_sample_3,title_pic_sample_4,title_pic_sample_5,title_pic_sample_6,text_sample_1,text_sample_2,text_sample_3,text_sample_4,text_sample_5,text_sample_6 FROM index_space";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
          $row = $query->fetch(PDO::FETCH_ASSOC);
          extract($row);
        ?>
                             
                               
                                <div class="row padding_t">
                                <div class="col-md-8 col-md-offset-2 text_center" id="txtHint">
                             
                                </div>
                                 <div class="col-md-6">
                            <img src="image/1.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 500px;
    height: 220px; margin-bottom: 7px;">
                                    
                                       <div class="cl-md-12">
                                           <form action="/file-upload" class="dropzone" enctype="multipart/form-data">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form>
                                       </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <form  name="myForm" action="" method="POST" role="form">
                                            <div class="form-group">
                                                <label for="">عنوان متن:</label>
                      <input name="title_text_1" type="text" class="form-control" id="" value="<?=$title_sample_1?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">عنوان عکس:</label>
                    <input name="title_pic_1" type="text" class="form-control" id="" value="<?=$title_pic_sample_1?>">
                                            </div>
                                           <div class="form-group">
                                                <label for=""> توضیح نمونه کار:</label>
                                                
     <textarea name="main_text_1" id="input" class="form-control" rows="9" required="required"><?=$text_sample_1?></textarea>

                                            </div>
                                        
                                    </div>
                                    
                            <div class="col-md-12 text_center">
 <button type="button" name="button_sample_1" onclick="showUser()" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>
                          به روز رسانی  
                           
                           </button>
                            
                            </div>
                                 </form>
                                    </div>
                               </div>
<!--                               ############################## 2  ############################-->
                               <div role="tabpanel" class="tab-pane" id="home_11">
                                   <div class="row padding_t">
                                   <div class="col-md-8 col-md-offset-2 text_center" id="txtHint_1">
                             
                                   </div>
                                 <div class="col-md-6">
                            <img src="image/1.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 500px;
    height: 220px; margin-bottom: 7px;">
                                    
                                       <div class="cl-md-12">
                                           <form action="/file-upload" class="dropzone" enctype="multipart/form-data">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form>
                                       </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <form name="myForm_1" action=""  method="POST" role="form">
                                            <div class="form-group">
                                                <label for="">عنوان متن:</label>
                               <input type="text" name="title_text_2" class="form-control" id="" value="<?=$title_sample_2?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">عنوان عکس:</label>
                <input type="text" name="title_pic_2" class="form-control" id="" value="<?=$title_pic_sample_2?>">
                                            </div>
                                           <div class="form-group">
                                                <label for=""> توضیح نمونه کار:</label>
                                                
 <textarea name="main_text_2" id="input" class="form-control" rows="9" required="required"><?=$text_sample_2?></textarea>

                                            </div>
                                       
                                    </div>
   <div class="col-md-12 text_center">
 <button type="button" name="button_sample_1" onclick="edit()" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>
                          به روز رسانی  
                           
                           </button>
                            
                            </div>
                                 </form>
                                    </div>                          
                               </div>
<!--                               ############### 3 #####################-->
                               <div role="tabpanel" class="tab-pane" id="home_12"> 
                               <div class="row padding_t">
                                <div class="col-md-8 col-md-offset-2 text_center" id="txtHint_2">
                             
                                   </div>
                                 <div class="col-md-6">
                            <img src="image/1.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 500px;
    height: 220px; margin-bottom: 7px;">
                                    
                                       <div class="cl-md-12">
                                           <form action="/file-upload" class="dropzone" enctype="multipart/form-data">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form>
                                       </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <form name="myForm_2" action="" method="POST" role="form">
                                            <div class="form-group">
                                                <label for="">عنوان متن:</label>
                             <input name="title_text_3" type="text" class="form-control" id="" value="<?=$title_sample_3?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">عنوان عکس:</label>
                 <input type="text" name="title_pic_3" class="form-control" id="" value="<?=$title_pic_sample_3?>">
                                            </div>
                                           <div class="form-group">
                                                <label for=""> توضیح نمونه کار:</label>
                                                
       <textarea name="main_text_3" id="input" class="form-control" rows="9" required="required"><?=$text_sample_3?></textarea>

                                            </div>
                                        
                                    </div>
   
   <div class="col-md-12 text_center">
 <button type="button" name="button_sample_1" onclick="edit1()" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>
                          به روز رسانی  
                           
                           </button>
                            
                            </div>
                                   </form>
                                    </div>
                               </div>
<!--                               ############################# 4 ##########################-->
                               <div role="tabpanel" class="tab-pane" id="home_13">
                                   <div class="row padding_t">
                                   <div class="col-md-8 col-md-offset-2 text_center" id="txtHint_3">
                             
                                   </div>
                                 <div class="col-md-6">
                            <img src="image/1.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 500px;
    height: 220px; margin-bottom: 7px;">
                                    
                                       <div class="cl-md-12">
                                           <form action="/file-upload" class="dropzone" enctype="multipart/form-data">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form>
                                       </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <form action="" name="myForm_3" method="POST" role="form">
                                            <div class="form-group">
                                                <label for="">عنوان متن:</label>
                             <input type="text" name="title_text_4" class="form-control" id="" value="<?=$title_sample_4?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">عنوان عکس:</label>
                      <input type="text" name="title_pic_4" class="form-control" id="" value="<?=$title_pic_sample_4?>">
                                            </div>
                                           <div class="form-group">
                                                <label for=""> توضیح نمونه کار:</label>
                                                
        <textarea name="main_text_4" id="input" class="form-control" rows="9" required="required"><?=$text_sample_4?></textarea>

                                            </div>
                                        
                                    </div>
   <div class="col-md-12 text_center">
 <button type="button" name="button_sample_1" onclick="edit2()" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>
                          به روز رسانی  
                           
                           </button>
                            
                            </div>
                                     </form>
                                    </div>
                               </div>
<!--                               ################################ 5 ##################################-->
                               <div role="tabpanel" class="tab-pane" id="home_14">
                                   <div class="row padding_t">
                                    <div class="col-md-8 col-md-offset-2 text_center" id="txtHint_4"></div>
                                 <div class="col-md-6">
                            <img src="image/1.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 500px;
    height: 220px; margin-bottom: 7px;">
                                    
                                       <div class="cl-md-12">
                                           <form action="/file-upload" class="dropzone" enctype="multipart/form-data">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form>
                                       </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <form  action="" name="myForm_4" method="POST" role="form">
                                            <div class="form-group">
                                                <label for="">عنوان متن:</label>
                        <input type="text" name="title_text_5" class="form-control" id="" value="<?=$title_sample_5?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">عنوان عکس:</label>
                          <input type="text" name="title_pic_5" class="form-control" id="" value="<?=$title_pic_sample_5?>">
                                            </div>
                                           <div class="form-group">
                                                <label for=""> توضیح نمونه کار:</label>
                                                
           <textarea name="main_text_5" id="input" class="form-control" rows="9" required="required"><?=$text_sample_5?></textarea>

                                            </div>
                                        
                                    </div>
           <div class="col-md-12 text_center">
                                  <button type="button" name="button_sample_1" onclick="edit3()" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>
                          به روز رسانی  
                           
                           </button>
                            </div>
                                     </form>
                                    </div>
                               </div>
<!--                               ###################################### 6 ################################-->
                               <div role="tabpanel" class="tab-pane" id="home_15">
                                   <div class="row padding_t">
                                   <div class="col-md-8 col-md-offset-2 text_center" id="txtHint_5"></div>
                          <div class="col-md-8 col-md-offset-2 text_center" id="txtHint_5"></div>
                                 <div class="col-md-6">
                            <img src="image/1.jpg" class="img-thumbnail" alt="Cinque Terre" style="width: 500px;
    height: 220px; margin-bottom: 7px;">
                                    
                                       <div class="cl-md-12">
                                           <form action="/file-upload" class="dropzone" enctype="multipart/form-data">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form>
                                       </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <form action="" name="myForm_5" method="POST" role="form">
                                            <div class="form-group">
                                                <label for="">عنوان متن:</label>
                               <input type="text" name="title_text_6" class="form-control" id="" value="<?=$title_sample_6?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">عنوان عکس:</label>
                      <input type="text"  name="title_pic_6" class="form-control" id="" value="<?=$title_pic_sample_6?>">
                                            </div>
                                           <div class="form-group">
                                                <label for=""> توضیح نمونه کار:</label>
                                                
    <textarea name="main_text_6" id="input" class="form-control" rows="9" required="required"><?=$text_sample_6?></textarea>

                                            </div>
                                       
                                    </div>
    <div class="col-md-12 text_center">
                                  <button type="button" name="button_sample_1" onclick="edit4()" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>
                          به روز رسانی  
                           
                           </button>
                            </div>

                                    </div>
                                     </form>
                               </div>
                   </div>
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                          
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                   
                                   
                                    
                                    
                   </div>
                </div>

                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require "parts/menu.php";?>
    </div>
</div>
</body>
</html>