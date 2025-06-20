<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Title -->
	 <title>Success | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>

</head>
<body class="account-page">
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">

    <div class="account-content">
			<div class="d-flex flex-wrap w-100 vh-100 overflow-hidden account-bg-04">
                <div class="d-flex align-items-center justify-content-center flex-wrap vh-100 overflow-auto p-4 w-50 bg-backdrop">
                    <form action="<?php echo base_url();?>success">
                        <div class="mx-auto mw-450">
                            <div class="text-center mb-4">
								<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
							</div>
                           	<div class="text-center mb-3">
                           		<span class="avatar avatar-xl rounded-circle bg-success mb-4"><i class="ti ti-check fs-26"></i></span>
                               	<h4 class="mb-2 fs-20">Success</h4>
                               	<p class="mb-0">Your Passwrod Reset Successfully!</p>
                           	</div>
                           <div class="mb-3">
                                <a href="<?php echo base_url();?>login" class="btn btn-primary w-100">Back to Login</a>
                            </div>
							<div class="text-center">
                                <p class="fw-medium text-gray">Copyright &copy; 2024 - CRMS</p>
                            </div>
                       </div>
                    </form>
                </div>
            </div>
		</div>

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

</body>
</html>