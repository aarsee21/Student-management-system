<?php $__env->startSection('content'); ?>

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>All Role</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('class.index')); ?>">Role</a>
                </li>
                <li class="active">
                    <strong>Index</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
            <div class="ibox-tools m-t-xl">
                <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><i class="fa fa-plus"></i> <strong>Create</strong></a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

        <?php echo $__env->make('partials.flash_messages.flashMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Role</h5>
                    </div>

                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php ($i=1); ?>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        <td><?php echo e(ucfirst($item->name)); ?></td>

                                        <td>
                                            <?php if(!empty($item->getPermissionNames())): ?>
                                                <?php $__currentLoopData = $item->getPermissionNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissionName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <label class="badge badge-primary"><?php echo e($permissionName); ?></label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <a title="Edit" href="<?php echo e(route('roles.edit', $item->id)); ?>" class="cus_mini_icon color-success"> <i class="fa fa-pencil-square-o"></i></a>
                                            <a title="Delete" data-toggle="modal" data-target="#myModal<?php echo e($item->id); ?>" type="button" class="cus_mini_icon color-danger"><i class="fa fa-trash"></i></a>
                                        </td>

                                        <!-- The Modal -->
                                        <div class="modal fade in" id="myModal<?php echo e($item->id); ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Delete class</h4>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">

                                                        <h3>You are going to delete ' <?php echo e($item->name); ?> ' ?</h3>

                                                        <a data-dismiss="modal" class="btn btn-sm btn-warning"><strong>No</strong></a>
                                                        <button class="btn btn-sm btn-primary" type="submit" onclick="event.preventDefault();
                                                                document.getElementById('class-delete-form<?php echo e($item->id); ?>').submit();">
                                                            <strong>Yes</strong>
                                                        </button>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <form id="class-delete-form<?php echo e($item->id); ?>" method="POST" action="<?php echo e(route('roles.destroy', $item->id)); ?>" style="display: none" >
                                            <?php echo e(method_field('DELETE')); ?>

                                            <?php echo csrf_field(); ?>
                                        </form>

                                    </tr>

                                    <?php ($i++); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/adminstration/role/index.blade.php ENDPATH**/ ?>