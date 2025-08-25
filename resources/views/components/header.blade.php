<div class="w-full">
    <header class="bg-white shadow-lg p-4">
        <div class="mx-auto container px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <div class="flex justify-start md:justify-between sm:space-x-4 md:space-x-16 lg:space-x-44">
                    <div class="flex shrink-0">
                        <h1>
                            <a href="/" class="text-3xl">
                                <span class="font-light italic text-slate-400">Movie</span>
                                <span class="font-bold text-slate-800">DB</span>
                            </a>
                        </h1>
                    </div>
                    <div class="hidden sm:flex sm:space-x-1 md:space-x-2 lg:space-x-8 pt-2">
                        <a href="/">
                            Start
                        </a>
                        <a href="/gerichte">
                            Gerichte
                        </a>
                        <a href="/cocktails">
                            Cocktails
                        </a>
                        <a href="/zutaten">
                            Zutaten
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ms-2 sm:flex sm:items-center">
                    
                        <div class="space-x-1 sm:space-x-2 md:space-x-3">
                            <button href="/register" class="text-slate-800 hover:text-slate-500 border border-sky-600 px-3 py-1 rounded">
                                Registrierung
                            </button>
                            <button href="/login" class="text-white border border-sky-700 bg-sky-700 hover:bg-sky-600 hover:text-slate-200 hover:border-sky-600  px-3 py-1 rounded">
                                Login
                            </button>
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