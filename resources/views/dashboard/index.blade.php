<x-dashboard-layout>
    <div class="p-4 block sm:flex mx-auto items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full h-screen mb-1">
            <div class="mb-4">
                <div class="pt-12 text-center">
                    <h3 class="py-3 block font-bold text-gray-800 dark:text-gray-200">
                        Selamat Datang di Dashboard
                    </h3>
                    <div class="inline-block bg-gradient-to-tl from-blue-600 via-transparent to-purple-400 p-px rounded-xl mb-3">
                        <div class="bg-white rounded-xl py-1.5 px-3 font-bold lg:leading-tight dark:bg-slate-900">
                            <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-purple-400 text-transparent">
                                SISTEM INFORMASI ABSESNSI DAN BIMBINGAN KONSELING
                            </span>

                        </div>
                    </div>
                    <p class="bg-clip-text bg-gradient-to-tl from-blue-600 to-purple-400 text-transparent">
                        SIABK v {{ $configs->version }}
                    </p>

                    <h1 class="text-xl md:text-4xl text-primary-900 font-bold lg:leading-tight dark:bg-clip-text dark:bg-gradient-to-bl dark:from-blue-100 dark:to-violet-700 dark:text-transparent">
                        @empty($configs->name)
                        {{ "NAMA SEKOLAH"}}
                        @else
                        {{ $configs->name }}
                        @endempty
                    </h1>

                    <h3 class="text-xl md:text-xl text-primary-900 font-bold lg:leading-tight dark:bg-clip-text dark:bg-gradient-to-bl dark:from-blue-100 dark:to-violet-700 dark:text-transparent">
                        @empty($configs->address)
                        {{ "NAMA WEB"}}
                        @else
                        {{ $configs->address }}
                        @endempty
                    </h3>
                </div>
            </div>



            <div class="grid w-full grid-cols-2 gap-4 mt-4 xl:grid-cols-4 2xl:grid-cols-4">
                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Seluruh Siswa</h3>
                        <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">750</span>

                    </div>
                </div>

                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Siswa Kelas 7</h3>
                        <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">201</span>

                    </div>
                </div>
                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Siswa Kelas 8</h3>
                        <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">300</span>

                    </div>
                </div>
                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Siswa Kelas 9</h3>
                        <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">212</span>

                    </div>
                </div>


            </div>

            <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-3 2xl:grid-cols-3">

                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Kelas 7. Jumlah + Prosentase Ketersediaan Bangku (%)</h3>
                        <div class="flex items-center mb-2">
                            <div class="w-16 text-sm font-medium dark:text-white">7.1 (22)</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 91%"></div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">7.2 (21)</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">7.2 (24)</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">7.2 (21)</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 91%"></div>
                            </div>
                        </div>
                    </div>
                    <div id="traffic-channels-chart" class="w-full"></div>
                </div>
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Kelas 8. Jumlah + Prosentase Ketersediaan Bangku (%)</h3>
                        <div class="flex items-center mb-2">
                            <div class="w-16 text-sm font-medium dark:text-white">7.1 (22)</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 91%"></div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">7.2 (21)</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">7.2 (24)</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">7.2 (21)</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 91%"></div>
                            </div>
                        </div>
                    </div>
                    <div id="traffic-channels-chart" class="w-full"></div>
                </div>
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Kelas 9. Jumlah + Prosentase Ketersediaan Bangku (%)</h3>
                        <div class="flex items-center mb-2">
                            <div class="w-16 text-sm font-medium dark:text-white">7.1 (22)</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 91%"></div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">7.2 (21)</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">7.2 (24)</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">7.2 (21)</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 91%"></div>
                            </div>
                        </div>
                    </div>
                    <div id="traffic-channels-chart" class="w-full"></div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>