
<?php echo $__env->make('partials.flash_messages.flashMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="form-group">
    <label class="col-lg-2 control-label">Name<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="<?php echo e(isset($parent->user->name) ? $parent->user->name:old('name')); ?>" required="required" name="name" type="text" class="form-control">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Email<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="<?php echo e(isset($parent->user->email) ? $parent->user->email:old('email')); ?>" required="required" name="email" type="email" class="form-control">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Phone<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="<?php echo e(isset($parent->phone) ? $parent->phone:old('phone')); ?>" required="required" name="phone" type="text" class="form-control">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Password <?php if(class_basename(Route::current()->uri) == 'create'): ?><span class="required-star"> *</span><?php endif; ?></label>
    <div class="col-lg-10">
        <input value="" name="password" type="password" class="form-control" <?php echo e((class_basename(Route::current()->uri) == 'create')?'required':''); ?>>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Age</label>
    <div class="col-lg-10">
        <input value="<?php echo e(isset($parent->age) ? $parent->age:old('age')); ?>" name="age" type="text" class="form-control">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Gender</label>
    <div class="col-lg-10">
        <div class="i-checks">
            <label>
                <input name="gender" <?php echo e((isset($parent->gender) AND $parent->gender == 'male') ?
                'checked':(old('gender') == 'male')?'checked':''); ?>

                type="radio" value="male"> <i></i> Male </label>
            <label>
                <input name="gender" <?php echo e((isset($parent->gender) AND $parent->gender == 'female') ?
                'checked':(old('gender') == 'female')?'checked':''); ?>

                type="radio" value="female"> <i></i> Female
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Address</label>
    <div class="col-lg-10">
        <input value="<?php echo e(isset($parent->address) ? $parent->address:old('address')); ?>" name="address" type="text" class="form-control">
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\student-management-system\resources\views/parent/element.blade.php ENDPATH**/ ?>