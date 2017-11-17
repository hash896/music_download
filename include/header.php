<div class="nav navbar-fixed">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="home.php" class="navbar-brand"><b><i>listen music</i></b></a>
		</div>
			<ul class="nav navbar-nav"> 
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse
				<span class="caret"></span></a>
					<ul class="dropdown-menu"> 
						<li><a href="#">Featured Playlis</a></li>
						<li><a href="#">New Releases</a></li>
						<li><a href="#">Weekly Top 20</a></li>
						<li><a href="#">All Albums</a></li>
						<li class="divider"></li>
						<li><a href="#">People</a></li>
						<li class="divider"></li>
						<li><a href="#">Surprise Me</a></li>
					</ul>
				</li>
				<li><a href="#">Music</a></li>
				<li><a href="#">Radio</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More
				<span class="caret"></span></a>
					<ul class="dropdown-menu"> 
						<li><a href="#">My Playlist</a></li>
						<li><a href="#">Bookmark Listen Music</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">MOBLILE APPS</li>
						<li><a href="#">Listen Music for IOS</a></li>
						<li><a href="#">Listen Music for Andriod</a></li>
						<li><a href="#">Listen Music for Windows</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">ABOUT</li>
						<li><a href="#">Help & Support</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#modal1" data-toggle="modal" data-target="#modal1"><b>Log In</b></a></li>
				<!-- -------------------------------------------------------modal1 class-------------------------------------->
				<div class="modal fade" id="modal1">
					<div class="modal-dialolg modal-lg">
						<div class="modal-content">
				
							<div class="modal-header">
								<ul class="nav5 nav-tabs navbar-left"> 
									<li><a href="#modal1" data-target="#modal1" data-toggle="modal"><b>Login</b></a></li>
									<li>|</li>
									<li><a href="#modal2" data-target="#modal2" data-toggle="modal"><b>Sign Up</b></a></li>
								</ul>
								<div class="nav5 navbar-right">
								<button class="close" data-dismiss="modal">&times;</button>
								</div>
							</div>
							
							<div class="modal-body">
							<div class="container-fluid">
							    <form class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label">Username:</label>
										<div class="col-md-10">
											  <input type="text" class="input1 form-control" placeholder="Enter Username" name="uname" style="margin-left:32px;" required>
										</div>
									</div>
									<div class="form-group">
										 <label class="col-md-2 control-label">Password:</label>
										<div class="col-md-10">
										  <input type="password" class="input1 form-control" placeholder="Enter Password" name="psw" style="margin-left:32px;" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12" style="padding-left:45px;">
										  <button type="submit" class="btn btn-info">Login</button>
									      <input type="checkbox" checked="checked"> Remember me
										</div>
									</div>
									
								</form>
							</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-danger" data-dismiss="modal" style="margin-left:30px;">Close</button>
								<p>Forgot <a href="#">Password?</a>&nbsp;<b>|</b>&nbsp;New Member-&nbsp;<a href="#">Sign Up</a></p>
							</div>
							
						</div>
					</div>
					
				</div>
				<!------------------------------------------------------modal2 class----------------------------------------------------->
				<li><a href="#modal2" data-toggle="modal" data-target="#modal2"><b>Sign Up</b></a></li>
				<div class="modal fade" id="modal2">
					<div class="modal-dialolg modal-lg">
						<div class="modal-content">
				
							<div class="modal-header">
								<ul class="nav5 nav-tabs navbar-left"> 
									<li><a href="#modal1" data-target="#modal1" data-toggle="modal">Login</a></li>
									<li>|</li>
									<li><a href="#modal2" data-target="#modal2" data-toggle="modal">Sign Up</a></li>
								</ul>
								<div class="nav5 navbar-right">
								<button class="close" data-dismiss="modal">&times;</button>
								</div>
							</div>
							
							<div class="modal-body">
							<div class="container-fluid">
							    <form class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label">Username:</label>
										<div class="col-md-10">
											<input type="text" class="input1 form-control" placeholder="Enter Username" name="uname" style="margin-left:32px;" required>
										</div>
									</div>
									<div class="form-group">	
										<label class="col-md-2 control-label">Email-ID:</label>
										<div class="col-md-10">
											<input type="email" class="input1 form-control" placeholder="Enter Email_ID" name="email" style="margin-left:32px;" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Password:</label>
										<div class="col-md-10">
										  <input type="password" class="input1 form-control" placeholder="Enter Password" name="psw" style="margin-left:32px;" required>
										</div>
									
									
										<label class="control-label" style="margin-top:10px;margin-left:36px;">Confirm Password:</label><br>
										<input type="password" class="input1 form-control" placeholder="Enter Password Again" name="cpsw" style="margin-top:10px;margin-left:10px;" required>
									</div>
									<div class="form-group">
										<div class="col-md-12" style="padding-left:45px;">
										  <button type="submit" class="btn btn-success">Sign Up</button>
										</div>
									</div>
								</form>
							</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-danger" data-dismiss="modal" style="margin-left:30px;">Close</button>
								<p>Already a member&nbsp;<b>|</b>&nbsp;<a href="home.php/modal1">Login</a></p>
							</div>
							
						</div>
					</div>
					
				</div>
				<!----------------------------------------------------------over of modal class------------------------------------------>
			</ul>
		
	</div>
</div>
<!---------------------------------------------------          Search Bar ------------------------------------------------------------->
                <div class="nav nav1">
					<div class="col-md-12">
						<div class="col-md-9">
							<input type="text" class="form-control" style="border-radius:20px;">
						</div>
						<div class="col-md 3">
							<div class="input-group-btn">
								<button type="button" class="btn btn-search btn-info" style="border-radius:20px">
									<span class="glyphicon glyphicon-search"></span>
									<span class="label-icon">Search</span>
								</button>
							</div>
						</div>
					</div>
					
                </div>  
<!---------------------------------------------------------  End of Search Bar --------------------------------------------------------->
	