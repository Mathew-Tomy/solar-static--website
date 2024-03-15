<?php
if(isset($_REQUEST['createzip']) and $_REQUEST['createzip']!=""){
	extract($_REQUEST);
	
	$filename	=	'gallery.zip';
	$files = array('readme.txt', 'test.html', 'image.gif');
require('../db/session.php');
define('DBHOST','localhost'); // host name
define('DBUSER','d9wyov7dxi8t'); 
 define('DBPASS','Enbktm2020*'); // mysql pasword 
define('DBNAME','enbridg_enbridgdemo');
$db = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);




	$fileQry	=	$db->query('SELECT * FROM tbl_gallery WHERE gal_id IN ('.implode(",",$check).')');
	
	$zip = new ZipArchive;

	if ($zip->open($filename,  ZipArchive::CREATE)){
		while($row	=	$fileQry->fetch_assoc()){
			$zip->addFile(getcwd().'/'.'https://enbridg.com/uploads/large/'.$row['gal_img'], $row['gal_img']);
		}
		
		
		$zip->close();
		
		header("Content-type: application/zip"); 
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-length: " . filesize($filename));
		readfile($filename);

		header("Pragma: no-cache"); 
		header("Expires: 0"); 
		readfile("$filename");
		unlink($filename);
	}else{
	   echo 'Failed!';
	}
}
?>