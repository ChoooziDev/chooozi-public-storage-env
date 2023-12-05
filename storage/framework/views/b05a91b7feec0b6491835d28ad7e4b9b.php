<div <?php if($ignore ?? true): ?> wire:ignore <?php endif; ?>>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => $title]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <div class="relative inline-block w-full">
        <textarea name="<?php echo e($name ?? ''); ?>" id="<?php echo e($id ?? ''); ?>" class="w-full summernote"></textarea>
        
        <input type="hidden" id="<?php echo e($id ?? ($name ?? '')); ?>-Input"
            <?php if($defer ?? true): ?> wire:model.defer='<?php echo e($name ?? ''); ?>'
        <?php else: ?>
            wire:model='<?php echo e($name ?? ''); ?>' <?php endif; ?> />
    </div>

    
    <?php if (! $__env->hasRenderedOnce('87622815-bd51-4a06-a6cc-4e1a20177beb')): $__env->markAsRenderedOnce('87622815-bd51-4a06-a6cc-4e1a20177beb');
$__env->startPush('styles'); ?>
        <link href="<?php echo e(asset('css/summernote-lite.min.css')); ?>" rel="stylesheet">
    <?php $__env->stopPush(); endif; ?>
    <?php if (! $__env->hasRenderedOnce('75689b25-8a28-4360-8c84-88186b7fed6f')): $__env->markAsRenderedOnce('75689b25-8a28-4360-8c84-88186b7fed6f');
$__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('js/jquery-3.4.1.slim.min.js')); ?>" type="module"></script>
        <script src="<?php echo e(asset('js/summernote-lite.min.js')); ?>" type="module"></script>
        <script src="<?php echo e(asset('js/summernote-handler.js')); ?>" type="module"></script>
    <?php $__env->stopPush(); endif; ?>

</div>
<?php /**PATH /www/wwwroot/new.chooozi.com/resources/views/components/input/summernote.blade.php ENDPATH**/ ?>