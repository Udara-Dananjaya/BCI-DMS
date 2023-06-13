<?php require_once('layout/header.view.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Token Management</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Manage Token</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<div style="text-align: right;">
		<a href="Create_Token"><button class="btn btn-primary">+ Add New Token</button></a>
	</div>
	<br>

	<section class="section dashboard">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Manage Your Token Details</h5>
						<div style="overflow-x:auto;">
							<table class="table datatable table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">Token ID</th>
										<th scope="col">Token</th>
										<th scope="col">Student First Name</th>
										<th scope="col">Student Last Name</th>
										<th scope="col">Email</th>
										<th scope="col">Issued Date</th>
										<th scope="col">Checked Date</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th scope="col">Token ID</th>
										<th scope="col">Token</th>
										<th scope="col">Student First Name</th>
										<th scope="col">Student Last Name</th>
										<th scope="col">Email</th>
										<th scope="col">Issued Date</th>
										<th scope="col">Checked Date</th>
										<th scope="col">Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
									if ($Token_table == false) {
										echo "<tr>";
										echo " <td colspan='15'>- No Data Available In Table -</td>";
										echo "</tr>";
									} else {
										foreach ($Token_table as $value) {
											echo "<tr>";
											echo "<td>{$value->st_id }</td>";
											echo "<td>{$value->token}</td>";
											echo "<td>{$value->first_name}</td>";
											echo "<td>{$value->last_name}</td>";
											echo "<td>{$value->email}</td>";
											echo "<td>{$value->issued_date}</td>";
											echo "<td>{$value->checked_date}</td>";
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