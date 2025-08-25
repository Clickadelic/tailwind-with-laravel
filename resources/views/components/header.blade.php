<div class="w-full">
    <header class="bg-white shadow-lg p-4">
        <div class="mx-auto container px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <div class="flex justify-start md:justify-between sm:space-x-4 md:space-x-16 lg:space-x-44">
                    <div class="flex shrink-0">
                        <h1>
                            <a href="/" class="text-3xl group group:hover:text-sky-600">
                                <span class="font-light italic text-slate-400 group">Movie</span>
                                <span class="font-bold text-slate-800 group">DB</span>
                            </a>
                        </h1>
                    </div>
                    <div class="hidden sm:flex sm:space-x-1 md:space-x-2 lg:space-x-8 mt-1">
                        <a href="/" class="flex items-center gap-2 hover:text-sky-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                            </svg>
                            Start
                        </a>
                        <a href="/movies" class="flex items-center gap-2 hover:text-sky-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z"/>
                            </svg>
                            Movies
                        </a>
                        <a href="/regisseure" class="flex items-center gap-2 hover:text-sky-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5"/>
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            </svg>
                            Regisseure
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ms-2 sm:flex sm:items-center">
                    <div class="space-x-1 sm:space-x-2 md:space-x-3">
                        <a href="/register" class="text-slate-800 hover:text-slate-500 border border-sky-700 px-3 py-1 rounded">
                            Registrierung
                        </a>
                        <a href="/login" class="text-white border border-sky-700 bg-sky-600 hover:bg-sky-700 hover:text-slate-200 hover:border-sky-600  px-3 py-1 rounded">
                            Login
                        </a>
                    </div>
                </div>
                <div class="-me-2 flex items-center sm:hidden">
                    <button
                        
                        class="inline-flex items-center justify-center rounded p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
                    >
                        <svg
                            class="h-6 w-6"
                            stroke="currentColor"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                class={
                                    !showingNavigationDropdown
                                        ? 'inline-flex'
                                        : 'hidden'
                                }
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                            <path
                                class={
                                    showingNavigationDropdown
                                        ? 'inline-flex'
                                        : 'hidden'
                                }
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
</div>