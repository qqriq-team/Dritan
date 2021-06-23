      @foreach (config('app.languages') as $locale)
          <a class="nav-link"
             href="{{ route('setLocaleRout', $locale) }}"
             style="font-weight: bold; text-decoration: underline">
            @if (app()->getLocale() == $locale)
             {{ strtoupper($locale) }}
             @endif
            </a>
    
       @endforeach