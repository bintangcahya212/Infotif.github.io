<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">



		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Sidebar Toggler (Sidebar) -->
			<!-- Divider -->



			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-store"></i>


				</div>
				<div class="sidebar-brand-text ">InfoTIF</div>
			</a>


			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('dashboard'); ?>">
					<i class="fas fa-home"></i>
					<span>Home</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">


			<!-- Nav Item - Pages Collapse Menu -->


			<!-- Nav Item - Charts -->
			<li class="nav-item active">
				<a class="nav-link" href=" <?= site_url('Event'); ?>">
					<i class="fab fa-elementor"></i>
					<span>Event</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">



			<!-- Nav Item - Tables -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('Gmaps'); ?>">
					<i class="fas fa-info-circle"></i>
					<span>About Us</span></a>
			</li>

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

					<!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="<?= site_url('dashboard/search') ?>" method="get">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="keyword">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>


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
