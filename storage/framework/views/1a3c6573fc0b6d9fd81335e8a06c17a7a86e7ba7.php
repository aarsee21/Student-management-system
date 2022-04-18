<?php $__env->startSection('content'); ?>

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>All attendance</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('attendances.index')); ?>">Attendance</a>
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

            <?php if(auth()->check() && auth()->user()->hasRole('teacher')): ?>

                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Add attendance</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content" style="display: none;">
                            <form method="POST" action="<?php echo e(route('attendances.store')); ?>" class="form-horizontal">
                                <?php echo csrf_field(); ?>

                                <?php echo $__env->make('attendance.element', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </form>
                        </div>

                    </div>
                </div>

            <?php endif; ?>

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Attendance</h5>
                    </div>

                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Phone</th>
                                    <th>Teacher</th>
                                    <th>Date</th>
                                    <th>Attendance Type</th>
                                    <?php if(auth()->check() && auth()->user()->hasRole('teacher|admin')): ?> <th>Actions</th> <?php endif; ?>
                                 </tr>
                                </thead>
                                <tbody>

                                <?php ($i=1); ?>
                                <?php $__currentLoopData = $attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        <td><?php echo e(ucfirst($item->user->name)); ?></td>
                                        <td><?php echo e(ucfirst($item->class->name)); ?></td>
                                        <td><?php echo e($item->userAsStudent->student->phone); ?></td>
                                        <td><?php echo e(ucfirst($item->user->name)); ?></td>
                                        <td><?php echo e(date('d-m-Y', strtotime($item->attendance_date))); ?></td>

                                        <td>
                                        <span class="badge <?php echo e(($item->attendance_status == 1)?'badge-success':'badge-danger'); ?>">
                                            <?php echo e(($item->attendance_status == 1)?'Present':'Absent'); ?>

                                        </span>
                                        </td>

                                        <?php if(auth()->check() && auth()->user()->hasRole('teacher|admin')): ?>
                                            <td>
                                                <?php if(auth()->check() && auth()->user()->hasRole('teacher')): ?>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('attendance-edit')): ?>
                                                        <a title="Edit" href="<?php echo e(route('attendances.edit', $item->id)); ?>" class="cus_mini_icon color-success"> <i class="fa fa-pencil-square-o"></i></a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <?php if(auth()->check() && auth()->user()->hasRole('teacher|admin')): ?>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('attendance-delete')): ?>
                                                        <a title="Delete" data-toggle="modal" data-target="#myModal<?php echo e($item->id); ?>" type="button" class="cus_mini_icon color-danger"><i class="fa fa-trash"></i></a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>

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

                                        <form id="class-delete-form<?php echo e($item->id); ?>" method="POST" action="<?php echo e(route('attendances.destroy', $item->id)); ?>" style="display: none" >
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

    <script src="<?php echo e(asset('public/inspinia/js/vue/vue.js')); ?>"></script>
    <script src="<?php echo e(asset('public/inspinia/js/axios/axios.js')); ?>"></script>

    <script>

        var AttendanceIndex = new Vue({
            el: "#root",
            data: {
                students:[],
                attendance_user_id: '',
            },

            mounted(){
            },

            methods:{
                setStudent(e){
                    currentApp = this;

                    class_id = e.currentTarget.value;
                    axios.get(home_url + '/students/get-student/'+class_id)
                        .then(response => {

                            console.log(response.data);
                            currentApp.students = response.data;
                        })
                },
            }

        })

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student-management-system\resources\views/attendance/index.blade.php ENDPATH**/ ?>