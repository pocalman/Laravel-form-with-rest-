@extends('layouts.app')

@section('title', 'Rechercher dans la Collection numérique')

@section('content')
<div class="container mt-20">
    @if(isset($q) || isset($categorie) || isset($genre) || isset($cible) )
    <hgroup>
        <h1>Résultats de recherche</h1>
        <p>par
            @isset($q)mot-clé&nbsp;:&nbsp;{{$q}}@endisset
            @isset($categorie)catégorie&nbsp;:&nbsp;{{$categorie}}@endisset
            @isset($genre)genre&nbsp;:&nbsp;{{$genre}}@endisset
            @isset($clientele)clientèle cible&nbsp;:&nbsp;{{$clientele}}@endisset
        </p>
    </hgroup>
    @else
    <h1>Recherche</h1>
    @endif
    <div class="category">
        <div class="cards  row">
            @foreach($cards as $card)
            @include('components.card')
            @endforeach
        </div>
        @if(count($cards) >= 15 * $limit)
        <div class="text-center">
            <a id="plus" class="cta  cta--is-arrow-right" href="{{ url('recherche?'. http_build_query(['q' => $q, 'categorie' => $categorie, 'genre' => $genre, 'clientele' => $clientele, 'limit' => $limit+1])) }}">voir plus</a>
        </div>
        @endif
    </div>
    <div class="spacer"></div>
</div>
@endsection
