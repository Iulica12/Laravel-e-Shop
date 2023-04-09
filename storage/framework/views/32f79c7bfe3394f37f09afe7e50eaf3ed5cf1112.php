<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
   <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
<div class="panel panel-default">
   <div class="panel-heading">
      Lista comenzilor
      <br></br>
   </div>
   <div class="panel-body">
      <table class="table table-bordered table-stripped">
         <tr>
            <th width="20">ID Comanda</th>
           
            <th>Produse</th>
            <th width="300">Actiune</th>
         </tr>
         <?php if(count($orders) > 0): ?> 
         <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <?php if($order->user->name == Auth::user()->name): ?>
         <tr>
            <td><?php echo e($order->id); ?></td>
          
            <td>
             <div class="panel panel-default">
                <div class="panel-body">
                <ul class="list-group">
                <?php $total = 0 ?>
                <?php $__currentLoopData = $order->cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            </td>
            <td>
               <a class="btn btn-success" href="<?php echo e(route('tasks.show',$order->id)); ?>">Vizualizare Comanda</a><br></br>
               
               <?php echo e(Form::open(['method' => 'DELETE','route' => ['tasks.destroy', $order->id],'style'=>'display:inline'])); ?>

               <?php echo e(Form::submit('Anulare Comanda', ['class' => 'btn btn-danger'])); ?>

               <?php echo e(Form::close()); ?>

            </td>
         </tr>
         <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
         <?php else: ?>
         <tr>
            <td colspan="4">Nu exista comenzi!</td>
         </tr>
         <?php endif; ?>
      </table>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutcos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\proiect-laravel\resources\views/tasks/list.blade.php ENDPATH**/ ?>