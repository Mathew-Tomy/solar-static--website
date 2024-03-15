<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['lid'];

$qr=mysql_query("DELETE FROM `tbl_features` WHERE `feature_id`='$tid'");

if($qr) header('Location:manage-features.php','ins=2');

?>