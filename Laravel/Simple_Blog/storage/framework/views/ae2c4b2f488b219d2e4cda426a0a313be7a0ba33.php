

 
<?php $__env->startSection('content'); ?>

    <div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                  <a class="btn btn-success ml-5" href="<?php echo e(route('items.index')); ?>">Back</a>
                </h4>
            </div>
         </div>
       
          <!--  <form action="<?php echo e(route('items.update',$item->id)); ?>" method="POST">-->
               <!-- <?php echo csrf_field(); ?>-->
               <!--  <?php echo method_field('PUT'); ?>-->
               <?php echo Form::open(['route'=>['items.update',$item->id],'method'=>'put']); ?>

                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                          <!--   <input type="text" name="title" value="<?php echo e($item->title); ?>" class="form-control" placeholder="Title">-->
                          <?php echo Form::text('title',$item->title,['placeholder'=>'Title..','require']); ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Body:</strong>
                          <!--   <textarea class="form-control" style="height:150px" name="body"  placeholder="body"><?php echo e($item->body); ?></textarea>-->
                          <?php echo Form::text('body',$item->body,['placeholder'=>'Body...','require']); ?>


                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <?php $__env->stopSection(); ?>



<?php echo $__env->make('items.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI_OpenSource\laravel\resources\views/items/edit.blade.php ENDPATH**/ ?>