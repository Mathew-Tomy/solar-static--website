<?php

session_start();



include("connection.php");
session_destroy();
header("location: login.php");

if(isset($_SESSION['phoenix']))

{

		unset($_SESSION['phoenix']);

       redirect('login.php','logout=2');

}

?>