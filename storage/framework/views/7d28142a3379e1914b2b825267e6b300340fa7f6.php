<?php $__env->startSection('content'); ?>

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>All Student</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('parents.index')); ?>">Student</a>
                </li>
                <li class="active">
                    <strong>Index</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
            <div class="ibox-tools">
                <a href="<?php echo e(route('students.create')); ?>" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><i class="fa fa-plus"></i> <strong>Create</strong></a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

        <?php echo $__env->make('partials.flash_messages.flashMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Student</h5>
                    </div>

                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-sm-4">
                                <img alt="image" class="img-responsive h-300" src="https://www.ldatschool.ca/wp-content/uploads/2015/03/Young-student.jpg">
                            </div>

                            <div class="col-sm-8 border-left">
                                <div class="ibox-content profile-content">
                                    <h4><strong><?php echo e($student->user->name); ?></strong></h4>
                                    <p><i class="fa fa-map-marker"></i> <?php echo e($student->address); ?> | <?php echo e($student->date_of_birth); ?></p>

                                    <p><span class="font-bold">Class : </span> <?php echo e($student->class->name); ?></p>

                                    <p><span class="font-bold">Roll Number : </span> <?php echo e($student->roll_number); ?></p>

                                    <p><span class="font-bold">Phone : </span> <?php echo e($student->phone); ?></p>

                                    <p><span class="font-bold">Email : </span> <?php echo e($student->user->email); ?></p>

                                    <p><span class="font-bold">Parent : </span> <?php echo e($student->parent->user->name); ?></p>

                                    <p><span class="font-bold">Parent Phone : </span> <?php echo e($student->parent->phone); ?></p>

                                    <p><span class="font-bold">Age : </span> <?php echo e($student->age); ?> Years</p>

                                    <p><span class="font-bold">Gender : </span> <?php echo e($student->gender); ?></p>

                                    <p><span class="font-bold">Address : </span> <?php echo e($student->address); ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student-management-system\resources\views/student/show.blade.php ENDPATH**/ ?>