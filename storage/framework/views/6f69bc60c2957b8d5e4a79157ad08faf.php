<div class="hidden overflow-x-auto sm:col-span-1 lg:block">
    <div
        class="h-[35.5rem] scrollbar-hidden trace text-sm text-gray-400 dark:text-gray-300"
    >
        <div class="mb-2 inline-block rounded-full bg-red-500/20 px-3 py-2 dark:bg-red-500/20 sm:col-span-1">
            <button
                @click="includeVendorFrames = !includeVendorFrames"
                class="inline-flex items-center font-bold leading-5 text-red-500"
            >
                <span x-show="includeVendorFrames">Collapse</span>
                <span
                    x-cloak
                    x-show="!includeVendorFrames"
                    >Expand</span
                >
                <span class="ml-1">vendor frames</span>

                <div class="flex flex-col ml-1 -mt-2" x-cloak x-show="includeVendorFrames">
                    <?php if (isset($component)) { $__componentOriginald2245094a4dd60551ecf3992139a9c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2245094a4dd60551ecf3992139a9c28 = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.icons.chevron-down','data' => []] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::icons.chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2245094a4dd60551ecf3992139a9c28)): ?>
<?php $attributes = $__attributesOriginald2245094a4dd60551ecf3992139a9c28; ?>
<?php unset($__attributesOriginald2245094a4dd60551ecf3992139a9c28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2245094a4dd60551ecf3992139a9c28)): ?>
<?php $component = $__componentOriginald2245094a4dd60551ecf3992139a9c28; ?>
<?php unset($__componentOriginald2245094a4dd60551ecf3992139a9c28); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalcee8345d82eb369de466df18556783fa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcee8345d82eb369de466df18556783fa = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.icons.chevron-up','data' => []] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::icons.chevron-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcee8345d82eb369de466df18556783fa)): ?>
<?php $attributes = $__attributesOriginalcee8345d82eb369de466df18556783fa; ?>
<?php unset($__attributesOriginalcee8345d82eb369de466df18556783fa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcee8345d82eb369de466df18556783fa)): ?>
<?php $component = $__componentOriginalcee8345d82eb369de466df18556783fa; ?>
<?php unset($__componentOriginalcee8345d82eb369de466df18556783fa); ?>
<?php endif; ?>
                </div>

                <div class="flex flex-col ml-1 -mt-2" x-cloak x-show="! includeVendorFrames">
                    <?php if (isset($component)) { $__componentOriginalcee8345d82eb369de466df18556783fa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcee8345d82eb369de466df18556783fa = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.icons.chevron-up','data' => []] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::icons.chevron-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcee8345d82eb369de466df18556783fa)): ?>
<?php $attributes = $__attributesOriginalcee8345d82eb369de466df18556783fa; ?>
<?php unset($__attributesOriginalcee8345d82eb369de466df18556783fa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcee8345d82eb369de466df18556783fa)): ?>
<?php $component = $__componentOriginalcee8345d82eb369de466df18556783fa; ?>
<?php unset($__componentOriginalcee8345d82eb369de466df18556783fa); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald2245094a4dd60551ecf3992139a9c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2245094a4dd60551ecf3992139a9c28 = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.icons.chevron-down','data' => []] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::icons.chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2245094a4dd60551ecf3992139a9c28)): ?>
<?php $attributes = $__attributesOriginald2245094a4dd60551ecf3992139a9c28; ?>
<?php unset($__attributesOriginald2245094a4dd60551ecf3992139a9c28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2245094a4dd60551ecf3992139a9c28)): ?>
<?php $component = $__componentOriginald2245094a4dd60551ecf3992139a9c28; ?>
<?php unset($__componentOriginald2245094a4dd60551ecf3992139a9c28); ?>
<?php endif; ?>
                </div>
            </button>
        </div>

        <div class="mb-12 space-y-2">
            <?php $__currentLoopData = $exception->frames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $frame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(! $frame->isFromVendor()): ?>
                    <?php
                        $vendorFramesCollapsed = $exception->frames()->take($loop->index)->reverse()->takeUntil(fn ($frame) => ! $frame->isFromVendor());
                    ?>

                    <div x-show="! includeVendorFrames">
                        <?php if($vendorFramesCollapsed->isNotEmpty()): ?>
                            <div class="text-gray-500">
                                <?php echo e($vendorFramesCollapsed->count()); ?> vendor frame<?php echo e($vendorFramesCollapsed->count() > 1 ? 's' : ''); ?> collapsed
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="<?php echo e($frame->isFromVendor() ? 'includeVendorFrames' : 'true'); ?>"
                    @click="index = <?php echo e($loop->index); ?>"
                >
                    <div
                        x-bind:class="
                            index === <?php echo e($loop->index); ?>

                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300"><?php echo e($frame->source()); ?></span>
                                    <span class="font-mono text-xs">:<?php echo e($frame->line()); ?></span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                <?php echo e($exception->frames()->get($loop->index + 1)?->callable()); ?>

                            </div>
                        </div>
                    </div>
                </button>

                <?php if(! $frame->isFromVendor() && $exception->frames()->slice($loop->index + 1)->reject(fn ($frame) => $frame->isFromVendor())->isEmpty()): ?>
                    <?php if($exception->frames()->slice($loop->index + 1)->count()): ?>
                        <div x-show="! includeVendorFrames">
                            <div class="text-gray-500">
                                <?php echo e($exception->frames()->slice($loop->index + 1)->count()); ?> vendor
                                frame<?php echo e($exception->frames()->slice($loop->index + 1)->count() > 1 ? 's' : ''); ?> collapsed
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\tyukh\Herd\gsmanager\gsmanager\framework\src\GSManager\Foundation\Providers/../resources/exceptions/renderer/components/trace.blade.php ENDPATH**/ ?>