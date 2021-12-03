<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plant details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white  ">
                    <a href="/images/{{ $plant->image_path }}" data-lightbox="photos"><img class="float-left mb-4 mr-4 sm:h-96 object-cover" src="/images/{{ $plant->image_path }}" ></a>
                    <ul>
                        <li class="font-bold text-xl">
                            {{ $plant->name }} <span class="italic"> {{  $plant->original_name ?? '' }} </span>
                        </li>
                        <li class="text-lg">
                            {{ __('Breeder') }}: <a class="hover:text-indigo-500" href="{{ url('breeder/'. $plant->breeder_id) }}" >{{ $plant->breeder->name ?? __('Unknown') }} <span class="italic"> {{ $plant->breeder->original_name ?? '' }} </span></a>
                        </li>
                        <li class="text-base text-gray-900">
                            {{ __('Group') }}: <a class="hover:text-indigo-500" href="{{ url('group/'. $plant->group_id) }}" >{{ $plant->group->name ?? __('Unknown') }}</a>
                            @if ($plant->chimera == 1)
                                 chimera                              
                            @endif
                        </li>
                        <li class="text-base text-gray-900 mt-4">
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