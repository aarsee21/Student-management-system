<?php $__env->startSection('content'); ?>

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Assign Role</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('roles.index')); ?>">Role</a>
                </li>
                <li class="active">
                    <strong>Assign role</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Assign role</h5>
                    </div>
                    <div class="ibox-content">

                        <form method="POST" action="<?php echo e(route('assign-role.update', $user->id)); ?>" class="form-horizontal">
                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('partials.flash_messages.flashMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="form-group"></div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Role<span class="required-star"> *</span></label>
                                <div class="col-lg-10">

                                     <select name="role" class="form-control" required>

                                          <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option value="<?php echo e($role); ?>" <?php echo e((in_array($role, $userRole))?'selected':''); ?> ><?php echo e($role); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/adminstration/assign_role/edit.blade.php ENDPATH**/ ?>