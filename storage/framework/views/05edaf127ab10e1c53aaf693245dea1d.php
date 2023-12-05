<?php $__env->startSection('title', __('CRON Job') ); ?>
<div>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('CRON Job')).' ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('CRON Job')).' ']); ?>
        <div class="p-5 border shadow">
            <p>
                <?php echo e(__("How to setup cron job on your server:")); ?> <a href="https://bit.ly/3DoNGBm" target="_blank" class="font-bold underline text-primary-500">https://bit.ly/3DoNGBm</a>
            </p>
            <hr class="my-6" />
            <p class="mb-2 text-2xl font-bold"><?php echo e(__("Cron job on Server")); ?></p>
            <p class="mb-2"><?php echo e(__("For server cron job setup, copy the text below and paste into your cron job tab on your server")); ?></p>
            <div class="space-y-2">
                <div class="w-full p-2 bg-gray-200 rounded md:w-9/12 broder">
                    php <?php echo e(base_path()); ?>/artisan schedule:run >> /dev/null 2>&1
                </div>
                <div class="w-full p-2 bg-gray-200 rounded md:w-9/12 broder">
                    /usr/bin/php <?php echo e(base_path()); ?>/artisan schedule:run >> /dev/null 2>&1
                </div>
                <div class="w-full p-2 bg-gray-200 rounded md:w-9/12 broder">
                    /usr/local/bin/php <?php echo e(base_path()); ?>/artisan schedule:run >> /dev/null 2>&1
                </div>
                <p class="mt-4 mb-2 text-lg font-semibold"><?php echo e(__("For queued jobs/tasks")); ?></p>
                <div class="w-full p-2 bg-gray-200 rounded md:w-9/12 broder">
                    php <?php echo e(base_path()); ?>/artisan queue:work --max-time=110
                </div>
                <div class="w-full p-2 bg-gray-200 rounded md:w-9/12 broder">
                    /usr/bin/php <?php echo e(base_path()); ?>/artisan queue:work --max-time=110
                </div>
                <div class="w-full p-2 bg-gray-200 rounded md:w-9/12 broder">
                    /usr/local/bin/php <?php echo e(base_path()); ?>/artisan queue:work --max-time=110
                </div>
            </div>
            <p class="mx-4 my-2 text-sm font-light"><span class="font-semibold text-red-500"><?php echo e(__("Note:")); ?></span> <?php echo e(__("You don't have to use all the 3 commands, just use the one with the php path that matches yours.")); ?></p>
            <hr class="my-6" />
            <p class="my-2 text-sm font-medium">
                <?php echo e(__("Last Run Time")); ?>:
                <span class="text-xl font-bold"><?php echo e(setting('cronJobLastRun', __('Never'))); ?></span>
            </p>
            <hr class="my-6" />
            <p class="mb-2 text-2xl font-bold"><?php echo e(__("External cron job managers")); ?></p>
            <p class="mb-2"><?php echo e(__("For external cron job managers like")); ?>(e.g https://cron-job.org). <?php echo e(__("Copy the url below:")); ?></p>
            <div class="items-center block w-full space-y-2 md:space-x-2 md:flex">
                <div class="w-full p-2 bg-gray-200 rounded md:w-9/12 broder">
                    <?php echo e(route('cron.job')); ?>?key=<?php echo e($cronJobKey ?? ''); ?>

                </div>
                <div class="w-full md:w-3/12">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['title' => ''.e(__('Generate New Key')).'','wireClick' => 'genNewKey','noMargin' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Generate New Key')).'','wireClick' => 'genNewKey','noMargin' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
            </div>


        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>


</div>
<?php /**PATH /www/wwwroot/new.chooozi.com/resources/views/livewire/cron-job.blade.php ENDPATH**/ ?>