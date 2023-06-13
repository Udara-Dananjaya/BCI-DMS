<?php require_once('layout/header.view.php'); ?>
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Create Semester</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Create Semester</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Create the Semester</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">

							<div class="col-12">
								<label for="inputYear" class="form-label">Semester</label>
								<input type="text" class="form-control" name="inputYear" id="inputYear">
							</div>
							<div class="col-12">
								<label for="inputStart" class="form-label">Start Date</label>
								<input type="date" class="form-control" name="inputStart" id="inputStart">
							</div>
							<div class="col-12">
								<label for="inputEnd" class="form-label">End Date</label>
								<input type="date" class="form-control" name="inputEnd" id="inputEnd">
							</div>
							
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Submit</button>
                                <a href="Manage_Semester"><button class="btn btn-secondary">Cancel</button></a>
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