<button type="submit"
    class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium
    bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none
    focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all
    text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400
    dark:hover:text-white dark:focus:ring-offset-gray-800">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path fill="none" stroke-dasharray="14" stroke-dashoffset="14" d="M6 19h12">
                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="14;0" />
            </path>
            <path fill="currentColor" d="M12 15 h2 v-6 h2.5 L12 4.5M12 15 h-2 v-6 h-2.5 L12 4.5">
                <animate attributeName="d" calcMode="linear" dur="1.5s" keyTimes="0;0.7;1" repeatCount="indefinite" values="M12 15 h2 v-6 h2.5 L12 4.5M12 15 h-2 v-6 h-2.5 L12 4.5;M12 15 h2 v-3 h2.5 L12 7.5M12 15 h-2 v-3 h-2.5 L12 7.5;M12 15 h2 v-6 h2.5 L12 4.5M12 15 h-2 v-6 h-2.5 L12 4.5" />
            </path>
        </g>
    </svg>

    {{$title ?? 'Upload'}}
</button>
