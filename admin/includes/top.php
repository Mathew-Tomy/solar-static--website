<div class="navbar-header pull-left">

					<a href="index.php" class="navbar-brand">

						<small>

						 <?php

		$sqlauth=$db->query("select * from tbl_authorization order by auth_id desc");



	$rows=$sqlauth->fetch_assoc();

		 

			 $au_img=str_replace('../','',$rows['auth_logo']);?>

            <aside class="col-sm-2">



               <img src="../images/logo.jpeg">

            </aside>

			

	

						</small>

					</a>

				</div>



				<div class="navbar-buttons navbar-header pull-right" role="navigation">

					<ul class="nav ace-nav">

						<li class="light-blue">

							<a href="logout.php">

										<i class="ace-icon fa fa-power-off"></i>

										Logout

									</a>

						</li>

					</ul>

				</div>