<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>

	<!-- Title -->
	<title>Error 500 | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

	<?= $this->element('head-css') ?>
</head>

<body class="error-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">

    <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden">
            <div class="d-flex align-items-center justify-content-center flex-fill flex-column vh-100 overflow-auto">
                <div class="error-img mb-4">
                   
                    <?php echo $this->Html->image('authentication/error-500.png', ['alt' => '','class'=>'img-fluid']); ?>
                </div>
                <div class="text-center">
                    <h3 class="fs-28 mb-3">Oops, something went wrong</h3>
                    <p class="fs-16">Error 500 Page not found. Sorry the page you looking for <br> doesn’t exist or has
                        been moved</p>
                    <a href="home" class="btn btn-primary">
                        <i class="ti ti-arrow-narrow-left me-1"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>



    </div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>
</body>

</html>
