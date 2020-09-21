<h3>
List page
</h3>

    <div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                  <a class="btn btn-success ml-5" href="<?php echo e(route('items.create')); ?>" id="createNewItem"> Create New Item</a>
                </h4>
            </div>
         </div>
         <div class="card-body">
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            <table border="2">
                <tr>
                    <th width="5%">Title</th>
                    <th>Body</th>
                    <th>Operation</th>
                </tr>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->body); ?></td>
                    <td>
                        <form action="<?php echo e(route('items.destroy',$item->id)); ?>" method="POST">
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('items.show',$item->id)); ?>">Show</a>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('items.edit',$item->id)); ?>">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
<?php /**PATH C:\xampp\htdocs\ITI_OpenSource\laravel\resources\views/index.blade.php ENDPATH**/ ?>