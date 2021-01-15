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
						<h2 class="st_title"><i class="uil uil-comments"></i> Messages</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-12">
						<div class="all_msg_bg">
							<div class="row no-gutters">
								<div class="col-xl-4 col-lg-5 col-md-12">					
									<div class="msg_search">
										<div class="ui search focus">
											<div class="ui left icon input swdh11 swdh15">
												<input class="prompt srch_explore" type="text" placeholder="Search Messages...">
												<i class="uil uil-search-alt icon icon8"></i>
											</div>
										</div>
									</div>
									<div class="simplebar-content-wrapper">
										<div class="group_messages">
											<div class="chat__message__dt active">
												<div class="user-status">											
													<div class="user-avatar">
														<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">
														<div class="msg__badge">2</div>
													</div>
													<p class="user-status-title"><span class="bold">John Doe</span></p>
													<p class="user-status-text">Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
													<p class="user-status-time floaty">7 hours ago</p>
												</div>
											</div>
											<div class="chat__message__dt">
												<div class="user-status">											
													<div class="user-avatar">
														<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-2.jpg" alt="">
														<div class="msg__badge">3</div>
													</div>
													<p class="user-status-title"><span class="bold">Kerstin Cable</span></p>
													<p class="user-status-text">Hello, I paid you video tutorial but did not play error 404.</p>
													<p class="user-status-time floaty">8 hours ago</p>
												</div>
											</div>
											<div class="chat__message__dt">
												<div class="user-status">											
													<div class="user-avatar">
														<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-3.jpg" alt="">
														<div class="msg__badge">1</div>
													</div>
													<p class="user-status-title"><span class="bold">Jose Portilla</span></p>
													<p class="user-status-text">Thanks Sir, Such a nice video.</p>
													<p class="user-status-time floaty">15 hours ago</p>
												</div>
											</div>
											<div class="chat__message__dt">
												<div class="user-status">											
													<div class="user-avatar">
														<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-4.jpg" alt="">
														<div class="msg__badge">7</div>
													</div>
													<p class="user-status-title"><span class="bold">Farhat Amin</span></p>
													<p class="user-status-text">Hi! Sir, this is a purchase key CFKX12536ERUJSKLL</p>
													<p class="user-status-time floaty">22 hours ago</p>
												</div>
											</div>
											<div class="chat__message__dt">
												<div class="user-status">											
													<div class="user-avatar">
														<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-5.jpg" alt="">
														<div class="msg__badge">12</div>
													</div>
													<p class="user-status-title"><span class="bold">Kyle Pew</span></p>
													<p class="user-status-text">Pls! Upload .NET Course</p>
													<p class="user-status-time floaty">2 days ago</p>
												</div>
											</div>
											<div class="chat__message__dt">
												<div class="user-status">											
													<div class="user-avatar">
														<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-6.jpg" alt="">
													</div>
													<p class="user-status-title"><span class="bold">Eli Natoli</span></p>
													<p class="user-status-text">Hi Sir thank you very very much for bootstrap full course.</p>
													<p class="user-status-time floaty">5 days ago</p>
												</div>
											</div>
											<div class="chat__message__dt">
												<div class="user-status">											
													<div class="user-avatar">
														<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-7.jpg" alt="">
														<div class="msg__badge">6</div>
													</div>
													<p class="user-status-title"><span class="bold">Jaysen Batchelor</span></p>
													<p class="user-status-text">Thank you! Sir</p>
													<p class="user-status-time floaty">7 days ago</p>
												</div>
											</div>
											<div class="chat__message__dt">
												<div class="user-status">											
													<div class="user-avatar">
														<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-8.jpg" alt="">
														<div class="msg__badge">1</div>
													</div>
													<p class="user-status-title"><span class="bold">Quinton Batchelor</span></p>
													<p class="user-status-text">Hey!</p>
													<p class="user-status-time floaty">13 days ago</p>
												</div>
											</div>
										</div>
									</div>					
								</div>
								<div class="col-xl-8 col-lg-7 col-md-12">			
									<div class="chatbox_right">
										<div class="chat_header">
											<div class="user-status">											
												<div class="user-avatar">
													<img src= "<?php echo base_url(); ?>assets/images/left-imgs/img-1.jpg" alt="">
												</div>
												<p class="user-status-title"><span class="bold">John Doe</span></p>
												<p class="user-status-tag online">Online</p>													
												<div class="user-status-time floaty eps_dots eps_dots5 more_dropdown">
													<a href="#"><i class="uil uil-ellipsis-h"></i></a>
													<div class="dropdown-content">
														<span><i class="uil uil-trash-alt"></i>Delete</span>
														<span><i class="uil uil-ban"></i>Block</span>
														<span><i class="uil uil-windsock"></i>Report</span>															
														<span><i class="uil uil-volume-mute"></i>Mute</span>
													 </div>																										
												</div>													
											</div>
										</div>
										<div class="messages-line simplebar-content-wrapper2 scrollstyle_4">											
											<div class="mCustomScrollbar">											
												<div class="main-message-box ta-right">
													<div class="message-dt">
														<div class="message-inner-dt">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
														</div><!--message-inner-dt end-->
														<span>Sat, April 10, 1:08 PM</span>
													</div><!--message-dt end-->
												</div><!--main-message-box end-->
												<div class="main-message-box st3">
													<div class="message-dt st3">
														<div class="message-inner-dt">
															<p>Cras ultricies ligula.</p>
														</div><!--message-inner-dt end-->
														<span>5 minutes ago</span>
													</div><!--message-dt end-->
												</div><!--main-message-box end-->
												<div class="main-message-box ta-right">
													<div class="message-dt">
														<div class="message-inner-dt">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
														</div><!--message-inner-dt end-->
														<span>Sat, April 10, 1:08 PM</span>
													</div><!--message-dt end-->
												</div><!--main-message-box end-->
												<div class="main-message-box st3">
													<div class="message-dt st3">
														<div class="message-inner-dt">
															<p>Lorem ipsum dolor sit amet</p>
														</div><!--message-inner-dt end-->
														<span>2 minutes ago</span>
													</div><!--message-dt end-->
												</div><!--main-message-box end-->
												<div class="main-message-box ta-right">
													<div class="message-dt">
														<div class="message-inner-dt">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
														</div><!--message-inner-dt end-->
														<span>Sat, April 10, 1:08 PM</span>
													</div><!--message-dt end-->
												</div><!--main-message-box end-->
												<div class="main-message-box st3">
													<div class="message-dt st3">
														<div class="message-inner-dt">
															<p>....</p>
														</div><!--message-inner-dt end-->
														<span>Typing...</span>
													</div><!--message-dt end-->
												</div><!--main-message-box end-->
											</div>
										</div>
										<div class="message-send-area">
											<form>
												<div class="mf-field">
													<div class="ui search focus input__msg">
														<div class="ui left icon input swdh19">
															<input class="prompt srch_explore" type="text" id="chat-widget-message-text-2" name="chat_widget_message_text_2" placeholder="Write a message...">
														</div>
													</div>
													<button class="add_msg" type="submit"><i class="uil uil-message"></i></button>
												</div>
											</form>
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
