<div class="nav2 navbar-fixed-bottom">
		<div class="container-fluid">
			
			<ul class="nav5 navbar-nav">
			<?php
			if(isset($_GET['main_id'])){
							$sql = "select * from main WHERE main_id='$_GET[main_id]' ";
								$run = mysqli_query($conn, $sql);
								while($rows = mysqli_fetch_assoc($run)){
									echo"
				<li><img src='$rows[main_img]' class='$rows[main_title]' style='width:60px;height:60px;'></li>
				
				<li><div style='width:200px;color:white;font-size:25px;margin-top:12px;'><p><marquee>$rows[main_song] - $rows[main_artist]</marquee></p></div></li>
			";
								}
			}
			?>
				<li><a href="#"><i class="fa fa-step-backward" aria-hidden="true" onclick="skip(-10)" style="font-size:35px;color:#3399ff;padding-top:10px;"></i></a></li>
				
				<li><a href="#" ><i class="fa fa-play" id="play" aria-hidden="true" onclick="vidplay()" style="font-size:35px;color:#3399ff;padding-top:10px;"></i></a>
					<i class="fa fa-pause" id="pause" aria-hidden="true" onclick="vidplay()" style="font-size:35px;color:#3399ff;padding-top:10px;display:none;"></i>
				</li>
				
				<li><a href="#"><i class="fa fa-step-forward" aria-hidden="true" onclick="skip(10)" style="font-size:35px;color:#3399ff;padding-top:10px;"></i></a></li>
				
				<li style="width:400px;">
					<div class="nav_P1 navbar-text progress" id="progress">
						<div id="Bar"></div>
					</div>
				</li>
				
				<li style="font-size:15px;padding-top:27px;color:white;"><span class="time-elapsed"> </span> / <span class="song-duration"></span></li>
				
				<li>
					<a href="#"><i class="fa fa-volume-up" id="up" aria-hidden="true" onclick="volume()" style="font-size:35px;color:#3399ff;padding-top:10px;"></i></a>
					<i class="fa fa-volume-down" id="down" aria-hidden="true" onclick="volume()" style="font-size:35px;color:#3399ff;padding-top:10px;display:none;"></i>
					<i class="fa fa-volume-off" id="off" aria-hidden="true" onclick="volume()" style="font-size:35px;color:#3399ff;padding-top:10px;display:none;"></i>
				</li>
				
				<li style="width:100px;">
					<div class="nav_p2 navbar-text progress" id="progress1">
						<div id="bar1"></div>
					</div>
				</li>
				
				<li><a href="#"><i class="fa fa-repeat" aria-hidden="true" onclick="restart" style="font-size:35px;color:#3399ff;padding-top:10px;"></i></a></li>
				<li><a href="#"><i class="fa fa-random" aria-hidden="true" style="font-size:35px;color:#3399ff;padding-top:10px;"></i></a></li>
			</ul>
				
			
			
		</div>
		
	</div>