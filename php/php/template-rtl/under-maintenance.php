<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>UI Under Maintenance | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body class="error-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden">
            <div class="d-flex align-items-center justify-content-center flex-fill flex-column vh-100 overflow-auto">
                <div class="error-img mb-4">
                    <img src="assets/img/authentication/maintenance-img.png" class="img-fluid" alt="">
                </div>
                <div class="text-center">
                    <h3 class="fs-28 mb-3">We are Under Maintenance</h3>
                    <p class="fs-16">Sorry for any inconvenience caused, we have almost <br> done Will get back soon!</p>
                    <a href="index.php" class="btn btn-primary">
                        <i class="ti ti-arrow-narrow-left"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- JAVASCRIPT -->
    <?php include 'layouts/vendor-scripts.php'; ?>
</body>

</html>