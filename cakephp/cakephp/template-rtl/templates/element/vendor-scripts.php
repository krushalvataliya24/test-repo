	<!-- jQuery -->
	<?php echo $this->Html->script('jquery-3.7.1.min.js'); ?>

	<!-- Bootstrap Core JS -->
	<?php echo $this->Html->script('bootstrap.bundle.min.js'); ?>

	<!-- Daterangepikcer JS -->
	<?php echo $this->Html->script('moment.min.js'); ?>
	<?php echo $this->Html->script('plugins/daterangepicker/daterangepicker.js'); ?>

	<!-- Feather Icon JS -->
	<?php echo $this->Html->script('feather.min.js'); ?>

	<!-- Slimscroll JS -->
	<?php echo $this->Html->script('jquery.slimscroll.js'); ?>
	<?php echo $this->Html->script('jquery.slimscroll.min.js'); ?>

	<!-- Chart JS -->
	<?php echo $this->Html->script('plugins/apexchart/apexcharts.min.js'); ?>
	<?php echo $this->Html->script('plugins/apexchart/chart-data.js'); ?>

	<!-- Datatable JS -->
	<?php echo $this->Html->script('jquery.dataTables.min.js'); ?>
	<?php echo $this->Html->script('dataTables.bootstrap5.min.js'); ?>

	<!-- Select2 JS -->
	<?php echo $this->Html->script('plugins/select2/js/select2.min.js'); ?>

	<!-- Datetimepicker JS -->
	<?php echo $this->Html->script('bootstrap-datetimepicker.min.js'); ?>

	<!-- Custom Json Js -->
	<?php echo $this->Html->script('jsonscript.js'); ?>

	<?php

	use Cake\Routing\Router;

	$excludedRoutes = [

		'login',
		'register',
		'forgot_password',
		'reset_password',
		'email_verification',
		'two_step_verification',
		'lock_screen',
		'error_404',
		'error_500',
		'blank_page',
		'coming_soon',
		'under_maintenance'
		
	];

	$currentRoute = Router::url(null, true);

	$shouldIncludeSlimscroll = true;
	foreach ($excludedRoutes as $route) {
		if (strpos($currentRoute, $route) !== false) {
			$shouldIncludeSlimscroll = false;
			break;
		}
	}

	if ($shouldIncludeSlimscroll):
	?>
		<!-- Theme Script js -->
		<?php echo $this->Html->script('theme-script.js'); ?>
	<?php endif; ?>

	<!-- Custom JS -->
	<?php echo $this->Html->script('script.js'); ?>