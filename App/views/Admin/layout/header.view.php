<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title><?= $page ?> - <?= CONFIG['app_name'] ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<link href="<?= BASE ?>assets/img/favicon.png" rel="icon">
	<link href="<?= BASE ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="<?= BASE ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= BASE ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= BASE ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= BASE ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="<?= BASE ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="<?= BASE ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= BASE ?>assets/vendor/datatables/datatables.css" rel="stylesheet">
	<link href="<?= BASE ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
	<header id="header" class="header fixed-top d-flex align-items-center">
		<div class="d-flex align-items-center justify-content-between">
			<a href="index.html" class="logo d-flex align-items-center">
				<img src="<?= BASE ?>assets/img/logo.png" alt="">
				<span class="d-none d-lg-block">Data Management</span>
			</a>
			<i class="bi bi-list toggle-sidebar-btn"></i>
		</div><!-- End Logo -->
		<nav class="header-nav ms-auto">
			<ul class="d-flex align-items-center">
				<li class="nav-item dropdown pe-3">
					<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
						<img src="<?= BASE ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
						<span class="d-none d-md-block dropdown-toggle ps-2"><?= $User ?></span>
					</a><!-- End Profile Iamge Icon -->
					<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
						<!-- <li class="dropdown-header">
							<h6><?= $User ?></h6>
							<span>Web Designer</span>
						</li> 
						<li>
							<hr class="dropdown-divider">
						</li>-->
						<li>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<i class="bi bi-box-arrow-right"></i>
								<span>Sign Out</span>
							</a>
						</li>
					</ul><!-- End Profile Dropdown Items -->
				</li><!-- End Profile Nav -->
			</ul>
		</nav><!-- End Icons Navigation -->
	</header><!-- End Header -->
	<!-- ======= Sidebar ======= -->
	<aside id="sidebar" class="sidebar">
		<ul class="sidebar-nav" id="sidebar-nav">
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Dashboard") ? "" : "collapsed"; ?>" href="<?= BASE ?>Admin/index">
					<i class="bi bi-grid"></i>
					<span>Dashboard</span>
				</a>
			</li><!-- End Dashboard Nav -->
	
			<li class="nav-heading">Staff Management</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Outlook Staff") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Outlook_Staff">
					<i class="bi bi-person"></i>
					<span>Outlook Staff</span>
				</a>
			</li><!-- End Profile Page Nav -->
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Manage Staff") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Manage_Staff">
					<i class="bi bi-person"></i>
					<span>Manage Staff</span>
				</a>
			</li><!-- End Profile Page Nav -->

			<li class="nav-heading">Department Management</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Outlook_Department">
					<i class="bi bi-person"></i>
					<span>Outlook Department</span>
				</a>
			</li><!-- End Profile Page Nav -->
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Manage Department") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Manage_Department">
					<i class="bi bi-person"></i>
					<span>Manage Department</span>
				</a>
			</li><!-- End Profile Page Nav -->
			</li><!-- End Profile Page Nav -->

			<li class="nav-heading">Degree Management</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Outlook Degree") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Outlook_Degree">
					<i class="bi bi-person"></i>
					<span>Outlook Degree</span>
				</a>
			</li><!-- End Profile Page Nav -->
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Manage Degree") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Manage_Degree">
					<i class="bi bi-person"></i>
					<span>Manage Degree</span>
				</a>
			</li><!-- End Profile Page Nav -->

			<li class="nav-heading">Batch Management</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Outlook Batch") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Outlook_Batch">
					<i class="bi bi-person"></i>
					<span>Outlook Batch</span>
				</a>
			</li><!-- End Profile Page Nav -->
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Manage Batch") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Manage_Batch">
					<i class="bi bi-person"></i>
					<span>Manage Batch</span>
				</a>
			</li><!-- End Profile Page Nav -->

			<li class="nav-heading">Semester Management</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Outlook Semester") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Outlook_Semester">
					<i class="bi bi-person"></i>
					<span>Outlook Semester</span>
				</a>
			</li><!-- End Profile Page Nav -->
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Manage Semester") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Manage_Semester">
					<i class="bi bi-person"></i>
					<span>Manage Semester</span>
				</a>
			</li><!-- End Profile Page Nav -->

			<li class="nav-heading">Course Management</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Outlook Course") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Outlook_Course">
					<i class="bi bi-person"></i>
					<span>Outlook Course</span>
				</a>
			</li><!-- End Profile Page Nav -->
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Manage Course") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Manage_Course">
					<i class="bi bi-person"></i>
					<span>Manage Course</span>
				</a>
			</li><!-- End Profile Page Nav -->

			<li class="nav-heading">Award Management</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Outlook Award") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Outlook_Award">
					<i class="bi bi-person"></i>
					<span>Outlook Award</span>
				</a>
			</li><!-- End Profile Page Nav -->
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Manage Award") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Manage_Award">
					<i class="bi bi-person"></i>
					<span>Manage Award</span>
				</a>
			</li><!-- End Profile Page Nav -->

			<li class="nav-heading">Student Management</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Outlook Student") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Outlook_Student">
					<i class="bi bi-person"></i>
					<span>Outlook Student</span>
				</a>
			</li><!-- End Profile Page Nav -->
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Manage Student") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Manage_Student">
					<i class="bi bi-person"></i>
					<span>Manage Student</span>
				</a>
			</li><!-- End Profile Page Nav -->

			<li class="nav-heading">Profile Setting</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Profile") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Profile">
					<i class="bi bi-person"></i>
					<span>Profile</span>
				</a>
			</li><!-- End Profile Page Nav -->
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Settings") ? "" : "collapsed"; ?>"  href="<?= BASE ?>Admin/Settings">
					<i class="bi bi-person"></i>
					<span>Settings</span>
				</a>
			</li><!-- End Profile Page Nav -->

			<li class="nav-heading">Authentication</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Log Out") ? "" : "collapsed"; ?>" href="<?= BASE ?>Admin/Logout">
					<i class="bi bi-box-arrow-in-right"></i>
					<span>Log Out</span>
				</a>
			</li><!-- End Login Page Nav -->
		</ul>
	</aside><!-- End Sidebar-->