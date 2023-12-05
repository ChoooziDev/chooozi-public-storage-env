<?php $__env->startSection('title', __('Payment Webhooks Settings')); ?>
<div>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Payment Webhooks Settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Webhooks Settings')).'']); ?>
        <p class="pb-4 text-sm italic">
            <span class="font-bold text-red-500"><?php echo e(__("Note")); ?>:</span> <?php echo e(__("Not all payment gateway support webhook")); ?>

        </p>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.webhook-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l4031989890-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4031989890-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4031989890-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4031989890-0');
} else {
    $response = \Livewire\Livewire::mount('tables.webhook-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4031989890-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH /www/wwwroot/new.chooozi.com/resources/views/livewire/settings/webhook_settings.blade.php ENDPATH**/ ?>