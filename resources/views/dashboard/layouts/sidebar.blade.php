<aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">

                    <li>
                        <a href="/dashboard/" class="flex items-center p-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h12.769q.69 0 1.153.463T20 5.616v12.769q0 .69-.462 1.153T18.384 20zm0-1H11.5V5H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192m6.885 0h5.885q.23 0 .423-.192t.192-.424V12h-6.5zm0-8H19V5.616q0-.231-.192-.424T18.384 5H12.5z" />
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-sm text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-students" data-collapse-toggle="dropdown-students">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>

                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>SISWA</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-students" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/dashboard/students/create" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Input Baru
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/students" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Rekap
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/kelas-7" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Kelas VII
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/kelas-8" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Kelas VIII
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/kelas-9" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Kelas IX
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-sm text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-attandance" data-collapse-toggle="dropdown-attandance">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M21 11.11V5a2 2 0 0 0-2-2h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14a2 2 0 0 0 2 2h6.11c1.26 1.24 2.98 2 4.89 2c3.87 0 7-3.13 7-7c0-1.91-.76-3.63-2-4.89M12 3c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1M5 19V5h2v2h10V5h2v4.68c-.91-.43-1.92-.68-3-.68H7v2h4.1c-.6.57-1.06 1.25-1.42 2H7v2h2.08c-.05.33-.08.66-.08 1c0 1.08.25 2.09.68 3zm11 2c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5s-2.24 5-5 5m.5-4.75l2.86 1.69l-.75 1.22L15 17v-5h1.5z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>ABSENSI</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-attandance" class="hidden py-2 space-y-2">
                        <li>
                                <a href="/dashboard/attandances" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Index
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Perizinan Manual
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Data Hari ini
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Data Bulan Ini
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Data Semester Ini
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Report
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-sm text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-konseling" data-collapse-toggle="dropdown-konseling">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                                <path fill="currentColor" d="M230.33 141.06a24.34 24.34 0 0 0-18.61-4.77C230.5 117.33 240 98.48 240 80c0-26.47-21.29-48-47.46-48A47.58 47.58 0 0 0 156 48.75A47.58 47.58 0 0 0 119.46 32C93.29 32 72 53.53 72 80c0 11 3.24 21.69 10.06 33a31.87 31.87 0 0 0-14.75 8.4L44.69 144H16a16 16 0 0 0-16 16v40a16 16 0 0 0 16 16h104a8 8 0 0 0 1.94-.24l64-16a7 7 0 0 0 1.19-.4L226 182.82l.44-.2a24.6 24.6 0 0 0 3.93-41.56ZM119.46 48a31.15 31.15 0 0 1 29.14 19a8 8 0 0 0 14.8 0a31.15 31.15 0 0 1 29.14-19C209.59 48 224 62.65 224 80c0 19.51-15.79 41.58-45.66 63.9l-11.09 2.55A28 28 0 0 0 140 112h-39.32C92.05 100.36 88 90.12 88 80c0-17.35 14.41-32 31.46-32M16 160h24v40H16Zm203.43 8.21l-38 16.18L119 200H56v-44.69l22.63-22.62A15.86 15.86 0 0 1 89.94 128H140a12 12 0 0 1 0 24h-28a8 8 0 0 0 0 16h32a8.3 8.3 0 0 0 1.79-.2l67-15.41l.31-.08a8.6 8.6 0 0 1 6.3 15.9Z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>KONSELING</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-konseling" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Rekap
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Terlambat
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Tidak Hadir
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-sm text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-beasiswa" data-collapse-toggle="dropdown-beasiswa">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M2 4.75A2.75 2.75 0 0 1 4.75 2h10.5A2.75 2.75 0 0 1 18 4.75V11h-1V8H8.707l1.647 1.646a.5.5 0 0 1-.708.708L8 8.707V13h1.121a2 2 0 0 0-.121.687V14H4.75A2.75 2.75 0 0 1 2 11.25zM3 8v3.25c0 .966.784 1.75 1.75 1.75H7V8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L6.293 8zm1.268-1A2 2 0 0 1 7 4.268V3H4.75A1.75 1.75 0 0 0 3 4.75V7zM6 7h1V6a1 1 0 1 0-1 1m2-1v1h1a1 1 0 1 0-1-1m2.732 1H17V4.75A1.75 1.75 0 0 0 15.25 3H8v1.268A2 2 0 0 1 10.732 7M19 13.5v3a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5v-3a1.5 1.5 0 0 1 1.5-1.5h6a1.5 1.5 0 0 1 1.5 1.5m-1 3v-1a1.5 1.5 0 0 0-1.5 1.5h1a.5.5 0 0 1 .5-.5m-.5-3.5h-1a1.5 1.5 0 0 0 1.5 1.5v-1a.5.5 0 0 1-.5-.5m-6 0a.5.5 0 0 1-.5.5v1a1.5 1.5 0 0 0 1.5-1.5zm-.5 3.5a.5.5 0 0 1 .5.5h1a1.5 1.5 0 0 0-1.5-1.5zm3.5-3a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>BEA SISWA</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-beasiswa" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Kategori
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Data Baru
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/development" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                    Rekap
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/dashboard/config" class="flex items-center p-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor">
                                    <path d="M2.256 15.632c.034-.323.268-.583.736-1.104l1.031-1.153c.252-.32.431-.875.431-1.375s-.179-1.056-.43-1.375L2.991 9.472c-.468-.52-.702-.781-.736-1.104s.14-.627.49-1.234l.494-.857c.373-.648.56-.972.878-1.1c.317-.13.676-.028 1.395.176l1.22.343c.459.106.94.046 1.358-.169l.337-.194a2 2 0 0 0 .788-.968l.334-.997c.22-.66.33-.99.591-1.18C10.403 2 10.75 2 11.444 2h1.115c.694 0 1.042 0 1.303.189s.371.519.59 1.179l.335.997a2 2 0 0 0 .788.968l.337.194c.418.215.9.275 1.358.17l1.22-.344c.719-.204 1.078-.306 1.395-.177c.318.13.505.453.878 1.101l.493.857c.35.607.525.91.491 1.234s-.268.583-.736 1.104l-1.031 1.153c-.252.319-.431.875-.431 1.375s.179 1.056.43 1.375l1.032 1.153c.468.52.702.781.736 1.104s-.14.627-.49 1.234l-.494.857c-.373.648-.56.972-.878 1.1c-.317.13-.676.028-1.395-.176l-1.22-.343a2 2 0 0 0-1.359.169l-.336.194c-.36.23-.636.57-.788.968l-.334.997c-.22.66-.33.99-.591 1.18c-.261.188-.609.188-1.303.188h-1.115c-.694 0-1.041 0-1.303-.189c-.261-.189-.371-.518-.59-1.178" />
                                    <path d="M2.737 18.78c1.08-1.08 4.752-4.716 5.112-5.136c.381-.444.072-1.044.256-2.904c.089-.9.282-1.574.836-2.076c.66-.624 1.2-.624 3.06-.666c1.62.042 1.812-.138 1.98.282c.12.3-.24.48-.672.96c-.96.96-1.524 1.44-1.578 1.74c-.39 1.32 1.146 2.1 1.986 1.26c.318-.318 1.788-1.8 1.932-1.92c.108-.096.367-.092.492.06c.108.106.12.12.108.6c-.01.444-.006 1.082-.004 1.74c.001.852-.044 1.8-.404 2.28c-.72 1.08-1.92 1.14-3 1.188c-1.02.06-1.86-.048-2.124.144c-.216.108-1.356 1.308-2.736 2.688l-2.46 2.46c-2.04 1.62-4.284-.9-2.784-2.7" />
                                </g>
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>CONFIG</span>
                        </a>
                    </li>
                </ul>
                <div class="pt-2 space-y-2">
                    <a href="/dashboard/docs" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M17.226 0C18.206 0 19 .814 19 1.818v16.364C19 19.186 18.206 20 17.226 20H4.542c-.98 0-1.774-.814-1.774-1.818l-.001-1.686H1.665a.674.674 0 0 1-.665-.68c0-.377.298-.682.665-.682h1.102v-2.419H1.665A.674.674 0 0 1 1 12.033c0-.377.298-.682.665-.682l1.102-.001V8.919H1.665A.674.674 0 0 1 1 8.239c0-.377.298-.682.665-.682l1.102-.001V5.122H1.665A.674.674 0 0 1 1 4.441c0-.377.298-.682.665-.682l1.102-.001l.001-1.94C2.768.814 3.562 0 4.542 0zm-3.248 1.364H4.466a.344.344 0 0 0-.246.118a.428.428 0 0 0-.12.268v2.008h.844a.668.668 0 0 1 .665.683a.674.674 0 0 1-.665.681H4.1v2.431h.873l.045.007l-.074-.004a.65.65 0 0 1 .313.08l.02.011a.53.53 0 0 1 .124.101l-.055-.053a.684.684 0 0 1 .261.509l-.007-.08a.676.676 0 0 1-.596.792l-.03.002l-.016.001H4.1v2.431h.844a.65.65 0 0 1 .308.078c.062.03.111.066.15.111l-.03-.029a.687.687 0 0 1 .216.696l-.009.03a.682.682 0 0 1-.286.378l-.01.005a.644.644 0 0 1-.339.095H4.1v2.419h.873c.008 0 .016.002.023.004l-.052-.004c.367 0 .665.305.665.682c0 .222-.104.42-.265.544l-.013.01a.524.524 0 0 1-.062.04l-.008.004a.628.628 0 0 1-.275.082h-.013l-.015.002h-.014l-.844-.001v1.764c.006.067.03.13.072.19l.048.058c.073.077.163.12.27.13h9.488zm3.264-.002h-1.938v17.274h1.974c.091 0 .176-.042.256-.13a.473.473 0 0 0 .134-.267V1.794a.486.486 0 0 0-.134-.298a.415.415 0 0 0-.292-.134" />
                        </svg>
                        <span class="ml-3" sidebar-toggle-item>Documentation</span>
                    </a>

                    <a href="/dashboard/support" class="flex items-center p-2 text-sm text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M12.942 18H11.5q-3.132 0-5.316-2.183T4 10.504t2.183-5.317T11.498 3q1.566 0 2.93.586q1.364.585 2.383 1.604t1.604 2.379T19 10.5q0 2.87-1.474 5.264t-3.753 3.98q-.134.077-.27.085q-.134.007-.257-.06t-.196-.171t-.079-.263zm1.058.35q1.775-1.5 2.888-3.512T18 10.5q0-2.725-1.888-4.612T11.5 4T6.888 5.888T5 10.5t1.888 4.613T11.5 17H14zm-2.464-2.779q.306 0 .52-.216t.213-.523t-.216-.52t-.523-.214t-.52.217t-.214.523t.216.52t.524.213M9.459 8.202q.174.067.347-.009t.283-.245q.205-.338.582-.54q.377-.2.868-.2q.736 0 1.197.385t.46 1.042q0 .406-.197.76q-.197.353-.672.828q-.644.627-.925 1.076t-.28.872q0 .197.128.336t.31.14t.305-.14q.123-.138.146-.341q.049-.31.335-.689t.696-.788q.564-.564.807-1.063q.243-.5.243-.999q0-1.029-.71-1.655t-1.805-.626q-.736 0-1.356.359t-.932.856q-.11.203-.065.388t.235.253m2.041 2.973" />
                        </svg>
                        <span class="ml-3" sidebar-toggle-item>Support</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</aside>

<div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>