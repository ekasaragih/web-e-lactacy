<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'E-Lactacy') — Aplikasi Edukasi Laktasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Lora:ital,wght@0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<div class="min-h-screen bg-slate-50 flex">
    <div class="hidden lg:flex flex-col w-[420px] shrink-0 bg-[var(--color-primary)] relative overflow-hidden">
        <div class="absolute -top-20 -left-20 w-72 h-72 rounded-full bg-white/5"></div>
        <div class="absolute bottom-20 -right-16 w-56 h-56 rounded-full bg-white/5"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 rounded-full bg-white/5">
        </div>

        <div class="relative z-10 flex flex-col h-full px-10 py-10">
            <a href="{{ route('beranda') }}" class="flex items-center gap-3 mb-auto">
                <div class="w-9 h-9 rounded-[10px] bg-white/20 flex items-center justify-center">
                    <i class="ti ti-heart text-white text-[17px]"></i>
                </div>
                <div class="leading-tight">
                    <span class="block font-semibold text-[16px] text-white tracking-tight">E-Lactacy</span>
                    <span class="block text-[10px] text-white/60 uppercase tracking-wider">Edukasi Laktasi
                        Digital</span>
                </div>
            </a>

            <div class="mb-auto mt-16">
                <p class="text-[11px] font-bold uppercase tracking-widest text-white/60 mb-3">Selamat Bergabung</p>
                <h1 class="font-['Lora'] text-[32px] font-bold text-white leading-snug mb-4">
                    Mulai Perjalanan<br>Menyusui Anda<br>Bersama Kami
                </h1>
                <p class="text-[14px] text-white/70 leading-relaxed">
                    Daftarkan diri Anda dan dapatkan akses ke 14 modul edukasi laktasi, konseling online, serta
                    pemantauan terstruktur — semuanya gratis.
                </p>
            </div>

            <div class="space-y-3 mb-10">
                @foreach([
                ['ti-book', 'Edukasi laktasi lengkap berbasis bukti ilmiah'],
                ['ti-message-circle', 'Konseling online dengan konselor bersertifikat'],
                ['ti-chart-line', 'Pemantauan perkembangan & reminder menyusui'],
                ['ti-heart-handshake', 'Motivasi & penguatan self-efficacy ibu'],
                ] as [$icon, $text])
                <div class="flex items-center gap-3">
                    <div class="w-7 h-7 rounded-lg bg-white/15 flex items-center justify-center shrink-0">
                        <i class="ti {{ $icon }} text-white text-[13px]"></i>
                    </div>
                    <p class="text-[13px] text-white/80">{{ $text }}</p>
                </div>
                @endforeach
            </div>

            <p class="text-[12px] text-white/40">&copy; {{ date('Y') }} E-Lactacy · Penelitian Edukasi Laktasi</p>
        </div>
    </div>

    {{-- form --}}
    <div class="flex-1 overflow-y-auto">

        {{-- mobile header --}}
        <div class="lg:hidden flex items-center gap-3 px-6 pt-6 pb-4">
            <a href="{{ route('welcome') }}" class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-[9px] bg-[var(--color-primary)] flex items-center justify-center">
                    <i class="ti ti-droplet-half-2 text-white text-[15px]"></i>
                </div>
                <span class="font-semibold text-[15px] text-slate-800 tracking-tight">E-Lactacy</span>
            </a>
        </div>

        <div class="px-6 lg:px-12 py-8 lg:py-10 max-w-2xl mx-auto">

            <div class="mb-8">
                <h2 class="font-['Lora'] text-[26px] font-bold text-slate-800 mb-1">Buat Akun Baru</h2>
                <p class="text-[14px] text-slate-500">
                    Sudah punya akun?
                    <a href="{{ route('user.login') }}"
                        class="text-[var(--color-primary)] font-semibold hover:underline">Masuk di sini</a>
                </p>
            </div>

            @if($errors->any())
            <div class="flex items-start gap-3 bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
                <i class="ti ti-alert-circle text-red-500 text-[18px] shrink-0 mt-0.5"></i>
                <ul class="space-y-1">
                    @foreach($errors->all() as $error)
                    <li class="text-[13px] text-red-700">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="" x-data="registerForm()" class="space-y-5">
                @csrf
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-3">Data Diri</p>
                    <div class="space-y-3">
                        {{-- full name --}}
                        <div>
                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                Nama Lengkap <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="name" value="{{ old('name') }}" required
                                placeholder="Masukkan nama lengkap Anda"
                                class="w-full text-[13px] border @error('name') border-red-300 bg-red-50 @else border-slate-200 bg-white @enderror rounded-xl px-4 py-2.5 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                            @error('name')
                            <p class="text-[12px] text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- dob ibu --}}
                        <div>
                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                Tanggal Lahir <span class="text-red-400">*</span>
                            </label>

                            {{-- date picker --}}
                            <input type="date" id="dob_date" name="dob" value="{{ old('dob') }}" min="1920-01-01"
                                max="2008-12-31"
                                class="w-full text-[13px] border @error('dob') border-red-300 bg-red-50 @else border-slate-200 bg-white @enderror rounded-xl px-4 py-2.5 text-slate-800 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">

                            {{-- manual input --}}
                            <input type="text" id="dob_manual" name="dob_manual" value="{{ old('dob_manual') }}"
                                placeholder="dd-mm-yyyy"
                                class="hidden mt-3 w-full text-[13px] border border-slate-200 bg-white rounded-xl px-4 py-2.5 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">

                            <button type="button" id="toggleDobInput"
                                class="mt-2 text-[12px] text-[var(--color-primary)] hover:underline font-medium">
                                Input Manual
                            </button>

                            <p id="dob_error" class="hidden text-[12px] text-red-500 mt-1">
                            </p>

                            @error('dob')
                            <p class="text-[12px] text-red-500 mt-1">
                                {{ $message }}
                            </p>
                            @enderror

                            @error('dob_manual')
                            <p class="text-[12px] text-red-500 mt-1">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        {{-- hpht date --}}
                        <div>
                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                HPHT (Hari Pertama Haid Terakhir)
                            </label>

                            <input type="date" name="hpht" value="{{ old('hpht') }}" x-model="hpht"
                                class="w-full text-[13px] border border-slate-200 bg-white rounded-xl px-4 py-2.5 text-slate-800 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">

                            <p class="text-[11px] text-slate-400 mt-1">
                                Kosongkan apabila tidak sedang hamil.
                            </p>
                        </div>

                        {{-- condition for hpht --}}
                        <div x-show="!hpht" class="mt-5">
                            <label class="block text-[12px] font-semibold text-slate-600 mb-2">
                                Status Saat Ini
                            </label>

                            <div class="grid grid-cols-2 gap-3">
                                {{-- Belum hamil --}}
                                <label
                                    class="relative flex items-center gap-3 border rounded-xl px-4 py-3 cursor-pointer transition-all"
                                    :class="status === 'belum_hamil'
                                ? 'border-[var(--color-primary)] bg-emerald-50'
                                : 'border-slate-200 bg-white hover:border-slate-300'">
                                    <input type="radio" name="status" value="belum_hamil" x-model="status"
                                        class="sr-only">

                                    <div class="w-4 h-4 rounded-full border-2 flex items-center justify-center shrink-0"
                                        :class="status === 'belum_hamil'
                                    ? 'border-[var(--color-primary)]'
                                    : 'border-slate-300'">
                                        <div class="w-2 h-2 rounded-full bg-[var(--color-primary)]" :class="status === 'belum_hamil'
                                        ? 'opacity-100'
                                        : 'opacity-0'">
                                        </div>
                                    </div>

                                    <div>
                                        <p class="text-[13px] font-semibold text-slate-800">
                                            Belum Hamil
                                        </p>

                                        <p class="text-[11px] text-slate-400">
                                            Sedang merencanakan kehamilan
                                        </p>
                                    </div>
                                </label>

                                {{-- Sudah melahirkan --}}
                                <label
                                    class="relative flex items-center gap-3 border rounded-xl px-4 py-3 cursor-pointer transition-all"
                                    :class="status === 'sudah_melahirkan'
                                ? 'border-[var(--color-primary)] bg-emerald-50'
                                : 'border-slate-200 bg-white hover:border-slate-300'">
                                    <input type="radio" name="status" value="sudah_melahirkan" x-model="status"
                                        class="sr-only">

                                    <div class="w-4 h-4 rounded-full border-2 flex items-center justify-center shrink-0"
                                        :class="status === 'sudah_melahirkan'
                                    ? 'border-[var(--color-primary)]'
                                    : 'border-slate-300'">
                                        <div class="w-2 h-2 rounded-full bg-[var(--color-primary)]" :class="status === 'sudah_melahirkan'
                                        ? 'opacity-100'
                                        : 'opacity-0'">
                                        </div>
                                    </div>

                                    <div>
                                        <p class="text-[13px] font-semibold text-slate-800">
                                            Sudah Melahirkan
                                        </p>

                                        <p class="text-[11px] text-slate-400">
                                            Sedang menyusui
                                        </p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        {{-- tanggal lahir bayi --}}
                        <div x-show="!hpht && status === 'sudah_melahirkan'" x-transition class="mt-5"
                            style="display:none">

                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                Tanggal Lahir Bayi
                            </label>

                            <input type="date" name="tanggal_lahir_bayi" value="{{ old('tanggal_lahir_bayi') }}"
                                class="w-full text-[13px] border border-slate-200 bg-white rounded-xl px-4 py-2.5 text-slate-800 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">

                            <p class="text-[11px] text-slate-400 mt-1">
                                Umur bayi akan dihitung otomatis.
                            </p>

                        </div>

                        <div x-show="sudahMelahirkan === false" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-2" style="display:none">
                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                Usia Kehamilan <span class="text-red-400">*</span>
                            </label>
                            <div class="relative">
                                <input type="number" name="usia_kehamilan" value="{{ old('usia_kehamilan') }}" min="1"
                                    max="42" placeholder="Misalnya: 28" :required="sudahMelahirkan === false"
                                    class="w-full text-[13px] border border-slate-200 bg-white rounded-xl px-4 py-2.5 pr-16 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                                <span
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-[12px] text-slate-400 font-medium">minggu</span>
                            </div>
                            <p class="text-[11px] text-slate-400 mt-1">Rentang 1–42 minggu</p>
                        </div>

                        <div x-show="sudahMelahirkan === true" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-2" style="display:none">
                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                Usia Bayi <span class="text-red-400">*</span>
                            </label>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="relative">
                                    <input type="number" name="usia_bayi_bulan" value="{{ old('usia_bayi_bulan') }}"
                                        min="0" max="24" placeholder="0" :required="sudahMelahirkan === true"
                                        class="w-full text-[13px] border border-slate-200 bg-white rounded-xl px-4 py-2.5 pr-14 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                                    <span
                                        class="absolute right-4 top-1/2 -translate-y-1/2 text-[12px] text-slate-400 font-medium">bulan</span>
                                </div>
                                <div class="relative">
                                    <input type="number" name="usia_bayi_hari" value="{{ old('usia_bayi_hari') }}"
                                        min="0" max="30" placeholder="0"
                                        class="w-full text-[13px] border border-slate-200 bg-white rounded-xl px-4 py-2.5 pr-10 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                                    <span
                                        class="absolute right-4 top-1/2 -translate-y-1/2 text-[12px] text-slate-400 font-medium">hari</span>
                                </div>
                            </div>
                            <p class="text-[11px] text-slate-400 mt-1">Isi usia bayi saat ini</p>
                        </div>

                    </div>
                </div>

                <div class="pt-2">
                    <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-3">Kontak & Akun</p>
                    <div class="space-y-3">

                        <div>
                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                No. Handphone (WhatsApp) <span class="text-red-400">*</span>
                            </label>
                            <div class="flex">
                                <div
                                    class="flex items-center gap-1.5 bg-slate-100 border border-r-0 border-slate-200 rounded-l-xl px-3 shrink-0">
                                    <span class="text-[13px] text-slate-500 font-medium">🇮🇩</span>
                                    <span class="text-[13px] text-slate-500 font-medium">+62</span>
                                </div>
                                <input type="tel" name="no_hp" value="{{ old('no_hp') }}" required
                                    placeholder="812xxxxxxxx"
                                    class="flex-1 text-[13px] border @error('no_hp') border-red-300 bg-red-50 @else border-slate-200 bg-white @enderror rounded-r-xl px-4 py-2.5 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                            </div>
                            <p class="text-[11px] text-slate-400 mt-1">Nomor ini akan digunakan untuk komunikasi terkait
                                penelitian dan konsultasi</p>
                            @error('no_hp')
                            <p class="text-[12px] text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                Alamat Email <span class="text-red-400">*</span>
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                placeholder="contoh@email.com"
                                class="w-full text-[13px] border @error('email') border-red-300 bg-red-50 @else border-slate-200 bg-white @enderror rounded-xl px-4 py-2.5 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                            @error('email')
                            <p class="text-[12px] text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                Kata Sandi <span class="text-red-400">*</span>
                            </label>
                            <div class="relative" x-data="{ show: false }">
                                <input :type="show ? 'text' : 'password'" name="password" required
                                    placeholder="Minimal 8 karakter"
                                    class="w-full text-[13px] border @error('password') border-red-300 bg-red-50 @else border-slate-200 bg-white @enderror rounded-xl px-4 py-2.5 pr-11 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                                <button type="button" @click="show = !show"
                                    class="absolute right-3.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 transition-colors">
                                    <i class="ti text-[17px]" :class="show ? 'ti-eye-off' : 'ti-eye'"></i>
                                </button>
                            </div>
                            @error('password')
                            <p class="text-[12px] text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                                Konfirmasi Kata Sandi <span class="text-red-400">*</span>
                            </label>
                            <div class="relative" x-data="{ show: false }">
                                <input :type="show ? 'text' : 'password'" name="password_confirmation" required
                                    placeholder="Ulangi kata sandi Anda"
                                    class="w-full text-[13px] border border-slate-200 bg-white rounded-xl px-4 py-2.5 pr-11 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                                <button type="button" @click="show = !show"
                                    class="absolute right-3.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 transition-colors">
                                    <i class="ti text-[17px]" :class="show ? 'ti-eye-off' : 'ti-eye'"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="pt-2">
                    <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-3">Persetujuan</p>

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 space-y-4">

                        <div class="text-[13px] text-slate-600 leading-relaxed">
                            <p class="font-semibold text-slate-800 mb-1.5">Informasi Penelitian</p>
                            <p>Anda diundang untuk berpartisipasi dalam penelitian mengenai efektivitas aplikasi edukasi
                                laktasi digital. Data yang Anda berikan akan digunakan <strong>hanya untuk keperluan
                                    penelitian</strong> dan dijaga kerahasiaannya.</p>
                        </div>

                        <div class="border-t border-slate-200 pt-4 space-y-3">

                            <label class="flex items-start gap-3 cursor-pointer group">
                                <input type="checkbox" name="persetujuan_penelitian" value="1" required
                                    class="mt-0.5 w-4 h-4 rounded border-slate-300 text-[var(--color-primary)] focus:ring-[var(--color-primary)] cursor-pointer shrink-0">
                                <span class="text-[13px] text-slate-700 leading-relaxed group-hover:text-slate-800">
                                    <strong>Saya bersedia berpartisipasi</strong> dalam penelitian ini dan memahami
                                    bahwa partisipasi bersifat sukarela. Saya dapat mengundurkan diri kapan saja tanpa
                                    konsekuensi apapun.
                                </span>
                            </label>

                            <label class="flex items-start gap-3 cursor-pointer group">
                                <input type="checkbox" name="persetujuan_data" value="1" required
                                    class="mt-0.5 w-4 h-4 rounded border-slate-300 text-[var(--color-primary)] focus:ring-[var(--color-primary)] cursor-pointer shrink-0">
                                <span class="text-[13px] text-slate-700 leading-relaxed group-hover:text-slate-800">
                                    <strong>Saya menyetujui penggunaan data</strong> yang saya isi untuk dianalisis
                                    sebagai bagian dari penelitian ini, dalam kondisi anonim dan terjaga kerahasiaannya.
                                </span>
                            </label>

                        </div>
                    </div>
                    @error('persetujuan_penelitian')
                    <p class="text-[12px] text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <div class="pt-2 pb-4">
                    <button type="submit"
                        class="w-full bg-[var(--color-primary)] hover:bg-[var(--color-primary-dk)] text-white font-semibold text-[14px] py-3 rounded-xl transition-colors shadow-sm">
                        Daftar & Mulai Program
                    </button>
                    <p class="text-center text-[12px] text-slate-400 mt-4">
                        Sudah punya akun?
                        <a href="{{ route('login') }}"
                            class="text-[var(--color-primary)] font-semibold hover:underline">Masuk di sini</a>
                    </p>
                </div>

            </form>
        </div>
    </div>

</div>

<script>
    function registerForm() {
        return {
            hpht: '',
            status: ''
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let dateInput = document.getElementById("dob_date");
        let manualInput = document.getElementById("dob_manual");
        let toggleButton = document.getElementById("toggleDobInput");
        let errorText = document.getElementById("dob_error");

        const maxYear = 2008;
        const minYear = 1920;

        toggleButton.addEventListener("click", function () {
            if (dateInput.classList.contains("hidden")) {
                dateInput.classList.remove("hidden");
                manualInput.classList.add("hidden");

                manualInput.removeAttribute("required");
                dateInput.setAttribute("required", "true");

                toggleButton.textContent = "Input Manual";
            } else {
                dateInput.classList.add("hidden");
                manualInput.classList.remove("hidden");

                dateInput.removeAttribute("required");
                manualInput.setAttribute("required", "true");

                toggleButton.textContent = "Gunakan Kalender";
            }

            errorText.classList.add("hidden");
        });

        manualInput.addEventListener("input", function () {
            let value = this.value.replace(/\D/g, "");

            if (value.length >= 2)
                value = value.slice(0,2) + "-" + value.slice(2);

            if (value.length >= 5)
                value = value.slice(0,5) + "-" + value.slice(5,9);

            this.value = value;

            validateManualDate(value);
        });


        function validateManualDate(value){
            let parts = value.split("-");

            if(parts.length !== 3)
                return;

            let day = parseInt(parts[0]);
            let month = parseInt(parts[1]);
            let year = parseInt(parts[2]);

            if(day < 1 || day > 31){
                showError("Tanggal tidak valid (1-31)");
            }
            else if(month < 1 || month > 12){
                showError("Bulan tidak valid (1-12)");
            }
            else if(year < minYear || year > maxYear){
                showError("Tahun lahir harus antara 1920 - 2008");
            }
            else{
                hideError();
            }

        }

        function showError(message){
            errorText.textContent = message;
            errorText.classList.remove("hidden");

        }

        function hideError(){
            errorText.classList.add("hidden");
        }
    });
</script>