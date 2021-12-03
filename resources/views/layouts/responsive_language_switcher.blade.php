
    @foreach($available_locales as $locale_name => $available_locale)
    @if($available_locale === $current_locale)
        <a class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">
            {{ $locale_name }}
        </a>
    @else
    <a href="{{ url('language/'.  $available_locale) }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
        {{ $locale_name }}
    </a>
    @endif
@endforeach
