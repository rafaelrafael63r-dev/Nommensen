

<?php $__env->startSection('title', 'Daftar Dosen'); ?>
<?php $__env->startSection('meta_description', 'Daftar dosen B University beserta NIDN, jabatan, email, dan topik keahlian.'); ?>

<?php $__env->startSection('content'); ?>
<section class="bg-gradient-to-br from-blue-950 to-blue-800 py-20 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-blue-200">Akademik</p>
        <h1 class="mt-3 text-4xl font-extrabold sm:text-5xl">Daftar Dosen</h1>
        <p class="mt-5 max-w-3xl text-lg leading-8 text-blue-100">
            Informasi dosen B University beserta bidang keahlian dan kontak akademik.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Dosen B University</h2>
                <p class="mt-2 text-slate-600">Data diambil langsung dari CMS Filament.</p>
            </div>

            <div class="rounded-full bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm ring-1 ring-slate-200">
                Total tampil: <?php echo e($lectures->count()); ?> data
            </div>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-start gap-5">
                        <img src="<?php echo e(asset('storage/' . $lecture->image)); ?>"
                             alt="<?php echo e($lecture->nama); ?>"
                             class="h-24 w-24 rounded-2xl object-cover ring-4 ring-blue-50">

                        <div class="min-w-0">
                            <h3 class="text-lg font-bold text-slate-900"><?php echo e($lecture->nama); ?></h3>
                            <p class="mt-1 text-sm text-slate-500">NIDN: <?php echo e($lecture->nidn); ?></p>
                            <span class="mt-3 inline-flex rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                                <?php echo e($lecture->jabatan); ?>

                            </span>
                        </div>
                    </div>

                    <div class="mt-6 space-y-3 border-t border-slate-100 pt-5 text-sm">
                        <div>
                            <p class="font-semibold text-slate-900">Pendidikan</p>
                            <p class="mt-1 text-slate-600"><?php echo e($lecture->pendidikan); ?></p>
                        </div>

                        <div>
                            <p class="font-semibold text-slate-900">Topik Keahlian</p>
                            <p class="mt-1 text-slate-600"><?php echo e($lecture->topik); ?></p>
                        </div>

                        <div>
                            <p class="font-semibold text-slate-900">Email</p>
                            <a href="mailto:<?php echo e($lecture->email); ?>"
                               class="mt-1 inline-block break-all text-blue-700 hover:text-blue-900">
                                <?php echo e($lecture->email); ?>

                            </a>
                        </div>
                    </div>
                </article>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <div class="col-span-full rounded-3xl border border-dashed border-slate-300 bg-white p-12 text-center">
                    <h3 class="text-lg font-bold text-slate-900">Data dosen belum tersedia</h3>
                    <p class="mt-2 text-slate-500">Silakan tambahkan data dosen melalui panel admin Filament.</p>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lectures->hasPages()): ?>
            <div class="mt-10">
                <?php echo e($lectures->links()); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rpl-rafael\Nommensen\resources\views/lectures.blade.php ENDPATH**/ ?>