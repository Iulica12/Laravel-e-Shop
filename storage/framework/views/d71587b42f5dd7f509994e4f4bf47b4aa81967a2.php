<?php $__env->startSection('content'); ?>
 <div class="panel panel-default">
 <div class="panel-heading btn btn-primary">Adaugă Produs nou</div>
 <div class="panel-body">
<?php if(count($errors) > 0): ?>
 <div class="alert alert-danger">
 <strong>Errors:</strong>
 <ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>
 <?php echo e(Form::open(array('route' => 'tasks.store','method'=>'POST'))); ?>

<div class="form-group">
    <label for="name">Nume</label>
    <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
</div>
<div class="form-group">
    <label for="description">Descriere</label>
    <textarea name="description" class="form-control" rows="3"><?php echo e(old('description')); ?></textarea>
</div>
<div class="form-group">
    <input type="submit" value="Adauga Sarcina" class="btn btn-info">
    <a href="<?php echo e(route('tasks.index')); ?>" class="btn btndefault">Cancel</a>
</div>
 <?php echo e(Form::close()); ?>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\resources\views/tasks/create.blade.php ENDPATH**/ ?>