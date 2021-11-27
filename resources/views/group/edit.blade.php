<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit group') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="relative">
                        <span>
                            {{ __('Update group data:') }}
                        </span>
                        
                    </div>
                    <div>
                        <form action="/group/{{ $group->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 gap-6 mt-6">
                                <label class="block">
                                    <span class="text-gray-700">{{ __('Group name') }}</span>
                                    <input 
                                    type="text"
                                    class="mt-1 block w-80 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="name"
                                    value="{{ $group->name }}">
                                </label>
                                <button class="w-20 mt-4 rounded-md shadow-sm border-2 border-opacity-75 border-indigo-300">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <form action="/group/{{ $group->id }}"
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