<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <div class="p-8 mt-4 md:mt-0 md:ml-6">
                    <div class="py-3 uppercase tracking-wide text-2xl font-bold">
                    Your Orders
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
