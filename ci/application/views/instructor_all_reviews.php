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
						<h2 class="st_title"><i class="uil uil-star"></i> All Review</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-12">						
						<div class="student_reviews">
							<div class="row">
								<div class="col-lg-5">
									<div class="reviews_left">
										<h3>All Student Feedback</h3>
										<div class="total_rating">
											<div class="_rate001">4.6</div>														
											<div class="rating-box">
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star half-star"></span>
											</div>
											<div class="_rate002">All Rating</div>	
										</div>
										<div class="_rate003">
											<div class="_rate004">
												<div class="progress progress1">
													<div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="rating-box">
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
												</div>
												<div class="_rate002">70%</div>
											</div>
											<div class="_rate004">
												<div class="progress progress1">
													<div class="progress-bar w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="rating-box">
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
													<span class="rating-star empty-star"></span>
												</div>
												<div class="_rate002">40%</div>
											</div>
											<div class="_rate004">
												<div class="progress progress1">
													<div class="progress-bar w-5" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="rating-box">
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
													<span class="rating-star empty-star"></span>
													<span class="rating-star empty-star"></span>
												</div>
												<div class="_rate002">5%</div>
											</div>
											<div class="_rate004">
												<div class="progress progress1">
													<div class="progress-bar w-2" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="rating-box">
													<span class="rating-star full-star"></span>
													<span class="rating-star full-star"></span>
													<span class="rating-star empty-star"></span>
													<span class="rating-star empty-star"></span>
													<span class="rating-star empty-star"></span>
												</div>
												<div class="_rate002">1%</div>
											</div>
											<div class="_rate004">
												<div class="progress progress1">
													<div class="progress-bar w-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="rating-box">
													<span class="rating-star full-star"></span>
													<span class="rating-star empty-star"></span>
													<span class="rating-star empty-star"></span>
													<span class="rating-star empty-star"></span>
													<span class="rating-star empty-star"></span>
												</div>
												<div class="_rate002">1%</div>
											</div>
										</div>
									</div>												
								</div>
								<div class="col-lg-7">
									<div class="review_right">
										<div class="review_right_heading">
											<h3>All Reviews</h3>
											<div class="review_search">
												<input class="rv_srch" type="text" placeholder="Search reviews...">
												<button class="rvsrch_btn"><i class="uil uil-search"></i></button>
											</div>
										</div>
									</div>
									<div class="review_all120">
										<div class="review_item_course_title">
											<a href="#">Course Title Here</a>
										</div>
										<div class="review_item">
											<div class="review_usr_dt">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">
												<div class="rv1458">
													<h4 class="tutor_name1">John Doe</h4>
													<span class="time_145">2 hour ago</span>
												</div>
											</div>
											<div class="rating-box mt-20">
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star half-star"></span>
											</div>
											<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
										</div>
									</div>
									<div class="review_all120 mt-30">
										<div class="review_item_course_title">
											<a href="#">Course Title Here</a>
										</div>
										<div class="review_item">
											<div class="review_usr_dt">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-2.jpg" alt="">
												<div class="rv1458">
													<h4 class="tutor_name1">Zoena Singh</h4>
													<span class="time_145">2 hour ago</span>
												</div>
											</div>
											<div class="rating-box mt-20">
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star half-star"></span>
											</div>
											<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
										</div>
									</div>
									<div class="review_all120 mt-30">
										<div class="review_item_course_title">
											<a href="#">Course Title Here</a>
										</div>
										<div class="review_item">
											<div class="review_usr_dt">
												<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-3.jpg" alt="">
												<div class="rv1458">
													<h4 class="tutor_name1">Rock William</h4>
													<span class="time_145">5 hour ago</span>
												</div>
											</div>
											<div class="rating-box mt-20">
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star full-star"></span>
												<span class="rating-star half-star"></span>
											</div>
											<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
										</div>
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
