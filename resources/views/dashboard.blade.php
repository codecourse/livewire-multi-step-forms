<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <livewire:products.create.create-product />
            {{-- <livewire:things.create.create-thing /> --}}
        </div>
    </div>
</x-app-layout>
