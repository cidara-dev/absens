<div class="relative max-w-sm space-y-1 py-2">
    <label for="{{$title}}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
        <span>{{$label}}</span>
    </label>

    <div class="relative">
        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
            </svg>
        </div>
        <input type="time" id="{{$title}}" name="{{$title}}" value="{{$value ?? old($title)}}"
        class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
        min="05:00" max="18:00" value="00:00" required />
    </div>

    @error($title)
    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>