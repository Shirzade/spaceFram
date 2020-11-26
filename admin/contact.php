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
            بخش تماس باما 
                    </b>
                </div>
                <div class="panel-body">
                      <div class="row">
                            <div class="col-md-12 text_center">
                 <ul class="list-inline">
                        <li>
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<button class="btn btn-success"><span class="glyphicon glyphicon-earphone"></span>بخش  تماس با ما</button>
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
                   if(isset($_POST['button_contact_us'])){
                       $a_address = $_POST['address']; 
                       $a_email = $_POST['email']; 
                       $a_phone = $_POST['phone']; 
                       $a_cell_phone = $_POST['cell_phone']; 
        $update=" UPDATE index_space SET address='$a_address',email='$a_email',phone='$a_phone',cell_phone='$a_cell_phone' WHERE id='1'";
                   $stmt=$DBM->dbh->prepare($update);
	               $stmt->execute();
                   }
                          ?>

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
                                  <form action="" method="post">
                                   <div class="row text_center">
                                           <div class="col-md-12 margin_b_title">
                                             <h2>
                                                بخش  تماس با ما 
                                             </h2>
                                           </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                    <label for="email"> آدرس :</label>
                    <input type="text" name="address" class="form-control" value="<?=$a_address?>">
                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                    <label for="email">آدرس ایمیل:</label>
                          <input type="text" name="email" class="form-control" value="<?=$a_email?>">
                                       </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                    <label for="email">تلفن و فاکس :</label>
                              <input type="text" name="phone" class="form-control" value="<?=$a_phone?>">
                                         </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                    <label for="email">تلفن همراه :</label>
                    <input type="text" name="cell_phone" class="form-control" value="<?=$a_cell_phone?>" >
                                </div>
                                        </div>
                                        
                                    </div>
                                     <div class="row">
                            <div class="col-md-12 text_center">
                                <button  type="submit" name="button_contact_us" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>انتشار</button>
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