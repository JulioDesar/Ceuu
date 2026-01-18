<x-layout>
    <x-list 
        title="Usuários" 
        :items="$users"
        :columns="[
            ['label' => 'ID', 'field' => 'id', 'class' => 'text-gray-900'],
            ['label' => 'Nome', 'field' => 'name', 'class' => 'font-medium text-gray-900'],
            ['label' => 'Email', 'field' => 'email', 'class' => 'text-gray-500'],
            ['label' => 'Criado em', 'field' => 'created_at', 'format' => 'date', 'class' => 'text-gray-500'],
        ]"
        createRoute="user.create"
        editRoute="user.edit"
        deleteRoute="user.destroy"
    />
</x-layout>