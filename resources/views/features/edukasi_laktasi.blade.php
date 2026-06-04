@extends('layouts.app')
@section('content')

<div class="flex bg-slate-50">
    @include('layouts.sidebar')

    <main class="flex-1">
        <div class="bg-white border-b border-slate-200 px-8 py-8">
            <div
                class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full px-4 py-2 text-xs font-semibold mb-5">
                <i class="ti ti-book"></i>
                Materi Edukasi
            </div>

            <h1 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                Edukasi Laktasi
            </h1>

            <p class="text-slate-500 leading-relaxed">
                Materi edukasi berbasis bukti ilmiah yang membantu ibu memahami ASI eksklusif,
                teknik menyusui, manajemen laktasi, hingga cara mengatasi berbagai tantangan
                selama proses menyusui.
            </p>
        </div>

        <div class="px-8 py-10">
            <div class="flex items-center justify-between mb-8">
                <a href=""
                    class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-slate-700 transition">
                    <i class="ti ti-arrow-left"></i>
                    Pre-Test
                </a>

                <a href="{{ route('motivasi') }}"
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-[var(--color-primary-dk)] transition">
                    Motivasi & Self-Efficacy
                    <i class="ti ti-arrow-right"></i>
                </a>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-8 flex gap-5 items-start">
                <div class="w-12 h-12 rounded-xl bg-[var(--color-primary)] flex items-center justify-center shrink-0">
                    <i class="ti ti-book text-white text-xl"></i>
                </div>
                <div>
                    <h2 class="font-semibold text-slate-800 mb-1">Tujuan Modul</h2>
                    <p class="text-[14px] text-slate-500 leading-relaxed">
                        Meningkatkan pengetahuan ibu tentang laktasi dan praktik menyusui yang benar —
                        mencakup ASI eksklusif, IMD, teknik menyusui, manajemen laktasi, hingga cara
                        mengatasi masalah dan menyimpan ASI dengan tepat.
                    </p>
                </div>
            </div>

            <div id="accordion-laktasi" data-accordion="open" class="space-y-4">

                @foreach($topics as $index => $topic)

                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
                    <h2 id="heading-{{ $index }}">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 text-left hover:bg-slate-50 transition"
                            data-accordion-target="#body-{{ $index }}" aria-expanded="true">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl {{ $topic['icon_class'] }} flex items-center justify-center">
                                    <i class="ti {{ $topic['icon'] }}"></i>
                                </div>

                                <div>
                                    <h3 class="font-semibold text-slate-800">
                                        {{ $topic['title'] }}
                                    </h3>

                                    <p class="text-sm text-slate-500">
                                        {{ $topic['desc'] }}
                                    </p>
                                </div>
                            </div>
                            <i data-accordion-icon class="ti ti-chevron-down"></i>
                        </button>
                    </h2>

                    <div id="body-{{ $index }}" class="" aria-labelledby="heading-{{ $index }}">
                        <div class="p-6 {{ $topic['bg_class'] }} border-t border-slate-100">
                            <div class="space-y-4">

                                @foreach($topic['content'] as $point)
                                <div class="flex gap-3">
                                    <div
                                        class="w-5 h-5 rounded-full {{ $topic['icon_class'] }} flex items-center justify-center mt-1 shrink-0">
                                        <i class="ti ti-check text-[10px]"></i>
                                    </div>

                                    <p class="text-sm text-slate-700 leading-relaxed">
                                        {{ $point }}
                                    </p>
                                </div>
                                @endforeach
                            </div>

                            @if($topic['video'])
                            <div class="mt-6 pt-5 border-t border-white">
                                <button
                                    class="inline-flex items-center gap-2 bg-white border border-slate-200 px-4 py-2 rounded-xl text-sm font-medium hover:bg-slate-50 transition">
                                    <i class="ti ti-player-play text-[var(--color-primary)]"></i>
                                    Tonton Video
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
        @include('layouts.footer')
    </main>
</div>

@endsection