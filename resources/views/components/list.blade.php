@props([
    'title',
    'items',
    'columns' => [],
    'createRoute' => null,
    'editRoute' => null,
    'deleteRoute' => null,
])

<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-white">{{ $title }}</h1>
        @if(isset($createRoute))
            <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                href="{{ route($createRoute) }}">
                Adicionar
            </a>
        @endif
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    @foreach($columns as $column)
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ $column['label'] }}
                        </th>
                    @endforeach
                    @if(isset($editRoute) || isset($deleteRoute))
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ações
                        </th>
                    @endif
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($items as $item)
                    <tr class="hover:bg-gray-50">
                        @foreach($columns as $column)
                            <td class="px-6 py-4 whitespace-nowrap text-sm {{ $column['class'] ?? 'text-gray-900' }}">
                                @if(isset($column['format']))
                                    @if($column['format'] === 'date')
                                        {{ data_get($item, $column['field'])?->format('d/m/Y H:i') }}
                                    @else
                                        {{ $column['format'](data_get($item, $column['field'])) }}
                                    @endif
                                @else
                                    {{ data_get($item, $column['field']) }}
                                @endif
                            </td>
                        @endforeach
                        @if(isset($editRoute) || isset($deleteRoute))
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                @if(isset($editRoute))
                                    <a href="{{ route($editRoute, $item->id) }}"
                                        class="text-blue-600 hover:text-blue-900 mr-3">Editar</a>
                                @endif
                                @if(isset($deleteRoute))
                                    <form action="{{ route($deleteRoute, $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 mr-3 cursor-pointer">Excluir</button>
                                    </form>
                                @endif
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>