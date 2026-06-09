@extends('layouts.app')
@section('content')

<div class="flex bg-slate-50">
    @include('layouts.sidebar')

    <main class="flex-1">
        <div class="bg-white border-b border-slate-200 px-8 py-8">
            <div
                class="inline-flex items-center gap-2 bg-sky-50 text-sky-700 border border-sky-200 rounded-full px-4 py-2 text-xs font-semibold mb-5">
                <i class="ti ti-message-heart"></i>
                Konseling Online
            </div>

            <h1 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                Konseling Laktasi Online
            </h1>

            <p class="text-slate-500 leading-relaxed">
                Dapatkan pendampingan dan konsultasi langsung terkait proses
                menyusui, permasalahan laktasi, serta solusi praktis dari
                konselor laktasi dan tenaga kesehatan.
            </p>
        </div>

        <div class="px-8 py-8">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('niat_target_menyusui') }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-slate-700 transition">
                    <i class="ti ti-arrow-left"></i>
                    Dukungan Sosial
                </a>

                <a href=""
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-[var(--color-primary-dk)] transition">
                    Keterampilan Menyusui
                    <i class="ti ti-arrow-right"></i>
                </a>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-8 flex gap-5 items-start">
                <div class="w-12 h-12 rounded-xl bg-[var(--color-primary)] flex items-center justify-center shrink-0">
                    <i class="ti ti-headset text-white text-xl"></i>
                </div>

                <div>
                    <h2 class="font-semibold text-slate-800 mb-1">
                        Tujuan Modul
                    </h2>

                    <p class="text-sm text-slate-500 leading-relaxed">
                        Memberikan pendampingan, konsultasi, dan solusi terhadap
                        berbagai tantangan menyusui sehingga ibu merasa lebih
                        percaya diri dan mendapatkan dukungan yang tepat selama
                        masa laktasi.
                    </p>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">

                <div class="flex items-center gap-2 mb-5">
                    <i class="ti ti-history text-[var(--color-primary)]"></i>
                    <h2 class="font-semibold text-slate-800">
                        Riwayat Konsultasi Saya
                    </h2>
                </div>

                <div class="space-y-4">
                    @foreach($riwayat as $item)
                    <div class="border border-slate-200 rounded-xl p-4">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-semibold text-sm text-slate-800">
                                {{ $item['subjek'] }}
                            </h3>

                            @if($item['status'] == 'Sudah Dibalas')
                            <span class="bg-emerald-50 text-emerald-700 px-3 py-1 rounded-full text-xs font-medium">
                                {{ $item['status'] }}
                            </span>
                            @else
                            <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs font-medium">
                                {{ $item['status'] }}
                            </span>
                            @endif

                        </div>

                        <p class="text-xs text-slate-400 mb-3">
                            {{ $item['tanggal'] }}
                        </p>

                        @if($item['balasan'])
                        <div class="bg-slate-50 rounded-xl p-4 border border-slate-200">
                            <p class="font-medium text-xs text-[var(--color-primary)] mb-2">
                                Balasan Konselor
                            </p>

                            <p class="text-sm text-slate-600">
                                {{ $item['balasan'] }}
                            </p>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">
                <div class="flex items-center gap-2 mb-5">
                    <i class="ti ti-brand-whatsapp text-green-600"></i>
                    <h2 class="font-semibold text-slate-800">
                        Konsultasi Cepat via WhatsApp
                    </h2>
                </div>

                <p class="text-sm text-slate-500 mb-5">
                    Untuk pertanyaan mendesak, Anda dapat langsung terhubung dengan
                    konselor melalui WhatsApp.
                </p>

                <div class="grid md:grid-cols-3 gap-4">
                    @foreach($konselor as $item)
                    <div class="border border-slate-200 rounded-xl p-4">
                        <div class="w-12 h-12 rounded-xl {{ $item['warna'] }}
                                    flex items-center justify-center mb-3">
                            <i class="ti ti-user-heart text-lg"></i>
                        </div>

                        <h3 class="font-semibold text-sm text-slate-800">
                            {{ $item['nama'] }}
                        </h3>

                        <p class="text-xs text-slate-500 mb-4">
                            {{ $item['role'] }}
                        </p>

                        <a href="https://wa.me/{{ $item['wa'] }}" target="_blank"
                            class="inline-flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-xl text-sm font-medium hover:bg-green-700 transition">
                            <i class="ti ti-brand-whatsapp"></i>
                            Chat Sekarang
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">

                <div class="flex items-center gap-2 mb-5">
                    <i class="ti ti-calendar-event text-[var(--color-primary)]"></i>

                    <h2 class="font-semibold text-slate-800">
                        Konseling Tatap Muka Online
                    </h2>
                </div>

                <div class="bg-sky-50 border border-sky-100 rounded-xl p-4 mb-6 flex gap-3 items-start">

                    <i class="ti ti-info-circle text-sky-600 text-lg mt-0.5"></i>

                    <div>
                        <p class="font-medium text-sky-800 text-sm mb-1">
                            Konseling melalui Zoom / Google Meet
                        </p>

                        <p class="text-sm text-sky-700 leading-relaxed">
                            Ajukan jadwal konsultasi sesuai waktu yang diinginkan.
                            Permintaan akan ditinjau oleh konselor atau tenaga kesehatan.
                            Apabila disetujui, Anda akan menerima konfirmasi jadwal
                            beserta tautan Zoom atau Google Meet untuk sesi konsultasi.
                        </p>
                    </div>

                </div>

                <div class="grid md:grid-cols-3 gap-4">

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Tanggal Konseling
                        </label>

                        <input type="date" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Konselor
                        </label>

                        <select class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm">
                            <option>Pilih Konselor</option>
                            <option>dr. Anita, Sp.A</option>
                            <option>Bidan Rina</option>
                            <option>Maya Putri, Konselor Laktasi</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Jam yang Diinginkan
                        </label>

                        <select class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm">
                            <option>09.00 WIB</option>
                            <option>10.00 WIB</option>
                            <option>13.00 WIB</option>
                            <option>15.00 WIB</option>
                        </select>
                    </div>

                </div>

                <div class="mt-5 flex flex-wrap gap-3">

                    <button
                        class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-[var(--color-primary-dk)] transition">

                        <i class="ti ti-send"></i>
                        Ajukan Permohonan Konseling

                    </button>

                    <div
                        class="inline-flex items-center gap-2 bg-amber-50 text-amber-700 border border-amber-200 px-4 py-2.5 rounded-xl text-sm">

                        <i class="ti ti-clock-hour-4"></i>
                        Menunggu konfirmasi dari konselor

                    </div>

                </div>

            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-8">

                <div class="flex items-center gap-2 mb-5">
                    <i class="ti ti-mail text-[var(--color-primary)]"></i>

                    <h2 class="font-semibold text-slate-800">
                        Kirim Pertanyaan Konsultasi
                    </h2>
                </div>

                <div class="space-y-4">

                    <input type="text" placeholder="Judul konsultasi"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3">

                    <select class="w-full border border-slate-200 rounded-xl px-4 py-3">
                        <option>Pelekatan Menyusui</option>
                        <option>Produksi ASI</option>
                        <option>ASI Perah</option>
                        <option>Masalah Puting</option>
                        <option>Lainnya</option>
                    </select>

                    <textarea rows="6" placeholder="Tuliskan pertanyaan Anda secara detail..."
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 resize-none"></textarea>

                    <button
                        class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-5 py-3 rounded-xl text-sm font-semibold">
                        <i class="ti ti-send"></i>
                        Kirim Pertanyaan
                    </button>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">

                <div class="p-6 border-b border-slate-100">
                    <div class="flex items-center gap-2">
                        <i class="ti ti-help-circle text-[var(--color-primary)]"></i>
                        <h2 class="font-semibold text-slate-800">
                            FAQ Menyusui
                        </h2>
                    </div>
                </div>

                <div id="faq-accordion" data-accordion="open">

                    @foreach([
                    [
                    'q' => 'Apakah ASI saya cukup untuk bayi?',
                    'a' => 'Kecukupan ASI dapat dilihat dari kenaikan berat badan bayi, frekuensi BAK, dan kondisi bayi
                    yang aktif serta sehat.'
                    ],
                    [
                    'q' => 'Bagaimana jika puting terasa nyeri?',
                    'a' => 'Periksa kembali pelekatan bayi saat menyusu. Posisi dan teknik yang benar dapat membantu
                    mengurangi nyeri.'
                    ],
                    [
                    'q' => 'Bolehkah ibu bekerja tetap memberikan ASI eksklusif?',
                    'a' => 'Ya. ASI dapat diperah, disimpan, dan diberikan kepada bayi sesuai pedoman penyimpanan ASI
                    perah.'
                    ],
                    [
                    'q' => 'Kapan saya perlu menghubungi konselor?',
                    'a' => 'Segera konsultasikan jika mengalami nyeri hebat, bayi sulit menyusu, produksi ASI menurun,
                    atau masalah laktasi lainnya.'
                    ]
                    ] as $index => $faq)

                    <div class="border-b border-slate-100 last:border-0">

                        <button
                            class="w-full flex justify-between items-center p-5 text-left hover:bg-slate-50 transition"
                            data-accordion-target="#faq-{{ $index }}" aria-expanded="true">

                            <span class="font-medium text-slate-800 text-sm">
                                {{ $faq['q'] }}
                            </span>

                            <i data-accordion-icon class="ti ti-chevron-down"></i>

                        </button>

                        <div id="faq-{{ $index }}">
                            <div class="px-5 pb-5">
                                <p class="text-sm text-slate-500 leading-relaxed">
                                    {{ $faq['a'] }}
                                </p>
                            </div>
                        </div>

                    </div>

                    @endforeach

                </div>
            </div>

        </div>

        @include('layouts.footer')

    </main>
</div>

@endsection