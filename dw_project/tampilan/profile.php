<!DOCTYPE html>
<?php
	include_once '../proses/koneksi.php';
	$cari=mysql_query("SELECT *FROM users");
	$tampil=mysql_fetch_array($cari); 
?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Profile</title>
		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../admin/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../admin/assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="../admin/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="../admin/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../admin/assets/css/ace-rtl.min.css" />
		<script src="../admin/assets/js/ace-extra.min.js"></script>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default navbar-collapse h-navbar ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="../admin/index.html" class="navbar-brand">
						<small>
							<i class="fa fa-book"></i>
							Welcome Tutorial Ku
						</small>
					</a>
				</div>
			</div>
		</div>

				
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse  ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="hover">
						<a href="admin.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="hover">
						<a href="tulis.php">
							<i class="menu-icon fa fa-pencil"></i>
							<span class="menu-text"> Tulis </span>
						</a>
						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Postingan </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="diterbitkan.php">
									<i class="menu-icon fa fa-caret-user"></i>
									Diterbitkan
								</a>
								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="draf.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Draf
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text"> Setelan </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="profile.php">
									<i class="menu-icon fa fa-caret-user"></i>
									Profile
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="../proses/logout.php">
									<i class="menu-icon fa fa-caret-user"></i>
									Logout
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->
			</div>

			<div class="main-content">
			<div class="main-content-inner">
			<div class="page-content"><!-- PAGE CONTENT BEGINS -->
				<div class="row">
					<div class="col-xs-12">
						<div id="user-profile-1" class="user-profile row">
							<div class="col-xs-12 col-sm-3 center">
								<div>
									<span class="profile-picture">
										<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="../admin/assets/images/avatars/profile-pic.jpg" />
									</span>
									<div class="space-6"></div>
								</div>

								<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
									<div class="inline position-relative">
										<span class="white"><?php echo $tampil['nama']; ?></span>
									</div>
								</div>	

								<div class="space-6"></div>
									<div class="profile-contact-info">
									<div class="space-6"></div>
										<div class="profile-social-links align-center">
											<a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
												<i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
											</a>

											<a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
												<i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
											</a>

											<a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
												<i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
											</a>
										</div>
									</div>
								</div>

							<div class="col-xs-12 col-sm-9">
							<div class="profile-user-info profile-user-info-striped">
								<div class="profile-info-row">
									<div class="profile-info-name"> Nama </div>
										<div class="profile-info-value">
											<span class="editable" id="username"> <?php echo $tampil['nama']; ?> </span>
										</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Username </div>
										<div class="profile-info-value">
											<span class="editable" id="username"><?php echo $tampil['email']; ?></span>
										</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Location </div>
										<div class="profile-info-value">
											<i class="fa fa-map-marker light-orange bigger-110"></i>
											<span class="editable" id="country"><?php echo $tampil['negara']; ?></span>
											<span class="editable" id="city"><?php echo $tampil['kota']; ?></span>
										</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Age </div>
										<div class="profile-info-value">
											<span class="editable" id="age"><?php echo $tampil['umur']; ?></span>
										</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> About Me </div>
										<div class="profile-info-value">
											<span class="editable" id="about"><?php echo $tampil['tentang']; ?></span>
										</div>
								</div>
							</div>
						</div>
						</div>
					</div>
			</div><!-- PAGE CONTENT CLOSE -->
			</div>
			</div>

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
							&copy; 2017
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<script src="../admin/assets/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../admin/assets/js/bootstrap.min.js"></script>
		<script src="../admin/assets/js/ace-elements.min.js"></script>
		<script src="../admin/assets/js/ace.min.js"></script>

		<script src="../admin/assets/js/jquery-ui.custom.min.js"></script>
		<script src="../admin/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../admin/assets/js/jquery.gritter.min.js"></script>
		<script src="../admin/assets/js/bootbox.js"></script>
		<script src="../admin/assets/js/jquery.easypiechart.min.js"></script>
		<script src="../admin/assets/js/bootstrap-datepicker.min.js"></script>
		<script src="../admin/assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="../admin/assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="../admin/assets/js/select2.min.js"></script>
		<script src="../admin/assets/js/spinbox.min.js"></script>
		<script src="../admin/assets/js/bootstrap-editable.min.js"></script>
		<script src="../admin/assets/js/ace-editable.min.js"></script>
		<script src="../admin/assets/js/jquery.maskedinput.min.js"></script>

	</body>
</html>
