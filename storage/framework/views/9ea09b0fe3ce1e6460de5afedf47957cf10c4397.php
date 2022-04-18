<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>LSMS | Login</title>

        <link href="<?php echo e(asset('inspinia/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('inspinia/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('inspinia/css/plugins/iCheck/custom.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('inspinia/css/animate.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('inspinia/css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('inspinia/css/custom_style.css')); ?>" rel="stylesheet">

    </head>

    <body class="gray-bg">

        <?php echo $__env->yieldContent('content'); ?>

        <!-- Mainly scripts -->
        <script src="<?php echo e(asset('inspinia/js/jquery-3.1.1.min.js')); ?> "></script>
        <script src="<?php echo e(asset('inspinia/js/bootstrap.min.js')); ?> "></script>

        <!-- iCheck -->
        <script src="<?php echo e(asset('inspinia/js/plugins/iCheck/icheck.min.js')); ?>"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
    </body>

</html>
<?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/auth/layouts/app.blade.php ENDPATH**/ ?>