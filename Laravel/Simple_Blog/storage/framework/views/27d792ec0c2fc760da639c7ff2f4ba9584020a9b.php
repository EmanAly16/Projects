
 
<?php $__env->startSection('content'); ?>
<div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                  <a class="btn btn-success ml-5" href="<?php echo e(route('items.index')); ?>">Back</a>
                </h4>
            </div>
         </div>
        
               
          <!--  <form action="<?php echo e(route('items.store')); ?>" method="POST">-->
       <?php echo Form::open(['url'=>'items','method'=>'post']); ?>       
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h4>Title:</h4>
                            <?php echo Form::text('title','',['placeholder'=>'Title..','require']); ?>

                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alter alter-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <!--<input type="text" name="title" class="form-control" placeholder="Name">-->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h4>Body:</h4>
                            <?php echo Form::text('body','',['placeholder'=>'Body...','require']); ?>

                            <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alter alter-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                           <!-- <textarea class="form-control" style="height:150px" name="body" placeholder="Description"></textarea>-->
                        </div>
                    </div>
                  

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('items.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI_OpenSource\laravel\resources\views/items/create.blade.php ENDPATH**/ ?>