<?php $__env->startSection('title'); ?>
    Welcome!
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="row">
        <div class="col-md-6 sign_up">
            <h3>Sign Up</h3>
            <form action="<?php echo e(route('signup')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

                <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="<?php echo e(Request::old('email')); ?>">
                </div>
                <div class="form-group <?php echo e($errors->has('first_name') ? 'has-error' : ''); ?>">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo e(Request::old('first_name')); ?>">
                </div>
                <div class="form-group <?php echo e($errors->has('user_name') ? 'has-error' : ''); ?>">
                    <label for="user_name">Your User Name</label>
                    <input class="form-control" type="text" name="user_name" id="user_name" value="<?php echo e(Request::old('user_name')); ?>">
                </div>
                <div class="form-group <?php echo e($errors->has('user_image') ? 'has-error' : ''); ?>">
                    <label for="image">Your Image</label>
                    <input class="form-control" type="file" id="user_image" name="user_image">
                </div>
                <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="<?php echo e(Request::old('password')); ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
            </form>
        </div>
        <div class="col-md-5 sign_in col-md-offset-1">
            <h3>Sign In</h3>
            <form action="<?php echo e(route('signin')); ?>" method="post">
                <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="<?php echo e(Request::old('email')); ?>">
                </div>
                <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="<?php echo e(Request::old('password')); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<style>
    body{
        background-color: #e6ecf0 !important;
    }
    .navbar,.sign_up,.sign_in{
        background-color: #FFFFFF !important;
    }
   
</style>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>