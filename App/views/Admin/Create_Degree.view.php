<?php require_once('layout/header.view.php'); ?>
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Create Degree</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Create Degree</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Create the Degree</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">

							<div class="col-12">
								<label for="inputDegree" class="form-label">Degree</label>
								<input type="text" class="form-control" name="inputDegree" id="inputDegree" required>
							</div>
							<div class="col-12">
								<label for="inputDepartment" class="form-label">Department</label>
								<select name="inputDepartment"  class="form-control" required>
                                    <option class="form-control" selected="">Select Department</option>
                                    <option> </option>
                                </select>
							</div>
							<div class="col-12">
								<label for="inputCordinator" class="form-label">Cordinator</label>
								<select name="inputCordinator"  class="form-control" required>
                                    <option class="form-control" selected="">Select Cordinator</option>
                                    <option> </option>
                                </select>
							</div>
							<div class="col-12">
								<label for="inputDuration" class="form-label">Duration</label>
								<input type="number" class="form-control" name="inputDuration" id="inputDuration" required>
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