<p class="px-3 pt-2 pb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">
    Program Utama
</p>

@php
$pretestDone = auth()->user()?->preTestScore !== null;
@endphp

@php
$menus = [
[
'route'=>'edukasi_laktasi',
'icon'=>'ti-book',
'label'=>'Edukasi Laktasi'
],
[
'route'=>'motivasi',
'icon'=>'ti-heart-handshake',
'label'=>'Motivasi & Self-Efficacy'
],
[
'route'=>'niat_target_menyusui',
'icon'=>'ti-target-arrow',
'label'=>'Niat & Target Menyusui'
],
[
'route'=>'keterampilan_menyusui',
'icon'=>'ti-video',
'label'=>'Keterampilan Menyusui'
],
[
'route'=>'monitoring_reminder',
'icon'=>'ti-chart-line',
'label'=>'Monitoring'
],
[
'route'=>'post_test',
'icon'=>'ti-clipboard-check',
'label'=>'Post-Test'
]
];
@endphp

<a href="{{ route('beranda') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition
        {{ request()->routeIs('beranda')
            ? 'bg-pink-50 text-pink-600 font-medium'
            : 'hover:bg-slate-100 text-slate-700' }}">
    <i class="ti ti-home-2"></i>
    Beranda
</a>

<a href="{{ route('pre_test') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition
        {{ request()->routeIs('pre_test')
            ? 'bg-pink-50 text-pink-600 font-medium'
            : 'hover:bg-slate-100 text-slate-700' }}">
    <i class="ti ti-clipboard-list"></i>
    Pre-Test
</a>

@foreach($menus as $menu)
@if($pretestDone)

<a href="{{ route($menu['route']) }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition 
        {{ request()->routeIs($menu['route']) 
        ? 'bg-pink-50 text-pink-600 font-medium' 
        : 'hover:bg-slate-100 text-slate-700' }}">
    <i class="ti {{ $menu['icon'] }}"></i>
    {{ $menu['label'] }}
</a>

@else
<div class="flex items-center justify-between px-4 py-3 rounded-xl bg-slate-50 text-slate-400">

    <div class="flex items-center gap-3">
        <i class="ti {{ $menu['icon'] }}"></i>
        {{ $menu['label'] }}
    </div>

    <i class="ti ti-lock text-[14px]"></i>

</div>
@endif
@endforeach

{{-- <a href="{{ route('konseling_online') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition
        {{ request()->routeIs('konseling_online')
            ? 'bg-pink-50 text-pink-600 font-medium'
            : 'hover:bg-slate-100 text-slate-700' }}">
    <i class="ti ti-message-circle"></i>
    Konseling Online
</a> --}}

<hr class="my-4">

<p class="px-3 pt-1 pb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">
    Akun
</p>

<a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
    <i class="ti ti-user-cog"></i>
    Profil & Pengaturan
</a>