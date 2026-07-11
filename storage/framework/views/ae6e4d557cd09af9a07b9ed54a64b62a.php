<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'B University'); ?> — Universitas Pilihan Anda</title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Website resmi Universitas B University.'); ?>">

    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php echo $__env->yieldPushContent('head'); ?>
</head>
<body class="min-h-screen bg-white text-slate-800 antialiased font-sans">

    
    <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <main class="min-h-[60vh]">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH D:\rpl-rafael\Nommensen\resources\views/layouts/app.blade.php ENDPATH**/ ?>