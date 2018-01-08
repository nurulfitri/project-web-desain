<?php
include_once '../proses/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>New Update</title>
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
								<h3 class="header smaller lighter blue">Diterbitkan</h3>
								<div>
									<table id="diterbitkan" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>Judul</th>
												<th>Label</th>
												<th>
													<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Tanggal
												</th>
												<th>Data</th>
												<th></th>
											</tr>
										</thead>

										<tbody>
											
											<?php
											$cari=mysql_query("SELECT *FROM tutorial");
											while ($tampil=mysql_fetch_array($cari)) {
											?>
											<tr>
											<td><?php echo $tampil['judul']; ?></td>
											<td><?php echo $tampil['label']; ?></td>
											<td><?php echo $tampil['tanggal'];?></td>
											<td><?php echo $tampil['data'];?></td>
											<td>
												<div class="hidden-sm hidden-xs action-buttons">

													<a class="green" href="edit.php?ID=<?php echo $tampil['id_tutorial'];?>">
														<i class="ace-icon fa fa-pencil bigger-130"></i>
													</a>

													<a class="red" href="../proses/hapuspost.php?ID=<?php echo $tampil['id_tutorial'];?>">
														<i class="ace-icon fa fa-trash-o bigger-130"></i>
													</a>
												</div>
											</td>
											</tr>
											<?php
											}

											?>	
										</tbody>
									</table>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
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

		<script src="../admin/assets/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../admin/assets/js/bootstrap.min.js"></script>
		<script src="../admin/assets/js/ace-elements.min.js"></script>
		<script src="../admin/assets/js/ace.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="../admin/assets/js/jquery.dataTables.min.js"></script>
		<script src="../admin/assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="../admin/assets/js/dataTables.buttons.min.js"></script>
		<script src="../admin/assets/js/buttons.flash.min.js"></script>
		<script src="../admin/assets/js/buttons.html5.min.js"></script>
		<script src="../admin/assets/js/buttons.print.min.js"></script>
		<script src="../admin/assets/js/buttons.colVis.min.js"></script>
		<script src="../admin/assets/js/dataTables.select.min.js"></script>
		<!-- inline scripts related to this page -->
		<script>
		$(function(){
			$('#diterbitkan').DataTable({
				'pagging'	:true,
				'lengthChange': true,
				'searching': true,
				'ordering': true,
				'info':true,
				'autoWidth': true
			})
		})
		</script>

	</body>
</html>
