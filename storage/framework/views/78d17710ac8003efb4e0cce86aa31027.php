

<?php $__env->startSection('title', 'Koleksi Buku'); ?>
<?php $__env->startSection('meta_description', 'Daftar koleksi buku Perpustakaan Digital Cendekia.'); ?>

<?php $__env->startSection('content'); ?>

<section class="bg-gradient-to-br from-blue-950 to-blue-800 py-20 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-blue-200">
            Perpustakaan Digital
        </p>

        <h1 class="mt-3 text-4xl font-extrabold sm:text-5xl">
            Koleksi Buku
        </h1>

        <p class="mt-5 max-w-3xl text-lg leading-8 text-blue-100">
            Temukan berbagai koleksi buku yang tersedia di Perpustakaan Digital Cendekia.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

            <div>
                <h2 class="text-2xl font-bold text-slate-900">
                    Daftar Buku
                </h2>

                <p class="mt-2 text-slate-600">
                    Koleksi buku yang telah ditambahkan melalui panel admin.
                </p>
            </div>

            <div class="rounded-full bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm ring-1 ring-slate-200">
                Total Buku : <?php echo e($books->count()); ?>

            </div>

        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                <?php
                    $badgeClass = match ($book->stock) {
                        0 => 'bg-red-100 text-red-700',
                        default => 'bg-emerald-100 text-emerald-700',
                    };
                ?>

                <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($book->cover): ?>
                        <img
                            src="<?php echo e(asset('storage/' . $book->cover)); ?>"
                            alt="<?php echo e($book->title); ?>"
                            class="h-64 w-full object-cover">
                    <?php else: ?>
                        <div class="flex h-64 items-center justify-center bg-slate-200 text-slate-500">
                            Tidak Ada Cover
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <div class="p-6">

                        <div class="flex items-start justify-between">

                            <div>
                                <h3 class="text-lg font-bold text-slate-900">
                                    <?php echo e($book->title); ?>

                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    <?php echo e($book->author); ?>

                                </p>
                            </div>

                            <span class="rounded-full px-3 py-1 text-xs font-bold <?php echo e($badgeClass); ?>">
                                <?php echo e($book->stock > 0 ? 'Tersedia' : 'Habis'); ?>

                            </span>

                        </div>

                        <div class="mt-5 space-y-3 text-sm">

                            <div>
                                <p class="font-semibold text-slate-900">
                                    Kategori
                                </p>

                                <p class="text-slate-600">
                                    <?php echo e($book->category); ?>

                                </p>
                            </div>

                            <div>
                                <p class="font-semibold text-slate-900">
                                    Tahun Terbit
                                </p>

                                <p class="text-slate-600">
                                    <?php echo e($book->publication_year); ?>

                                </p>
                            </div>

                            <div>
                                <p class="font-semibold text-slate-900">
                                    Stok
                                </p>

                                <p class="text-slate-600">
                                    <?php echo e($book->stock); ?> Buku
                                </p>
                            </div>

                        </div>

                    </div>

                </article>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                <div class="col-span-full rounded-3xl border border-dashed border-slate-300 bg-white p-12 text-center">

                    <h3 class="text-lg font-bold text-slate-900">
                        Belum Ada Buku
                    </h3>

                    <p class="mt-2 text-slate-500">
                        Silakan tambahkan data buku melalui panel admin Filament.
                    </p>

                </div>

            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($books->hasPages()): ?>

            <div class="mt-10">
                <?php echo e($books->links()); ?>

            </div>

        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rpl-rafael\Nommensen\resources\views/books.blade.php ENDPATH**/ ?>