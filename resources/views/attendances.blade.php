<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Absensi Digital</title>
    <meta http-equiv="refresh" content="30">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body onload="startTime()" class="font-sans antialiased bg-black dark:bg-black dark:text-white/50">

    <div class="py-3 text-white flex  text-xl justify-center items-center">
        <div class="text-white text-2xl">
            ABSENSI DIGITAL
        </div>
    </div>
    <div class="py-3 text-white flex  text-xl justify-center items-center">
        <div class="text-white font-extrabold text-5xl">
            SantriMU
        </div>
    </div>

    <div class="py-6 text-8xl flex justify-center items-center">
        <div class="py-3 text-white flex text-xl justify-center items-center">
            <div id="clock" class="clock text-5xl md:text-9xl"></div>
        </div>
    </div>
    @if (session('done'))
    <h2 class="text-center text-white text-2xl font-semibold mt-3">
        @if (Session::has('done'))
        <div class="max-w-lg mx-auto my-6 text-yellow-200 border-2 rounded-lg border-yellow-200 shadow-[0_0_2px_#fff,inset_0_0_2px_#fff,0_0_5px_#F44,0_0_15px_#F44,0_0_30px_#F44]">
            <h2 class="text-center text-2xl font-semibold py-3">
                {{ $randomdone['text'] }}
            </h2>
        </div>
        @endif
    </h2>
    @endif
    {{ Session::get('notfound')}}
    @if (session('status'))
    <div class="max-w-lg mx-auto my-6 text-sky-200 border-2 rounded-lg border-sky-200 shadow-[0_0_2px_#fff,inset_0_0_2px_#fff,0_0_5px_#F44,0_0_15px_#08f,0_0_30px_#08f]">
        <img class="pt-1 w-32 h-32 rounded-full mx-auto" src="{{ asset('storage/students/thumbnail/'.Session::get('image')) }}" alt="Profile picture">

        <h2 class="text-center text-2xl font-semibold mt-3">{{ Session::get('name') }}</h2>
        <p class="text-center text-gray-600 mt-1">NISN: {{ Session::get('nisn') }}</p>
        <p class="text-center text-gray-600 mt-1">Kelas: {{ Session::get('level') }}</p>
        <p class="text-center text-gray-600 mt-1">NO Kartu: {{ Session::get('code') }}</p>
        <div class="py-8 flex justify-center mt-5">
            <div class="w-full h-1/2 flex justify-between items-center px-3 pt-2">
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-gray-500 text-xs">Masuk</h1>
                    <div class="text-gray-600 text-sm">
                        @if (session('timein'))
                        <div class="alert alert-success">
                            {{ Session::get('timein') }}
                        </div>
                        @endif
                    </div>
                </div>
                <!-- <div class="flex flex-col justify-center items-center">
                    <h1 class="text-gray-500 text-xs">Pulang</h1>
                    <div class="text-gray-600 text-sm">
                        @if (session('timeout'))
                        <div class="alert alert-success">
                            {{ Session::get('timeout') }}
                        </div>
                        @endif
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    @else
    <h2 class="text-center text-white text-2xl font-semibold mt-3">
        @if (Session::has('errors'))
        <div class="max-w-lg mx-auto my-6 text-red-200 border-2 rounded-lg border-red-200 shadow-[0_0_2px_#fff,inset_0_0_2px_#fff,0_0_5px_#F44,0_0_15px_#F44,0_0_30px_#F44]">
            <h2 class="text-center text-2xl font-semibold py-3">
            {{ $randomnotfound['text'] }}
            </h2>
        </div>
        @endif
    </h2>
    @endif


    <div class="mt-8">
        <form method="POST" action="{{ route('absensi.store') }}">
            @csrf
            <div class="flex justify-center items-center">
                <input style="text-align:center" autofocus type="text" name="code" class="form-control" required="" placeholder="">
            </div>
        </form>
    </div>
    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
    </button>

    <script type="text/javascript">
        function startTime() {
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
            setTimeout(startTime, 1000);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>
</body>

</html>