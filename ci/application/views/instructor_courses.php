﻿<?php include "partials/header.php" ?>
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
						<h2 class="st_title"><i class="uil uil-book-alt"></i>Courses</h2>
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
					<div class="col-md-12">
						<div class="my_courses_tabs">
							<ul class="nav nav-pills my_crse_nav" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-my-courses-tab" data-toggle="pill" href="#pills-my-courses" role="tab" aria-controls="pills-my-courses" aria-selected="true"><i class="uil uil-book-alt"></i>My Courses</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-my-purchases-tab" data-toggle="pill" href="#pills-my-purchases" role="tab" aria-controls="pills-my-purchases" aria-selected="false"><i class="uil uil-download-alt"></i>My Purchases</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-upcoming-courses-tab" data-toggle="pill" href="#pills-upcoming-courses" role="tab" aria-controls="pills-upcoming-courses" aria-selected="false"><i class="uil uil-upload-alt"></i>Upcoming Courses</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-discount-tab" data-toggle="pill" href="#pills-discount" role="tab" aria-controls="pills-discount" aria-selected="false"><i class="uil uil-tag-alt"></i>Discounts</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-promotions-tab" data-toggle="pill" href="#pills-promotions" role="tab" aria-controls="pills-promotions" aria-selected="false"><i class="uil uil-megaphone"></i>Promotions</a>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">
									<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">Item No.</th>
													<th>Title</th>
													<th class="text-center" scope="col">Publish Date</th>
													<th class="text-center" scope="col">Sales</th>
													<th class="text-center" scope="col">Parts</th>
													<th class="text-center" scope="col">Category</th>
													<th class="text-center" scope="col">Status</th>
													<th class="text-center" scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">IT-001</td>
													<td>Course Title Here</td>
													<td class="text-center">06 April 2020 | 08:31</td>
													<td class="text-center">15</td>
													<td class="text-center">5</td>
													<td class="text-center"><a href="#">Web Development</a></td>
													<td class="text-center"><b class="course_active">Active</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">IT-002</td>
													<td>Course Title Here</td>
													<td class="text-center">05 April 2020 | 05:15</td>
													<td class="text-center">30</td>
													<td class="text-center">3</td>
													<td class="text-center"><a href="#">Graphic Design</a></td>
													<td class="text-center"><b class="course_active">Active</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">IT-003</td>
													<td>Course Title</td>
													<td class="text-center">03 April 2020 | 01:30</td>
													<td class="text-center">14</td>
													<td class="text-center">5</td>
													<td class="text-center"><a href="#">Bootstrap</a></td>
													<td class="text-center"><b class="course_active">Active</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">IT-004</td>
													<td>Course Title Here</td>
													<td class="text-center">02 April 2020 | 05:15</td>
													<td class="text-center">110</td>
													<td class="text-center">9</td>
													<td class="text-center"><a href="#">Game Development</a></td>
													<td class="text-center"><b class="course_active">Active</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">IT-002</td>
													<td>Course Title Here</td>
													<td class="text-center">28 March 2020 | 05:15</td>
													<td class="text-center">185</td>
													<td class="text-center">10</td>
													<td class="text-center"><a href="#">C++</a></td>
													<td class="text-center"><b class="course_active">Active</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-my-purchases" role="tabpanel">
									<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">Item No.</th>
													<th class="cell-ta" scope="col">Title</th>
													<th class="cell-ta" scope="col">Vendor</th>
													<th class="cell-ta" scope="col">Category</th>
													<th class="text-center" scope="col">Delivery Type</th>
													<th class="text-center" scope="col">Price</th>
													<th class="text-center" scope="col">Purchase Date</th>
													<th class="text-center" scope="col">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">001</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="cell-ta"><a href="#">Zoena Singh</a></td>
													<td class="cell-ta"><a href="#">Web Development</a></td>
													<td class="text-center"><b class="course_active">Download</b></td>
													<td class="text-center">$15</td>
													<td class="text-center">25 March 2020</td>
													<td class="text-center">
														<a href="#" title="Download" class="gray-s"><i class="uil uil-download-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
														<a href="#" title="Print" class="gray-s"><i class="uil uil-print"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">002</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="cell-ta"><a href="#">Rock William</a></td>
													<td class="cell-ta"><a href="#">C++</a></td>
													<td class="text-center"><b class="course_active">Download</b></td>
													<td class="text-center">$20</td>
													<td class="text-center">20 March 2020</td>
													<td class="text-center">
														<a href="#" title="Download" class="gray-s"><i class="uil uil-download-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
														<a href="#" title="Print" class="gray-s"><i class="uil uil-print"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-upcoming-courses" role="tabpanel">
									<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">Item No.</th>
													<th class="cell-ta">Title</th>
													<th class="text-center" scope="col">Thumbnail</th>
													<th class="text-center">Category</th>
													<th class="text-center">Price</th>
													<th class="text-center">Date</th>
													<th class="text-center" scope="col">Status</th>
													<th class="text-center" scope="col">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">01</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="text-center"><a href="#">View</a></td>
													<td class="text-center"><a href="#">Web Development</a></td>
													<td class="text-center">$15</td>
													<td class="text-center">9 April 2020</td>
													<td class="text-center"><b class="course_active">Pending</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">02</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="text-center"><a href="#">View</a></td>
													<td class="text-center"><a href="#">Graphic Design</a></td>
													<td class="text-center">$12</td>
													<td class="text-center">8 April 2020</td>
													<td class="text-center"><b class="course_active">Pending</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">03</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="text-center"><a href="#">View</a></td>
													<td class="text-center"><a href="#">Photography</a></td>
													<td class="text-center">$6</td>
													<td class="text-center">7 April 2020</td>
													<td class="text-center"><b class="course_active">Pending</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-discount" role="tabpanel">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<div class="panel-title adcrse1250">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
														New Discount
													</a>
												</div>
											</div>
											<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
												<div class="panel-body adcrse_body">
													<div class="row">
														<div class="col-lg-8">
															<div class="discount_form">
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<div class="mt-20 lbel25">
																			<label>Course*</label>
																		</div>
																		<select class="ui hj145 dropdown cntry152 prompt srch_explore">
																			<option value="">Select Course</option>
																			<option value="1">Course Title Here</option>
																			<option value="2">Course Title Here</option>
																			<option value="3">Course Title Here</option>
																			<option value="4">Course Title Here</option>
																			<option value="5">Course Title Here</option>
																			<option value="6">Course Title Here</option>
																			<option value="7">Course Title Here</option>
																		</select>
																	</div>
																	<div class="col-lg-6 col-md-6">
																		<div class="ui search focus mt-20 lbel25">
																			<label>Discount Amount</label>
																			<div class="ui left icon input swdh19">
																				<input class="prompt srch_explore" type="number" name="off" value="" required="" min="1" max="99" placeholder="Percent (eg. 20 for 20%)">
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 col-md-6">
																		<div class="ui search focus mt-20 lbel25">
																			<label>Start Date</label>
																			<div class="ui left icon input swdh19">
																				<input class="prompt srch_explore datepicker-here" type="text" data-language="en" placeholder="dd/mm/yyyy">
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 col-md-6">
																		<div class="ui search focus mt-20 lbel25">
																			<label>End Date</label>
																			<div class="ui left icon input swdh19">
																				<input class="prompt srch_explore datepicker-here" type="text" data-language="en" placeholder="dd/mm/yyyy">
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 col-md-6">
																		<button class="discount_btn" type="submit">Save Changes</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">Item No.</th>
													<th class="cell-ta">Course</th>
													<th class="text-center" scope="col">Start Date</th>
													<th class="text-center" scope="col">End Date</th>
													<th class="text-center" scope="col">Discount</th>
													<th class="text-center" scope="col">Status</th>
													<th class="text-center" scope="col">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">01</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="text-center">02 November 2019</td>
													<td class="text-center">19 November 2019</td>
													<td class="text-center">20%</td>
													<td class="text-center"><b class="course_active">Active</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-promotions" role="tabpanel" aria-labelledby="pills-promotions-tab">
									<div class="promotion_tab mb-10">
										<img src= "<?php echo base_url(); ?>assets/images/dashboard/promotion.svg" alt="">
										<h4>Baby promotion plan is activated!</h4>
										<p>By activating promotion plans you can improve course views and sales.</p>
										<button class="plan_link_btn" onclick="window.location.href = '#';">Change New Plan</button>
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
