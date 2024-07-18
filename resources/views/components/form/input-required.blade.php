<div class="space-y-1 py-2">
    <label for="{{$title}}"
        class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
        {{$label}} <span class="text-xs text-yellow-900 dark:text-yellow-200  mt-2">* {{ "Required" }}</span>
    </label>
    <input id="{{$title}}" type="{{$type ?? ''}}" name="{{$title}}" value="{{$value ?? old($title)}}"
        class="rounded-md py-2 px-3 pr-11 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-800 bg-slate-100 dark:border-gray-700 dark:text-gray-400"
        placeholder="{{$label}}">
    @error($title)
        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>
