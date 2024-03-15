<?php
$sql = $db->query("SELECT user_name FROM tbl_login WHERE id='".$_SESSION['phoenix']."' ");
    $row = $sql->fetch_assoc();
           
		$username=$row["user_name"];
?>
<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->
						<ul class="breadcrumb" style="float:right">
							<li> Welcome <?=$username;?> !</li>
						</ul><!-- /.breadcrumb -->