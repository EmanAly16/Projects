
 
<?php $__env->startSection('content'); ?>
<div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                  <a class="btn btn-success ml-5" href="<?php echo e(route('items.index')); ?>">Back</a>
                </h4>
            </div>
         </div>
         <div class="card-body">
           <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <?php echo e($item->title); ?>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Body:</strong>
                        <?php echo e($item->body); ?>

                    </div>
                </div>
            </div>
            

        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('items.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI_OpenSource\laravel\resources\views/items/show.blade.php ENDPATH**/ ?>