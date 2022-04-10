
<?php $__env->startSection("content"); ?>
<div class="jumbotron">
    <h1 class="text-center">MOBILES</h1>
    <p class="text-center">MObiles are used in everyday life below are some images of mobiles.</p>
  </div>
<div class="con2">
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <img  src="<?php echo e($item['gallery']); ?>" class="gaimg"> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>  
          <div class="container-fluid">

  

  <div class="row">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <figure>
        <img src="https://i.pcmag.com/imagery/roundups/07ml3nh3QrzTLZ9UycfQQB2-40..v1633010502.jpg" class="img-thumbnail grayscale">
 
      </figure>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZkPLO9wCH5NNxWALmO7O71De3lcaNmA32DA&usqp=CAU" class="img-thumbnail grayscale">

      </figure>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <figure>
        <img src="https://fdn.gsmarena.com/imgroot/reviews/22/apple-iphone-se-2022/-728x314/gsmarena_001.jpg" class="img-thumbnail grayscale">
     
      </figure>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <figure>
        <img src="https://static.digit.in/product/thumb_179597_product_td_300.jpeg?tr=w-1200" class="img-thumbnail grayscale">
     
      </figure>
    </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\MobWeb\resources\views/gallery.blade.php ENDPATH**/ ?>