<?php
require('application_top.php');
if(!isset($_SESSION['cusUserId']))
{
       redirect('login.php','err=1');
}
?>
