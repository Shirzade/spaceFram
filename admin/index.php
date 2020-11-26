<?php require "_/header.php";?>
<?php require "lib/function.php"?>
<?php
$DBM = new Database;
$DBM->connect();
?>
<div class="row direct margin_top margin_top">
    <div class="col-md-8 col-md-offset-2">
         <div class="panel panel-default">
               <div class="panel-heading">
                   <b>
                       بخش مدیریت سایت
                   </b>
               </div>
               <form   action=""  name="ChangePass" method="post">
             <div class="panel-body">
                 <div class="row">
                    <?php
                    $query_comment = "SELECT username,password FROM login_table";
                    $query = $DBM->dbh->prepare($query_comment);
                     $query->execute();
                     $row = $query->fetch(PDO::FETCH_ASSOC);
                     $_SESSION['username']= $row['username'];
                     $_SESSION['password']= $row['password'];
                     if(isset($_POST['login'])){
                         $a_username= $_POST['username'];
                        $a_password = $_POST['password'];
                     
                      
                     if($_SESSION['username'] == $a_username and $_SESSION['password']==$a_password){
                           header('Location: http://localhost:8080/spase/1/admin/homepage.php');
                         echo "hello";
                     } else {
                            echo "bye";
                          header('Location: http://localhost:8080/spase/1/admin/'); 
                     }
                 }
                     ?>
                     <div class="col-md-8 col-md-offset-2">
                         <div class="col-md-9">
                             <div class="form-group">
                                 <input type="text" name="username" class="form-control" placeholder="نام عبور">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <label for="">
                                 <b>نام کاربری:</b>
                             </label>
                         </div>
                   </div>
                 </div>
               <div class="row">
                   <div class="col-md-8 col-md-offset-2">
                       <div class="col-md-9">
                           <div class="form-group">
                               <input type="text" name="password" class="form-control" placeholder="کلمه عبور">
                           </div>
                       </div>
                       <div class="col-md-3">
                           <label for="">
                               <b>
                                   کلمه عبور:
                               </b>
                           </label>
                       </div>
                   </div>
               </div>
                 <div class="row">
                    <div class="col-md-5 col-md-offset-3">
                        <div class="col-md-6  text_right">
                         <div class="form-group">
   <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   <span class="glyphicon glyphicon-erase"></span>
   تغییر پسورد
</button>
                        
                         </div>
                     </div>
                     
                     <div class="col-md-6  text_left">
                         <div class="form-group">
                         


      <button type="submit" name="login" class="btn btn-info"><span class="glyphicon glyphicon-user"></span>ورود به سایت</button>
                         </div>
                     </div>
                     
                    </div>
                     
  
                 </div>
                 </form>
                <?php require "scripts.js";?>
<!--                 ############################################-->
<form action="" name="myForm_10" method="post">
<div class="col-md-8 col-md-offset-2">
    
     <div class="collapse" id="collapseExample">
  <div class="well">
        <div class="row">
          <div class="col-md-12" id="txtHint_7">
              
          </div>
           <div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
                             <div class="form-group">
                                 <input type="text" name="oldPass" class="form-control" placeholder="نام عبور">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <label for="">
                                 <b>پسورد قدیم  :</b>
                             </label>
                         </div>
            </div>
             
                         <div class="col-md-12">
                             <div class="col-md-8">
                             <div class="form-group">
                                 <input type="text" name="newPass" class="form-control" placeholder="نام عبور">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <label for="">
                                 <b>پسوردجدید :</b>
                             </label>
                         </div>
                         </div>
                         <div class="col-md-12">
                             <div class="col-md-8">
                             <div class="form-group">
                                 <input type="text" name="rnewPass" class="form-control" placeholder="نام عبور">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <label for="">
                                 <b>تکرارپسوردجدید :</b>
                             </label>
                         </div>
                         </div>
                         
                       <div class="col-md-12 text_center">
                         <div class="form-group">
                         


      <button type="button"  onclick="changPass()" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>تغییر پسورد</button>
                         </div>
                     </div>
               </div>          
        </div>
        
  </div>
</div> 
</div>
<!--                ########################################-->
                 
             </div>
             </form>
         </div>
    </div>
</div>
