
<?php echo $__env->make('partials.flash_messages.flashMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="col-sm-6">
    <div class="form-group"><label>Name<span class="required-star"> *</span></label>
        <input value="<?php echo e(isset($student->user->name) ? $student->user->name:old('name')); ?>" required="required" name="name" type="text" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Roll<span class="required-star"> *</span></label>
        <input value="<?php echo e(isset($student->roll_number) ? $student->roll_number:old('roll_number')); ?>" required="required" name="roll_number" type="text" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Phone<span class="required-star"> *</span></label>
        <input value="<?php echo e(isset($student->phone) ? $student->phone:old('phone')); ?>" required="required" name="phone" type="text" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Email<span class="required-star"> *</span></label>
        <input value="<?php echo e(isset($student->user->email) ? $student->user->email:old('email')); ?>" required="required" name="email" type="email" class="form-control">
       
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Class<span class="required-star"> *</span></label>

        <select class="form-control" name="class_id" required>

            <option value="">--Select--</option>

            <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($class->id); ?>"
                    <?php echo e((isset($student->class_id) AND $class->id == $student->class_id)?'selected':old('class_id') ==  $class->id  ? 'selected' : ''); ?>>
                    <?php echo e($class->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>

    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Gender<span class="required-star"> *</span></label>
        <select class="form-control m-b" name="gender" required>
            <option value="">--Select--</option>
            <option value="male" <?php echo e((isset($student->gender) AND $student->gender == 'male') ? 'selected':old('gender') ==  'male'?'selected' : ''); ?>

            >Male</option>
            <option value="female" <?php echo e((isset($student->gender) AND $student->gender == 'female') ? 'selected':old('gender') ==  'female'?'selected' : ''); ?>

            >Female</option>
            <option value="other" <?php echo e((isset($student->gender) AND $student->gender == 'other') ? 'selected':old('gender') ==  'other'?'selected' : ''); ?>

            >Other</option>
        </select>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Parent Phone<span class="required-star"> *</span></label>
        <input value="<?php echo e(isset($student->parent_phone) ? $student->parent_phone:old('parent_phone')); ?>" required="required" name="parent_phone" type="text" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Parent<span class="required-star"> *</span></label>
        <select class="form-control chosen-select" tabindex="2" name="parent_id" required>

            <option value="">--Select--</option>
            <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($parent->user->id); ?>" <?php echo e((isset($student->parent_id) AND $parent->user->id == $student->parent_id)?'selected':old('parent_id') ==  $parent->user->id  ? 'selected' : ''); ?>><?php echo e(ucfirst($parent->user->name) .' - '. $parent->phone); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Password <?php if(class_basename(Route::current()->uri) == 'create'): ?><span class="required-star"> *</span><?php endif; ?></label>
        <input value="" name="password" type="password" class="form-control" <?php echo e((class_basename(Route::current()->uri) == 'create')?'required':''); ?>>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Age<span class="required-star"> *</span></label>
        <input value="<?php echo e(isset($student->age) ? $student->age:old('age')); ?>" name="age" type="text" required class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Date of birth</label>
        <input value="<?php echo e(isset($student->date_of_birth) ? $student->date_of_birth:old('date_of_birth')); ?>" name="date_of_birth" type="date" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Address</label>
        <input value="<?php echo e(isset($student->address) ? $student->address:old('address')); ?>" name="address" type="text" class="form-control">
    </div>
</div>

<script>
    $('.chosen-select').chosen({
        width: "100%",
        search_contains: true
    });

    /*$('.chosen-search input').on('keyup', function(evt, params) {
        console.log(this.value)
    });*/

   /* $('test').chosen();
    $('.select').click(function(){
        $('option').prop('selected', true);
        $('select').trigger('liszt:updated');
    });
    $('.deselect').click(function(){
        $('option').prop('selected', false);
        $('select').trigger('liszt:updated');
    });*/

</script>
<?php /**PATH C:\xampp\htdocs\student-management-system1\resources\views/student/element.blade.php ENDPATH**/ ?>