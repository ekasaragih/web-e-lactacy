@extends('layouts.app')
@section('content')

<div class="bg-white">
    <section class="max-w-5xl mx-auto px-6 py-20 text-center border-b border-slate-200">
        <div
            class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full px-4 py-2 text-xs font-semibold mb-6">
            <i class="ti ti-heart"></i>
            Untuk Ibu Menyusui Indonesia
        </div>

        <h1 class="font-['Lora'] text-[48px] font-bold leading-tight text-slate-800 mb-5">
            Pendamping <em class="italic text-[var(--color-primary)]">Menyusui</em><br>
            yang Selalu Ada untuk Anda
        </h1>

        <p class="max-w-xl mx-auto text-slate-500 leading-relaxed text-[16px] mb-4">
            Aplikasi edukasi laktasi digital yang membantu ibu memahami,
            mempersiapkan, dan berhasil menyusui secara eksklusif selama
            6 bulan pertama.
        </p>

        <p class="text-[var(--color-primary)] font-semibold mb-10">
            "Setiap tetes ASI, sebuah langkah kasih sayang."
        </p>

        <div class="flex flex-wrap justify-center gap-3">
            <a href="{{ route('dashboard') }}"
                class="inline-flex items-center gap-2 bg-[var(--color-primary)] hover:bg-[var(--color-primary-dk)] text-white font-semibold px-7 py-3 rounded-xl transition">
                <i class="ti ti-rocket"></i>
                Mulai Sekarang
            </a>

            <a href="#tentang"
                class="inline-flex items-center gap-2 border border-slate-300 text-slate-700 hover:bg-slate-50 font-medium px-7 py-3 rounded-xl transition">
                <i class="ti ti-info-circle"></i>
                Pelajari Lebih Lanjut
            </a>
        </div>
    </section>

    <section id="tentang" class="max-w-5xl mx-auto px-6 py-20 border-b border-slate-200">
        <p class="text-xs font-bold uppercase tracking-[0.15em] text-[var(--color-primary)] mb-2">
            Tujuan Aplikasi
        </p>

        <h2 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
            Apa itu E-Lactacy?
        </h2>

        <p class="text-slate-500 leading-relaxed max-w-3xl">
            E-Lactacy adalah aplikasi edukasi laktasi berbasis bukti ilmiah yang
            dirancang untuk mendampingi ibu hamil dan menyusui. Melalui 14 modul
            terstruktur, ibu mendapatkan pengetahuan, motivasi, dan dukungan
            yang dibutuhkan untuk keberhasilan ASI eksklusif.
        </p>

        <div class="grid md:grid-cols-3 gap-5 mt-10">

            <div class="bg-slate-50 rounded-2xl p-6">
                <div
                    class="w-11 h-11 rounded-xl bg-white border border-slate-200 flex items-center justify-center mb-4">
                    <i class="ti ti-book text-xl text-[var(--color-primary)]"></i>
                </div>

                <h3 class="font-semibold mb-2">
                    Edukasi Terstruktur
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Materi laktasi lengkap dalam format teks, video,
                    dan infografis yang mudah dipahami.
                </p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6">
                <div
                    class="w-11 h-11 rounded-xl bg-white border border-slate-200 flex items-center justify-center mb-4">
                    <i class="ti ti-heart text-xl text-[var(--color-primary)]"></i>
                </div>

                <h3 class="font-semibold mb-2">
                    Motivasi & Self-Efficacy
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Perkuat kepercayaan diri ibu dengan testimoni nyata
                    dan pesan motivasi harian.
                </p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6">
                <div
                    class="w-11 h-11 rounded-xl bg-white border border-slate-200 flex items-center justify-center mb-4">
                    <i class="ti ti-chart-line text-xl text-[var(--color-primary)]"></i>
                </div>

                <h3 class="font-semibold mb-2">
                    Pemantauan Kemajuan
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Lacak perkembangan menyusui, target, dan pencapaian
                    ASI eksklusif.
                </p>
            </div>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-20 border-b border-slate-200">
        <div class="text-center mb-12">
            <p class="text-xs font-bold uppercase tracking-[0.15em] text-[var(--color-primary)] mb-2">
                Fitur Utama
            </p>

            <h2 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                Semua yang Anda Butuhkan dalam Satu Aplikasi
            </h2>

            <p class="text-slate-500 max-w-2xl mx-auto leading-relaxed">
                E-Lactacy menyediakan berbagai fitur edukasi, pendampingan, dan evaluasi
                yang dirancang untuk membantu ibu menjalani proses menyusui dengan lebih
                percaya diri, nyaman, dan terarah.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-md transition-all">
                <i class="ti ti-book text-3xl text-[var(--color-primary)]"></i>

                <h3 class="font-semibold text-lg text-slate-800 mt-4 mb-2">
                    Edukasi Laktasi
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Materi lengkap mengenai IMD, ASI Eksklusif, teknik menyusui,
                    posisi pelekatan, penyimpanan ASI, hingga solusi berbagai
                    kendala menyusui sehari-hari.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-md transition-all">
                <i class="ti ti-heart-handshake text-3xl text-[var(--color-primary)]"></i>

                <h3 class="font-semibold text-lg text-slate-800 mt-4 mb-2">
                    Motivasi
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Afirmasi positif, pesan inspiratif, dan materi peningkatan
                    self-efficacy untuk membantu ibu tetap percaya diri selama
                    perjalanan menyusui.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-md transition-all">
                <i class="ti ti-users text-3xl text-[var(--color-primary)]"></i>

                <h3 class="font-semibold text-lg text-slate-800 mt-4 mb-2">
                    Dukungan Sosial
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Edukasi untuk suami dan keluarga serta ruang diskusi yang
                    memungkinkan ibu saling berbagi pengalaman dan dukungan.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-md transition-all">
                <i class="ti ti-message-circle text-3xl text-[var(--color-primary)]"></i>

                <h3 class="font-semibold text-lg text-slate-800 mt-4 mb-2">
                    Konseling Online
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Konsultasi langsung bersama konselor laktasi untuk membantu
                    mengatasi berbagai permasalahan menyusui secara cepat dan tepat.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-md transition-all">
                <i class="ti ti-video text-3xl text-[var(--color-primary)]"></i>

                <h3 class="font-semibold text-lg text-slate-800 mt-4 mb-2">
                    Keterampilan Menyusui
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Video demonstrasi dan simulasi praktik menyusui yang membantu
                    ibu memahami langkah-langkah secara visual dan mudah diikuti.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-md transition-all">
                <i class="ti ti-chart-line text-3xl text-[var(--color-primary)]"></i>

                <h3 class="font-semibold text-lg text-slate-800 mt-4 mb-2">
                    Monitoring
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Pemantauan perkembangan menyusui melalui reminder otomatis,
                    pencatatan aktivitas, dan pelacakan target ASI eksklusif.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-md transition-all">
                <i class="ti ti-clipboard-check text-3xl text-[var(--color-primary)]"></i>

                <h3 class="font-semibold text-lg text-slate-800 mt-4 mb-2">
                    Evaluasi
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Fitur pre-test dan post-test yang membantu mengukur peningkatan
                    pengetahuan serta kesiapan ibu dalam memberikan ASI eksklusif.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-md transition-all">
                <i class="ti ti-award text-3xl text-[var(--color-primary)]"></i>

                <h3 class="font-semibold text-lg text-slate-800 mt-4 mb-2">
                    Outcome
                </h3>

                <p class="text-sm text-slate-500 leading-relaxed">
                    Evaluasi keberhasilan program dan pencapaian target menyusui
                    eksklusif berdasarkan perkembangan dan hasil yang diperoleh.
                </p>
            </div>
        </div>
    </section>


    <section class="max-w-5xl mx-auto px-6 py-20 border-b border-slate-200">

        <p class="text-xs font-bold uppercase tracking-[0.15em] text-[var(--color-primary)] mb-2">
            Manfaat Aplikasi
        </p>

        <h2 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
            Apa yang Akan Anda Dapatkan?
        </h2>

        <p class="text-slate-500 mb-10">
            E-Lactacy dirancang untuk memberikan dampak nyata dalam perjalanan menyusui Anda.
        </p>

        <div class="space-y-6">

            @foreach([
            'Pengetahuan mendalam tentang laktasi.',
            'Dukungan sosial yang kuat.',
            'Akses konseling kapan saja.',
            'Pengingat & pemantauan terstruktur.',
            'Evaluasi berbasis data.'
            ] as $index => $item)

            <div class="flex gap-4">

                <div
                    class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 text-sm font-bold flex items-center justify-center shrink-0">
                    {{ $index+1 }}
                </div>

                <p class="text-slate-700 leading-relaxed">
                    {{ $item }}
                </p>

            </div>

            @endforeach

        </div>

    </section>


    <section class="max-w-5xl mx-auto px-6 py-20 border-b border-slate-200">

        <div class="grid lg:grid-cols-2 gap-10">

            <div>

                <p class="text-xs font-bold uppercase tracking-[0.15em] text-[var(--color-primary)] mb-2">
                    Konseling Online
                </p>

                <h2 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                    Konselor Laktasi Siap Membantu
                </h2>

                <p class="text-slate-500 leading-relaxed mb-8">
                    Tidak perlu khawatir sendirian. E-Lactacy menyediakan fitur
                    konseling online langsung dengan konselor laktasi bersertifikat.
                </p>

                <div class="space-y-3 mb-8">

                    <div><i class="ti ti-check text-emerald-600"></i> Chat langsung dengan konselor bersertifikat</div>
                    <div><i class="ti ti-check text-emerald-600"></i> Jadwal konsultasi yang fleksibel</div>
                    <div><i class="ti ti-check text-emerald-600"></i> Rekam jejak konsultasi tersimpan aman</div>
                    <div><i class="ti ti-check text-emerald-600"></i> FAQ dan panduan menyusui terlengkap</div>

                </div>

                <a href="#"
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-6 py-3 rounded-xl font-semibold">
                    Mulai Konseling
                </a>

            </div>

            <div class="bg-slate-50 rounded-3xl border border-slate-200 p-6">

                <div class="flex items-center gap-3 mb-5">

                    <div
                        class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">
                        DW
                    </div>

                    <div>
                        <h4 class="font-semibold">drg. Dewi Wulandari, IBCLC</h4>
                        <p class="text-xs text-slate-500">
                            Konselor Laktasi · Online
                        </p>
                    </div>

                </div>

                <div class="space-y-4 text-sm">

                    <div class="bg-white border border-slate-200 rounded-xl p-3">
                        Selamat siang, Bu. Ada yang bisa saya bantu hari ini?
                    </div>

                    <div class="bg-[var(--color-primary)] text-white rounded-xl p-3 ml-auto max-w-xs">
                        Dok, bayi saya 2 minggu. ASI saya terasa sedikit,
                        apakah normal?
                    </div>

                    <div class="bg-white border border-slate-200 rounded-xl p-3">
                        Tenang, Bu. Ini sangat umum di awal...
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="max-w-5xl mx-auto px-6 py-20 border-b border-slate-200">
        <p class="text-xs font-bold uppercase tracking-[0.15em] text-[var(--color-primary)] mb-2">
            Keamanan Data
        </p>

        <h2 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
            Data Anda Aman Bersama Kami
        </h2>

        <p class="text-slate-500 mb-10">
            Kami berkomitmen menjaga privasi dan keamanan informasi pribadi Anda.
        </p>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="border rounded-2xl p-6">
                <h3 class="font-semibold mb-2">Enkripsi Data</h3>
                <p class="text-sm text-slate-500">
                    Semua data pribadi dienkripsi dan tidak dapat diakses pihak ketiga. => not sure bakalan dienkripsi
                    aowkaokkw
                </p>
            </div>

            <div class="border rounded-2xl p-6">
                <h3 class="font-semibold mb-2">Anonim & Rahasia</h3>
                <p class="text-sm text-slate-500">
                    Identitas Anda dilindungi dan digunakan untuk penelitian.
                </p>
            </div>

            <div class="border rounded-2xl p-6">
                <h3 class="font-semibold mb-2">Persetujuan Penuh</h3>
                <p class="text-sm text-slate-500">
                    Anda memiliki kendali penuh atas data yang dibagikan.
                </p>
            </div>
        </div>
    </section> --}}


    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="bg-[var(--color-primary)] rounded-3xl text-center px-10 py-14">
            <h2 class="font-['Lora'] text-4xl font-bold text-white mb-4">
                Siap Memulai Perjalanan Menyusui?
            </h2>

            <p class="text-white/80 max-w-2xl mx-auto mb-8">
                Daftar sekarang dan akses seluruh fitur E-Lactacy secara gratis.
                Bersama, kita wujudkan ASI eksklusif untuk buah hati Anda.
            </p>

            <a href="#"
                class="inline-flex items-center gap-2 bg-white text-[var(--color-primary)] font-semibold px-7 py-3 rounded-xl">
                Daftar Sekarang
                <i class="ti ti-arrow-right"></i>
            </a>
        </div>
    </section>
</div>

@include('layouts.footer')
@endsection