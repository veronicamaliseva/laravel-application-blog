  
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row pt-5 pb-3">
        <div class="col blogs-header">
        <h5>LATEST BLOG POST</h5>
          <hr>
          </div>
    </div>
    <div class="row">
      <div class="col head">
      <a href="/single-blog">
         <div class="top-image top-blog d-flex flex-wrap align-content-end" style="background-image: linear-gradient(rgba(255,259,250,0.6), rgba(255,250,250,0.6)), url(/blog/blogs/image/header-blog.jpg)">
         <h6>Artist Mariah Dekkenga Uses a Board  <br>Game to Rethink Abstract Painting</h6>
         <p>In order to visit Mariah Dekkenga’s current show, “Non-Zero Sum,” at Situations on the Lower East Side of Manhattan, 
         <br>one has to make a series of choices. What time to leave to make it there? At the subway station, run to make the 
         train?<br> Wait for the walk sign at the crosswalk or jaywalk? Say hello to old friends on the sidewalk?</p>
       </div>
       </a>
    </div>
  </div>
</div>

<div class="container">
    <div class="row pt-5 pb-5">
        <?php $__currentLoopData = $blogi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <div class="col-12 col-sm-6 col-lg-3 all-blogs">
             <img class="blog pt-3 pb-1" src="<?php echo e($item->img); ?>" alt="">
                <p class="data"><?php echo e($item->Autor); ?></p>
                   <h6><?php echo e($item->title); ?></h6>
                  <p><?php echo e($item->body); ?></p>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\_blog\resources\views/pages/blogs.blade.php ENDPATH**/ ?>