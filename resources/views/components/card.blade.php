<div class="col-lg-4  col-md-4  col-sm-12  cards__item">
    <article class="card" data-card="loadmore-model">
        <a href="{{ url('production', $card['id']) }}" class="card__wrapper-link">
            @isset($card['images'][0]['url'])<img src="{{$card['images'][0]['url']}}" alt="" class="card__image">@endisset
            @empty($card['images'][0]['url'])
            <div class="card__image">
            </div>
            @endempty
            <div class="card__content">
                <h2 class="card__title">{{ $card['titre'] }}</h2>
                <div class="card__producer">
                </div>
                @isset($card['state'])<div class="card__state">
                    <x-fa n="folder" /> {{ $card['state'] }}</div>@endisset
                <div class="card__type">
                    <x-fa n="video" /> {{ $card['type']['titre'] }}</div>
            </div>
        </a>
    </article>
</div>
