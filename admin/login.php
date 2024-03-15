<?php
session_start();
//require_once('../db/application_top.php');
include("connection.php"); 
define('TABLE','tbl_login');

		//{
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	//$password=md5($_POST['password']);
	$password=$_POST['password'];
$query1=$db->query("SELECT * FROM ".TABLE." where user_name='".$username."' AND pass_word='".$password."'");
		

           //$no_rows= $query1->num_rows;
           $row = $query1->fetch_assoc();
           
		$name=$row["user_name"];
		
	$admin_id=$row["id"];
$_SESSION['phoenix'] = $admin_id;
	 if($admin_id)
		 {
	$query2=$db->query("SELECT pass_word FROM ".TABLE." where id='".$admin_id."'"); 
	 $rows = $query2->fetch_assoc();
	 	$pwd=$rows["pass_word"];
			if($pwd==$password)
					{	
	$_SESSION['phoenix'] = $admin_id;	  
					      
				//   $sql_array= array(						
				// 						  'login_date' => date('Y-M-d'),
				// 						  'login_time' => date('H:i:A')
				// 						  );
		
 //redirect('index.php','log=1');
 // $db->update_from_array($sql_array,TABLE,id,$_SESSION['phoenix']); 
 	header("Location:index.php");


	}}
    
     else
					 {
					echo "error";
					 } 
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

	</head>

	<body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<span class="red">Kissan Solar Power
									</span>
									<!--span class="white" id="id-text2"> Homes</span-->
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form name="frmlogin" method="POST">
											 <? //if($alert) {?>
		          <div id="message"   class="errormessage"></div>
      
		<?
	//	}
		?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="Username" onkeypress="if(event.keyCode=='13')return loginValidation(document.frmlogin)" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Password" onkeypress="if(event.keyCode=='13')return loginValidation(document.frmlogin)" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">

														<button type="submit"  name="login" value="submit" onclick="return loginValidation(document.frmlogin)">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">

												<p style="text-align:center; padding-top:10px;">Powered By: <a href="#"  target="_blank" class="user-signup-link">
													DDinfoways
												</a></p>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

	</body>
</html>
<script>
document.frmlogin.username.focus();

function loginValidation(thisform)
{
	with (thisform)
	{
	
	if (emptyvalidation(username,"Please fill in your User Name.")==false) 
		{				
		username.focus();
		return false;
		}
		if (emptyvalidation(password,"Please fill in your Password.")==false) 
		{				
		password.focus();
		return false;
		}
	
    // thisform.login_proceed.value="proceed"; 
	
	
	 }
	
	
	 thisform.submit();
	 
}



 function emptyvalidation(entered, alertbox)
		{
				
			with (entered)
			{
				
			
				while (value.charAt(0) == ' ')
					value = value.substring(1);
				while (value.charAt(value.length - 1) == ' ')
					value = value.substring(0, value.length - 1);
				if (value==null || value=="")
				{
					if (alertbox!="") alert(alertbox);
					return false;
				}
				else return true;
			}
		}
		
		
	
</script>
