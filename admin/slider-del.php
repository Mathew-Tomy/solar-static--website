<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['slider_id'];

$qr=mysql_query("DELETE FROM `tbl_course_slider` WHERE `slider_id`='$tid'");

if($qr) header('Location:manage-course-slider.php','ins=2');

?>