<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/admin-page/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/admin-page/css/style.css">
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <?= $this->include('admin/layout/sidebar') ?>
        <div class="main-wrapper">
            <!-- ! Main nav -->
            <?= $this->include('admin/layout/navbar') ?>
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <?= $this->renderSection('content') ?>
            </main>
            <!-- ! Footer -->
            <?= $this->include('admin/layout/footer') ?>
        </div>
    </div>
    <!-- Chart library -->
    <script src="/admin-page/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="/admin-page/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="/admin-page/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>