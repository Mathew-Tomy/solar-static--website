<?php
//include_once('../db/application_top.php');
define('DBHOST','localhost'); // host name
define('DBUSER','d9wyov7dxi8t'); 
 define('DBPASS','Enbktm2020*'); // mysql pasword 
define('DBNAME','enbridg_enbridgdemo');
$db = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
$logoid=$_REQUEST['lid'];
if($logoid!="")
{
	$qr=mysqli_query($db,"DELETE FROM `tbl_logos` WHERE `logo_id`='$logoid'");
if($qr) 
header('Location:manage-logo.php','ins=2');
}