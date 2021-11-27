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
                    <a href="/images/{{ $plant->image_path }}" data-lightbox="photos"><img  src="/images/{{ $plant->image_path }}" class="object-cover mb-4 h-96"></a>
                    <ul>
                        <li class="font-bold">
                            {{ $plant->name }} 
                        </li>
                        <li class="font-bold">
                            {{ $plant->original_name ?? '' }} 
                        </li>
                        <li class="italic">
                            Breeder: {{ $plant->breeder->name ?? 'Unknown' }}
                        </li>
                        <li class="text-sm font-bold text-gray-900">
                            Group: {{ $plant->group->name ?? 'Unknown' }}
                        </li>
                        <li class="text-sm font-bold text-gray-900">
                            {{ $plant->description ?? '' }}
                        </li>
                    </ul>
                    @auth
                        <div class="text-left">
                            <a href="{{ url('plant/'. $plant->id) .'/edit'  }}" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 md:h-8 md:w-8 stroke-current text-purple-600 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <title>{{ __('Edit') }}</title>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>    
                            </a>                              
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>