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
			<a href="index2"><img src= "<?php echo base_url(); ?>assets/images/logo.svg" alt=""></a>
			<a href="index2"><img class="logo-inverse" src= "<?php echo base_url(); ?>assets/images/ct_logo.svg" alt=""></a>
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
				<!-- <li>
					<a href="create_new_course" class="upload_btn">Create New Course</a>
				</li> -->
				<li>
					<a href="index2" class="option_links"><i class='uil uil-home-alt'></i><span class="noti_count">9+</span></a>
				</li>
				<li class="ui dropdown">
					<a href="#" class="option_links"><i class='uil uil-envelope-alt'></i><span class="noti_count">3</span></a>
					<div class="menu dropdown_ms">
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-6.jpg" alt="">
								<div class="pd_content">
									<h6>Zoena Singh</h6>
									<p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
									<span class="nm_time">2 min ago</span>
								</div>							
							</div>							
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-5.jpg" alt="">
								<div class="pd_content">
									<h6>Joy Dua</h6>
									<p>Hello, I paid you video tutorial but did not play error 404.</p>
									<span class="nm_time">10 min ago</span>
								</div>							
							</div>							
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-8.jpg" alt="">
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
								<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">
								<div class="pd_content">
									<h6>Rock William</h6>
									<p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
									<span class="nm_time">2 min ago</span>
								</div>							
							</div>							
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-2.jpg" alt="">
								<div class="pd_content">
									<h6>Jassica Smith</h6>
									<p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
									<span class="nm_time">12 min ago</span>
								</div>							
							</div>							
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-9.jpg" alt="">
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
						<img src= "<?php echo base_url(); ?>assets/images/hd_dp.jpg" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src= "<?php echo base_url(); ?>assets/images/hd_dp.jpg" alt="">
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
							<!-- <a href="my_instructor_profile_view" class="dp_link_12">View Instructor Profile</a>						 -->
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
				<div class="row">
					<div class="col-xl-8 col-lg-8">
						<div class="section3125">
							<div class="live1452">
								<iframe src="https://www.youtube.com/embed/EEIk7gwjgIM?autoplay=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="user_dt5">
								<div class="user_dt_left">
									<div class="live_user_dt">
										<div class="user_img5">
											<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-4.jpg" alt="">												
										</div>
										<div class="user_cntnt">
											<h4>Jassica William</h4>
											<button class="subscribe-btn">Subscribe</button>
										</div>
									</div>
								</div>
								<div class="user_dt_right">
									<ul>
										<li>
											<a href="#" class="lkcm152"><i class='uil uil-eye'></i><span>1452</span></a>
										</li>
										<li>
											<a href="#" class="lkcm152"><i class='uil uil-thumbs-up'></i><span>100</span></a>
										</li>
										<li>
											<a href="#" class="lkcm152"><i class='uil uil-thumbs-down'></i><span>20</span></a>
										</li>
										<li>
											<a href="#" class="lkcm152"><i class='uil uil-share-alt'></i><span>9</span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>							
					</div>
					<div class="col-xl-4 col-lg-4">
						<div class="right_side">							
							<div class="fcrse_3">
								<div class="cater_ttle">
									<h4>Live Chat</h4>
								</div>
								<div class="live_chat">
									<div class="chat1">
										<p><a href="#">John Doe</a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet molestie leo ac pellentesque</p>
										<p><a href="#">Poonam</a>Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
										<p><a href="#">Jass</a>Nulla sollicitudin nec nisi at pellentesque. Cras fringilla est et sem tempor</p>
										<p><a href="#">Albert Smith</a>Pellentesque ultricies risus sit amet congue euismod</p>
										<p><a href="#">Jassica William</a>Nullam efficitur tristique consequat</p>
										<p><a href="#">Joy Dua</a>Proin sed leo eleifend,</p>
										<p><a href="#">Zoena Singh</a>Aliquam dignissim elementum sem id rutrum</p>
										<p><a href="#">Amritpal Singh</a>Fusce a elit at libero sollicitudin tincidunt</p>
										<p><a href="#">Johnson</a>Ut laoreet lobortis ornare</p>
										<p><a href="#">Jashan</a>Sed pretium erat eu turpis condimentum</p>
									</div>
								</div>
								<div class="live_comment">
									<input class="live_input" type="text" placeholder="Say Something..." />
									<button class="btn_live"><i class='uil uil-message'></i></button>
								</div>
							</div>													
						</div>
					</div>
					<!-- <div class="col-md-12">
						<div class="section3125 mb-15 mt-20">
							<h4 class="item_title">Live Streams</h4>
							<a href="live_streams" class="see150">See all</a>
							<div class="la5lo1">
								<div class="owl-carousel live_stream owl-theme">
									<div class="item">
										<div class="stream_1">
											<a href="live_output" class="stream_bg">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">
												<h4>John Doe</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
									<div class="item">
										<div class="stream_1">
											<a href="live_output" class="stream_bg">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-2.jpg" alt="">
												<h4>Jassica</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
									<div class="item">
										<div class="stream_1">
											<a href="live_output" class="stream_bg">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-9.jpg" alt="">
												<h4>Edututs+</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
									<div class="item">
										<div class="stream_1">
											<a href="live_output" class="stream_bg">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-3.jpg" alt="">
												<h4>Joginder Singh</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
									<div class="item">
										<div class="stream_1">
											<a href="live_output" class="stream_bg">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-4.jpg" alt="">
												<h4>Zoena</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
									<div class="item">
										<div class="stream_1">
											<a href="live_output" class="stream_bg">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-5.jpg" alt="">
												<h4>Albert Dua</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
									<div class="item">
										<div class="stream_1">
											<a href="live_output" class="stream_bg">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-6.jpg" alt="">
												<h4>Ridhima</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
									<div class="item">
										<div class="stream_1">
											<a href="live_output" class="stream_bg">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-7.jpg" alt="">
												<h4>Amritpal</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
									<div class="item">
										<div class="stream_1">
											<a href="live_output" class="stream_bg">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-8.jpg" alt="">
												<h4>Jimmy</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					 -->
				</div>
			</div>
		</div>
		
		<?php include "partials/footer.php" ?>