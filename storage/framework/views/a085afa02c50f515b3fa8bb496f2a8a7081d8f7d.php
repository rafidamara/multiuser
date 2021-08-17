<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo e(asset('template/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('template/css/sb-admin-2.min.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('link'); ?>
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <?php echo $__env->yieldContent('main'); ?>
    </div>
    <script src="<?php echo e(asset('template/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/js/sb-admin-2.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>
</html><?php /**PATH D:\4_u\resources\views/layouts/appLogin.blade.php ENDPATH**/ ?>