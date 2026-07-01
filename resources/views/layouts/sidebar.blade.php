{{-- backdrop --}}
<div id="sidebarBackdrop" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden">
</div>


{{-- mobile sidebar --}}
<aside id="mobileSidebar" class="fixed top-0 left-0 z-50 w-72 h-screen bg-white border-r border-slate-200
    -translate-x-full transition-transform duration-300 ease-in-out
    lg:hidden flex flex-col">
    <div class="p-6 border-b border-slate-200 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-11 h-11 rounded-xl bg-[var(--color-primary)] flex items-center justify-center text-white">
                <i class="ti ti-heart text-xl"></i>
            </div>

            <div>
                <h1 class="font-bold text-slate-800">
                    E-Lactacy
                </h1>

                <p class="text-xs text-slate-500">
                    Edukasi Laktasi Digital
                </p>
            </div>
        </div>

        <button id="closeSidebar" class="w-9 h-9 rounded-xl hover:bg-slate-100 flex items-center justify-center">
            <i class="ti ti-x text-lg"></i>
        </button>
    </div>

    <nav class="flex-1 overflow-y-auto px-4 py-4 space-y-1">
        @include('layouts.sidebar_menu')
    </nav>

    <div class="mt-auto border-t border-slate-200 p-4">
        @auth
        <div class="mb-4">
            <p class="text-xs text-slate-400">
                Login sebagai
            </p>

            <p class="font-semibold text-slate-800">
                {{ Auth::user()->full_name }}
            </p>
        </div>

        <a href="{{ route('konseling_online') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
            <i class="ti ti-message-circle"></i>
            Konseling Online
        </a>

        <form method="POST" action="{{ route('user.logout') }}">
            @csrf
            <button
                class="w-full mt-2 flex items-center gap-3 px-4 py-3 rounded-xl text-red-600 hover:bg-red-50 transition">
                <i class="ti ti-logout"></i>
                Logout
            </button>
        </form>
        @endauth
    </div>
</aside>


{{-- desktop sidebar --}}
<aside class="hidden lg:flex w-72 bg-white border-r border-slate-200 sticky top-0 h-screen flex-col">
    <div class="p-6 border-b border-slate-200">
        <div class="flex items-center gap-3">
            <div class="w-11 h-11 rounded-xl bg-[var(--color-primary)] flex items-center justify-center text-white">
                <i class="ti ti-heart text-xl"></i>
            </div>

            <div>
                <h1 class="font-bold text-slate-800">
                    E-Lactacy
                </h1>

                <p class="text-xs text-slate-500">
                    Edukasi Laktasi Digital
                </p>
            </div>
        </div>
    </div>

    <nav class="flex-1 overflow-y-auto px-4 py-4 space-y-1">
        @include('layouts.sidebar_menu')
    </nav>

</aside>