<div class="col-2  col-md-4  col-sm-4  cards__item cards__item--featured">
  <article class="card  card--featured" data-card="loadmore-model">
    <a href="{{ url('production', $card['id']) }}" class="card__wrapper-link">
      @isset($card['images'][0]['url'])<img src="{{$card['images'][0]['url']}}" alt="" class="card__image">@endisset
      @empty($card['images'][0]['url'])
      <div class="card__image">
      </div>
      @endempty
      <div class="card__content">
        <h2 class="card__title">{{ $card['titre'] }}</h2>
      </div>

    </a>
  </article>
</div>