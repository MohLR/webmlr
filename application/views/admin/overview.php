<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="sb-nav-fixed">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="layoutSidenav">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid">

			<!-- 
			karena ini halaman overview (home), kita matikan partial breadcrumb.
			Jika anda ingin mengampilkan breadcrumb di halaman overview,
			silahkan hilangkan komentar (//) di tag PHP di bawah.
			-->
			<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

			<!-- Icon Cards-->
			<div class="row">
				<div class="col-xl-3 col-md-6">
					<div class="card bg-primary text-white mb-4">
						<div class="card-body">Primary Card</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link" href="#">View Details</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card bg-warning text-white mb-4">
						<div class="card-body">Warning Card</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link" href="#">View Details</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card bg-success text-white mb-4">
						<div class="card-body">Success Card</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link" href="#">View Details</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card bg-danger text-white mb-4">
						<div class="card-body">Danger Card</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link" href="#">View Details</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>
			</div>

		<!-- Chart Example-->
		<div class="row">
			<div class="col-xl-6">
				<div class="card mb-4">
					<div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
					<div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="card mb-4">
					<div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
					<div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
				</div>
			</div>
		</div>
		
		</div>
		<!-- /.container-fluid -->
		</main>
		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->
</div>
</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
