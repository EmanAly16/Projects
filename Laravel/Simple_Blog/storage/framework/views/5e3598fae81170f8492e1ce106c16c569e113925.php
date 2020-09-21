

<!--;-->
 
<?php $__env->startSection('content'); ?>

       
            <table border="2">
                <tr>
                    <th width="10%">Title</th>
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
           </br>
        </div>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('items.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI_OpenSource\laravel\resources\views/items/index.blade.php ENDPATH**/ ?>