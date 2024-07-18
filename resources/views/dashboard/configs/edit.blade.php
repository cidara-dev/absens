<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('DATA DASAR') }}
        </h2>
    </header>
    <form method="post" action="{{ route('config.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 pb-18">
            <img class="rounded-md" src="{{ asset('storage/images/' . $configs->image) }}" height="auto" width="200" alt="{{ $configs->image }}">
            <label class="block" x-data="showImage()">
                <span class="sr-only">Choose File</span>
                <input required type="file" name="image" @change="showPreview(event)" value="{{ old('image', $configs->image) }}" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                <img id="preview" class="object-cover h-32 mt-2 w-60">
            </label>
            @error('image')
            <div class="flex items-center text-sm text-red-600">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <x-input-label for="name" :value="__('Nama Sekolah')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $configs->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="address" :value="__('Alamat')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $configs->address)" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="npsn" :value="__('NPSN')" />
            <x-text-input id="npsn" name="npsn" type="text" class="mt-1 block w-full" :value="old('npsn', $configs->npsn)" required autofocus autocomplete="npsn" />
            <x-input-error class="mt-2" :messages="$errors->get('npsn')" />
        </div>
        <div>
            <x-input-label for="phone" :value="__('Phone / WA')" />
            <x-text-input id="phone" name="phone" type="number" class="mt-1 block w-full" :value="old('phone', $configs->phone)" required autofocus autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Update') }}</x-primary-button>
            @if (session()->has('status'))
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ session()->get('status') }}</p>
            @endif
        </div>
    </form>
</section>

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