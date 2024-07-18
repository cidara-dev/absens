<x-dashboard-layout>
    @section('title', 'Data Siswa Baru')
    <div class="p-4 block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full h-screen mb-1">
            <div class="mb-4">
                <div class="flex justify-between py-1 px-1">
                    <div class="relative max-w-full">
                        @include ('dashboard.layouts.breadcumb')
                        <h1 class="text-xl font-semibold text-primary-900 sm:text-2xl dark:text-primary-100">Tambah Siswa Baru</h1>
                    </div>
                </div>
                @if (Session::has('errors'))
                <x-slot name="header">
                    <div class="p-4 sm:ml-64">
                        <div class="mt-12">
                            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                                {{ __('TERDAPAT ERROR') }}
                            </h2>
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                </x-slot>
                @endif
            </div>

            <div class="px-3">
                <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label class="block" x-data="showImage()">
                            <span class="sr-only">Choose File</span>
                            <input type="file" name="image" @change="showPreview(event)" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" require />
                            <img id="preview" class="object-cover h-32 mt-2 w-60">
                        </label>
                        @error('image')
                        <div class="flex items-center text-sm text-red-600">
                            {{ $message }}

                        </div>
                        @enderror
                    </div>
                    <x-form.input label="KODE KARTU (isi 0 jika belum ada)" title="code" name="code" value="{{ old('code') }}" />

                    <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                        <x-form.input label="Nama Siswa" title="name" name="name" value="{{ old('name') }}" require />
                        <x-form.input label="NISN" title="nisn" name="nisn" value="{{ old('nisn') }}" require />
                        <x-form.input label="NIK" title="nik" name="nik" value="{{ old('nik') }}" require />
                    </div>
                    <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                        <div class="py-2 px-4">
                            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                            <select name="gender" class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                id="gender">
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                            @error('gender')
                            <div class="text-sm text-primary-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <x-form.input label="Tempat Lahir" title="born" name="born" value="{{ old('born') }}" require />
                        <x-form.date label="Tanggal Lahir" title="borndate" name="borndate" value="{{ old('borndate') }}" require />

                    </div>
                    <x-form.input label="Alamat" title="address" name="address" value="{{ old('address') }}" required />

                    <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                        <x-form.input label="Phone / WA" title="phone" name="phone" value="{{ old('phone') }}" required />
                        <x-form.input label="Orang Tua" title="parent" name="parent" value="{{ old('parent') }}" required />
                        <x-form.input label="KIP (Jika Ada)" title="kip" name="kip" value="{{ old('kip') }}" />
                    </div>
                    <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                        <div class="py-2 px-4">
                            <label for="grade_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                            <select type="text" name="grade_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($grades as $var)
                                <option value="{{ $var->id }}">{{ $var->name }}</option>
                                @endforeach
                            </select>
                            @error('grade_id')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="py-2 px-4">
                            <label for="level_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                            <select type="text" name="level_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($levels as $var)
                                <option value="{{ $var->id }}">{{ $var->name }}</option>
                                @endforeach
                            </select>
                            @error('level_id')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <x-form.input label="Orang Tua" title="parent" name="parent" value="{{ old('parent') }}" required />
                    </div>
                    <x-form.input label="Catatan" title="note" name="note" type="textarea" value="{{ old('note') }}" />
                    <x-primary-button type="submit">
                        Submit
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function showImage() {
            return {
                showPreview(event) {
                    if (event.target.files.length > 0) {
                        var src = URL.createObjectURL(event.target.files[0]);
                        var preview = document.getElementById("preview");
                        preview.src = src;
                        preview.style.display = "block";
                    }
                }
            }
        }
    </script>
    @endpush
</x-dashboard-layout>