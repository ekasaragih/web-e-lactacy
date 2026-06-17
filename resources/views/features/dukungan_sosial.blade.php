@extends('layouts.app')
@section('content')

<div class="flex bg-slate-50">
    @include('layouts.sidebar')

    <main class="flex-1">
        <div class="bg-white border-b border-slate-200 px-8 py-8">
            <div
                class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full px-4 py-2 text-xs font-semibold mb-5">
                <i class="ti ti-book"></i>
                Dukungan Sosial
            </div>

            <h1 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                Ibu Tidak Sendiri.
            </h1>

            <p class="text-slate-500 leading-relaxed">
                Dukungan dari pasangan, keluarga, tenaga kesehatan, dan sesama ibu menyusui memiliki
                peran penting dalam meningkatkan kepercayaan diri serta keberhasilan pemberian ASI.
                Mari membangun lingkungan yang mendukung perjalanan menyusui yang sehat dan nyaman.
            </p>
        </div>

        <div class="px-8 py-8">
            <div class="bg-white border border-slate-200 rounded-2xl p-6 my-8 flex gap-5 items-start">
                <div class="w-12 h-12 rounded-xl bg-[var(--color-primary)] flex items-center justify-center shrink-0">
                    <i class="ti ti-book text-white text-xl"></i>
                </div>
                <div>
                    <h2 class="font-semibold text-slate-800 mb-1">Tujuan Modul</h2>
                    <p class="text-[14px] text-slate-500 leading-relaxed">
                        Memperkuat dukungan sosial bagi ibu hamil dan menyusui agar ibu merasa
                        didampingi, lebih percaya diri, serta memperoleh bantuan yang dibutuhkan
                        selama perjalanan kehamilan dan menyusui.
                    </p>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-6 mt-8">
                <div class="bg-white border border-slate-200 rounded-3xl p-7">
                    <div class="w-14 h-14 rounded-2xl bg-pink-50 flex items-center justify-center mb-5">
                        <i class="ti ti-home-heart text-2xl text-pink-600"></i>
                    </div>

                    <h3 class="font-semibold text-lg text-slate-800 mb-3">
                        Edukasi untuk Suami dan Keluarga
                    </h3>

                    <p class="text-slate-500 leading-relaxed mb-5">
                        Berikan pemahaman kepada pasangan dan keluarga mengenai pentingnya dukungan
                        emosional dan praktis selama kehamilan serta masa menyusui.
                    </p>

                    <a href="#"
                        class="inline-flex items-center gap-2 text-[var(--color-primary)] font-medium hover:underline">
                        Pelajari lebih lanjut
                        <i class="ti ti-arrow-right"></i>
                    </a>
                </div>

                <div class="bg-white border border-slate-200 rounded-3xl p-7">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-5">
                        <i class="ti ti-message-heart text-2xl text-blue-600"></i>
                    </div>

                    <h3 class="font-semibold text-lg text-slate-800 mb-3">
                        Forum Diskusi Ibu Menyusui
                    </h3>

                    <p class="text-slate-500 leading-relaxed mb-5">
                        Berbagi pengalaman, saling memberikan semangat, dan memperoleh dukungan dari
                        sesama ibu yang sedang menjalani perjalanan menyusui.
                    </p>

                    <a href="#"
                        class="inline-flex items-center gap-2 text-[var(--color-primary)] font-medium hover:underline">
                        Bergabung sekarang
                        <i class="ti ti-arrow-right"></i>
                    </a>
                </div>

                <div class="bg-white border border-slate-200 rounded-3xl p-7">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center mb-5">
                        <i class="ti ti-stethoscope text-2xl text-emerald-600"></i>
                    </div>

                    <h3 class="font-semibold text-lg text-slate-800 mb-3">
                        Dukungan dari Tenaga Kesehatan
                    </h3>

                    <p class="text-slate-500 leading-relaxed mb-5">
                        Konselor laktasi dan tenaga kesehatan siap memberikan pendampingan serta
                        informasi yang terpercaya untuk membantu ibu mengatasi berbagai kendala.
                    </p>

                    <a href="{{ route('konseling_online') }}"
                        class="inline-flex items-center gap-2 text-[var(--color-primary)] font-medium hover:underline">
                        Konsultasi sekarang
                        <i class="ti ti-arrow-right"></i>
                    </a>
                </div>

                <div class="bg-white border border-slate-200 rounded-3xl p-7">
                    <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center mb-5">
                        <i class="ti ti-heart-handshake text-2xl text-amber-600"></i>
                    </div>

                    <h3 class="font-semibold text-lg text-slate-800 mb-3">
                        Pentingnya Dukungan Sosial
                    </h3>

                    <p class="text-slate-500 leading-relaxed mb-5">
                        Dukungan sosial yang baik dapat meningkatkan keberhasilan pemberian ASI,
                        mengurangi stres, serta membantu ibu merasa lebih percaya diri dan nyaman
                        selama menjalani peran sebagai seorang ibu.
                    </p>

                    <a href="#"
                        class="inline-flex items-center gap-2 text-[var(--color-primary)] font-medium hover:underline">
                        Pelajari manfaatnya
                        <i class="ti ti-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-3xl p-8 mt-8">
                <div class="flex items-start gap-4">
                    <i class="ti ti-quote text-4xl text-pink-300"></i>
                    <div>
                        <h3 class="font-semibold text-slate-800 mb-2">
                            Dukungan kecil dapat memberikan dampak yang besar.
                        </h3>

                        <p class="text-slate-500 leading-relaxed italic">
                            "Ibu yang merasa didukung oleh pasangan, keluarga, tenaga kesehatan,
                            dan lingkungan sekitarnya memiliki peluang lebih besar untuk berhasil
                            memberikan ASI secara optimal."
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </main>
</div>

@endsection