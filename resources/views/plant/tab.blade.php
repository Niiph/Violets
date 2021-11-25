<div class="flex-1 text-center px-2 py-4 bg-white col-span-1 shadow-lg  rounded-2xl  sm:p-4">
    <a href="{{ url('plant/'. $plant['id'])  }}">
        <img  src="{{ url('images/'.$plant['id']) }}.jpg" class="object-cover mb-2 w-96 h-80">
        <p class="text-indigo-500 hover:text-indigo-900 font-semibold pt-2">
            {{ $plant['name'] }}
        </p>
        
    </a>
    @auth
        <div class="text-right">
            <a href="{{ url('plant/'. $plant['id']) .'/edit'  }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 md:h-8 md:w-8 stroke-current text-purple-600 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <title>Edit</title>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>    
            </a>                              
        </div>
    @endauth
</div>