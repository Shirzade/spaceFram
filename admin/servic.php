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
                        صفحه خدمات ما
                    </b>
                </div>
                <div class="panel-body">
                    <div class="row">
                            <div class="col-md-12 text_center">
                 <ul class="list-inline">
                        <li>
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <button class="btn btn-success"><span class="glyphicon glyphicon-th"></span>ویرایش متن ها</button>
                          </a>
                        </li>
                        <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <button class="btn btn-success"><span class="glyphicon glyphicon-user"></span>ویرایش خدمت ها</button>
                            </a> 
                        </li>
                        <li></li>
                    </ul>
                            </div>
                        </div>

                </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                               <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                               بخش خدمات ما
                                             </h2>
                                           </div>
                                    </div>
                                         <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">وارد کردن نمونه جدید</a></li>
<!--    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">آرشیو کار های وارد شده</a></li>-->

  </ul> 
 <div class="tab-content background_color_tab">
<!--
    <div role="tabpanel" class="tab-pane active" id="home">
     <div class="row padding_t">
        </div>
         </div>
--> 
            <?php 
             if(isset($_POST['servis_page_text'])){
               $a_title_pic = $_POST['title_pic'];
               $a_title_text = $_POST['title_text'];
               $a_title_page = $_POST['title_page'];
               $a_text_service = $_POST['text_service'];
 $update=" UPDATE service_page SET             title_page='$a_title_page',title_pic='$a_title_pic',title_text='$a_title_text',main_text='$a_text_service' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();                                
             }
            ?>
              <?php
           $query_comment = "SELECT title_page,title_pic,title_text,main_text FROM service_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_title_page_1= $row['title_page'];
               $a_title_pic_1= $row['title_pic'];
               $a_title_text_1 = $row['title_text'];
               $a_main_text_1 = $row['main_text'];
               ?>
           <div role="tabpanel" class="tab-pane active" id="profile">
              <form action="" method="post">
                          <div class="row padding_t">
                              <div class="col-md-4">
                           <div class="form-group">
                                    <label for="email">عنوان روی عکس:</label>
                          <input type="text" name="title_pic" class="form-control" value="<?=$a_title_pic_1?>">
                                       </div>
                              </div>
                           <div class="col-md-4">
                           <div class="form-group">
                                    <label for="email"> عنوان بالای متن:</label>
                          <input type="text" name="title_text" class="form-control" value="<?=$a_title_text_1?>">
                                       </div>
                          </div>
                          <div class="col-md-4">
                           <div class="form-group">
                                    <label for="email"> عنوان بالای صفحه:</label>
                          <input type="text" name="title_page" class="form-control" value="<?=$a_title_page_1?>">
                                       </div>
                          </div>
                          <div class="col-md-12">
                    <label for="email"> متن خدمات:</label>
           <textarea name="text_service" class="form-control" cols="30" rows="5"><?=$a_main_text_1?></textarea> 
                    </div>
                          </div> 
                          
               
                     <div class="row">
                            <div class="col-md-12 text_center">
                                <button type="submit" name="servis_page_text" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                            </div>
                        </div>
               </form>    
           </div>
         </div>
   </div>
      

                             
                </div>
           <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                 <div class="panel-body">
                               <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                               بخش خدمات ما
                                             </h2>
                                           </div>
                                    </div>
                                                                           <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">وارد کردن نمونه جدید</a></li>
<!--    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">آرشیو کار های وارد شده</a></li>-->

  </ul>
                <div class="tab-content background_color_tab">
                   <?php 
                    if(isset($_POST['servis_1'])){
                            
                          
                         $a_name_pic_ser_1 = $_FILES['pic_servis_1']['name'];
                        
                         $a_target_dir = "../images/";
                         $a_target_pic_ser_1 = $a_target_dir.basename($a_name_pic_ser_1);
                         $a_imageFileType = pathinfo($a_target_pic_ser_1,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_servis_1"]["tmp_name"], $a_target_pic_ser_1);
                         $a_target_pic_ser_1_db ="images/".basename($a_name_pic_ser_1); 
                          
                        
                         $a_title_servis_1 = $_POST['title_servis_1'];
                         $a_description_servis_1 = $_POST['description_1'];
                           if(empty($a_name_pic_ser_1)){
               $update=" UPDATE service_page SET               title_servis_1='$a_title_servis_1',description_servis_1='$a_description_servis_1' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                          } else{
                               $update=" UPDATE service_page SET             pic_servis_1='$a_target_pic_ser_1_db',title_servis_1='$a_title_servis_1',description_servis_1='$a_description_servis_1' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                           }
                                               
                       
                     }
           $query_comment = "SELECT pic_servis_1,title_servis_1,description_servis_1 FROM service_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_pic_servis_1_s= $row['pic_servis_1'];
               $a_title_servis_1_s= $row['title_servis_1'];
               $a_description_servis_1_s = $row['description_servis_1'];
               ?>
           
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <form action="" method="post"  enctype="multipart/form-data">
                         <div class="row padding_t">
                             <div class="col-md-3">
                                 <div class="panel panel-default">
                             <div class="panel-body text_center">
                    <img src="../<?=$a_pic_servis_1_s?>" class="img-thumbnail" alt="" style="width: 137px;height:80px;">
                              <div class="form-group margin_top_ad">
                                          <label for="email">  تغییر عکس :</label>
                                           <input type="file" name="pic_servis_1" class="form-control" id="email" value="<?=$a_pic_servis_1_s?>">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> عنوان خدمت :</label>
                                           <input type="text" name="title_servis_1" value="<?=$a_title_servis_1_s?>" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> توضیحات :</label>
     <textarea name="description_1" class="form-control" cols="30" rows="3"><?=$a_description_servis_1_s?></textarea>
                                          </div>
                                          <div class="col-md-12 text_center">
                                <button type="submit" name="servis_1" class="btn btn-success"><span class="glyphicon                                      glyphicon-ok"></span>انتشار</button>
                            </div>
                                          </div>
                                        
                                 </div>
                             </div>
<!--                             ################################## End of servis one ###############################-->
                                 <?php 
                    if(isset($_POST['servis_2'])){
                         $a_name_pic_ser_2 = $_FILES['pic_servis_2']['name'];
                         $a_target_dir = "../images/";
                         $a_target_pic_ser_2 = $a_target_dir.basename($a_name_pic_ser_2);
                         $a_imageFileType = pathinfo($a_target_pic_ser_2,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_servis_2"]["tmp_name"], $a_target_pic_ser_2);
                          $a_target_pic_ser_2_db ="images/".basename($a_name_pic_ser_2); 
                         $a_title_servis_2 = $_POST['title_servis_2'];
                         $a_description_servis_2 = $_POST['description_2'];
                           if(empty($a_name_pic_ser_2)){
               $update=" UPDATE service_page SET               title_servis_2='$a_title_servis_2',description_servis_2='$a_description_servis_2' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                          } else{
                               $update=" UPDATE service_page SET             pic_servis_2='$a_target_pic_ser_2_db',title_servis_2='$a_title_servis_2',description_servis_2='$a_description_servis_2' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                           }
                                               
                       
                     }
           $query_comment = "SELECT pic_servis_2,title_servis_2,description_servis_2 FROM service_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_pic_servis_2_s= $row['pic_servis_2'];
               $a_title_servis_2_s= $row['title_servis_2'];
               $a_description_servis_2_s = $row['description_servis_2'];
               ?>
                             <div class="col-md-3">
                                            <div class="panel panel-default">
                                          <div class="panel-body text_center">
                <img src="../<?=$a_pic_servis_2_s?>" class="img-thumbnail" alt="" style="width: 137px;height:80px;">
                              <div class="form-group margin_top_ad">
                                          <label for="email">  تغییر عکس :</label>
                                           <input type="file" name="pic_servis_2" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> عنوان خدمت :</label>
                                           <input type="text"name="title_servis_2" value="<?=$a_title_servis_2_s?>" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> توضیحات :</label>
 <textarea  name="description_2" class="form-control" cols="30" rows="3"><?=$a_description_servis_2_s?></textarea>
                                          </div>
                                          <div class="col-md-12 text_center">
                                <button type="submit" name="servis_2" class="btn btn-success"><span class="glyphicon                                      glyphicon-ok"></span>انتشار</button>
                            </div>
                                          </div>
                                        
                                 </div>
                           
                             </div>
<!--                             ############################## End of Two ################################-->
         <div class="col-md-3">
                 <?php 
                    if(isset($_POST['servis_3'])){
                   
                   
                   
                         $a_name_pic_ser_3 = $_FILES['pic_servis_3']['name'];
                        
                         $a_target_dir = "../images/";
                         $a_target_pic_ser_3 = $a_target_dir.basename($a_name_pic_ser_3);
                         $a_imageFileType = pathinfo($a_target_pic_ser_3,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_servis_3"]["tmp_name"], $a_target_pic_ser_3);
                         $a_target_pic_ser_3_db ="images/".basename($a_name_pic_ser_3); 
                         $a_title_servis_3 = $_POST['title_servis_3'];
                         $a_description_servis_3 = $_POST['description_3'];
                           if(empty($a_name_pic_ser_3)){
               $update=" UPDATE service_page SET               title_servis_3='$a_title_servis_3',description_servis_3='$a_description_servis_3' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                          } else{
                               $update=" UPDATE service_page SET             pic_servis_3='$a_target_pic_ser_3_db',title_servis_3='$a_title_servis_3',description_servis_3='$a_description_servis_3' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                           }
                                               
                       
                     }
           $query_comment = "SELECT pic_servis_3,title_servis_3,description_servis_3 FROM service_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_pic_servis_3_s= $row['pic_servis_3'];
               $a_title_servis_3_s= $row['title_servis_3'];
               $a_description_servis_3_s = $row['description_servis_3'];
               ?>
                                  
                                            <div class="panel panel-default">
                                          <div class="panel-body text_center">
                    <img src="../<?=$a_pic_servis_3_s?>" class="img-thumbnail" alt="" style="width: 137px;height:80px;">
                              <div class="form-group margin_top_ad">
                                          <label for="email">  تغییر عکس  :</label>
        <input type="file" name="pic_servis_3"  class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> عنوان خدمت :</label>
         <input type="text"  name="title_servis_3"  class="form-control" id="email" value="<?=$a_title_servis_3_s?>">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> توضیحات :</label>
<textarea name="description_3" class="form-control" cols="30" rows="3"><?=$a_description_servis_3_s?></textarea>
                                          </div>
                                          <div class="col-md-12 text_center">
                                <button type="submit" name="servis_3" class="btn btn-success"><span class="glyphicon                                      glyphicon-ok"></span>انتشار</button>
                            </div>
                                          </div>
                                        
                                 </div>
                                 
                             </div>
<!--                             #######################################End of Three #############################-->
                             <div class="col-md-3">
                                      <?php 
                    if(isset($_POST['servis_4'])){
                         $a_name_pic_ser_4 = $_FILES['pic_servis_4']['name'];
                        
                         $a_target_dir = "../images/";
                         $a_target_pic_ser_4 = $a_target_dir.basename($a_name_pic_ser_4);
                         $a_imageFileType = pathinfo($a_target_pic_ser_4,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_servis_4"]["tmp_name"], $a_target_pic_ser_4);
                         $a_target_pic_ser_4_db ="images/".basename($a_name_pic_ser_4); 
                         $a_title_servis_4 = $_POST['title_servis_4'];
                         $a_description_servis_4 = $_POST['description_4'];
                           if(empty($a_name_pic_ser_4)){
               $update=" UPDATE service_page SET               title_servis_4='$a_title_servis_4',description_servis_4='$a_description_servis_4' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                          } else{
                               $update=" UPDATE service_page SET             pic_servis_4='$a_target_pic_ser_4_db',title_servis_4='$a_title_servis_4',description_servis_4='$a_description_servis_4' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                           }
                                               
                       
                     }
           $query_comment = "SELECT pic_servis_4,title_servis_4,description_servis_4 FROM service_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_pic_servis_4_s= $row['pic_servis_4'];
               $a_title_servis_4_s= $row['title_servis_4'];
               $a_description_servis_4_s = $row['description_servis_4'];
               ?>
                                  
                                            <div class="panel panel-default">
                                          <div class="panel-body text_center">
                     <img src="../<?=$a_pic_servis_4_s?>" class="img-thumbnail" alt="" style="width: 137px;height:80px;">
                              <div class="form-group margin_top_ad">
                                          <label for="email">  تغییر عکس  :</label>
                                           <input type="file" name="pic_servis_4" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> عنوان خدمت :</label>
                                           <input type="text" value="<?=$a_title_servis_4_s?>" name="title_servis_4" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> توضیحات :</label>
                              <textarea name="description_4" class="form-control" cols="30" rows="3"><?=$a_description_servis_4_s?></textarea>
                                          </div>
                                          <div class="col-md-12 text_center">
                                <button type="submit" name="servis_4" class="btn btn-success"><span class="glyphicon                                      glyphicon-ok"></span>انتشار</button>
                            </div>
                                          </div>
                                        
                                 </div>
                                 
                             </div>
<!--                             ######################### End of four #################################-->
                         </div>
                          <div class="row padding_t_2">
                                     
                             <div class="col-md-3">
                     <?php 
                    if(isset($_POST['servis_5'])){
                         $a_name_pic_ser_5 = $_FILES['pic_servis_5']['name'];
                        
                         $a_target_dir = "../images/";
                         $a_target_pic_ser_5 = $a_target_dir.basename($a_name_pic_ser_5);
                         $a_imageFileType = pathinfo($a_target_pic_ser_5,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_servis_5"]["tmp_name"], $a_target_pic_ser_5);
                         $a_target_pic_ser_5_db ="images/".basename($a_name_pic_ser_5); 
                         $a_title_servis_5 = $_POST['title_servis_5'];
                         $a_description_servis_5 = $_POST['description_5'];
                           if(empty($a_name_pic_ser_5)){
               $update=" UPDATE service_page SET               title_servis_5='$a_title_servis_5',description_servis_5='$a_description_servis_5' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                          } else{
                               $update=" UPDATE service_page SET             pic_servis_5='$a_target_pic_ser_5_db',title_servis_5='$a_title_servis_5',description_servis_5='$a_description_servis_5' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                           }
                                               
                       
                     }
           $query_comment = "SELECT pic_servis_5,title_servis_5,description_servis_5 FROM service_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_pic_servis_5_s= $row['pic_servis_5'];
               $a_title_servis_5_s= $row['title_servis_5'];
               $a_description_servis_5_s = $row['description_servis_5'];
               ?>
                   
                                 <div class="panel panel-default">
                                          <div class="panel-body text_center">
               <img src="../<?=$a_pic_servis_5_s?>" class="img-thumbnail" alt="" style="width: 137px;height:80px;">
                              <div class="form-group margin_top_ad">
                                          <label for="email">  تغییر عکس  :</label>
                                           <input type="file" name="pic_servis_5" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> عنوان خدمت :</label>
            <input type="text" name="title_servis_5" class="form-control"  value="<?=$a_title_servis_5_s?>" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> توضیحات :</label>
 <textarea name="description_5" class="form-control" cols="30" rows="3"><?=$a_description_servis_4_s?></textarea>
                                          </div>
                                          <div class="col-md-12 text_center">
                                <button type="submit" name="servis_5" class="btn btn-success"><span class="glyphicon                                      glyphicon-ok"></span>انتشار</button>
                            </div>
                                          </div>
                                        
                                 </div>
                             </div>
<!--                             ############################ End of five ###########################-->
                             <div class="col-md-3">
                 <?php 
                    if(isset($_POST['servis_6'])){
                         $a_name_pic_ser_6 = $_FILES['pic_servis_6']['name'];
                        
                         $a_target_dir = "../images/";
                         $a_target_pic_ser_6 = $a_target_dir.basename($a_name_pic_ser_6);
                         $a_imageFileType = pathinfo($a_target_pic_ser_6,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_servis_6"]["tmp_name"], $a_target_pic_ser_6);
                         $a_target_pic_ser_6_db ="images/".basename($a_name_pic_ser_6); 
                         $a_title_servis_6 = $_POST['title_servis_6'];
                         $a_description_servis_6 = $_POST['description_6'];
                           if(empty($a_name_pic_ser_6)){
               $update=" UPDATE service_page SET               title_servis_6='$a_title_servis_6',description_servis_6='$a_description_servis_6' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                          } else{
                               $update=" UPDATE service_page SET             pic_servis_6='$a_target_pic_ser_6_db',title_servis_6='$a_title_servis_6',description_servis_6='$a_description_servis_6' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                           }
                                               
                       
                     }
           $query_comment = "SELECT pic_servis_6,title_servis_6,description_servis_6 FROM service_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_pic_servis_6_s= $row['pic_servis_6'];
               $a_title_servis_6_s= $row['title_servis_6'];
               $a_description_servis_6_s = $row['description_servis_6'];
               ?>
                                           
                                            <div class="panel panel-default">
                                          <div class="panel-body text_center">
     <img src="../<?=$a_pic_servis_6_s?>" class="img-thumbnail" alt="" style="width: 137px;height:80px;">
                              <div class="form-group margin_top_ad">
                                          <label for="email"> تغییر عکس:</label>
                      <input type="file" name="pic_servis_6" class="form-control"   vaid="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> عنوان خدمت :</label>
             <input type="text" name="title_servis_6" value="<?=$a_title_servis_6_s?>" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> توضیحات :</label>
 <textarea name="description_6" class="form-control" cols="30" rows="3"><?=$a_description_servis_6_s?></textarea>
                                          </div>
                                          <div class="col-md-12 text_center">
                                <button type="submit" name="servis_6" class="btn btn-success"><span class="glyphicon                                      glyphicon-ok"></span>انتشار</button>
                            </div>
                                          </div>
                                        
                                 </div>
                           
                             </div>
<!--                             ############################# End of six #############################-->
                             <div class="col-md-3">
                                  <?php 
                    if(isset($_POST['servis_7'])){
                         $a_name_pic_ser_7=$_FILES['pic_servis_7']['name'];
                        
                         $a_target_dir = "../images/";
                         $a_target_pic_ser_7 = $a_target_dir.basename($a_name_pic_ser_7);
                         $a_imageFileType = pathinfo($a_target_pic_ser_7,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_servis_7"]["tmp_name"], $a_target_pic_ser_7);
                         $a_target_pic_ser_7_db ="images/".basename($a_name_pic_ser_7); 
                         $a_title_servis_7 = $_POST['title_servis_7'];
                         $a_description_servis_7 = $_POST['description_7'];
                           if(empty($a_name_pic_ser_7)){
               $update=" UPDATE service_page SET               title_servis_7='$a_title_servis_7',description_servis_7='$a_description_servis_7' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                          } else{
                               $update=" UPDATE service_page SET             pic_servis_7='$a_target_pic_ser_7_db',title_servis_7='$a_title_servis_7',description_servis_7='$a_description_servis_7' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                           }
                                               
                       
                     }
           $query_comment = "SELECT pic_servis_7,title_servis_7,description_servis_7 FROM service_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_pic_servis_7_s= $row['pic_servis_7'];
               $a_title_servis_7_s= $row['title_servis_7'];
               $a_description_servis_7_s = $row['description_servis_7'];
               ?>
                                  
                                            <div class="panel panel-default">
                                          <div class="panel-body text_center">
                <img src="../<?=$a_pic_servis_7_s?>" class="img-thumbnail" alt="" style="width: 137px;height:80px;">
                              <div class="form-group margin_top_ad">
                                          <label for="email">  عکس کوچک :</label>
             <input type="file" name="pic_servis_7" value="<?=$a_title_servis_7_s?>" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> عنوان خدمت :</label>
          <input type="text" name="title_servis_7" value="<?=$a_title_servis_7_s?>" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> توضیحات :</label>
         <textarea name="description_7" class="form-control" cols="30" rows="3"><?=$a_description_servis_7_s?></textarea>
                                          </div>
                                          <div class="col-md-12 text_center">
                                <button type="submit" name="servis_7" class="btn btn-success"><span class="glyphicon                                      glyphicon-ok"></span>انتشار</button>
                            </div>
                                          </div>
                                        
                                 </div>
                                 
                             </div>
                             <div class="col-md-3">
                                                    <?php 
                    if(isset($_POST['servis_8'])){
                         $a_name_pic_ser_8=$_FILES['pic_servis_8']['name'];
                        
                         $a_target_dir = "../images/";
                         $a_target_pic_ser_8 = $a_target_dir.basename($a_name_pic_ser_8);
                         $a_imageFileType = pathinfo($a_target_pic_ser_8,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_servis_8"]["tmp_name"], $a_target_pic_ser_8);
                          $a_target_pic_ser_8_db ="images/".basename($a_name_pic_ser_8); 
                         $a_title_servis_8 = $_POST['title_servis_8'];
                         $a_description_servis_8 = $_POST['description_8'];
                           if(empty($a_name_pic_ser_8)){
               $update=" UPDATE service_page SET               title_servis_8='$a_title_servis_8',description_servis_8='$a_description_servis_8' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                          } else{
                               $update=" UPDATE service_page SET             pic_servis_8='$a_target_pic_ser_8_db',title_servis_8='$a_title_servis_8',description_servis_8='$a_description_servis_8' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                           }
                                               
                       
                     }
           $query_comment = "SELECT pic_servis_8,title_servis_8,description_servis_8 FROM service_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
               $a_pic_servis_8_s= $row['pic_servis_8'];
               $a_title_servis_8_s= $row['title_servis_8'];
               $a_description_servis_8_s = $row['description_servis_8'];
               ?>
                                  
                                            <div class="panel panel-default">
                                          <div class="panel-body text_center">
                <img src="../<?=$a_pic_servis_8_s?>" class="img-thumbnail" alt="" style="width: 137px;height:80px;">
                              <div class="form-group margin_top_ad">
                                          <label for="email">  عکس کوچک :</label>
                                           <input type="file" name="pic_servis_8" class="form-control" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> عنوان خدمت :</label>
                 <input type="text" name="title_servis_8" class="form-control" value="<?=$a_title_servis_8_s?>" id="email">
                                       </div>
                                          <div class="form-group margin_top_ad">
                                          <label for="email"> توضیحات :</label>
         <textarea name="description_8" class="form-control" cols="30" rows="3"><?=$a_description_servis_8_s?></textarea>
                                          </div>
                                          <div class="col-md-12 text_center">
                                <button type="submit" name="servis_8" class="btn btn-success"><span class="glyphicon                                      glyphicon-ok"></span>انتشار</button>
                            </div>
                                          </div>
                                        
                                 </div>
                                 
                             </div>
                         </div>
                         </form>
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