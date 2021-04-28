@extends('layouts.app')

@section('title', 'Explorer la Collection numérique')

@section('content')
    <div class="container">
        <div class="explore">
            <h1>Explorer</h1>
            <nav class="">
                <ul class="row explore__row menu--explore">
                    @isset($categories)
                        <li class="menu--explore__list col-6 col-xs-12">
                            <h3 class="menu--explore__list-title">Par catégorie</h3>
                            <ul class="menu--explore__entries row">
                                @foreach($categories as $categorie)
                                <li class="menu--explore__entry col-12">
                                    <a href="/recherche/?categorie={{$categorie['slug']}}" class="menu--explore__entry-link">{{$categorie['titre']}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    @endisset

                    @foreach(config('explore.' . Theme::get()) as $menuEntry)
                        <li class="menu--explore__list {{$menuEntry['class']}}">
                            <h3 class="menu--explore__list-title">
                                <a href="{{$menuEntry['url']}}" class="menu--explore__list-title-link">{{Str::of($menuEntry['name'])->trim(' ')}}</a>
                            </h3>
                            <ul class="menu--explore__entries row">
                                @foreach($menuEntry['entries'] as $subMenuEntry)
                                <li class="menu--explore__entry {{$subMenuEntry['class']}}">
                                    <a href="{{$subMenuEntry['url']}}" class="menu--explore__entry-link">{{Str::of($subMenuEntry['name'])->trim(' ')}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach

                    @isset($genres)
                        <li class="menu--explore__list col-12">
                            <h3 class="menu--explore__list-title">Par Genre</h3>
                            <ul class="menu--explore__entries row">
                                @foreach($genres as $genre)
                                <li class="menu--explore__entry col-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/recherche/?genre={{$genre['slug']}}" class="menu--explore__entry-link">{{$genre['titre']}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    @endisset
                </ul>
            </nav>
        </div>
    </div>
@endsection