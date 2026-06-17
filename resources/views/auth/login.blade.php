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
                <p class="text-[11px] font-bold uppercase tracking-widest text-white/60 mb-3">Selamat Datang Kembali</p>
                <h1 class="font-['Lora'] text-[32px] font-bold text-white leading-snug mb-4">
                    Lanjutkan<br>Perjalanan<br>Menyusui Anda
                </h1>
                <p class="text-[14px] text-white/70 leading-relaxed">
                    Masuk ke akun Anda untuk melanjutkan modul edukasi, memantau perkembangan, dan terhubung dengan
                    konselor laktasi.
                </p>
            </div>

            <div class="mb-10 bg-white/10 rounded-2xl p-5">
                <i class="ti ti-quote text-white/30 text-3xl block mb-2"></i>
                <p class="font-['Lora'] text-[16px] italic text-white/90 leading-relaxed">
                    "Setiap tetes ASI, sebuah langkah kasih sayang."
                </p>
                <p class="text-[12px] text-white/50 mt-2">— E-Lactacy</p>
            </div>

            <p class="text-[12px] text-white/40">&copy; {{ date('Y') }} E-Lactacy · Penelitian Edukasi Laktasi</p>
        </div>
    </div>

    {{-- form --}}
    <div class="flex-1 flex flex-col justify-center overflow-y-auto">
        <div class="lg:hidden flex items-center gap-3 px-6 pt-6 pb-4">
            <a href="{{ route('beranda') }}" class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-[9px] bg-[var(--color-primary)] flex items-center justify-center">
                    <i class="ti ti-droplet-half-2 text-white text-[15px]"></i>
                </div>
                <span class="font-semibold text-[15px] text-slate-800 tracking-tight">E-Lactacy</span>
            </a>
        </div>

        <div class="px-6 lg:px-14 py-8 max-w-md w-full mx-auto">

            <div class="mb-8">
                <h2 class="font-['Lora'] text-[28px] font-bold text-slate-800 mb-1">Masuk ke Akun</h2>
                <p class="text-[14px] text-slate-500">
                    Belum punya akun?
                    <a href="{{ route('user.register') }}"
                        class="text-[var(--color-primary)] font-semibold hover:underline">Daftar sekarang</a>
                </p>
            </div>

            {{-- Session Error --}}
            @if(session('error'))
            <div class="flex items-center gap-3 bg-red-50 border border-red-200 rounded-xl p-4 mb-5">
                <i class="ti ti-alert-circle text-red-500 text-[18px] shrink-0"></i>
                <p class="text-[13px] text-red-700">{{ session('error') }}</p>
            </div>
            @endif

            {{-- Validation Errors --}}
            @if($errors->any())
            <div class="flex items-start gap-3 bg-red-50 border border-red-200 rounded-xl p-4 mb-5">
                <i class="ti ti-alert-circle text-red-500 text-[18px] shrink-0 mt-0.5"></i>
                <ul class="space-y-1">
                    @foreach($errors->all() as $error)
                    <li class="text-[13px] text-red-700">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Success after register --}}
            @if(session('success'))
            <div class="flex items-center gap-3 bg-emerald-50 border border-emerald-200 rounded-xl p-4 mb-5">
                <i class="ti ti-circle-check text-emerald-500 text-[18px] shrink-0"></i>
                <p class="text-[13px] text-emerald-700">{{ session('success') }}</p>
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-[12px] font-semibold text-slate-600 mb-1.5">
                        Alamat Email
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        placeholder="contoh@email.com"
                        class="w-full text-[13px] border @error('email') border-red-300 bg-red-50 @else border-slate-200 bg-white @enderror rounded-xl px-4 py-3 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                    @error('email')
                    <p class="text-[12px] text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label class="text-[12px] font-semibold text-slate-600">Kata Sandi</label>
                        @if(Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-[12px] text-[var(--color-primary)] hover:underline font-medium">
                            Lupa kata sandi?
                        </a>
                        @endif
                    </div>
                    <div class="relative" x-data="{ show: false }">
                        <input :type="show ? 'text' : 'password'" name="password" required
                            placeholder="Masukkan kata sandi Anda"
                            class="w-full text-[13px] border @error('password') border-red-300 bg-red-50 @else border-slate-200 bg-white @enderror rounded-xl px-4 py-3 pr-11 text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-[var(--color-primary)] transition-all">
                        <button type="button" @click="show = !show"
                            class="absolute right-3.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 transition-colors">
                            <i class="ti text-[17px]" :class="show ? 'ti-eye-off' : 'ti-eye'"></i>
                        </button>
                    </div>
                    @error('password')
                    <p class="text-[12px] text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Remember me --}}
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2.5 cursor-pointer">
                        <input type="checkbox" name="remember"
                            class="w-4 h-4 rounded border-slate-300 text-[var(--color-primary)] focus:ring-[var(--color-primary)] cursor-pointer">
                        <span class="text-[13px] text-slate-600">Ingat saya</span>
                    </label>
                </div>

                {{-- Submit --}}
                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-[var(--color-primary)] hover:bg-[var(--color-primary-dk)] text-white font-semibold text-[14px] py-3 rounded-xl transition-colors shadow-sm">
                        Masuk ke Aplikasi
                    </button>
                </div>

            </form>

            <div class="flex items-center gap-3 my-6">
                <div class="flex-1 h-px bg-slate-200"></div>
                <span class="text-[12px] text-slate-400 font-medium">atau</span>
                <div class="flex-1 h-px bg-slate-200"></div>
            </div>

            <a href="{{ route('user.register') }}"
                class="flex items-center justify-center gap-2 w-full border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 font-medium text-[13px] py-3 rounded-xl transition-colors">
                <i class="ti ti-user-plus text-[16px] text-slate-400"></i>
                Buat Akun Baru
            </a>

            <p class="text-center text-[12px] text-slate-400 mt-6">
                Dengan masuk, Anda menyetujui
                <a href="#" class="text-slate-500 hover:underline">Kebijakan Privasi</a>
                kami.
            </p>

        </div>
    </div>

</div>