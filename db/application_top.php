<?php
#####################################
#
# File Index
#
# Author : Shyjo Mathew
# Date  :  Thursday, January 11, 2007
#
#####################################
# Session 
	
 
	require('config.php');
# DB Connection
include_once("db_class.inc.php");
	//require(DIR_FUNCTION.'db_class.inc.php');

//$db= mysqli_connect(DBHOSTS,DBUSERS,DBPASSS,DBNAMES);
 define('DBHOST','localhost'); // host name
define('DBUSER','d9wyov7dxi8t'); 
 define('DBPASS','Enbktm2020*'); // mysql pasword 
define('DBNAME','enbridg_enbridgdemo'); // databse name 	
$db = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
	//$db->connect();
	//$db->select_db();

# Date Function
	//require(DIR_FUNCTION.'date_class.inc.php');
	//$date = new datetime;

#  HTML Functions
	require('html_class.inc.php');
 	$html = new html;

# PHP General Functions
	require('general.inc.php');

# Admin Side List of Data
	define('DIR_LIST','list/');
# Admin Side Form of Data
	define('DIR_FORM','form/');
# Admin Side Report  of Data
	define('DIR_REPORTS','reports/');
	
# Globals

# Image Edit & Delete
/*
define('IMAGE_EDIT','<img alt="Edit" src="'.ADMIN_IMAGE_URL.'edit.gif" border=0>');
define('IMAGE_DELETE','<img alt="Delete"  src="'.ADMIN_IMAGE_URL.'delete.gif" border=0>');
define('IMAGE_PDF','<img alt="View Quote"  src="'.ADMIN_IMAGE_URL.'pdf.jpg" border=0>');
define('IMAGE_DOWNLOAD','<img alt="Download"  src="'.ADMIN_IMAGE_URL.'download.gif" border=0>');
define('IMAGE_YES','<img alt="Yes"  src="'.ADMIN_IMAGE_URL.'yes.gif" border=0>');
define('IMAGE_NO','<img alt="No"  src="'.ADMIN_IMAGE_URL.'no.gif" border=0>');
define('IMAGE_UP','<img alt="Up"  src="'.ADMIN_IMAGE_URL.'up.gif" border=0>');
define('IMAGE_DOWN','<img alt="Down"  src="'.ADMIN_IMAGE_URL.'down.gif" border=0>');
define('EMAIL_THIS','<img alt="Email This"  src="'.ADMIN_IMAGE_URL.'email.png" border=0>');
*/
$HTTP_POST_VARS= &$_POST;
$HTTP_GET_VARS= &$_GET;
if(is_array($HTTP_POST_VARS))
{
 foreach ($HTTP_POST_VARS as $key => $val)
 {
   ${$key} = $val;
 }
}

if(is_array($HTTP_GET_VARS))
{
 foreach ($HTTP_GET_VARS as $key => $val)
 {
  	${$key} = $val;
 }
}
//List
//
//if(!defined(DOCUMENT_TITLE))define('DOCUMENT_TITLE',SITE_URL);

?>