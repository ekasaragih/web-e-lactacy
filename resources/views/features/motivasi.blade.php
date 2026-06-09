@extends('layouts.app')
@section('content')

<div class="flex min-h-screen bg-slate-50">

    @include('layouts.sidebar')
    <main class="flex-1">
        <div class="bg-white border-b border-slate-200 px-8 py-8">
            <div
                class="inline-flex items-center gap-2 bg-pink-50 text-pink-700 border border-pink-200 rounded-full px-4 py-2 text-xs font-semibold mb-5">
                <i class="ti ti-heart-handshake"></i>
                Penguatan Motivasi
            </div>

            <h1 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                Motivasi & Self-Efficacy
            </h1>

            <p class="text-slate-500 leading-relaxed">
                Materi motivasi dan penguatan keyakinan diri yang membantu ibu tetap percaya
                pada kemampuan menyusui, membangun kebiasaan positif, serta mempertahankan
                komitmen pemberian ASI eksklusif melalui afirmasi, testimoni, dan target yang
                realistis.
            </p>
        </div>

        <div class="px-8 py-8">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('edukasi_laktasi') }}"
                    class="inline-flex items-center gap-2 text-[13px] font-medium text-slate-500 hover:text-slate-700 transition-colors">
                    <i class="ti ti-arrow-left text-[15px]"></i>
                    Edukasi Laktasi
                </a>
                <a href="{{ route('niat_target_menyusui') }}"
                    class="inline-flex items-center gap-2 text-[13px] font-semibold bg-[var(--color-primary)] text-white px-5 py-2.5 rounded-xl hover:bg-[var(--color-primary-dk)] transition-colors">
                    Lanjut: Niat & Target Menyusui
                    <i class="ti ti-arrow-right text-[15px]"></i>
                </a>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-8 flex gap-5 items-start">
                <div class="w-12 h-12 rounded-xl bg-pink-500 flex items-center justify-center shrink-0">
                    <i class="ti ti-heart-handshake text-white text-xl"></i>
                </div>
                <div>
                    <h2 class="font-semibold text-slate-800 mb-1">Tujuan Modul</h2>
                    <p class="text-[14px] text-slate-500 leading-relaxed">
                        Meningkatkan motivasi dan keyakinan diri <em>(self-efficacy)</em> ibu dalam menyusui —
                        melalui pesan motivasi, afirmasi positif, testimoni ibu berhasil, penguatan perilaku,
                        dan penetapan target menyusui yang realistis.
                    </p>
                </div>
            </div>

            {{-- Section 1: Afirmasi Harian --}}
            <section class="mb-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ti ti-sparkles text-[var(--color-primary)] text-[18px]"></i>
                    <h2 class="font-semibold text-[15px] text-slate-800">Afirmasi Positif Hari Ini</h2>
                </div>

                @php
                $afirmasi = [
                'Tubuh saya diciptakan untuk menyusui, dan saya mampu melakukannya.',
                'Setiap tetes ASI yang saya berikan adalah bukti cinta yang nyata.',
                'Saya tidak sendiri — ada dukungan dan bantuan yang selalu tersedia.',
                'Kesulitan yang saya hadapi hari ini membuat saya semakin kuat.',
                'Saya percaya pada kemampuan tubuh saya untuk memberikan yang terbaik bagi bayi saya.',
                ];
                @endphp

                <div class="grid gap-3">
                    @foreach($afirmasi as $i => $item)
                    <div
                        class="bg-white border border-slate-200 rounded-xl p-4 flex items-start gap-3 hover:border-[var(--color-primary)] transition-colors group cursor-pointer">
                        <div
                            class="w-7 h-7 rounded-full bg-emerald-50 border border-emerald-100 flex items-center justify-center shrink-0 mt-0.5">
                            <i class="ti ti-quote text-[12px] text-emerald-600"></i>
                        </div>
                        <p class="text-[13px] text-slate-700 leading-relaxed italic flex-1">{{ $item }}</p>
                        <button
                            class="shrink-0 opacity-0 group-hover:opacity-100 transition-opacity text-slate-300 hover:text-pink-500">
                            <i class="ti ti-heart text-[15px]"></i>
                        </button>
                    </div>
                    @endforeach
                </div>
            </section>

            {{-- Section 2: Pesan Motivasi --}}
            <section class="mb-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ti ti-message-heart text-[var(--color-primary)] text-[18px]"></i>
                    <h2 class="font-semibold text-[15px] text-slate-800">Pesan Motivasi untuk Anda</h2>
                </div>

                <div class="bg-[var(--color-primary)] rounded-2xl p-6 text-white mb-4">
                    <i class="ti ti-quote text-white/30 text-4xl mb-3 block"></i>
                    <blockquote class="font-['Lora'] text-[20px] font-bold leading-relaxed mb-4">
                        "Menyusui adalah perjalanan, bukan perlombaan. Setiap langkah kecil yang Anda ambil hari ini
                        adalah kemenangan yang sesungguhnya."
                    </blockquote>
                    <p class="text-white/70 text-[13px]">— Tim E-Lactacy</p>
                </div>

                @php
                $pesan = [
                ['icon' => 'ti-star', 'title' => 'Anda Tidak Harus Sempurna', 'body' => 'Tidak ada ibu yang sempurna.
                Yang penting adalah niat dan usaha terbaik Anda setiap harinya. Kesalahan adalah bagian dari proses
                belajar.'],
                ['icon' => 'ti-users', 'title' => 'Cari Dukungan, Jangan Sendirian', 'body' => 'Jangan ragu untuk
                meminta bantuan dari pasangan, keluarga, atau konselor laktasi. Menyusui adalah kerja tim.'],
                ['icon' => 'ti-clock', 'title' => 'Waktu Adalah Kunci', 'body' => 'Produksi ASI membutuhkan waktu untuk
                stabil, terutama di minggu-minggu awal. Bersabarlah dan teruslah mencoba.'],
                ];
                @endphp

                <div class="grid gap-3">
                    @foreach($pesan as $p)
                    <div class="bg-white border border-slate-200 rounded-xl p-5 flex gap-4">
                        <div class="w-9 h-9 rounded-xl bg-pink-50 flex items-center justify-center shrink-0">
                            <i class="ti {{ $p['icon'] }} text-pink-500 text-[16px]"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-[13px] text-slate-800 mb-1">{{ $p['title'] }}</h3>
                            <p class="text-[13px] text-slate-500 leading-relaxed">{{ $p['body'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            {{-- Section 3: Testimoni --}}
            <section class="mb-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ti ti-award text-[var(--color-primary)] text-[18px]"></i>
                    <h2 class="font-semibold text-[15px] text-slate-800">Testimoni Ibu Berhasil</h2>
                </div>

                @php
                $testimoni = [
                [
                'inisial' => 'SR',
                'nama' => 'Ibu S.R.',
                'usia' => '32 tahun · Ibu dari 2 anak',
                'color' => 'bg-violet-100 text-violet-700',
                'cerita' => '"Awalnya saya hampir menyerah karena puting lecet dan ASI terasa sedikit. Tapi setelah
                belajar teknik yang benar dan konsultasi dengan konselor, semua berubah. Putri saya kini 7 bulan dan
                masih menyusu!"',
                'durasi' => '7 bulan ASI eksklusif',
                ],
                [
                'inisial' => 'NA',
                'nama' => 'Ibu N.A.',
                'usia' => '28 tahun · Ibu baru',
                'color' => 'bg-emerald-100 text-emerald-700',
                'cerita' => '"Sebagai ibu bekerja, saya khawatir tidak bisa memberikan ASI eksklusif. Dengan tips
                manajemen laktasi dari aplikasi ini, saya berhasil menyimpan stok ASI yang cukup untuk bayi saya di
                rumah."',
                'durasi' => '6 bulan ASI eksklusif',
                ],
                [
                'inisial' => 'DM',
                'nama' => 'Ibu D.M.',
                'usia' => '35 tahun · Ibu dari 3 anak',
                'color' => 'bg-amber-100 text-amber-700',
                'cerita' => '"Dukungan suami adalah kunci keberhasilan saya. Suami saya juga ikut belajar dari modul
                Dukungan Sosial. Sekarang beliau yang mengingatkan saya minum air dan istirahat saat menyusui."',
                'durasi' => '6 bulan ASI eksklusif',
                ],
                ];
                @endphp

                <div class="space-y-4">
                    @foreach($testimoni as $t)
                    <div class="bg-white border border-slate-200 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <div
                                class="w-10 h-10 rounded-full {{ $t['color'] }} font-bold text-[13px] flex items-center justify-center shrink-0">
                                {{ $t['inisial'] }}
                            </div>
                            <div>
                                <p class="font-semibold text-[13px] text-slate-800">{{ $t['nama'] }}</p>
                                <p class="text-[11px] text-slate-400">{{ $t['usia'] }}</p>
                            </div>
                            <div class="ml-auto">
                                <span
                                    class="inline-flex items-center gap-1 text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 px-2.5 py-1 rounded-full">
                                    <i class="ti ti-circle-check text-[12px]"></i>
                                    {{ $t['durasi'] }}
                                </span>
                            </div>
                        </div>
                        <p class="text-[13px] text-slate-600 leading-relaxed italic">{{ $t['cerita'] }}</p>
                    </div>
                    @endforeach
                </div>
            </section>

            {{-- Section 4: Penguatan Perilaku --}}
            <section class="mb-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ti ti-bolt text-[var(--color-primary)] text-[18px]"></i>
                    <h2 class="font-semibold text-[15px] text-slate-800">Penguatan Perilaku (Reinforcement)</h2>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5">
                        Tandai hal-hal positif yang sudah Anda lakukan hari ini. Mengenali pencapaian kecil
                        sekalipun adalah kunci untuk mempertahankan motivasi jangka panjang.
                    </p>

                    @php
                    $checklist = [
                    'Menyusui bayi minimal 8 kali hari ini',
                    'Minum air putih minimal 8 gelas',
                    'Istirahat cukup (tidur saat bayi tidur)',
                    'Mempelajari satu materi edukasi laktasi',
                    'Berbagi cerita dengan sesama ibu menyusui',
                    'Meminta dukungan dari suami atau keluarga',
                    'Memerah dan menyimpan ASI dengan benar',
                    ];
                    @endphp

                    <div class="space-y-2.5" id="checklist-items">
                        @foreach($checklist as $ci => $item)
                        <label
                            class="flex items-center gap-3 p-3 rounded-xl hover:bg-slate-50 cursor-pointer group transition-colors">
                            <input type="checkbox" name="reinforcement[]" value="{{ $ci }}"
                                class="w-4 h-4 rounded border-slate-300 text-[var(--color-primary)] focus:ring-[var(--color-primary)] cursor-pointer">
                            <span
                                class="text-[13px] text-slate-700 group-has-[:checked]:text-slate-400 group-has-[:checked]:line-through transition-colors">{{
                                $item }}</span>
                            <i
                                class="ti ti-circle-check text-emerald-500 text-[15px] ml-auto opacity-0 group-has-[:checked]:opacity-100 transition-opacity"></i>
                        </label>
                        @endforeach
                    </div>

                    <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <p class="text-[12px] text-slate-400">
                            <span id="checked-count">0</span> dari {{ count($checklist) }} pencapaian hari ini
                        </p>
                        <button onclick="saveReinforcement()"
                            class="inline-flex items-center gap-2 text-[12px] font-semibold bg-[var(--color-primary)] text-white px-4 py-2 rounded-lg hover:bg-[var(--color-primary-dk)] transition-colors">
                            <i class="ti ti-device-floppy text-[13px]"></i>
                            Simpan Catatan
                        </button>
                    </div>
                </div>
            </section>

            {{-- Section 5: Penetapan Target --}}
            <section class="mb-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ti ti-target-arrow text-[var(--color-primary)] text-[18px]"></i>
                    <h2 class="font-semibold text-[15px] text-slate-800">Penetapan Target Menyusui</h2>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5">
                        Menetapkan target yang spesifik meningkatkan peluang keberhasilan. Tentukan target
                        menyusui Anda dan langkah konkret untuk mencapainya.
                    </p>

                    <form method="POST" action="" class="space-y-4">
                        @csrf

                        <div>
                            <label
                                class="block text-[12px] font-semibold text-slate-600 uppercase tracking-wide mb-1.5">
                                Target Durasi ASI Eksklusif
                            </label>
                            <div class="grid grid-cols-3 gap-2">
                                @foreach([
                                ['value' => '2', 'label' => '2 bulan'],
                                ['value' => '4', 'label' => '4 bulan'],
                                ['value' => '6', 'label' => '6 bulan (Direkomendasikan)']
                                ] as $target)

                                <label
                                    class="flex items-center gap-2 p-3 border border-slate-200 rounded-xl cursor-pointer hover:border-[var(--color-primary)] transition-colors has-[:checked]:border-[var(--color-primary)] has-[:checked]:bg-emerald-50">

                                    <input type="radio" name="target_durasi" value="{{ $target['value'] }}" {{
                                        $target['value']=='6' ? 'checked' : '' }}
                                        class="text-[var(--color-primary)] focus:ring-[var(--color-primary)]">

                                    <span class="text-[12px] font-medium text-slate-700">
                                        {{ $target['label'] }}
                                    </span>

                                </label>

                                @endforeach
                            </div>
                        </div>

                        <div>
                            <label
                                class="block text-[12px] font-semibold text-slate-600 uppercase tracking-wide mb-1.5">
                                Komitmen Saya
                            </label>
                            <textarea name="komitmen" rows="3"
                                placeholder="Tuliskan komitmen Anda untuk menyusui eksklusif..."
                                class="w-full text-[13px] border border-slate-200 rounded-xl px-4 py-3 text-slate-700 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] resize-none placeholder:text-slate-300">{{ old('komitmen') }}</textarea>
                        </div>

                        <div>
                            <label
                                class="block text-[12px] font-semibold text-slate-600 uppercase tracking-wide mb-1.5">
                                Checklist Kesiapan Menyusui
                            </label>
                            @php
                            $kesiapan = [
                            'Sudah membaca materi Edukasi Laktasi',
                            'Sudah berbicara dengan suami/keluarga tentang dukungan menyusui',
                            'Sudah mempersiapkan perlengkapan menyusui',
                            'Sudah mengetahui nomor kontak konselor laktasi',
                            'Sudah menyiapkan tempat menyusui yang nyaman',
                            ];
                            @endphp
                            <div class="space-y-2">
                                @foreach($kesiapan as $ki => $ks)
                                <label class="flex items-center gap-2.5 text-[13px] text-slate-700 cursor-pointer">
                                    <input type="checkbox" name="checklist_siapan[]" value="{{ $ki }}"
                                        class="w-4 h-4 rounded border-slate-300 text-[var(--color-primary)] focus:ring-[var(--color-primary)]">
                                    {{ $ks }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white text-[13px] font-semibold px-5 py-2.5 rounded-xl hover:bg-[var(--color-primary-dk)] transition-colors">
                                <i class="ti ti-circle-check text-[14px]"></i>
                                Simpan Target Menyusui
                            </button>
                        </div>
                    </form>
                </div>
            </section>

        </div>
        @include('layouts.footer')
    </main>

</div>

<script>
    // Hitung checklist yang dicentang
    const checkboxes = document.querySelectorAll('#checklist-items input[type="checkbox"]');
    const countEl = document.getElementById('checked-count');

    checkboxes.forEach(cb => {
        cb.addEventListener('change', () => {
            countEl.textContent = [...checkboxes].filter(c => c.checked).length;
        });
    });

    function saveReinforcement() {
        const checked = [...checkboxes].filter(c => c.checked).length;
        if (checked === 0) {
            alert('Pilih minimal satu pencapaian hari ini.');
            return;
        }
        // TODO: kirim ke server via fetch/axios
        alert(`Catatan ${checked} pencapaian berhasil disimpan!`);
    }
</script>


@endsection