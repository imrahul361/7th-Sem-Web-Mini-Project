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
	<?php
	$conn = new mysqli('localhost', 'root', '', 'cursus');
	if ($conn->error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "SELECT * FROM ADD_STREAMING";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die('Query Failed' . mysqli_error($conn));
	}
	?>
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9 col-lg-8">
						<div class="section3125">
							<h4 class="item_title">Live Streams</h4>
							<a href="live_streams" class="see150">See all</a>
							<div class="la5lo1">
								<div class="owl-carousel live_stream owl-theme">
									<?php
									while ($row = mysqli_fetch_array($result)) {
									?>
										<div class="item">
											<div class="stream_1">
												<a href="<?= base_url('Home/live_output?meeting_id=' . $row['ID']) ?>" class="stream_bg">
													<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">
													<h4><?php echo $row["Name"]; ?></h4>
													<p>live<span></span></p>
												</a>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="section3125 mt-50">
							<h4 class="item_title">Featured Courses</h4>
							<a href="#" class="see150">See all</a>
							<div class="la5lo1">
								<div class="owl-carousel featured_courses owl-theme">
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-1.jpg" alt="">
												<div class="course-overlay">
													<div class="badge_seller">Bestseller</div>
													<div class="crse_reviews">
														<i class='uil uil-star'></i>4.5
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														25 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
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
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-2.jpg" alt="">
												<div class="course-overlay">
													<div class="badge_seller">Bestseller</div>
													<div class="crse_reviews">
														<i class='uil uil-star'></i>4.5
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														28 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
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
													<p class="cr1fot">By <a href="#">Jassica William</a></p>
													<div class="prce142">$5</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-3.jpg" alt="">
												<div class="course-overlay">
													<div class="badge_seller">Bestseller</div>
													<div class="crse_reviews">
														<i class='uil uil-star'></i>4.5
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														12 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">1M views</span>
													<span class="vdt14">18 days ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">Beginning C++ Programming - From Beginner to Beyond</a>
												<a href="#" class="crse-cate">Development | C++</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">Joginder Singh</a></p>
													<div class="prce142">$13</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-4.jpg" alt="">
												<div class="course-overlay">
													<div class="badge_seller">Bestseller</div>
													<div class="crse_reviews">
														<i class='uil uil-star'></i>5.0
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														1 hour
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
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
													<p class="cr1fot">By <a href="#">Poonam Verma</a></p>
													<div class="prce142">$12</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-5.jpg" alt="">
												<div class="course-overlay">
													<div class="badge_seller">Bestseller</div>
													<div class="crse_reviews">
														<i class='uil uil-star'></i>4.5
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														1.5 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">53k views</span>
													<span class="vdt14">14 days ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">Microsoft Excel - Excel from Beginner to Advanced</a>
												<a href="#" class="crse-cate">Office Productivity | Excel</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">Rock William</a></p>
													<div class="prce142">$6</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-6.jpg" alt="">
												<div class="course-overlay">
													<div class="badge_seller">Bestseller</div>
													<div class="crse_reviews">
														<i class='uil uil-star'></i>5.0
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														36 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">253k views</span>
													<span class="vdt14">10 days ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">Angular 8 - The Complete Guide (2020 Edition)</a>
												<a href="#" class="crse-cate">Development | Angular</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">John Doe</a></p>
													<div class="prce142">$15</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-7.jpg" alt="">
												<div class="course-overlay">
													<div class="badge_seller">Bestseller</div>
													<div class="crse_reviews">
														<i class='uil uil-star'></i>5.0
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														5.4 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
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
													<p class="cr1fot">By <a href="#">Sabnam SIngh</a></p>
													<div class="prce142">$18</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-8.jpg" alt="">
												<div class="course-overlay">
													<div class="badge_seller">Bestseller</div>
													<div class="crse_reviews">
														<i class='uil uil-star'></i>4.0
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														23 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">196k views</span>
													<span class="vdt14">1 month ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">CSS - The Complete Guide 2020 (incl. Flexbox, Grid & Sass)</a>
												<a href="#" class="crse-cate">Design | CSS</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">Jashanpreet Singh</a></p>
													<div class="prce142">$10</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section3125 mt-30">
							<h4 class="item_title">Newest Courses</h4>
							<a href="#" class="see150">See all</a>
							<div class="la5lo1">
								<div class="owl-carousel featured_courses owl-theme">
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-14.jpg" alt="">
												<div class="course-overlay">
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														12 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">15 views</span>
													<span class="vdt14">10 min ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">Build Responsive Real World Websites with HTML5 and CSS3</a>
												<a href="#" class="crse-cate">Development | CSS</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">John Doe</a></p>
													<div class="prce142">$4</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-11.jpg" alt="">
												<div class="course-overlay">
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														28 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">5 views</span>
													<span class="vdt14">15 Min ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">The Complete JavaScript Course 2020: Build Real Projects!</a>
												<a href="#" class="crse-cate">Development | JavaScript</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">Jassica William</a></p>
													<div class="prce142">$5</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-18.jpg" alt="">
												<div class="course-overlay">
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														15 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">25 views</span>
													<span class="vdt14">2 Hour ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">The Complete Front-End Web Development Course!</a>
												<a href="#" class="crse-cate">Development | Web Development</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">Joginder Singh</a></p>
													<div class="prce142">$9</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-19.jpg" alt="">
												<div class="course-overlay">
													<div class="crse_reviews">
														<i class='uil uil-star'></i>5.0
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														1 hour
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">15 views</span>
													<span class="vdt14">6 hours ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">Ethical Hacking - Most Advanced Level Penetration Testing</a>
												<a href="#" class="crse-cate">IT &amp; Software | Ethical Hacking</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">Poonam Verma</a></p>
													<div class="prce142">$10</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="#" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-12.jpg" alt="">
												<div class="course-overlay">
													<div class="crse_reviews">
														<i class='uil uil-star'></i>3.5
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														28 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">45 views</span>
													<span class="vdt14">20 hours ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">Advanced CSS and Sass: Flexbox, Grid, Animations and More!</a>
												<a href="#" class="crse-cate">Development | Sass</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">Rock William</a></p>
													<div class="prce142">$6</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="#" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-13.jpg" alt="">
												<div class="course-overlay">
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														30 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
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
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="#" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-20.jpg" alt="">
												<div class="course-overlay">
													<div class="crse_reviews">
														<i class='uil uil-star'></i>5.0
													</div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														21 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
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
													<p class="cr1fot">By <a href="#">Joy Dua</a></p>
													<div class="prce142">$14</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view" class="fcrse_img">
												<img src="<?php echo base_url(); ?>assets/images/courses/img-16.jpg" alt="">
												<div class="course-overlay">
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														22 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-clock-three"></i>Save</span>
														<span><i class='uil uil-ban'></i>Not Interested</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													</div>
												</div>
												<div class="vdtodt">
													<span class="vdt14">11 Views</span>
													<span class="vdt14">5 Days ago</span>
												</div>
												<a href="course_detail_view" class="crse14s">Vue JS 2 - The Complete Guide (incl. Vue Router & Vuex)</a>
												<a href="#" class="crse-cate">Development | Vue JS</a>
												<div class="auth1lnkprce">
													<p class="cr1fot">By <a href="#">Manreet Kaur</a></p>
													<div class="prce142">$10</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section3126">
							<div class="row">
								<div class="col-xl-6 col-lg-12 col-md-6">
									<div class="value_props">
										<div class="value_icon">
											<i class='uil uil-history'></i>
										</div>
										<div class="value_content">
											<h4>Go at your own pace</h4>
											<p>Enjoy lifetime access to courses on Edututs+'s website</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-12 col-md-6">
									<div class="value_props">
										<div class="value_icon">
											<i class='uil uil-user-check'></i>
										</div>
										<div class="value_content">
											<h4>Learn from industry experts</h4>
											<p>Select from top instructors around the world</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-12 col-md-6">
									<div class="value_props">
										<div class="value_icon">
											<i class='uil uil-play-circle'></i>
										</div>
										<div class="value_content">
											<h4>Find video courses on almost any topic</h4>
											<p>Build your library for your career and personal growth</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-12 col-md-6">
									<div class="value_props">
										<div class="value_icon">
											<i class='uil uil-presentation-play'></i>
										</div>
										<div class="value_content">
											<h4>100,000 online courses</h4>
											<p>Explore a variety of fresh topics</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section3125 mt-50">
							<h4 class="item_title">Popular Instructors</h4>
							<a href="all_instructor" class="see150">See all</a>
							<div class="la5lo1">
								<div class="owl-carousel top_instrutors owl-theme">
									<div class="item">
										<div class="fcrse_1 mb-20">
											<div class="tutor_img">
												<a href="instructor_profile_view"><img src="<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt=""></a>
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
									<div class="item">
										<div class="fcrse_1 mb-20">
											<div class="tutor_img">
												<a href="instructor_profile_view"><img src="<?php echo base_url(); ?>assets/images/left-imgs/img-2.jpg" alt=""></a>
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
									<div class="item">
										<div class="fcrse_1 mb-20">
											<div class="tutor_img">
												<a href="instructor_profile_view"><img src="<?php echo base_url(); ?>assets/images/left-imgs/img-3.jpg" alt=""></a>
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
									<div class="item">
										<div class="fcrse_1 mb-20">
											<div class="tutor_img">
												<a href="instructor_profile_view"><img src="<?php echo base_url(); ?>assets/images/left-imgs/img-4.jpg" alt=""></a>
											</div>
											<div class="tutor_content_dt">
												<div class="tutor150">
													<a href="instructor_profile_view" class="tutor_name">Farhat Amin</a>
													<div class="mef78" title="Verify">
														<i class="uil uil-check-circle"></i>
													</div>
												</div>
												<div class="tutor_cate">Cookery Coach</div>
												<ul class="tutor_social_links">
													<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
													<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
													<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
												</ul>
												<div class="tut1250">
													<span class="vdt15">1.5K Students</span>
													<span class="vdt15">9 Courses</span>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<div class="tutor_img">
												<a href="instructor_profile_view"><img src="<?php echo base_url(); ?>assets/images/left-imgs/img-5.jpg" alt=""></a>
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
									<div class="item">
										<div class="fcrse_1 mb-20">
											<div class="tutor_img">
												<a href="instructor_profile_view"><img src="<?php echo base_url(); ?>assets/images/left-imgs/img-7.jpg" alt=""></a>
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
									<div class="item">
										<div class="fcrse_1 mb-20">
											<div class="tutor_img">
												<a href="instructor_profile_view"><img src="<?php echo base_url(); ?>assets/images/left-imgs/img-8.jpg" alt=""></a>
											</div>
											<div class="tutor_content_dt">
												<div class="tutor150">
													<a href="instructor_profile_view" class="tutor_name">Quinton Batchelor</a>
													<div class="mef78" title="Verify">
														<i class="uil uil-check-circle"></i>
													</div>
												</div>
												<div class="tutor_cate">Photographer & Instructor</div>
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
									<div class="item">
										<div class="fcrse_1 mb-20">
											<div class="tutor_img">
												<a href="instructor_profile_view"><img src="<?php echo base_url(); ?>assets/images/left-imgs/img-6.jpg" alt=""></a>
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
													<span class="vdt15">615K Students</span>
													<span class="vdt15">12 Courses</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4">
						<div class="right_side">
							<div class="fcrse_2 mb-30">
								<div class="tutor_img">
									<a href="my_instructor_profile_view"><img src="<?php echo base_url(); ?>assets/images/left-imgs/img-10.jpg" alt=""></a>
								</div>
								<div class="tutor_content_dt">
									<div class="tutor150">
										<a href="my_instructor_profile_view" class="tutor_name">Joginder Singh</a>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<div class="tutor_cate">Web Developer, Designer, and Teacher</div>
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
									<a href="my_instructor_profile_view" class="prfle12link">Go To Profile</a>
								</div>
							</div>
							<div class="fcrse_3">
								<div class="cater_ttle">
									<h4>Live Streaming</h4>
								</div>
								<div class="live_text">
									<div class="live_icon"><i class="uil uil-kayak"></i></div>
									<div class="live-content">
										<p>Set up your channel and stream live to your students</p>
										<button class="live_link" onclick="window.location.href = 'add_streaming';">Get Started</button>
										<span class="livinfo">Info : This feature only for 'Instructors'.</span>
									</div>
								</div>
							</div>
							<div class="get1452">
								<h4>Get personalized recommendations</h4>
								<p>Answer a few questions for your top picks</p>
								<button class="Get_btn" onclick="window.location.href = '#';">Get Started</button>
							</div>
							<div class="fcrse_3">
								<div class="cater_ttle">
									<h4>Top Categories</h4>
								</div>
								<ul class="allcate15">
									<li><a href="#" class="ct_item"><i class='uil uil-arrow'></i>Development</a></li>
									<li><a href="#" class="ct_item"><i class='uil uil-graph-bar'></i>Business</a></li>
									<li><a href="#" class="ct_item"><i class='uil uil-monitor'></i>IT and Software</a></li>
									<li><a href="#" class="ct_item"><i class='uil uil-ruler'></i>Design</a></li>
									<li><a href="#" class="ct_item"><i class='uil uil-chart-line'></i>Marketing</a></li>
									<li><a href="#" class="ct_item"><i class='uil uil-book-open'></i>Personal Development</a></li>
									<li><a href="#" class="ct_item"><i class='uil uil-camera'></i>Photography</a></li>
									<li><a href="#" class="ct_item"><i class='uil uil-music'></i>Music</a></li>
								</ul>
							</div>
							<div class="strttech120">
								<h4>Become an Instructor</h4>
								<p>Top instructors from around the world teach millions of students on Cursus. We provide the tools and skills to teach what you love.</p>
								<button class="Get_btn" onclick="window.location.href = '#';">Start Teaching</button>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12">
						<div class="section3125 mt-30">
							<h4 class="item_title">What Our Student Have Today</h4>
							<div class="la5lo1">
								<div class="owl-carousel Student_says owl-theme">
									<div class="item">
										<div class="fcrse_4 mb-20">
											<div class="say_content">
												<p>"Donec ac ex eu arcu euismod feugiat. In venenatis bibendum nisi, in placerat eros ultricies vitae. Praesent pellentesque blandit scelerisque. Suspendisse potenti."</p>
											</div>
											<div class="st_group">
												<div class="stud_img">
													<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-4.jpg" alt="">
												</div>
												<h4>Jassica William</h4>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_4 mb-20">
											<div class="say_content">
												<p>"Cras id enim lectus. Fusce at arcu tincidunt, iaculis libero quis, vulputate mauris. Morbi facilisis vitae ligula id aliquam. Nunc consectetur malesuada bibendum."</p>
											</div>
											<div class="st_group">
												<div class="stud_img">
													<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">
												</div>
												<h4>Rock Smith</h4>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_4 mb-20">
											<div class="say_content">
												<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos eros ac, sagittis orci."</p>
											</div>
											<div class="st_group">
												<div class="stud_img">
													<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-7.jpg" alt="">
												</div>
												<h4>Luoci Marchant</h4>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_4 mb-20">
											<div class="say_content">
												<p>"Nulla bibendum lectus pharetra, tempus eros ac, sagittis orci. Suspendisse posuere dolor neque, at finibus mauris lobortis in. Pellentesque vitae laoreet tortor."</p>
											</div>
											<div class="st_group">
												<div class="stud_img">
													<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-6.jpg" alt="">
												</div>
												<h4>Poonam Sharma</h4>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_4 mb-20">
											<div class="say_content">
												<p>"Curabitur placerat justo ac mauris condimentum ultricies. In magna tellus, eleifend et volutpat id, sagittis vitae est. Pellentesque vitae laoreet tortor."</p>
											</div>
											<div class="st_group">
												<div class="stud_img">
													<img src="<?php echo base_url(); ?>assets/images/left-imgs/img-3.jpg" alt="">
												</div>
												<h4>Davinder Singh</h4>
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