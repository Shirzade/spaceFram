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
            مدیریت صفحات داخلی     
                    </b>
                </div>
                <div class="panel-body">
                      <div class="row">
                            <div class="col-md-12 text_center">
                 <ul class="list-inline">
                        <li>
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<button class="btn btn-success"><span class="glyphicon glyphicon-file"></span>ایجاد صفحه جدید</button>
                          </a>
                        </li>
                        <li>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           <button class="btn btn-success"><span class="glyphicon glyphicon-user"></span> مدیریت صفحات قبلی   </button>
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
                          <?php 
                            if(isset($_POST['button_news_text'])){
                            $a_title_page_news = $_POST['title_page_news'];
                            $a_title_text_news = $_POST['title_text_news'];
                            $a_main_text_news = $_POST['main_text_news'];
                                $a_name_pic= $_FILES['pic_news']['name'];
                                $a_target_dir = "../images/";
                                $a_target_file = $a_target_dir.basename($a_name_pic);
                                $a_imageFileType = pathinfo($a_target_file,PATHINFO_EXTENSION);
                                move_uploaded_file($_FILES["pic_news"]["tmp_name"], $a_target_file);
                                
                           $query_comment ="INSERT INTO pages (title_page,title_text,main_text,pic)
                            VALUES ('$a_title_page_news','$a_title_text_news','$a_main_text_news','$a_target_file')";
                           $query = $DBM->dbh->prepare($query_comment);
                           $query->execute();
                            
                            }
                          ?>
                                   <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                                ایجاد صفحه جدید    
                                             </h2>
                                           </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                            <div class="col-md-12">
  
        
                                            </div>
                                      </div>
                                       <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="email">عنوان صفحه:</label>
                                  <input type="text" name="title_page_news" class="form-control" value="">
                                     </div>
                                      <div class="form-group">
                                    <label for="email"> عنوان متن اصلی :</label>
                                  <input type="text" name="title_text_news" class="form-control" value="">
                                     </div>
                                    <div class="form-group">
                                    <label for="email">  کلمات کلیدی :</label>
                                  <input type="text" name="label_news" class="form-control" value="">
                                     </div>
                                      <div class="form-group">
                                    <label for="email">   انتخاب عکس :</label>
                                  <input type="file" name="pic_news" class="form-control" value="">
                                     </div>
                                       </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                    <label for="email"> متن :</label>
              <textarea name="main_text_news" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                                        </div>
                                    </div>
                                     <div class="row">
                            <div class="col-md-12 text_center">
                <button  type="submit" name="button_news_text" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
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
                                                مدیریت صفحات داخلی   
                                             </h2>
                                           </div>
                                    </div>
           <div class="row ">
           
           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<!--            #############################################################################-->
            <?php
            if(isset($_POST['pages_manege_edit'])){
                $id = $_GET['p'];   
               $a_title_text=$_POST['title_text'];
               $a_title_page=$_POST['title_page'];
               $a_main_text = $_POST['main_text'];
               $a_update_pic = $_FILES['update_pic'];
                 $a_name_pic_b = $_FILES['update_pic']['name'];
                $a_target_dir = "../images/";
                $a_target_file_b = $a_target_dir.basename($a_name_pic_b);
                $a_imageFileType = pathinfo($a_target_file_b,PATHINFO_EXTENSION);
                move_uploaded_file($_FILES["update_pic"]["tmp_name"], $a_target_file_b);
                $a_target_file_b_db ="images/".basename($a_name_pic_b);  
                 
                
                
                $update=" UPDATE pages SET pic='$a_target_file_b',title_text='$a_title_text',title_page='$a_title_page',main_text = '$a_main_text' WHERE id=$id";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
               }   
                
            ?>
<!--            ###################################################-->
    <?php 
              $query_comment = "SELECT id,title_text,title_page,main_text,pic FROM pages";
              $query = $DBM->dbh->prepare($query_comment);
              $query->execute();
               while($row = $query->fetch(PDO::FETCH_ASSOC)){
               extract($row); 
               ?> 
              <div id="txtHint">
       
   </div>
  <div class="panel panel-default" style="margin-top: 4px;">
    <div class="panel-heading" role="tab" id="headingTwo" style="background-color: rgba(91, 163, 185, 0.48);color:#0D1FB3;">
      <h4 class="panel-title" style=" display: inline;">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?=$id?>" aria-expanded="false" aria-controls="collapseTwo">
          <span class="glyphicon glyphicon-tag"></span><?=$title_page?>
        </a>
      </h4>
     <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","upload.php?q="+str,true);
        xmlhttp.send();
    }
}
</script> 
     
<button type="button" class="btn btn-warning btn-sm pull-left" value="<?=$id?>" onclick="showUser(this.value)">
   حذف صفحه
   </button>
    </div>
    <div id="<?=$id?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
             <form action="?p=<?=$id?>" method="POST" role="form" enctype="multipart/form-data">
             <legend><?=$title_page?></legend>
             <div class="row">
                 <div class="col-md-6">
                 <img src="<?=$pic?>" class="img-thumbnail" alt="Cinque Terre" style=" width: 500px;
    height: 215px;">
             </div>
             <div class="col-md-6">
                 	<div class="form-group">
		<label for="">عنوان صفحه:</label>
		<input type="text" name="title_page" class="form-control" id="" value="<?=$title_page?>">
</div>
    <div class="form-group">
		<label for="">عنوان متن:</label>
		<input type="text" name="title_text" class="form-control" id="" value="<?=$title_text?>">
</div>
             <div class="form-group">
		<label for=""> ویرایش تصویر:</label>
		<input type="file" name="update_pic" class="form-control" id="" value="<?=$title_text?>">
</div>
             </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     	<div class="form-group">
		<label for=""> متن اصلی :</label>
		<textarea name="main_text" id="input" class="form-control" rows="8" required="required"><?=$main_text?></textarea>
                        </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                   <label for="">انتخاب صفحات مرتبط:</label>
                    
                     
                     
                 </div>
             </div>
             <div class="row">
                  <div class="col-md-12 text_center">    
     <button type="submit" name="pages_manege_edit" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span>به روزرسانی </button>
           </div>
             </div>
             
             
	      
</form>

        
       
      </div>
    </div>
  </div>
  <?php }?>
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