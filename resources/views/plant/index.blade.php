<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plants list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('All plants:') }}
                    <div class="flex grid gap-2 grid-cols-1 sm:grid sm:gap-4 sm:grid-cols-3 ">
                    @forelse ($plants as $plant)
                        <div class="flex-1 text-center px-2 py-10 bg-white col-span-1 shadow-lg  rounded-2xl  sm:p-6">
                            <a href="plant/{{ $plant['id'] }}" class="text-indigo-500 hover:text-indigo-900 font-semibold">{{ $plant['name'] }}</a>
                        </div>
                    @empty
                        There are no plants added!
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>