<?php
require('../db/session.php');
//require('../db/application_top.php');
define('DBHOST','localhost'); // host name
define('DBUSER','d9wyov7dxi8t'); 
 define('DBPASS','Enbktm2020*'); // mysql pasword 
define('DBNAME','enbridg_enbridgdemo'); // databse name 	
$db = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
$page=$_REQUEST['page'];
$authid=$_REQUEST['auth_id'];
$logoid=$_REQUEST['lid'];
$courseid=$_REQUEST['cid'];
$testid=$_REQUEST['testi_id'];
$seekerid=$_REQUEST['seeker_id'];
$placid =$_REQUEST['placed_id'];
$appid=$_REQUEST['app_id'];
$franchise=$_REQUEST['fr_id'];
$vacid=$_REQUEST['vac_id'];
$brid=$_REQUEST['br_id'];
$cdtlid=$_REQUEST['cdtl_id'];
$csid=$_REQUEST['csid'];
$branch_id=$_REQUEST['branch_id'];
$news_id=$_REQUEST['news_id'];
$certid=$_REQUEST['certificate_id'];
if($certid!=""){
$qr=mysql_query("DELETE FROM `tbl_certificate` WHERE `certificate_id`='$certid'");

if($qr) header('Location:manage-certificate.php','dtd=2');
}
else if($authid!=""){
$qr=mysql_query("DELETE FROM `tbl_authorization` WHERE `auth_id`='$authid'");

if($qr) header('Location:manage-authorization.php','ins=2');
}
else if($logoid!="")
{
	$qr=mysql_query("DELETE FROM `tbl_logos` WHERE `logo_id`='$logoid'");

if($qr) header('Location:manage-logo.php','ins=2');
}
else if($courseid!="")
{
	$qr=mysql_query("DELETE FROM `tbl_course` WHERE `course_id`='$courseid'");
    $qr1=mysql_query("DELETE FROM `tbl_course_dtl` WHERE `course_id`='$courseid'");
if($qr) header('Location:manage-course.php','ins=2');
}
else if($testid!="")
{
	$qr=mysql_query("DELETE FROM `tbl_testimonials` WHERE `testi_id`='$testid'");

if($qr) header('Location:manage-testimonials.php','ins=2');
}
else if($seekerid!="")
{
	$qr=mysql_query("DELETE FROM `tbl_job_seekers` WHERE `seeker_id`='$seekerid'");

if($qr) header('Location:manage-seekers.php','ins=2');
}
else if($appid!="")
{
	$qr=mysql_query("DELETE FROM `tbl_applications` WHERE `appl_id`='$appid'");

if($qr) header('Location:manage-applications.php','ins=2');
}
else if($placid!="")
{
	$qr=mysql_query("DELETE FROM `tbl_job_seekers` WHERE `seeker_id`='$placid'");

if($qr) header('Location:manage-placed-students.php','ins=2');
}
else if($franchise!="")
{
	$qr=mysql_query("DELETE FROM `tbl_franchise` WHERE `franchise_id`='$franchise'");

if($qr) header('Location:manage-franchise.php','ins=2');
}
else if($vacid!="")
{
	$qr=mysql_query("DELETE FROM `tbl_vaccancy` WHERE `vaccancy_id`='$vacid'");

if($qr) header('Location:manage-vaccancy.php','ins=2');
}
else if($brid!="")
{
	$qr=mysql_query("DELETE FROM `tbl_brochure` WHERE `brochure_id`='$brid'");

if($qr) header('Location:manage-brochures.php','ins=2');
}
else if($cdtlid!="" && $csid!="")
{
	$qr=mysql_query("DELETE FROM `tbl_course_dtls` WHERE `course_dtl_id`='$cdtlid'");

if($qr) header('Location:edit-course.php?cid='.$csid.'&del=2');
}
else if($branch_id!="" )
{ 
	$qr=mysql_query("DELETE FROM `tbl_branch` WHERE `branch_id`='$branch_id'");

if($qr) header('Location:manage-branch.php?del=2');
}
else if($news_id!="" )
{ 
	$qr=mysql_query("DELETE FROM `tbl_news_events` WHERE `news_id`='$news_id'");

if($qr) header('Location:manage-news-events.php?del=2');
}
?>