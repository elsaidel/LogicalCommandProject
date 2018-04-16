<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Logical Command - satellite location </title>
	<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Custom CSS -->
	<link href="dist/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-6-active pimary-color-green">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.php">
							<img class="brand-img" src="dist/img/logo10.ico" alt="Logical Command" style="left: 43px; margin-right: 10px; position: relative; top: -35px;"/>
						
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				<form id="search_form" role="search" class="top-nav-search collapse pull-left">
					<div class="input-group">
						<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
						</span>
					</div>
				</form>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li>
						<a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
					</li>
					<li class="dropdown app-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-apps top-nav-icon"></i></a>
						<ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
							<li>
								<div class="app-nicescroll-bar">
									<ul class="app-icon-wrap pa-10">
										<li>
											<a href="weather.php" class="connection-item">
											<i class="zmdi zmdi-cloud-outline txt-info"></i>
											<span class="block">weather</span>
											</a>
										</li>
										<li>
											<a href="inbox.php" class="connection-item">
											<i class="zmdi zmdi-email-open txt-success"></i>
											<span class="block">e-mail</span>
											</a>
										</li>
										<li>
											<a href="calendar.php" class="connection-item">
											<i class="zmdi zmdi-calendar-check txt-primary"></i>
											<span class="block">calendar</span>
											</a>
										</li>
										<li>
											<a href="vector-map.php" class="connection-item">
											<i class="zmdi zmdi-map txt-danger"></i>
											<span class="block">map</span>
											</a>
										</li>
										<li>
											<a href="chats.php" class="connection-item">
											<i class="zmdi zmdi-comment-outline txt-warning"></i>
											<span class="block">chat</span>
											</a>
										</li>
										<li>
											<a href="contact-card.php" class="connection-item">
											<i class="zmdi zmdi-assignment-account"></i>
											<span class="block">contact</span>
											</a>
										</li>
									</ul>
								</div>	
							</li>
							<li>
								<div class="app-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)"> more </a>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown full-width-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more-vert top-nav-icon"></i></a>
						<ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li class="product-nicescroll-bar row">
								<ul class="pa-20">
									<li class="col-md-3 col-xs-6 col-menu-list">
										<a href="javascript:void(0);"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
										<hr class="light-grey-hr ma-0"/>
										<ul>
											<li>
												<a href="index.php">Analytical</a>
											</li>
										</ul>
									</li>
									<li class="col-md-3 col-xs-6 col-menu-list">
										<a href="javascript:void(0);">
											<div class="pull-left">
												<i class="zmdi md-gps-fixed mr-20"></i><span class="right-nav-text">Operator</span>
											</div>	
											<div class="pull-right"><span class="label label-success">hot</span>
											</div>
											<div class="clearfix"></div>
										</a>
										<hr class="light-grey-hr ma-0"/>
										<ul>
											<li>
												<a href="e-commerce.php">Dashboard</a>
											</li>
											<li>
												<a href="product.php">Products</a>
											</li>
											<li>
												<a href="product-detail.php">Product Detail</a>
											</li>
											<li>
												<a href="add-products.php">Add Product</a>
											</li>
											<li>
												<a href="product-orders.php">Orders</a>
											</li>
											<li>
												<a href="product-cart.php">Cart</a>
											</li>
											<li>
												<a href="product-checkout.php">Checkout</a>
											</li>
										</ul>
									</li>
									<li class="col-md-6 col-xs-12 preview-carousel">
										<a href="javascript:void(0);"><div class="pull-left"><span class="right-nav-text">latest products</span></div><div class="clearfix"></div></a>
										<hr class="light-grey-hr ma-0"/>
										<div class="product-carousel owl-carousel owl-theme text-center">
											<a href="#">
												<img src="dist/img/chair.jpg" alt="chair">
												<span>Circle chair</span>
											</a>
											<a href="#">
												<img src="dist/img/chair2.jpg" alt="chair">
												<span>square chair</span>
											</a>
											<a href="#">
												<img src="dist/img/chair3.jpg" alt="chair">
												<span>semi circle chair</span>
											</a>
											<a href="#">
												<img src="dist/img/chair4.jpg" alt="chair">
												<span>wooden chair</span>
											</a>
											<a href="#">
												<img src="dist/img/chair2.jpg" alt="chair">
												<span>square chair</span>
											</a>								
										</div>
									</li>
								</ul>
							</li>	
						</ul>
					</li>
					<li class="dropdown alert-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
						<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
							<li>
								<div class="notification-box-head-wrap">
									<span class="notification-box-head pull-left inline-block">notifications</span>
									<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
									<div class="clearfix"></div>
									<hr class="light-grey-hr ma-0"/>
								</div>
							</li>
							<li>
								<div class="streamline message-nicescroll-bar">
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-green">
												<i class="zmdi zmdi-flag"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												New subscription created</span>
												<span class="inline-block font-11  pull-right notifications-time">2pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-yellow">
												<i class="zmdi zmdi-trending-down"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
												<span class="inline-block font-11 pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Some technical error occurred needs to be resolved.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-blue">
												<i class="zmdi zmdi-email"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
												<span class="inline-block font-11  pull-right notifications-time">4pm</span>
												<div class="clearfix"></div>
												<p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="sl-avatar">
												<img class="img-responsive" src="dist/img/avatar.jpg" alt="avatar"/>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
												<span class="inline-block font-11  pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-red">
												<i class="zmdi zmdi-storage"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
												<span class="inline-block font-11  pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">consectetur, adipisci velit.</p>
											</div>
										</a>	
									</div>
								</div>
							</li>
							<li>
								<div class="notification-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)"> read all </a>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.php"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
							</li>
							<li>
								<a href="inbox.php"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
							</li>
							<li class="divider"></li>
							<li class="sub-menu show-on-hover">
								<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
								<ul class="dropdown-menu open-left-side">
									<li>
										<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
									</li>
								</ul>	
							</li>
							<li class="divider"></li>
							<li>
								<a href="login.php"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						<li>
							<a href="index.php">Analytical</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-gps-dot mr-20"></i><span class="right-nav-text">Operators</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a href="export-table.php">Deatails of boats</a>
						</li>
						<li>
							<a href="basic-table.php">Operators</a>
						</li>
						<li>
							<a href="tinymce-wysihtml5.php">Report of Operators</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">System Settings</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="app_dr" class="collapse collapse-level-1">
						<li>
							<a href="basic-table.php">Database Management</a>
						</li>
						<li>
							<a href="basic-table.php">Permissions</a>
						</li>
						<li>
							<a href="responsive-table.php">User Management</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="widgets.php"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">Statistics</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>component</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Data Learning</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="sparkline.php">Vectors</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="table_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="basic-table.php">Basic Table</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">maps</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="maps_dr" class="collapse collapse-level-1">
						<li>
							<a href="vector-map.php">Vector Map</a>
						</li>
						<li>
							<a href="google-map.php">Google Map</a>
						</li>
						<li>
							<a href="map-selector.php">Scribble Map</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="case.php"><div class="pull-left"><i class="zmdi zmdi-star mr-20"></i><span class="right-nav-text">Case</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Support</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="documentation.php"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Documents</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				<li>
							<button class="btn  btn-success" style="margin: 45px; border-radius: 60px;">Refresh</button>
				</li>
												
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
		
		<!-- Right Sidebar Menu -->
		<div class="fixed-sidebar-right">
			<ul class="right-sidebar">
				<li>
					<div  class="tab-struct custom-tab-1">
						<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
							<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
							<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
							<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
						</ul>
						<div class="tab-content" id="right_sidebar_content">
							<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
								<div class="chat-cmplt-wrap">
									<div class="chat-box-wrap">
										<div class="add-friend">
											<a href="javascript:void(0)" class="inline-block txt-grey">
												<i class="zmdi zmdi-more"></i>
											</a>	
											<span class="inline-block txt-dark">users</span>
											<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
											<div class="clearfix"></div>
										</div>
										<form role="search" class="chat-search pl-15 pr-15 pb-15">
											<div class="input-group">
												<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
												<span class="input-group-btn">
												<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
												</span>
											</div>
										</form>
										<div id="chat_list_scroll">
											<div class="nicescroll-bar">
												<ul class="chat-list-wrap">
													<li class="chat-list">
														<div class="chat-body">
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Clay Masse</span>
																		<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Evie Ono</span>
																		<span class="time block truncate txt-grey">Unity is strength</span>
																	</div>
																	<div class="status offline"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Madalyn Rascon</span>
																		<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Mitsuko Heid</span>
																		<span class="time block truncate txt-grey">I’m thankful.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Ezequiel Merideth</span>
																		<span class="time block truncate txt-grey">Patience is bitter.</span>
																	</div>
																	<div class="status offline"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Jonnie Metoyer</span>
																		<span class="time block truncate txt-grey">Genius is eternal patience.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Angelic Lauver</span>
																		<span class="time block truncate txt-grey">Every burden is a blessing.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Priscila Shy</span>
																		<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user4.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Linda Stack</span>
																		<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="recent-chat-box-wrap">
										<div class="recent-chat-wrap">
											<div class="panel-heading ma-0">
												<div class="goto-back">
													<a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
														<i class="zmdi zmdi-chevron-left"></i>
													</a>	
													<span class="inline-block txt-dark">ryan</span>
													<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="panel-wrapper collapse in">
												<div class="panel-body pa-0">
													<div class="chat-content">
														<ul class="nicescroll-bar pt-20">
															<li class="friend">
																<div class="friend-msg-wrap">
																	<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																	<div class="msg pull-left">
																		<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																		<div class="msg-per-detail text-right">
																			<span class="msg-time txt-grey">2:30 PM</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>	
															</li>
															<li class="self mb-10">
																<div class="self-msg-wrap">
																	<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																		<div class="msg-per-detail text-right">
																			<span class="msg-time txt-grey">2:31 pm</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>	
															</li>
															<li class="self">
																<div class="self-msg-wrap">
																	<div class="msg block pull-right">  How about you?
																		<div class="msg-per-detail text-right">
																			<span class="msg-time txt-grey">2:31 pm</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>	
															</li>
															<li class="friend">
																<div class="friend-msg-wrap">
																	<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																	<div class="msg pull-left"> 
																		<p>Not too bad.</p>
																		<div class="msg-per-detail  text-right">
																			<span class="msg-time txt-grey">2:35 pm</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>	
															</li>
														</ul>
													</div>
													<div class="input-group">
														<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
														<div class="input-group-btn emojis">
															<div class="dropup">
																<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="javascript:void(0)">Action</a></li>
																	<li><a href="javascript:void(0)">Another action</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0)">Separated link</a></li>
																</ul>
															</div>
														</div>
														<div class="input-group-btn attachment">
															<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
																<input type="file" class="upload">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
								
							<div id="messages_tab" class="tab-pane fade" role="tabpanel">
								<div class="message-box-wrap">
									<div class="msg-search">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>	
										<span class="inline-block txt-dark">messages</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
										<div class="clearfix"></div>
									</div>
									<div class="set-height-wrap">
										<div class="streamline message-box nicescroll-bar">
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
														<span class="inline-block font-11  pull-right message-time">12:28 AM</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
														<span class="inline-block font-11  pull-right message-time">1 Feb</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Pogody theme support</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user2.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
														<span class="inline-block font-11  pull-right message-time">31 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Congratulations from design nominees</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user3.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
														<span class="inline-block font-11  pull-right message-time">29 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Themeforest item support message</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user4.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
														<span class="inline-block font-11  pull-right message-time">27 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Help with beavis contact form</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
														<span class="inline-block font-11  pull-right message-time">19 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Your uploaded theme is been selected</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
														<span class="inline-block font-11  pull-right message-time">13 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject"> A new rating has been received</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
								<div class="todo-box-wrap">
									<div class="add-todo">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>	
										<span class="inline-block txt-dark">todo list</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
										<div class="clearfix"></div>
									</div>
									<div class="set-height-wrap">
										<!-- Todo-List -->
										<ul class="todo-list nicescroll-bar">
											<li class="todo-item">
												<div class="checkbox checkbox-default">
													<input type="checkbox" id="checkbox01"/>
													<label for="checkbox01">Record The First Episode</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-pink">
													<input type="checkbox" id="checkbox02"/>
													<label for="checkbox02">Prepare The Conference Schedule</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-warning">
													<input type="checkbox" id="checkbox03" checked/>
													<label for="checkbox03">Decide The Live Discussion Time</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-success">
													<input type="checkbox" id="checkbox04" checked/>
													<label for="checkbox04">Prepare For The Next Project</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-danger">
													<input type="checkbox" id="checkbox05" checked/>
													<label for="checkbox05">Finish Up AngularJs Tutorial</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-purple">
													<input type="checkbox" id="checkbox06" checked/>
													<label for="checkbox06">Finish Infinity Project</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
										</ul>
										<!-- /Todo-List -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- /Right Sidebar Menu -->
		
		
		
		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->
        
		<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Documentation</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active"><span>documentation</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Inroduction</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">Philbert Admin is a WebApp template for admin dashboards and control panels. It is a responsive HTML template that is based on the CSS framework Bootstrap 3.3.6 It utilizes all of the Bootstrap components in its design and re-styles many commonly used plugins to create a consistent design that can be used as a user interface for backend applications. Philbert Admin is based on a modular design, which allows it to be easily customized and built upon. This documentation will guide you through installing the template and exploring the various components that are bundled with the template.</p>
									<div class="row mt-30">
										<div class="col-md-4 col-xs-12">
											<ul class="list-icons">
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle txt-success mr-5"></i> 7 Different Dashboards</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Ecommerce Pages Included</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> 90+ pages </li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> 1000+ fonts </li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> 300+ Ui Components</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Light,dark, and boxed layout.</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> toggle left side menu</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Used Bower A package manager for the web.</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Used gruntjs (The javascript task runner.)</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Vector Maps & Google maps included.</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Powered by Bootstrap Sass.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>  CSS3 Animations.</li>
												
											</ul>
										</div>
										<div class="col-md-4 col-xs-12">
											<ul class="list-icons">
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Lots of widgets </li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Bootstrap 3x </li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> linea-icon Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Themify Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Simple line Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Pe-icon Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Responsive Layout</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> W3C HTML Valid code</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Multi-Browser Support</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Box & Full-screen layout options</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Dark & Light Demo options.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Quick setting panel with many cool options.</li>
											</ul>
										</div>
										<div class="col-md-4 col-xs-12">
											<ul class="list-icons">
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Mobile Responsive Tabs</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Specially Designed Mobile Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Desktop Sidebar Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Tablet Icon Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>  Multilevel Navigation</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Mega Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Beautiful Profile page</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Working Instagram Live Feeds</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Thoughtfully designed widgets.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Email App included.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Stunning Chat App included.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Login, Forget Password, Register, lock screen and many more.</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Installation (Install Node.js, Bower, Grunt)</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="mb-20">Use of these tools is completely optional.</p>
									<ul class="uo-list mt-20 mb-20 pl-15">
										<li class="mb-10 txt-dark">Node.js and NPM. You can download Node.js from here <a href="https://nodejs.org." target="_blank">https://nodejs.org.</a> Npm comes bundled with Node.js</li>
										<li class="mb-10 txt-dark">Next you need to install bower.</li>
										<li class="txt-dark" >At last install grunt using <code>npm install -g grunt-cli</code> and <code>npm install grunt --save-dev</code></li>
									</ul>
									<p>After installing all the required frameworks, components and dependencies, go to the root folder of and run the following commands from the command line:</p>
									<ul class="uo-list mt-20 mb-20 pl-15">
										<li class="mb-10 txt-dark">npm install</li>
										<li class="mb-10 txt-dark">bower install</li>
										<li class="txt-dark" >grunt</li>
									</ul>
									<p>If everything was installed correctly, you should see the jQuery version of Philbert running in <strong>http://localhost:9000/</strong></p>
									<br/>
									<p>Above all procedures are optional you can directly use the compiled file(dist/) which we provided you.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">File structure</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<pre>
										  
										  HTML
										  ├── 
										  │   └── Philbert/
										  │       └── dist
										  │            └── Distribution pkg(Ready to Use)
										  │       └── src
										  │            └── Source pkg
										  │       └── vendors
										  │            └── bower_components
										  │            └── All Required plugins files
										  │       └── All Html Pages
										  │       └── .bowerrc
										  │       └── .bowerrc
										  │       └── .jshintrc
										  │       └── bower.json
										  │       └── package.json
										  └── 
										
									  </pre>
            					</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Html structure</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
								  <pre>
									&lt;body&gt;

									<span style="color:#ccc;">&lt;!-- Preloader --&gt;</span>
									&lt;div class="preloader-it"&gt;
									&lt;div class="la-anim-1"&gt;&lt;/div&gt;
									&lt;/div&gt;
									<span style="color:#ccc;">!-- /Preloader --&gt;</span>

									<span style="color:#ccc;">&lt;!-- Wrapper --&gt;</span>
									&lt;div id="wrapper"&gt;
										&lt;!-- Top Menu Items --&gt;
										&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
										------
										&lt;!-- Left Sidebar Menu --&gt;
										&lt;div class="fixed-sidebar-left"&gt;
										------
										
										&lt;!-- Right Sidebar Menu --&gt;
										&lt;div class="fixed-sidebar-right"&gt;
										------
										
										&lt;!-- Right Sidebar Backdrop --&gt;
										&lt;div class="right-sidebar-backdrop"&gt;
										------
										
										&lt;!-- Main Content --&gt;
										&lt;div class="page-wrapper"&gt;
											
											&lt;!-- Title --&gt;
											&lt;div class="row heading-bg"&gt;
												------
												&lt;!-- Breadcrumb --&gt;
												&lt;div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"&gt;
													------
												--content--
										&lt;!-- Footer --&gt;
										&lt;footer class="footer container-fluid pl-30 pr-30"&gt;
									
										&lt;/body&gt;
									&lt;/html&gt;
									</pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">For Background Colors</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="mb-20">please use below classes bg colors:</p>
									<code class="block mb-10">bg-green</code>
									<code class="block mb-10">bg-blue</code>
									<code class="block mb-10">bg-red</code>
									<code class="block mb-10">bg-pink</code>
									<code class="block mb-10">bg-yellow</code>
									<code class="block mb-10">bg-light</code>
									<code class="block mb-10">bg-dark</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">For Text Colors</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="mb-20">please use below classes for text colors:</p>
									<code class="block mb-10">For green use .txt-success</code>
									<code class="block mb-10">For blue use .txt-primary</code>
									<code class="block mb-10">For pink use .txt-info</code>
									<code class="block mb-10">For yellow use .txt-warning</code>
									<code class="block mb-10">For red use .txt-danger</code>
									<code class="block mb-10">For white use .txt-light</code>
									<code class="block mb-10">For black use .txt-dark</code>
									<code class="block mb-10">For grey use .txt-grey</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">scss files</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">main scss file in present in src folder.</p>
									<div class="table-responsive">  
										<table class="table table-bordered m-0">
											<thead>
											  <tr>
												<th style="width: 20%;">File</th>
												<th>Description</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><code>style.scss</code> </td>
												<td> you can update main style using this scss file.</td>
											  </tr>
											   <tr>
												<td><code>style-dark.scss</code> </td>
												<td> you can update main style for dark version using this scss file.</td>
											  </tr>
											  <tr>
												<td><code>_bourbon.scss</code></td>
												<td> for all styles of bourbon css. </td>
											  </tr>
											  <tr>
												<td><code>mixins.sess</code></td>
												<td> for  all preset mixins.</td>
											  </tr>
											</tbody>
										  </table>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">js files</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">custom js file in present in dist/js folder.</p>
									<div class="table-responsive">  
										<table class="table table-bordered m-0">
											<thead>
											  <tr>
												<th style="width: 20%;">File</th>
												<th>Description</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><code>init.js</code> </td>
												<td>all custom js required for Philbert.</td>
											  </tr>
											  
											  <tr>
												<td><code>**-data.scss</code></td>
												<td>all js with **-data are releted with individual pages.</td>
											  </tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit all the files ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-25">All index files represent that how can you use all the widgets,tables,charts etc. Other html files are created using there original names like dropzone.html, chartist.html etc. You can easily edit them.</p>
									<p class="muted">all js which are present in dist/js folder with **-data are releted to individual pages. We used nomenclature related to inividual html page like chartjs-data.js for chats.html, bootstrap-wysuhtml5-data.js for bootstrap-wysihtml5.html etc.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit layout ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">For all the layout you have to add below classes with <code>.wrapper</code> class.</p>
									<code class="block mb-10">For boxed layout add .box-layout</code>
									<code class="block mb-10">For dark version use <b class="txt-dark">grunt sass-dark</b></code>
									<code class="block mb-10">For rtl version use <b class="txt-dark">grunt sass-rtl</b></code>
									<code class="block mb-10">For rtl version use <b class="txt-dark">grunt sass-rtl-dark</b></code>
									<code class="block mb-10">For scrollable header add .scrollable-nav</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit theme ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">We provide 6 themes which you can use, you have to add below classes with <code>.wrapper</code> class.</p>
									<code class="block mb-10">.theme-1-active</code>
									<code class="block mb-10">.theme-2-active</code>
									<code class="block mb-10">.theme-3-active</code>
									<code class="block mb-10">.theme-4-active</code>
									<code class="block mb-10">.theme-5-active</code>
									<code class="block">.theme-6-active</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit primary color ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">We provide 8 primary color scheme which you can use, you have to add below classes with <code>.wrapper</code> class.</p>
									<code class="block mb-10">.pimary-color-red</code>
									<code class="block mb-10">.pimary-color-blue</code>
									<code class="block mb-10">.pimary-color-green</code>
									<code class="block mb-10">.pimary-color-yellow</code>
									<code class="block mb-10">.pimary-color-pink</code>
									<code class="block mb-10">.pimary-color-orange</code>
									<code class="block mb-10">.pimary-color-gold</code>
									<code class="block">.pimary-color-silver</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit Weather app ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">We provided working weather app with the help of yahoo API.</p>
									<p class="muted mb-20">For editing the app first open simpleweather-data.js file,If you want to use weather app with forcast of seven day use</p>
									<code class="block mb-10">/*With Forcast*/<br>
									$.simpleWeather({...</code>
									<p class="muted mb-20">If you want to use weather app withot forcastuse</p>
									<code class="block mb-10">/*Without Forcast*/<br>
									$.simpleWeather({...</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p><strong>Note : Images are not included in downloaded version source.</strong></p>
								</div>
							</div>
						</div>
					</div>		
				</div>		
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">credits</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<ul class="common-credits">
										<li>Bootstrap framework</li>
										<li><a href="http://getbootstrap.com/">http://getbootstrap.com/</a></li>
										<li>Jquery</li>
										<li><a href="https://jquery.com/">https://jquery.com/</a></li>
										<li>Material Design Iconic Font</li>
										<li><a href="http://zavoloklom.github.io/material-design-iconic-font/icons.php">http://zavoloklom.github.io/material-design-iconic-font/icons.html</a></li>
										<li>Font-Awesome</li>
										<li><a href="http://fortawesome.github.io/Font-Awesome/">http://fortawesome.github.io/Font-Awesome/</a></li>
										<li>Themify</li>
										<li><a href="https://themify.me/themify-icons">https://themify.me/themify-icons</a></li>
										<li>linea-icon</li>
										<li><a href="http://linea.io/">http://linea.io/</a></li>
										<li>Simple line icons</li>
										<li><a href="simplelineicons.com">simplelineicons.com</a></li>
										
										<li>Pe-7 icons</li>
										<li><a href="http://themes-pixeden.com/font-demos/7-stroke/">http://themes-pixeden.com/font-demos/7-stroke/</a></li>
										
										<li>Sweet-Alert</li>
										<li><a href="http://tristanedwards.me/sweetalert">http://tristanedwards.me/sweetalert</a></li>
										<li>Nestable</li>
										<li><a href="http://dbushell.com/">http://dbushell.com/</a></li>
										<li>Slimscroll</li>
										<li><a href="http://rocha.la/jQuery-slimScroll">http://rocha.la/jQuery-slimScroll</a></li>
										<li>Full Calendar</li>
										<li><a href="http://arshaw.com/fullcalendar/">http://arshaw.com/fullcalendar/</a></li>
										
										<li>Bootstrap-timepicker</li>
										<li><a href="http://jdewit.github.com/bootstrap-timepicker">http://jdewit.github.com/bootstrap-timepicker</a></li>
										<li>Bootstrap Colorpicker</li>
										<li><a href="http://www.eyecon.ro/bootstrap-colorpicker">http://www.eyecon.ro/bootstrap-colorpicker</a></li>
										<li>Multi-select</li>
										<li><a href="http://loudev.com/">http://loudev.com/</a></li>
										<li>Select2</li>
										<li><a href="https://select2.github.io/">https://select2.github.io/</a></li>
										<li>Wysihtml5</li>
										<li><a href="https://github.com/xing/wysihtml5">https://github.com/xing/wysihtml5</a></li>
										<li>Datatables</li>
										<li><a href="https://www.datatables.net/">https://www.datatables.net/</a></li>
										<li>Jsgrid</li>
										<li><a href="http://js-grid.com/">http://js-grid.com/</a></li>
										<li>Morris</li>
										<li><a href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a></li>
										<li>Chartjs</li>
										<li><a href="http://chartjs.org/">http://chartjs.org/</a></li>
										<li>Sparkline</li>
										<li><a href="http://omnipotent.net/jquery.sparkline/">http://omnipotent.net/jquery.sparkline/</a>
										</li>
										<li>Google maps</li>
										<li><a href="https://hpneo.github.io/gmaps/">https://hpneo.github.io/gmaps/</a></li>
										<li>Vector Maps</li>
										<li><a href="http://jqvmap.com/">http://jqvmap.com/</a></li>
										<li>Pexels (images)</li>
										<li><a href="https://pexels.com/">https://pexels.com/</a></li>
										<li>Flot-charts</li>
										<li><a href="http://www.flotcharts.org/">http://www.flotcharts.org/</a></li>
										<li>Owl carousel</li>
										<li><a href="http://owlgraphic.com/owlcarousel/"> http://owlgraphic.com/owlcarousel/</a></li>
										<li>Switchery</li>
										<li><a href="https://github.com/abpetkov/switchery"> https://github.com/abpetkov/switchery</a></li>
										<li>Bootstrap select</li>
										<li><a href="https://github.com/silviomoreto/bootstrap-select"> https://github.com/silviomoreto/bootstrap-select</a></li>
										<li>Wysiwig Editor</li>
										<li><a href="http://www.tinymce.com/">http://www.tinymce.com/</a></li>
										<li>Chartist chart</li>
										<li><a href="https://gionkunz.github.io/chartist-js/"> https://gionkunz.github.io/chartist-js/</a></li>
									  </ul>
            
									</div>
								</div>
							</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Support</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="muted">If you have any questions that aren’t covered in this article, please mail us at <a href="mailto:contact@hencework.com">contact@hencework.com</a></p>
									</div>
								</div>
							</div>
					</div>
				</div>				
				<!-- /Row -->
			</div>
			<!-- /Row -->
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Logical Command</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Owl JavaScript -->
	<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
		
	<!-- Data table JavaScript -->
	<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="dist/js/dataTables-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Fancy Dropdown JS --><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Logical Command - satellite location </title>
	<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Custom CSS -->
	<link href="dist/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-6-active pimary-color-green">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.php">
							<img class="brand-img" src="dist/img/logo10.ico" alt="Logical Command" style="left: 43px; margin-right: 10px; position: relative; top: -35px;"/>
						
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				<form id="search_form" role="search" class="top-nav-search collapse pull-left">
					<div class="input-group">
						<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
						</span>
					</div>
				</form>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li>
						<a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
					</li>
					<li class="dropdown app-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-apps top-nav-icon"></i></a>
						<ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
							<li>
								<div class="app-nicescroll-bar">
									<ul class="app-icon-wrap pa-10">
										<li>
											<a href="weather.php" class="connection-item">
											<i class="zmdi zmdi-cloud-outline txt-info"></i>
											<span class="block">weather</span>
											</a>
										</li>
										<li>
											<a href="inbox.php" class="connection-item">
											<i class="zmdi zmdi-email-open txt-success"></i>
											<span class="block">e-mail</span>
											</a>
										</li>
										<li>
											<a href="calendar.php" class="connection-item">
											<i class="zmdi zmdi-calendar-check txt-primary"></i>
											<span class="block">calendar</span>
											</a>
										</li>
										<li>
											<a href="vector-map.php" class="connection-item">
											<i class="zmdi zmdi-map txt-danger"></i>
											<span class="block">map</span>
											</a>
										</li>
										<li>
											<a href="chats.php" class="connection-item">
											<i class="zmdi zmdi-comment-outline txt-warning"></i>
											<span class="block">chat</span>
											</a>
										</li>
										<li>
											<a href="contact-card.php" class="connection-item">
											<i class="zmdi zmdi-assignment-account"></i>
											<span class="block">contact</span>
											</a>
										</li>
									</ul>
								</div>	
							</li>
							<li>
								<div class="app-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)"> more </a>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown full-width-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more-vert top-nav-icon"></i></a>
						<ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li class="product-nicescroll-bar row">
								<ul class="pa-20">
									<li class="col-md-3 col-xs-6 col-menu-list">
										<a href="javascript:void(0);"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
										<hr class="light-grey-hr ma-0"/>
										<ul>
											<li>
												<a href="index.php">Analytical</a>
											</li>
										</ul>
									</li>
									<li class="col-md-3 col-xs-6 col-menu-list">
										<a href="javascript:void(0);">
											<div class="pull-left">
												<i class="zmdi md-gps-fixed mr-20"></i><span class="right-nav-text">Operator</span>
											</div>	
											<div class="pull-right"><span class="label label-success">hot</span>
											</div>
											<div class="clearfix"></div>
										</a>
										<hr class="light-grey-hr ma-0"/>
										<ul>
											<li>
												<a href="e-commerce.php">Dashboard</a>
											</li>
											<li>
												<a href="product.php">Products</a>
											</li>
											<li>
												<a href="product-detail.php">Product Detail</a>
											</li>
											<li>
												<a href="add-products.php">Add Product</a>
											</li>
											<li>
												<a href="product-orders.php">Orders</a>
											</li>
											<li>
												<a href="product-cart.php">Cart</a>
											</li>
											<li>
												<a href="product-checkout.php">Checkout</a>
											</li>
										</ul>
									</li>
									<li class="col-md-6 col-xs-12 preview-carousel">
										<a href="javascript:void(0);"><div class="pull-left"><span class="right-nav-text">latest products</span></div><div class="clearfix"></div></a>
										<hr class="light-grey-hr ma-0"/>
										<div class="product-carousel owl-carousel owl-theme text-center">
											<a href="#">
												<img src="dist/img/chair.jpg" alt="chair">
												<span>Circle chair</span>
											</a>
											<a href="#">
												<img src="dist/img/chair2.jpg" alt="chair">
												<span>square chair</span>
											</a>
											<a href="#">
												<img src="dist/img/chair3.jpg" alt="chair">
												<span>semi circle chair</span>
											</a>
											<a href="#">
												<img src="dist/img/chair4.jpg" alt="chair">
												<span>wooden chair</span>
											</a>
											<a href="#">
												<img src="dist/img/chair2.jpg" alt="chair">
												<span>square chair</span>
											</a>								
										</div>
									</li>
								</ul>
							</li>	
						</ul>
					</li>
					<li class="dropdown alert-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
						<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
							<li>
								<div class="notification-box-head-wrap">
									<span class="notification-box-head pull-left inline-block">notifications</span>
									<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
									<div class="clearfix"></div>
									<hr class="light-grey-hr ma-0"/>
								</div>
							</li>
							<li>
								<div class="streamline message-nicescroll-bar">
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-green">
												<i class="zmdi zmdi-flag"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												New subscription created</span>
												<span class="inline-block font-11  pull-right notifications-time">2pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-yellow">
												<i class="zmdi zmdi-trending-down"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
												<span class="inline-block font-11 pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Some technical error occurred needs to be resolved.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-blue">
												<i class="zmdi zmdi-email"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
												<span class="inline-block font-11  pull-right notifications-time">4pm</span>
												<div class="clearfix"></div>
												<p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="sl-avatar">
												<img class="img-responsive" src="dist/img/avatar.jpg" alt="avatar"/>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
												<span class="inline-block font-11  pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-red">
												<i class="zmdi zmdi-storage"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
												<span class="inline-block font-11  pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">consectetur, adipisci velit.</p>
											</div>
										</a>	
									</div>
								</div>
							</li>
							<li>
								<div class="notification-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)"> read all </a>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.php"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
							</li>
							<li>
								<a href="inbox.php"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
							</li>
							<li class="divider"></li>
							<li class="sub-menu show-on-hover">
								<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
								<ul class="dropdown-menu open-left-side">
									<li>
										<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
									</li>
								</ul>	
							</li>
							<li class="divider"></li>
							<li>
								<a href="login.php"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						<li>
							<a href="index.php">Analytical</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-gps-dot mr-20"></i><span class="right-nav-text">Operators</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a href="export-table.php">Deatails of boats</a>
						</li>
						<li>
							<a href="basic-table.php">Operators</a>
						</li>
						<li>
							<a href="tinymce-wysihtml5.php">Report of Operators</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">System Settings</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="app_dr" class="collapse collapse-level-1">
						<li>
							<a href="basic-table.php">Database Management</a>
						</li>
						<li>
							<a href="basic-table.php">Permissions</a>
						</li>
						<li>
							<a href="responsive-table.php">User Management</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="widgets.php"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">Statistics</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>component</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Data Learning</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="sparkline.php">Vectors</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="table_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="basic-table.php">Basic Table</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">maps</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="maps_dr" class="collapse collapse-level-1">
						<li>
							<a href="vector-map.php">Vector Map</a>
						</li>
						<li>
							<a href="google-map.php">Google Map</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="case.php"><div class="pull-left"><i class="zmdi zmdi-star mr-20"></i><span class="right-nav-text">Case</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Support</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="documentation.php"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Documents</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				<li>
							<button class="btn  btn-success" style="margin: 45px; border-radius: 60px;">Refresh</button>
				</li>
												
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
		
		<!-- Right Sidebar Menu -->
		<div class="fixed-sidebar-right">
			<ul class="right-sidebar">
				<li>
					<div  class="tab-struct custom-tab-1">
						<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
							<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
							<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
							<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
						</ul>
						<div class="tab-content" id="right_sidebar_content">
							<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
								<div class="chat-cmplt-wrap">
									<div class="chat-box-wrap">
										<div class="add-friend">
											<a href="javascript:void(0)" class="inline-block txt-grey">
												<i class="zmdi zmdi-more"></i>
											</a>	
											<span class="inline-block txt-dark">users</span>
											<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
											<div class="clearfix"></div>
										</div>
										<form role="search" class="chat-search pl-15 pr-15 pb-15">
											<div class="input-group">
												<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
												<span class="input-group-btn">
												<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
												</span>
											</div>
										</form>
										<div id="chat_list_scroll">
											<div class="nicescroll-bar">
												<ul class="chat-list-wrap">
													<li class="chat-list">
														<div class="chat-body">
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Clay Masse</span>
																		<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Evie Ono</span>
																		<span class="time block truncate txt-grey">Unity is strength</span>
																	</div>
																	<div class="status offline"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Madalyn Rascon</span>
																		<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Mitsuko Heid</span>
																		<span class="time block truncate txt-grey">I’m thankful.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Ezequiel Merideth</span>
																		<span class="time block truncate txt-grey">Patience is bitter.</span>
																	</div>
																	<div class="status offline"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Jonnie Metoyer</span>
																		<span class="time block truncate txt-grey">Genius is eternal patience.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Angelic Lauver</span>
																		<span class="time block truncate txt-grey">Every burden is a blessing.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Priscila Shy</span>
																		<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="dist/img/user4.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Linda Stack</span>
																		<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="recent-chat-box-wrap">
										<div class="recent-chat-wrap">
											<div class="panel-heading ma-0">
												<div class="goto-back">
													<a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
														<i class="zmdi zmdi-chevron-left"></i>
													</a>	
													<span class="inline-block txt-dark">ryan</span>
													<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="panel-wrapper collapse in">
												<div class="panel-body pa-0">
													<div class="chat-content">
														<ul class="nicescroll-bar pt-20">
															<li class="friend">
																<div class="friend-msg-wrap">
																	<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																	<div class="msg pull-left">
																		<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																		<div class="msg-per-detail text-right">
																			<span class="msg-time txt-grey">2:30 PM</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>	
															</li>
															<li class="self mb-10">
																<div class="self-msg-wrap">
																	<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																		<div class="msg-per-detail text-right">
																			<span class="msg-time txt-grey">2:31 pm</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>	
															</li>
															<li class="self">
																<div class="self-msg-wrap">
																	<div class="msg block pull-right">  How about you?
																		<div class="msg-per-detail text-right">
																			<span class="msg-time txt-grey">2:31 pm</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>	
															</li>
															<li class="friend">
																<div class="friend-msg-wrap">
																	<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																	<div class="msg pull-left"> 
																		<p>Not too bad.</p>
																		<div class="msg-per-detail  text-right">
																			<span class="msg-time txt-grey">2:35 pm</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>	
															</li>
														</ul>
													</div>
													<div class="input-group">
														<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
														<div class="input-group-btn emojis">
															<div class="dropup">
																<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="javascript:void(0)">Action</a></li>
																	<li><a href="javascript:void(0)">Another action</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0)">Separated link</a></li>
																</ul>
															</div>
														</div>
														<div class="input-group-btn attachment">
															<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
																<input type="file" class="upload">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
								
							<div id="messages_tab" class="tab-pane fade" role="tabpanel">
								<div class="message-box-wrap">
									<div class="msg-search">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>	
										<span class="inline-block txt-dark">messages</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
										<div class="clearfix"></div>
									</div>
									<div class="set-height-wrap">
										<div class="streamline message-box nicescroll-bar">
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
														<span class="inline-block font-11  pull-right message-time">12:28 AM</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
														<span class="inline-block font-11  pull-right message-time">1 Feb</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Pogody theme support</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user2.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
														<span class="inline-block font-11  pull-right message-time">31 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Congratulations from design nominees</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user3.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
														<span class="inline-block font-11  pull-right message-time">29 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Themeforest item support message</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user4.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
														<span class="inline-block font-11  pull-right message-time">27 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Help with beavis contact form</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
														<span class="inline-block font-11  pull-right message-time">19 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Your uploaded theme is been selected</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
														<span class="inline-block font-11  pull-right message-time">13 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject"> A new rating has been received</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
								<div class="todo-box-wrap">
									<div class="add-todo">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>	
										<span class="inline-block txt-dark">todo list</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
										<div class="clearfix"></div>
									</div>
									<div class="set-height-wrap">
										<!-- Todo-List -->
										<ul class="todo-list nicescroll-bar">
											<li class="todo-item">
												<div class="checkbox checkbox-default">
													<input type="checkbox" id="checkbox01"/>
													<label for="checkbox01">Record The First Episode</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-pink">
													<input type="checkbox" id="checkbox02"/>
													<label for="checkbox02">Prepare The Conference Schedule</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-warning">
													<input type="checkbox" id="checkbox03" checked/>
													<label for="checkbox03">Decide The Live Discussion Time</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-success">
													<input type="checkbox" id="checkbox04" checked/>
													<label for="checkbox04">Prepare For The Next Project</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-danger">
													<input type="checkbox" id="checkbox05" checked/>
													<label for="checkbox05">Finish Up AngularJs Tutorial</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-purple">
													<input type="checkbox" id="checkbox06" checked/>
													<label for="checkbox06">Finish Infinity Project</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
										</ul>
										<!-- /Todo-List -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- /Right Sidebar Menu -->
		
		
		
		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->
        
		<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Documentation</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active"><span>documentation</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Inroduction</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">Philbert Admin is a WebApp template for admin dashboards and control panels. It is a responsive HTML template that is based on the CSS framework Bootstrap 3.3.6 It utilizes all of the Bootstrap components in its design and re-styles many commonly used plugins to create a consistent design that can be used as a user interface for backend applications. Philbert Admin is based on a modular design, which allows it to be easily customized and built upon. This documentation will guide you through installing the template and exploring the various components that are bundled with the template.</p>
									<div class="row mt-30">
										<div class="col-md-4 col-xs-12">
											<ul class="list-icons">
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle txt-success mr-5"></i> 7 Different Dashboards</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Ecommerce Pages Included</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> 90+ pages </li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> 1000+ fonts </li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> 300+ Ui Components</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Light,dark, and boxed layout.</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> toggle left side menu</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Used Bower A package manager for the web.</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Used gruntjs (The javascript task runner.)</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Vector Maps & Google maps included.</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Powered by Bootstrap Sass.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>  CSS3 Animations.</li>
												
											</ul>
										</div>
										<div class="col-md-4 col-xs-12">
											<ul class="list-icons">
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Lots of widgets </li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Bootstrap 3x </li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> linea-icon Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Themify Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Simple line Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Pe-icon Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Responsive Layout</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> W3C HTML Valid code</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Multi-Browser Support</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Box & Full-screen layout options</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Dark & Light Demo options.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Quick setting panel with many cool options.</li>
											</ul>
										</div>
										<div class="col-md-4 col-xs-12">
											<ul class="list-icons">
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Mobile Responsive Tabs</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Specially Designed Mobile Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Desktop Sidebar Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Tablet Icon Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>  Multilevel Navigation</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Mega Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Beautiful Profile page</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Working Instagram Live Feeds</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Thoughtfully designed widgets.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Email App included.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Stunning Chat App included.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Login, Forget Password, Register, lock screen and many more.</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Installation (Install Node.js, Bower, Grunt)</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="mb-20">Use of these tools is completely optional.</p>
									<ul class="uo-list mt-20 mb-20 pl-15">
										<li class="mb-10 txt-dark">Node.js and NPM. You can download Node.js from here <a href="https://nodejs.org." target="_blank">https://nodejs.org.</a> Npm comes bundled with Node.js</li>
										<li class="mb-10 txt-dark">Next you need to install bower.</li>
										<li class="txt-dark" >At last install grunt using <code>npm install -g grunt-cli</code> and <code>npm install grunt --save-dev</code></li>
									</ul>
									<p>After installing all the required frameworks, components and dependencies, go to the root folder of and run the following commands from the command line:</p>
									<ul class="uo-list mt-20 mb-20 pl-15">
										<li class="mb-10 txt-dark">npm install</li>
										<li class="mb-10 txt-dark">bower install</li>
										<li class="txt-dark" >grunt</li>
									</ul>
									<p>If everything was installed correctly, you should see the jQuery version of Philbert running in <strong>http://localhost:9000/</strong></p>
									<br/>
									<p>Above all procedures are optional you can directly use the compiled file(dist/) which we provided you.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">File structure</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<pre>
										  
										  HTML
										  ├── 
										  │   └── Philbert/
										  │       └── dist
										  │            └── Distribution pkg(Ready to Use)
										  │       └── src
										  │            └── Source pkg
										  │       └── vendors
										  │            └── bower_components
										  │            └── All Required plugins files
										  │       └── All Html Pages
										  │       └── .bowerrc
										  │       └── .bowerrc
										  │       └── .jshintrc
										  │       └── bower.json
										  │       └── package.json
										  └── 
										
									  </pre>
            					</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Html structure</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
								  <pre>
									&lt;body&gt;

									<span style="color:#ccc;">&lt;!-- Preloader --&gt;</span>
									&lt;div class="preloader-it"&gt;
									&lt;div class="la-anim-1"&gt;&lt;/div&gt;
									&lt;/div&gt;
									<span style="color:#ccc;">!-- /Preloader --&gt;</span>

									<span style="color:#ccc;">&lt;!-- Wrapper --&gt;</span>
									&lt;div id="wrapper"&gt;
										&lt;!-- Top Menu Items --&gt;
										&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
										------
										&lt;!-- Left Sidebar Menu --&gt;
										&lt;div class="fixed-sidebar-left"&gt;
										------
										
										&lt;!-- Right Sidebar Menu --&gt;
										&lt;div class="fixed-sidebar-right"&gt;
										------
										
										&lt;!-- Right Sidebar Backdrop --&gt;
										&lt;div class="right-sidebar-backdrop"&gt;
										------
										
										&lt;!-- Main Content --&gt;
										&lt;div class="page-wrapper"&gt;
											
											&lt;!-- Title --&gt;
											&lt;div class="row heading-bg"&gt;
												------
												&lt;!-- Breadcrumb --&gt;
												&lt;div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"&gt;
													------
												--content--
										&lt;!-- Footer --&gt;
										&lt;footer class="footer container-fluid pl-30 pr-30"&gt;
									
										&lt;/body&gt;
									&lt;/html&gt;
									</pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">For Background Colors</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="mb-20">please use below classes bg colors:</p>
									<code class="block mb-10">bg-green</code>
									<code class="block mb-10">bg-blue</code>
									<code class="block mb-10">bg-red</code>
									<code class="block mb-10">bg-pink</code>
									<code class="block mb-10">bg-yellow</code>
									<code class="block mb-10">bg-light</code>
									<code class="block mb-10">bg-dark</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">For Text Colors</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="mb-20">please use below classes for text colors:</p>
									<code class="block mb-10">For green use .txt-success</code>
									<code class="block mb-10">For blue use .txt-primary</code>
									<code class="block mb-10">For pink use .txt-info</code>
									<code class="block mb-10">For yellow use .txt-warning</code>
									<code class="block mb-10">For red use .txt-danger</code>
									<code class="block mb-10">For white use .txt-light</code>
									<code class="block mb-10">For black use .txt-dark</code>
									<code class="block mb-10">For grey use .txt-grey</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">scss files</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">main scss file in present in src folder.</p>
									<div class="table-responsive">  
										<table class="table table-bordered m-0">
											<thead>
											  <tr>
												<th style="width: 20%;">File</th>
												<th>Description</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><code>style.scss</code> </td>
												<td> you can update main style using this scss file.</td>
											  </tr>
											   <tr>
												<td><code>style-dark.scss</code> </td>
												<td> you can update main style for dark version using this scss file.</td>
											  </tr>
											  <tr>
												<td><code>_bourbon.scss</code></td>
												<td> for all styles of bourbon css. </td>
											  </tr>
											  <tr>
												<td><code>mixins.sess</code></td>
												<td> for  all preset mixins.</td>
											  </tr>
											</tbody>
										  </table>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">js files</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">custom js file in present in dist/js folder.</p>
									<div class="table-responsive">  
										<table class="table table-bordered m-0">
											<thead>
											  <tr>
												<th style="width: 20%;">File</th>
												<th>Description</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><code>init.js</code> </td>
												<td>all custom js required for Philbert.</td>
											  </tr>
											  
											  <tr>
												<td><code>**-data.scss</code></td>
												<td>all js with **-data are releted with individual pages.</td>
											  </tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit all the files ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-25">All index files represent that how can you use all the widgets,tables,charts etc. Other html files are created using there original names like dropzone.html, chartist.html etc. You can easily edit them.</p>
									<p class="muted">all js which are present in dist/js folder with **-data are releted to individual pages. We used nomenclature related to inividual html page like chartjs-data.js for chats.html, bootstrap-wysuhtml5-data.js for bootstrap-wysihtml5.html etc.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit layout ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">For all the layout you have to add below classes with <code>.wrapper</code> class.</p>
									<code class="block mb-10">For boxed layout add .box-layout</code>
									<code class="block mb-10">For dark version use <b class="txt-dark">grunt sass-dark</b></code>
									<code class="block mb-10">For rtl version use <b class="txt-dark">grunt sass-rtl</b></code>
									<code class="block mb-10">For rtl version use <b class="txt-dark">grunt sass-rtl-dark</b></code>
									<code class="block mb-10">For scrollable header add .scrollable-nav</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit theme ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">We provide 6 themes which you can use, you have to add below classes with <code>.wrapper</code> class.</p>
									<code class="block mb-10">.theme-1-active</code>
									<code class="block mb-10">.theme-2-active</code>
									<code class="block mb-10">.theme-3-active</code>
									<code class="block mb-10">.theme-4-active</code>
									<code class="block mb-10">.theme-5-active</code>
									<code class="block">.theme-6-active</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit primary color ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">We provide 8 primary color scheme which you can use, you have to add below classes with <code>.wrapper</code> class.</p>
									<code class="block mb-10">.pimary-color-red</code>
									<code class="block mb-10">.pimary-color-blue</code>
									<code class="block mb-10">.pimary-color-green</code>
									<code class="block mb-10">.pimary-color-yellow</code>
									<code class="block mb-10">.pimary-color-pink</code>
									<code class="block mb-10">.pimary-color-orange</code>
									<code class="block mb-10">.pimary-color-gold</code>
									<code class="block">.pimary-color-silver</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">How to edit Weather app ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">We provided working weather app with the help of yahoo API.</p>
									<p class="muted mb-20">For editing the app first open simpleweather-data.js file,If you want to use weather app with forcast of seven day use</p>
									<code class="block mb-10">/*With Forcast*/<br>
									$.simpleWeather({...</code>
									<p class="muted mb-20">If you want to use weather app withot forcastuse</p>
									<code class="block mb-10">/*Without Forcast*/<br>
									$.simpleWeather({...</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p><strong>Note : Images are not included in downloaded version source.</strong></p>
								</div>
							</div>
						</div>
					</div>		
				</div>		
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">credits</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<ul class="common-credits">
										<li>Bootstrap framework</li>
										<li><a href="http://getbootstrap.com/">http://getbootstrap.com/</a></li>
										<li>Jquery</li>
										<li><a href="https://jquery.com/">https://jquery.com/</a></li>
										<li>Material Design Iconic Font</li>
										<li><a href="http://zavoloklom.github.io/material-design-iconic-font/icons.html">http://zavoloklom.github.io/material-design-iconic-font/icons.html</a></li>
										<li>Font-Awesome</li>
										<li><a href="http://fortawesome.github.io/Font-Awesome/">http://fortawesome.github.io/Font-Awesome/</a></li>
										<li>Themify</li>
										<li><a href="https://themify.me/themify-icons">https://themify.me/themify-icons</a></li>
										<li>linea-icon</li>
										<li><a href="http://linea.io/">http://linea.io/</a></li>
										<li>Simple line icons</li>
										<li><a href="simplelineicons.com">simplelineicons.com</a></li>
										
										<li>Pe-7 icons</li>
										<li><a href="http://themes-pixeden.com/font-demos/7-stroke/">http://themes-pixeden.com/font-demos/7-stroke/</a></li>
										
										<li>Sweet-Alert</li>
										<li><a href="http://tristanedwards.me/sweetalert">http://tristanedwards.me/sweetalert</a></li>
										<li>Nestable</li>
										<li><a href="http://dbushell.com/">http://dbushell.com/</a></li>
										<li>Slimscroll</li>
										<li><a href="http://rocha.la/jQuery-slimScroll">http://rocha.la/jQuery-slimScroll</a></li>
										<li>Full Calendar</li>
										<li><a href="http://arshaw.com/fullcalendar/">http://arshaw.com/fullcalendar/</a></li>
										
										<li>Bootstrap-timepicker</li>
										<li><a href="http://jdewit.github.com/bootstrap-timepicker">http://jdewit.github.com/bootstrap-timepicker</a></li>
										<li>Bootstrap Colorpicker</li>
										<li><a href="http://www.eyecon.ro/bootstrap-colorpicker">http://www.eyecon.ro/bootstrap-colorpicker</a></li>
										<li>Multi-select</li>
										<li><a href="http://loudev.com/">http://loudev.com/</a></li>
										<li>Select2</li>
										<li><a href="https://select2.github.io/">https://select2.github.io/</a></li>
										<li>Wysihtml5</li>
										<li><a href="https://github.com/xing/wysihtml5">https://github.com/xing/wysihtml5</a></li>
										<li>Datatables</li>
										<li><a href="https://www.datatables.net/">https://www.datatables.net/</a></li>
										<li>Jsgrid</li>
										<li><a href="http://js-grid.com/">http://js-grid.com/</a></li>
										<li>Morris</li>
										<li><a href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a></li>
										<li>Chartjs</li>
										<li><a href="http://chartjs.org/">http://chartjs.org/</a></li>
										<li>Sparkline</li>
										<li><a href="http://omnipotent.net/jquery.sparkline/">http://omnipotent.net/jquery.sparkline/</a>
										</li>
										<li>Google maps</li>
										<li><a href="https://hpneo.github.io/gmaps/">https://hpneo.github.io/gmaps/</a></li>
										<li>Vector Maps</li>
										<li><a href="http://jqvmap.com/">http://jqvmap.com/</a></li>
										<li>Pexels (images)</li>
										<li><a href="https://pexels.com/">https://pexels.com/</a></li>
										<li>Flot-charts</li>
										<li><a href="http://www.flotcharts.org/">http://www.flotcharts.org/</a></li>
										<li>Owl carousel</li>
										<li><a href="http://owlgraphic.com/owlcarousel/"> http://owlgraphic.com/owlcarousel/</a></li>
										<li>Switchery</li>
										<li><a href="https://github.com/abpetkov/switchery"> https://github.com/abpetkov/switchery</a></li>
										<li>Bootstrap select</li>
										<li><a href="https://github.com/silviomoreto/bootstrap-select"> https://github.com/silviomoreto/bootstrap-select</a></li>
										<li>Wysiwig Editor</li>
										<li><a href="http://www.tinymce.com/">http://www.tinymce.com/</a></li>
										<li>Chartist chart</li>
										<li><a href="https://gionkunz.github.io/chartist-js/"> https://gionkunz.github.io/chartist-js/</a></li>
									  </ul>
            
									</div>
								</div>
							</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Support</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="muted">If you have any questions that aren’t covered in this article, please mail us at <a href="mailto:contact@hencework.com">contact@hencework.com</a></p>
									</div>
								</div>
							</div>
					</div>
				</div>				
				<!-- /Row -->
			</div>
			<!-- /Row -->
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Logical Command</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Owl JavaScript -->
	<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
		
	<!-- Data table JavaScript -->
	<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="dist/js/dataTables-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	
</body>

</html>

	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	
</body>

</html>
