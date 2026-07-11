<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            
            <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($footer)): ?>
                    <img src="<?php echo e(asset('storage/' . $footer->image)); ?>"
                         alt="Logo B University"
                         class="h-9 w-9 object-contain">
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <span class="text-lg font-bold text-slate-900">B University</span>
            </a>

            
            <ul class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-700">
                <li><a href="<?php echo e(route('home')); ?>"          class="hover:text-blue-600 transition">Beranda</a></li>
                <li><a href="<?php echo e(route('profile')); ?>"       class="hover:text-blue-600 transition">Profil</a></li>
                <li><a href="<?php echo e(route('lectures')); ?>"      class="hover:text-blue-600 transition">Dosen</a></li>
                <li><a href="<?php echo e(route('students')); ?>"      class="hover:text-blue-600 transition">Mahasiswa</a></li>
                <li><a href="<?php echo e(route('announcements')); ?>" class="hover:text-blue-600 transition">Pengumuman</a></li>
                <li><a href="<?php echo e(route('news')); ?>"          class="hover:text-blue-600 transition">Berita</a></li>
            </ul>

            
            <a href="<?php echo e(route('home')); ?>#kontak"
               class="hidden md:inline-flex items-center px-4 py-2 rounded-lg bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition">
                Hubungi Kami
            </a>

            
            <button @click="open = !open"
                    class="md:hidden p-2 rounded-md text-slate-700 hover:bg-slate-100"
                    aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        
        <div x-show="open" x-cloak class="md:hidden pb-4">
            <ul class="flex flex-col gap-2 text-sm font-medium text-slate-700">
                <li><a href="<?php echo e(route('home')); ?>"          class="block py-2 px-2 rounded hover:bg-slate-50">Beranda</a></li>
                <li><a href="<?php echo e(route('profile')); ?>"       class="block py-2 px-2 rounded hover:bg-slate-50">Profil</a></li>
                <li><a href="<?php echo e(route('lectures')); ?>"      class="block py-2 px-2 rounded hover:bg-slate-50">Dosen</a></li>
                <li><a href="<?php echo e(route('students')); ?>"      class="block py-2 px-2 rounded hover:bg-slate-50">Mahasiswa</a></li>
                <li><a href="<?php echo e(route('announcements')); ?>" class="block py-2 px-2 rounded hover:bg-slate-50">Pengumuman</a></li>
                <li><a href="<?php echo e(route('news')); ?>"          class="block py-2 px-2 rounded hover:bg-slate-50">Berita</a></li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH D:\rpl-rafael\Nommensen\resources\views/partials/navbar.blade.php ENDPATH**/ ?>