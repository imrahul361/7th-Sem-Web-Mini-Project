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
		<div class="_216b01">
			<div class="container">			
				<div class="row justify-content-md-center">
					<div class="col-md-10">
						<div class="section3125 rpt145">							
							<div class="row">						
								<div class="col-lg-7">
									<a href="#" class="_216b22">										
										<span><i class="uil uil-windsock"></i></span>Report Profile
									</a>
									<div class="dp_dt150">						
										<div class="img148">
											<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">										
										</div>
										<div class="prfledt1">
											<h2>John Doe</h2>
											<span>Web Developer</span>
										</div>										
									</div>
									<ul class="_ttl120">
										<li>
											<div class="_ttl121">
												<div class="_ttl122">Enroll Students</div>
												<div class="_ttl123">612K</div>
											</div>
										</li>
										<li>
											<div class="_ttl121">
												<div class="_ttl122">Courses</div>
												<div class="_ttl123">8</div>
											</div>
										</li>
										<li>
											<div class="_ttl121">
												<div class="_ttl122">Reviews</div>
												<div class="_ttl123">115K</div>
											</div>
										</li>
										<li>
											<div class="_ttl121">
												<div class="_ttl122">Subscribers</div>
												<div class="_ttl123">452K</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="col-lg-5">
									<a href="#" class="_216b12">										
										<span><i class="uil uil-windsock"></i></span>Report Profile
									</a>
									<div class="rgt-145">
										<ul class="tutor_social_links">
											<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
									<ul class="_bty149">
										<li><button class="subscribe-btn btn500">Subscribe</button></li>								
										<li><button class="msg125 btn500">Message</button></li>								
									</ul>
									
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
								<div class="nav nav-tabs tab_crse" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-selected="true">About</a>
									<a class="nav-item nav-link" id="nav-courses-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-selected="false">Courses</a>
									<a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">Discussion</a>
								</div>
							</nav>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="_215b17">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="course_tab_content">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-about" role="tabpanel">
									<div class="_htg451">
										<div class="_htg452">
											<h3>About Me</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque nibh sed ligula blandit, quis faucibus lorem pellentesque. Suspendisse pulvinar dictum pellentesque. Vestibulum at sagittis lectus, sit amet aliquam turpis. In quis elit tempus, semper justo vitae, lacinia massa. Etiam sagittis quam quis fermentum lacinia. Curabitur blandit sapien et risus congue viverra. Mauris auctor risus sit amet cursus sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat sodales massa, in viverra dolor condimentum ut. In imperdiet, justo nec volutpat blandit, tellus justo tempor quam, sed pretium nibh nunc nec mauris. Mauris vel malesuada magna. Quisque iaculis molestie purus, non luctus mauris porta id. Maecenas imperdiet tincidunt mauris vestibulum vulputate. Aenean sollicitudin pretium nibh, et sagittis risus tincidunt ac. Phasellus scelerisque rhoncus massa, ac euismod massa pharetra non. Phasellus dignissim, urna in iaculis varius, turpis libero mollis velit, sit amet euismod arcu mi ac nibh. Praesent tincidunt eros at ligula pellentesque elementum. Fusce condimentum enim a tellus egestas, sit amet rutrum elit gravida. Pellentesque in porta sapien. Fusce tristique maximus ipsum et mollis. Sed at massa ac est dapibus vulputate at eu nibh.</p>
										</div>																	
									</div>							
								</div>
								<div class="tab-pane fade" id="nav-courses" role="tabpanel">
									<div class="crse_content">
										<h3>My courses (8)</h3>
										<div class="_14d25">
											<div class="row">
												<div class="col-lg-3 col-md-4">
													<div class="fcrse_1 mt-30">
														<a href="course_detail_view" class="fcrse_img">
															<img src= "<?php echo base_url(); ?>assets/images/courses/img-1.jpg" alt="">
															<div class="course-overlay">
																<div class="badge_seller">Bestseller</div>
																<div class="crse_reviews">
																	<i class="uil uil-star"></i>4.5
																</div>
																<span class="play_btn1"><i class="uil uil-play"></i></span>
																<div class="crse_timer">
																	25 hours
																</div>
															</div>
														</a>
														<div class="fcrse_content">
															<div class="eps_dots more_dropdown">
																<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																<div class="dropdown-content">
																	<span><i class="uil uil-share-alt"></i>Share</span>
																	<span><i class="uil uil-clock-three"></i>Save</span>
																	<span><i class="uil uil-ban"></i>Not Interested</span>
																	<span><i class="uil uil-windsock"></i>Report</span>
																</div>																											
															</div>
															<div class="vdtodt">
																<span class="vdt14">109k views</span>
																<span class="vdt14">15 days ago</span>
															</div>
															<a href="course_detail_view" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
															<a href="#" class="crse-cate">Web Development | Python</a>
															<div class="auth1lnkprce">
																<p class="cr1fot">By <a href="#">John Doe</a></p>
																<div class="prce142">$10</div>
															</div>
														</div>
													</div>	
												</div>
												<div class="col-lg-3 col-md-4">
													<div class="fcrse_1 mt-30">
														<a href="course_detail_view" class="fcrse_img">
															<img src= "<?php echo base_url(); ?>assets/images/courses/img-2.jpg" alt="">
															<div class="course-overlay">
																<div class="badge_seller">Bestseller</div>
																<div class="crse_reviews">
																	<i class="uil uil-star"></i>4.5
																</div>
																<span class="play_btn1"><i class="uil uil-play"></i></span>
																<div class="crse_timer">
																	28 hours
																</div>
															</div>
														</a>
														<div class="fcrse_content">
															<div class="eps_dots more_dropdown">
																<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																<div class="dropdown-content">
																	<span><i class="uil uil-share-alt"></i>Share</span>
																	<span><i class="uil uil-clock-three"></i>Save</span>
																	<span><i class="uil uil-ban"></i>Not Interested</span>
																	<span><i class="uil uil-windsock"></i>Report</span>
																</div>																									
															</div>
															<div class="vdtodt">
																<span class="vdt14">5M views</span>
																<span class="vdt14">15 days ago</span>
															</div>
															<a href="course_detail_view" class="crse14s">The Complete JavaScript Course 2020: Build Real Projects!</a>
															<a href="#" class="crse-cate">Development | JavaScript</a>
															<div class="auth1lnkprce">
																<p class="cr1fot">By <a href="#">John Doe</a></p>
																<div class="prce142">$5</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-4">
													<div class="fcrse_1 mt-30">
														<a href="course_detail_view" class="fcrse_img">
															<img src= "<?php echo base_url(); ?>assets/images/courses/img-20.jpg" alt="">
															<div class="course-overlay">
																<div class="crse_reviews">
																	<i class="uil uil-star"></i>5.0
																</div>
																<span class="play_btn1"><i class="uil uil-play"></i></span>
																<div class="crse_timer">
																	21 hours
																</div>
															</div>
														</a>
														<div class="fcrse_content">
															<div class="eps_dots more_dropdown">
																<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																<div class="dropdown-content">
																	<span><i class="uil uil-share-alt"></i>Share</span>
																	<span><i class="uil uil-clock-three"></i>Save</span>
																	<span><i class="uil uil-ban"></i>Not Interested</span>
																	<span><i class="uil uil-windsock"></i>Report</span>
																</div>																										
															</div>
															<div class="vdtodt">
																<span class="vdt14">200 Views</span>
																<span class="vdt14">4 days ago</span>
															</div>
															<a href="course_detail_view" class="crse14s">WordPress Development - Themes, Plugins &amp; Gutenberg</a>
															<a href="#" class="crse-cate">Design | Wordpress</a>
															<div class="auth1lnkprce">
																<p class="cr1fot">By <a href="#">John Doe</a></p>
																<div class="prce142">$14</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-4">
													<div class="fcrse_1 mt-30">
														<a href="course_detail_view" class="fcrse_img">
															<img src= "<?php echo base_url(); ?>assets/images/courses/img-4.jpg" alt="">
															<div class="course-overlay">
																<div class="badge_seller">Bestseller</div>
																<div class="crse_reviews">
																	<i class="uil uil-star"></i>5.0
																</div>
																<span class="play_btn1"><i class="uil uil-play"></i></span>
																<div class="crse_timer">
																	1 hour
																</div>
															</div>
														</a>
														<div class="fcrse_content">
															<div class="eps_dots more_dropdown">
																<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																<div class="dropdown-content">
																	<span><i class="uil uil-share-alt"></i>Share</span>
																	<span><i class="uil uil-clock-three"></i>Save</span>
																	<span><i class="uil uil-ban"></i>Not Interested</span>
																	<span><i class="uil uil-windsock"></i>Report</span>
																</div>																										
															</div>
															<div class="vdtodt">
																<span class="vdt14">153k views</span>
																<span class="vdt14">3 months ago</span>
															</div>
															<a href="course_detail_view" class="crse14s">The Complete Digital Marketing Course - 12 Courses in 1</a>
															<a href="#" class="crse-cate">Digital Marketing | Marketing</a>
															<div class="auth1lnkprce">
																<p class="cr1fot">By <a href="#">John Doe</a></p>
																<div class="prce142">$12</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-4">
													<div class="fcrse_1 mt-30">
														<a href="course_detail_view" class="fcrse_img">
															<img src= "<?php echo base_url(); ?>assets/images/courses/img-13.jpg" alt="">
															<div class="course-overlay">
																<span class="play_btn1"><i class="uil uil-play"></i></span>
																<div class="crse_timer">
																	30 hours
																</div>
															</div>
														</a>
														<div class="fcrse_content">
															<div class="eps_dots more_dropdown">
																<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																<div class="dropdown-content">
																	<span><i class="uil uil-share-alt"></i>Share</span>
																	<span><i class="uil uil-clock-three"></i>Save</span>
																	<span><i class="uil uil-ban"></i>Not Interested</span>
																	<span><i class="uil uil-windsock"></i>Report</span>
																</div>																										
															</div>
															<div class="vdtodt">
																<span class="vdt14">20 Views</span>
																<span class="vdt14">1 day ago</span>
															</div>
															<a href="course_detail_view" class="crse14s">The Complete Node.js Developer Course (3rd Edition)</a>
															<a href="#" class="crse-cate">Development | Node.js</a>
															<div class="auth1lnkprce">
																<p class="cr1fot">By <a href="#">John Doe</a></p>
																<div class="prce142">$3</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-4">
													<div class="fcrse_1 mt-30">
														<a href="course_detail_view" class="fcrse_img">
															<img src= "<?php echo base_url(); ?>assets/images/courses/img-7.jpg" alt="">
															<div class="course-overlay">
																<div class="badge_seller">Bestseller</div>
																<div class="crse_reviews">
																	<i class="uil uil-star"></i>5.0
																</div>
																<span class="play_btn1"><i class="uil uil-play"></i></span>
																<div class="crse_timer">
																	5.4 hours
																</div>
															</div>
														</a>
														<div class="fcrse_content">
															<div class="eps_dots more_dropdown">
																<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																<div class="dropdown-content">
																	<span><i class="uil uil-share-alt"></i>Share</span>
																	<span><i class="uil uil-clock-three"></i>Save</span>
																	<span><i class="uil uil-ban"></i>Not Interested</span>
																	<span><i class="uil uil-windsock"></i>Report</span>
																</div>																										
															</div>
															<div class="vdtodt">
																<span class="vdt14">109k views</span>
																<span class="vdt14">15 days ago</span>
															</div>
															<a href="course_detail_view" class="crse14s">WordPress for Beginners: Create a Website Step by Step</a>
															<a href="#" class="crse-cate">Design | Wordpress</a>
															<div class="auth1lnkprce">
																<p class="cr1fot">By <a href="#">John Doe</a></p>
																<div class="prce142">$18</div>
															</div>
														</div>
													</div>
												</div>												
												<div class="col-lg-3 col-md-4">
													<div class="fcrse_1 mt-30">
														<a href="course_detail_view" class="fcrse_img">
															<img src= "<?php echo base_url(); ?>assets/images/courses/img-8.jpg" alt="">
															<div class="course-overlay">
																<div class="badge_seller">Bestseller</div>
																<div class="crse_reviews">
																	<i class="uil uil-star"></i>4.0
																</div>
																<span class="play_btn1"><i class="uil uil-play"></i></span>
																<div class="crse_timer">
																	23 hours
																</div>
															</div>
														</a>
														<div class="fcrse_content">
															<div class="eps_dots more_dropdown">
																<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																<div class="dropdown-content">
																	<span><i class="uil uil-share-alt"></i>Share</span>
																	<span><i class="uil uil-clock-three"></i>Save</span>
																	<span><i class="uil uil-ban"></i>Not Interested</span>
																	<span><i class="uil uil-windsock"></i>Report</span>
																</div>																										
															</div>
															<div class="vdtodt">
																<span class="vdt14">196k views</span>
																<span class="vdt14">1 month ago</span>
															</div>
															<a href="course_detail_view" class="crse14s">CSS - The Complete Guide 2020 (incl. Flexbox, Grid &amp; Sass)</a>
															<a href="#" class="crse-cate">Design | CSS</a>
															<div class="auth1lnkprce">
																<p class="cr1fot">By <a href="#">John Doe</a></p>
																<div class="prce142">$10</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-4">
													<div class="fcrse_1 mt-30">
														<a href="course_detail_view" class="fcrse_img">
															<img src= "<?php echo base_url(); ?>assets/images/courses/img-16.jpg" alt="">
															<div class="course-overlay">
																<span class="play_btn1"><i class="uil uil-play"></i></span>
																<div class="crse_timer">
																	22 hours
																</div>
															</div>
														</a>
														<div class="fcrse_content">
															<div class="eps_dots more_dropdown">
																<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																<div class="dropdown-content">
																	<span><i class="uil uil-share-alt"></i>Share</span>
																	<span><i class="uil uil-clock-three"></i>Save</span>
																	<span><i class="uil uil-ban"></i>Not Interested</span>
																	<span><i class="uil uil-windsock"></i>Report</span>
																</div>																									
															</div>
															<div class="vdtodt">
																<span class="vdt14">11 Views</span>
																<span class="vdt14">5 Days ago</span>
															</div>
															<a href="course_detail_view" class="crse14s">Vue JS 2 - The Complete Guide (incl. Vue Router &amp; Vuex)</a>
															<a href="#" class="crse-cate">Development | Vue JS</a>
															<div class="auth1lnkprce">
																<p class="cr1fot">By <a href="#">John Doe</a></p>
																<div class="prce142">$10</div>
															</div>
														</div>
													</div>
												</div>
											</div>		
										</div>		
									</div>
								</div>
								<div class="tab-pane fade" id="nav-reviews" role="tabpanel">
									<div class="student_reviews">
										<div class="row">
											<div class="col-lg-12">
												<div class="review_right">
													<div class="review_right_heading">
														<h3>Discussions</h3>
													</div>
												</div>
												<div class="cmmnt_1526">
													<div class="cmnt_group">
														<div class="img160">
															<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">										
														</div>
														<textarea class="_cmnt001" placeholder="Add a public comment"></textarea>
													</div>
													<button class="cmnt-btn" type="submit">Comment</button>
												</div>
												<div class="review_all120">
													<div class="review_item">
														<div class="review_usr_dt">
															<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">John Doe</h4>
																<span class="time_145">2 hour ago</span>
															</div>
															<div class="eps_dots more_dropdown">
																<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																<div class="dropdown-content">
																	<span><i class='uil uil-comment-alt-edit'></i>Edit</span>
																	<span><i class='uil uil-trash-alt'></i>Delete</span>
																</div>																											
															</div>
														</div>
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt101">
															<a href="#" class="report155"><i class='uil uil-thumbs-up'></i> 10</a>
															<a href="#" class="report155"><i class='uil uil-thumbs-down'></i> 1</a>
															<a href="#" class="report155"><i class='uil uil-heart'></i></a>
															<a href="#" class="report155 ml-3">Reply</a>
														</div>
													</div>
													<div class="review_reply">
														<div class="review_item">
															<div class="review_usr_dt">
																<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-3.jpg" alt="">
																<div class="rv1458">
																	<h4 class="tutor_name1">Rock Doe</h4>
																	<span class="time_145">1 hour ago</span>
																</div>
																<div class="eps_dots more_dropdown">
																	<a href="#"><i class="uil uil-ellipsis-v"></i></a>
																	<div class="dropdown-content">
																		<span><i class='uil uil-trash-alt'></i>Delete</span>
																	</div>																											
																</div>
															</div>
															<p class="rvds10">Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
															<div class="rpt101">
																<a href="#" class="report155"><i class='uil uil-thumbs-up'></i> 4</a>
																<a href="#" class="report155"><i class='uil uil-thumbs-down'></i> 2</a>
																<a href="#" class="report155"><i class='uil uil-heart'></i></a>
																<a href="#" class="report155 ml-3">Reply</a>
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
				</div>
			</div>
		</div>
		<?php include "partials/footer.php" ?>
