<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title>UI Stickynote| CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
       <!-- Sticky CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/stickynote/sticky.css">
    </head>
    <body>
	<div id="global-loader" >
            <div class="whirly-loader"> </div>
        </div>
        <!-- Main Wrapper -->
        <div class="main-wrapper">

		<?= $this->include('partials/menu') ?>
		<div class="page-wrapper cardhead">
			<div class="content ">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Sticky Note</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">

					<!-- Sticky -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Sticky Note <a class="btn btn-primary float-sm-end m-l-10" id="add_new" href="javascript:void(0);">Add New Note</a></h5>
							</div>
							<div class="card-body">
								<div class="sticky-note" id="board"></div>
							</div>
						</div>
					</div>
					<!-- /Sticky -->

				</div>

			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>
	<!-- Stickynote JS -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/stickynote/sticky.js"></script>
</body>

</html>