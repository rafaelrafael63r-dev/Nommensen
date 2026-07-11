<footer id="kontak" class="bg-slate-900 text-slate-300 mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">

        
        <div class="md:col-span-2">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($footer)): ?>
                <img src="<?php echo e(asset('storage/' . $footer->image)); ?>"
                     alt="Logo B University"
                     class="h-12 w-auto mb-4 brightness-0 invert">
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <h3 class="text-white text-lg font-bold mb-3">B University</h3>
            <p class="text-sm leading-relaxed">
                <?php echo e($footer->alamat ?? 'Alamat universitas akan ditampilkan di sini.'); ?>

            </p>
        </div>

        
        <div>
            <h4 class="text-white text-sm font-semibold uppercase tracking-wider mb-4">Navigasi</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo e(route('profile')); ?>"       class="hover:text-white transition">Profil Universitas</a></li>
                <li><a href="<?php echo e(route('lectures')); ?>"      class="hover:text-white transition">Dosen</a></li>
                <li><a href="<?php echo e(route('students')); ?>"      class="hover:text-white transition">Mahasiswa</a></li>
                <li><a href="<?php echo e(route('announcements')); ?>" class="hover:text-white transition">Pengumuman</a></li>
                <li><a href="<?php echo e(route('news')); ?>"          class="hover:text-white transition">Berita</a></li>
            </ul>
        </div>

        
        <div>
            <h4 class="text-white text-sm font-semibold uppercase tracking-wider mb-4">Kontak</h4>
            <ul class="space-y-3 text-sm">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($footer)): ?>
                    <li class="flex items-start gap-2">
                        <span aria-hidden="true">✉️</span>
                        <a href="mailto:<?php echo e($footer->email); ?>" class="hover:text-white break-all"><?php echo e($footer->email); ?></a>
                    </li>
                    <li class="flex items-start gap-2">
                        <span aria-hidden="true">💬</span>
                        <a href="https://wa.me/62<?php echo e($footer->wa); ?>" target="_blank" rel="noopener" class="hover:text-white">+62 <?php echo e($footer->wa); ?></a>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </ul>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($footer)): ?>
                <div class="flex gap-3 mt-5">
                    <a href="<?php echo e($footer->link_instagram); ?>" target="_blank" rel="noopener"
                       aria-label="Instagram" class="hover:text-white transition">📷</a>
                    <a href="<?php echo e($footer->link_youtube); ?>" target="_blank" rel="noopener"
                       aria-label="YouTube" class="hover:text-white transition">▶️</a>
                    <a href="<?php echo e($footer->link_linkedin); ?>" target="_blank" rel="noopener"
                       aria-label="LinkedIn" class="hover:text-white transition">💼</a>
                    <a href="<?php echo e($footer->link_facebook); ?>" target="_blank" rel="noopener"
                       aria-label="Facebook" class="hover:text-white transition">🌐</a>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>

    
    <div class="border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-center text-xs text-slate-400">
            © <?php echo e(date('Y')); ?> B University. Seluruh hak cipta dilindungi.
        </div>
    </div>
</footer><?php /**PATH D:\rpl-rafael\Nommensen\resources\views/partials/footer.blade.php ENDPATH**/ ?>