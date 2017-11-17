<?php include "include/db.php";?>
<html>
<head>
	<title>New Releases</title>
	<?php include "include/link.php";?>
</head>
<body>
	<?php include 'include/header.php';?>
	<!-- container-->
	<div class="main1">
			
			<!-- -->
			<ul class="nav nav-tabs lang">
				<li class="active"><a href="#">All</a></li>
				<li><a href="#">Hindi</a></li>
				<li><a href="#">English</a></li>
				<li><a href="#">Marati</a></li>
				<li><a href="#">Telugu</a></li>
				<li><a href="#">Tamil</a></li>
				<li><a href="#">Gujarati</a></li>
				<li><a href="#">Bengali</a></li>
				<li><a href="#">Assamese</a></li>
				<li><a href="#">Kanada</a></li>
				<li><a href="#">Malayalam</a></li>
				<li><a href="#">Punjabi</a></li>
				<li><a href="#">Bhojpuri</a></li>
				<li><a href="#">Urdu</a></li>
				<li><a href="#">Rajasthani</a></li>
			</ul>
		<div class="container">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="home.php">Listen Music</a></li>
					<?php
						if(isset($_GET['more_ref_id'])){
							$sql = "select * from more WHERE more_id='$_GET[more_ref_id]' ";
							$run = mysqli_query($conn, $sql);
							while($rows = mysqli_fetch_assoc($run)){
							echo"<li class='active'>$rows[more_title]</li>";
							}
						}
					?>
				</ol>
			</div>
		<hr style="height:1px;border:none;color:#333;background-color:#333;" >
					<div class="first">
					<?php
					if(isset($_GET['more_ref_id'])){
							$sql = "select * from more WHERE more_ref_id='$_GET[more_ref_id]' ";
							$run = mysqli_query($conn, $sql);
							while($rows = mysqli_fetch_assoc($run))
							{
							echo "<h3>$rows[more_title]</h3>";
							}
							}
						?>	
						<br>
						<!---------------------111----------->
						<?php
							if(isset($_GET['more_ref_id'])){
								$sql = "select * from more,main WHERE main_ref_id='$_GET[more_ref_id]' GROUP by rand() LIMIT 12 ";
								$run = mysqli_query($conn, $sql);
								while($rows = mysqli_fetch_assoc($run))
							{
								$main_title = str_replace(' ','-',$rows['main_title']);
								echo "
								<div class='col-md-3'>
										<div class='col-md-12'>
											<div class='top'>
												<img src='$rows[main_img]' alt='$rows[main_title]' class='img-responsive'>
												<div class='play'>
													<a href='list.php?main_title=$main_title&main_id=$rows[main_id]'>
														<center><i class='fa fa-play-circle' style='font-size:90px;color:black;'></i></center>
													</a>
												</div>
											</div>
											<div class='bottom' style='margin-bottom:50px;'>
												<h4 class='item-title'>$rows[main_title]</h4>
												<div class='pull-left'><p>$rows[main_artist]</p></div>
												<div class='clearfix'></div>
												<div class='pull-right dropdown'>
													<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
														<i class='fa fa-ellipsis-v' style='font-size:20px;'></i>
															<ul class='dropdown-menu'> 
																<li><a href='#'><i class='fa fa-play' style='font-size:15px;color:#3399ff;'></i> Play</a></li>
																<li><a href='#'><i class='fa fa-step-forward' style='font-size:15px;color:#3399ff;'></i> &nbsp;Play Next</a></li>
																<li><a href='#'><i class='fa fa-heart-o' style='font-size:15px;color:#3399ff;'></i> Favourite</a></i>
																<li class='divider'></li>
																<li><a href='$rows[main_download]' download><i class='fa fa-download' style='font-size:15px;color:#3399ff;'></i> Download</a></li>
															</ul>
														
													</a>
												</div>
											</div>
										</div>
									</div>";
							}
							}
						?>
					</div>
		</div>
		<br>
		<br>
<!----------------------------bottom---------------------------------------------->
		<?php include "include/bottom.php"?>
	</div>
	<?php include "include/footer.php";?>
</body>
</html>