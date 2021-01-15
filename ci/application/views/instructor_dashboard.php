﻿
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
						<a href="instructor_dashboard" class="item channel_item">Cursus Dashboard</a>						
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
	<?php include "partials/sidebar2.php" ?>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">			
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title"><i class="uil uil-apps"></i> Instructor Dashboard</h2>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Sales</h5>
								<h2>$350</h2>
								<span class="crdbg_1">New $50</span>
							</div>
							<div class="card_dash_right">
								<img src= "<?php echo base_url(); ?>assets/images/dashboard/achievement.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Enroll</h5>
								<h2>1500</h2>
								<span class="crdbg_2">New 125</span>
							</div>
							<div class="card_dash_right">
								<img src= "<?php echo base_url(); ?>assets/images/dashboard/graduation-cap.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Courses</h5>
								<h2>130</h2>
								<span class="crdbg_3">New 5</span>
							</div>
							<div class="card_dash_right">
								<img src= "<?php echo base_url(); ?>assets/images/dashboard/online-course.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Students</h5>
								<h2>2650</h2>
								<span class="crdbg_4">New 245</span>
							</div>
							<div class="card_dash_right">
								<img src= "<?php echo base_url(); ?>assets/images/dashboard/knowledge.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card_dash1">
							<div class="card_dash_left1">
								<i class="uil uil-book-alt"></i>
								<h1>Jump Into Course Creation</h1>
							</div>
							<div class="card_dash_right1">
								<button class="create_btn_dash" onclick="window.location.href = 'create_new_course';">Create Your Course</button>
							</div>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="section3125 mt-50">
							<h4 class="item_title">Latest Courses performance</h4>
							<div class="la5lo1">
								<div class="owl-carousel courses_performance owl-theme">
									<div class="item">
										<div class="fcrse_1">
											<a href="#" class="fcrse_img">
												<img src= "<?php echo base_url(); ?>assets/images/courses/img-1.jpg" alt="">
												<div class="course-overlay"></div>
											</a>
											<div class="fcrse_content">
												<div class="vdtodt">
													<span class="vdt14">First 2 days 22 hours</span>
												</div>
												<a href="#" class="crsedt145">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
												<div class="allvperf">
													<div class="crse-perf-left">View</div>
													<div class="crse-perf-right">1.5k</div>
												</div>
												<div class="allvperf">
													<div class="crse-perf-left">Purchased</div>
													<div class="crse-perf-right">150</div>
												</div>
												<div class="allvperf">
													<div class="crse-perf-left">Total Like</div>
													<div class="crse-perf-right">1k</div>
												</div>
												<div class="auth1lnkprce">
													<a href="#" class="cr1fot50">Go to course analytics</a>
													<a href="#" class="cr1fot50">See comments (875)</a>
													<a href="#" class="cr1fot50">See Reviews (105)</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1">
											<a href="#" class="fcrse_img">
												<img src= "<?php echo base_url(); ?>assets/images/courses/img-2.jpg" alt="">
												<div class="course-overlay"></div>
											</a>
											<div class="fcrse_content">
												<div class="vdtodt">
													<span class="vdt14">Second 4 days 9 hours</span>
												</div>
												<a href="#" class="crse14s">The Complete JavaScript Course 2020: Build Real Projects!</a>
												<div class="allvperf">
													<div class="crse-perf-left">View</div>
													<div class="crse-perf-right">175k</div>
												</div>
												<div class="allvperf">
													<div class="crse-perf-left">Purchased</div>
													<div class="crse-perf-right">1k</div>
												</div>
												<div class="allvperf">
													<div class="crse-perf-left">Total Like</div>
													<div class="crse-perf-right">85k</div>
												</div>
												<div class="auth1lnkprce">
													<a href="#" class="cr1fot50">Go to course analytics</a>
													<a href="#" class="cr1fot50">See comments (915)</a>
													<a href="#" class="cr1fot50">See Reviews (255)</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1">
											<a href="#" class="fcrse_img">
												<img src= "<?php echo base_url(); ?>assets/images/courses/img-3.jpg" alt="">
												<div class="course-overlay"></div>
											</a>
											<div class="fcrse_content">
												<div class="vdtodt">
													<span class="vdt14">Third 6 days 11 hours:</span>
												</div>
												<a href="#" class="crse14s">Beginning C++ Programming - From Beginner to Beyond</a>
												<div class="allvperf">
													<div class="crse-perf-left">View</div>
													<div class="crse-perf-right">17k</div>
												</div>
												<div class="allvperf">
													<div class="crse-perf-left">Purchased</div>
													<div class="crse-perf-right">25</div>
												</div>
												<div class="allvperf">
													<div class="crse-perf-left">Total Like</div>
													<div class="crse-perf-right">15k</div>
												</div>
												<div class="auth1lnkprce">
													<a href="#" class="cr1fot50">Go to course analytics</a>
													<a href="#" class="cr1fot50">See comments (155)</a>
													<a href="#" class="cr1fot50">See Reviews (15)</a>
												</div>
											</div>
										</div>
									</div>									
								</div>
							</div>
						</div>
					</div>					
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="section3125 mt-50">
							<h4 class="item_title">News</h4>
							<div class="la5lo1">
								<div class="owl-carousel edututs_news owl-theme">
									<div class="item">
										<div class="fcrse_1">
											<a href="#" class="fcrse_img">
												<img src= "<?php echo base_url(); ?>assets/images/courses/news-1.jpg" alt="">												
											</a>
											<div class="fcrse_content">
												<a href="#" class="crsedt145 mt-15">COVID-19 Updates & Resources</a>
												<p class="news_des45">See the latest updates to coronavirus-related content, including changes to monetization, and access new Creator support resources</p>
												<div class="auth1lnkprce">
													<a href="#" class="cr1fot50">Learn More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1">
											<a href="#" class="fcrse_img">
												<img src= "<?php echo base_url(); ?>assets/images/courses/news-2.jpg" alt="">												
											</a>
											<div class="fcrse_content">
												<a href="#" class="crsedt145 mt-15">Watch: Edututs+ interview Mr. Joginder</a>
												<p class="news_des45">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac eleifend ante. Duis ac pulvinar felis. Sed a nibh ligula. Mauris eget tortor id mauris tristique accumsan.</p>
												<div class="auth1lnkprce">
													<a href="#" class="cr1fot50">Watch Now</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1">
											<a href="#" class="fcrse_img">
												<img src= "<?php echo base_url(); ?>assets/images/courses/news-1.jpg" alt="">												
											</a>
											<div class="fcrse_content">
												<a href="#" class="crsedt145 mt-15">COVID-19 Updates - April 7</a>
												<p class="news_des45">Ut porttitor mi vel orci cursus, nec elementum neque malesuada. Phasellus imperdiet quam gravida pharetra aliquet. Integer vel ligula eget nisl dignissim hendrerit.</p>
												<div class="auth1lnkprce">
													<a href="#" class="cr1fot50">Learn More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="section3125 mt-50">
							<h4 class="item_title">Profile Analytics</h4>
							<div class="la5lo1">	
								<div class="fcrse_1">
									<div class="fcrse_content">
										<h6 class="crsedt8145">Current subscribers</h6>
										<h3 class="subcribe_title">856</h3>
										<div class="allvperf">
											<div class="crse-perf-left">View</div>
											<div class="crse-perf-right">17k<span class="analyics_pr"><i class="uil uil-arrow-to-bottom"></i>75%</span></div>
										</div>
										<div class="allvperf">
											<div class="crse-perf-left">Purchased<span class="per_text">(per hour)</span></div>
											<div class="crse-perf-right">1<span class="analyics_pr"><i class="uil uil-top-arrow-from-top"></i>100%</span></div>
										</div>
										<div class="allvperf">
											<div class="crse-perf-left">Enroll<span class="per_text">(per hour)</span></div>
											<div class="crse-perf-right">50<span class="analyics_pr"><i class="uil uil-top-arrow-from-top"></i>70%</span></div>
										</div> 
										<div class="auth1lnkprce">
											<a href="#" class="cr1fot50">Go to profile analytics</a>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="section3125 mt-50">
							<h4 class="item_title">Submit Courses</h4>
							<div class="la5lo1">	
								<div class="fcrse_1">
									<div class="fcrse_content">
										<div class="upcming_card">
											<a href="#" class="crsedt145">The Complete JavaScript Course 2020: Build Real Projects!<span class="pndng_145">Pending</span></a>
											<p class="submit-course">Submitted<span>1 days ago</span></p>
											<a href="#" class="delete_link10">Delete</a>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="section3125 mt-50">
							<h4 class="item_title">What's new in Edututs+</h4>
							<div class="la5lo1">	
								<div class="fcrse_1">
									<div class="fcrse_content">
										<a href="#" class="new_links10">Improved performance on Studio Dashboard</a>
										<a href="#" class="new_links10">See more Dashboard updates</a>
										<a href="#" class="new_links10">See issues-at-glance for Live</a>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer mt-40">
			<div class="container-fluid">
				<div class="row">					
					<div class="col-lg-12">
						<div class="item_f1">
							<a href="terms_of_use">Copyright Policy</a>
							<a href="terms_of_use">Terms</a>
							<a href="terms_of_use">Privacy Policy</a>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="footer_bottm">
							<div class="row">
								<div class="col-md-6">
									<ul class="fotb_left">
										<li>
											<a href="index2">
												<div class="footer_logo">
													<img src= "<?php echo base_url(); ?>assets/images/logo1.svg" alt="">
												</div>
											</a>
										</li>
										<li>
											<p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<div class="edu_social_links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-google-plus-g"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-youtube"></i></a>
										<a href="#"><i class="fab fa-pinterest-p"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>