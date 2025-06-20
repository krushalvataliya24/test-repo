<?php
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
$page = end($link_array);
?>

<!-- jQuery -->
<script src="assets/js/jquery-3.7.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Feather Icon JS -->
<script src="assets/js/feather.min.js"></script>

<!-- Slimscroll JS -->
<script src="assets/js/jquery.slimscroll.min.js"></script>

<!-- Datatable JS -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>

<!-- Daterangepicker JS -->
<script src="assets/js/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<!-- Select2 JS -->
<script src="assets/plugins/select2/js/select2.min.js"></script>

<!-- Apexchart JS -->
<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<!-- Custom Json Js -->
<script src="assets/js/jsonscript.js"></script>

<!-- Custom JS -->
<?php if (
    $page !== 'register.php' && $page !== 'reset-password.php' && $page !== 'two-step-verification.php' && $page !== 'under-maintenance.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'blank-page.php' && $page !== 'coming-soon.php'
    && $page !== 'login.php' && $page !== 'forgot-password.php' && $page !== 'email-verification.php' && $page !== 'lock-screen.php' && $page !== 'success'
) {   ?>
    <!-- Theme Script -->
    <script src="assets/js/theme-script.js"></script>
<?php } ?>
<script src="assets/js/script.js"></script>