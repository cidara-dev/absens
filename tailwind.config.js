/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
        './node_modules/sortablejs/**/*.js'
    ],

    safelist: [
        'w-64',
        'w-1/2',
        'rounded-l-lg',
        'rounded-r-lg',
        'bg-gray-200',
        'grid-cols-4',
        'grid-cols-7',
        'h-6',
        'leading-6',
        'h-9',
        'leading-9',
        'shadow-lg',
        'bg-opacity-50',
        'dark:bg-opacity-80'
    ],
    
    darkMode: "class",
    theme: {
        extend: {
            animation: {
                fadeIn: "fadeIn 1s ease forwards",
              },
              keyframes: {
                fadeIn: {
                  "0%": { opacity: 0 },
                  "100%": { opacity: 1 }
                },
            },
            
            colors: {
                primary: {"50":"#f0f9ff","100":"#e0f2fe","200":"#bae6fd","300":"#7dd3fc","400":"#38bdf8","500":"#0ea5e9","600":"#0284c7","700":"#0369a1","800":"#075985","900":"#0c4a6e","950":"#082f49"},
                vulcan: {
                    "50": "#868fac",
                    "100": "#848ca9",
                    "200": "#7a829f",
                    "300": "#6a7390",
                    "400": "#5d6479",
                    "500": "#4a4f5e",
                    "600": "#3b3f4f",
                    "700": "#2c313f",
                    "800": "#232734",
                    "900": "#1a1d27",
                  },
            },
            fontFamily: {
                'sans': ['Open Sans',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'],
                'body': ['Open Sans',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'],
                'mono': ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', 'monospace']
            },
            transitionProperty: {
                'width': 'width'
            },
            textDecoration: ['active'],
        },
    },

    plugins: [require('flowbite/plugin')],
};
