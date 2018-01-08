<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Update New Konten</title>
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
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<form method="POST" action="../proses/insert.php">
								<!-- PAGE CONTENT BEGINS -->
								<div class="col-sm-10">
									<label>Label</label>
									<span class="input-icon">
										<input type="text" name="label" id="form-field-icon-1" />
										<i class="ace-icon fa fa-tags blue"></i>
									</span>
									<label><b>Judul</b></label>
									<span class="input-icon">
										<input type="text" name="judul" id="form-field-icon-1" placeholder="Judul" />
										<i class="ace-icon fa fa-bookmark"></i>
									<span class="input-icon">
								</div>
								<div class="widget-toolbox padding-4 clearfix">
									<div class="btn-group pull-right">
										<button class="btn btn-sm btn-danger btn-white btn-round" name="save">
											<i class="ace-icon fa fa-floppy-o bigger-125"></i>
												Save
										</button>

										<button class="btn btn-sm btn-success btn-white btn-round" name="publish">
											<i class="ace-icon fa fa-globe bigger-125"></i>
												Publish
											<i class="ace-icon fa fa-arrow-right icon-on-right bigger-125"></i>
										</button>
									</div>
								</div>
								<div class="space-6"></div>
								<div>
									<textarea class="ckeditor" name="data"></textarea>
								</div>
								<div class="hr hr-double dotted"></div>
								</form>
							</div>
						</div><!-- /.row -->
					</div><!-- /.page-content -->
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
		<script src="ckeditor/ckeditor.js"></script>
		<script src="../admin/assets/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../admin/assets/js/bootstrap.min.js"></script>
		<script src="../admin/assets/js/ace-elements.min.js"></script>
		<script src="../admin/assets/js/ace.min.js"></script>
		
		<!-- page specific plugin scripts -->


	</body>
</html>
