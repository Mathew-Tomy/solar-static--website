<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['lid'];

$qr=mysql_query("DELETE FROM `tbl_location` WHERE `location_id`='$tid'");

if($qr) header('Location:manage-location.php','ins=2');

?>