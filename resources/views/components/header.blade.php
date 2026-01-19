<!-- Sidebar Navigation -->
<nav class="fixed left-0 top-0 h-screen w-64 bg-slate-900 border-r border-slate-700 flex flex-col overflow-y-auto z-50">
    <!-- Logo/Brand -->
    <div class="p-6 border-b border-slate-700">
        <a href="/" class="flex items-center space-x-3">
            <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                <span class="text-white font-bold text-xl">C</span>
            </div>
            <span class="text-xl font-bold text-white">Ceuu</span>
        </a>
    </div>

    <!-- Search Bar -->
    <div class="p-4 border-b border-slate-700">
        <div class="relative">
            <input type="text" placeholder="Buscar..."
                class="w-full bg-slate-800 text-gray-300 rounded-lg pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
    </div>

    <div class="flex-1 py-4">
        <a href="{{ route('user.index') }}"
            class="flex items-center space-x-3 px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-blue-400 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                </path>
            </svg>
            <span class="text-sm font-medium">Users</span>
        </a>

        <a href="{{ route('game.index') }}"
            class="flex items-center space-x-3 px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-blue-400 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="text-sm font-medium">Games</span>
        </a>
    </div>

    <!-- Navigation Links -->
    <!-- Usar depois para usuario -->
    {{-- <div class="flex-1 py-4">
        <a href="/"
            class="flex items-center space-x-3 px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-blue-400 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span class="text-sm font-medium">Catálogo</span>
        </a>

        <a href="#"
            class="flex items-center space-x-3 px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-blue-400 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                </path>
            </svg>
            <span class="text-sm font-medium">Ofertas</span>
        </a>

        <a href="#"
            class="flex items-center space-x-3 px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-blue-400 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
            <span class="text-sm font-medium">Gift Cards</span>
        </a>

        <div class="my-4 border-t border-slate-700"></div>

        <a href="#"
            class="flex items-center space-x-3 px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-blue-400 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>
            <span class="text-sm font-medium">PC</span>
        </a>

        <a href="#"
            class="flex items-center space-x-3 px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-blue-400 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
            </svg>
            <span class="text-sm font-medium">Mobile</span>
        </a>
    </div> --}}

    <!-- Bottom Section -->
    <div class="border-t border-slate-700 p-4">
        <a href="#"
            class="flex items-center space-x-3 px-2 py-3 text-gray-300 hover:bg-slate-800 hover:text-blue-400 transition rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
            </svg>
            <span class="text-sm font-medium">Carrinho</span>
            <span class="ml-auto bg-blue-500 text-white text-xs px-2 py-0.5 rounded-full">0</span>
        </a>

        <a href="#"
            class="flex items-center space-x-3 px-2 py-3 mt-2 text-gray-300 hover:bg-slate-800 hover:text-blue-400 transition rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <span class="text-sm font-medium">Minha Conta</span>
        </a>
    </div>
</nav>