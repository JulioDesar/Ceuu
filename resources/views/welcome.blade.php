<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceuu - Sua loja de jogos digitais</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-900 text-gray-100 antialiased">
    <!-- Header -->
    <nav class="bg-slate-800 border-b border-slate-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <span class="text-xl font-bold text-blue-400">Ceuu</span>
                </div>

                <div class="flex items-center space-x-4">
                    <button class="p-2 text-gray-300 hover:text-blue-400 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <button class="p-2 text-gray-300 hover:text-blue-400 transition relative">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </button>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-300 hover:text-blue-400 transition">
                                Minha Conta
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-300 hover:text-blue-400 transition">
                                Entrar
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-900 via-slate-900 to-slate-800 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Os melhores jogos<br>
                    <span class="text-blue-400">pelos melhores preços</span>
                </h1>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Keys originais, entrega instantânea e suporte em português
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#destaques"
                        class="w-full sm:w-auto bg-blue-600 text-white px-8 py-3 rounded-lg text-base font-medium hover:bg-blue-500 transition shadow-lg shadow-blue-900/50">
                        Ver Ofertas
                    </a>
                    <a href="#"
                        class="w-full sm:w-auto bg-slate-800 text-blue-400 border-2 border-blue-500 px-8 py-3 rounded-lg text-base font-medium hover:bg-slate-700 transition">
                        Catálogo Completo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Games -->
    <section id="destaques" class="py-16 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold text-white">Destaques da Semana</h2>
                <a href="#" class="text-sm text-blue-400 hover:text-blue-300 font-medium transition">Ver todos →</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($offers as $index => $offer)
                    @php
                        $gradients = [
                            'from-blue-500 to-purple-600 group-hover:shadow-blue-500/30',
                            'from-red-500 to-orange-600 group-hover:shadow-red-500/30',
                            'from-green-500 to-teal-600 group-hover:shadow-green-500/30',
                            'from-purple-500 to-pink-600 group-hover:shadow-purple-500/30',
                            'from-yellow-500 to-orange-600 group-hover:shadow-yellow-500/30',
                            'from-indigo-500 to-blue-600 group-hover:shadow-indigo-500/30',
                            'from-pink-500 to-rose-600 group-hover:shadow-pink-500/30',
                            'from-cyan-500 to-blue-600 group-hover:shadow-cyan-500/30',
                        ];
                        $gradientClass = $gradients[$index % count($gradients)];
                    @endphp
                    <div class="group cursor-pointer">
                        <a href="{{ route('game.show', $offer->game->slug) }}">
                            <div
                                class="bg-gradient-to-br {{ $gradientClass }} aspect-[3/4] rounded-lg mb-3 overflow-hidden shadow-lg shadow-black/50 group-hover:shadow-xl transition-all">
                                <div class="w-full h-full group-hover:scale-105 transition-transform duration-300"></div>
                            </div>
                            <h3 class="font-semibold text-gray-100 mb-1 group-hover:text-blue-400 transition">
                                {{ $offer->game->name }}
                            </h3>
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-lg font-bold text-blue-400">
                                    {{ $offer->currency }} {{ number_format($offer->price, 2, ',', '.') }}
                                </span>
                                <span
                                    class="text-xs bg-slate-700 text-gray-300 px-2 py-1 rounded-full font-medium border border-slate-600">
                                    {{ $offer->platform->name }}
                                </span>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-400 text-lg">Nenhuma oferta disponível no momento.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-gradient-to-b from-slate-800 to-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-slate-800 border border-slate-700 p-6 rounded-xl hover:border-blue-500/50 transition text-center">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-blue-900/50">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Entrega Instantânea</h3>
                    <p class="text-gray-400">Receba sua key por email imediatamente após a compra</p>
                </div>

                <div
                    class="bg-slate-800 border border-slate-700 p-6 rounded-xl hover:border-blue-500/50 transition text-center">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-blue-900/50">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">100% Seguro</h3>
                    <p class="text-gray-400">Keys originais e pagamento protegido</p>
                </div>

                <div
                    class="bg-slate-800 border border-slate-700 p-6 rounded-xl hover:border-blue-500/50 transition text-center">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-blue-900/50">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Suporte em PT-BR</h3>
                    <p class="text-gray-400">Atendimento rápido em português</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Cadastre-se e receba ofertas exclusivas</h2>
            <p class="text-lg text-gray-300 mb-8">Seja o primeiro a saber sobre promoções e lançamentos</p>
            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg text-base font-medium hover:bg-blue-500 transition shadow-lg shadow-blue-900/50">
                    Criar Conta Grátis
                </a>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-base font-bold text-blue-400 mb-4">Ceuu</h3>
                    <p class="text-sm text-gray-400">Sua loja de jogos digitais</p>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-gray-200 mb-3">Loja</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-blue-400 transition">Todos os Jogos</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Ofertas</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Lançamentos</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-gray-200 mb-3">Suporte</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-blue-400 transition">Central de Ajuda</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Como Comprar</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-gray-200 mb-3">Legal</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-blue-400 transition">Termos de Uso</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Privacidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-400">&copy; 2026 Ceuu. Todos os direitos reservados.</p>
                <div class="flex items-center gap-2 text-xs text-gray-500">
                    <span>Pagamento seguro</span>
                    <span class="w-1 h-1 bg-gray-600 rounded-full"></span>
                    <span>SSL Criptografado</span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>