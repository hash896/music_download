<?php include "include/db.php";?>
<html>
<head>
<?php
if(isset($_GET['main_id'])){
			$sql = "select * from main WHERE main_id='$_GET[main_id]' ";
			$run = mysqli_query($conn, $sql);
			while($rows = mysqli_fetch_assoc($run)){
			echo"<title>$rows[main_title]</title>";
			}
}
?>
	
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
	<!---------------------------------------------------- Main list ------------------------------------------------>
	
		<div class="container">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="home.php">Listen Music</a></li>
					<?php
						if(isset($_GET['main_id'])){
							$sql = "select * from main WHERE main_id='$_GET[main_id]' ";
							$run = mysqli_query($conn, $sql);
							while($rows = mysqli_fetch_assoc($run)){
							echo"<li><a href='#'>$rows[main_title]</a></li>
								<li class='active'>$rows[main_song]</li>";
							}
						}
					?>
				</ol>
			</div>
<hr style="height:1px;border:none;color:#333;background-color:#333;" >
	<?php
		if(isset($_GET['main_id'])){
			$sql = "select * from main WHERE main_id='$_GET[main_id]' ";
			$run = mysqli_query($conn, $sql);
			while($rows = mysqli_fetch_assoc($run)){
			echo"
			<div class='col-md-12'>
				<div class='col-md-3'>
						<img src='$rows[main_img]' alt='$rows[main_title]' class='img-responsive'>
				</div>
				<div class='col-md-6'>
					<div class='title'>
						<h1><b>$rows[main_title]</b></h1>
						<p>$rows[main_artist]</p>
						<div class='input-group-btn'>
								<button type='button' class='btn btn-search btn-info' style='border-radius:20px'>
									<i class='fa fa-play' style='font-size:20px;color:white;'></i>&nbsp;&nbsp;
									<span class='label-icon'>Play All</span>
								</button>
						</div>
					</div>
				</div>
				<div class='col-md-3'>
					<div class='pull-left dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
							<i class='fa fa-ellipsis-h' style='font-size:25px;color:#3399ff;'></i>
								<ul class='dropdown-menu'> 
									<li><a href='#'><i class='fa fa-play' style='font-size:15px;color:#3399ff;'></i> &nbsp;Play</a></li>
									<li><a href='#'><i class='fa fa-step-forward' style='font-size:15px;color:#3399ff;'></i> &nbsp;&nbsp;Play Next</a></li>
									<li><a href='#'><i class='fa fa-plus-square' style='font-size:17px;color:#3399ff;'></i> &nbsp;Add to Queue</a></li>
									<li><a href='#'><i class='fa fa-list-ul' style='font-size:15px;color:#3399ff;'></i> &nbsp;Add to Playlist</a></li>
									<li><a href='#'><i class='fa fa-heart-o' style='font-size:15px;color:#3399ff;'></i> &nbsp;Favourite</a></i>
									<li class='divider'></li>
									<li><a href='$rows[main_download]' download><i class='fa fa-download' style='font-size:15px;color:#3399ff;'></i> Download</a></li>
								</ul>					
						</a>
					</div>
				</div>
			</div>";
			}
		}
			?>
			<div class="col-md-12">
			<hr style="height:1px;border:none;color:#333;background-color:#333;" >
			<div class="table1">
				<table>
					<thead>
						<tr>
							<th>S.no</th>
							<th></th>
							<th>Title</th>
							<th>Artist</th>
							<th><i class="fa fa-clock-o" style="font-size:25px;color:#404040;"></i></th>
							<td></td>
						</tr>
					</thead>
					<tbody> 
						<?php
						if(isset($_GET['main_id'])){
							$sql = "select * from main WHERE main_id='$_GET[main_id]' ";
								$run = mysqli_query($conn, $sql);
								while($rows = mysqli_fetch_assoc($run)){
									echo"
										<audio src='$rows[main_download]'></audio>
											<tr>
												<td>1</td>
												<td><a href='$rows[main_download]'><i class='fa fa-play-circle-o' style='font-size:25px;color:red;'></i></a></td>
												<td>$rows[main_song]</td>
												<td>$rows[main_artist]</td>
												<td>$rows[main_time]</td>
												<td>
													<div class='dropdown'>
														<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
															<i class='fa fa-ellipsis-h' style='font-size:25px;color:white;'></i>
																<ul class='dropdown-menu'> 
																	<li><a href='#'><i class='fa fa-play' style='font-size:15px;color:#3399ff;'></i> &nbsp;Play</a></li>
																	<li><a href='#'><i class='fa fa-step-forward' style='font-size:15px;color:#3399ff;'></i> &nbsp;&nbsp;Play Next</a></li>
																	<li><a href='#'><i class='fa fa-plus-square' style='font-size:17px;color:#3399ff;'></i> &nbsp;Add to Queue</a></li>
																	<li><a href='#'><i class='fa fa-list-ul' style='font-size:15px;color:#3399ff;'></i> &nbsp;Add to Playlist</a></li>
																	<li><a href='#'><i class='fa fa-heart-o' style='font-size:15px;color:#3399ff;'></i> &nbsp;Favourite</a></i>
																	<li class='divider'></li>
																	<li><a href='$rows[main_download]' download><i class='fa fa-download' style='font-size:15px;color:#3399ff;'></i> Download</a></li>
																</ul>
																						
														</a>
													</div>
												</td>
											</tr>";
						}
						}
							?>
					</tbody>
				</table>
			</div>
			</div>
		</div>
	<br>
	<br>
		
	<!---------------------------------------------------- End of Main list ------------------------------------------------>
	
	
	<?php include "include/bottom.php";?>	
		
	</div>
	
<!----------------------------------------------------------     nav bar footer ---------------------------------------->
	<?php include "include/footer.php";?>
</body>
</html>