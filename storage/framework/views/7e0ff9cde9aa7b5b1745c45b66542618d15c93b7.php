<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9565ccb9d1.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">

    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>


</head>

<body>
    <div id="app">
        <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('navbar')->dom;
} elseif ($_instance->childHasBeenRendered('14NXJ8s')) {
    $componentId = $_instance->getRenderedChildComponentId('14NXJ8s');
    $componentTag = $_instance->getRenderedChildComponentTagName('14NXJ8s');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('14NXJ8s');
} else {
    $response = \Livewire\Livewire::mount('navbar');
    $dom = $response->dom;
    $_instance->logRenderedChild('14NXJ8s', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </main>

    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\sepatupedia\resources\views/layouts/app.blade.php ENDPATH**/ ?>