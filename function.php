
<?php
session_start();
class Database
{
    private $host      = "localhost";
    private $user      = "root";
    private $pass      = "";
    private $dbname    = "spacefra_space";
    

    public static $dbh;
    private $error;
    public function __construct(){

    }

    public function connect (){

        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );
        // Create a new PDO instanace
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);

        }
            // Catch any errors
        catch(PDOException $e){
            $this->error = $e->getMessage();
            echo "dfsssssssssss";
        }
    }//connect



    public function  myquery ($sql,$array3){
        $stmt=$this->dbh->prepare($sql);
        foreach ($array3 as $key=>$value){
            $stmt->bindvalue($key+1,$value);
        }
        $stmt->execute();
    }


    public function select($sql,$array){
        $stmt=$this->dbh->prepare($sql);
        foreach ($array as $key=>$value){
            $stmt->bindvalue($key+1,$value);
        }//forech//
        $stmt->execute();
        $result=$stmt->fetchALL(PDO::FETCH_ASSOC);
        $result=$result['m_newspaper_title'] ;
        return $result;
    }
  

}
function Update_data($a,$b,$c,$d){
 $update=" UPDATE pages SET title_text='$a',title_page='$b',main_text='$c' WHERE id=$d";
   $stmt=$DBM->dbh->prepare($update);
   $stmt->execute();
}