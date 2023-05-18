<?php require_once('layout/header.view.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Degree Management</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Manage Degree</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<div style="text-align: right;">
		<a href="Create_Degree"><button class="btn btn-primary">+ Add New Degree</button></a>
	</div>
	<br>

	<section class="section dashboard">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Manage Your Degree Details</h5>
						<div style="overflow-x:auto;">
							<table class="table datatable table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">Degree ID</th>
										<th scope="col">Degree</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th scope="col">Degree ID</th>
										<th scope="col">Degree</th>
										<th scope="col">Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
									if ($Degree_table == false) {
										echo "<tr>";
										echo " <td colspan='3'>- No Data Available In Table -</td>";
										echo "</tr>";
									} else {
										foreach ($Degree_table as $value) {
											echo "<tr>";
											echo "<td>{$value->degree_id}</td>";
											echo "<td>{$value->degree_name}</td>";
											echo "<td><a href='" . BASE . "Admin/Update_Degree?id={$value->degree_id}'><i class='bi bi-pencil'></i></a>
													| <a onclick='return confirm(\"Are you sure want to Delete ?\")' href='" . BASE . "Admin/Manage_Degree?id={$value->degree_id}&delete=true'><i class='bi bi-trash3-fill'></i></a>
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