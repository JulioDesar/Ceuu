<x-layout>
    <div>
        @foreach ($keys as $key)
            <p>{{ $key->key }}</p>
        @endforeach
    </div>
</x-layout>