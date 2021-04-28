<header class="header">
    <div class="container">
        <div class="header__row">
            <h1 class="header__title col-lg-auto col-sm-12">
                <a class="header__title-link" href="/" title="Accueil">{{Theme::getSetting('title', 'Guide')}}
                    <svg class="header__title-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M541 229.16l-232.85-190a32.16 32.16 0 0 0-40.38 0L35 229.16a8 8 0 0 0-1.16 11.24l10.1 12.41a8 8 0 0 0 11.2 1.19L96 220.62v243a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-128l64 .3V464a16 16 0 0 0 16 16l128-.33a16 16 0 0 0 16-16V220.62L520.86 254a8 8 0 0 0 11.25-1.16l10.1-12.41a8 8 0 0 0-1.21-11.27zm-93.11 218.59h.1l-96 .3V319.88a16.05 16.05 0 0 0-15.95-16l-96-.27a16 16 0 0 0-16.05 16v128.14H128V194.51L288 63.94l160 130.57z"/></svg>
                </a>
            </h1>
            <form method="GET" action="/recherche" class="col-lg-auto col-sm-12 simple-search header__search">
                <input class="simple-search__input" name="q" placeholder="Recherche" type="text">
                <button class="simple-search__icon">
                  {!! file_get_contents('images/icon-search.svg') !!}
                </button>
            </form>
            <nav class="header__menu  menu" class="col-lg-auto col-sm-12">
                <ul class="menu__lists">
                    @foreach(config('header.' . Theme::get()) as $entry)
                    <li class="menu__list">
                        <a href="{{ $entry['url'] }}" class="menu__list-title">{{ $entry['name'] }}</a>
                        @if($entry['entries'])
                        <ul class="menu__entries">
                            @foreach($entry['entries'] as $subentries)
                            <li class="menu__entry">
                                <a href="{{ $subentries['url'] }}" class="menu__entry-link">
                                    {{ $subentries['name'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </nav>
            <div class="header__nav-button-wrapper col-lg-auto col-sm-12">
                <a class="header__nav-button cta col-lg-auto col-sm-12" href="/explorer">Explorer</a>
                <a href="{{ url('nos-offres') }}" class="header__nav-button cta--primary col-lg-auto col-sm-12">Ajouter votre projet</a>
            </div>
        </div>
        @yield('sub-header')
    </div>
</header>
