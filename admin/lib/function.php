
<?php
session_start();
class Database
{
    private $host      = "localhost";
    private $user      = "root";
    private $pass      = "";
    private $dbname    = "spacefra_space";
    //////

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
//    public function update(){
//    }

}
function Thumbnail($url, $filename, $width = 150, $height = true) {

 // download and create gd image
 $image = ImageCreateFromString(file_get_contents($url));

 // calculate resized ratio
 // Note: if $height is set to TRUE then we automatically calculate the height based on the ratio
 $height = $height === true ? (ImageSY($image) * $width / ImageSX($image)) : $height;

 // create image 
 $output = ImageCreateTrueColor($width, $height);
 ImageCopyResampled($output, $image, 0, 0, 0, 0, $width, $height, ImageSX($image), ImageSY($image));

 // save image
 ImageJPEG($output, $filename, 95); 

 // return resized image
 return $output; // if you need to use it
}

function watermark_image($url) {
    
 //####################################################################
 //####################################################################
    $watermark = imagecreatefrompng('3.png');
    imagealphablending($watermark, false);
    imagesavealpha($watermark, true);
    $img = imagecreatefromjpeg($url);
    $img_w = imagesx($img);
    $img_h = imagesy($img);
    $wtrmrk_w = imagesx($watermark);
    $wtrmrk_h = imagesy($watermark);
    $dst_x = ($img_w / 1) - ($wtrmrk_w / 0.99); // For centering the watermark on any image
    $dst_y = ($img_h / 1) - ($wtrmrk_h / 0.8); // For centering the watermark on any image
    imagecopy($img, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h);
    imagejpeg($img, $url, 100);
    imagedestroy($img);
    imagedestroy($watermark);
 //####################################################################
    $watermark = imagecreatefrompng('2.png');
    imagealphablending($watermark, false);
    imagesavealpha($watermark, true);
    $img = imagecreatefromjpeg($url);
    $img_w = imagesx($img);
    $img_h = imagesy($img);
    $wtrmrk_w = imagesx($watermark);
    $wtrmrk_h = imagesy($watermark);
    $dst_x = ($img_w / 9) - ($wtrmrk_w / 1); // For centering the watermark on any image
    $dst_y = ($img_h / 1) - ($wtrmrk_h /0.8); // For centering the watermark on any image
    imagecopy($img, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h);
    imagejpeg($img, $url, 100);
    imagedestroy($img);
    imagedestroy($watermark);
    //####################################################################
    $watermark = imagecreatefrompng('1.png');
    imagealphablending($watermark, false);
    imagesavealpha($watermark, true);
    $img = imagecreatefromjpeg($url);
    $img_w = imagesx($img);
    $img_h = imagesy($img);
    $wtrmrk_w = imagesx($watermark);
    $wtrmrk_h = imagesy($watermark);
    $dst_x = ($img_w / 2) - ($wtrmrk_w / 2); // For centering the watermark on any image
       $dst_y = ($img_h / 2) - ($wtrmrk_h / 2); // For centering the watermark on any image
    imagecopy($img, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h);
    imagejpeg($img, $url, 100);
    imagedestroy($img);
    imagedestroy($watermark);
 //####################################################################
 //####################################################################
}

