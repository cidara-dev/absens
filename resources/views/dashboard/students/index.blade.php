<x-dashboard-layout>
    @section('title', 'Rekap Siswa')
    <div class="p-4 block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full h-screen mb-1">
            <div class="mb-4">
                <div class="flex justify-between py-1 px-1">
                    <div class="relative max-w-xs">
                        @include ('dashboard.layouts.breadcumb')
                        <h1 class="text-xl font-semibold text-primary-900 sm:text-2xl dark:text-primary-100">Index SISWA</h1>
                    </div>
                </div>
                <div class="mb-3 flex justify-end space-x-2">
                    <x-button.create label="TAMBAH SISWA BARU" route="students" />
                </div>
                <div class="flex bg-white dark:bg-gray-900 flex-col border">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                IMAGE
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                KELAS
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                NISN
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                NAME
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $var)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-2 py-2 whitespace-nowrap">
                                                <img class="rounded-md" src="{{ asset('storage/students/thumbnail/'.$var->image) }}" height="auto" width="50" alt="{{ $var->name }}">
                                            </th>
                                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-800 dark:text-gray-200">
                                                {{ $var->tingkat }} - {{ $var->kelas }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-800 dark:text-gray-200">
                                                {{ $var->nisn }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-800 dark:text-gray-200">
                                                {{ $var->name }}
                                            </td>

                                            <td class="px-2 py-2 whitespace-nowrap text-end">
                                                <x-button.action route="students" :id="$var->id" />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-12">
                                        {{ $students->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>