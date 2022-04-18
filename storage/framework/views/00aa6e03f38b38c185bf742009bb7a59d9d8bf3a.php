<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">

                    <?php
                    if (isset(Auth::user()->image)){
                        $image_url = URL::to('uploads/images/admins/'.Auth::user()->image);
                    }else{
                        $image_url = URL::to('img/no-image.png');
                    }
                    ?>

                    <span>
                        <img alt="image" class="img-circle" src="<?php echo e($image_url); ?>" />
                    </span>

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs"> <strong class="font-bold"><?php echo e(Auth()->user()->name); ?></strong>
                            </span> <span class="text-muted text-xs block">Settings<b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?php echo e(route('profile')); ?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</a></li>
                        <li><a href="<?php echo e(route('changePassword')); ?>"><i class="fa fa-shield" aria-hidden="true"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit()";>
                                <i class="fa fa-sign-out"></i> Log out
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li class="<?php echo e((currentController() == 'DashboardController')?'active':''); ?>">
                <a href="<?php echo e(url('/')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>

                <?php
                    $active_adminstration = ((currentController() == 'PermissionController')
                                            OR (currentController() == 'RoleController') )?'active':'';
                ?>

                <li class="<?php echo e($active_adminstration); ?>">
                    <a href="index.html"><i class="fa fa-user-secret" aria-hidden="true"></i> <span class="nav-label">Administration</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="<?php echo e((currentController() == 'PermissionController')?'active':''); ?>"><a href="<?php echo e(route('permissions.index')); ?>">Manage Permission</a></li>
                        <li class="<?php echo e((currentController() == 'RoleController')?'active':''); ?>"><a href="<?php echo e(route('roles.index')); ?>">Manage Role</a></li>
                    </ul>
                </li>


                <li class="<?php echo e((currentController() == 'TeacherController')? 'active':''); ?>">
                    <a href="<?php echo e(route('teachers.index')); ?>"><i class="fa fa-user-secret" aria-hidden="true"></i> <span class="nav-label">Teacher</span> </a>
                </li>

                <li class="<?php echo e((currentController() == 'ParentController')? 'active':''); ?>">
                    <a href="<?php echo e(route('parents.index')); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span class="nav-label">Parent</span> </a>
                </li>

                <li class="<?php echo e((currentController() == 'StudentController')? 'active':''); ?>">
                    <a href="<?php echo e(route('students.index')); ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span class="nav-label">Student</span> </a>
                </li>

                <li class="<?php echo e((currentController() == 'ClassController')? 'active':''); ?>">
                    <a href="<?php echo e(route('class.index')); ?>"><i class="fa fa-th" aria-hidden="true"></i> <span class="nav-label">Class</span> </a>
                </li>

            <?php endif; ?>

            <?php if(auth()->check() && auth()->user()->hasRole('teacher|student|admin')): ?>
                <li class="<?php echo e((currentController() == 'AttendanceController')? 'active':''); ?>">
                    <a href="<?php echo e(route('attendances.index')); ?>"><i class="fa fa-address-book-o" aria-hidden="true"></i> <span class="nav-label">Attendance</span> </a>
                </li>
            <?php endif; ?>

            <?php if(auth()->check() && auth()->user()->hasRole('parent')): ?>
                <li class="<?php echo e((currentController() == 'ChildrenController')? 'active':''); ?>">
                    <a href="<?php echo e(route('childrens.index')); ?>"><i class="fa fa-child" aria-hidden="true"></i> <span class="nav-label">Children</span> </a>
                </li>
            <?php endif; ?>

            <?php if(auth()->check() && auth()->user()->hasRole('student')): ?>
                <li class="<?php echo e((Route::getFacadeRoot()->current()->uri() == 'class-routine')? 'active':''); ?>">
                    <a href="<?php echo e(route('class-routine.index')); ?>"><i class="fa fa-child" aria-hidden="true"></i> <span class="nav-label">Class Routine</span> </a>
                </li>
            <?php endif; ?>

            <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                <li class="<?php echo e((currentController() == 'ReportController')? 'active':''); ?>">
                    <a href="<?php echo e(route('reports.index')); ?>"><i class="fa fa-child" aria-hidden="true"></i> <span class="nav-label">Report</span> </a>
                </li>
            <?php endif; ?>

        </ul>

    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/elements/sidebar.blade.php ENDPATH**/ ?>