<?php $__env->startSection('content'); ?>
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>

            <h3 class="border-bottom">LOGIN</h3>

            <!-- <div>
                <p>Admin : admin@test.com - 12345678</p>
                <p>Teacher : teacher@test.com - 12345678</p>
                <p>Parent : parent@test.com - 12345678</p>
                <p>Student : student@test.com - 12345678</p>
            </div> -->

            <form class="m-t" role="form" action="<?php echo e(route('login')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email Address" required autofocus>

                    <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="Password" required>

                    <?php if($errors->has('password')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                

                <button type="submit" class="btn btn-danger block full-width m-b">Login</button>

                <a href="<?php echo e(route('password.request')); ?>">
                    <small>Forgot password?</small>
                </a>
                
            </form>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student-management-system\resources\views/auth/login.blade.php ENDPATH**/ ?>