<?php require_once('layout/header.view.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Semester Management</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Manage Semester</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">
		<div class="row justify-content-left">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Select Degree</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">

							<div class="col-12">
								<label for="inputDegree" class="form-label">Degree</label>
								<input type="text" class="form-control" name="inputDegree" id="inputDegree">
							</div>
						</form>
						<!-- Vertical Form -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<div style="text-align: right;">
		<a href="Create_Semester"><button class="btn btn-primary">+ Add New Semester</button></a>
	</div>
	<br>

	<section class="section dashboard">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Manage Your Semester Details</h5>
						<div style="overflow-x:auto;">
							<table class="table datatable table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">Semester ID</th>
										<th scope="col">Semester Name</th>
										<th scope="col">Start Date</th>
										<th scope="col">End Date</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th scope="col">Semester ID</th>
										<th scope="col">Semester Name</th>
										<th scope="col">Start Date</th>
										<th scope="col">End Date</th>
										<th scope="col">Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
									if ($Semester_table == false) {
										echo "<tr>";
										echo " <td colspan='5'>- No Data Available In Table -</td>";
										echo "</tr>";
									} else {
										foreach ($Semester_table as $value) {
											echo "<tr>";
											echo "<td>{$value->semester_id}</td>";
											echo "<td>{$value->name}</td>";
											echo "<td>{$value->start_date}</td>";
											echo "<td>{$value->end_date}</td>";
											echo "<td><a href='" . BASE . "Admin/Update_Semester?id={$value->semester_id}'><i class='bi bi-pencil'></i></a>
													| <a onclick='return confirm(\"Are you sure want to Delete ?\")' href='" . BASE . "Admin/Manage_Semester?id={$value->semester_id}&delete=true'><i class='bi bi-trash3-fill'></i></a>
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