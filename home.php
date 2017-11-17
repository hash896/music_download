<?php include 'include/db.php';?>
<html>
<head>
	<title>listen music</title>
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
			<div class="carousel slide" id="carousel1" data-ride="carousel">
				<div class="carousel-inner">
					<div class='item active'>
						<div class='col-md-6'>
							<a href='list.php'>
								<img src='products/images/as.jpg' class='img-responsive'>
							</a>
						</div>
						<div class='col-md-6'>
							<a href='list.php'>
								<img src='products/images/maroon.jpg' class='img-responsive'>
							</a>
						</div>
					</div>
					<div class='item'>
						<div class='col-md-6'>
							<a href='list.php'>
								<img src='products/images/sg.jpg' class='img-responsive'>
							</a>
						</div>
						<div class='col-md-6'>
							<a href='list.php'>
								<img src='products/images/m.jpg' class='img-responsive'>
							</a>
						</div>
					</div>
					<div class='item'>
						<div class='col-md-6'>
							<a href='list.php'>
								<img src='products/images/jb.jpg' class='img-responsive'>
							</a>
						</div>
						<div class='col-md-6'>
							<a href='list.php'>
								<img src='products/images/bs.jpg' class='img-responsive'>
							</a>
						</div>
					</div>
					<div class='item'>
						<div class='col-md-6'>
							<a href='list.php'>
								<img src='products/images/seg.jpg' class='img-responsive'>
							</a>
						</div>
						<div class='col-md-6'>
							<a href='list.php'>
								<img src='products/images/party.jpg' class='img-responsive'>
							</a>
						</div>
					</div>
				</div>
				<a href="#carousel1" data-slide="prev" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a href="#carousel1" data-slide="next" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			<!--             --->
			<div class="back_img">
				<div class="container">
				<!------------------------------------------new releases----------------------------------------------->
				<div class='first'>
					<?php
						$sqlm = "select * from more WHERE more_ref_id=1;";
						$runm = mysqli_query($conn, $sqlm);
						while($rows = mysqli_fetch_assoc($runm)){
							$more_title = str_replace(' ','-',$rows['more_title']);
							echo"
								<h3>$rows[more_title] - <a href='more.php?more_title=$more_title&more_ref_id=$rows[more_ref_id]'>More...</a></h3>
							";
						}
					?>
									<br>
					<!---------------------111----------->
					<?php
							$sql = "select * from main WHERE main_ref_id=1 GROUP by rand() LIMIT 4;";
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
											<div class='bottom'>
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
						
						?>
					</div>
					<hr style='height:3px;border:none;color:#333;background-color:green;'>
						<div class="first">
							<?php
								$sqlm = "select * from more WHERE more_ref_id=2;";
								$runm = mysqli_query($conn, $sqlm);
								while($rows = mysqli_fetch_assoc($runm)){
									echo"
										<h3>$rows[more_title] - <a href='more.php?more_title=$more_title&&more_ref_id=$rows[more_ref_id]'>More...</a></h3>
									";
								}
					?>
							<br>
						<?php
						$sql = "select * from main WHERE main_ref_id=2 GROUP by rand() LIMIT 4;";
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
											<div class='bottom'>
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
						
						?>
						</div>
					<hr style='height:3px;border:none;color:#333;background-color:green;'>
						<div class="first">
							<?php
								$sqlm = "select * from more WHERE more_ref_id=3;";
								$runm = mysqli_query($conn, $sqlm);
								while($rows = mysqli_fetch_assoc($runm)){
									echo"
										<h3>$rows[more_title] - <a href='more.php?more_title=$more_title&&more_ref_id=$rows[more_ref_id]'>More...</a></h3>
									";
								}
							?>
							<br>
							<?php
							$sql = "select * from main WHERE main_ref_id=3 GROUP by rand() LIMIT 4;";
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
											<div class='bottom'>
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
						
						?>
						</div>
				<br><br>
				</div>
			</div>	
			<!---- ------------------------------    footer------------------------>
		<!--bottom   -->
		<?php include 'include/bottom.php';?>
	</div>	
<!----------------------------------------------------------     nav bar footer ---------------------------------------->
	<?php include "include/footer.php";?>
</body>
</html>