<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
	<title>Error 404  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body class="error-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden">
            <div class="d-flex align-items-center justify-content-center flex-fill flex-column vh-100 overflow-auto">
                <div class="error-img mb-4">
                    <img src="<?php echo base_url();?>assets/img/authentication/error-404.png" class="img-fluid" alt="">
                </div>
                <div class="text-center">
                    <h3 class="fs-28 mb-3">Oops, something went wrong</h3>
                    <p class="fs-16">Error 404 Page not found. Sorry the page you looking for <br> doesn’t exist or has been moved</p>
                    <a href="<?php echo base_url();?>deals-dashboard" class="btn btn-primary">
                        <i class="ti ti-arrow-narrow-left"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->



<?= $this->include('partials/vendor-scripts') ?>

</body>
</html>