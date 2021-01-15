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
					<div class="col-xl-12 col-lg-8">
						<div class="section3125">
							<div class="explore_search">
								<div class="ui search focus">
									<div class="ui left icon input swdh11">
										<input class="prompt srch_explore" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
										<i class="uil uil-search-alt icon icon2"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="section3125 mb-15 mt-50">
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
					</div>
					<div class="col-md-12">
						<div class="_14d25">
							<div class="row">
								<div class="col-lg-3 col-md-4">
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="fcrse_img">
											<img src="<?php echo base_url(); ?>assets/images/courses/img-1.jpg" alt="">
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
								<div class="col-lg-3 col-md-4">
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="fcrse_img">
											<img src="<?php echo base_url(); ?>assets/images/courses/img-2.jpg" alt="">
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
								<div class="col-lg-3 col-md-4">
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="fcrse_img">
											<img src="<?php echo base_url(); ?>assets/images/courses/img-20.jpg" alt="">
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
								<div class="col-lg-3 col-md-4">
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="fcrse_img">
											<img src="<?php echo base_url(); ?>assets/images/courses/img-4.jpg" alt="">
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
								<div class="col-lg-3 col-md-4">
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="fcrse_img">
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
												<a href="#"><i class="uil uil-ellipsis-v"></i></a>
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
								<div class="col-lg-3 col-md-4">
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="fcrse_img">
											<img src="<?php echo base_url(); ?>assets/images/courses/img-7.jpg" alt="">
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
								<div class="col-lg-3 col-md-4">
									<div class="fcrse_1 mt-30">
										<a href="course_detail_view" class="fcrse_img">
											<img src="<?php echo base_url(); ?>assets/images/courses/img-8.jpg" alt="">
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
											<a href="course_detail_view" class="crse14s">CSS - The Complete Guide 2020 (incl. Flexbox, Grid &amp; Sass)</a>
											<a href="#" class="crse-cate">Design | CSS</a>
											<div class="auth1lnkprce">
												<p class="cr1fot">By <a href="#">Jashanpreet Singh</a></p>
												<div class="prce142">$10</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4">
									<div class="fcrse_1 mt-30">
										<a href="#" class="fcrse_img">
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
												<a href="#"><i class="uil uil-ellipsis-v"></i></a>
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
											<a href="course_detail_view" class="crse14s">Vue JS 2 - The Complete Guide (incl. Vue Router &amp; Vuex)</a>
											<a href="#" class="crse-cate">Development | Vue JS</a>
											<div class="auth1lnkprce">
												<p class="cr1fot">By <a href="#">Manreet Kaur</a></p>
												<div class="prce142">$10</div>
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