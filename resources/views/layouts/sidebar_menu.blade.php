<p class="px-3 pt-2 pb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">
    Program Utama
</p>

<a href="{{ route('beranda') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition
        {{ request()->routeIs('beranda')
            ? 'bg-pink-50 text-pink-600 font-medium'
            : 'hover:bg-slate-100 text-slate-700' }}">
    <i class="ti ti-home-2"></i>
    Beranda
</a>

<a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
    <i class="ti ti-clipboard-list"></i>
    Pre-Test
</a>

<a href="{{ route('edukasi_laktasi') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition
        {{ request()->routeIs('edukasi_laktasi')
            ? 'bg-pink-50 text-pink-600 font-medium'
            : 'hover:bg-slate-100 text-slate-700' }}">
    <i class="ti ti-book"></i>
    Edukasi Laktasi
</a>

<a href="{{ route('motivasi') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition
        {{ request()->routeIs('motivasi')
            ? 'bg-pink-50 text-pink-600 font-medium'
            : 'hover:bg-slate-100 text-slate-700' }}">
    <i class="ti ti-heart-handshake"></i>
    Motivasi & Self-Efficacy
</a>

<a href="{{ route('niat_target_menyusui') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition
        {{ request()->routeIs('niat_target_menyusui')
            ? 'bg-pink-50 text-pink-600 font-medium'
            : 'hover:bg-slate-100 text-slate-700' }}">
    <i class="ti ti-target-arrow"></i>
    Niat & Target Menyusui
</a>

{{-- <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
    <i class="ti ti-users"></i>
    Dukungan Sosial
</a> --}}

<a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
    <i class="ti ti-message-circle"></i>
    Konseling Online
</a>

<a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
    <i class="ti ti-video"></i>
    Keterampilan Menyusui
</a>

<a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
    <i class="ti ti-chart-line"></i>
    Monitoring
</a>

<a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
    <i class="ti ti-clipboard-check"></i>
    Post-Test
</a>

<a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
    <i class="ti ti-award"></i>
    Outcome ASI Eksklusif
</a>

<hr class="my-4">

<p class="px-3 pt-1 pb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">
    Akun
</p>

<a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 transition">
    <i class="ti ti-user-cog"></i>
    Profil & Pengaturan
</a>