<?php 
include_once('../db/application_top.php');
$tid=$_REQUEST['skid']; 
$qr=mysql_query("DELETE FROM `tbl_skills` WHERE `skill_id`='$tid'"); 
if($qr) header('Location:manage-skills.php','del=2');?>