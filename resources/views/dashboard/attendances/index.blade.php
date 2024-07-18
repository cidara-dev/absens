<x-dashboard-layout>
    <div class="p-4 block sm:flex mx-auto items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full h-screen mb-1">

            <div class="mb-3 flex justify-end space-x-2">
                <x-button.create label="TAMBAH SISWA BARU" route="students" />
            </div>


            <div class="grid w-full grid-cols-3 gap-4 mt-4 xl:grid-cols-4 2xl:grid-cols-3">
                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Siswa Mengisi Absen</h3>
                        <span class="text-2xl font-bold leading-none text-lime-800 sm:text-3xl dark:text-lime-200">{{ $thisday }} ({{$thisdaypercent}})</span>

                    </div>
                </div>
                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Siswa Belum/Tidak Absen</h3>
                        <span class="text-2xl font-bold leading-none text-red-700 sm:text-3xl dark:text-red-300">{{ $counttotalstudents - $thisday }} ({{$thisdaynotyetpercent}}) </span>

                    </div>
                </div>
                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Total Siswa</h3>
                        <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">{{ $counttotalstudents }}</span>

                    </div>
                </div>


            </div>

            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Index ALL</h3>
                        <div class="flex items-center mb-2">
                            {{ $thisdayall }}
                        </div>
                    </div>
                </div>

            <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-3 2xl:grid-cols-3">
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Index Kelas 7 Hari Ini</h3>
                        <div class="flex items-center mb-2">
                            {{ $thisday7 }}
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Index Kelas 8 Hari Ini</h3>
                        <div class="flex items-center mb-2">
                            {{ $thisday8 }}
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Index Kelas 9 Hari Ini</h3>
                        <div class="flex items-center mb-2">
                            {{ $thisday9 }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>