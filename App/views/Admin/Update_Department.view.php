<?php require_once('layout/header.view.php'); ?>
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Update Department</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Update Department</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Update the Department</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">
							<div class="col-12">
								<label for="inputId" class="form-label">Department ID</label>
								<input type="hidden" name="inputId" value="<?= $Manage_Department->department_id ?>">
								<input type="text" class="form-control" id="inputId" disabled value="<?= $Manage_Department->department_id  ?>">
							</div>
							<div class="col-12">
								<label for="inputDepartment" class="form-label">Department Name</label>
								<input type="text" class="form-control" name="inputDepartment" id="inputDepartment">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Submit</button>
								<a href="Manage_Degree"><button class="btn btn-secondary">Cancel</button></a>
							</div>
						</form>
						<!-- Vertical Form -->
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- End #main -->
<?php require_once('layout/footer.view.php'); ?>