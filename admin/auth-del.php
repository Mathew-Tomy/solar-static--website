<?php
include_once('../db/application_top.php');

$tid=$_REQUEST['auth_id'];

$qr=mysql_query("DELETE FROM `tbl_authorization` WHERE `auth_id`='$tid'");

if($qr) header('Location:manage-authorization.php','ins=2');

?>