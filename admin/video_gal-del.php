<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['gal_id'];

$qr=mysql_query("DELETE FROM `tbl_video_gallery` WHERE `v_gal_id`='$tid'");

if($qr) header('Location:manage-video-gallery.php','ins=2');

?>