<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Title -->
     <title>Forgot Password  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	

<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body class="account-page">
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<div class="account-content">
			<div class="d-flex flex-wrap w-100 vh-100 overflow-hidden account-bg-03">
                <div class="d-flex align-items-center justify-content-center flex-wrap vh-100 overflow-auto p-4 w-50 bg-backdrop">
                    <form action="<?php echo base_url();?>login" class="flex-fill">
                        <div class="mx-auto mw-450">
                            <div class="text-center mb-4">
                               <img src="<?php echo base_url();?>assets/img/logo.svg" class="img-fluid" alt="Logo">
                            </div>
                            <div class="mb-4">
                                <h4 class="mb-2 fs-20">Forgot Password?</h4>
                                <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Email Address</label>
                                <div class="position-relative">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-mail"></i>
                                    </span>
                                    <input type="text" value="" class="form-control">
                                </div>
                             </div>
                            <div class="mb-3">
                               <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                            <div class="mb-3 text-center">
                               <h6>Return to <a href="<?php echo base_url();?>login" class="text-purple link-hover"> Login</a></h6>
                            </div>
                            <div class="form-set-login or-text mb-3">
                               <h4>OR</h4>
                            </div>
                            <div class="d-flex align-items-center justify-content-center flex-wrap mb-3">
                                <div class="text-center me-2 flex-fill">
                                    <a href="javascript:void(0);" class="br-10 p-2 px-4 btn bg-pending  d-flex align-items-center justify-content-center">
                                        <img class="img-fluid m-1" src="<?php echo base_url();?>assets/img/icons/facebook-logo.svg" alt="Facebook">
                                    </a>
                                </div>
                                <div class="text-center me-2 flex-fill">
                                    <a href="javascript:void(0);" class="br-10 p-2 px-4 btn bg-white d-flex align-items-center justify-content-center">
                                        <img class="img-fluid  m-1" src="<?php echo base_url();?>assets/img/icons/google-logo.svg" alt="Facebook">
                                    </a>
                                </div>
                                <div class="text-center flex-fill">
                                    <a href="javascript:void(0);" class="bg-dark br-10 p-2 px-4 btn btn-dark d-flex align-items-center justify-content-center">
                                        <img class="img-fluid  m-1" src="<?php echo base_url();?>assets/img/icons/apple-logo.svg" alt="Apple">
                                    </a>
                                </div>
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