<body>
    <div class="container">
    <a style="margin-left: 45%; margin-bottom: 10px margin-top : 5px;" href="/pockets" class="btn btn-info" role="button">Home</a>
        <h2 style="text-align:center;">Add a new Pocket</h2>
        <?php if($count > 0): ?>
        <a style="margin-left: 45%; margin-bottom: 10px;" href="/pocket/show" class="btn btn-info" role="button">View Pockets</a>
        <?php endif; ?>
        <form method="POST" action="/api/v1/pockets/">
  
            <?php echo csrf_field(); ?>
  
            <div class="form-group">
                <label>Pocket Title :</label>
                <input type="text" name="title" class="form-control" placeholder="Give a Title for your Pocket">
                <?php if($errors->has('title')): ?>
                    <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
                <?php endif; ?>
            </div>
   
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cto/read-it-later-shimul/resources/views/newPocket.blade.php ENDPATH**/ ?>