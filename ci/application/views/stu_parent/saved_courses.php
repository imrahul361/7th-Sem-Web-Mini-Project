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
					<div class="col-lg-3 col-md-4 ">
						<div class="section3125 hstry142">
							<div class="grp_titles pt-0">
								<div class="ht_title">Saved Courses</div>
								<a href="#" class="ht_clr">Remove All</a>
							</div>
							<div class="tb_145">
								<div class="wtch125">
									<span class="vdt14">4 Courses</span>
								</div>
								<a href="#" class="rmv-btn"><i class='uil uil-trash-alt'></i>Remove Saved Courses</a>
							</div>						
						</div>							
					</div>					
					<div class="col-md-9">
						<div class="_14d25 mb-20">						
							<div class="row">
								<div class="col-md-12">
									<h4 class="mhs_title">Saved Courses</h4>
									<div class="fcrse_1">
										<a href="course_detail_view" class="hf_img">
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
										<div class="hs_content">
											<div class="eps_dots eps_dots10 more_dropdown">
												<a href="#"><i class="uil uil-ellipsis-v"></i></a>
												<div class="dropdown-content">
													<span><i class='uil uil-times'></i>Remove</span>															
												</div>																											
											</div>
											<div class="vdtodt">
												<span class="vdt14">109k views</span>
												<span class="vdt14">15 days ago</span>
											</div>
											<a href="course_detail_view" class="crse14s title900">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
											<a href="#" class="crse-cate">Web Development | Python</a>
											<div class="auth1lnkprce">
												<p class="cr1fot">By <a href="#">John Doe</a></p>
												<div class="prce142">$10</div>
											</div>
										</div>
									</div>
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="hf_img">
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
										<div class="hs_content">
											<div class="eps_dots eps_dots10 more_dropdown">
												<a href="#"><i class="uil uil-ellipsis-v"></i></a>
												<div class="dropdown-content">
													<span><i class='uil uil-times'></i>Remove</span>															
												</div>																											
											</div>
											<div class="vdtodt">
												<span class="vdt14">5M views</span>
												<span class="vdt14">15 days ago</span>
											</div>
											<a href="course_detail_view" class="crse14s title900">The Complete JavaScript Course 2020: Build Real Projects!</a>
											<a href="#" class="crse-cate">Development | JavaScript</a>
											<div class="auth1lnkprce">
												<p class="cr1fot">By <a href="#">Jassica William</a></p>
												<div class="prce142">$5</div>
											</div>
										</div>
									</div>
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="hf_img">
											<img src= "<?php echo base_url(); ?>assets/images/courses/img-3.jpg" alt="">
											<div class="course-overlay">
												<div class="badge_seller">Bestseller</div>
												<div class="crse_reviews">
													<i class="uil uil-star"></i>4.5
												</div>
												<span class="play_btn1"><i class="uil uil-play"></i></span>
												<div class="crse_timer">
													12 hours
												</div>
											</div>
										</a>
										<div class="hs_content">
											<div class="eps_dots eps_dots10 more_dropdown">
												<a href="#"><i class="uil uil-ellipsis-v"></i></a>
												<div class="dropdown-content">
													<span><i class='uil uil-times'></i>Remove</span>															
												</div>																											
											</div>
											<div class="vdtodt">
												<span class="vdt14">1M views</span>
												<span class="vdt14">18 days ago</span>
											</div>
											<a href="course_detail_view" class="crse14s title900">Beginning C++ Programming - From Beginner to Beyond</a>
											<a href="#" class="crse-cate">Development | C++</a>
											<div class="auth1lnkprce">
												<p class="cr1fot">By <a href="#">Joginder Singh</a></p>
												<div class="prce142">$13</div>
											</div>
										</div>
									</div>
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="hf_img">
											<img src= "<?php echo base_url(); ?>assets/images/courses/img-4.jpg" alt="">
											<div class="course-overlay">
												<div class="badge_seller">Bestseller</div>
												<div class="crse_reviews">
													<i class="uil uil-star"></i>5.0
												</div>
												<span class="play_btn1"><i class="uil uil-play"></i></span>
												<div class="crse_timer">
													1 hours
												</div>
											</div>
										</a>
										<div class="hs_content">
											<div class="eps_dots eps_dots10 more_dropdown">
												<a href="#"><i class="uil uil-ellipsis-v"></i></a>
												<div class="dropdown-content">
													<span><i class='uil uil-times'></i>Remove</span>															
												</div>																											
											</div>
											<div class="vdtodt">
												<span class="vdt14">153k views</span>
												<span class="vdt14">3 months ago</span>
											</div>
											<a href="course_detail_view" class="crse14s title900">The Complete Digital Marketing Course - 12 Courses in 1</a>
											<a href="#" class="crse-cate">Digital Marketing | Marketing</a>
											<div class="auth1lnkprce">
												<p class="cr1fot">By <a href="#">Poonam Verma</a></p>
												<div class="prce142">$12</div>
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