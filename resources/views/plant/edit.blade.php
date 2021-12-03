<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit plant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="relative">
                        <span>
                            {{ __('Update plant data:') }}
                        </span>
                        @include('layouts.errors')
                    </div>
                    <div>
                        <form action="/plant/{{ $plant->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 gap-6 mt-6">
                                
                                <label class="block">
                                    <span class="text-gray-700">{{ __('Plant name') }}</span>
                                    <input 
                                    type="text"
                                    class="mt-1 block w-80 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="name"
                                    value="{{ $plant->name }}"
                                    required>
                                </label>

                                <label class="block">
                                    <span class="text-gray-700">{{ __('Original name') }}</span>
                                    <input 
                                    type="text"
                                    class="mt-1 block w-80 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="original_name"
                                    value="{{ $plant->original_name }}">
                                </label>

                                <label class="block">
                                    <span class="text-gray-700">{{ __('Description') }}</span>
                                    <textarea 
                                    class="mt-1 block w-80 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    rows="3"
                                    name="description">{{ $plant->description }}</textarea>
                                </label>

                                <label class="block">
                                    <span class="text-gray-700">{{ __('Breeder') }}</span>
                                    <div>
                                        <select class="js-example-basic-single mt-1 block w-80 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 "
                                        name="breeder_id">
                                            @forelse ($breeders as $breeder)
                                                <option 
                                                value="{{ $breeder->id }}"
                                                @if($breeder->id == $plant->breeder_id)
                                                selected
                                                @endif>{{ $breeder->name }} {{ $breeder->original_name ?? ''}} {{ $breeder->shortcut ?? ''}}</option>
                                            @empty
                                                
                                            @endforelse
                                        </select>
                                    </div>
                                </label>

                                <label class="block">
                                    <span class="text-gray-700">{{ __('Group') }}</span>
                                    <div>
                                        <select class="js-example-basic-single mt-1 block w-80 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="group_id">
                                            @forelse ($groups as $group)
                                                <option 
                                                value="{{ $group->id }}"
                                                @if($group->id == $plant->group_id)
                                                selected
                                                @endif>{{ $group->name }}</option>
                                            @empty                                            
                                            @endforelse
                                        </select>
                                    </div>
                                </label>

                                <div class="block">
                                    <div class="mt-2">
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input name="chimera" type="checkbox" class="
                                                    rounded
                                                    border-gray-300
                                                    text-indigo-600
                                                    shadow-sm
                                                    focus:border-indigo-300
                                                    focus:ring
                                                    focus:ring-offset-0
                                                    focus:ring-indigo-200
                                                    focus:ring-opacity-50 "
                                                    @if($plant->chimera == 1) 
                                                        checked=""
                                                    @endif>
                                                <span class="ml-2">Chimera</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <label class="block">
                                    <span class="text-gray-700">{{ __('Image') }}</span>
                                    <input 
                                    type="file"
                                    class="mt-1 block w-80 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="image"
                                    accept="image/png,image/jpg,image/jpeg">
                                </label>

                                <button class="w-20 mt-4 rounded-md shadow-sm border-2 border-opacity-75 border-indigo-300">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <form action="/plant/{{ $plant->id }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="w-20 mt-6 rounded-md shadow-sm border-2 border-opacity-75 border-red-500">
                                {{ __('Delete') }}
                            </button>
                        </form>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

</x-app-layout>