<?php
session_start();
require('../db/session.php');
require_once('../db/application_top.php');

if (isset($_POST['orders'])) {
	
	$orders = explode('&', $_POST['orders']);
	$array = array();
	
	
	foreach($orders as $item)
	{
		$item = explode('=', $item);
		$item = explode('_', $item[1]);
		$array[] = $item[1];
	}
	
	
		
		foreach($array as $key => $value) {
			$key = $key + 1;
				$sql_data_array = array (
										'logo_order'     =>   $key							 
										
										
											
										);	
										
									 
						  $db->update_from_array($sql_data_array,tbl_logos,logo_id,$value);
			
			
		}
	 echo json_encode(array('error' => false));

	
} else {
	echo json_encode(array('error' => true));
}
?>