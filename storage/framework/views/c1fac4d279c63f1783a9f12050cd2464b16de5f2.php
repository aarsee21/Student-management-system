<?php $__env->startSection('content'); ?>

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>All Children</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('parents.index')); ?>">Children</a>
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
                        <h5>Children</h5>
                    </div>

                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Class</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php ($i=1); ?>
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        <td><?php echo e(ucfirst($item->user->name)); ?></td>
                                        <td><?php echo e($item->roll_number); ?></td>
                                        <td><?php echo e(ucfirst($item->class->name)); ?></td>
                                        <td><?php echo e($item->user->email); ?></td>
                                        <td><?php echo e($item->phone); ?></td>

                                        <td>
                                            <a title="Profile" href="<?php echo e(route('childrens.show', $item->id)); ?>" class="cus_mini_icon color-success"> <i class="fa fa-eye"></i></a>
                                            <a title="Attendance" href="<?php echo e(route('childrens.attendance', $item->id)); ?>" class="cus_mini_icon color-success"> <i class="fa fa-address-book"></i></a>
                                        </td>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/children/index.blade.php ENDPATH**/ ?>