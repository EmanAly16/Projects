<h3>Edit Success</h3>



    <div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                <h4 class="card-title"><strong>Edit Page</strong> CRUD Operations in Laravel 6 Example - nicesnippets.com  
                  <a class="btn btn-success ml-5" href="<?php echo e(route('items.index')); ?>">Back</a>
                </h4>
            </div>
         </div>
         <div class="card-body">
           <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
               
            <form action="<?php echo e(route('items.update',$item->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
              
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="<?php echo e($item->title); ?>" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" style="height:150px" name="description"  placeholder="Description"><?php echo e($item->body); ?></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>


<?php /**PATH C:\xampp\htdocs\ITI_OpenSource\laravel\resources\views/edit.blade.php ENDPATH**/ ?>