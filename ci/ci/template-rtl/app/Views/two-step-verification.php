<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
	<title>Two Step Verification | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
    <!-- Mobile CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/intltelinput/css/intlTelInput.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/intltelinput/css/demo.css">

</head>
<body class="account-page">
    
    <!-- Main Wrapper -->
    <div class="main-wrapper">

    <div class="account-content">
            <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden account-bg-04">
                <div class="d-flex align-items-center justify-content-center flex-wrap vh-100 overflow-auto p-4 w-50 bg-backdrop">
                    <form method="get" class="digit-group login-form-control" data-group-name="digits" data-autosubmit="false" autocomplete="off" action="<?php echo base_url();?>deals-dashboard">
                        <div class="mx-auto mw-450">
                            <div class="text-center mb-4">
								<img src="<?php echo base_url();?>assets/img/logo.svg" class="img-fluid" alt="Logo">
							</div>
                           <div class="mb-4">
                               <h4 class="mb-2 fs-20">Login With Your Email Address</h4>
                               <p>We sent a verification code to your email. Enter the code from the email in the field below</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <input type="text" class="border rounded w-100 py-sm-3 py-2 text-center fs-26 hw-bold me-3" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
                                <input type="text" class="border rounded w-100 py-sm-3 py-2 text-center fs-26 hw-bold me-3" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" maxlength="1">
                                <input type="text" class="border rounded w-100 py-sm-3 py-2 text-center fs-26 hw-bold me-3" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" maxlength="1">
                                <input type="text" class="border rounded w-100 py-sm-3 py-2 text-center fs-26 hw-bold" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" maxlength="1">
                            </div>
                            <div class="text-center mb-3">
                               <p class="badge badge-soft-purple shadow-none">Otp will expire in 09 :10</p>
                            </div>
                            <div class="mb-3">
                               <button type="submit" class="btn btn-primary w-100">Verify My Account</button>
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

    <!-- Mobile Input -->
    <script src="<?php echo base_url(); ?>assets/plugins/intltelinput/js/intlTelInput.js"></script>

</body>
</html>