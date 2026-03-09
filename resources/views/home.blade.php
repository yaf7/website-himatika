@extends('layouts.app')

@section('title', 'HIMATIKA - Himpunan Mahasiswa Manajemen Informatika')

@section('content')

{{-- ========== HERO SECTION ========== --}}
<section class="hero-gradient min-h-screen flex items-center justify-center relative">
    {{-- Floating particles --}}
    <div class="particle w-2 h-2 top-[20%] left-[10%]" style="animation-delay: 0s;"></div>
    <div class="particle w-3 h-3 top-[60%] left-[80%]" style="animation-delay: 2s;"></div>
    <div class="particle w-1.5 h-1.5 top-[40%] left-[60%] bg-purple-500/30" style="animation-delay: 4s;"></div>
    <div class="particle w-2.5 h-2.5 top-[75%] left-[25%] bg-blue-500/20" style="animation-delay: 1s;"></div>
    <div class="particle w-2 h-2 top-[15%] left-[70%] bg-violet-500/20" style="animation-delay: 3s;"></div>

    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
        {{-- Badge --}}
        <div class="animate-fade-in inline-flex items-center gap-2 px-5 py-2 rounded-full glass text-sm text-indigo-300 mb-8">
            <img src="{{ asset('images/himatika.png') }}" alt="Logo HIMATIKA" class="w-6 h-6 object-contain">
            Himpunan Mahasiswa Manajemen Informatika
        </div>

        {{-- Main Title --}}
        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-black mb-4 sm:mb-6 animate-fade-in-up leading-tight">
            <span class="gradient-text">HIMATIKA</span>
        </h1>

        {{-- Subtitle --}}
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto mb-8 sm:mb-10 animate-fade-in-up animation-delay-200 leading-relaxed">
            Bersama membangun <span class="text-indigo-400 font-semibold">inovasi</span>
            dan mengembangkan <span class="text-purple-400 font-semibold">potensi</span>
            mahasiswa Manajemen Informatika
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up animation-delay-400">
            <a href="#tentang" class="group w-full sm:w-auto px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                Kenali Kami
                <i data-lucide="arrow-down" class="w-4 h-4 group-hover:translate-y-1 transition-transform"></i>
            </a>
            <a href="/struktur" class="w-full sm:w-auto px-6 sm:px-8 py-3 sm:py-4 glass rounded-xl text-white font-semibold hover:bg-white/10 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                <i data-lucide="users" class="w-4 h-4"></i>
                Struktur Organisasi
            </a>
        </div>

        {{-- Stats --}}
        <div class="mt-10 sm:mt-16 grid grid-cols-3 gap-4 sm:gap-8 max-w-lg mx-auto animate-fade-in-up animation-delay-600">
            <div class="text-center">
                <div class="text-2xl sm:text-3xl font-bold gradient-text">5</div>
                <div class="text-xs text-gray-400 mt-1">Departemen</div>
            </div>
            <div class="text-center">
                <div class="text-2xl sm:text-3xl font-bold gradient-text">6</div>
                <div class="text-xs text-gray-400 mt-1">Pengurus BPH</div>
            </div>
            <div class="text-center">
                <div class="text-2xl sm:text-3xl font-bold gradient-text">1</div>
                <div class="text-xs text-gray-400 mt-1">Keluarga</div>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <i data-lucide="chevrons-down" class="w-6 h-6 text-indigo-400/60"></i>
    </div>
</section>

{{-- ========== TENTANG SECTION ========== --}}
<section id="tentang" class="section-dark py-16 sm:py-24 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            {{-- Left Content --}}
            <div class="reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-sm font-medium mb-6">
                    <i data-lucide="info" class="w-4 h-4"></i>
                    Tentang Kami
                </div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                    Apa Itu <span class="gradient-text">HIMATIKA</span>?
                </h2>
                <p class="text-gray-400 text-lg leading-relaxed mb-6">
                    <strong class="text-white">HIMATIKA</strong> (Himpunan Mahasiswa Manajemen Informatika) adalah organisasi kemahasiswaan yang menjadi wadah bagi mahasiswa program studi Manajemen Informatika untuk mengembangkan diri, baik dalam bidang akademik maupun non-akademik.
                </p>
                <p class="text-gray-400 leading-relaxed">
                    Kami berkomitmen untuk menciptakan lingkungan yang inklusif, kreatif, dan inovatif, di mana setiap mahasiswa dapat mengasah kemampuan, memperluas jaringan, dan berkontribusi positif bagi almamater.
                </p>
            </div>

            {{-- Right Content - Tujuan --}}
            <div class="reveal">
                <div class="glass-card rounded-2xl p-5 sm:p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg">
                            <i data-lucide="target" class="w-6 h-6 text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold">Tujuan</h3>
                    </div>
                    <p class="text-gray-300 font-medium mb-4">HIMATIKA POLINEMA Kampus Kediri bertujuan :</p>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-400 mt-0.5 shrink-0"></i>
                            <span>Meningkatkan iman dan taqwa kepada Tuhan Yang Maha Esa.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-400 mt-0.5 shrink-0"></i>
                            <span>Menampung, menyalurkan aspirasi, minat, dan bakat mahasiswa yang berkaitan dengan keorganisasian serta akademis kepada pihak program studi.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-400 mt-0.5 shrink-0"></i>
                            <span>Memberi kritikan yang konstruktif atau membangun kepada program studi, akan hal-hal yang berkaitan dengan akademis dan kemahasiswaan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-400 mt-0.5 shrink-0"></i>
                            <span>Mewujudkan proses implementasi HIMATIKA yang sah dan teratur dalam merealisasikan program kerja berdasarkan AD/ART HIMATIKA POLINEMA Kampus Kediri.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-400 mt-0.5 shrink-0"></i>
                            <span>Membuat, melaksanakan, mengembangkan, dan menjaga peraturan yang telah disetujui oleh Koordinator Program Studi (KPS) Manajemen Informatika demi tercapainya sumber daya mahasiswa yang tertib, disiplin, dan harmonis.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========== DEPARTEMEN SECTION ========== --}}
<section class="py-16 sm:py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-[#0a0720] via-[#0f0a2e] to-[#0a0720]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-400 text-sm font-medium mb-6">
                <i data-lucide="layout-grid" class="w-4 h-4"></i>
                Departemen
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
                Struktur <span class="gradient-text">Departemen</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Lima pilar utama yang menggerakkan roda organisasi HIMATIKA
            </p>
        </div>

        {{-- Department Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            {{-- BPH --}}
            <div class="glass-card rounded-2xl p-5 sm:p-8 reveal lg:col-span-1">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-indigo-500 to-blue-600 flex items-center justify-center mb-6 shadow-lg shadow-indigo-500/20">
                    <span class="text-white font-extrabold text-xs tracking-wider">BPH</span>
                </div>
                <h3 class="text-xl font-bold mb-2">BPH</h3>
                <p class="text-sm text-indigo-400 font-medium mb-3">Badan Pengurus Harian</p>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Pengurus inti yang bertanggung jawab atas seluruh kegiatan organisasi, koordinasi departemen, dan pengambilan keputusan strategis.
                </p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs">Ketua</span>
                    <span class="px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs">Wakil Ketua</span>
                    <span class="px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs">Sekretaris</span>
                    <span class="px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs">Bendahara</span>
                </div>
            </div>

            {{-- Departemen Inteks --}}
            <div class="glass-card rounded-2xl p-5 sm:p-8 reveal">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center mb-6 shadow-lg shadow-emerald-500/20">
                    <span class="text-white font-extrabold text-[9px] tracking-wider">INTEKS</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Dept. Inteks</h3>
                <p class="text-sm text-emerald-400 font-medium mb-3">Intelektual & Ekspresi</p>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Poros penggerak organisasi yang berfokus pada penguatan soliditas internal serta perluasan jaringan relasi strategis demi kemajuan Himatika.
                </p>
            </div>

            {{-- Departemen SDM --}}
            <div class="glass-card rounded-2xl p-5 sm:p-8 reveal">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center mb-6 shadow-lg shadow-amber-500/20">
                    <span class="text-white font-extrabold text-[10px] tracking-wider">SDM</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Dept. SDM</h3>
                <p class="text-sm text-amber-400 font-medium mb-3">Sumber Daya Mahasiswa</p>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Berdedikasi untuk mengelola dan mengembangkan kualitas mahasiswa Manajemen Informatika melalui program penguatan kompetensi yang berkelanjutan.
                </p>
            </div>

            {{-- Departemen Kominfo --}}
            <div class="glass-card rounded-2xl p-5 sm:p-8 reveal">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center mb-6 shadow-lg shadow-cyan-500/20">
                    <span class="text-white font-extrabold text-[8px] tracking-wider">KOMINFO</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Dept. Kominfo</h3>
                <p class="text-sm text-cyan-400 font-medium mb-3">Komunikasi & Informasi</p>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Mengelola komunikasi organisasi, media sosial, desain grafis, dokumentasi kegiatan, dan penyebaran informasi kepada seluruh anggota.
                </p>
            </div>

            {{-- Departemen Agama --}}
            <div class="glass-card rounded-2xl p-5 sm:p-8 reveal">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-rose-500 to-pink-600 flex items-center justify-center mb-6 shadow-lg shadow-rose-500/20">
                    <span class="text-white font-extrabold text-[9px] tracking-wider">AGAMA</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Dept. Agama</h3>
                <p class="text-sm text-rose-400 font-medium mb-3">Kerohanian & Keagamaan</p>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Pusat pengembangan nilai keagamaan dan pembinaan moral mahasiswa Manajemen Informatika.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ========== CTA SECTION ========== --}}
<section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <div class="glass-card rounded-2xl sm:rounded-3xl p-8 sm:p-12 md:p-16 relative overflow-hidden">
            {{-- Background glow --}}
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-64 h-64 bg-indigo-500/20 rounded-full blur-[100px] pointer-events-none"></div>

            <div class="relative">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">
                    Siap Bergabung dengan <span class="gradient-text">HIMATIKA</span>?
                </h2>
                <p class="text-gray-400 text-lg mb-8 max-w-xl mx-auto">
                    Mari bersama membangun masa depan yang lebih baik bersama keluarga besar Manajemen Informatika
                </p>
                <a href="/struktur" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
                    Lihat Struktur Organisasi
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
