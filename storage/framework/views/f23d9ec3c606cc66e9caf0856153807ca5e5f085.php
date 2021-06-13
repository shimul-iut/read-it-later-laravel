<body>
    <div class="container">
    <   <a style="margin-left: 45%; margin-bottom: 10px;" href="/pockets" class="btn btn-info" role="button">Home</a>
        <h2 style="text-align:center;">Add a new Website to your pocket</h2>
        <a style="margin-left: 45%; margin-bottom: 10px;" href="/pockets" class="btn btn-info" role="button">Show Contents</a>
      
   
        <form method="POST" action="/api/v1/pockets/<?php echo e($pocketID); ?>/contents">
  
            <?php echo csrf_field(); ?>
  
            <div class="form-group">
                <label>Provide URL :</label>
                <input type="text" name="content_url" class="form-control" placeholder="Url">
                <?php if($errors->has('content_url')): ?>
                    <span class="text-danger"><?php echo e($errors->first('content_url')); ?></span>
                <?php endif; ?>
            </div>
   
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cto/read-it-later-shimul/resources/views/newContent.blade.php ENDPATH**/ ?>