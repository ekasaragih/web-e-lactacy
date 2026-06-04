<div x-data="{ open:false }">
    <div class="lg:hidden sticky top-0 z-50 bg-white border-b border-slate-200">

        {{-- mobile view --}}
        <div class="flex items-center justify-between px-5 py-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-[var(--color-primary)] flex items-center justify-center text-white">
                    <i class="ti ti-heart"></i>
                </div>

                <div>
                    <h1 class="font-bold text-slate-800">
                        E-Lactacy
                    </h1>

                    <p class="text-[11px] text-slate-500">
                        Edukasi Laktasi Digital
                    </p>
                </div>
            </div>

            <button @click="open = !open"
                class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center">
                <i class="ti" :class="open ? 'ti-x' : 'ti-menu-2'"></i>
            </button>
        </div>

        <div x-show="open" x-transition class="border-t border-slate-200 bg-white">
            <nav class="p-3 space-y-1">
                @include('layouts.sidebar_menu')
            </nav>
        </div>
    </div>

    {{-- desktop view --}}
    <aside
        class="hidden lg:flex w-72 bg-white border-r border-slate-200 sticky top-0 h-screen overflow-y-auto shrink-0 flex-col">
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

        <nav class="px-4 py-4 space-y-1">
            @include('layouts.sidebar_menu')
        </nav>
    </aside>
</div>