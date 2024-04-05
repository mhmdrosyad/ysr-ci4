<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/admin-page/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="/admin-page/css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
  <?php 
                $success = session()->getFlashdata('success');
                $error = session()->getFlashdata('error');
                if ($success) {
                    echo '<div class="alert alert-success" role="alert">' . $success . '</div>';
                }
            ?>
            <?php if ($error): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php foreach ($error as $err): ?>
                <li><?= esc($err) ?></li>
            <?php endforeach ?>
        </ul>
    </div>


<?php endif ?>
    <h1 class="sign-up__title">Get started</h1>
    <p class="sign-up__subtitle">Start creating the best possible user experience for you customers</p>
    <form class="sign-up-form form" action="<?= base_url('admin/register') ?>" method="POST">
      <label class="form-label-wrapper">
        <p class="form-label">Name</p>
        <input name="name" class="form-input" type="text" placeholder="Enter your name" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Username</p>
        <input name="username" class="form-input" type="text" placeholder="Enter your username" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input name="password" class="form-input" type="password" placeholder="Enter your password" required>
      </label>
      <!-- <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox" required>
        <span class="form-checkbox-label">Remember me next time</span>
      </label> -->
      <button class="form-btn primary-default-btn transparent-btn">Sign Up</button>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="/admin-page/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="/admin-page/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="/admin-page/js/script.js"></script>
</body>

</html>