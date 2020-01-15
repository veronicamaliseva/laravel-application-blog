  
<?php $__env->startSection('content'); ?>

<div class="bg-contact">
  <div class="container">
    <div class="row pt-5">
        <div class="col text-center">
            <h5>CONTACT ME</h5>
        </div>
    </div>
        <div class="row pt-5">
          <div class="col-12 col-sm-6 col-lg-5 order-1 order-sm-0">
            <div class="mapouter">
                <div class="gmap_canvas">
                <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=elku%20iela%204&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>
            </div>   
          </div>
          <div class="col-12 col-sm-6 col-lg-7 order-0 order-sm-1 mb-5 mb-sm-0">
            <form id="inputform" action="/contact" method="POST">
              <?php echo csrf_field(); ?>
              <div class="row label pb-2">
                  <div class="col">
                    <div class="form-label">
                    <label for="name">Full Name</label>
                    <input name="contact_name" type="text" id="name" class="form-control" placeholder="Full name" required minlength="2">
                  </div>
                  </div>
                  <div class="col">
                    <div class="form-label">
                      <label for="exampleInputEmail1">Email address</label>
                      <input name="contact_email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                    </div>
                    </div>
              </div>
             
                  <div class="row pb-3">
                    <div class="col">
                      <div class="form-label">
                      <label for="exampleFormControlTextarea1">Your Message</label>
                      <input name="contact_textarea" class="form-control" id="exampleFormControlTextarea1" rows="5" required minlength="10"></textarea>
                      </div>
                    </div>
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
  </div>
</div>
<div class="container">
  <div class="row pt-5">
      <div class="col blogs-header">
        <h5>ABOUT ME</h5>
        <hr>
      </div>
  </div>   
   <div class="row pt-3 pb-5">
   <div class="col-12 col-sm-6 col-lg-2">
     <img class="d-block img-fluid pb-2" src="/blog/contact/img/pic.jpg" alt="">
  </div>
  <div class="col-12 col-sm-6 col-lg-10">
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut odio massa. Sed nec magna et ante viverra iaculis sed vitae erat. Proin sagittis urna in erat interdum, quis semper dolor tincidunt. Sed ipsum felis, maximus non leo scelerisque, pulvinar eleifend nisl. Mauris eget malesuada ligula. Praesent bibendum elementum tincidunt. Quisque ac tellus vel lectus congue sagittis quis condimentum ante.</p>
   <p><b>This page is created by Veronika Maliseva</b></p>
  </div>
   
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\_blog\resources\views/pages/contact.blade.php ENDPATH**/ ?>