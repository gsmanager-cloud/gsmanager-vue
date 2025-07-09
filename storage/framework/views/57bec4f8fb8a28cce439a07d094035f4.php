<?php if (isset($component)) { $__componentOriginal08681c4e1efb79c32448d25948a6f5ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08681c4e1efb79c32448d25948a6f5ba = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.layout','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \GSManager\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
    <div class="renderer container mx-auto lg:px-8">
        <?php if (isset($component)) { $__componentOriginal1336aba530b7d6fb700cbd839f65ae97 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1336aba530b7d6fb700cbd839f65ae97 = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.navigation','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \GSManager\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1336aba530b7d6fb700cbd839f65ae97)): ?>
<?php $attributes = $__attributesOriginal1336aba530b7d6fb700cbd839f65ae97; ?>
<?php unset($__attributesOriginal1336aba530b7d6fb700cbd839f65ae97); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1336aba530b7d6fb700cbd839f65ae97)): ?>
<?php $component = $__componentOriginal1336aba530b7d6fb700cbd839f65ae97; ?>
<?php unset($__componentOriginal1336aba530b7d6fb700cbd839f65ae97); ?>
<?php endif; ?>

        <main class="px-6 pb-12 pt-6">
            <div class="container mx-auto">
                <?php if (isset($component)) { $__componentOriginal0eb57bd4c5d0d35cfe224bb347b249af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0eb57bd4c5d0d35cfe224bb347b249af = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.header','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \GSManager\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0eb57bd4c5d0d35cfe224bb347b249af)): ?>
<?php $attributes = $__attributesOriginal0eb57bd4c5d0d35cfe224bb347b249af; ?>
<?php unset($__attributesOriginal0eb57bd4c5d0d35cfe224bb347b249af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eb57bd4c5d0d35cfe224bb347b249af)): ?>
<?php $component = $__componentOriginal0eb57bd4c5d0d35cfe224bb347b249af; ?>
<?php unset($__componentOriginal0eb57bd4c5d0d35cfe224bb347b249af); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalfcd124845183e4b43c0581b8daa967ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfcd124845183e4b43c0581b8daa967ad = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.trace-and-editor','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::trace-and-editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \GSManager\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfcd124845183e4b43c0581b8daa967ad)): ?>
<?php $attributes = $__attributesOriginalfcd124845183e4b43c0581b8daa967ad; ?>
<?php unset($__attributesOriginalfcd124845183e4b43c0581b8daa967ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfcd124845183e4b43c0581b8daa967ad)): ?>
<?php $component = $__componentOriginalfcd124845183e4b43c0581b8daa967ad; ?>
<?php unset($__componentOriginalfcd124845183e4b43c0581b8daa967ad); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalcff8059292f18a5f3835e98cf26d3704 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcff8059292f18a5f3835e98cf26d3704 = $attributes; } ?>
<?php $component = GSManager\View\AnonymousComponent::resolve(['view' => 'gsmanager-exceptions-renderer::components.context','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gsmanager-exceptions-renderer::context'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof GSManager\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\GSManager\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \GSManager\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcff8059292f18a5f3835e98cf26d3704)): ?>
<?php $attributes = $__attributesOriginalcff8059292f18a5f3835e98cf26d3704; ?>
<?php unset($__attributesOriginalcff8059292f18a5f3835e98cf26d3704); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcff8059292f18a5f3835e98cf26d3704)): ?>
<?php $component = $__componentOriginalcff8059292f18a5f3835e98cf26d3704; ?>
<?php unset($__componentOriginalcff8059292f18a5f3835e98cf26d3704); ?>
<?php endif; ?>
            </div>
        </main>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08681c4e1efb79c32448d25948a6f5ba)): ?>
<?php $attributes = $__attributesOriginal08681c4e1efb79c32448d25948a6f5ba; ?>
<?php unset($__attributesOriginal08681c4e1efb79c32448d25948a6f5ba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08681c4e1efb79c32448d25948a6f5ba)): ?>
<?php $component = $__componentOriginal08681c4e1efb79c32448d25948a6f5ba; ?>
<?php unset($__componentOriginal08681c4e1efb79c32448d25948a6f5ba); ?>
<?php endif; ?>
<?php /**PATH C:\Users\tyukh\Herd\gsmanager\gsmanager\framework\src\GSManager\Foundation\Providers/../resources/exceptions/renderer/show.blade.php ENDPATH**/ ?>