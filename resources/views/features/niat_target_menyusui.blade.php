@extends('layouts.app')
@section('content')

<div class="flex bg-slate-50">
    @include('layouts.sidebar')

    <main class="flex-1">

        {{-- Header --}}
        <div class="bg-white border-b border-slate-200 px-8 py-8">
            <div
                class="inline-flex items-center gap-2 bg-pink-50 text-pink-700 border border-pink-200 rounded-full px-4 py-2 text-xs font-semibold mb-5">
                <i class="ti ti-target-arrow"></i>
                Komitmen Menyusui
            </div>

            <h1 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                Niat & Target Menyusui
            </h1>

            <p class="text-slate-500 leading-relaxed">
                Membantu ibu membentuk niat, komitmen, dan rencana nyata untuk
                memberikan ASI eksklusif secara optimal melalui target yang jelas
                dan kesiapan yang terukur.
            </p>
        </div>

        <div class="px-8 py-8">

            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('motivasi') }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-slate-700 transition">
                    <i class="ti ti-arrow-left"></i>
                    Motivasi & Self-Efficacy
                </a>

                <a href=""
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-[var(--color-primary-dk)] transition">
                    Konseling Online
                    <i class="ti ti-arrow-right"></i>
                </a>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-8 flex gap-5 items-start">
                <div class="w-12 h-12 rounded-xl bg-[var(--color-primary)] flex items-center justify-center shrink-0">
                    <i class="ti ti-heart-handshake text-white text-xl"></i>
                </div>

                <div>
                    <h2 class="font-semibold text-slate-800 mb-1">
                        Tujuan Modul
                    </h2>

                    <p class="text-sm text-slate-500 leading-relaxed">
                        Membentuk niat dan komitmen ibu untuk menyusui secara
                        eksklusif melalui penetapan target, kesiapan diri,
                        serta perencanaan yang realistis.
                    </p>
                </div>
            </div>

            <form>
                <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">
                    <div class="flex items-center gap-2 mb-5">
                        <i class="ti ti-target-arrow text-[var(--color-primary)]"></i>
                        <h2 class="font-semibold text-slate-800">
                            Penetapan Target ASI Eksklusif
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-3">
                        <label
                            class="border border-slate-200 rounded-xl p-4 cursor-pointer hover:border-[var(--color-primary)] transition has-[:checked]:border-[var(--color-primary)] has-[:checked]:bg-pink-50">
                            <input type="radio" name="target" class="hidden">
                            <p class="font-semibold text-slate-800">
                                2 Bulan
                            </p>
                            <p class="text-xs text-slate-500 mt-1">
                                Target awal
                            </p>
                        </label>

                        <label
                            class="border border-slate-200 rounded-xl p-4 cursor-pointer hover:border-[var(--color-primary)] transition has-[:checked]:border-[var(--color-primary)] has-[:checked]:bg-pink-50">
                            <input type="radio" name="target" class="hidden">
                            <p class="font-semibold text-slate-800">
                                4 Bulan
                            </p>
                            <p class="text-xs text-slate-500 mt-1">
                                Target menengah
                            </p>
                        </label>

                        <label
                            class="border border-slate-200 rounded-xl p-4 cursor-pointer hover:border-[var(--color-primary)] transition has-[:checked]:border-[var(--color-primary)] has-[:checked]:bg-pink-50">
                            <input type="radio" name="target" checked class="hidden">
                            <p class="font-semibold text-slate-800">
                                6 Bulan
                            </p>
                            <p class="text-xs text-emerald-600 mt-1">
                                Direkomendasikan WHO
                            </p>
                        </label>

                    </div>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">
                    <div class="flex items-center gap-2 mb-5">
                        <i class="ti ti-pencil-heart text-[var(--color-primary)]"></i>
                        <h2 class="font-semibold text-slate-800">
                            Komitmen Menyusui
                        </h2>
                    </div>

                    <textarea rows="5"
                        placeholder="Tuliskan komitmen Anda untuk memberikan ASI eksklusif kepada bayi..."
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]"></textarea>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6">
                    <div class="flex items-center gap-2 mb-5">
                        <i class="ti ti-checklist text-[var(--color-primary)]"></i>
                        <h2 class="font-semibold text-slate-800">
                            Checklist Kesiapan Menyusui
                        </h2>
                    </div>

                    <div class="space-y-3">

                        @foreach([
                        'Saya memahami manfaat ASI eksklusif',
                        'Saya siap memberikan ASI segera setelah melahirkan',
                        'Saya telah berdiskusi dengan suami atau keluarga',
                        'Saya mengetahui cara menyusui yang benar',
                        'Saya mengetahui tempat mencari bantuan jika mengalami masalah menyusui',
                        'Saya siap berkomitmen menyusui eksklusif selama 6 bulan'
                        ] as $item)

                        <label class="flex items-center gap-3">
                            <input type="checkbox" class="rounded border-slate-300 text-[var(--color-primary)]">
                            <span class="text-sm text-slate-700">
                                {{ $item }}
                            </span>
                        </label>

                        @endforeach

                    </div>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-8">
                    <div class="flex items-center gap-2 mb-5">
                        <i class="ti ti-calendar-event text-[var(--color-primary)]"></i>
                        <h2 class="font-semibold text-slate-800">
                            Perencanaan Menyusui
                        </h2>
                    </div>

                    <div class="space-y-4">

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">
                                Siapa yang akan membantu saya selama menyusui?
                            </label>

                            <input type="text" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm"
                                placeholder="Suami, ibu, keluarga, tenaga kesehatan...">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">
                                Tantangan yang mungkin saya hadapi
                            </label>

                            <textarea rows="3" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm"
                                placeholder="Tuliskan kemungkinan tantangan yang Anda pikirkan..."></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">
                                Rencana mengatasi tantangan tersebut
                            </label>

                            <textarea rows="3" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm"
                                placeholder="Tuliskan solusi atau strategi yang akan Anda lakukan..."></textarea>
                        </div>

                    </div>
                </div>

                <button type="submit"
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-6 py-3 rounded-xl font-semibold hover:bg-[var(--color-primary-dk)] transition">
                    <i class="ti ti-device-floppy"></i>
                    Simpan Komitmen Menyusui
                </button>

            </form>

        </div>

        @include('layouts.footer')
    </main>
</div>

@endsection