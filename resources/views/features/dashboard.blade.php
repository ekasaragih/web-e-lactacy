@extends('layouts.app')
@section('content')

<div class="flex min-h-screen bg-slate-50">

    {{-- sidebar
    TODO: nanti dipisah dengan masing2 page - untuk sementara begini dl templatenya
    TODO: vibenya dibuat lebih mirip ke halaman yg welcome biar style nya sama --}}
    <aside class="w-72 bg-white border-r border-slate-200">
        <div class="p-6 border-b border-slate-200">
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-xl bg-[var(--color-primary)] flex items-center justify-center text-white">
                    <i class="ti ti-heart text-xl"></i>
                </div>

                <div>
                    <h1 class="font-bold text-slate-800">
                        E-Lactacy
                    </h1>

                    <p class="text-xs text-slate-500">
                        Edukasi Laktasi Digital
                    </p>
                </div>
            </div>
        </div>

        <nav class="p-4 space-y-1">
            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-pink-50 text-pink-600 font-medium">
                <i class="ti ti-home"></i>
                Beranda
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-clipboard-list"></i>
                Pre-Test
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-book"></i>
                Edukasi Laktasi
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-heart-handshake"></i>
                Motivasi & Self-Efficacy
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-target-arrow"></i>
                Niat & Target Menyusui
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-users"></i>
                Dukungan Sosial
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-message-circle"></i>
                Konseling Online
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-video"></i>
                Keterampilan Menyusui
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-chart-line"></i>
                Monitoring
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-clipboard-check"></i>
                Post-Test
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-award"></i>
                Outcome ASI Eksklusif
            </a>

            <hr class="my-3">

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100">
                <i class="ti ti-user-cog"></i>
                Profil & Pengaturan
            </a>
        </nav>
    </aside>

    {{-- main dashboard
    TODO: isinya progress, reminder, grafik, jadwal konseling, daily afirmasi positif --}}
    <main class="flex-1 p-8">
        <div class="bg-white rounded-3xl border border-slate-200 p-8">
            <span
                class="inline-flex items-center gap-2 bg-pink-50 text-pink-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">
                <i class="ti ti-heart"></i>
                Selamat Datang
            </span>

            <h2 class="font-['Lora'] text-4xl font-bold text-slate-800">
                Halo, Ibu
            </h2>

            <p class="text-slate-500 mt-3 max-w-2xl">
                Selamat datang di E-Lactacy. Mari lanjutkan perjalanan menyusui Anda
                melalui edukasi, pendampingan profesional, dan pemantauan yang terstruktur.
            </p>

        </div>

        <div class="grid lg:grid-cols-3 gap-6 mt-8">

            <div class="bg-white border rounded-2xl p-6">
                <div class="flex items-center gap-2 mb-3">
                    <i class="ti ti-chart-line text-[var(--color-primary)]"></i>
                    <span class="font-semibold">Progress Program</span>
                </div>

                <div class="h-3 bg-slate-200 rounded-full">
                    <div class="h-3 rounded-full bg-[var(--color-primary)] w-[35%]"></div>
                </div>

                <p class="mt-3 text-sm text-slate-500">
                    35% Program Selesai
                </p>
            </div>

            <div class="bg-white border rounded-2xl p-6">
                <div class="flex items-center gap-2 mb-3">
                    <i class="ti ti-target-arrow text-[var(--color-primary)]"></i>
                    <span class="font-semibold">Target Aktif</span>
                </div>

                <h3 class="text-3xl font-bold">
                    2
                </h3>

                <p class="text-sm text-slate-500">
                    target sedang berjalan
                </p>
            </div>

            <div class="bg-white border rounded-2xl p-6">
                <div class="flex items-center gap-2 mb-3">
                    <i class="ti ti-message-circle text-[var(--color-primary)]"></i>
                    <span class="font-semibold">Konseling</span>
                </div>

                <h3 class="text-lg font-bold">
                    12 Agustus
                </h3>

                <p class="text-sm text-slate-500">
                    Jadwal berikutnya
                </p>
            </div>

        </div>

        <div class="bg-white border rounded-3xl p-8 mt-8">

            <h3 class="font-semibold text-lg mb-6">
                Perjalanan Program E-Lactacy
            </h3>

            <div class="grid md:grid-cols-5 gap-4">

                <div class="bg-pink-50 rounded-2xl p-4 text-center">
                    <i class="ti ti-clipboard-list text-2xl text-pink-600"></i>
                    <p class="text-sm font-medium mt-2">Pre-Test</p>
                </div>

                <div class="bg-green-50 rounded-2xl p-4 text-center">
                    <i class="ti ti-book text-2xl text-green-600"></i>
                    <p class="text-sm font-medium mt-2">Edukasi</p>
                </div>

                <div class="bg-blue-50 rounded-2xl p-4 text-center">
                    <i class="ti ti-heart-handshake text-2xl text-blue-600"></i>
                    <p class="text-sm font-medium mt-2">Motivasi</p>
                </div>

                <div class="bg-amber-50 rounded-2xl p-4 text-center">
                    <i class="ti ti-chart-line text-2xl text-amber-600"></i>
                    <p class="text-sm font-medium mt-2">Monitoring</p>
                </div>

                <div class="bg-slate-100 rounded-2xl p-4 text-center">
                    <i class="ti ti-award text-2xl text-slate-600"></i>
                    <p class="text-sm font-medium mt-2">Outcome</p>
                </div>
            </div>
        </div>
    </main>

</div>

@endsection