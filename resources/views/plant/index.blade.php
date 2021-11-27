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
                    <div class="relative">
                        <span>
                            {{ __('All plants:') }}
                        </span>
                        @auth
                            <a href="{{ url('plant/create') }}" >
                                <span class="absolute inset-y-0 right-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block stroke-current text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <title>{{ __('Add') }}</title>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                            </a>
                        @endauth
                    </div>
                    <div class="grid gap-2 grid-cols-1 sm:gap-4 md:grid-cols-2 lg:grid-cols-3 ">
                    @forelse ($plants as $plant)
                        @include('plant.tab')
                    @empty
                        {{ __('There are no plants added!') }}
                    @endforelse
                    </div>
                    <div class="pt-6">
                        {{ $plants->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>