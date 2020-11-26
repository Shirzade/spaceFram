
<?php require "lib/function.php"?>
<?php
$DBM = new Database;
$DBM->connect();
$q = intval($_GET['q']);


 $query_comment_d = "DELETE FROM pages WHERE id = $q";  
$query = $DBM->dbh->prepare($query_comment_d);
 $query->execute();
  echo "<div class=row>
  <div class='col-md-10 col-md-offset-1' id='Alert'>
  <a href='#'class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <h2></h2><divclass=alert alert-success<strong>صفحه با موفقیت حذف شد.</strong></div></div></div>";
              
?>