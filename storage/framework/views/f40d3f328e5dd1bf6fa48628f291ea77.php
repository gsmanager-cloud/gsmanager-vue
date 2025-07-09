<?php if (isset($component)) { $__componentOriginal51a49dfec36c6c091ac1ac6be8008780 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal51a49dfec36c6c091ac1ac6be8008780 = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.card','data' => []] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="md:flex md:items-center md:justify-between md:gap-2">
        <div class="min-w-0">
            <div class="inline-block rounded-full bg-red-500/20 px-3 py-2 max-w-full text-sm font-bold leading-5 text-red-500 truncate lg:text-base dark:bg-red-500/20">
                <span class="hidden md:inline">
                    <?php echo e($exception->class()); ?>

                </span>
                <span class="md:hidden">
                    <?php echo e(implode(' ', array_slice(explode('\\', $exception->class()), -1))); ?>

                </span>
            </div>
            <div class="mt-4 text-lg font-semibold text-gray-900 break-words dark:text-white lg:text-2xl">
                <?php echo e($exception->message()); ?>

            </div>
        </div>

        <div class="hidden text-right shrink-0 md:block md:min-w-64 md:max-w-80">
            <div>
                <span class="inline-block rounded-full bg-gray-200 px-3 py-2 text-sm leading-5 text-gray-900 max-w-full truncate dark:bg-gray-800 dark:text-white">
                    <?php echo e($exception->request()->method()); ?> <?php echo e($exception->request()->httpHost()); ?>

                </span>
            </div>
            <div class="px-4">
                <span class="text-sm text-gray-500 dark:text-gray-400">PHP <?php echo e(PHP_VERSION); ?> — GSManager <?php echo e(app()->version()); ?></span>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal51a49dfec36c6c091ac1ac6be8008780)): ?>
<?php $attributes = $__attributesOriginal51a49dfec36c6c091ac1ac6be8008780; ?>
<?php unset($__attributesOriginal51a49dfec36c6c091ac1ac6be8008780); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal51a49dfec36c6c091ac1ac6be8008780)): ?>
<?php $component = $__componentOriginal51a49dfec36c6c091ac1ac6be8008780; ?>
<?php unset($__componentOriginal51a49dfec36c6c091ac1ac6be8008780); ?>
<?php endif; ?>
<?php /**PATH C:\Users\tyukh\Herd\gsmanager\gsmanager\framework\src\GSManager\Foundation\Providers/../resources/exceptions/renderer/components/header.blade.php ENDPATH**/ ?>