
<?php $__env->startSection("content"); ?>
<section style="paddin-top:60px">
<div class="container">
    <div class=row>
        <div class=".col-md-6 offset-md-3">
            <div class="card">
            <div class=card-header">
               <h1>CONTACT US</h1>
            </div>
            <div class="card-body">
                <?php if(Session::has('message_sent')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('message_sent')); ?>

                </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('contact.send')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?> 
                    <div class="form-group">
                        <label for="name" style="color:white;">NAME</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="email" style="color:white;">EMAIL</label>
                        <input type="text" name="email" class="form-control"/>
                    </div>  
                    <div class="form-group">
                        <label for="phone" style="color:white;">Phone</label>
                        <input type="text" name="phone" class="form-control"/>
                    </div> 
                    <div class="form-group">
                        <label for="msg" style="color:white;">Message</label>
                        <textarea name="msg" class="form-control"></textarea>
                    </div>   
                    <button type="submit" class="btn btn-primary float-right">Submit</submit>
                </form>    
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\MobWeb\resources\views/contact-us.blade.php ENDPATH**/ ?>