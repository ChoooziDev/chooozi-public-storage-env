<div x-data="{ currentStep: <?php echo e($currentStep ?? 1); ?>, steps: <?php echo e($steps ?? 2); ?> }" <?php echo e($attributes->merge(['class' => 'bg-white rounded px-4 py-2'])); ?>>
    
    <!-- Top Navigation -->
    <div class="border-b-2 py-4">
        <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
            x-text="`<?php echo e(__('Step')); ?>: ${currentStep} <?php echo e(__('of')); ?> ${steps}`"></div>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div class="flex-1">
                <?php echo e($header ?? ''); ?>

            </div>

            <div class="flex items-center md:w-64">
                <div class="w-full bg-white rounded-full mr-2">
                    <div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                        :style="'width: ' + parseInt((currentStep / steps) * 100) + '%'"></div>
                </div>
                <div class="text-xs w-10 text-gray-600" x-text="parseInt((currentStep / steps) * 100) +'%'"></div>
            </div>
        </div>
    </div>
    
    <div>
        <?php echo e($body ?? ''); ?>

    </div>
</div>
<?php /**PATH /www/wwwroot/new.chooozi.com/resources/views/components/stepper/main.blade.php ENDPATH**/ ?>