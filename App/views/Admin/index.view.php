<?php require_once('layout/header.view.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Dashboard</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">
		<div class="row">
			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-a">
					<div class="card-body">
						<h5 class="card-title">Users <span>| All</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-people-fill"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['staff'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-b">
					<div class="card-body">
						<h5 class="card-title">Degrees <span>| All</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-gift"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['degree'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-c">
					<div class="card-body">
						<h5 class="card-title">Batches <span>| Today</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-cart-dash"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['batch'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-a">
					<div class="card-body">
						<h5 class="card-title">Courses <span>| All</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-people-fill"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['course'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-b">
					<div class="card-body">
						<h5 class="card-title">Departments <span>| All</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-gift"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['department'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-c">
					<div class="card-body">
						<h5 class="card-title">Students <span>| All</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-cart-dash"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['student'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Latest Student Verification</h5>
						<div style="overflow-x:auto;">
						<table class="table datatable table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">Student Image</th>
										<th scope="col">First Name</th>
										<th scope="col">Last Name</th>
										<th scope="col">E-mail</th>
										<th scope="col">Phone No</th>
										<th scope="col">Issued Date</th>
										<th scope="col">Expiry Date</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th scope="col">Student Image</th>
										<th scope="col">First Name</th>
										<th scope="col">Last Name</th>
										<th scope="col">E-mail</th>
										<th scope="col">Phone No</th>
										<th scope="col">Issued Date</th>
										<th scope="col">Expiry Date</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
									if ($Student_table == false) {
										echo "<tr>";
										echo " <td colspan='7'>- No Data Available In Table -</td>";
										echo "</tr>";
									} else {
										foreach ($Student_table as $value) {
											echo "<tr>";
											echo "<td>{$value->img}</td>";
											echo "<td>{$value->first_name}</td>";
											echo "<td>{$value->last_name}</td>";
											echo "<td>{$value->email}</td>";
											echo "<td>{$value->phone_number}</td>";
											echo "<td>{$value->id_issued_date}</td>";
											echo "<td>{$value->id_expire_date}</td>";
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