<?php require "lib/function.php"?>
<?php
$DBM = new Database;
$DBM->connect(); 
if(isset($_GET['q'])){
  $q =$_GET['q'];  
$content=explode("/",$q);
$update=" UPDATE index_space SET title_sample_1='$content[0]',title_pic_sample_1='$content[1]',text_sample_1='$content[2]' WHERE id='1'";
$stmt=$DBM->dbh->prepare($update);
$stmt->execute();
echo "<div class='alert alert-success'>
     تغییرات با موفقیت اعمال شد.  
</div>";

}
if(isset($_GET['p'])){
    $q_1 =$_GET['p'];
 $content=explode("/",$q_1);
$update=" UPDATE index_space SET title_sample_2='$content[0]',title_pic_sample_2='$content[1]',text_sample_2='$content[2]' WHERE id='1'";
$stmt=$DBM->dbh->prepare($update);
$stmt->execute();
     echo "<div class='alert alert-success'>
     تغییرات با موفقیت اعمال شد.  
</div>";
}
if(isset($_GET['k'])){
    $q_1 =$_GET['k'];
 $content=explode("/",$q_1);
    
$update=" UPDATE index_space SET title_sample_3='$content[0]',title_pic_sample_3='$content[1]',text_sample_3='$content[2]' WHERE id='1'";
$stmt=$DBM->dbh->prepare($update);
$stmt->execute();
     echo "<div class='alert alert-success'>
     تغییرات با موفقیت اعمال شد.  
</div>";
}
if(isset($_GET['b'])){
    $q_1 =$_GET['b'];
 $content=explode("/",$q_1);    
$update=" UPDATE index_space SET title_sample_4='$content[0]',title_pic_sample_4='$content[1]',text_sample_4='$content[2]' WHERE id='1'";
$stmt=$DBM->dbh->prepare($update);
$stmt->execute();
     echo "<div class='alert alert-success'>
     تغییرات با موفقیت اعمال شد.  
</div>";
}
if(isset($_GET['a'])){
    $q_1 =$_GET['a'];
 $content=explode("/",$q_1);    
$update=" UPDATE index_space SET title_sample_5='$content[0]',title_pic_sample_5='$content[1]',text_sample_5='$content[2]' WHERE id='1'";
$stmt=$DBM->dbh->prepare($update);
$stmt->execute();
     echo "<div class='alert alert-success'>
     تغییرات با موفقیت اعمال شد.  
</div>";
}
if(isset($_GET['c'])){
    $q_1 =$_GET['c'];
 $content=explode("/",$q_1);    
$update=" UPDATE index_space SET title_sample_6='$content[0]',title_pic_sample_6='$content[1]',text_sample_6='$content[2]' WHERE id='1'";
$stmt=$DBM->dbh->prepare($update);
$stmt->execute();
     echo "<div class='alert alert-success'>
     تغییرات با موفقیت اعمال شد.  
</div>";
}
if(isset($_GET['d'])){
    $q_1 =$_GET['d'];
    $content=explode("/",$q_1);  
    $query_comment = "SELECT password FROM login_table";
    $query = $DBM->dbh->prepare($query_comment);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
     $a_password = $row['password'];
    
     $content=explode("/",$q_1);
     if($a_password == $content[0]){
        $update=" UPDATE login_table SET password='$content[1]' WHERE id_user='1'";
        $stmt=$DBM->dbh->prepare($update);
        $stmt->execute();
     echo "<div class='alert alert-success'>
     تغییرات با موفقیت اعمال شد.  
</div>"; 
     }else{
      echo "<div class='alert alert-warning'>
                  پسورد قبلی را درست وارد کنید.
          </div>";
     
     }
    
}
if(isset($_GET['id'])){
$id = $_GET['id'];
$update="DELETE FROM help_page WHERE id='$id';";
$stmt=$DBM->dbh->prepare($update);
$stmt->execute(); 

}
//if(isset($_GET['t'])){
//    $q_1 =$_GET['t'];
// $content=explode("/",$q_1);    
//$update="UPDATE help_page SET main_text='$content[1]' WHERE id=$content[0]";
//$stmt=$DBM->dbh->prepare($update);
//$stmt->execute();
//     echo "<div class='alert alert-success'>
//     تغییرات با موفقیت اعمال شد.  
//</div>";
//}


