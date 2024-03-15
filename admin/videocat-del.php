<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['cat_id'];

$qr=mysql_query("DELETE FROM `tbl_video_category` WHERE `video_cat_id`='$tid'");

if($qr) header('Location:manage-video-category.php','ins=2');

?>