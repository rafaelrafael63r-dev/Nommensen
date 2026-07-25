

<?php $__env->startSection('title', 'Berita'); ?>
<?php $__env->startSection('meta_description', 'Berita dan kabar terbaru dari B University.'); ?>

<?php $__env->startSection('content'); ?>
<section class="bg-gradient-to-br from-blue-950 to-blue-800 py-20 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-blue-200">Kabar Kampus</p>
        <h1 class="mt-3 text-4xl font-extrabold sm:text-5xl">Berita</h1>
        <p class="mt-5 max-w-3xl text-lg leading-8 text-blue-100">
            Berita terbaru seputar kegiatan, prestasi, dan informasi kampus B University.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <article id="berita-<?php echo e($item->id); ?>"
                         class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <img src="<?php echo e(asset('storage/' . $item->image)); ?>"
                         alt="<?php echo e($item->title); ?>"
                         class="h-56 w-full object-cover">

                    <div class="p-6">
                        <div class="mb-4 flex flex-wrap gap-2 text-xs text-slate-500">
                            <span><?php echo e($item->created_at?->format('d M Y')); ?></span>
                            <span>•</span>
                            <span><?php echo e($item->user?->name ?? 'Admin'); ?></span>
                        </div>

                        <h2 class="text-xl font-bold leading-snug text-slate-900">
                            <?php echo e($item->title); ?>

                        </h2>

                        <p class="mt-4 leading-7 text-slate-600">
                            <?php echo e(\Illuminate\Support\Str::limit(strip_tags($item->content), 140)); ?>

                        </p>

                        <details class="mt-5 rounded-2xl bg-slate-50 p-4">
                            <summary class="cursor-pointer text-sm font-bold text-blue-700 hover:text-blue-900">
                                Baca berita lengkap
                            </summary>

                            <div class="mt-5 leading-8 text-slate-700 [&_a]:text-blue-700 [&_ol]:list-decimal [&_ol]:pl-5 [&_p]:mb-4 [&_strong]:font-semibold [&_ul]:list-disc [&_ul]:pl-5">
                                <?php echo $item->content; ?>

                            </div>
                        </details>

                        <p class="mt-5 break-all border-t border-slate-100 pt-4 text-xs text-slate-400">
                            Slug: <?php echo e($item->slug); ?>

                        </p>
                    </div>
                </article>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <div class="col-span-full rounded-3xl border border-dashed border-slate-300 bg-white p-12 text-center">
                    <h3 class="text-lg font-bold text-slate-900">Belum ada berita</h3>
                    <p class="mt-2 text-slate-500">Silakan tambahkan berita melalui panel admin Filament.</p>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($news->hasPages()): ?>
            <div class="mt-10">
                <?php echo e($news->links()); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rpl-rafael\Nommensen\resources\views/news.blade.php ENDPATH**/ ?>