<?php require_once('layout/header.view.php'); ?>
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Update student</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Update student</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Update the student</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">
							<div class="col-12">
								<label for="inputId" class="form-label">student ID</label>
								<input type="hidden" name="inputId" value="<?= $Manage_student->student_id ?>">
								<input type="text" class="form-control" id="inputId" disabled value="<?= $Manage_student->student_id  ?>">
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
								<label for="inputMobile" class="form-label">Mobile</label>
								<input type="tele" class="form-control" name="inputMobile" id="inputMobile">
							</div>
							<div class="col-12">
								<label for="inputDob" class="form-label">Date of Birth</label>
								<input type="date" class="form-control" name="inputDob" id="inputDob">
							</div>
							<div class="col-12">
								<label for="inputGender" class="form-label">Gender</label>
								<div class="col-12">
									<select class="form-select" aria-label="Default select example" name="inputGender" required>
									<option disabled selected>Select </option>
									<option selected value="Male">Male</option>
									<option selected value="Female">Female</option>
									</select>
								</div>
							</div>
                            <div class="col-12">
								<label for="inputNic" class="form-label">NIC</label>
								<input type="number" class="form-control" name="inputNic" id="inputNic">
							</div>
							<div class="col-12">
								<label for="inputIssued" class="form-label">ID Issued Date</label>
								<input type="date" class="form-control" name="inputIssued" id="inputIssued">
							</div>
                            <div class="col-12">
								<label for="inputExpiry" class="form-label">ID Expiry Date</label>
								<input type="date" class="form-control" name="inputExpiry" id="inputExpiry">
							</div>
                            <div class="col-12">
								<label for="inputYear" class="form-label">School Year</label>
								<input type="number" class="form-control" name="inputYear" id="inputYear">
							</div>
							<div class="col-12">
								<label for="inputGraduation" class="form-label">Graduation Year</label>
								<input type="number" class="form-control" name="inputGraduation" id="inputGraduation">
							</div>
                            <div class="col-12">
								<label for="inputToken" class="form-label">Token</label>
								<input type="file" class="form-control" name="inputToken" id="inputToken">
							</div>
							<div class="col-12">
								<label for="inputImage" class="form-label">Student Image</label>
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