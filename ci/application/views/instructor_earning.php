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
						<h2 class="st_title"><i class="uil uil-dollar-sign"></i> Earning</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-md-4">						
						<div class="earning_steps">						
							<p>Sales earnings this month (April), after edututs+ fees, & before taxes:</p>
							<h2>$1146.78</h2>
						</div>
					</div>
					<div class="col-md-4">						
						<div class="earning_steps">						
							<p>Your balance:</p>
							<h2>$1146.78</h2>
						</div>
					</div>
					<div class="col-md-4">						
						<div class="earning_steps">						
							<p>Total value of your sales, before taxes:</p>
							<h2>$95895.54</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="top_countries mt-50">
							<div class="top_countries_title">
								<h2>Your Top Countries</h2>
							</div>
							<ul class="country_list">
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>United States</span>
										</div>
										<div class="country_item_right">
											<span>$48</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Bulgaria</span>
										</div>
										<div class="country_item_right">
											<span>$35</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Dominica</span>
										</div>
										<div class="country_item_right">
											<span>$25</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Italy</span>
										</div>
										<div class="country_item_right">
											<span>$18</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Korea, Republic of</span>
										</div>
										<div class="country_item_right">
											<span>$18</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Malaysia</span>
										</div>
										<div class="country_item_right">
											<span>$10</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Netherlands</span>
										</div>
										<div class="country_item_right">
											<span>$8</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Thailand</span>
										</div>
										<div class="country_item_right">
											<span>$5</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="date_selector">
							<div class="ui selection dropdown skills-search vchrt-dropdown">
								<input name="date" type="hidden" value="default">
								<i class="dropdown icon d-icon"></i>
								<div class="text">Item Sales</div>
								<div class="menu">
									<div class="item" data-value="0">Total Sales</div>
									<div class="item" data-value="1">2020</div>
								</div>
							</div>
							<div class="date_list152">
								<a href="#">All Time</a> /
								<a href="#">2020</a> /
								<a href="#">April</a>
							</div>
						</div>
						<div class="table-responsive mt-30">
							<table class="table ucp-table earning__table">
								<thead class="thead-s">
									<tr>
										<th scope="col">Date</th>
										<th scope="col">Item Sales Count</th>
										<th scope="col">Earning</th>									
									</tr>
								</thead>
								<tbody>
									<tr>										
										<td>1, Wednesday</td>	
										<td>3</td>	
										<td>$120.50</td>	
									</tr>
									<tr>										
										<td>2, Thursday</td>	
										<td>2</td>	
										<td>$84.00</td>	
									</tr>
									<tr>										
										<td>4, Saturday</td>	
										<td>4</td>	
										<td>$150.50</td>	
									</tr>
									<tr>										
										<td>5, Sunday</td>	
										<td>3</td>	
										<td>$102.24</td>	
									</tr>
									<tr>										
										<td>6, Monday</td>	
										<td>2</td>	
										<td>$80.50</td>	
									</tr>
									<tr>										
										<td>7, Tuesday</td>	
										<td>3</td>	
										<td>$70.50</td>	
									</tr>
									<tr>										
										<td>8, Wednesday</td>	
										<td>5</td>	
										<td>$130.00</td>	
									</tr>
									<tr>										
										<td>9, Thursday</td>	
										<td>3</td>	
										<td>$95.50</td>	
									</tr>
									<tr>										
										<td>10, Friday</td>	
										<td>4</td>	
										<td>$152.50</td>	
									</tr>
									<tr>										
										<td>11, Saturday</td>	
										<td>3</td>	
										<td>$100.40</td>	
									</tr>
									<tr>										
										<td>12, Sunday</td>	
										<td>2</td>	
										<td>$60.14</td>	
									</tr>			
								</tbody>
								<tfoot>
									<tr>
										<td>Total</td>
										<td>34</td>
										<td>$1146.78</td>
									</tr>
								</tfoot>
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
