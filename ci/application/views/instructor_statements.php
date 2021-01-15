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
						<h2 class="st_title"><i class="uil uil-file-alt"></i> Statements</h2>
					</div>					
				</div>				
				<div class="row">					
					<div class="col-lg-8 col-md-7">
						<div class="top_countries mt-30">
							<div class="top_countries_title">
								<h2>Earnings</h2>
							</div>
							<div class="statement_content">
								<p class="tt-body">Your sales earnings over the last 30 days</p>
								<table class="statement-summary__table">
									<thead>
										<tr>
											<th>
												<p class="t-heading">My funds</p>
											</th>
											<th>
												<p class="t-heading">Earnings</p>
											</th>
											<th>
												<p class="t-heading">Edututs+ Fees</p>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="statement-summary__funds">
												<p class="js-earnings__instructor-funds-wrapper">
													<span class=""></span>
													<span class="js-earnngs__instructor-funds t-currency">$289.64</span>
												</p>
											</td>
											<td class="statement-summary__earnings">
												<p class="js-earnings__earnings-wrapper">
													<span class="tt__earning">+</span>
													<span class="js-earnings__earnings t-currency">$458.00</span>
												</p>
											</td>
											<td class="statement-summary__fees">
												<p class="js-earnings__fees-wrapper">
													<span class="tt__earning">-</span>
													<span class="js-earnings__fees t-currency">$154.86</span>
												</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>			
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="top_countries mt-30">
							<div class="top_countries_title">
								<h2>View Invoices</h2>
							</div>
							<div class="statement_invoice_content">
								<div class="date_selector mt-0">
									<div class="ui selection dropdown skills-search vchrt-dropdown invoice-dropdown">
										<input name="date" type="hidden" value="default">
										<i class="dropdown icon d-icon"></i>
										<div class="text">Monthly Invoices</div>
										<div class="menu">
											<div class="item" data-value="0">April 2020</div>
											<div class="item" data-value="1">March 2020</div>
										</div>
									</div>
									<button class="st_download_btn"><i class="uil uil-download-alt"></i></button>
								</div>
							</div>
						</div>			
					</div>
					<div class="col-lg-12 col-md-12">
						<ul class="more_options_tt">
							<li><button class="more_items_14 active">This Month</button></li>
							<li><button class="more_items_14">Last Month</button></li>
							<li>
								<div class="explore_search">
									<div class="ui search focus">
										<div class="ui left icon input swdh11 swdh15">
											<input class="prompt srch_explore" type="text" placeholder="Document Number">
											<i class="uil uil-search-alt icon icon8"></i>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="table-responsive mt-30">
							<table class="table ucp-table earning__table">
								<thead class="thead-s">
									<tr>
										<th scope="col">Date</th>
										<th scope="col">Order ID</th>
										<th scope="col">Type</th>
										<th scope="col">Title</th>
										<th scope="col">Amount</th>									
										<th scope="col">Fees</th>									
										<th scope="col">Invoice</th>									
									</tr>
								</thead>
								<tbody>
									<tr>										
										<td>13 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>12 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>11 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>10 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>9 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>8 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>7 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
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
