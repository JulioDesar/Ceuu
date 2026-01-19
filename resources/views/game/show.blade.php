<x-layout>
    <x-slot:title>Ceuu - {{ $game->name }}</x-slot:title>

    <div class="max-w-7xl mx-auto">
        <!-- Breadcrumb -->
        <nav class="mb-6 text-sm">
            <ol class="flex items-center space-x-2 text-gray-400">
                <li><a href="/" class="hover:text-blue-400 transition">Início</a></li>
                <li><span class="text-gray-600">/</span></li>
                <li class="text-gray-200">{{ $game->name }}</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Game Image & Gallery -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Main Image -->
                <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl overflow-hidden aspect-video shadow-2xl shadow-black/50">
                    <div class="w-full h-full flex items-center justify-center">
                        <svg class="w-24 h-24 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Thumbnail Gallery -->
                <div class="grid grid-cols-4 gap-3">
                    @for($i = 1; $i <= 4; $i++)
                        <div class="bg-gradient-to-br from-slate-700 to-slate-800 rounded-lg aspect-video cursor-pointer hover:ring-2 hover:ring-blue-400 transition overflow-hidden">
                            <div class="w-full h-full"></div>
                        </div>
                    @endfor
                </div>

                <!-- Game Description -->
                <!-- Adicionar descricao a tabela games posteriormente -->
                <div class="bg-slate-800 border border-slate-700 rounded-xl p-6">
                    <h2 class="text-2xl font-bold text-white mb-4">Sobre o jogo</h2>
                    <div class="text-gray-300 space-y-4 leading-relaxed">
                        <p>
                            Uma experiência incrível de aventura e ação que vai te prender do início ao fim. 
                            Explore mundos vastos, enfrente desafios épicos e descubra segredos escondidos em cada canto.
                        </p>
                        <p>
                            Com gráficos impressionantes e jogabilidade refinada, este título é uma obra-prima moderna 
                            que define novos padrões para o gênero. Prepare-se para horas de entretenimento puro.
                        </p>
                        <p>
                            Recursos principais incluem modo multiplayer cooperativo, vasto mundo aberto para explorar, 
                            sistema de progressão profundo, e conteúdo constante sendo adicionado pelos desenvolvedores.
                        </p>
                    </div>
                </div>

                <!-- System Requirements -->
                <div class="bg-slate-800 border border-slate-700 rounded-xl p-6">
                    <h2 class="text-2xl font-bold text-white mb-6">Requisitos do Sistema</h2>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Minimum -->
                        <div>
                            <h3 class="text-lg font-semibold text-blue-400 mb-4">Mínimos</h3>
                            <dl class="space-y-3 text-sm">
                                <div>
                                    <dt class="text-gray-400 font-medium">SO:</dt>
                                    <dd class="text-gray-200">Windows 10 64-bit</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">Processador:</dt>
                                    <dd class="text-gray-200">Intel Core i5-6600K / AMD Ryzen 5 1600</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">Memória:</dt>
                                    <dd class="text-gray-200">8 GB RAM</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">Placa de vídeo:</dt>
                                    <dd class="text-gray-200">NVIDIA GeForce GTX 1060 / AMD RX 580</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">DirectX:</dt>
                                    <dd class="text-gray-200">Versão 12</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">Armazenamento:</dt>
                                    <dd class="text-gray-200">50 GB disponível</dd>
                                </div>
                            </dl>
                        </div>

                        <!-- Recommended -->
                        <div>
                            <h3 class="text-lg font-semibold text-blue-400 mb-4">Recomendados</h3>
                            <dl class="space-y-3 text-sm">
                                <div>
                                    <dt class="text-gray-400 font-medium">SO:</dt>
                                    <dd class="text-gray-200">Windows 11 64-bit</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">Processador:</dt>
                                    <dd class="text-gray-200">Intel Core i7-8700K / AMD Ryzen 7 3700X</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">Memória:</dt>
                                    <dd class="text-gray-200">16 GB RAM</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">Placa de vídeo:</dt>
                                    <dd class="text-gray-200">NVIDIA GeForce RTX 3060 / AMD RX 6700 XT</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">DirectX:</dt>
                                    <dd class="text-gray-200">Versão 12</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-400 font-medium">Armazenamento:</dt>
                                    <dd class="text-gray-200">50 GB disponível (SSD recomendado)</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="bg-slate-800 border border-slate-700 rounded-xl p-6">
                    <h2 class="text-2xl font-bold text-white mb-4">Características</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-blue-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-200">Um jogador</h4>
                                <p class="text-sm text-gray-400">Campanha completa solo</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-blue-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-200">Multijogador online</h4>
                                <p class="text-sm text-gray-400">Jogue com amigos online</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-blue-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-200">Conquistas</h4>
                                <p class="text-sm text-gray-400">50+ conquistas para desbloquear</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-blue-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-200">Suporte a controle</h4>
                                <p class="text-sm text-gray-400">Compatível com Xbox/PS controllers</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-blue-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-200">Trading Cards</h4>
                                <p class="text-sm text-gray-400">Colecione cards da Steam</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-blue-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-200">Legendas em PT-BR</h4>
                                <p class="text-sm text-gray-400">Interface e legendas em português</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Purchase Options -->
            <div class="lg:col-span-1">
                <div class="sticky top-6 space-y-6">
                    <!-- Game Title & Info -->
                    <div>
                        <h1 class="text-3xl font-bold text-white mb-2">{{ $game->name }}</h1>
                        <div class="flex items-center space-x-4 text-sm text-gray-400">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                4.5/5 (1.2k avaliações)
                            </span>
                        </div>
                    </div>

                    @if($offers->isNotEmpty())
                        <!-- Offers -->
                        <div class="space-y-3">
                            @foreach($offers as $offer)
                                <div class="bg-slate-800 border-2 border-slate-700 hover:border-blue-500 rounded-xl p-5 transition group">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z"></path>
                                                <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"></path>
                                                <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                                            </svg>
                                            <span class="text-sm font-medium text-gray-300">{{ $offer->platform->name }}</span>
                                        </div>
                                        <span class="text-xs bg-green-500/20 text-green-400 px-2 py-1 rounded-full font-medium border border-green-500/30">
                                            Em estoque
                                        </span>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <div class="text-3xl font-bold text-blue-400">
                                            {{ $offer->currency }} {{ number_format($offer->price, 2, ',', '.') }}
                                        </div>
                                        <p class="text-xs text-gray-400 mt-1">Entrega instantânea por email</p>
                                    </div>

                                    <button class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-4 rounded-lg transition shadow-lg shadow-blue-900/50 group-hover:shadow-blue-900/70 flex items-center justify-center space-x-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        <span>Adicionar ao Carrinho</span>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="bg-slate-800 border border-slate-700 rounded-xl p-6 text-center">
                            <svg class="w-12 h-12 text-gray-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                            </svg>
                            <p class="text-gray-400 font-medium">Produto indisponível</p>
                            <p class="text-sm text-gray-500 mt-1">Entre na lista de espera</p>
                            <button class="mt-4 w-full bg-slate-700 hover:bg-slate-600 text-gray-300 font-medium py-2 px-4 rounded-lg transition">
                                Notificar quando disponível
                            </button>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="space-y-3">
                        <button class="w-full bg-slate-800 hover:bg-slate-700 border-2 border-slate-700 hover:border-blue-500 text-gray-200 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                            <span>Adicionar à Wishlist</span>
                        </button>

                        <button class="w-full bg-slate-800 hover:bg-slate-700 border-2 border-slate-700 hover:border-blue-500 text-gray-200 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            <span>Criar Alerta de Preço</span>
                        </button>

                        <button class="w-full bg-slate-800 hover:bg-slate-700 border-2 border-slate-700 hover:border-blue-500 text-gray-200 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                            <span>Compartilhar</span>
                        </button>
                    </div>

                    <!-- Trust Badges -->
                    <div class="bg-slate-800 border border-slate-700 rounded-xl p-5">
                        <h3 class="font-semibold text-gray-200 mb-4 text-sm">Por que comprar na Ceuu?</h3>
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-200">Entrega instantânea</p>
                                    <p class="text-xs text-gray-400">Receba a key por email imediatamente</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-200">Keys originais</p>
                                    <p class="text-xs text-gray-400">100% oficiais e verificadas</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-200">Suporte em PT-BR</p>
                                    <p class="text-xs text-gray-400">Atendimento rápido e em português</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-200">Pagamento seguro</p>
                                    <p class="text-xs text-gray-400">Criptografia SSL e múltiplos métodos</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="bg-slate-800 border border-slate-700 rounded-xl p-5 text-sm space-y-2">
                        <div class="flex justify-between text-gray-400">
                            <span>Desenvolvedor:</span>
                            <span class="text-gray-200 font-medium">Game Studio</span>
                        </div>
                        <div class="flex justify-between text-gray-400">
                            <span>Publicadora:</span>
                            <span class="text-gray-200 font-medium">Publisher Inc.</span>
                        </div>
                        <div class="flex justify-between text-gray-400">
                            <span>Lançamento:</span>
                            <span class="text-gray-200 font-medium">15 Jan 2026</span>
                        </div>
                        <div class="flex justify-between text-gray-400">
                            <span>Gênero:</span>
                            <span class="text-gray-200 font-medium">Ação, Aventura</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
