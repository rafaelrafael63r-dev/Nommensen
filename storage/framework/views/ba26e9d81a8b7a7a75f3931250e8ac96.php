

<?php $__env->startSection('title', 'Profil Universitas'); ?>
<?php $__env->startSection('meta_description', 'Profil B University, sejarah, visi misi, pimpinan, dan staf universitas.'); ?>

<?php $__env->startSection('content'); ?>
<?php
    $aboutImages = [];
    if ($aboutme && $aboutme->image) {
        $aboutImages = is_array($aboutme->image)
            ? $aboutme->image
            : (json_decode($aboutme->image, true) ?: []);
    }

    $visimisiImages = [];
    if ($visimisi && $visimisi->image) {
        $visimisiImages = is_array($visimisi->image)
            ? $visimisi->image
            : (json_decode($visimisi->image, true) ?: []);
    }
?>


<section class="bg-gradient-to-br from-blue-950 to-blue-800 py-20 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-blue-200">Profil Kampus</p>
        <h1 class="mt-3 text-4xl font-extrabold sm:text-5xl">Tentang B University</h1>
        <p class="mt-5 max-w-3xl text-lg leading-8 text-blue-100">
            Informasi lengkap mengenai profil, sejarah, visi misi, pimpinan, dan staf B University.
        </p>
    </div>
</section>


<section class="bg-white py-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
        <div>
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">Profil</p>
            <h2 class="mt-3 text-3xl font-bold text-slate-900">Profil Singkat Universitas</h2>

            <div class="mt-6 leading-8 text-slate-600">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($aboutme): ?>
                    <p><?php echo e($aboutme->content); ?></p>
                <?php else: ?>
                    <p>Data profil universitas belum tersedia.</p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>

        <div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($aboutImages)): ?>
                <div class="grid grid-cols-2 gap-4">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $aboutImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <img src="<?php echo e(asset('storage/' . $img)); ?>"
                             alt="Foto profil universitas"
                             class="h-48 w-full rounded-2xl object-cover shadow-sm">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>
            <?php else: ?>
                <div class="flex h-72 items-center justify-center rounded-3xl border border-dashed border-slate-300 bg-slate-50 text-slate-500">
                    Foto profil belum tersedia.
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>


<section class="bg-slate-50 py-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
        <div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($history && $history->image): ?>
                <img src="<?php echo e(asset('storage/' . $history->image)); ?>"
                     alt="Sejarah B University"
                     class="h-[420px] w-full rounded-3xl object-cover shadow-sm">
            <?php else: ?>
                <div class="flex h-[420px] items-center justify-center rounded-3xl border border-dashed border-slate-300 bg-white text-slate-500">
                    Foto sejarah belum tersedia.
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">Sejarah</p>
            <h2 class="mt-3 text-3xl font-bold text-slate-900">Sejarah B University</h2>

            <div class="mt-6 leading-8 text-slate-600 [&_a]:text-blue-700 [&_ol]:list-decimal [&_ol]:pl-5 [&_p]:mb-4 [&_strong]:font-semibold [&_ul]:list-disc [&_ul]:pl-5">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($history): ?>
                    <?php echo $history->content; ?>

                <?php else: ?>
                    <p>Data sejarah belum tersedia.</p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</section>


<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">Visi & Misi</p>
            <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">Arah dan Tujuan Kampus</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-2">
            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
                <h3 class="text-2xl font-bold text-slate-900">Visi</h3>
                <div class="mt-5 leading-8 text-slate-600 [&_ol]:list-decimal [&_ol]:pl-5 [&_p]:mb-4 [&_ul]:list-disc [&_ul]:pl-5">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($visimisi): ?>
                        <?php echo $visimisi->visi; ?>

                    <?php else: ?>
                        <p>Data visi belum tersedia.</p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
                <h3 class="text-2xl font-bold text-slate-900">Misi</h3>
                <div class="mt-5 leading-8 text-slate-600 [&_ol]:list-decimal [&_ol]:pl-5 [&_p]:mb-4 [&_ul]:list-disc [&_ul]:pl-5">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($visimisi): ?>
                        <?php echo $visimisi->misi; ?>

                    <?php else: ?>
                        <p>Data misi belum tersedia.</p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($visimisiImages)): ?>
            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $visimisiImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <img src="<?php echo e(asset('storage/' . $img)); ?>"
                         alt="Foto visi misi"
                         class="h-56 w-full rounded-2xl object-cover shadow-sm">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>


<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">Pimpinan</p>
            <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">Pimpinan Universitas</h2>
        </div>

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $rektors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rektor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <div class="rounded-3xl bg-white p-6 text-center shadow-sm ring-1 ring-slate-200">
                    <img src="<?php echo e(asset('storage/' . $rektor->image)); ?>"
                         alt="<?php echo e($rektor->nama); ?>"
                         class="mx-auto h-32 w-32 rounded-full object-cover ring-4 ring-blue-100">

                    <h3 class="mt-5 text-lg font-bold text-slate-900"><?php echo e($rektor->nama); ?></h3>
                    <p class="mt-2 text-sm font-semibold text-blue-700"><?php echo e($rektor->jabatan); ?></p>
                </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <div class="col-span-full rounded-2xl border border-dashed border-slate-300 p-10 text-center text-slate-500">
                    Data pimpinan belum tersedia.
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>


<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">Tenaga Kependidikan</p>
            <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">Admin dan Staf</h2>
        </div>

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <div class="rounded-3xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                    <img src="<?php echo e(asset('storage/' . $admin->image)); ?>"
                         alt="<?php echo e($admin->nama); ?>"
                         class="mx-auto h-24 w-24 rounded-full object-cover">

                    <h3 class="mt-4 font-bold text-slate-900"><?php echo e($admin->nama); ?></h3>
                    <p class="mt-1 text-sm text-slate-500">NIP: <?php echo e($admin->nip); ?></p>
                    <p class="mt-3 inline-flex rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                        <?php echo e($admin->jabatan); ?>

                    </p>
                </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <div class="col-span-full rounded-2xl border border-dashed border-slate-300 p-10 text-center text-slate-500">
                    Data admin/staf belum tersedia.
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rpl-rafael\Nommensen\resources\views/profile.blade.php ENDPATH**/ ?>