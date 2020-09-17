

<?php $__env->startSection('titre'); ?>
    Les factures
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <p>C'est la facture n° <?php echo e($numero); ?></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Test\resources\views/facture.blade.php ENDPATH**/ ?>