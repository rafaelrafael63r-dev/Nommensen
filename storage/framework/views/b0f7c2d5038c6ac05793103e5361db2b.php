

<?php $__env->startSection('title', 'Data Mahasiswa'); ?>
<?php $__env->startSection('meta_description', 'Data mahasiswa B University berdasarkan input dari CMS.'); ?>

<?php $__env->startSection('content'); ?>
<section class="bg-gradient-to-br from-blue-950 to-blue-800 py-20 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-blue-200">Mahasiswa</p>
        <h1 class="mt-3 text-4xl font-extrabold sm:text-5xl">Data Mahasiswa</h1>
        <p class="mt-5 max-w-3xl text-lg leading-8 text-blue-100">
            Data mahasiswa yang telah dikelola melalui admin panel B University.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Mahasiswa Terdaftar</h2>
                <p class="mt-2 text-slate-600">Informasi mahasiswa dan pilihan program studi.</p>
            </div>

            <div class="rounded-full bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm ring-1 ring-slate-200">
                Total tampil: <?php echo e($students->count()); ?> data
            </div>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <?php
                    $badgeClass = match ($student->jalur) {
                        'Reguler' => 'bg-blue-50 text-blue-700',
                        'Beasiswa' => 'bg-emerald-50 text-emerald-700',
                        'Transfer' => 'bg-amber-50 text-amber-700',
                        default => 'bg-slate-100 text-slate-700',
                    };
                ?>

                <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <img src="<?php echo e(asset('storage/' . $student->image)); ?>"
                         alt="<?php echo e($student->namalengkap); ?>"
                         class="h-56 w-full object-cover">

                    <div class="p-6">
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <h3 class="font-bold text-slate-900"><?php echo e($student->namalengkap); ?></h3>
                                <p class="mt-1 text-sm text-slate-500">Panggilan: <?php echo e($student->namapanggilan); ?></p>
                            </div>

                            <span class="rounded-full px-3 py-1 text-xs font-bold <?php echo e($badgeClass); ?>">
                                <?php echo e($student->jalur); ?>

                            </span>
                        </div>

                        <div class="mt-5 space-y-3 text-sm">
                            <div>
                                <p class="font-semibold text-slate-900">Email</p>
                                <a href="mailto:<?php echo e($student->email); ?>" class="break-all text-blue-700 hover:text-blue-900">
                                    <?php echo e($student->email); ?>

                                </a>
                            </div>

                            <div>
                                <p class="font-semibold text-slate-900">Nomor HP</p>
                                <p class="text-slate-600"><?php echo e($student->nomor_hp); ?></p>
                            </div>

                            <div>
                                <p class="font-semibold text-slate-900">Pilihan Program Studi</p>
                                <ul class="mt-1 space-y-1 text-slate-600">
                                    <li>1. <?php echo e($student->programstudi_1); ?></li>
                                    <li>2. <?php echo e($student->programstudi_2); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <div class="col-span-full rounded-3xl border border-dashed border-slate-300 bg-white p-12 text-center">
                    <h3 class="text-lg font-bold text-slate-900">Data mahasiswa belum tersedia</h3>
                    <p class="mt-2 text-slate-500">Silakan tambahkan data mahasiswa melalui panel admin Filament.</p>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($students->hasPages()): ?>
            <div class="mt-10">
                <?php echo e($students->links()); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rpl-rafael\Nommensen\resources\views/students.blade.php ENDPATH**/ ?>