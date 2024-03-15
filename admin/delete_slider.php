<?php
session_start();

 

require('../db/session.php');
include("connection.php"); 
define('TABLE','tbl_course_slider');


//If user clicked register button
if(isset($_POST)) {
	
	$sql = "DELETE FROM tbl_course_slider WHERE slider_id='$_GET[slider_id]'";
	if($db->query($sql)===TRUE) {
		$_SESSION['jobPostDeleteSuccess'] = true;
		header("Location: manage-course-slider.php");
		exit();
	} else {
		echo "Error " . $sql . "<br>" . $db->error;
	}
	$db->close();
} else {
	header("Location: manage-course-slider.php");
	exit();
}
   

?>