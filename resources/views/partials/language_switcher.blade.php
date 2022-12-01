<div>
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <span>{{ $locale_name }}</span>
        @else
            <a href="language/{{ $available_locale }}">
                <span>{{ $locale_name }}</span>
            </a>
        @endif
    @endforeach
</div>
