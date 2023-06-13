<?php require_once('layout/header.view.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Award Management</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Manage Award</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<div style="text-align: right;">
		<a href="Create_Award"><button class="btn btn-primary">+ Add New Award</button></a>
	</div>
	<br>

	<section class="section dashboard">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Manage Your Award Details</h5>
						<div style="overflow-x:auto;">
						<table class="table datatable table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">Award ID</th>
										<th scope="col">Award</th>
										<th scope="col">Award Type</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th scope="col">Award ID</th>
										<th scope="col">Award</th>
										<th scope="col">Award Type</th>
										<th scope="col">Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
									if ($Award_table == false) {
										echo "<tr>";
										echo " <td colspan='4'>- No Data Available In Table -</td>";
										echo "</tr>";
									} else {
										foreach ($Award_table as $value) {
											echo "<tr>";
											echo "<td>{$value->award_id}</td>";
											echo "<td>{$value->award_type}</td>";
											echo "<td>{$value->award_name}</td>";
											echo "<td><a href='" . BASE . "Admin/Update_Award?id={$value->award_id}'><i class='bi bi-pencil'></i></a>
													| <a onclick='return confirm(\"Are you sure want to Delete ?\")' href='" . BASE . "Admin/Manage_Award?id={$value->award_id}&delete=true'><i class='bi bi-trash3-fill'></i></a>
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