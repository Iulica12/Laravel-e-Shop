<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
   <div class="container"> Modificare informatii Comanda</div>
   <div class="container">
      <!—exista inregistrari in tabelul task 
      <?php if(count($errors) > 0): ?>
      <div class="alert alert-danger">
         <strong>Eroare:</strong>
         <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
      </div>
      <?php endif; ?>
      <!—populez campurile formularului cu datele aferente din tabela task -->
      <?php echo Form::model($task, ['method' => 'PATCH','route' => ['tasks.update', $task->id]]); ?>

      <div class="form-group">
         <label for="name">Nume</label>
         <input type="text" name="name" class="form-control" value="<?php echo e($task->name); ?>">
      </div>
      <div class="form-group">
         <label for="description">Descriere</label>
         <textarea name="description" class="form-control" rows="3"><?php echo e($task->description); ?></textarea>
      </div>
      <div class="form-group">
         <input type="submit" value="Salvare Modificari" class="btn btn-info">
         <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-default">Cancel</a>
      </div>
      <?php echo Form::close(); ?>

   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\resources\views/tasks/edit.blade.php ENDPATH**/ ?>