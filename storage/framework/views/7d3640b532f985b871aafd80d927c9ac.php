

<?php $__env->startSection('title', 'Pengumuman'); ?>
<?php $__env->startSection('meta_description', 'Daftar pengumuman resmi B University.'); ?>

<?php $__env->startSection('content'); ?>
<section class="bg-gradient-to-br from-blue-950 to-blue-800 py-20 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-blue-200">Informasi Resmi</p>
        <h1 class="mt-3 text-4xl font-extrabold sm:text-5xl">Pengumuman</h1>
        <p class="mt-5 max-w-3xl text-lg leading-8 text-blue-100">
            Pengumuman resmi kampus yang dikelola langsung oleh admin B University.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <div class="space-y-6">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <article id="pengumuman-<?php echo e($announcement->id); ?>"
                         class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-lg">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-slate-900"><?php echo e($announcement->title); ?></h2>

                            <div class="mt-3 flex flex-wrap gap-2 text-sm text-slate-500">
                                <span>Oleh <?php echo e($announcement->user?->name ?? 'Admin'); ?></span>
                                <span>•</span>
                                <span><?php echo e($announcement->created_at?->format('d M Y H:i')); ?></span>
                            </div>
                        </div>

                        <span class="inline-flex rounded-full bg-blue-50 px-4 py-2 text-xs font-bold text-blue-700">
                            Pengumuman
                        </span>
                    </div>

                    <p class="mt-5 leading-7 text-slate-600">
                        <?php echo e(\Illuminate\Support\Str::limit(strip_tags($announcement->content), 180)); ?>

                    </p>

                    <details class="mt-5 rounded-2xl bg-slate-50 p-5">
                        <summary class="cursor-pointer text-sm font-bold text-blue-700 hover:text-blue-900">
                            Baca isi lengkap
                        </summary>

                        <div class="mt-5 leading-8 text-slate-700 [&_a]:text-blue-700 [&_ol]:list-decimal [&_ol]:pl-5 [&_p]:mb-4 [&_strong]:font-semibold [&_ul]:list-disc [&_ul]:pl-5">
                            <?php echo $announcement->content; ?>

                        </div>
                    </details>

                    <div class="mt-5 border-t border-slate-100 pt-4">
                        <p class="break-all text-xs text-slate-400">
                            Slug: <?php echo e($announcement->slug); ?>

                        </p>
                    </div>
                </article>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <div class="rounded-3xl border border-dashed border-slate-300 bg-white p-12 text-center">
                    <h3 class="text-lg font-bold text-slate-900">Belum ada pengumuman</h3>
                    <p class="mt-2 text-slate-500">Silakan tambahkan pengumuman melalui panel admin Filament.</p>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($announcements->hasPages()): ?>
            <div class="mt-10">
                <?php echo e($announcements->links()); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rpl-rafael\Nommensen\resources\views/announcements.blade.php ENDPATH**/ ?>