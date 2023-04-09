<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title><?php echo $__env->yieldContent('title'); ?></title>
      <link rel="stylesheet"
         href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script
         src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
               <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
               <?php echo e(config('app.name', 'Laravel')); ?>

               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/tasks')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>"> Products</a>
                    </li>
                  </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Authentication Links -->
                     <?php if(auth()->guard()->guest()): ?>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                     </li>
                     <?php if(Route::has('register')): ?>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                     </li>
                     <?php endif; ?>
                     <?php else: ?>
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           <?php echo e(__('Logout')); ?>

                           </a>
                           <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                              <?php echo csrf_field(); ?>
                           </form>
                        </div>
                     </li>
                     <?php endif; ?>
                  </ul>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-sm-12 col-12 main-section">
                  <div class="dropdown">
                     <button type="button" class="btn btn-info" data-toggle="dropdown">
                     <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cos <span class="badge
                        badge-pill badge-danger"><?php echo e(count((array) session('cart'))); ?></span>
                     </button>
                     <div class="dropdown-menu">
                        <div class="row total-header-section">
                           <div class="col-lg-6 col-sm-6 col-6">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge
                                 badge-pill badge-danger"><?php echo e(count((array) session('cart'))); ?></span>
                           </div>
                           <?php $total = 0 ?>
                           <?php $__currentLoopData = (array) session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php $total += $details['price'] * $details['quantity'] ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                              <p>Total: <span class="text-info">$ <?php echo e($total); ?></span></p>
                           </div>
                        </div>
                        <?php if(session('cart')): ?>
                        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row cart-detail">
                           <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                              <img src="<?php echo e($details['photo']); ?>" />
                           </div>
                           <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                              <p><?php echo e($details['name']); ?></p>
                              <span class="price text-info"> $<?php echo e($details['price']); ?></span> <span
                                 class="count"> Cantitate:<?php echo e($details['quantity']); ?></span>
                           </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <div class="row">
                           <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                              <a href="<?php echo e(url('cart')); ?>" class="btn btn-primary btn-block">Afisare tot</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      <div class="container page">
      <?php echo $__env->yieldContent('content'); ?>
      </div>
      </nav>
      <?php echo $__env->yieldContent('scripts'); ?>
   </body>
</html>
<?php /**PATH C:\wamp64\www\test\resources\views/layoutcos.blade.php ENDPATH**/ ?>