<?php
include_once('az.multi.upload.class.php');

$rename	=	rand(1000,5000).time();
$upload	=	new ImageUploadAndResize();
$upload->uploadMultiFiles('files', 'uploads', $rename, 0755);


require('../db/session.php');
define('DBHOST','localhost'); // host name
define('DBUSER','d9wyov7dxi8t'); 
 define('DBPASS','Enbktm2020*'); // mysql pasword 
define('DBNAME','enbridg_enbridgdemo');
$db = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
  $category=$_POST['category'];

foreach($upload->prepareNames as $name){
//      $sqlcats = $db->query("SELECT  * FROM tbl_gallery_category where id='$category' ");
// 	 $rowsz=$sqlcats->fetch_assoc();
// 	 $cate= $rowsz['category'];
    $sql = "INSERT INTO tbl_photos (file,cat_id) VALUES ('".$name."','$category')";
 	$flag	=	0;
    if ($db->query($sql) === TRUE) {
        $flag	=	1;
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
if($flag	=	1){
	header('location:manage-all-pictures.php?msg=ras');
	exit;
}
?>