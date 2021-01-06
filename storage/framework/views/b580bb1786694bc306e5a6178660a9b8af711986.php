<?php $__env->startSection($section); ?>
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount($component, $componentParameters)->dom;
} elseif ($_instance->childHasBeenRendered('Aig3PXE')) {
    $componentId = $_instance->getRenderedChildComponentId('Aig3PXE');
    $componentTag = $_instance->getRenderedChildComponentTagName('Aig3PXE');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Aig3PXE');
} else {
    $response = \Livewire\Livewire::mount($component, $componentParameters);
    $dom = $response->dom;
    $_instance->logRenderedChild('Aig3PXE', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sepatupedia\vendor\livewire\livewire\src\Macros/livewire-view.blade.php ENDPATH**/ ?>