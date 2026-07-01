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
    {{-- desktop navbar --}}
    <nav class="hidden lg:block bg-white shadow-sm border-b border-slate-200 sticky top-0 z-50">
        <div class="px-6 py-4 flex justify-between">
            <div class="flex items-center gap-2.5">
                <div
                    class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-100 to-cyan-50 border border-pink-200 flex items-center justify-center shadow-sm">
                    <i class="ti ti-heart text-pink-500 text-[16px] absolute"></i>
                    <i class="ti ti-droplet-filled text-cyan-500 text-[20px]"></i>
                </div>

                <div class="leading-tight">
                    <span class="block font-semibold text-[16px] text-slate-800">
                        E-Lactacy
                    </span>

                    <span class="block text-[10px] uppercase tracking-wider text-slate-400">
                        Edukasi Laktasi Digital
                    </span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                @auth
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <i class="ti ti-user"></i>
                    {{ Auth::user()->full_name }}
                </div>

                <form method="POST" action="{{ route('user.logout') }}">
                    @csrf
                    <button class="bg-red-50 border border-red-200 text-red-600 px-4 py-2 rounded-lg hover:bg-red-100">
                        Logout
                    </button>
                </form>
                @else
                <a href="{{ route('user.login') }}" class="border px-4 py-2 rounded-lg">
                    Masuk
                </a>

                <a href="{{ route('user.register') }}"
                    class="bg-[var(--color-primary)] text-white px-4 py-2 rounded-lg">
                    Daftar
                </a>
                @endauth
                <div class="w-px h-6 bg-slate-200"></div>

                <a href="{{ route('konseling_online') }}" class="flex items-center gap-2 border px-4 py-2 rounded-lg">
                    <i class="ti ti-message-circle"></i>
                    Konseling Online
                </a>
            </div>
        </div>
    </nav>

    {{-- mobile navbar --}}
    <nav class="lg:hidden sticky top-0 z-50 bg-white border-b border-slate-200">
        <div class="flex items-center justify-between px-5 py-4">
            <button id="openSidebar"
                class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center">
                <i class="ti ti-menu-2 text-xl"></i>
            </button>

            <div class="flex items-center gap-2">
                <div
                    class="w-9 h-9 rounded-full bg-gradient-to-br from-pink-100 to-cyan-50 border border-pink-200 flex items-center justify-center">
                    <i class="ti ti-heart text-pink-500 absolute text-[14px]"></i>
                    <i class="ti ti-droplet-filled text-cyan-500 text-[18px]"></i>
                </div>

                <span class="font-semibold">
                    E-Lactacy
                </span>
            </div>
            <div class="w-10"></div>
        </div>
    </nav>

    @yield('content')
</body>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sidebar = document.getElementById("mobileSidebar");
        const backdrop = document.getElementById("sidebarBackdrop");

        const openBtn = document.getElementById("openSidebar");
        const closeBtn = document.getElementById("closeSidebar");

        if (!sidebar) return;

        function openSidebar() {
            sidebar.classList.remove("-translate-x-full");
            backdrop?.classList.remove("hidden");
            document.body.classList.add("overflow-hidden");
        }

        function closeSidebar() {
            sidebar.classList.add("-translate-x-full");
            backdrop?.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        }

        openBtn?.addEventListener("click", openSidebar);
        closeBtn?.addEventListener("click", closeSidebar);
        backdrop?.addEventListener("click", closeSidebar);
    });
</script>

</html>