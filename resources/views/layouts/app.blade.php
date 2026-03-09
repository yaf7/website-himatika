<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HIMATIKA - Himpunan Mahasiswa Manajemen Informatika. Organisasi mahasiswa yang bergerak dalam pengembangan akademik, soft skill, dan kebersamaan.">
    <title>@yield('title', 'HIMATIKA - Himpunan Mahasiswa Manajemen Informatika')</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Lucide Icons CDN --}}
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0a0720] text-white font-sans antialiased">

    {{-- ========== NAVBAR ========== --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                {{-- Logo --}}
                <a href="/" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/himatika.png') }}" alt="Logo HIMATIKA" class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl object-contain shadow-lg shadow-indigo-500/30 group-hover:shadow-indigo-500/50 transition-shadow">
                    <span class="text-lg sm:text-xl font-bold tracking-tight">
                        <span class="gradient-text">HIMATIKA</span>
                    </span>
                </a>

                {{-- Desktop Nav --}}
                <div class="hidden md:flex items-center gap-1">
                    <a href="/" class="nav-link px-4 py-2 rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors {{ request()->is('/') ? 'text-white bg-white/10' : '' }}">
                        Beranda
                    </a>
                    <a href="/#tentang" class="nav-link px-4 py-2 rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                        Tentang
                    </a>
                    <a href="/struktur" class="nav-link px-4 py-2 rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors {{ request()->is('struktur') ? 'text-white bg-white/10' : '' }}">
                        Struktur Organisasi
                    </a>
                    <a href="/#kontak" class="nav-link px-4 py-2 rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                        Informasi Lainnya
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg text-gray-300 hover:text-white hover:bg-white/10 transition-all">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="md:hidden hidden glass border-t border-white/10">
            <div class="px-4 py-4 space-y-2">
                <a href="/" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 transition-all">Beranda</a>
                <a href="/#tentang" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 transition-all">Tentang</a>
                <a href="/struktur" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 transition-all">Struktur Organisasi</a>
                <a href="/#kontak" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 transition-all">Informasi Lainnya</a>
            </div>
        </div>
    </nav>

    {{-- ========== MAIN CONTENT ========== --}}
    <main>
        @yield('content')
    </main>

    {{-- ========== FOOTER ========== --}}
    <footer id="kontak" class="relative border-t border-white/10">
        <div class="absolute inset-0 bg-gradient-to-t from-indigo-950/20 to-transparent pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 sm:gap-12">
                {{-- Brand --}}
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('images/himatika.png') }}" alt="Logo HIMATIKA" class="w-10 h-10 rounded-xl object-contain">
                        <span class="text-xl font-bold gradient-text">HIMATIKA</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Himpunan Mahasiswa Manajemen Informatika. Wadah pengembangan mahasiswa di bidang akademik, organisasi, dan kebersamaan.
                    </p>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-300 mb-4">Navigasi</h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-400 hover:text-indigo-400 text-sm transition-colors">Beranda</a></li>
                        <li><a href="/#tentang" class="text-gray-400 hover:text-indigo-400 text-sm transition-colors">Tentang</a></li>
                        <li><a href="/struktur" class="text-gray-400 hover:text-indigo-400 text-sm transition-colors">Struktur Organisasi</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-300 mb-4">Informasi Lainnya</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm">
                            <i data-lucide="instagram" class="w-4 h-4 text-indigo-400 shrink-0"></i>
                            <a href="https://www.instagram.com/himatika.kdr?igsh=NzVmNWM0cmFocHkw" target="_blank" class="text-gray-400 hover:text-pink-400 transition-colors">himatika.kdr</a>
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <i data-lucide="youtube" class="w-4 h-4 text-indigo-400 shrink-0"></i>
                            <a href="https://youtube.com/@himatikapolinemakediri?si=ZLD-mM2vRvA99xou" target="_blank" class="text-gray-400 hover:text-red-400 transition-colors">HIMATIKA POLINEMA KEDIRI</a>
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <i data-lucide="music" class="w-4 h-4 text-indigo-400 shrink-0"></i>
                            <a href="https://www.tiktok.com/@himatika.polinema?_r=1&_t=ZS-94Ut6dKTZGZ" target="_blank" class="text-gray-400 hover:text-cyan-400 transition-colors">himatika.polinema</a>
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <i data-lucide="phone" class="w-4 h-4 text-indigo-400 shrink-0"></i>
                            <a href="https://wa.me/6285607823282" target="_blank" class="text-gray-400 hover:text-green-400 transition-colors">085607823282 (Talitha)</a>
                        </li>
                        <li class="flex items-start gap-3 text-gray-400 text-sm">
                            <i data-lucide="map-pin" class="w-4 h-4 text-indigo-400 mt-0.5 shrink-0"></i>
                            Jl. Lingkar Maskumambang No.1, Sukorame, Kec. Mojoroto, Kota Kediri, Jawa Timur 64119
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Bottom --}}
            <div class="mt-12 pt-8 border-t border-white/10 text-center">
                <p class="text-gray-500 text-sm">
                    &copy; <span class="gradient-text font-semibold">DEYAFA ARSETYA X HIMATIKA</span>
                </p>
            </div>
        </div>
    </footer>

    {{-- ========== SCRIPTS ========== --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Lucide icons
            lucide.createIcons();

            // Navbar scroll effect
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('glass', 'shadow-lg', 'shadow-black/20');
                } else {
                    navbar.classList.remove('glass', 'shadow-lg', 'shadow-black/20');
                }
            });

            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Intersection Observer for reveal animations
            const revealElements = document.querySelectorAll('.reveal');

            if ('IntersectionObserver' in window && revealElements.length > 0) {
                const observerOptions = {
                    threshold: 0.05,
                    rootMargin: '0px 0px -20px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('active');
                            observer.unobserve(entry.target);
                        }
                    });
                }, observerOptions);

                revealElements.forEach((el, index) => {
                    el.style.transitionDelay = `${index * 0.1}s`;
                    observer.observe(el);
                });
            } else {
                // Fallback: just show everything
                revealElements.forEach(el => el.classList.add('active'));
            }
        });
    </script>
</body>
</html>
