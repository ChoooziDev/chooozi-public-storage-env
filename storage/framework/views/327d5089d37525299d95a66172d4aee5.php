<?php $__env->startSection('title', __('Product Reviews')); ?>
    <div>

        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Product Reviews')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Product Reviews')).'']); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.product-review-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l1445566330-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1445566330-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1445566330-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1445566330-0');
} else {
    $response = \Livewire\Livewire::mount('tables.product-review-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1445566330-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    </div>
<?php /**PATH /www/wwwroot/new.chooozi.com/resources/views/livewire/product_reviews.blade.php ENDPATH**/ ?>