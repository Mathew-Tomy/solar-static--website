<?php

//session_start();

//require_once('../db/application_top.php');

require('../db/session.php');

define('TABLE','tbl_login');
include("connection.php");
	$skqlr=$db->query("select * from tbl_login");

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<meta charset="utf-8" />

		<title> Manage Emails</title>



		<meta name="description" content="Common form elements and layouts" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />



		<!-- bootstrap & fontawesome -->

		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />



		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />

		<link rel="stylesheet" href="assets/css/chosen.min.css" />

		<link rel="stylesheet" href="assets/css/datepicker.min.css" />

		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />

		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />

		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />

		<link rel="stylesheet" href="assets/css/colorpicker.min.css" />

        <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />



		<!-- text fonts -->

		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />



		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />



		<!--[if lte IE 9]>

			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />

		<![endif]-->



		<!--[if lte IE 9]>

		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />

		<![endif]-->



		<!-- inline styles related to this page -->



		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

<script src="assets/js/validate.js"></script>

<link href="css/image.css" rel="stylesheet" type="text/css"/>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->



		<!--[if lte IE 8]>

		<script src="assets/js/html5shiv.min.js"></script>

		<script src="assets/js/respond.min.js"></script>

		<![endif]-->

	</head>



	<body class="no-skin">

		<div id="navbar" class="navbar navbar-default">

			<script type="text/javascript">

				try{ace.settings.check('navbar' , 'fixed')}catch(e){}

			</script>



			<div class="navbar-container" id="navbar-container">

				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">

					<span class="sr-only">Toggle sidebar</span>



					<span class="icon-bar"></span>



					<span class="icon-bar"></span>



					<span class="icon-bar"></span>

				</button>



				<?php include('includes/top.php');?>

			</div><!-- /.navbar-container -->

		</div>



		<div class="main-container" id="main-container">

			<script type="text/javascript">

				try{ace.settings.check('main-container' , 'fixed')}catch(e){}

			</script>



			<div id="sidebar" class="sidebar                  responsive">

				<script type="text/javascript">

					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}

				</script>





				<div id="sidebar" class="sidebar responsive">



					<?php include('includes/left.php');?>

				<!-- /.nav-list -->



				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">

					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>

				</div>



				<script type="text/javascript">

					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}

				</script>

			</div><!-- /.nav-list -->

			</div>



			<div class="main-content">

				<div class="main-content-inner">

					<div class="breadcrumbs" id="breadcrumbs">

						<script type="text/javascript">

							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}

						</script>



						<?php include('includes/welcome.php');?>

						<!-- /.breadcrumb -->

					</div>



					<div class="page-content">



						<div class="page-header">

							<h1>

								Manage Emails

							</h1>

							<h6 style="text-align:center" ><font color="red"></font></h6>

						</div><!-- /.page-header -->



						<div class="row">

							<div class="col-xs-12">

								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" name="managemail" method="post" >

                                							<?php

					$i=0;												

											$rows=$skqlr->fetch_assoc();

												

													$adminto=$rows['email'];

													

													$admin_bcc=$rows['bcc_address'];

															$admin_cc=$rows['cc_address'];

													?>

									<div class="form-group">

									<label class="col-sm-3 control-label no-padding-right">Email To</label>

									<div class="col-sm-4">

									<input type="text" id="email_to"  name="email_to" value="<?=$adminto;?>" onKeyPress="if(event.keyCode=='13')return validate_emails(document.managemail);">

									</div>

									</div>

									<div class="form-group">

									<label class="col-sm-3 control-label no-padding-right"> Email Bcc</label>

									<div class="col-sm-4">

									<input type="text" id="email_bcc"  name="email_bcc" value="<?=$admin_bcc;?>" onKeyPress="if(event.keyCode=='13')return validate_emails(document.managemail);">

									</div>

									</div>					

                                   

									<div class="form-group">

									<label class="col-sm-3 control-label no-padding-right"> Email cc</label>

									<div class="col-sm-4">

									<input type="text" id="email_cc"  name="email_cc" value="<?=$admin_cc;?>" onKeyPress="if(event.keyCode=='13')return validate_emails(document.managemail);">

									</div>

									</div>	

                                     

									<div class="space-4"><font color="#FF0000">*</font> Use comma  to add multiple emails like joe@aol.com,ann@msn.com.</div>



									<div class="clearfix form-actions">

									<div class="col-md-offset-3 col-md-9">

									<button class="btn btn-info" onclick="return validate_emails(document.managemail);" type="submit">

									<i class="ace-icon fa fa-check bigger-110"></i>

									Submit

									</button>



									&nbsp; &nbsp; &nbsp;

									<button class="btn" type="reset">

									<i class="ace-icon fa fa-undo bigger-110"></i>

									Reset

									</button>

									</div>

									</div>



								</form>





							</div><!-- /.col -->

						</div><!-- /.row -->

					</div><!-- /.page-content -->

				</div>

			</div><!-- /.main-content -->



			<?php include('includes/footer.php');?>



			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">

				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>

			</a>

		</div><!-- /.main-container -->



		<!-- basic scripts -->



		<!--[if !IE]> -->

		<script src="assets/js/jquery.2.1.1.min.js"></script>



		<!-- <![endif]-->



		<!--[if IE]>

<script src="assets/js/jquery.1.11.1.min.js"></script>

<![endif]-->



		<!--[if !IE]> -->

		<script type="text/javascript">

			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");

		</script>



		<!-- <![endif]-->



		<!--[if IE]>

<script type="text/javascript">

 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");

</script>

<![endif]-->

		<script type="text/javascript">

			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

		</script>

		<script src="assets/js/bootstrap.min.js"></script>



		<!-- page specific plugin scripts -->



		<!--[if lte IE 8]>

		  <script src="assets/js/excanvas.min.js"></script>

		<![endif]-->

		<script src="assets/js/jquery-ui.custom.min.js"></script>

		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>

		<script src="assets/js/chosen.jquery.min.js"></script>

		<script src="assets/js/fuelux.spinner.min.js"></script>

		<script src="assets/js/bootstrap-datepicker.min.js"></script>

		<script src="assets/js/bootstrap-timepicker.min.js"></script>

		<script src="assets/js/moment.min.js"></script>

		<script src="assets/js/daterangepicker.min.js"></script>

		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<script src="assets/js/bootstrap-colorpicker.min.js"></script>

		<script src="assets/js/jquery.knob.min.js"></script>

		<script src="assets/js/jquery.autosize.min.js"></script>

		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>

		<script src="assets/js/jquery.maskedinput.min.js"></script>

		<script src="assets/js/bootstrap-tag.min.js"></script>

        <!-- page specific plugin scripts -->

		<script src="assets/js/markdown.min.js"></script>

		<script src="assets/js/bootstrap-markdown.min.js"></script>

		<script src="assets/js/jquery.hotkeys.min.js"></script>

		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>

		<script src="assets/js/bootbox.min.js"></script>



		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>

		<script src="assets/js/ace.min.js"></script>

<script type="text/javascript">







document.managemail.admin_to.focus();

</script>



		

	</body>

</html>

