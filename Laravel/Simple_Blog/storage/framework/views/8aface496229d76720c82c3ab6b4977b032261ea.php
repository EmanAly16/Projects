<div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                <h4 class="card-title"><strong>Show Page</strong> 
                  <a class="btn btn-success ml-5" href="<?php echo e(route('items.index')); ?>">Back</a>
                </h4>
            </div>
         </div>
         <div class="card-body">
           <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <?php echo e($item->title); ?>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <?php echo e($item->body); ?>

                    </div>
                </div>
            </div>
        </div><?php /**PATH C:\xampp\htdocs\ITI_OpenSource\laravel\resources\views/show.blade.php ENDPATH**/ ?>