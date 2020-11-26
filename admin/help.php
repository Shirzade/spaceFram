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
            بخش دعوت به همکاری  
                    </b>
                </div>
                <div class="panel-body">
                      <div class="row">
                            <div class="col-md-12 text_center">
                 <ul class="list-inline">
                        <li>
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<button class="btn btn-success"><span class="glyphicon glyphicon-earphone"></span>متن اصلی</button>
                          </a>
                        </li>
                        <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           <button class="btn btn-success"><span class="glyphicon glyphicon-user"></span> مدیریت  فرم تماس</button>
                            </a> 
                        </li>
                        <li></li>
                    </ul>
                            </div>
                        </div>
   <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
                                 <?php 
                   if(isset($_POST['button_help_us'])){
                       $a_pic_page = $_FILES['pic_page']['name'];  
                       $a_target_dir = "../images/";
                      $a_target_pic_ = $a_target_dir.basename($a_pic_page);
                      $a_imageFileType = pathinfo($a_target_pic_,PATHINFO_EXTENSION);
                         move_uploaded_file($_FILES["pic_page"]["tmp_name"], $a_target_pic_);
                         $a_target_pic_db ="images/".basename($a_target_pic_); 
                       
                       $a_main_text = $_POST['main_text']; 
                       $a_title_text = $_POST['title_text']; 
                       $a_title_page = $_POST['title_page']; 
                       if(empty($a_pic_page)){
$update=" UPDATE help_page SET main_text='$a_main_text',title_text='$a_title_text',title_page='$a_title_page' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                       
                       } else{
                $update=" UPDATE help_page SET main_text='$a_main_text',title_text='$a_title_text',title_page='$a_title_page',pic_page = '$a_target_pic_db' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                       }

                   }
                 ?>

             <?php
           $query_comment = "SELECT * FROM help_page";
           $query = $DBM->dbh->prepare($query_comment);
           $query->execute();
         $row = $query->fetch(PDO::FETCH_ASSOC);
              extract($row);
               ?>
                                  <form action="" method="post" enctype="multipart/form-data">
                                   <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                                متن اصلی دعوت به همکاری
                                             </h2>
                                           </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                            <div class="col-md-6">
                     <img src="../<?=$pic_page?>" alt="" class="img-thumbnail" style="width:182px; height:152px">
                                            </div>
                                            <div class="col-md-6">
                                                      <div class="form-group">
                                    <label for="email">تصویر مربوطه:</label>
                                  <input type="file" name="pic_page" class="form-control" value="<?=$title_page?>">
                                     </div>
                                            </div>
                                     
                                      </div>
                                       <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="email">عنوان صفحه:</label>
                                  <input type="text" name="title_page" class="form-control" value="<?=$title_page?>">
                                     </div>
                                      <div class="form-group">
                                    <label for="email"> عنوان متن اصلی :</label>
                                  <input type="text" name="title_text" class="form-control" value="<?=$title_text?>">
                                     </div>
                                       </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                    <label for="email"> متن :</label>
              <textarea name="main_text" class="form-control" id="" cols="30" rows="10"><?=$main_text?></textarea>
                                </div>
                                        </div>
                                    </div>
                                     <div class="row">
                            <div class="col-md-12 text_center">
                                <button  type="submit" name="button_help_us" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
                            </div>
                        </div>
                        </form>
       </div>
    </div>
  <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
    <div class="panel-body">
           <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                                مدیریت فرم تماس  
                                             </h2>
                                           </div>
                       <div class="row">
                            <div class="col-md-12">
           
                 <table class="table">
                     <tr>
                         <td><b>نام:</b></td>
                         <td><b>آدرس ایمیل:</b></td>
                         <td><b>شماره تلفن:</b></td>
                         <td><b>پیام :</b></td>
                         <td></td>
                     </tr>
                            <?php
             $query_comment = "SELECT name,email,phone,massege FROM form_contact";
            $query = $DBM->dbh->prepare($query_comment);
            $query->execute();
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
               $a_name= $row['name'];
               $a_email= $row['email'];
               $a_phone = $row['phone'];
               $a_massege = $row['massege'];
               ?>
                <tr>
                     <td><?=$a_name?></td>
                     <td><?=$a_email?></td>
                     <td><?=$a_phone?></td>
                     <td><?=$a_massege?></td>
                     <td></td>
                 </tr>
                <?php }?>
                 </table>                 
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