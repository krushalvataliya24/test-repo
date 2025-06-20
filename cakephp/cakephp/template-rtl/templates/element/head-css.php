<!-- Bootstrap CSS -->
<?php echo $this->Html->css('bootstrap.rtl.min.css'); ?>

<!-- Tabler Icon CSS -->
<?php echo $this->Html->css('plugins/tabler-icons/tabler-icons.css'); ?>

<!-- Datatable CSS -->
<?php echo $this->Html->css('dataTables.bootstrap5.min.css'); ?>

<!-- Fontawesome CSS -->
<?php echo $this->Html->css('plugins/fontawesome/css/fontawesome.min.css'); ?>
<?php echo $this->Html->css('plugins/fontawesome/css/all.min.css'); ?>

<!-- Daterangepicker CSS -->
<?php echo $this->Html->css('plugins/daterangepicker/daterangepicker.css'); ?>

<!-- Datetimepicker CSS -->
<?php echo $this->Html->css('bootstrap-datetimepicker.min.css'); ?>

<!-- Select2 CSS -->
<?php echo $this->Html->css('plugins/select2/css/select2.min.css'); ?>

<!-- Main CSS -->
<?php echo $this->Html->css('style.css'); ?>
<?php
$baseUrl = $this->Url->build('/');
$isLocalServer = strpos($baseUrl, 'localhost') !== false;
?>
<script>
    var baseUrl = "<?php echo $isLocalServer ? $baseUrl : $this->Url->build('/'); ?>";
</script>