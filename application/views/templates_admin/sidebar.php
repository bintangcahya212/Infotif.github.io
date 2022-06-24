<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">



		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Sidebar Toggler (Sidebar) -->
			<!-- Divider -->



			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon ">

					<div class="sidebar-brand-text ">Admin</div>

				</div>

			</a>


			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('admin/dashboard_admin'); ?>">

					<span>Content</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">


			<!-- Nav Item - Pages Collapse Menu -->


			<!-- Nav Item - Charts -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('admin/event'); ?>">
					<span>Event</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('admin/data'); ?>">
					<span>Participant</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">





			<hr class="sidebar-divider d-none d-md-block">
			<div class="text-center d-none d-md-inline">


				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>




		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>



					<!-- Topbar Navbar -->
					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">



						<a class="dropdown-item" href="<?= site_url('login'); ?>">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Logout
						</a>

						</li>

					</ul>


				</nav>
				<!-- End of Topbar -->
