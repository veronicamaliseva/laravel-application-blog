<?php $__env->startSection('content'); ?>
<div class="container tumss">
    <div class="row pt-5 justify-content-center text-center">
      <div class="div login-header">
       <div class="col">
         <p>LOG IN</p>
         </div>
        </div>
       </div>
    </div>
    <div class="row pt-3 justify-content-center">
    <div class="col-md-5">
            <div class="card text-center">
                <div class="card-header dark pt-4"><?php echo e(__('SIGN IN WITH YOUR E-MAIL ADDRESS')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="card-text col-md-3 col-form-label text-md-right"><?php echo e(__('E-MAIL')); ?></label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="card-text col-md-3 col-form-label text-md-right"><?php echo e(__('PASSWORD')); ?></label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-3">
                            <div class="col">
                                <button type="submit" class="btn pt-3 email">
                                    <?php echo e(__('LOG IN')); ?>

                                </button>
                        </div>                              
                        </div>
                        <div class="form-group row justify-content-center mb-0">
                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                    </form>
                   
                </div>
            </div>
        </div>
        <div class="col-md-5">
        <div class="socials">
            <div class="card text-center">
                <div class="card-header pt-4"><?php echo e(__('OR LOG IN WITH')); ?></div>
                <div class="row justify-content-center pt-5 pb-5">
                    <a href="<?php echo e(route('fblogin')); ?>" class="btn facebook pt-3 pb-3"><i class="fab fa-facebook-square"></i>  <b>Log in with Facebook</b></a>
                </div>
            <p><b>ARE YOU NEW TO BLOG?</b></p>
            <div class="row justify-content-center pt-4 pb-4">
            <a href="/register" class="btn registration pt-3 pb-3"><b> REGISTER NOW</b></a>
            </div>
        </div>
        </div>
      
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\_blog\resources\views/auth/login.blade.php ENDPATH**/ ?>