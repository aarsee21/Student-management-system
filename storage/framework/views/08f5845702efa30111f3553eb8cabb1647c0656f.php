<!--
*
*  INSPINIA - Responsive inspinia Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student Management System | Dashboard</title>

    <link href="<?php echo e(asset('inspinia/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/dataTables/datatables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/jasny/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/iCheck/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/chosen/bootstrap-chosen.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/datapicker/datepicker3.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('inspinia/css/custom_style.css')); ?>" rel="stylesheet">

    <script type="text/javascript">var home_url="<?php echo e(url('/')); ?>"</script>
    <script src="<?php echo e(asset('inspinia/js/jquery-3.1.1.min.js')); ?> "></script>

    
    <script src="<?php echo e(asset('inspinia/js/plugins/chosen/chosen.jquery.js')); ?> "></script>

    
    <script src="<?php echo e(asset('inspinia/js/plugins/datapicker/bootstrap-datepicker.js')); ?>"></script>

</head>

<body>

<div id="wrapper">

    <?php echo $__env->make('elements.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="page-wrapper" class="gray-bg dashbard-1">

        <?php echo $__env->make('elements.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('elements.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

</div>

<!-- Mainly scripts -->
<script src="<?php echo e(asset('inspinia/js/bootstrap.min.js')); ?> "></script>

<script src="<?php echo e(asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js')); ?> "></script>
<script src="<?php echo e(asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js')); ?> "></script>
<script src="<?php echo e(asset('inspinia/js/plugins/dataTables/datatables.min.js')); ?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo e(asset('inspinia/js/inspinia.js')); ?> "></script>
<script src="<?php echo e(asset('inspinia/js/plugins/pace/pace.min.js')); ?> "></script>
<script src="<?php echo e(asset('inspinia/js/plugins/jasny/jasny-bootstrap.min.js')); ?> "></script>


<script src="<?php echo e(asset('inspinia/js/plugins/iCheck/icheck.min.js')); ?>"></script>

<script>

    $(document).ready(function(){

        //data table...........
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

        //checkbox........
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

    });

</script>

</body>

</html>

<?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/layouts/master.blade.php ENDPATH**/ ?>