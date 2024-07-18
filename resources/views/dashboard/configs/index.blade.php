<x-dashboard-layout>
    @section('title', 'Config')
    <div class="p-4 block sm:flex items-center justify-between lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full h-screen mb-1">
            <div class="mb-4">
                <div class="flex justify-between py-1 px-1">
                    <div class="relative max-w-xs">
                        @include ('dashboard.layouts.breadcumb')
                        <h1 class="text-xl font-semibold text-primary-900 sm:text-2xl dark:text-primary-50">Pengaturan Data Dasar</h1>
                    </div>
                </div>
            </div>
            @include('dashboard.configs.edit')
        </div>
    </div>
</x-dashboard-layout>