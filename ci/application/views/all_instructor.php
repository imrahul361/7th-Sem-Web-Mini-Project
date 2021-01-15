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
				<div class="row">
					<div class="col-xl-12 col-lg-8">
						<div class="section3125">
							<div class="explore_search">
								<div class="ui search focus">
									<div class="ui left icon input swdh11">
										<input class="prompt srch_explore" type="text" placeholder="Search Tutors...">
										<i class="uil uil-search-alt icon icon2"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="_14d25">
							<div class="row">
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">John Doe</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Wordpress &amp; Plugin Tutor</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">100K Students</span>
												<span class="vdt15">15 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-2.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Kerstin Cable</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Language Learning Coach, Writer, Online Tutor</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">14K Students</span>
												<span class="vdt15">11 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-3.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Jose Portilla</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Head of Data Science, Pierian Data Inc.</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">1M Students</span>
												<span class="vdt15">25 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-3.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="#" class="tutor_name">Jose Portilla</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Head of Data Science, Pierian Data Inc.</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">1M Students</span>
												<span class="vdt15">25 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-5.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Kyle Pew</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Microsoft Certified Trainer - 380,000+ Udemy Students</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">300K Students</span>
												<span class="vdt15">18 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-7.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Jaysen Batchelor</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Illustrator &amp; Designer</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">491K Students</span>
												<span class="vdt15">13 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-8.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Quinton Batchelor</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Photographer &amp; Instructor</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">364K Students</span>
												<span class="vdt15">6 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-10.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Eli Natoli</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Entrepreneur - Passionate Teacher</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">115K Students</span>
												<span class="vdt15">8 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-11.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Sunny William</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Entrepreneur - Passionate Teacher</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">615K Students</span>
												<span class="vdt15">12 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-12.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Neha Smith</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">English Teacher</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">15K Students</span>
												<span class="vdt15">5 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-13.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Sukhwinder Singh</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Web Development</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">215K Students</span>
												<span class="vdt15">15 Courses</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="fcrse_1 mt-30">
										<div class="tutor_img">
											<a href="instructor_profile_view"><img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-14.jpg" alt=""></a>
										</div>
										<div class="tutor_content_dt">
											<div class="tutor150">
												<a href="instructor_profile_view" class="tutor_name">Saloni Prabhakar</a>
												<div class="mef78" title="Verify">
													<i class="uil uil-check-circle"></i>
												</div>
											</div>
											<div class="tutor_cate">Photographer</div>
											<ul class="tutor_social_links">
												<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
											</ul>
											<div class="tut1250">
												<span class="vdt15">10K Students</span>
												<span class="vdt15">3 Courses</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="main-loader mt-50">
										<div class="spinner">
											<div class="bounce1"></div>
											<div class="bounce2"></div>
											<div class="bounce3"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "partials/footer.php" ?>
