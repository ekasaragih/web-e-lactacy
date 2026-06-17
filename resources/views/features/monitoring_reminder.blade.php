@extends('layouts.app')
@section('content')

<div class="flex bg-slate-50">
    @include('layouts.sidebar')

    <main class="flex-1">
        <div class="bg-white border-b border-slate-200 px-8 py-8">
            <div
                class="inline-flex items-center gap-2 bg-indigo-50 text-indigo-700 border border-indigo-200 rounded-full px-4 py-2 text-xs font-semibold mb-5">
                <i class="ti ti-chart-line"></i>
                Monitoring & Reminder
            </div>

            <h1 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                Monitoring Perkembangan Menyusui
            </h1>

            <p class="text-slate-500 leading-relaxed">
                Pantau progres menyusui, catat target yang telah dicapai,
                dapatkan pengingat harian, serta terima umpan balik dari
                konselor untuk membantu mempertahankan praktik ASI eksklusif.
            </p>
        </div>

        <div class="px-8 py-8">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('keterampilan_menyusui') }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-slate-700 transition">
                    <i class="ti ti-arrow-left"></i>
                    Keterampilan Menyusui
                </a>

                <a href="{{ route('post_test') }}"
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-[var(--color-primary-dk)] transition">
                    Post-Test
                    <i class="ti ti-arrow-right"></i>
                </a>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-8 flex gap-5 items-start">
                <div class="w-12 h-12 rounded-xl bg-[var(--color-primary)] flex items-center justify-center shrink-0">
                    <i class="ti ti-target-arrow text-white text-xl"></i>
                </div>

                <div>
                    <h2 class="font-semibold text-slate-800 mb-1">
                        Tujuan Modul
                    </h2>

                    <p class="text-[14px] text-slate-500 leading-relaxed">
                        Memantau perkembangan ibu selama proses menyusui,
                        mengevaluasi pencapaian target yang telah ditetapkan,
                        memberikan penguatan perilaku positif, serta membantu
                        mempertahankan komitmen pemberian ASI eksklusif.
                    </p>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">
                <div class="flex items-center gap-2 mb-5">
                    <i class="ti ti-bell-ringing text-[var(--color-primary)]"></i>
                    <h2 class="font-semibold text-slate-800">
                        Reminder Menyusui
                    </h2>
                </div>

                <div class="bg-pink-50 border border-pink-100 rounded-2xl p-5">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-pink-100 text-pink-600 flex items-center justify-center shrink-0">
                            <i class="ti ti-baby-bottle text-xl"></i>
                        </div>

                        <div>
                            <h3 class="font-semibold text-slate-800 mb-1">
                                Pengingat Hari Ini
                            </h3>

                            <p class="text-sm text-slate-600 leading-relaxed">
                                Jangan lupa menyusui bayi setiap kali bayi
                                menunjukkan tanda lapar. Pastikan ibu juga
                                mencukupi kebutuhan cairan dan istirahat agar
                                produksi ASI tetap optimal.
                            </p>

                            <button
                                class="mt-4 inline-flex items-center gap-2 border border-slate-200 bg-white px-4 py-2 rounded-xl text-sm font-medium hover:bg-slate-50 transition">
                                <i class="ti ti-bell-plus"></i>
                                Atur Reminder Pribadi
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div
                        class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-4">
                        <i class="ti ti-calendar-check"></i>
                    </div>

                    <h3 class="font-semibold text-slate-800 mb-1">
                        Hari Menyusui
                    </h3>

                    <p class="text-3xl font-bold text-slate-800">
                        42
                    </p>

                    <p class="text-sm text-slate-500 mt-2">
                        Hari sejak kelahiran bayi
                    </p>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-600 flex items-center justify-center mb-4">
                        <i class="ti ti-target"></i>
                    </div>

                    <h3 class="font-semibold text-slate-800 mb-1">
                        Target Tercapai
                    </h3>

                    <p class="text-3xl font-bold text-slate-800">
                        70%
                    </p>

                    <p class="text-sm text-slate-500 mt-2">
                        Dari target ASI eksklusif
                    </p>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div
                        class="w-12 h-12 rounded-xl bg-violet-100 text-violet-600 flex items-center justify-center mb-4">
                        <i class="ti ti-award"></i>
                    </div>

                    <h3 class="font-semibold text-slate-800 mb-1">
                        Konsistensi
                    </h3>

                    <p class="text-3xl font-bold text-slate-800">
                        Baik
                    </p>

                    <p class="text-sm text-slate-500 mt-2">
                        Tetap pertahankan kebiasaan positif
                    </p>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">
                <div class="flex items-center gap-2 mb-5">
                    <i class="ti ti-clipboard-check text-[var(--color-primary)]"></i>
                    <h2 class="font-semibold text-slate-800">
                        Pencatatan Target Menyusui
                    </h2>
                </div>

                <div class="space-y-4">
                    <label
                        class="flex items-center gap-3 border border-slate-200 rounded-xl p-4 hover:bg-slate-50 cursor-pointer">
                        <input type="checkbox" checked class="rounded">
                        <span class="text-sm text-slate-700">
                            Menyusui secara eksklusif setiap hari
                        </span>
                    </label>

                    <label
                        class="flex items-center gap-3 border border-slate-200 rounded-xl p-4 hover:bg-slate-50 cursor-pointer">
                        <input type="checkbox" checked class="rounded">
                        <span class="text-sm text-slate-700">
                            Tidak memberikan susu formula tanpa indikasi medis
                        </span>
                    </label>

                    <label
                        class="flex items-center gap-3 border border-slate-200 rounded-xl p-4 hover:bg-slate-50 cursor-pointer">
                        <input type="checkbox" class="rounded">
                        <span class="text-sm text-slate-700">
                            Mengikuti sesi konseling lanjutan bulan ini
                        </span>
                    </label>

                    <label
                        class="flex items-center gap-3 border border-slate-200 rounded-xl p-4 hover:bg-slate-50 cursor-pointer">
                        <input type="checkbox" class="rounded">
                        <span class="text-sm text-slate-700">
                            Menyimpan cadangan ASI perah sesuai kebutuhan
                        </span>
                    </label>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">
                <div class="flex items-center gap-2 mb-5">
                    <i class="ti ti-chart-line text-[var(--color-primary)]"></i>
                    <h2 class="font-semibold text-slate-800">
                        Grafik Perkembangan Menyusui
                    </h2>
                </div>

                <div class="h-72 rounded-2xl border-2 border-dashed border-slate-200 flex items-center justify-center">
                    <div class="text-center">
                        <i class="ti ti-chart-line text-5xl text-slate-300"></i>
                        <p class="text-sm text-slate-500 mt-3">
                            Area grafik perkembangan menyusui
                        </p>
                        <p class="text-xs text-slate-400">
                            (Hubungkan dengan Chart.js atau data monitoring)
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">
                <div class="flex items-center gap-2 mb-5">
                    <i class="ti ti-message-heart text-[var(--color-primary)]"></i>
                    <h2 class="font-semibold text-slate-800">
                        Feedback dari Konselor
                    </h2>
                </div>

                <div class="bg-sky-50 border border-sky-100 rounded-2xl p-5">
                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-sky-600 shrink-0">
                            <i class="ti ti-user-heart"></i>
                        </div>

                        <div>
                            <p class="font-semibold text-slate-800 mb-1">
                                Konselor Laktasi
                            </p>

                            <p class="text-sm text-slate-600 leading-relaxed">
                                Ibu menunjukkan perkembangan yang sangat baik.
                                Frekuensi menyusui sudah sesuai kebutuhan bayi
                                dan komitmen terhadap ASI eksklusif tetap
                                terjaga. Pertahankan pola menyusui saat ini dan
                                jangan ragu berkonsultasi jika menemukan
                                kendala.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-pink-500 to-rose-500 rounded-3xl p-8 text-white">
                <div class="max-w-3xl">
                    <div class="w-14 h-14 rounded-2xl bg-white/20 flex items-center justify-center mb-4">
                        <i class="ti ti-heart text-2xl"></i>
                    </div>

                    <h2 class="text-2xl font-bold mb-3">
                        Hebat, Ibu Tetap Konsisten!
                    </h2>

                    <p class="text-pink-50 leading-relaxed mb-5">
                        Setiap sesi menyusui adalah investasi terbaik bagi
                        kesehatan dan tumbuh kembang bayi. Tetap lanjutkan
                        perjalanan ASI eksklusif ini, karena usaha yang ibu
                        lakukan hari ini akan memberikan manfaat jangka panjang
                        bagi buah hati.
                    </p>

                    <button
                        class="inline-flex items-center gap-2 bg-white text-pink-600 px-5 py-3 rounded-xl font-semibold hover:bg-pink-50 transition">
                        <i class="ti ti-award"></i>
                        Lihat Pencapaian Saya
                    </button>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </main>
</div>

@endsection