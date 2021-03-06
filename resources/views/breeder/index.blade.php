<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Breeders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="relative">
                        <span>
                            {{ __('Breeders list') }}:
                        </span>
                        @auth
                            <a href="{{ url('breeder/create') }}" >
                                <span class="absolute inset-y-0 right-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block stroke-current text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <title>{{ __('Add') }}</title>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                            </a>
                        @endauth
                    </div>
                    <div class="grid gap-2 grid-cols-1 sm:gap-4 md:grid-cols-2 lg:grid-cols-4 ">
                    @forelse ($breeders as $breeder)
                        <div class="flex-1 text-center px-2 py-4 bg-white col-span-1 shadow-lg  rounded-2xl  sm:p-4">
                            <a href="breeder/{{ $breeder->id }}" class="text-indigo-500 hover:text-indigo-900 font-semibold pt-2">
                                {{ $breeder->name }}
                            </a>
                            @auth
                                <div class="text-right">
                                    <a href="{{ url('breeder/'. $breeder->id) .'/edit'  }}" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 md:h-8 md:w-8 stroke-current text-purple-600 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <title>{{ __('Edit') }}</title>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>    
                                    </a>                              
                                </div>
                            @endauth
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