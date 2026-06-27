@extends('layouts.app')
@section('content')

<div class="flex bg-slate-50">
    @include('layouts.sidebar')

    <main class="flex-1">
        <div class="bg-white border-b border-slate-200 px-8 py-8">
            <div
                class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full px-4 py-2 text-xs font-semibold mb-5">
                <i class="ti ti-award"></i>
                Outcome ASI Eksklusif
            </div>

            <h1 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                Menilai Hasil Perjalanan Menyusui Anda.
            </h1>

            <p class="text-slate-500 leading-relaxed max-w-3xl">
                Halaman ini digunakan untuk mengevaluasi keberhasilan praktik pemberian ASI eksklusif,
                melihat pencapaian target menyusui, serta merefleksikan perkembangan yang telah
                dicapai selama mengikuti seluruh rangkaian program E-Lactacy.
            </p>
        </div>

        <div class="px-8 py-8">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('post_test') }}"
                    class="inline-flex items-center gap-2 text-[13px] font-medium text-slate-500 hover:text-slate-700 transition-colors">
                    <i class="ti ti-arrow-left text-[15px]"></i>
                    Post Test
                </a>

            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 my-8 flex gap-5 items-start">
                <div class="w-12 h-12 rounded-xl bg-[var(--color-primary)] flex items-center justify-center shrink-0">
                    <i class="ti ti-target text-white text-xl"></i>
                </div>
                <div>
                    <h2 class="font-semibold text-slate-800 mb-1">
                        Tujuan Modul
                    </h2>

                    <p class="text-[14px] text-slate-500 leading-relaxed">
                        Menilai keberhasilan pemberian ASI eksklusif melalui evaluasi praktik menyusui,
                        keberlanjutan pemberian ASI, pencapaian target yang telah ditetapkan,
                        serta memberikan gambaran perkembangan ibu selama mengikuti program.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 flex items-center justify-center mb-4">
                        <i class="ti ti-baby-bottle text-emerald-600 text-xl"></i>
                    </div>

                    <h3 class="font-semibold text-slate-800 mb-2">
                        Evaluasi Praktik ASI Eksklusif
                    </h3>

                    <p class="text-sm text-slate-500 leading-relaxed">
                        Menilai sejauh mana praktik pemberian ASI eksklusif telah dilakukan sesuai
                        dengan rekomendasi selama enam bulan pertama kehidupan bayi.
                    </p>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-4">
                        <i class="ti ti-heart-handshake text-blue-600 text-xl"></i>
                    </div>

                    <h3 class="font-semibold text-slate-800 mb-2">
                        Keberlanjutan Menyusui
                    </h3>

                    <p class="text-sm text-slate-500 leading-relaxed">
                        Mengevaluasi komitmen ibu dalam melanjutkan pemberian ASI sesuai anjuran
                        hingga usia dua tahun atau lebih.
                    </p>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center mb-4">
                        <i class="ti ti-target-arrow text-amber-600 text-xl"></i>
                    </div>

                    <h3 class="font-semibold text-slate-800 mb-2">
                        Capaian Target Menyusui
                    </h3>

                    <p class="text-sm text-slate-500 leading-relaxed">
                        Membandingkan target menyusui yang telah ditetapkan dengan pencapaian
                        aktual selama mengikuti program E-Lactacy.
                    </p>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div class="w-12 h-12 rounded-xl bg-pink-50 flex items-center justify-center mb-4">
                        <i class="ti ti-report-analytics text-pink-600 text-xl"></i>
                    </div>

                    <h3 class="font-semibold text-slate-800 mb-2">
                        Laporan Keberhasilan
                    </h3>

                    <p class="text-sm text-slate-500 leading-relaxed">
                        Menampilkan ringkasan hasil evaluasi sebagai gambaran perkembangan,
                        keberhasilan, serta aspek yang masih dapat ditingkatkan dalam perjalanan
                        menyusui.
                    </p>
                </div>

            </div>

            <div class="mt-8 rounded-3xl bg-gradient-to-r from-[var(--color-primary)] to-pink-500 p-8 text-white">
                <div class="flex items-start gap-5">
                    <div class="w-14 h-14 rounded-2xl bg-white/20 flex items-center justify-center shrink-0">
                        <i class="ti ti-award text-3xl"></i>
                    </div>

                    <div>
                        <h2 class="text-2xl font-['Lora'] font-bold mb-2">
                            Selamat Menyelesaikan Program E-Lactacy
                        </h2>

                        <p class="text-white/90 leading-relaxed">
                            Terima kasih telah mengikuti seluruh rangkaian program edukasi, pendampingan,
                            dan evaluasi. Setiap langkah yang telah Anda lakukan merupakan investasi
                            berharga bagi kesehatan ibu dan buah hati. Teruslah mempertahankan praktik
                            menyusui yang optimal dan jangan ragu untuk mencari dukungan apabila
                            menghadapi tantangan di kemudian hari.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        @include('layouts.footer')
    </main>
</div>

@endsection