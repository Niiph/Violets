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
                    {{ __('All plants:') }}
                    <div class="flex grid gap-2 grid-cols-1 sm:gap-4 md:grid-cols-2 lg:grid-cols-3 ">
                    @forelse ($group as $plant)
                        <div class="flex-1 text-center px-2 py-4 bg-white col-span-1 shadow-lg  rounded-2xl  sm:p-4">
                            <a href="{{ url('plant/'. $plant['id'])  }}"><img  src="{{ url('images/'.$plant['id']) }}.jpg" class="object-cover mb-4 w-96 h-80"></a>
                            <a href="{{ url('plant/'. $plant['id'])  }}" class="text-indigo-500 hover:text-indigo-900 font-semibold pt-2">{{ $plant['name'] }}</a>
                        </div>
                    @empty
                        {{ __('There are no plants in this group!') }}
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>