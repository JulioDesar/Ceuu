<x-layout>
    <x-list title="Jogos" :items="$games" :columns="[
        ['label' => 'ID', 'field' => 'id', 'class' => 'text-gray-900'],
        ['label' => 'Game', 'field' => 'name', 'class' => 'font-medium text-gray-900'],
        ['label' => 'Slug', 'field' => 'slug', 'class' => 'text-gray-500'],
        ['label' => 'Criado em', 'field' => 'created_at', 'format' => 'date', 'class' => 'text-gray-500'],
    ]" />
</x-layout>