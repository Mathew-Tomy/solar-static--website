<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['cat_id'];

$qr=mysql_query("DELETE FROM `tbl_category` WHERE `cat_id`='$tid'");

if($qr) header('Location:manage-category.php','ins=2');

?>