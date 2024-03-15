<?php
session_start();
if(!isset($_SESSION['phoenix']))
{
       redirect('login.php','err=1');
}
?>