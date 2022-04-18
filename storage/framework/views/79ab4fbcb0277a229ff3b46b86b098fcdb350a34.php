<?php $__env->startSection('content'); ?>

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Create report</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('reports.index')); ?>">Report</a>
                </li>
                <li class="active">
                    <strong>Index</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

        <?php echo $__env->make('partials.flash_messages.flashMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Create report</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <form method="POST" action="<?php echo e(route('reports.create')); ?>" class="form-horizontal">
                            <?php echo csrf_field(); ?>

                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Teacher<span class="required-star"> *</span></label>
                                        <select class="form-control chosen-select" name="teacher_id" required>

                                            <option value="">--Select--</option>
                                            <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($teacher->user->id); ?>">
                                                    <?php echo e(ucfirst($teacher->user->name) .' - '. $teacher->phone); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Class<span class="required-star"> *</span></label>
                                        <select id="class" @change="setStudent" class="form-control" name="class_id" required>

                                            <option value="">--Select--</option>
                                            <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e((isset($attendance->class->id) AND $attendance->class->id == $class->id)?'selected':''); ?> value="<?php echo e($class->id); ?>">
                                                    <?php echo e(ucfirst($class->name)); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group" id="data_4">
                                        <label class="font-normal">Month select</label>
                                        <div class="input-group date">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                            <input name="attendance_date" required type="text" class="form-control" value>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <div class="">
                                            <button class="btn btn-primary" type="submit" formtarget="_blank">Create Report</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $('.chosen-select').chosen({
            width: "100%",
            search_contains: true
        });

        $('#data_4 .input-group.date').datepicker({
            format: 'mm/yyyy',
            minViewMode: 1,
            keyboardNavigation: false,
            forceParse: false,
            forceParse: false,
            autoclose: true,
            todayHighlight: true
        });

        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        $( '#data_4 .input-group.date' ).datepicker( 'setDate', today );

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/report/create.blade.php ENDPATH**/ ?>