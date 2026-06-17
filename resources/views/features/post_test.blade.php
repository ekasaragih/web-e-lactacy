@extends('layouts.app')
@section('content')

<div class="flex bg-slate-50">
    @include('layouts.sidebar')

    <main class="flex-1">
        <div class="bg-white border-b border-slate-200 px-8 py-8">
            <div
                class="inline-flex items-center gap-2 bg-amber-50 text-amber-700 border border-amber-200 rounded-full px-4 py-2 text-xs font-semibold mb-5">
                <i class="ti ti-clipboard-list"></i>
                Post-Test
            </div>

            <h1 class="font-['Lora'] text-4xl font-bold text-slate-800 mb-4">
                Evaluasi Program (Post-Test)
            </h1>

            <p class="text-slate-500 leading-relaxed">
                Mengukur perubahan pengetahuan, motivasi, self-efficacy,
                niat, keterampilan, dan perilaku menyusui setelah mengikuti
                program E-Lactacy.
            </p>
        </div>

        <div class="px-8 py-8">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('monitoring_reminder') }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-slate-700 transition">
                    <i class="ti ti-arrow-left"></i>
                    Monitoring & Reminder
                </a>

                <a href=""
                    class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-[var(--color-primary-dk)] transition">
                    Outcome ASI Eksklusif
                    <i class="ti ti-arrow-right"></i>
                </a>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-8">
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 rounded-xl bg-[var(--color-primary)] flex items-center justify-center shrink-0">
                        <i class="ti ti-book text-white text-xl"></i>
                    </div>

                    <div>
                        <h2 class="font-semibold text-slate-800 mb-2">
                            Tujuan Post-Test
                        </h2>

                        <p class="text-sm text-slate-500 leading-relaxed">
                            Mengukur pengetahuan ibu tentang laktasi dan praktik menyusui setelah intervensi edukasi dan
                            pendampingan menyusui.
                        </p>
                    </div>
                </div>
            </div>

            <form action="{{ route('post_test.submit') }}" method="POST">
                @csrf
                @foreach($questions as $index => $question)
                <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-5">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-pink-100 text-pink-600 font-bold flex items-center justify-center shrink-0">
                            {{ $index + 1 }}
                        </div>

                        <div class="flex-1">

                            <div class="mb-2">
                                <span
                                    class="inline-flex px-3 py-1 rounded-full bg-slate-100 text-slate-600 text-xs font-medium">
                                    {{ $question['category'] }}
                                </span>
                            </div>

                            <h3 class="font-semibold text-slate-800 mb-4">
                                {{ $question['question'] }}
                            </h3>

                            <div class="space-y-3">
                                @foreach($question['options'] as $option)
                                <label
                                    class="flex items-center gap-3 border border-slate-200 rounded-xl p-4 cursor-pointer hover:bg-slate-50 transition">

                                    <input type="radio" name="question_{{ $index }}" value="{{ $loop->index }}"
                                        class="text-pink-500">

                                    <span class="text-sm text-slate-700">
                                        {{ $option }}
                                    </span>
                                </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div class="flex justify-end">
                        <button type="submit"
                            class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-6 py-3 rounded-xl font-semibold hover:bg-[var(--color-primary-dk)] transition">
                            Selesaikan Evaluasi
                            <i class="ti ti-arrow-right"></i>
                        </button>

                    </div>

                </div>

            </form>

            @if(isset($showResult))
            <div class="mt-8">

                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500 text-white flex items-center justify-center">
                        <i class="ti ti-check"></i>
                    </div>

                    <div>
                        <h2 class="font-semibold text-slate-800">
                            Hasil Evaluasi
                        </h2>

                        <p class="text-sm text-slate-500">
                            Berikut hasil post-test Anda.
                        </p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-5">

                    <div class="bg-white border border-slate-200 rounded-2xl p-6">
                        <h3 class="font-semibold mb-2">
                            Pengetahuan
                        </h3>

                        <p class="text-3xl font-bold text-pink-600">
                            {{ round($knowledgeScore) }}%
                        </p>

                        <p class="text-sm text-slate-500">
                            {{ $knowledgeLabel }}
                        </p>
                    </div>

                    @foreach($results as $category => $item)

                    <div class="bg-white border border-slate-200 rounded-2xl p-6">

                        <h3 class="font-semibold mb-2">
                            {{ $category }}
                        </h3>

                        <p class="text-3xl font-bold text-pink-600">
                            {{ round($item['score']) }}%
                        </p>

                        <p class="text-sm text-slate-500">
                            {{ $item['label'] }}
                        </p>

                    </div>

                    @endforeach

                </div>

            </div>
            @endif

        </div>

        @include('layouts.footer')

    </main>
</div>

@endsection