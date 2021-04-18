<x-app-layout>
    <x-slot name="header">
     {{ $album->title }}
    </x-slot>

    <div class="container mx-auto m-2 p-2 bg-white shadow-md rounded-lg">
<img src="{{ $image->getUrl() }}" alt="Original iamge">
</x-app-layout>