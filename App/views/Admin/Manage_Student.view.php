<?php require_once('layout/header.view.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Student Management</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Manage Student</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<div style="text-align: right;">
		<a href="Create_Student"><button class="btn btn-primary">+ Add New Student</button></a>
	</div>
	<br>

	<section class="section dashboard">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Manage Your Student Details</h5>
						<div style="overflow-x:auto;">
							<table class="table datatable table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">Student ID</th>
										<th scope="col">Student No</th>
										<th scope="col">First Name</th>
										<th scope="col">Last Name</th>
										<th scope="col">Email</th>
										<th scope="col">Mobile</th>
										<th scope="col">Date of Birth</th>
										<th scope="col">Gender</th>
										<th scope="col">NIC</th>
										<th scope="col">ID Issued Date</th>
										<th scope="col">ID Expiry Date</th>
										<th scope="col">School Year</th>
										<th scope="col">Graduation Year</th>
										<th scope="col">Token</th>
										<th scope="col">Student Image</th>
										<th scope="col">Degree</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th scope="col">Student ID</th>
										<th scope="col">Student No</th>
										<th scope="col">First Name</th>
										<th scope="col">Last Name</th>
										<th scope="col">Email</th>
										<th scope="col">Mobile</th>
										<th scope="col">Date of Birth</th>
										<th scope="col">Gender</th>
										<th scope="col">NIC</th>
										<th scope="col">ID Issued Date</th>
										<th scope="col">ID Expiry Date</th>
										<th scope="col">School Year</th>
										<th scope="col">Graduation Year</th>
										<th scope="col">Token</th>
										<th scope="col">Student Image</th>
										<th scope="col">Degree</th>
										<th scope="col">Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
									if ($Student_table == false) {
										echo "<tr>";
										echo " <td colspan='15'>- No Data Available In Table -</td>";
										echo "</tr>";
									} else {
										foreach ($Student_table as $value) {
											echo "<tr>";
											echo "<td>{$value->student_id }</td>";
											echo "<td>{$value->student_no }</td>";
											echo "<td>{$value->first_name}</td>";
											echo "<td>{$value->last_name}</td>";
											echo "<td>{$value->email}</td>";
											echo "<td>{$value->phone_number}</td>";
											echo "<td>{$value->dob}</td>";
											echo "<td>{$value->gender}</td>";
											echo "<td>{$value->nic}</td>";
											echo "<td>{$value->id_issued_date}</td>";
											echo "<td>{$value->id_expire_date}</td>";
											echo "<td>{$value->year_in_school}</td>";
											echo "<td>{$value->graduation_year}</td>";
											echo "<td>{$value->token}</td>";
											echo "<td>{$value->img}</td>";
											echo "<td>{$value->deg_name}</td>";
											echo "<td><a href='" . BASE . "Admin/Update_Student?id={$value->student_id}'><i class='bi bi-pencil'></i></a>
													| <a onclick='return confirm(\"Are you sure want to Delete ?\")' href='" . BASE . "Admin/Manage_Student?id={$value->student_id}&delete=true'><i class='bi bi-trash3-fill'></i></a>
											</td>";
											echo "</tr>";
										}
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- End #main -->
<?php require_once('layout/footer.view.php'); ?>