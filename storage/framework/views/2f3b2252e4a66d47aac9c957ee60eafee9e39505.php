<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
   <div class="container">
      <div class="pull-right" style="float: right">
         <a class="btn btn-primary" href="<?php echo e(route('tasks.index')); ?>">Inapoi</a>
      </div>
      <div class="form-group">
         <strong>Comanda Numarul: </strong> <?php echo e($task->id); ?>

         <br/>
         <strong>Userul: </strong> <?php echo e($task->user->name); ?>

      </div>
      <div class="form-group">
         <div class="panel panel-default">
            <div class="panel-body">
               <ul class="list-group">
                  <?php $total = 0 ?>
                  <?php $__currentLoopData = unserialize($task->cart); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php $total += $details['price'] * $details['quantity'] ?>
                  <li class="list-group-item">
                     <img src=<?php echo e($details['photo']); ?>>
                     <span class="badge">$<?php echo e($details['price']); ?></span>
                     <?php echo e($details['name']); ?> | <?php echo e($details['quantity']); ?> Units
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>
            </div>
            <div class="panel-footer">
               <strong>Total Price: $<?php echo e($total); ?></strong>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutcos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\resources\views/tasks/show.blade.php ENDPATH**/ ?>