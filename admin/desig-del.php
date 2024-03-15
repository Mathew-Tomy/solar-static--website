<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['did'];

$qr=mysql_query("DELETE FROM `tbl_designation` WHERE `desig_id`='$tid'");

if($qr) header('Location:manage-designation.php','ins=2');

?>