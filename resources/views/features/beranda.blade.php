@extends('layouts.app')
@section('content')

@php
/*
|--------------------------------------------------------------------------
| DATA SEMENTARA (HARDCODE)
|--------------------------------------------------------------------------
| semua variabel di bawah ini masih hardcode untuk keperluan tampilan.
| nnti tinggal ganti dengan query asli dari controller / database.
*/

// TODO: hitung dari tanggal mulai program si Ibu
$programDay = 14;

// Kata motivasi, berganti otomatis tiap hari (berdasarkan tanggal)
$motivations = [
'ASI sedikit pun tetap berarti besar bagi tumbuh kembang bayi Ibu.',
'Setiap tetes ASI adalah bentuk cinta yang tak tergantikan.',
'Menyusui adalah perjalanan, bukan perlombaan. Nikmati setiap prosesnya.',
'Lelah hari ini adalah bukti Ibu sedang berjuang luar biasa untuk si kecil.',
'Tidak ada Ibu yang sempurna, hanya Ibu yang terus berusaha. Itu sudah cukup.',
'Tubuh Ibu luar biasa, ia tahu cara menumbuhkan dan menghidupi anak Ibu.',
'Pelan-pelan saja, Bu. Bayi Ibu hanya butuh kehadiran, bukan kesempurnaan.',
'Hari ini boleh berat, tapi Ibu sudah melakukan yang terbaik untuk si kecil.',
];
$todayMotivation = $motivations[now()->dayOfYear % count($motivations)];

// Tips edukasi singkat, juga berganti tiap hari
$dailyTips = [
'Susui bayi dari kedua sisi payudara secara bergantian agar produksi ASI tetap seimbang.',
'Pastikan posisi mulut bayi mencakup sebagian besar areola, bukan hanya puting.',
'Kenali tanda lapar bayi sejak dini: tangan ke mulut, menoleh, atau mengecap-ngecap.',
'Perbanyak minum air putih dan istirahat cukup untuk membantu produksi ASI.',
'Pijat lembut payudara sebelum menyusui dapat membantu ASI mengalir lebih lancar.',
'Hindari membandingkan jumlah ASI dengan Ibu lain, setiap tubuh punya ritmenya sendiri.',
'Simpan ASI perah dalam wadah tertutup dan beri label tanggal pemerahan.',
];
$todayTip = $dailyTips[now()->dayOfYear % count($dailyTips)];

// TODO: ambil dari tabel feedback_konseling terbaru milik user
$latestFeedback = [
'nama' => 'Bidan Sari Wulandari, S.Keb',
'tanggal' => '10 Agustus 2025',
'pesan' => 'Posisi menyusui Ibu sudah jauh lebih baik dari sesi sebelumnya. Coba pertahankan pelekatan di kedua sisi
secara merata dan jangan ragu menghubungi saya jika puting masih terasa nyeri ya, Bu.',
'rating' => 5,
];

// Pilihan warna cairan ASI untuk pemantauan kesehatan harian
$asiColors = [
['key' => 'kolostrum', 'label' => 'Kuning Keemasan', 'hex' => '#F2C14E', 'desc' => 'Umum dijumpai sebagai kolostrum di
hari-hari awal menyusui.'],
['key' => 'krem', 'label' => 'Putih Krem', 'hex' => '#FBF1DE', 'desc' => 'ASI matur yang sehat, paling umum dijumpai.'],
['key' => 'bening', 'label' => 'Putih Bening', 'hex' => '#F1F5F9', 'desc' => 'Foremilk, kaya air, biasa muncul di awal
sesi menyusui.'],
['key' => 'biru', 'label' => 'Kebiruan', 'hex' => '#DCEEFA', 'desc' => 'Masih dalam rentang normal, tidak perlu
dikhawatirkan.'],
['key' => 'hijau', 'label' => 'Kehijauan', 'hex' => '#E1F0DE', 'desc' => 'Bisa dipengaruhi oleh makanan atau suplemen
yang Ibu konsumsi.'],
['key' => 'merah', 'label' => 'Kemerahan', 'hex' => '#F8DADA', 'desc' => 'Jika berlanjut lebih dari 2 hari, sebaiknya
hubungi konselor.'],
];

// Riwayat 7 hari terakhir (jumlah sesi menyusui) untuk grafik mini
$weeklyAsi = [6, 5, 7, 4, 6, 5, 0]; // hari terakhir (indeks 6) = hari ini, belum diisi
$weeklyLabel = ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'];

// Daftar pengingat singkat untuk Ibu
$reminders = $hasPretest ? [
['done' => false, 'text' => 'Catatan ASI hari ini belum diisi'],
['done' => false, 'text' => '2 materi edukasi baru menanti Ibu baca'],
['done' => true, 'text' => 'Konseling minggu lalu sudah terjadwalkan'],
['done' => false, 'text' => 'Jadwal konseling berikutnya: 12 Agustus'],
] : [
['done' => false, 'text' => 'Pre-Test belum diisi, lengkapi untuk membuka semua fitur'],
];
@endphp

<style>
    @keyframes elc-fade-up {
        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .elc-animate {
        animation: elc-fade-up .5s ease-out both;
    }

    .elc-swatch[data-selected="true"] {
        box-shadow: 0 0 0 2px var(--color-primary);
        transform: translateY(-2px);
    }

    .elc-toggle[data-active="true"] {
        background: var(--color-primary);
        color: #fff;
    }

    .elc-locked {
        filter: blur(3px);
        pointer-events: none;
        user-select: none;
    }
</style>

<div class="flex min-h-screen bg-slate-50">

    @include('layouts.sidebar')

    <main class="flex-1 p-8 space-y-8">

        {{-- pre-test reminder if pre-test score is empty --}}
        @if(!$hasPretest)
        <div
            class="elc-animate rounded-3xl bg-gradient-to-r from-amber-50 via-orange-50 to-rose-50 border border-amber-200 p-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <div class="flex items-start gap-4">
                <div class="shrink-0 w-11 h-11 rounded-2xl bg-amber-400 text-white flex items-center justify-center">
                    <i class="ti ti-alert-triangle text-xl"></i>
                </div>
                <div>
                    <p class="font-semibold text-slate-800">Lengkapi Pre-Test untuk membuka semua fitur</p>
                    <p class="text-sm text-slate-500 mt-1 max-w-xl">
                        Catatan harian ASI, edukasi, dan feedback konselor akan terbuka setelah Ibu mengisi
                        Pre-Test. Hanya butuh beberapa menit, dan hasilnya membantu kami menyesuaikan
                        pendampingan untuk Ibu.
                    </p>
                </div>
            </div>
            <a href="{{ route('pre_test') }}"
                class="inline-flex items-center gap-2 bg-amber-500 text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-amber-600 transition shrink-0 whitespace-nowrap">
                Isi Pre-Test Sekarang
                <i class="ti ti-arrow-right"></i>
            </a>
        </div>
        @endif

        {{-- hero --}}
        <div class="elc-animate relative overflow-hidden bg-white rounded-3xl border border-slate-200 p-8">
            <div class="absolute -top-10 -right-10 w-48 h-48 rounded-full bg-pink-100/70 blur-2xl"></div>
            <div class="absolute -bottom-12 -left-8 w-40 h-40 rounded-full bg-cyan-100/70 blur-2xl"></div>

            <div class="relative">
                <div class="flex flex-wrap items-center gap-2 mb-4">
                    <span
                        class="inline-flex items-center gap-2 bg-pink-50 text-pink-600 text-xs font-semibold px-3 py-1 rounded-full">
                        <i class="ti ti-heart"></i>
                        Selamat Datang
                    </span>
                    @if($hasPretest)
                    <span
                        class="inline-flex items-center gap-2 bg-slate-100 text-slate-600 text-xs font-semibold px-3 py-1 rounded-full">
                        <i class="ti ti-calendar-event"></i>
                        Hari ke-{{ $programDay }} program Ibu
                    </span>
                    @endif
                </div>

                <h2 class="font-['Lora'] text-4xl font-bold text-slate-800">
                    Halo, Ibu {{ $user->full_name }}.
                </h2>

                <p class="text-slate-500 mt-3 max-w-2xl">
                    Selamat datang di E-Lactacy. Mari lanjutkan perjalanan menyusui Anda melalui edukasi, pendampingan
                    profesional, dan pemantauan yang terstruktur.
                </p>
            </div>
        </div>

        {{-- dialy motivation and CTAs --}}
        <div class="grid lg:grid-cols-2 gap-6">
            <div
                class="elc-animate rounded-3xl bg-gradient-to-br from-pink-500 to-rose-400 text-white p-7 relative overflow-hidden">
                <i class="ti ti-quote text-5xl absolute top-4 right-5 opacity-25"></i>
                <span
                    class="inline-flex items-center gap-2 bg-white/20 text-xs font-semibold px-3 py-1 rounded-full mb-4">
                    <i class="ti ti-sparkles"></i>
                    Kata Hari Ini
                </span>
                <p class="font-['Lora'] text-xl leading-relaxed">
                    "{{ $todayMotivation }}"
                </p>
            </div>

            <div class="elc-animate rounded-3xl bg-white border border-slate-200 p-7">
                <span
                    class="inline-flex items-center gap-2 bg-cyan-50 text-cyan-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">
                    <i class="ti ti-bulb"></i>
                    Tips Edukasi Hari Ini
                </span>
                <p class="text-slate-700 leading-relaxed">
                    {{ $todayTip }}
                </p>
                @if(\Illuminate\Support\Facades\Route::has('edukasi'))
                <a href="{{ route('edukasi') }}"
                    class="inline-flex items-center gap-1 text-sm font-semibold text-[var(--color-primary)] mt-4">
                    Pelajari lebih lanjut <i class="ti ti-chevron-right"></i>
                </a>
                @endif
            </div>
        </div>

        <div class="elc-animate rounded-3xl bg-gradient-to-r from-pink-50 to-cyan-50 border border-pink-100 p-8">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                <div class="max-w-2xl">
                    <span
                        class="inline-flex items-center gap-2 bg-white text-pink-600 text-xs font-semibold px-3 py-1 rounded-full shadow-sm mb-4">
                        <i class="ti ti-message-circle"></i>
                        Konseling Online
                    </span>

                    <h3 class="font-['Lora'] text-2xl font-bold text-slate-800 mb-3">
                        Ada kendala selama kehamilan atau menyusui?
                    </h3>

                    <p class="text-slate-500 leading-relaxed">
                        Apabila Ibu memiliki pertanyaan, mengalami kesulitan menyusui, atau membutuhkan
                        pendampingan lebih lanjut, jangan ragu untuk berkonsultasi dengan konselor laktasi.
                        Tim kami siap membantu dan mendampingi perjalanan menyusui Ibu dengan informasi yang
                        terpercaya dan berbasis bukti ilmiah.
                    </p>
                </div>

                <a href="{{ route('konseling_online') }}"
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-6 py-3 rounded-2xl font-semibold hover:bg-[var(--color-primary-dk)] transition shrink-0">
                    <i class="ti ti-message-circle"></i>
                    Konsultasi Sekarang
                </a>
            </div>
        </div>

        {{-- progress --}}
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="elc-animate bg-white border rounded-2xl p-6">
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

            <div class="elc-animate bg-white border rounded-2xl p-6">
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

            <div class="elc-animate bg-white border rounded-2xl p-6">
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

        {{-- catatan harian asi: need to input daily for graphic --}}
        <div class="elc-animate relative bg-white border rounded-3xl p-8">
            <div class="flex items-center justify-between mb-2">
                <h3 class="font-semibold text-lg flex items-center gap-2">
                    <i class="ti ti-droplet text-[var(--color-primary)]"></i>
                    Catatan Harian Menyusui
                </h3>
                <span id="elc-save-status" class="text-xs font-medium text-emerald-600 hidden items-center gap-1">
                    <i class="ti ti-check"></i> Tersimpan untuk hari ini
                </span>
            </div>
            <p class="text-sm text-slate-500 mb-6">Isi catatan ini setiap hari agar Ibu dan konselor dapat memantau
                perkembangan menyusui.</p>

            <div class="{{ $hasPretest ? '' : 'elc-locked' }} grid lg:grid-cols-3 gap-8">
                {{-- Sudah menyusui? --}}
                <div>
                    <p class="text-sm font-medium text-slate-700 mb-3">Apakah bayi sudah mendapat ASI hari ini?</p>
                    <div class="flex gap-3">
                        <button type="button" id="elc-asi-yes"
                            class="elc-toggle flex-1 px-4 py-2.5 rounded-xl border border-slate-200 text-sm font-semibold transition">
                            Sudah
                        </button>
                        <button type="button" id="elc-asi-no"
                            class="elc-toggle flex-1 px-4 py-2.5 rounded-xl border border-slate-200 text-sm font-semibold transition">
                            Belum
                        </button>
                    </div>
                </div>

                {{-- Berapa kali --}}
                <div>
                    <p class="text-sm font-medium text-slate-700 mb-3">Berapa kali menyusui hari ini?</p>
                    <div class="flex items-center gap-3">
                        <button type="button" id="elc-count-minus"
                            class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center hover:bg-slate-50">
                            <i class="ti ti-minus"></i>
                        </button>
                        <span id="elc-count-value" class="text-2xl font-bold w-10 text-center">0</span>
                        <button type="button" id="elc-count-plus"
                            class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center hover:bg-slate-50">
                            <i class="ti ti-plus"></i>
                        </button>
                        <span class="text-sm text-slate-500">kali</span>
                    </div>
                </div>

                {{-- Warna ASI --}}
                <div>
                    <p class="text-sm font-medium text-slate-700 mb-3">Warna cairan ASI hari ini</p>
                    <div class="flex flex-wrap gap-2" id="elc-color-group">
                        @foreach($asiColors as $color)
                        <button type="button"
                            class="elc-swatch w-9 h-9 rounded-full border-2 border-slate-200 transition"
                            style="background-color: {{ $color['hex'] }}" data-selected="false"
                            data-label="{{ $color['label'] }}" data-desc="{{ $color['desc'] }}"
                            title="{{ $color['label'] }}">
                        </button>
                        @endforeach
                    </div>
                    <p id="elc-color-desc" class="text-xs text-slate-500 mt-3 min-h-[1.5em]"></p>
                </div>
            </div>

            <div
                class="{{ $hasPretest ? '' : 'elc-locked' }} flex items-center justify-between mt-6 pt-6 border-t border-slate-100">
                <div class="flex-1">
                    <p class="text-xs text-slate-400 mb-2">Riwayat 7 hari terakhir (kali menyusui)</p>
                    <div class="flex items-end gap-2 h-16" id="elc-weekly-chart">
                        @foreach($weeklyAsi as $i => $value)
                        <div class="flex flex-col items-center justify-end h-full gap-1">
                            <div class="w-6 rounded-md {{ $i === count($weeklyAsi) - 1 ? 'bg-[var(--color-primary)]' : 'bg-slate-200' }}"
                                style="height: {{ $value === 0 ? 4 : max(8, ($value / max($weeklyAsi)) * 56) }}px"
                                data-bar="{{ $i }}">
                            </div>
                            <span class="text-[10px] text-slate-400">{{ $weeklyLabel[$i] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button type="button" id="elc-save-btn"
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-[var(--color-primary-dk)] transition shrink-0">
                    Simpan Catatan Hari Ini
                </button>
            </div>

            @if(!$hasPretest)
            <div
                class="absolute inset-0 rounded-3xl bg-white/60 flex flex-col items-center justify-center text-center p-6">
                <div class="w-12 h-12 rounded-2xl bg-slate-800 text-white flex items-center justify-center mb-3">
                    <i class="ti ti-lock text-xl"></i>
                </div>
                <p class="font-semibold text-slate-800">Fitur ini terkunci</p>
                <p class="text-sm text-slate-500 max-w-sm mt-1 mb-4">Selesaikan Pre-Test terlebih dahulu untuk mulai
                    mencatat ASI harian si kecil.</p>
                <a href="{{ route('pre_test') }}"
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-[var(--color-primary-dk)] transition">
                    Isi Pre-Test
                    <i class="ti ti-arrow-right"></i>
                </a>
            </div>
            @endif
        </div>

        {{-- latest konselor feedback --}}
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="elc-animate relative lg:col-span-2 bg-white border rounded-3xl p-8 overflow-hidden">
                <h3 class="font-semibold text-lg flex items-center gap-2 mb-5">
                    <i class="ti ti-message-2 text-[var(--color-primary)]"></i>
                    Feedback Terbaru dari Konselor
                </h3>

                <div class="{{ $hasPretest ? '' : 'elc-locked' }} flex gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center font-bold shrink-0">
                        {{ strtoupper(substr($latestFeedback['nama'], 0, 1)) }}
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <p class="font-semibold text-slate-800">{{ $latestFeedback['nama'] }}</p>
                            <span class="text-xs text-slate-400">{{ $latestFeedback['tanggal'] }}</span>
                        </div>
                        <div class="flex gap-0.5 my-1">
                            @for($i = 0; $i < 5; $i++) <i
                                class="ti ti-star-filled text-sm {{ $i < $latestFeedback['rating'] ? 'text-amber-400' : 'text-slate-200' }}">
                                </i>
                                @endfor
                        </div>
                        <p class="text-slate-600 leading-relaxed mt-2">
                            {{ $latestFeedback['pesan'] }}
                        </p>
                        <a href="{{ route('konseling_online') }}"
                            class="inline-flex items-center gap-1 text-sm font-semibold text-[var(--color-primary)] mt-4">
                            Lihat riwayat konseling <i class="ti ti-chevron-right"></i>
                        </a>
                    </div>
                </div>

                @if(!$hasPretest)
                <div
                    class="absolute inset-0 rounded-3xl bg-white/60 flex flex-col items-center justify-center text-center p-6">
                    <div class="w-12 h-12 rounded-2xl bg-slate-800 text-white flex items-center justify-center mb-3">
                        <i class="ti ti-lock text-xl"></i>
                    </div>
                    <p class="font-semibold text-slate-800">Belum ada feedback</p>
                    <p class="text-sm text-slate-500 max-w-sm mt-1">Feedback konselor akan muncul di sini setelah Ibu
                        memulai program.</p>
                </div>
                @endif
            </div>

            <div class="elc-animate bg-white border rounded-3xl p-8">
                <h3 class="font-semibold text-lg flex items-center gap-2 mb-5">
                    <i class="ti ti-bell text-[var(--color-primary)]"></i>
                    Pengingat Untuk Ibu
                </h3>
                <ul class="space-y-3">
                    @foreach($reminders as $reminder)
                    <li class="flex items-start gap-3 text-sm">
                        <i
                            class="ti {{ $reminder['done'] ? 'ti-circle-check text-emerald-500' : 'ti-circle-dashed text-slate-300' }} mt-0.5"></i>
                        <span class="{{ $reminder['done'] ? 'text-slate-400 line-through' : 'text-slate-600' }}">{{
                            $reminder['text'] }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- quick access - idk if necessary --}}
        {{-- <div class="elc-animate bg-white border rounded-3xl p-8">
            <h3 class="font-semibold text-lg mb-6">Akses Cepat</h3>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @php
                $quickLinks = [
                ['icon' => 'ti-book', 'label' => 'Materi Edukasi', 'route' => 'edukasi', 'color' => 'green'],
                ['icon' => 'ti-chart-line', 'label' => 'Monitoring', 'route' => 'monitoring', 'color' => 'amber'],
                ['icon' => 'ti-target-arrow', 'label' => 'Target Saya', 'route' => 'target', 'color' => 'blue'],
                ['icon' => 'ti-award', 'label' => 'Capaian / Outcome','route' => 'outcome', 'color' => 'slate'],
                ];
                @endphp
                @foreach($quickLinks as $link)
                @php $isOpen = $hasPretest && \Illuminate\Support\Facades\Route::has($link['route']); @endphp
                <a href="{{ $isOpen ? route($link['route']) : '#' }}"
                    class="relative flex flex-col items-center text-center gap-2 rounded-2xl p-5 border border-slate-100 bg-{{ $link['color'] }}-50 {{ $isOpen ? 'hover:shadow-md transition' : 'opacity-60 cursor-not-allowed' }}">
                    @if(!$isOpen)
                    <i class="ti ti-lock absolute top-3 right-3 text-slate-400 text-sm"></i>
                    @endif
                    <i class="ti {{ $link['icon'] }} text-2xl text-{{ $link['color'] }}-600"></i>
                    <p class="text-sm font-medium text-slate-700">{{ $link['label'] }}</p>
                </a>
                @endforeach
            </div>
        </div> --}}

        {{-- pages/program utama --}}
        <div class="elc-animate bg-white border rounded-3xl p-8">

            <h3 class="font-semibold text-lg mb-6">
                Perjalanan Program E-Lactacy
            </h3>

            <div class="grid md:grid-cols-5 gap-4">

                <div class="rounded-2xl p-4 text-center {{ !$hasPretest ? 'bg-pink-600 text-white' : 'bg-pink-50' }}">
                    <i class="ti ti-clipboard-list text-2xl {{ !$hasPretest ? 'text-white' : 'text-pink-600' }}"></i>
                    <p class="text-sm font-medium mt-2">Pre-Test</p>
                </div>

                <div class="rounded-2xl p-4 text-center {{ $hasPretest ? 'bg-green-600 text-white' : 'bg-green-50' }}">
                    <i class="ti ti-book text-2xl {{ $hasPretest ? 'text-white' : 'text-green-600' }}"></i>
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

        @include('layouts.footer')
    </main>

</div>

<script>
    (function () {
    // NOTE: Penyimpanan masih lokal (localStorage) sebagai demo.
    // TODO: ganti dengan fetch()/axios ke endpoint backend setelah tabel catatan harian tersedia.

    var hasPretest = @json($hasPretest);
    if (!hasPretest) return; // form terkunci, tidak perlu jalankan logika apa pun

    var todayKey = 'elc_daily_' + new Date().toISOString().slice(0, 10);
    var state = { sudahAsi: null, jumlah: 0, warna: null };

    var btnYes = document.getElementById('elc-asi-yes');
    var btnNo = document.getElementById('elc-asi-no');
    var countValue = document.getElementById('elc-count-value');
    var btnMinus = document.getElementById('elc-count-minus');
    var btnPlus = document.getElementById('elc-count-plus');
    var colorGroup = document.getElementById('elc-color-group');
    var colorDesc = document.getElementById('elc-color-desc');
    var saveBtn = document.getElementById('elc-save-btn');
    var saveStatus = document.getElementById('elc-save-status');
    var todayBar = document.querySelector('[data-bar="' + (document.querySelectorAll('#elc-weekly-chart > div').length - 1) + '"]');

    function renderToggle() {
        btnYes.setAttribute('data-active', state.sudahAsi === true);
        btnNo.setAttribute('data-active', state.sudahAsi === false);
    }

    btnYes.addEventListener('click', function () { state.sudahAsi = true; renderToggle(); });
    btnNo.addEventListener('click', function () { state.sudahAsi = false; renderToggle(); });

    btnMinus.addEventListener('click', function () {
        state.jumlah = Math.max(0, state.jumlah - 1);
        countValue.textContent = state.jumlah;
    });
    btnPlus.addEventListener('click', function () {
        state.jumlah = Math.min(20, state.jumlah + 1);
        countValue.textContent = state.jumlah;
    });

    colorGroup.querySelectorAll('.elc-swatch').forEach(function (swatch) {
        swatch.addEventListener('click', function () {
            colorGroup.querySelectorAll('.elc-swatch').forEach(function (s) { s.setAttribute('data-selected', 'false'); });
            swatch.setAttribute('data-selected', 'true');
            state.warna = swatch.getAttribute('data-label');
            colorDesc.textContent = swatch.getAttribute('data-desc');
        });
    });

    saveBtn.addEventListener('click', function () {
        try {
            localStorage.setItem(todayKey, JSON.stringify(state));
        } catch (e) { /* abaikan jika localStorage tidak tersedia */ }

        if (todayBar) {
            var maxBar = 56;
            var newHeight = state.jumlah === 0 ? 4 : Math.max(8, Math.min(maxBar, state.jumlah * 8));
            todayBar.style.height = newHeight + 'px';
        }

        saveStatus.classList.remove('hidden');
        saveStatus.classList.add('inline-flex');
        saveBtn.textContent = 'Catatan Diperbarui';
    });

    // Pulihkan catatan jika sudah pernah diisi hari ini
    try {
        var saved = localStorage.getItem(todayKey);
        if (saved) {
            var parsed = JSON.parse(saved);
            state = parsed;
            countValue.textContent = state.jumlah || 0;
            renderToggle();
            saveStatus.classList.remove('hidden');
            saveStatus.classList.add('inline-flex');
            saveBtn.textContent = 'Catatan Diperbarui';
            if (state.warna) {
                colorGroup.querySelectorAll('.elc-swatch').forEach(function (s) {
                    if (s.getAttribute('data-label') === state.warna) {
                        s.setAttribute('data-selected', 'true');
                        colorDesc.textContent = s.getAttribute('data-desc');
                    }
                });
            }
        }
    } catch (e) { /* abaikan */ }
})();
</script>

@endsection