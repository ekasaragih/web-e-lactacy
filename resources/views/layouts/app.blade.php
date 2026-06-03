<!DOCTYPE html>
<html lang="en">

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

<body class="bg-slate-50">
    <nav class="bg-white shadow-sm border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between">

            <div class="flex items-center gap-2.5">
                <div
                    class="w-[40px] h-[40px] rounded-full bg-gradient-to-br from-pink-100 to-cyan-50 border border-pink-200 flex items-center justify-center shadow-sm">
                    <i class="ti ti-heart text-pink-500 text-[16px] absolute"></i>
                    <i class="ti ti-droplet-filled text-cyan-500 text-[20px]"></i>
                </div>
                <div class="leading-tight">
                    <span class="block font-semibold text-[16px] tracking-tight text-slate-800">E-Lactacy</span>
                    <span class="block text-[10px] text-slate-400 uppercase tracking-wider -mt-0.5">Edukasi
                        Laktasi Digital</span>
                </div>
            </div>

            <div class="flex items-center gap-2">
                {{-- nanti ini kalau udah login gantinya jadi logout --}}
                <a href=""
                    class="border border-slate-200 text-slate-700 text-[13px] font-medium px-4 py-1.5 rounded-lg hover:bg-slate-50 transition-colors">
                    Masuk
                </a>
                <a href=""
                    class="bg-[var(--color-primary)] text-white text-[13px] font-semibold px-4 py-1.5 rounded-lg hover:bg-[--color-primary-dk] transition-colors">
                    Daftar Sekarang
                </a>
            </div>

        </div>
    </nav>

    @yield('content')
</body>

</html>