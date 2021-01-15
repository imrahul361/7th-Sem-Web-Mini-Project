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
						<h2 class="st_title"><i class="uil uil-analysis"></i> Analyics</h2>
					</div>					
				</div>
				<div class="row">
					<div class="col-xl-4 col-sm-6">
						<div class="card card-mini analysis_card">
							<div class="card-body">
								<h2 class="mb-2">839</h2>
								<p>Subscribers</p>
								<div class="chartjs-wrapper">
									<canvas id="barChart"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-sm-6">
						<div class="card card-mini analysis_card">
							<div class="card-body">
								<h2 class="mb-1">950</h2>
								<p>Weekly Visitors</p>
								<div class="chartjs-wrapper">
									<canvas id="dual-line"></canvas>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-4 col-sm-6">
						<div class="card card-mini analysis_card">
							<div class="card-body">
								<h2 class="mb-1">20</h2>
								<p>Weekly Sales</p>
								<div class="chartjs-wrapper">
									<canvas id="line"></canvas>
								</div>
							</div>
						</div>
                    </div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-md-12">
						<!-- Sales Graph -->
						<div class="card card-default analysis_card p-0" data-scroll-height="450">
							<div class="card-header">
								<h2>Sales Of The Year</h2>
							</div>
							<div class="card-body p-5" style="height: 450px;">
								<canvas id="linechart" class="chartjs"></canvas>
							</div>
						</div>
					</div>
					<div class="col-md-12">
                        <!-- User activity statistics -->
						<div class="card card-default analysis_card p-0" id="user-activity">
							<div class="row no-gutters">
								<div class="col-xl-8">
									<div class="border-right">
										<div class="card-header justify-content-between">
											<h2 class="m-0">User Activity</h2>
											<div class="date-range-report ">
												<span></span>
											</div>
										</div>
										<ul class="nav nav-tabs justify-content-between justify-content-xl-start nav-fill" role="tablist">
											<li class="nav-item">
												<a class="nav-link active pb-md-0" data-toggle="tab" href="#user" role="tab" aria-selected="true">
													<span class="type-name">User</span>
													<h4 class="views_title d-inline-block mt-2 mr-2 mb-3">5248</h4>
													<span class="text-success1">5%
														<i class="uil uil-top-arrow-from-top"></i>
													</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link pb-md-0" data-toggle="tab" href="#session" role="tab" aria-selected="false">
													<span class="type-name">Sessions</span>
													<h4 class="views_title d-inline-block mt-2 mr-2 mb-3">638</h4>
													<span class="text-success">20%
														<i class="uil uil-top-arrow-from-top"></i>
													</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link pb-md-0" data-toggle="tab" href="#bounce" role="tab" aria-selected="false">
													<span class="type-name">Bounce Rate</span>
													<h4 class="views_title d-inline-block mt-2 mr-2 mb-3">36.9%</h4>
													<span class="text-danger">7%
														<i class="uil uil-arrow-to-bottom"></i>
													</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link pb-md-0" data-toggle="tab" href="#session-duration" role="tab" aria-selected="false">
													<span class="type-name">Session Duration</span>
													<h4 class="views_title d-inline-block mt-2 mr-2 mb-3">4m 49s</h4>
													<span class="text-success">15%
														<i class="uil uil-top-arrow-from-top"></i>
													</span>
												</a>
											</li>
										</ul>
										<div class="card-body">
											<div class="tab-content" id="myTabContent">
												<div class="tab-pane fade show active" id="user" role="tabpanel">
													<canvas id="activity" class="chartjs p-4" style="height: 350px;"></canvas>
												</div>
											</div>
										</div>
										<div class="card-footer d-flex flex-wrap bg-white border-top">
											<a href="#" class="text-uppercase py-3 ovrvew-1">Audience Overview</a>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<div data-scroll-height="350">	
										<div class="card-header justify-content-between">
											<h2 class="m-0">Current Users</h2>
										</div>
										<div class="curntusr145">
											<p class="my-2">Ave Page views per minute</p>
											<h4>09</h4>
										</div>
										<div class="border-bottom"></div>
										<div class="card-body p-5">
											<canvas id="currentUser" class="chartjs" style="height:300px"></canvas>
										</div>
										<div class="card-footer d-flex flex-wrap bg-white">
											<a href="#" class="text-uppercase py-3 ovrvew-1">Audience Overview</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="table-responsive mt-30">
							<table class="table ucp-table">
								<thead class="thead-s">
									<tr>
										<th class="text-center" scope="col">Item No.</th>
										<th class="cell-ta" scope="col">Thumbnail</th>
										<th class="cell-ta" scope="col">Title</th>
										<th class="text-center" scope="col">Purchases</th>
										<th class="text-center" scope="col">Comments</th>
										<th class="text-center" scope="col">Views</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">001</td>
										<td class="cell-ta"><div class="thumb_img"><img src= "<?php echo base_url(); ?>assets/images/courses/img-2.jpg" alt=""></div></td>
										<td class="cell-ta">Course Title Here</td>
										<td class="text-center">70</td>
										<td class="text-center">1150</td>
										<td class="text-center">1850</td>
									</tr>
									<tr>
										<td class="text-center">002</td>
										<td class="cell-ta"><div class="thumb_img"><img src= "<?php echo base_url(); ?>assets/images/courses/img-3.jpg" alt=""></div></td>
										<td class="cell-ta">Course Title Here</td>
										<td class="text-center">86</td>
										<td class="text-center">2150</td>
										<td class="text-center">6850</td>
									</tr>
								</tbody>
							</table>
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
