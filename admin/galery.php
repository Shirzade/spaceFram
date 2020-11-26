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
                        بخش گالری مجصولات
                    </b>
                </div>
                <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text_center">
                 <ul class="list-inline">
                        <li>
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                         <button class="btn btn-success"><span class="glyphicon glyphicon-th"></span>بخش نمونه کارها</button>
                          </a>
                        </li>
                        <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           <button class="btn btn-success"><span class="glyphicon glyphicon-user"></span>بخش مشتریان ما</button>
                            </a> 
                        </li>
                        <li></li>
                    </ul>
                            </div>
                        </div>
                    
                                                
                          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                   <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                                بخش نمونه کارها 
                                             </h2>
                                           </div>
                                    </div>
                                   <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">وارد کردن نمونه جدید</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">آرشیو کار های وارد شده</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content background_color_tab">
    <div role="tabpanel" class="tab-pane active" id="home">
                  <div class="row padding_t">
                          <?php 
                            if(isset($_POST['galery_pic'])){
                                $a_name_pic_b = $_FILES['pic_big']['name'];
                                $a_target_dir = "../images/";
                                $a_target_file_b = $a_target_dir.basename($a_name_pic_b);
                                $a_imageFileType = pathinfo($a_target_file_b,PATHINFO_EXTENSION);
                                move_uploaded_file($_FILES["pic_big"]["tmp_name"], $a_target_file_b);
                                Thumbnail($a_target_file_b,$a_target_file_b,800,600);
                                 watermark_image($a_target_file_b);
                                $a_target_file_b_db ="images/".basename($a_name_pic_b);                           
                                
                                
                                $a_name_pic_s = $_FILES['pic_small']['name'];
                                $a_target_file_s= $a_target_dir.basename($a_name_pic_s);
                                move_uploaded_file($_FILES["pic_small"]["tmp_name"], $a_target_file_s);
                                 Thumbnail($a_target_file_s,$a_target_file_s,800,600);
                                 watermark_image($a_target_file_s);
                                $a_target_file_s_db ="images/".basename($a_name_pic_s);                           
                                $a_pic_title = $_POST['pic_title'];
                                $a_pic_dir = $_POST['pic_dir'];
                                
                $query_comment ="INSERT INTO galery_space (product_pic_small,product_pic_big,product_title_pic,directory)
	            VALUES ('$a_target_file_s_db','$a_target_file_b_db','$a_pic_title','$a_pic_dir')";
               $query = $DBM->dbh->prepare($query_comment);
               $query->execute();
                            }
                           ?>
                           <form action="" method="post" enctype="multipart/form-data">
                                         <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">   انتخاب دسته:</label>
                                  <select  name="pic_dir" class="form-control">
                                      <option value="space_frame">اسپیس فرم</option>
                                      <option value="esteage">استیج</option>
                                      <option value="baner_frame">قاب بنر</option>
                                      <option value="vetren">غرفه نمایشگاهی</option>
                                    </select>
                    
                                </div>
                            </div>
                                       <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">  عکس بزرگ :</label>
                      <input type="file" name="pic_big" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email"> عکس کوچک  :</label>
                    <input type="file" name="pic_small" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">  عنوان عکس:</label>
                     <input type="text" name="pic_title" class="form-control" id="email">
                                </div>
                            </div>
                             
                                <div class="row">
                            <div class="col-md-12 text_center">
                                <button type="submit" name="galery_pic" class="btn btn-success"><span class="glyphicon                                      glyphicon-ok"></span>انتشار</button>
                            </div>
                               
                               
                           </form>
                        
                        </div>
                        </div>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
       <div class="row">
        
          <?php 
             
               if(isset($_POST['delete_button'])){
                  $id_pic = $_GET['p'];
          $query_comment_d = "DELETE FROM galery_space  WHERE id = '$id_pic'";                                          $query = $DBM->dbh->prepare($query_comment_d);
           $query->execute();
               }
                ?>
                <?php  
                  if(isset($_POST['Update_button'])){
                        $id_pic = $_GET['p'];
                        $a_pic_big = $_FILES['pic_big']['name'];
                        $a_target_dir = "../images/";
                        $a_target_file_big = $a_target_dir.basename($a_pic_big);
                        $a_imageFileType = pathinfo($a_target_file_big,PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES["pic_big"]["tmp_name"], $a_target_file_big);
                         $a_target_file_big_db ="images/".basename($a_pic_big);
                      
                      
                      
                        $a_pic_small = $_FILES['pic_small']['name'];
                         $a_target_dir = "../images/";
                         $a_target_file_small = $a_target_dir.basename($a_pic_small);
                         $a_imageFileType = pathinfo($a_target_file_small,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_big"]["tmp_name"], $a_target_file_small);
                         $a_target_file_small_db ="images/".basename($a_pic_small);
                      
                        if(empty($a_pic_big)){
            $update=" UPDATE galery_space SET 
            product_pic_small='$a_target_file_small_db' WHERE id='$id_pic'";
           $stmt=$DBM->dbh->prepare($update);
           $stmt->execute();
                        } elseif (empty($a_pic_small)){
                         $update=" UPDATE galery_space SET 
                        product_pic_big='$a_target_file_big_db' WHERE id='$id_pic'";
                       $stmt=$DBM->dbh->prepare($update);
                       $stmt->execute();  
                        } elseif(!empty($a_pic_big) && !empty($a_pic_small)){
                            $update=" UPDATE galery_space SET 
         product_pic_small='$a_target_file_small_db', product_pic_big='$a_target_file_big_db' WHERE id='$id_pic'";
                           $stmt=$DBM->dbh->prepare($update);
                           $stmt->execute();
                        }
                  }
                ?>
           <?php
           $query_comment = "SELECT id,product_pic_small,product_pic_big,product_title_pic FROM galery_space";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
           while($row = $query->fetch(PDO::FETCH_ASSOC)){
               $a_pic_small= $row['product_pic_small'];
               $a_pic_big= $row['product_pic_big'];
               $a_pic_title = $row['product_title_pic'];
               $a_pic_id = $row['id'];
               ?>
               
            <div class="col-md-3 in_tab_padding_top">
                <div class="panel panel-default">
                       
                       <div class="panel-body text_center">
                <form action="galery.php?p=<?=$a_pic_id?>" method="post" enctype="multipart/form-data">
                                       <label for="email">  عکس کوچک :</label>
                                       <img src="../<?=$a_pic_small?>" class="img-thumbnail" alt="" style="width: 137px;height:80px;">
                                       <div class="form-group margin_top_ad">
                                 <input type="file" name="pic_small" class="form-control" id="email">
                                       </div>
                                       <label for="email">  عکس بزرگ :</label>
                                       <img src="../<?=$a_pic_big?>" class="img-thumbnail" alt="" style="width: 137px;height:100px;">
                                       <div class="form-group margin_top_ad">
                                 <input type="file" name="pic_big" class="form-control" id="email">
                                       </div>
                                         <div class="form-group margin_top_ad">
                                         <label for="email">  عنوان عکس:</label>
                       <input type="text" name="pic_big" class="form-control" value="<?=$a_pic_title?>" id="email">
                                       </div>
                           <div class="row">
                              
                               <div class="col-md-6">
 <button type="submit" name="Update_button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                               </div>
             </form>
                            <form action="galery.php?p=<?=$a_pic_id?>" method="post">
                               <div class="col-md-6">
<button type="submit" name="delete_button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-trash"></span>حذف</button>
                                                       
                               </div>
                               </form>
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
                                                بخش مشتریان ما
                                             </h2>
                                           </div>
                                    </div>
                                    <div class="row">
                                        <div>
                    <?php 
        if(isset($_POST['clientele'])){
             $a_logo_company = $_FILES['logo_company']['name']; 
               $a_target_dir = "../images/";
                 $a_target_file = $a_target_dir.basename($a_logo_company);
//                $a_imageFileType = pathinfo($a_target_file_b,PATHINFO_EXTENSION);
                move_uploaded_file($_FILES["logo_company"]["tmp_name"], $a_target_file);
             $a_name_company =$_POST['name_company'];
            $query_comment ="INSERT INTO clientele(Clientele_logo,Clientele_title)
	         VALUES ('$a_target_file','$a_name_company')";
            $query = $DBM->dbh->prepare($query_comment);
            $query->execute();
        }
                       ?>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs direct" role="tablist">
    <li role="presentation" class="active"><a href="#home_1" aria-controls="home" role="tab" data-toggle="tab">وارد کردن مشتری جدید</a></li>
    <li role="presentation"><a href="#profile_1" aria-controls="profile" role="tab" data-toggle="tab">اصلاح مشتریان وارد شده</a></li>
  </ul>
  <div class="tab-content background_color_tab">
    <div role="tabpanel" class="tab-pane active" id="home_1">
         <form action="" method="post" enctype="multipart/form-data">
             <div class="row padding_t">
                 <div class="col-md-8 col-md-offset-2">
                     <div class="col-md-6">
                         <div class="form-group">
                                    <label for="">لوگوی شرکت:</label>
                                    <input type="file" name="logo_company" class="form-control" id="email">
                                </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                                    <label for=""> اسم شرکت:</label>
                                    <input type="text" name="name_company" class="form-control" id="email">
                                </div>
                     </div>
                 </div>
                        <div class="row">
                            <div class="col-md-12 text_center">
                                <button type="submit" name="clientele" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                            </div>
                        </div>
               </div>
             </form>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile_1">
          <div class="row">
     <?php
   $query_comment = "SELECT Clientele_logo,Clientele_title FROM clientele";
   $query = $DBM->dbh->prepare($query_comment);
   $query->execute();
   while($row = $query->fetch(PDO::FETCH_ASSOC)){
   $a_logo_compony= $row['Clientele_logo'];
   $a_name_company= $row['Clientele_title'];
   ?>
              <div class="col-md-3 in_tab_padding_top">
                  <div class="panel panel-default">
                      <div class="panel-body text_center">
   
                          <img src="<?=$a_logo_compony?>" class="img-thumbnail" alt="" style="width:80px;height:80px">
                           <div class="form-group margin_top_ad">
<!--                                    <label for="email"> عکس کوچک  :</label>-->
                                    <input type="file" class="form-control" id="email">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
 <button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span>انتشار</button> 
                                    </div>
                                    <div class="col-md-6">
                                                     <button class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-trash"></span>حذف</button>
                                    </div>
                                </div>
                      </div>
                  </div>
              </div>
              <?php }?>
          </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages_1">.hhh.</div>
    <div role="tabpanel" class="tab-pane" id="settings_1">.hhhhh.</div>
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