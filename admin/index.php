<?php

session_start();
include("connection.php"); 
//require('../db/application_top.php');


define('TABLE','tbl_login');

if(!isset($_SESSION['phoenix']))

 {

       //redirect(ADMIN_URL.'login.php');

 	  header( 'Location:login.php' );

 }



//list($username,$loginDate,$loginTime)

$new=$db->query("SELECT * FROM " .TABLE . " WHERE id='".$_SESSION['phoenix']."' ");

  $row = $new->fetch_assoc();

  $username=$row['user_name'];

//     $loginDate=$row['login_date'];

//       $login_time=$row['login_time'];

      

        

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<meta charset="utf-8" />

		<title><?=ADMIN_TITLE;?> | Admin</title>



		<meta name="description" content="overview &amp; stats" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />



		<!-- bootstrap & fontawesome -->

		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />



		<!-- page specific plugin styles -->



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



			<div id="sidebar" class="sidebar responsive">



				

					



					<?php include('includes/left.php');?>

					

				<!-- /.nav-list -->



				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">

					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>

				</div>



				<script type="text/javascript">

					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}

				</script>

			</div>



			<div class="main-content">

				<div class="main-content-inner">

					<div class="breadcrumbs" id="breadcrumbs">

						<script type="text/javascript">

							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}

						</script>



						<?php include('includes/welcome.php');?>



					</div>



					<div class="page-content">

						<div class="page-header">

							<h1>

								Dashboard

							</h1>

						</div><!-- /.page-header -->



						<div class="row">

							<div class="col-xs-12">		

								<div class="row">

									<div class="space-6"></div>



									<div class="col-sm-12 infobox-container">

										



                                        <img src="../images/img.jpg"/>



										<div class="space-6"></div>

									</div>



								</div><!-- /.row -->

								<!-- PAGE CONTENT ENDS -->

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



		<script src="assets/js/jquery.2.1.1.min.js"></script>



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



		<script src="assets/js/ace.min.js"></script>

	</body>

</html>

