<?php $__env->startSection('content'); ?>

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>My Profile</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>profile</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Change Profile</h5>
                    </div>
                    <div class="ibox-content">

                        <form method="POST" action="<?php echo e(route('profile')); ?>" class="form-horizontal">
                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('partials.flash_messages.flashMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <div class="form-group"></div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Name<span class="required-star"> *</span></label>
                                <div class="col-lg-10">
                                    <input value="<?php echo e(Auth()->user()->name); ?>" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" required>

                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Email<span class="required-star"> *</span></label>
                                <div class="col-lg-10">
                                    <input value="<?php echo e(Auth()->user()->email); ?>" type="email" class="form-control" name="email" required>
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-sm btn-warning t m-t-n-xs"><strong>Cancel</strong></a>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student-management-system\resources\views/profile/show_profile.blade.php ENDPATH**/ ?>