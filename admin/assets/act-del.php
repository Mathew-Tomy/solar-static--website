<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['a_id'];

$qr=mysql_query("DELETE FROM `tbl_activity` WHERE `act_id`='$tid'");
if($qr) header('Location:manage-activity.php','ins=2');

?>