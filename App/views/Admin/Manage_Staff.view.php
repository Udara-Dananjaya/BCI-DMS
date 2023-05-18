<?php require_once('layout/header.view.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Staff Management</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Manage Staff</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<div style="text-align: right;">
		<a href="Create_Staff"><button class="btn btn-primary">+ Add New Staff</button></a>
	</div>
	<br>

	<section class="section dashboard">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Manage Your Staff Details</h5>
						<div style="overflow-x:auto;">
							<table class="table datatable table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">Staff ID</th>
										<th scope="col">First Name</th>
										<th scope="col">Last Name</th>
										<th scope="col">Email</th>
										<th scope="col">Mobile</th>
										<th scope="col">Office Mobile</th>
										<th scope="col">Education</th>
										<th scope="col">Experience</th>
										<th scope="col">User Image</th>
										<th scope="col">User Type</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th scope="col">Staff ID</th>
										<th scope="col">First Name</th>
										<th scope="col">Last Name</th>
										<th scope="col">Email</th>
										<th scope="col">Mobile</th>
										<th scope="col">Office Mobile</th>
										<th scope="col">Education</th>
										<th scope="col">Experience</th>
										<th scope="col">User Image</th>
										<th scope="col">User Type</th>
										<th scope="col">Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
									if ($Staff_table == false) {
										echo "<tr>";
										echo " <td colspan='11'>- No Data Available In Table -</td>";
										echo "</tr>";
									} else {
										foreach ($Staff_table as $value) {
											echo "<tr>";
											echo "<td>{$value->staff_id}</td>";
											echo "<td>{$value->first_name}</td>";
											echo "<td>{$value->last_name}</td>";
											echo "<td>{$value->email}</td>";
											echo "<td>{$value->phone_number}</td>";
											echo "<td>{$value->office_number}</td>";
											echo "<td>{$value->education}</td>";
											echo "<td>{$value->experience}</td>";
											echo "<td>{$value->img}</td>";
											echo "<td>{$value->usertype}</td>";
											echo "<td><a href='" . BASE . "Admin/Update_Staff?id={$value->staff_id}'><i class='bi bi-pencil'></i></a>
													| <a onclick='return confirm(\"Are you sure want to Delete ?\")' href='" . BASE . "Admin/Manage_Staff?id={$value->staff_id}&delete=true'><i class='bi bi-trash3-fill'></i></a>
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