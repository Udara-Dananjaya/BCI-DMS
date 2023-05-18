<?php require_once('layout/header.view.php'); ?>
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Update Staff</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Update Staff</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Update the Staff</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">
							<div class="col-12">
								<label for="inputId" class="form-label">Staff ID</label>
								<input type="hidden" name="inputId" value="<?= $Manage_Staff->staff_id ?>">
								<input type="text" class="form-control" id="inputId" disabled value="<?= $Manage_Staff->staff_id  ?>">
							</div>
							<div class="col-12">
								<label for="inputFirst" class="form-label">First Name</label>
								<input type="text" class="form-control" name="inputFirst" id="inputFirst">
							</div>
                            <div class="col-12">
								<label for="inputLast" class="form-label">Last Name</label>
								<input type="text" class="form-control" name="inputLast" id="inputLast">
							</div>
                            <div class="col-12">
								<label for="inputEmail" class="form-label">Email</label>
								<input type="email" class="form-control" name="inputEmail" id="inputEmail">
							</div>
							<div class="col-12">
								<label for="inputPassword" class="form-label">Password</label>
								<input type="password" class="form-control" name="inputPassword" id="inputPassword">
							</div>
                            <div class="col-12">
								<label for="inputMobile" class="form-label">Mobile</label>
								<input type="tele" class="form-control" name="inputMobile" id="inputMobile">
							</div>
							<div class="col-12">
								<label for="inputOffice" class="form-label">Office Mobile</label>
								<input type="tele" class="form-control" name="inputOffice" id="inputOffice">
							</div>
                            <div class="col-12">
								<label for="inputEducation" class="form-label">Education</label>
								<input type="text" class="form-control" name="inputEducation" id="inputEducation">
							</div>
                            <div class="col-12">
								<label for="inputExperience" class="form-label">Experience</label>
								<input type="text" class="form-control" name="inputExperience" id="inputExperience">
							</div>
                            <div class="col-12">
								<label for="inputImage" class="form-label">User Image</label>
								<input type="file" class="form-control" name="inputImage" id="inputImage">
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