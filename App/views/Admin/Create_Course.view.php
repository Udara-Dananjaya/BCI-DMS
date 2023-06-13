<?php require_once('layout/header.view.php'); ?>
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Create Course</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Create Course</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Create the Course</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">

							<div class="col-12">
								<label for="inputCourse" class="form-label">Course Name</label>
								<input type="text" class="form-control" name="inputCourse" id="inputYear">
							</div>
							<div class="col-12">
								<label for="inputDescription" class="form-label">Course Description</label>
								<textarea  class="form-control" id="inputDescription" name="inputDescription" rows="4" cols="50"></textarea>
							</div>
							<div class="col-12">
								<label for="inputCredits" class="form-label">Course Credits</label>
								<input type="number" class="form-control" name="inputCredits" id="inputCredits">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Submit</button>
                                <a href="Manage_Course"><button class="btn btn-secondary">Cancel</button></a>
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