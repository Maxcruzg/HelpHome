<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->css([
        '/adminlte/plugins/fontawesome-free/css/all.min.css',
        '/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        '/adminlte/dist/css/adminlte.min.css',
        '/adminlte/plugins/fullcalendar/main.min.css',
    ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <script src="https://use.fontawesome.com/releases/v6.2.0/js/all.js"></script>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?= $this->element('adminlte/preloader'); ?>
        <?= $this->element('adminlte/navbar'); ?>
        <?= $this->element('adminlte/sidebar'); ?>

        <div class="content-wrapper">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
        <?= $this->element('adminlte/footer'); ?>
    </div>
    <?= $this->Html->script([
        '/adminlte/plugins/jquery/jquery.min.js',
        '/adminlte/plugins/jquery-ui/jquery-ui.min.js',
    ]) ?>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <?= $this->Html->script([
        '/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        '/adminlte/plugins/chart.js/Chart.min.js',
        '/adminlte/plugins/moment/moment.min.js',
        '/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        '/adminlte/dist/js/adminlte.js',
        '/adminlte/dist/js/demo.js',
        '/adminlte/dist/js/pages/dashboard.js',
        '/adminlte/plugins/fullcalendar/main.min.js',
    ]) ?>

    <?= $this->fetch('script') ?>

</body>
</html>