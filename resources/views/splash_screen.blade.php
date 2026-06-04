<head>
    <meta charset="UTF-8">
    <title>E-Lactacy</title>

    @vite(['resources/css/app.css'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
</head>

@section('content')

<body
    class="min-h-screen bg-gradient-to-br from-pink-50 via-white to-cyan-50 flex items-center justify-center overflow-hidden px-6">
    <div class="text-center max-w-md w-full">
        <div
            class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 mx-auto rounded-full bg-pink-100 flex items-center justify-center animate-pulse mb-6">
            <i class="ti ti-heart text-4xl sm:text-5xl md:text-6xl text-pink-500"></i>
        </div>

        <h1 class="font-bold text-slate-800 mb-3 text-3xl sm:text-4xl md:text-5xl">
            E-Lactacy
        </h1>

        <p class="text-slate-500 text-sm sm:text-base md:text-lg mb-8 max-w-xs sm:max-w-sm mx-auto">
            Pendamping Digital Ibu Menyusui Indonesia
        </p>

        <div class="flex justify-center">
            <div
                class="w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 border-[3px] sm:border-4 border-pink-200 border-t-pink-500 rounded-full animate-spin">
            </div>
        </div>
    </div>

    <script>
        // sessionStorage.setItem('splashShown', 'false');
        if(sessionStorage.getItem('splashShown')) {
            window.location.href = "{{ route('welcome') }}";
        } else {
            sessionStorage.setItem('splashShown', true);
            setTimeout(() => {
                window.location.href = "{{ route('welcome') }}";
            }, 5000);
        }
    </script>
</body>