<div>
<body>
        <div class="container mt-5">
        <a style="margin-left: 45%; margin-bottom: 10px margin-top : 5px;" href="/pockets" class="btn btn-info" role="button">Home</a>
            <h3 style="text-align:center;">Pocket List</h3>
            <a style="margin-left: 45%; margin-bottom: 10px;" href="/pocket/new" class="btn btn-info" role="button">Add Pocket</a>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Pocket ID</th>
                        <th scope="col">Pocket Name</th>
                        <th scope="col">Pocket User Title</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pocket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       
                        <tr>
                            <th scope="row"><?php echo e($pocket->id); ?></th>
                            <th scope="row"><?php echo e($pocket->title); ?></th>
            
                            <td><?php echo e($pocket->user->name); ?></td>
                            <td>
                                <a><a href="/create-new-content/<?php echo e($pocket->id); ?>" class="btn btn-success" role="button">Add Content</a></a>
                                
                            </td>
                        </tr>
                      
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </body>
</div>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cto/read-it-later-shimul/resources/views/addPocket.blade.php ENDPATH**/ ?>