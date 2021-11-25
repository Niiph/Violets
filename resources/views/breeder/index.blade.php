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
                    {{ __('Hybridisers list:') }}
                    <div class="flex grid gap-2 grid-cols-1 sm:gap-4 md:grid-cols-2 lg:grid-cols-3 ">
                    @forelse ($breeders as $breeder)
                        <div class="flex-1 text-center px-2 py-4 bg-white col-span-1 shadow-lg  rounded-2xl  sm:p-4">
                            <a href="breeder/{{ $breeder['id'] }}" class="text-indigo-500 hover:text-indigo-900 font-semibold pt-2">{{ $breeder['name'] }}</a>
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