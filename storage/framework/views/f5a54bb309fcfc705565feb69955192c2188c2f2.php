<?php $__env->startSection('content'); ?>

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Edit Parent</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('parents.index')); ?>">Parent</a>
                </li>
                <li class="active">
                    <strong>Edit</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
            <div class="ibox-tools">
                <a href="<?php echo e(route('parents.create')); ?>" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><i
                        class="fa fa-plus"></i> <strong>Edit</strong></a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Edit parent</h5>
                    </div>
                    <div class="ibox-content">

                        <form method="POST" action="<?php echo e(route('parents.update', $parent->id)); ?>" class="form-horizontal">
                            <?php echo e(method_field('PUT')); ?>

                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('parent.element', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <a href="<?php echo e(route('parents.index')); ?>" class="btn btn-sm btn-warning t m-t-n-xs"><strong>Cancel</strong></a>
                                    <button class="btn btn-sm btn-primary m-t-n-xs" type="submit">
                                        <strong>Submit</strong></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
    

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/parent/edit.blade.php ENDPATH**/ ?>