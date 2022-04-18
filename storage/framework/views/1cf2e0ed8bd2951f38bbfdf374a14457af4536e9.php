<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> <?php echo e($message); ?>.
    </div>
<?php endif; ?>

<?php if($message = Session::get('warning')): ?>
    <div class="alert alert-warning fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Warning!</strong> <?php echo e($message); ?>.
    </div>
<?php endif; ?>

<?php if($message = Session::get('error')): ?>
    <div class="alert alert-error fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error!</strong> <?php echo e($message); ?>.
    </div>
<?php endif; ?>

<?php if($message = Session::get('status')): ?>
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> <?php echo e($message); ?>.
    </div>
<?php endif; ?>


<?php if($errors->any()): ?>
    <div class="form-group">
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>


<!--<script>
    window.setTimeout(function() {
        $(".custom_alert").fadeOut('slow', function() {
            $(this).remove();
        });
    }, 2000);
</script>-->
<?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/partials/flash_messages/flashMessages.blade.php ENDPATH**/ ?>