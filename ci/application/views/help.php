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
	<div class="wrapper _bg4586">
		<div class="_215v12">
			<div class="container-fluid">			
				<div class="row">
					<div class="col-lg-12">
						<div class="section3125">							
							<div class="row justify-content-md-center">						
								<div class="col-md-6">					
									<div class="help_stitle">					
										<h2>How may we help you?</h2>
										<div class="explore_search">
											<div class="ui search focus">
												<div class="ui left icon input swdh11">
													<input class="prompt srch_explore" type="text" placeholder="Search for solutions">
													<i class="uil uil-search-alt icon icon2"></i>
												</div>
											</div>
										</div>
									</div>															
								</div>															
							</div>							
						</div>							
					</div>															
				</div>
			</div>
		</div>
		<div class="_215b15">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">						
						<div class="course_tabs">
							<nav>
								<div class="nav nav-tabs help_tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-instructor-tab" data-toggle="tab" href="#nav-instructor" role="tab" aria-selected="true">Instructor</a>
									<a class="nav-item nav-link" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-selected="false">Student</a>									
								</div>
							</nav>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="_215b17">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="course_tab_content">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-instructor" role="tabpanel">
									<div class="tpc152">
										<div class="crse_content">
											<h3>Select a topic to search for help</h3>																			
										</div>
										<div class="section3126 mt-20">
											<div class="row">
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-wallet"></i>
														</div>
														<div class="value_content">
															<h4>Payments</h4>
															<p>Understand the revenue share and how to receive payments.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-megaphone"></i>
														</div>
														<div class="value_content">
															<h4>Selling & Promotion</h4>
															<p>Learn about the announcement and promotional tools.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-file-check-alt"></i>
														</div>
														<div class="value_content">
															<h4>Quality Standards</h4>
															<p>Learn what it takes to create a high quality course.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-file-edit-alt"></i>
														</div>
														<div class="value_content">
															<h4>Course Building</h4>
															<p>Build your course curriculum and landing page.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-window"></i>
														</div>
														<div class="value_content">
															<h4>Course Management</h4>
															<p>Maintain your course and engage with students.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-file-shield-alt"></i>
														</div>
														<div class="value_content">
															<h4>Trust & Safety</h4>
															<p>Policy and copyright questions and guidance.</p>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="tpc152">
										<div class="crse_content">
											<h3>Frequently Asked Questions</h3>																			
										</div>
										<div class="section3126 mt-20">
											<div class="row">
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														Promote Your Course With Coupons and Referral Links																													
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														How to Select Your Payout Method And Become a Premium Instructor																													
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														Cursus Course Quality Checklist																												
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														Instructor Revenue Share																													
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														Instructor Promotional Agreements and Cursus Deals																												
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														How to Become an Instructor: FAQ																												
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-student" role="tabpanel">
									<div class="tpc152">
										<div class="crse_content">
											<h3>Select a topic to search for help</h3>																			
										</div>
										<div class="section3126 mt-20">
											<div class="row">
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-file-check-alt"></i>
														</div>
														<div class="value_content">
															<h4>Getting Started</h4>
															<p>Learn how Cursus works and how to start learning.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-user"></i>
														</div>
														<div class="value_content">
															<h4>Account/Profile</h4>
															<p>Manage your account settings.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-desktop-cloud-alt"></i>
														</div>
														<div class="value_content">
															<h4>Troubleshooting</h4>
															<p>Experiencing a bug? Check here.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-book-alt"></i>
														</div>
														<div class="value_content">
															<h4>Course Taking</h4>
															<p>Everything about taking a course on Udemy.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-wallet"></i>
														</div>
														<div class="value_content">
															<h4>Purchase/Refunds</h4>
															<p>Learn about coupons, how to send gifts, and refunds.</p>
														</div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props50">
														<div class="value_icon">
															<i class="uil uil-mobile-android-alt"></i>
														</div>
														<div class="value_content">
															<h4>Mobile</h4>
															<p>On the go? Learn about our mobile app.</p>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="tpc152">
										<div class="crse_content">
											<h3>Frequently Asked Questions</h3>																			
										</div>
										<div class="section3126 mt-20">
											<div class="row">
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														Lifetime Access																													
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														Cursus FAQ 																													
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														Downloading Courses																													
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														Certificate of Completion																													
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														Refund a Course																													
													</a>
												</div>
												<div class="col-md-4">
													<a href="#" class="value_props51">																											
														How to Solve Payment Issues																													
													</a>
												</div>
											</div>
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
