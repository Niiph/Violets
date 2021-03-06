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
                        <p class="capitalize">{{ $group->name }}</p>
                    <div class="grid gap-2 grid-cols-1 sm:gap-4 md:grid-cols-2 lg:grid-cols-3 ">
                    @forelse ($group->plants as $plant)
                        @include('plant.tab')
                    @empty
                        {{ __('There are no plants in this group!') }}
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>