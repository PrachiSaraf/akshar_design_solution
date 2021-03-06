</head>
<body>
	<div id="wrapper" class="fixed-header fixed-sidebar">
		<!-- START Template Canvas -->
		<div id="canvas">
			<!-- START Template Header -->
			<header id="header">
				<!-- START Logo -->
				<div class="logo hidden-phone hidden-tablet">
					<a href="#"><img src="img/logo-white.png" alt=""></a>
					<small class="version"></small>
				</div>
				<!--/ END Logo -->

				<!-- START Mobile Sidebar Toggler -->
				<a href="#" class="toggler" data-toggle="sidebar"><span class="icon icone-reorder"></span></a>
				<!--/ END Mobile Sidebar Toggler -->

				<!-- START Toolbar -->
				<ul class="toolbar" id="toolbar">
					<!-- START Task -->
					
					<!--/ END Task -->

					<!-- START Notification -->
					<li class="notification">
						<a href="#" data-toggle="dropdown"> <span class="badge">2</span> <span class="icon iconm-bell-2"></span> </a>
						<!-- START Dropdown Menu -->
						<div class="dropdown-menu" role="menu">
							<header>
								Notifications <small>5 New</small>
							</header>
							<ul class="body">
								<li>
									<span class="icon icone-hdd"></span>
									<a href="#" class="text"> <strong>Hard Disk</strong> Lorem ipsum dolor sit
									<br>
									<small>A few second ago</small> </a>
									<span class="action"><a class="close" href="#">&times;</a></span>
								</li>
								<li>
									<span class="icon"><img src="img/avatar/avatar7.jpg" alt=""></span>
									<a href="#" class="text"> <strong>Amelia</strong> comment on your <strong>Photo</strong>
									<br>
									<small>43 minutes ago</small> </a>
									<span class="action"><a class="close" href="#">&times;</a></span>
								</li>
								<li>
									<span class="icon icone-signal"></span>
									<a href="#" class="text"> <strong>Signal</strong> aeque mollis vocent eam ei
									<br>
									<small>Tuesday at 04:12PM</small> </a>
									<span class="action"><a class="close" href="#">&times;</a></span>
								</li>
								<li>
									<span class="icon icone-briefcase"></span>
									<a href="#" class="text"> <strong>Briefcase</strong> omnis omnes indoctum cum
									<br>
									<small>24 Jan at 04:12PM</small> </a>
									<span class="action"><a class="close" href="#">&times;</a></span>
								</li>
								<li>
									<span class="icon"><img src="img/avatar/avatar6.jpg" alt=""></span>
									<a href="#" class="text"> <strong>Albert</strong> comment on your <strong>Status</strong>
									<br>
									<small>1 minutes ago</small> </a>
									<span class="action"><a class="close" href="#">&times;</a></span>
								</li>
							</ul>
							<footer>
								<a href="#">Clear Notifications</a>
							</footer>
						</div>
						<!--/ END Dropdown Menu -->
					</li>
					<!--/ END Notification -->

					<!-- START Message -->
					
					<!--/ END Message -->

					<!-- START Profile -->
					<li class="profile">
						<a href="#" data-toggle="dropdown"> <span class="avatar"><img src="<?php echo base_url() . "img/avatar/avatar4.jpg"; ?>"  alt=""></span> <span class="text hidden-phone"><?php echo $username; ?>
							<span class="role"><?php echo $role; ?></span></span> <span class="arrow icone-caret-down"></span> </a>
						<!-- START Dropdown Menu -->
						<div class="dropdown-menu" role="menu">
							<header>
								<a href="#" style="color: white;">Your Profile</a>
							</header>
							
							<footer>
								<a href="<?php echo base_url() . 'login'; ?>" class="text"><span class="icon icone-off"></span> Sign Off</a>
							</footer>
						</div>
						<!--/ END Dropdown Menu -->
					</li>
					<!--/ END Profile -->
				</ul>
				<!--/ END Toolbar -->
			</header>
			<aside id="sidebar">
				<!-- START Sidebar Content -->
				<div class="sidebar-content">
					<!-- START Sidebar Tab -->
					<!--
					<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab-menu" data-toggle="tab"><span class="icon icone-file"></span></a>
											</li>
											
											<li class="">
																		<a href="#tab-overview" data-toggle="tab"><span class="icon icone-beaker"></span></a>
																	</li>
											
										</ul>-->
					
					<!--/ END Sidebar Tab -->

					<!-- START Tab Content -->
					<div class="tab-content">
						<!-- START Tab Pane(menu) -->
						<div class="tab-pane active" id="tab-menu">
							<!-- START Sidebar Menu -->
							<nav id="nav" class="accordion">
								<ul id="navigation">
									<!-- START Menu Divider -->
									<li class="divider">
										Main Menu
									</li>
									<!--/ END Menu Divider -->

									<!-- START Menu -->
									<li class="accordion-group">
										<a href="<?php
										$href;
										switch ($roleId) {
											case 1 :
												$href = "admin";
												echo base_url() . $href;
												break;
											case 2 :
												$href = "branch_manager";
												echo base_url() . $href;
												break;
											case 3 :
												$href = "faculty";
												echo base_url() . $href;
												break;
											case 4 :
												$href = "counsellor";
												echo base_url() . $href;
												break;
											case 5 :
												$href = "student";
												echo base_url() . $href;
												break;
										}
										?>"><span class="icon icone-dashboard"></span> <span class="text">Dashboard</span></a>
									</li>
									<!--/ END Menu -->

									<!-- START Menu -->
									<?php
									if ($roleId == 1) {
										echo "<li class='accordion-group'>
<a href='" . base_url() . $href . "/branch'> <span class='icon icone-th-list'></span> <span class='text'>Branch</span> </a>
</li>

<li class='accordion-group'>
<a href='" . base_url() . $href . "/staff'> <span class='icon icone-dashboard'></span> <span class='text'>Staff</span> </a>
</li>

<li class='accordion-group '>
<a data-toggle='collapse' data-parent='#navigation' href='#submenuCourse'> <span class='icon icone-beaker'></span> <span class='text'>Course</span> <span class='arrow icone-caret-down'></span> </a>
<!-- START Submenu Menu -->
<ul id='submenuCourse' class='collapse '>
<li class=''>
<a href='" . base_url() . $href . "/course_category'><span class='icon icone-angle-right'></span>Course Category</a>
</li>
<li class=''>
<a href='" . base_url() . $href . "/course'><span class='icon icone-angle-right'></span>Course</a>
</li>
</ul>
<!--/ END Submenu Menu -->
</li>

<li class='accordion-group active'>
<a data-toggle='collapse' data-parent='#navigation' href='#submenuTarget'> <span class='icon icone-beaker'></span> <span class='text'>Target</span> <span class='arrow icone-caret-down'></span> </a>
<!-- START Submenu Menu -->
<ul id='submenuTarget' class='collapse in'>
<li class='active'>
<a href='" . base_url() . $href . "/target_type'><span class='icon icone-angle-right'></span>Target Type</a>
</li>
<li class=''>
<a href='" . base_url() . $href . "/target'><span class='icon icone-angle-right'></span>Target</a>
</li>
</ul>
<!--/ END Submenu Menu -->
</li>

<li class='accordion-group'>
<a href='" . base_url() . $href . "/event_type'> <span class='icon icone-dashboard'></span> <span class='text'>Event Type</span> </a>
</li>

<li class='accordion-group'>
<a href='" . base_url() . $href . "/state'> <span class='icon icone-dashboard'></span> <span class='text'>State</span> </a>
</li>

<li class='accordion-group'>
<a href='" . base_url() . $href . "/city'> <span class='icon icone-dashboard'></span> <span class='text'>City</span> </a>
</li>";
									}

									if ($roleId == 2) {
										echo "
<li class='accordion-group'>
<a href='" . base_url() . $href . "/batch'><span class='icon icone-dashboard'></span> <span class='text'>Batch</span> </a>
</li>";
									}

									if ($roleId == 2 || $roleId == 4) {
										echo "
<li class='accordion-group'>
<a href='" . base_url() . $href . "/inquiry'> <span class='icon icone-dashboard'></span> <span class='text'>Student Inquiry</span> </a>
</li>

<li class='accordion-group '>
<a data-toggle='collapse' data-parent='#navigation' href='#submenu2'> <span class='icon icone-beaker'></span> <span class='text'>Student Registration</span> <span class='arrow icone-caret-down'></span> </a>
<!-- START Submenu Menu -->
<ul id='submenu2' class='collapse '>
<li class=''>
<a href='" . base_url() . $href . "/studentregistration'><span class='icon icone-angle-right'></span>Registration</a>
</li>
<li class=''>
<a href='" . base_url() . $href . "/fees_payment'><span class='icon icone-angle-right'></span>Fees Receipt</a>
</li>
</ul>
<!--/ END Submenu Menu -->
</li>

<li class='accordion-group'>
<a href='" . base_url() . $href . "/book_inventory'> <span class='icon icone-dashboard'></span> <span class='text'>Book Inventory</span> </a>
</li>

<li class='accordion-group'>
<a href='" . base_url() . $href . "/event'> <span class='icon icone-dashboard'></span> <span class='text'>Event</span> </a>
</li>";
									}

									if ($roleId == 2) {
										echo "
<li class='accordion-group'>
<a href='" . base_url() . $href . "/target_report'> <span class='icon icone-dashboard'></span> <span class='text'>Target Report</span> </a>
</li>";
									}

									if ($roleId == 3) {
										echo "
<li class='accordion-group'>
<a href='" . base_url() . $href . "/student_attendance'> <span class='icon icone-dashboard'></span> <span class='text'>Student Attendance</span> </a>
</li>

<li class='accordion-group'>
<a href='" . base_url() . $href . "/test'> <span class='icon icone-dashboard'></span> <span class='text'>Test</span> </a>
</li>";

									}
									if ($roleId == 5) {echo "
<li class='accordion-group'>
<a href='" . base_url() . $href . "/show_attendance'> <span class='icon icone-dashboard'></span> <span class='text'>Attendance</span> </a>
</li>

<li class='accordion-group'>
<a href='" . base_url() . $href . "/test_result'> <span class='icon icone-dashboard'></span> <span class='text'>Test Result</span> </a>
</li>";
									}

									if ($roleId != 5) {
										echo "<li class='accordion-group'>
<a href='" . base_url() . $href . "/search'> <span class='icon icone-dashboard'></span> <span class='text'>Search</span> </a>
</li>

<li class='accordion-group'>
<a href='" . base_url() . $href . "/send_notification'> <span class='icon icone-dashboard'></span> <span class='text'>Send Notification</span> </a>
</li>
";
									}
	?>
								</ul>
							</nav>
							<!--/ END Sidebar Menu -->
						</div>
						<!--/ END Tab Pane(menu) -->

						<!-- START Tab Pane(overview) -->
						<!--
						<div class="tab-pane" id="tab-overview">
													<nav id="nav" class="accordion">
														<ul id="navigation">
															<li class="divider">
																Main Menu
															</li>
															
															<li class="accordion-group">
															<a href="<?php echo base_url() . $href . "/profile"; ?>"> <span class="icon icone-dashboard"></span> <span class="text">Student Profile</span> </a>
															</li>						
														</ul>
													</nav>
												</div>
												-->
						
						<!--/ END Tab Pane(overview) -->
					</div>
					<!--/ END Tab Content -->
				</div>
				<!--/ END Sidebar Content -->
			</aside>
