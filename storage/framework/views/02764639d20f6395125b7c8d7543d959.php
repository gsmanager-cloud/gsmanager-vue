<?php if (isset($component)) { $__componentOriginal51a49dfec36c6c091ac1ac6be8008780 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal51a49dfec36c6c091ac1ac6be8008780 = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.card','data' => ['class' => 'mt-6 overflow-x-auto']] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-6 overflow-x-auto']); ?>
    <div
        x-data="{
            includeVendorFrames: false,
            index: <?php echo e($exception->defaultFrame()); ?>,
        }"
    >
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3" x-clock>
            <?php if (isset($component)) { $__componentOriginal92415d192b4e1b62868f1ae22a7a73b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92415d192b4e1b62868f1ae22a7a73b7 = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.trace','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::trace'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \GSManager\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92415d192b4e1b62868f1ae22a7a73b7)): ?>
<?php $attributes = $__attributesOriginal92415d192b4e1b62868f1ae22a7a73b7; ?>
<?php unset($__attributesOriginal92415d192b4e1b62868f1ae22a7a73b7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92415d192b4e1b62868f1ae22a7a73b7)): ?>
<?php $component = $__componentOriginal92415d192b4e1b62868f1ae22a7a73b7; ?>
<?php unset($__componentOriginal92415d192b4e1b62868f1ae22a7a73b7); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc43c9397a6c1269530dc01129780ad1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc43c9397a6c1269530dc01129780ad1c = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.editor','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \GSManager\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc43c9397a6c1269530dc01129780ad1c)): ?>
<?php $attributes = $__attributesOriginalc43c9397a6c1269530dc01129780ad1c; ?>
<?php unset($__attributesOriginalc43c9397a6c1269530dc01129780ad1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc43c9397a6c1269530dc01129780ad1c)): ?>
<?php $component = $__componentOriginalc43c9397a6c1269530dc01129780ad1c; ?>
<?php unset($__componentOriginalc43c9397a6c1269530dc01129780ad1c); ?>
<?php endif; ?>
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
<?php /**PATH C:\Users\tyukh\Herd\gsmanager\gsmanager\framework\src\GSManager\Foundation\Providers/../resources/exceptions/renderer/components/trace-and-editor.blade.php ENDPATH**/ ?>