<?php require_once('layout/header.view.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Batch Management</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Manage Batch</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<div style="text-align: right;">
		<a href="Create_Batch"><button class="btn btn-primary">+ Add New Batch</button></a>
	</div>
	<br>

	<section class="section dashboard">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Manage Your Batch Details</h5>
						<div style="overflow-x:auto;">
							<table class="table datatable table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">Batch ID</th>
										<th scope="col">Batch Year</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th scope="col">Batch ID</th>
										<th scope="col">Batch Year</th>
										<th scope="col">Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
									if ($Batch_table == false) {
										echo "<tr>";
										echo " <td colspan='3'>- No Data Available In Table -</td>";
										echo "</tr>";
									} else {
										foreach ($Batch_table as $value) {
											echo "<tr>";
											echo "<td>{$value->batch_id}</td>";
											echo "<td>{$value->batch_year}</td>";
											echo "<td><a href='" . BASE . "Admin/Update_Batch?id={$value->batch_id}'><i class='bi bi-pencil'></i></a>
													| <a onclick='return confirm(\"Are you sure want to Delete ?\")' href='" . BASE . "Admin/Manage_Batch?id={$value->batch_id}&delete=true'><i class='bi bi-trash3-fill'></i></a>
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