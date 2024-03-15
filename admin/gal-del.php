<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['gal_id'];

$qr=mysql_query("DELETE FROM `tbl_gallery` WHERE `gal_id`='$tid'");

if($qr) header('Location:manage-gallery.php','ins=2');

?>