<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plant details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('Plant:') }}
                    <img  src="/images/{{ $plant->id }}.jpg" class="object-cover mb-4 h-96">
                    <ul>
                        <li class="font-bold">
                            {{ $plant->name }} 
                        </li>
                        <li class="italic">
                            {{ $plant->breeder->name }}
                        </li>
                        <li class="text-sm font-bold text-gray-900">
                            {{ $plant->group->name }}
                        </li>
                            
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>