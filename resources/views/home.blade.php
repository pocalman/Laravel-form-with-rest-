@extends('layouts.app')

@section('title', 'Collection numérique')

@section('content')
<div class="cards  cards--featured">
    <div class="row cards__row--featured">
        @foreach($featuredCards as $card)
        <x-card_featured :card="$card" />
        @endforeach
    </div>
</div>
<div class="container">

    <div class="spacer"></div>
    @foreach($categories as $category)
    <div class="category">
        <section class="space-bottom">
            <h2 class="category__title text-center">{{$category['titre']}}</h2>
            <div class="cards  row">
                @foreach($category['cards'] as $card)
                <x-card :card="$card" />
                @endforeach
            </div>
        </section>
        <div class="text-center">
            <a id="plus" class="cta  cta--is-arrow-right" href="{{ url('production/?categorie='.$category['slug']) }}">voir plus</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
