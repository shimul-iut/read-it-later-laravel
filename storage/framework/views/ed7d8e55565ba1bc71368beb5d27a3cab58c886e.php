    <body>
        <div class="container mt-5">
            <h3 style="text-align:center;">Read It Later - Pockets and Contents</h3>
            <a style="margin-left: 45%; margin-bottom: 5px;" href="/pocket/new" class="btn btn-info" role="button">Create Pocket</a>
            <?php if(count($data) > 0): ?>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Content Title</th>
                        <th scope="col">Content URL</th>
                        <th scope="col">Content Preview</th>
                        <th scope="col">Content Excerpt</th>
                        <th scope="col">Pocket Title</th>
                        <th scope="col">Pocket User</th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       
                        <tr>
                            <td><?php echo e($content->content_title); ?></td>
                            <td><a href="<?php echo e($content->content_url); ?>"><?php echo e($content->content_url); ?></td>
                            <?php if($content->content_heading_image_url != null || $content->content_heading_image_url != '' ): ?>
                                <td style="background-image:url(<?php echo e($content->content_heading_image_url); ?>);background-repeat:no-repeat;background-size:250px 180px;   width: 250px; height: 180px;'"></td>
                            <?php else: ?>
                            <td>Preview Not Found</td>
                            <?php endif; ?>
                            <td><?php echo e($content->content_excerpt); ?></td>
                            <td><?php echo e($content->pocket->title); ?></td>
                            <td><?php echo e($content->pocket->user->name); ?></td>
                            <td>
                                <a></a>
                                <form method="POST" action="/api/v1/contents/<?php echo e($content->id); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('DELETE')); ?>


                                    <div class="form-group">
                                        <input type="submit" class="btn btn-danger delete-content" value="Delete Content">
                                    </div>
                                </form>
                            </td>
                        </tr>
                      
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>
        </div>
    </body>
    </html>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
>
    $('.delete-content').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
    </script>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cto/read-it-later-shimul/resources/views/allPockets.blade.php ENDPATH**/ ?>