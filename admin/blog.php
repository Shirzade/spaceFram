
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
           بخش مدیریت یادداشت ها
                    </b>
                </div>
                <div class="panel-body">
                      <div class="row">
                            <div class="col-md-12 text_center">
                 <ul class="list-inline">
                        <li>
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<button class="btn btn-success"><span class="glyphicon glyphicon-earphone"></span>وارد کردن مطلب جدید</button>
                          </a>
                        </li>
                        <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           <button class="btn btn-success"><span class="glyphicon glyphicon-user"></span> مدیریت   مطالب قبلی</button>
                            </a> 
                        </li>
                        <li></li>
                    </ul>
                            </div>
                        </div>
   <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
                                
                                  <form action="" method="post">
                                <?php 
                                  if(isset($_POST['button_insert'])){
                                    $a_title_text = $_POST['title_text'];
                                    $a_main_text = $_POST['main_text'];
               $query_comment ="INSERT INTO help_page  (title_text,main_text)
	            VALUES ('$a_title_text','$a_main_text')";
               $query = $DBM->dbh->prepare($query_comment);
               $query->execute();
                                  
                                  }
                                ?>
                                   <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                                وارد کردن مطلب جدید به بخش یادداشت ها     
                                             </h2>
                                           </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                    <label for="email"> عنوان مطلب :</label>
                    <input type="text" name="title_text" class="form-control" value="">
                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                    <label for="email"> متن اصلی:</label>
                                    <textarea name="main_text" class="form-control" id="" rows="10"></textarea>
                                       </div>
                                        </div>
                                    </div>
                                     <div class="row">
                            <div class="col-md-12 text_center">
                 <button  type="submit" name="button_insert" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
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
                                                مدیریت مطالب وارد شده در قسمت یادداشت ها    
                                             </h2>
                                           </div>  
              <?php require "scripts.js";?>                          
                                <?php
 $query_comment = "SELECT id,title_text,main_text FROM help_page WHERE id > 1";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
              while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $a_title_text = $row['title_text'] ; 
              $a_id =$row['id']; 
              $a_title_text =$row['title_text']; 
              $a_main_text =$row['main_text']; 
               ?>
                 <?php
                   if(!empty($_GET['d']))
                   {
                      $id_content = $_GET['d'];
                      echo $id_content;
                   }
                  ?>
                  <?php
                  if(isset($_GET['id'])){
                   $id_text = $_GET['id'];
                   $update="DELETE FROM help_page WHERE id='$id_text';";
                    $stmt=$DBM->dbh->prepare($update);
                    $stmt->execute(); 
                  
                  }
               
                   ?>
                  <div class="col-md-12 style_blog">
                     <div class="col-md-8" id="txtHint_20"></div>
                     
                      <div class="col-md-8 text_left">
                      <div class="col-md-6">
                           <form action="" name="blogForm" method="post">
     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?=$a_id?>" aria-expanded="false" aria-controls="collapseTwo">
<button class="btn btn-info"><span class="glyphicon glyphicon-edit"></span>ویرایش</button>
                          </a>
                          </form>
                      </div>
                      <div class="col-md-6">
                                             <input type="hidden"  value="<?=$a_id?>" name="delbutt" id="">
<form action="blog.php?id=<?=$a_id?>" method="post">
    <button  class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span>حذف</button>
</form> 
                      </div>
                     <?php
                      if(isset($_GET['te'])){
                       $id = $_GET['te'];
                       $title_text_edit = $_POST['title_text_edit'];
                       $main_text_edit = $_POST['main_text_edit'];
 $update=" UPDATE help_page SET title_text='$title_text_edit',main_text='$main_text_edit' WHERE id ='$id'";
                        $stmt=$DBM->dbh->prepare($update);
                        $stmt->execute();
                       }  
                      ?>
                    

               <form action="blog.php?te=<?=$a_id?>" method="post">
                
                <div id="<?=$a_id?>" class="collapse text_justy" role="tabpanel" aria-labelledby="headingTwo">
        
                               <div class="form-group">
                                    <label for="email"> عنوان مطلب :</label>
     <input type="text" name="title_text_edit" value="<?=$a_title_text?>" class="form-control" value="">
                                </div>
                            <div class="form-group">
                                    <label for="email"> متن اصلی:</label>
                                    <input type="hidden" name="hiddenInput" value="<?=$a_id?>">
<textarea name="main_text_edit" class="form-control" id="" rows="10"><?=$a_main_text?> </textarea>
                              </div>
                                    <div class="row">
                            <div class="col-md-12 text_center">
                 <button  type="" name="button_edit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>به روز رسانی</button>
                            </div>
                        </div>
                              
                 </div>
                 </form>
             </div>
                  <div class="col-md-4">
                  
                 <?= $a_title_text?>
                 
                 </div>
                  </div> 
             
            
               <?php }?>
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