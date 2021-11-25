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
                        <p class="capitalize">{{ $group['name'] }}</p>
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
        
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 md:h-8 md:w-8 stroke-current text-red-400 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>

    </div>

</x-app-layout>