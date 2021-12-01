
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                {{ $locale_name }}
            </a>
        @else
        <a href="{{ url('language/'.  $available_locale) }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
            {{ $locale_name }}
        </a>
        @endif
    @endforeach
