<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title><?php echo e(config('app.name', 'Laravel')); ?></title>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
  <div id="app">
    <index></index>
  </div>
  <!-- Scripts -->
  <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</body>
</html><?php /**PATH /home/cto/read-it-later-shimul/resources/views/welcome.blade.php ENDPATH**/ ?>