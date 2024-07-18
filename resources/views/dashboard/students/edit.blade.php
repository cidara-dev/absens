<x-dashboard-layout>
    @section('title', 'Edit Berita')
    <div class="p-4 block sm:flex items-center justify-between lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <div class="flex justify-between py-1 px-1">
                    <div class="relative max-w-full">
                        @include ('dashboard.layouts.breadcumb')
                        <h1 class="text-xl font-semibold text-primary-900 sm:text-2xl dark:text-primary-100">Edit: {{ $student->title }}</h1>
                    </div>
                </div>
                <div class="flex bg-white dark:bg-gray-900 flex-col border">
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
                    <form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')


                        <!-- <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 pb-18">
                            <img class="rounded-md" src="{{ asset('storage/students/thumbnail/'.$student->image) }}" height="auto" width="200" alt="{{ $student->title }}">
                            <label class="block" x-data="showImage()">
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="image" @change="showPreview(event)" value="{{ old('image', $student->image) }}" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                                <img id="preview" class="object-cover h-32 mt-2 w-60">
                            </label>

                            @error('image')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->


                        <div class="form-group">
                            @if ("/storage/students/images/{{ $student->images }}")
                            <img src="{{ asset('storage/students/thumbnail/'.$student->image) }}">
                            @else
                            <p>No image found</p>
                            @endif
                            <input type="file" name="image" value="{{ old('images', $student->images) }}" />
                        </div>

                        <x-form.input label="KODE KARTU (isi 0 jika belum ada)" title="code" name="code" value="{{ old('code', $student->code) }}" />

                        <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                            <x-form.input label="Nama Siswa" title="name" name="name" value="{{ old('name', $student->name) }}" required />
                            <x-form.input label="NISN" title="nisn" name="nisn" value="{{ old('nisn', $student->nisn) }}" required />
                            <x-form.input label="NIK" title="nik" name="nik" value="{{ old('nik', $student->nik) }}" required />
                        </div>
                        <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                            <div class="py-2 px-4">
                                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                <select name="gender" class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    id="gender">
                                    <option value="L" @if (old('gender', $student->gender) == "L") {{ 'selected' }} @endif>L</option>
                                    <option value="P" @if (old('gender', $student->gender) == "P") {{ 'selected' }} @endif>P</option>
                                </select>
                                @error('gender')
                                <div class="text-sm text-primary-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <x-form.input label="Tempat Lahir" title="born" name="born" value="{{ old('born', $student->born) }}" require />
                            <x-form.date label="Tanggal Lahir" title="borndate" name="borndate" value="{{ old('borndate', $student->borndate) }}" require />

                        </div>
                        <x-form.input label="Alamat" title="address" name="address" value="{{ old('address', $student->address) }}" required />

                        <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                            <x-form.input label="Phone / WA" title="phone" name="phone" value="{{ old('phone', $student->phone) }}" required />
                            <x-form.input label="Orang Tua" title="parent" name="parent" value="{{ old('parent', $student->parent) }}" required />
                            <x-form.input label="KIP (Jika Ada)" title="kip" name="kip" value="{{ old('kip', $student->kip) }}" />
                        </div>
                        <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                            <div class="py-2 px-4">
                                <label for="grade_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                                <select type="text" name="grade_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach ($grades as $var)
                                    <option value="{{$var->id}}" {{ old('grade_id', $var->id) || $student->grade_id === $var->id ? 'selected' : '' }}>{{ $var->name }}</option>
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
                                    <option value="{{$var->id}}" {{ old('level_id', $var->id) || $student->level_id === $var->id ? 'selected' : '' }}>{{ $var->name }}</option>
                                    @endforeach
                                </select>
                                @error('level_id')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                            <x-form.input label="Orang Tua" title="parent" name="parent" value="{{ old('parent', $student->parent) }}" required />
                        </div>

                        <x-button.submit type="submit">
                            Update
                            </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </section>
    @push('scripts')
    <script>

    </script>
    @endpush
</x-dashboard-layout>