<?php include "partials/header.php" ?>

<body>

	<!-- Header Start -->
	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu">
			<i class='uil uil-bars'></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button>
		<div class="main_logo" id="logo">
			<a href="index2"><img src="<?php echo base_url(); ?>assets/images/logo.svg" alt=""></a>
			<a href="index2"><img class="logo-inverse" src="<?php echo base_url(); ?>assets/images/ct_logo.svg" alt=""></a>
		</div>
		<div class="search120">
			<div class="ui search">
				<div class="ui left icon input swdh10">
					<input class="prompt srch10" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
					<i class='uil uil-search-alt icon icon1'></i>
				</div>
			</div>
		</div>
		<div class="header_right">
			<ul>
				<li>
					<a href="create_new_course" class="upload_btn">Create New Course</a>
				</li>
				<li>
					<a href="index2" class="option_links"><i class='uil uil-home-alt'></i><span class="noti_count">9+</span></a>
				</li>
				<li class="ui dropdown">
					<a href="#" class="option_links"><i class='uil uil-envelope-alt'></i><span class="noti_count">3</span></a>
					<div class="menu dropdown_ms">
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-6.jpg" alt="">
								<div class="pd_content">
									<h6>Zoena Singh</h6>
									<p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
									<span class="nm_time">2 min ago</span>
								</div>
							</div>
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-5.jpg" alt="">
								<div class="pd_content">
									<h6>Joy Dua</h6>
									<p>Hello, I paid you video tutorial but did not play error 404.</p>
									<span class="nm_time">10 min ago</span>
								</div>
							</div>
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-8.jpg" alt="">
								<div class="pd_content">
									<h6>Jass</h6>
									<p>Thanks Sir, Such a nice video.</p>
									<span class="nm_time">25 min ago</span>
								</div>
							</div>
						</a>
						<a class="vbm_btn" href="instructor_messages">View All <i class='uil uil-arrow-right'></i></a>
					</div>
				</li>
				<li class="ui dropdown">
					<a href="#" class="option_links"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>
					<div class="menu dropdown_mn">
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">
								<div class="pd_content">
									<h6>Rock William</h6>
									<p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
									<span class="nm_time">2 min ago</span>
								</div>
							</div>
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-2.jpg" alt="">
								<div class="pd_content">
									<h6>Jassica Smith</h6>
									<p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
									<span class="nm_time">12 min ago</span>
								</div>
							</div>
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-9.jpg" alt="">
								<div class="pd_content">
									<p> Your Membership Approved <strong>Upload Video</strong>.</p>
									<span class="nm_time">20 min ago</span>
								</div>
							</div>
						</a>
						<a class="vbm_btn" href="instructor_notifications">View All <i class='uil uil-arrow-right'></i></a>
					</div>
				</li>
				<li class="ui dropdown">
					<a href="#" class="opts_account">
						<img src="<?php echo base_url(); ?>assets/images/hd_dp.jpg" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src="<?php echo base_url(); ?>assets/images/hd_dp.jpg" alt="">
								<div class="pd_content">
									<div class="rhte85">
										<h6>Joginder Singh</h6>
										<div class="mef78" title="Verify">
											<i class='uil uil-check-circle'></i>
										</div>
									</div>
									<span>gambol943@gmail.com</span>
								</div>
							</div>
							<a href="my_instructor_profile_view" class="dp_link_12">View Instructor Profile</a>
						</div>
						<div class="night_mode_switch__btn">
							<a href="#" id="night-mode" class="btn-night-mode">
								<i class="uil uil-moon"></i> Night mode
								<span class="btn-night-mode-switch">
									<span class="uk-switch-button"></span>
								</span>
							</a>
						</div>
						<a href="instructor_dashboard" class="item channel_item">Cursus dashboard</a>
						<a href="membership" class="item channel_item">Paid Memberships</a>
						<a href="setting" class="item channel_item">Setting</a>
						<a href="help" class="item channel_item">Help</a>
						<a href="feedback" class="item channel_item">Send Feedback</a>
						<a href="sign_in" class="item channel_item">Sign Out</a>
					</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	<?php include "partials/sidebar.php" ?>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">
				<div class="row justify-content-md-center">
					<div class="col-lg-8 col-md-10">
						<div class="section3125 stream_tabs">
							<ul class="nav nav-tabs slive_tabs justify-content-center" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="add-streaming-tab" data-toggle="tab" href="#add-straming" role="tab" aria-controls="add-straming" aria-selected="true">Add Streaming</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">Setting</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="add-straming" role="tabpanel">
									<div class="add_stream_content">
										<!-- <h4 class="strm_title">Connect your live stream to the Live API</h4>
										<div class="sf475">Use live-streaming software or a hardware encoder. <a href="#">Learn More</a></div>
										
										<div class="stm_key">Preview your broadcast with a stream key or paired encoder.</div> -->
										<form action="db" method="POST">
											<div class="live_form">
												<div class="group-form">
													<label>Instructor Name*</label>
													<input class="_dlor1" type="text" name="name" id="name" data-testid="name" placeholder="Instructor Name" required>
													<!-- <button class="_6tf7s" type="submit" value="1">Copy</button> -->
												</div>
												<div class="group-form">
													<label>ZOOM Meeting ID*</label>
													<input class="_dlor1" type="text" name="id" id="id" data-testid="server_url" placeholder="Stream URL/ID" required>
													<!-- <button class="_6tf7s" type="submit" value="1">Copy</button> -->
												</div>
												<div class="group-form">
													<label>ZOOM Password*</label>
													<input class="_dlor1" type="text" name="password" id="password" placeholder="Stream Password" required>
													<!-- <button class="_6tf7s" type="submit" value="1">Copy</button> -->
												</div>
												<div class="group-form">

													<label>Date*</label>
													<input class="_dlor1" type="date" id="date" name=" date" placeholder="Enter Date" required>
													<!-- <button class="_6tf7s" type="submit" value="1">Copy</button> -->
												</div>
												<div class="group-form">
													<!-- <i class="far fa-clock"></i> -->
													<label>Start Time*</label>
													<input class="_dlor1" data-plugin-timepicker name="start" id="start" type="time" placeholder="Starting Time" required>
													<!-- <button class="_6tf7s" type="submit" value="1">Copy</button> -->
												</div>
												<div class="group-form">
													<!-- <i class="far fa-clock"></i> -->
													<label>End Time</label>
													<input class="_dlor1" data-plugin-timepicker type="time" name="end" id="end" placeholder="Ending Time">
													<!-- <button class="_6tf7s" type="submit" value="1">Copy</button> -->
												</div>
												<div>
													<input class="_145d1" type="submit" name="submit" value="Go Live" />
													<i class='uil uil-video'></i>
												</div>




											</div>
										</form>
									</div>
								</div>
								<div class="tab-pane fade" id="setting" role="tabpanel">
									<div class="add_stream_content">
										<h4 class="strm_title1">Live Streaming Setting</h4>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss1" checked>
											<label>Publish this as a continuous live video</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss2">
											<label>Allow embedding </label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss3">
											<label>Unpublish after live video ends</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss4" checked>
											<label>Allow viewers to rewind</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss5" checked>
											<label>End broadcast when stream ends</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss6">
											<label>Publish as a test broadcast</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss7">
											<label>Turn off live commentary</label>
										</div>
										<button class="_145d1">Save changes &amp; Go Live</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include "partials/footer.php" ?>