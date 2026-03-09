@extends('layouts.app')

@section('title', 'Struktur Organisasi - HIMATIKA')

@section('content')

{{-- ========== HERO HEADER ========== --}}
<section class="hero-gradient pt-24 sm:pt-32 pb-12 sm:pb-20 relative">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-sm font-medium mb-6 animate-fade-in">
            <i data-lucide="network" class="w-4 h-4"></i>
            Periode 2025/2026
        </div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-4 animate-fade-in-up">
            Struktur <span class="gradient-text">Organisasi</span>
        </h1>
        <p class="text-gray-400 text-sm sm:text-lg max-w-2xl mx-auto animate-fade-in-up animation-delay-200">
            Para pengurus yang menggerakkan roda organisasi HIMATIKA
        </p>
    </div>
</section>

{{-- ========== BPH SECTION ========== --}}
<section class="section-dark py-12 sm:py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-gradient-to-r from-indigo-500/10 to-purple-500/10 border border-indigo-500/20 text-indigo-400 text-sm font-semibold mb-4">
                <i data-lucide="crown" class="w-4 h-4"></i>
                Badan Pengurus Harian
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">
                <span class="gradient-text">BPH</span> HIMATIKA
            </h2>
        </div>

        {{-- Ketua & Wakil --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8 max-w-3xl mx-auto mb-8 sm:mb-12">
            {{-- Ketua --}}
            <div class="profile-card glass-card rounded-2xl p-5 sm:p-8 text-center reveal">
                <div class="relative inline-block mb-6">
                    <div class="w-28 h-28 rounded-full p-1 bg-gradient-to-br from-indigo-500 to-purple-600 mx-auto animate-pulse-glow shadow-xl shadow-indigo-500/30">
                        <img src="{{ asset('images/Hansen Ari P..jpeg') }}" alt="Hansen Ari P." class="w-full h-full rounded-full object-cover">
                    </div>
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 px-3 py-1 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 text-[10px] font-bold uppercase tracking-wider whitespace-nowrap">
                        Ketua
                    </div>
                </div>
                <h3 class="text-lg font-bold mb-1">Hansen Ari P.</h3>
                <p class="text-sm text-indigo-400 font-medium mb-3">Ketua HIMATIKA</p>
                <p class="text-xs text-gray-500">Memimpin dan mengkoordinasikan seluruh kegiatan organisasi</p>
            </div>

            {{-- Wakil Ketua --}}
            <div class="profile-card glass-card rounded-2xl p-5 sm:p-8 text-center reveal">
                <div class="relative inline-block mb-6">
                    <div class="w-28 h-28 rounded-full p-1 bg-gradient-to-br from-purple-500 to-pink-600 mx-auto shadow-xl shadow-purple-500/30">
                        <img src="{{ asset('images/Ainur Rofiq.jpeg') }}" alt="Ainur Rofiq" class="w-full h-full rounded-full object-cover">
                    </div>
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 px-3 py-1 rounded-full bg-gradient-to-r from-purple-600 to-pink-600 text-[10px] font-bold uppercase tracking-wider whitespace-nowrap">
                        Wakil Ketua
                    </div>
                </div>
                <h3 class="text-lg font-bold mb-1">Ainur Rofiq</h3>
                <p class="text-sm text-purple-400 font-medium mb-3">Wakil Ketua HIMATIKA</p>
                <p class="text-xs text-gray-500">Mendampingi ketua dan menjalankan tugas delegasi</p>
            </div>
        </div>

        {{-- Sekretaris & Bendahara --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 max-w-5xl mx-auto">
            {{-- Sekretaris 1 --}}
            <div class="profile-card glass-card rounded-2xl p-6 text-center reveal">
                <div class="relative inline-block mb-5">
                    <div class="w-20 h-20 rounded-full p-1 bg-gradient-to-br from-cyan-500 to-blue-600 mx-auto shadow-xl shadow-cyan-500/30">
                        <img src="{{ asset('images/Sherli Shintia S..jpeg') }}" alt="Sherli Shintia S." class="w-full h-full rounded-full object-cover">
                    </div>
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 px-2.5 py-0.5 rounded-full bg-gradient-to-r from-cyan-600 to-blue-600 text-[9px] font-bold uppercase tracking-wider whitespace-nowrap">
                        Sekretaris 1
                    </div>
                </div>
                <h3 class="text-sm font-bold mb-1">Sherli Shintia S.</h3>
                <p class="text-xs text-gray-500">Administrasi & surat-menyurat</p>
            </div>

            {{-- Sekretaris 2 --}}
            <div class="profile-card glass-card rounded-2xl p-6 text-center reveal">
                <div class="relative inline-block mb-5">
                    <div class="w-20 h-20 rounded-full p-1 bg-gradient-to-br from-blue-500 to-indigo-600 mx-auto shadow-xl shadow-blue-500/30">
                        <img src="{{ asset('images/Talitha Quds S..jpeg') }}" alt="Talitha Quds S." class="w-full h-full rounded-full object-cover">
                    </div>
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 px-2.5 py-0.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-[9px] font-bold uppercase tracking-wider whitespace-nowrap">
                        Sekretaris 2
                    </div>
                </div>
                <h3 class="text-sm font-bold mb-1">Talitha Quds S.</h3>
                <p class="text-xs text-gray-500">Pendamping administrasi</p>
            </div>

            {{-- Bendahara 1 --}}
            <div class="profile-card glass-card rounded-2xl p-6 text-center reveal">
                <div class="relative inline-block mb-5">
                    <div class="w-20 h-20 rounded-full p-1 bg-gradient-to-br from-amber-500 to-orange-600 mx-auto shadow-xl shadow-amber-500/30">
                        <img src="{{ asset('images/Andina Septiana P..jpeg') }}" alt="Andina Septiana P." class="w-full h-full rounded-full object-cover">
                    </div>
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 px-2.5 py-0.5 rounded-full bg-gradient-to-r from-amber-600 to-orange-600 text-[9px] font-bold uppercase tracking-wider whitespace-nowrap">
                        Bendahara 1
                    </div>
                </div>
                <h3 class="text-sm font-bold mb-1">Andina Septiana P.</h3>
                <p class="text-xs text-gray-500">Keuangan & anggaran</p>
            </div>

            {{-- Bendahara 2 --}}
            <div class="profile-card glass-card rounded-2xl p-6 text-center reveal">
                <div class="relative inline-block mb-5">
                    <div class="w-20 h-20 rounded-full p-1 bg-gradient-to-br from-orange-500 to-red-600 mx-auto shadow-xl shadow-orange-500/30">
                        <img src="{{ asset('images/Maghfirotus Zahwa.jpeg') }}" alt="Maghfirotus Zahwa" class="w-full h-full rounded-full object-cover">
                    </div>
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 px-2.5 py-0.5 rounded-full bg-gradient-to-r from-orange-600 to-red-600 text-[9px] font-bold uppercase tracking-wider whitespace-nowrap">
                        Bendahara 2
                    </div>
                </div>
                <h3 class="text-sm font-bold mb-1">Maghfirotus Zahwa</h3>
                <p class="text-xs text-gray-500">Pendamping keuangan</p>
            </div>
        </div>
    </div>
</section>

{{-- ========== DEPARTEMEN SECTIONS ========== --}}
<section class="py-12 sm:py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-[#0a0720] via-[#0f0a2e] to-[#0a0720]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-400 text-sm font-semibold mb-4">
                <i data-lucide="layout-grid" class="w-4 h-4"></i>
                Departemen
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">
                Departemen <span class="gradient-text">HIMATIKA</span>
            </h2>
        </div>

        {{-- Department Grid --}}
        <div class="space-y-12">

            {{-- Dept Inteks --}}
            <div class="glass-card rounded-2xl sm:rounded-3xl p-5 sm:p-8 md:p-10 reveal">
                <div class="flex flex-col md:flex-row gap-8 items-start">
                    <div class="shrink-0">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shadow-lg shadow-emerald-500/20">
                            <span class="text-white font-extrabold text-[10px] tracking-wider">INTEKS</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl sm:text-2xl font-bold mb-1">Departemen Inteks</h3>
                        <p class="text-emerald-400 font-medium text-sm mb-4">Intelektual & Ekspresi</p>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Mengintegrasikan pengelolaan hubungan organisasi dengan pengembangan potensi mahasiswa guna menciptakan ekosistem yang kolaboratif dan inovatif.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-3 py-1.5 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-300 text-xs font-medium">Webinar</span>
                            <span class="px-3 py-1.5 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-300 text-xs font-medium">Workshop</span>
                        </div>

                        {{-- Anggota Inteks --}}
                        <div class="grid sm:grid-cols-2 gap-6">
                            {{-- Angkatan 16 --}}
                            <div class="rounded-2xl overflow-hidden border border-emerald-500/20 shadow-lg shadow-emerald-500/10">
                                <div class="bg-gradient-to-r from-emerald-600 to-teal-600 px-4 py-2 text-center">
                                    <span class="text-sm font-bold uppercase tracking-wider">Angkatan 16</span>
                                </div>
                                <img src="{{ asset('images/inteks_angkatan16.png') }}" alt="Inteks Angkatan 16" class="w-full object-cover">
                            </div>
                            {{-- Angkatan 17 --}}
                            <div class="rounded-2xl overflow-hidden border border-emerald-500/20 shadow-lg shadow-emerald-500/10">
                                <div class="bg-gradient-to-r from-teal-600 to-emerald-600 px-4 py-2 text-center">
                                    <span class="text-sm font-bold uppercase tracking-wider">Angkatan 17</span>
                                </div>
                                <img src="{{ asset('images/inteks_angkatan17.png') }}" alt="Inteks Angkatan 17" class="w-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Dept SDM --}}
            <div class="glass-card rounded-2xl sm:rounded-3xl p-5 sm:p-8 md:p-10 reveal">
                <div class="flex flex-col md:flex-row gap-8 items-start">
                    <div class="shrink-0">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center shadow-lg shadow-amber-500/20">
                            <span class="text-white font-extrabold text-xs tracking-wider">SDM</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl sm:text-2xl font-bold mb-1">Departemen SDM</h3>
                        <p class="text-amber-400 font-medium text-sm mb-4">Sumber Daya Mahasiswa</p>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Mengelola, mengembangkan, dan meningkatkan kualitas serta potensi mahasiswa manajemen informatika.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-3 py-1.5 rounded-lg bg-amber-500/10 border border-amber-500/20 text-amber-300 text-xs font-medium">Studyweek</span>
                            <span class="px-3 py-1.5 rounded-lg bg-amber-500/10 border border-amber-500/20 text-amber-300 text-xs font-medium">Classmeet</span>
                            <span class="px-3 py-1.5 rounded-lg bg-amber-500/10 border border-amber-500/20 text-amber-300 text-xs font-medium">Fitmi</span>
                        </div>

                        {{-- Anggota SDM --}}
                        <div class="grid sm:grid-cols-2 gap-6">
                            {{-- Angkatan 16 --}}
                            <div class="rounded-2xl overflow-hidden border border-amber-500/20 shadow-lg shadow-amber-500/10">
                                <div class="bg-gradient-to-r from-amber-600 to-orange-600 px-4 py-2 text-center">
                                    <span class="text-sm font-bold uppercase tracking-wider">Angkatan 16</span>
                                </div>
                                <img src="{{ asset('images/sdm_angkatan16.png') }}" alt="SDM Angkatan 16" class="w-full object-cover">
                            </div>
                            {{-- Angkatan 17 --}}
                            <div class="rounded-2xl overflow-hidden border border-amber-500/20 shadow-lg shadow-amber-500/10">
                                <div class="bg-gradient-to-r from-orange-600 to-amber-600 px-4 py-2 text-center">
                                    <span class="text-sm font-bold uppercase tracking-wider">Angkatan 17</span>
                                </div>
                                <img src="{{ asset('images/sdm_angkatan17.png') }}" alt="SDM Angkatan 17" class="w-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Dept Kominfo --}}
            <div class="glass-card rounded-2xl sm:rounded-3xl p-5 sm:p-8 md:p-10 reveal">
                <div class="flex flex-col md:flex-row gap-8 items-start">
                    <div class="shrink-0">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center shadow-lg shadow-cyan-500/20">
                            <span class="text-white font-extrabold text-[9px] tracking-wider">KOMINFO</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl sm:text-2xl font-bold mb-1">Departemen Kominfo</h3>
                        <p class="text-cyan-400 font-medium text-sm mb-4">Komunikasi & Informasi</p>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Mengelola seluruh kanal komunikasi dan informasi organisasi. Bertanggung jawab atas pengelolaan media sosial, pembuatan konten kreatif, desain grafis, dokumentasi kegiatan, serta branding organisasi ke publik.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-3 py-1.5 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-300 text-xs font-medium">MediaSosial</span>
                            <span class="px-3 py-1.5 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-300 text-xs font-medium">Desain Grafis</span>
                            <span class="px-3 py-1.5 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-300 text-xs font-medium">Dokumentasi</span>
                            <span class="px-3 py-1.5 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-300 text-xs font-medium">Branding</span>
                            <span class="px-3 py-1.5 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-300 text-xs font-medium">Kuliah Tamu</span>
                            <span class="px-3 py-1.5 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-300 text-xs font-medium">Podcast</span>
                        </div>

                        {{-- Anggota Kominfo --}}
                        <div class="grid sm:grid-cols-2 gap-6">
                            {{-- Angkatan 16 --}}
                            <div class="rounded-2xl overflow-hidden border border-cyan-500/20 shadow-lg shadow-cyan-500/10">
                                <div class="bg-gradient-to-r from-cyan-600 to-blue-600 px-4 py-2 text-center">
                                    <span class="text-sm font-bold uppercase tracking-wider">Angkatan 16</span>
                                </div>
                                <img src="{{ asset('images/kominfo_angkatan16.png') }}" alt="Kominfo Angkatan 16" class="w-full object-cover">
                            </div>
                            {{-- Angkatan 17 --}}
                            <div class="rounded-2xl overflow-hidden border border-cyan-500/20 shadow-lg shadow-cyan-500/10">
                                <div class="bg-gradient-to-r from-blue-600 to-cyan-600 px-4 py-2 text-center">
                                    <span class="text-sm font-bold uppercase tracking-wider">Angkatan 17</span>
                                </div>
                                <img src="{{ asset('images/kominfo_angkatan17.png') }}" alt="Kominfo Angkatan 17" class="w-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Dept Agama --}}
            <div class="glass-card rounded-2xl sm:rounded-3xl p-5 sm:p-8 md:p-10 reveal">
                <div class="flex flex-col md:flex-row gap-8 items-start">
                    <div class="shrink-0">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-rose-500 to-pink-600 flex items-center justify-center shadow-lg shadow-rose-500/20">
                            <span class="text-white font-extrabold text-[10px] tracking-wider">AGAMA</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl sm:text-2xl font-bold mb-1">Departemen Agama</h3>
                        <p class="text-rose-400 font-medium text-sm mb-4">Kerohanian & Keagamaan</p>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Menyelenggarakan berbagai kegiatan keagamaan untuk membentuk mahasiswa yang beriman dan bertakwa baik dalam lingkup internal maupun eksternal. 
                        </p>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-3 py-1.5 rounded-lg bg-rose-500/10 border border-rose-500/20 text-rose-300 text-xs font-medium">Milad</span>
                            <span class="px-3 py-1.5 rounded-lg bg-rose-500/10 border border-rose-500/20 text-rose-300 text-xs font-medium">Bakti Sosial</span>
                        </div>

                        {{-- Anggota Agama --}}
                        <div class="grid sm:grid-cols-2 gap-6">
                            {{-- Angkatan 16 --}}
                            <div class="rounded-2xl overflow-hidden border border-rose-500/20 shadow-lg shadow-rose-500/10">
                                <div class="bg-gradient-to-r from-rose-600 to-pink-600 px-4 py-2 text-center">
                                    <span class="text-sm font-bold uppercase tracking-wider">Angkatan 16</span>
                                </div>
                                <img src="{{ asset('images/agama_angkatan16.png') }}" alt="Agama Angkatan 16" class="w-full object-cover">
                            </div>
                            {{-- Angkatan 17 --}}
                            <div class="rounded-2xl overflow-hidden border border-rose-500/20 shadow-lg shadow-rose-500/10">
                                <div class="bg-gradient-to-r from-pink-600 to-rose-600 px-4 py-2 text-center">
                                    <span class="text-sm font-bold uppercase tracking-wider">Angkatan 17</span>
                                </div>
                                <img src="{{ asset('images/agama_angkatan17.png') }}" alt="Agama Angkatan 17" class="w-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ========== BACK TO HOME ========== --}}
<section class="py-16 relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <a href="/" class="inline-flex items-center gap-3 px-8 py-4 glass rounded-xl text-white font-semibold hover:bg-white/10 hover:scale-105 transition-all duration-300 group">
            <i data-lucide="arrow-left" class="w-5 h-5 group-hover:-translate-x-1 transition-transform"></i>
            Kembali ke Beranda
        </a>
    </div>
</section>

@endsection
