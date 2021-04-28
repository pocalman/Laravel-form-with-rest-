<nav class="navigation">
    <div class="navigation__container  container">
        <a class="navigation__logo-link" href="{{ url('/') }}">
            <img class="navigation__logo" src="{{asset('images/llm-logo.svg')}}" alt="logo lien multimedia">
        </a>
        <div class="navigation__menu  menu">
            <input type="checkbox" class="menu__mobile-controller" id="menu-mobile">
            <label class="menu__mobile-icon" for="menu-mobile">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <ul class="menu__lists">
                <li class="sm-only"><form method="POST" action="/recherche" class="simple-search">
                    @csrf
                    <input class="simple-search__input" name="q" placeholder="Recherche" type="text">
                    <button class="simple-search__icon">
                        {!! file_get_contents('images/icon-search.svg') !!}
                    </button>
                </form></li>
                @foreach(config('navigation') as $entry)
                <li class="menu__list @isset($entry['class']) {{$entry['class']}} @endisset">
                    <a href="{{ $entry['url'] }}" class="menu__list-title  menu__list-title--reverse  {{ $entry['entries'] ? 'menu__list-title--has-sub-entries' : '' }}">{{ $entry['name'] }}</a>
                    @if($entry['entries'])
                    <ul class="menu__entries  menu__entries--has-layout  menu__entries--reverse">
                        <ul class="menu__entries-layout">
                            @foreach($entry['entries'] as $subentries)
                                @if(!$subentries['featured'])
                                <li class="menu__entry">
                                    <a href="{{$subentries['url']}}" class="menu__entry-link">{{$subentries['name']}}</a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                        @if($entry['entries_have_featured'])
                        <ul class="menu__entries-layout  menu__entries-layout--feature">
                            @foreach($entry['entries'] as $subentries)
                                @if($subentries['featured'])
                                <li class="menu__entry">
                                    <a href="{{$subentries['url']}}"
                                       class="menu__entry-link menu__entry-link--feature @isset($subentries['class']) {{$subentries['class']}} @endisset"
                                       >{{$subentries['name']}}</a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                        @endif
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
        <div class="navigation__ctas-wrapper">
            <a href="/nos-offres" class="navigation__cta">S'abonner</a>
            {{-- <a href="/nos-offres" class="navigation__cta">Connexion</a> --}}
        </div>
    </div>
</nav>