<div class="relative max-w-sm space-y-1 py-2">
    <label for="{{$title}}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
        <span>{{$label}}</span>
    </label>
    <input  name="{{$title}}" value="{{$value}}"
    datepicker datepicker-autohide type="text" 
    class="rounded-md py-2 px-3  block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 bg-gray-200 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
    @error($title)
    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>