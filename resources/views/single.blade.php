@extends('layouts.app')

@section('title', $single['titre'])

@section('content')
<div class="single">
    <div class="single__carousel">
        @foreach($single['images'] as $image)
        <span class="single__carousel-item">
            <img class="single__carousel-item-image" src="{{$image['url']}}" alt="{{$single['titre']}} - {{$image['credit']}}">
            @if( isset($image['credit']) || isset($image['description']) )
            <div class="single__carousel-item-legend">
                {{$image['titre']}} -
                {{$image['credit']}}
            </div>
            @endif
        </span>
        @endforeach
    </div>
    <div>
        <section class="container single__subheader-wrapper">
            <div class="row">
                <div class="col-8-lg  col-md-12">
                    <h1 class="single__title">
                        {{ $single['titre'] }}
                    </h1>
                    @foreach($single['entetes'] as $entete)
                    <div class="single__role">
                        <span class="single__role-legend">{{$entete['categorie_generique']}} :</span>
                        <span class="single__role-name">{{$entete['nom']}} <a href="{{$entete['url']}}">{{$entete['entreprise']}}</a></span>
                    </div>
                    @endforeach
                    <div class="single__metas-wrapper">
                        <span class="single__meta">
                            @if($single['type']['titre'] != '')
                            <span class="single__meta">
                                <x-fa n="video" /> {{ $single['type']['titre'] }}
                            </span>
                            @endif
                            @if(count($single['languages']['vo']) > 0)
                            <span class="single__meta">
                                <x-fa n="globe-americas" />
                                @foreach( $single['languages']['vo'] as $item)
                                {{$item}}@if($item != end($single['languages']['vo'])){{', '}}@endif
                                @endforeach
                            </span>
                            @endif
                            @if($single['duree'] != '')
                            <span class="single__meta">
                                <x-fa n="clock" /> {{ $single['duree'] }}
                            </span>
                            @endif
                            @if($single['nbr_episodes'] != '')
                            <span class="single__meta">
                                <x-fa n="hashtag" /> {{ $single['nbr_episodes'] }} épisodes
                            </span>
                            @endif
                    </div>
                    <div class="single__status">
                        @foreach( $states as $state => $label )
                        <div class="single__status-step @if($single['current_state'] == $state) {{ 'single__status-step--is-active'}} @endif">{{ $label }}</div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="single__advertisment-wrapper text-center">
                        <x-ad id="cn-bigbox-1" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="single__complementary-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-8-lg  col-md-12">

                    <x-single_block icon="folder" title="Présentation" show="{{$single['presentation']}}">
                        {!! nl2br(e($single['presentation'])) !!}
                    </x-single_block>

                    <x-single_block icon="folder" title="Générique" show="{{count($single['generiques'])}}">
                        @foreach($single['generiques'] as $type_generique => $generique_list)
                        <strong>{{$type_generique}}</strong>
                        <table>
                            @foreach( $generique_list as $generique_item )
                            <tr>
                                @if(isset($generique_item['url']))
                                    <td><a target="_blank" href="{{ $generique_item['url'] }}">{{ $generique_item['nom'] }}</a></td>
                                @else
                                    <td>{{ $generique_item['nom'] }}</td>
                                @endif

                                @if(isset($generique_item['url_entreprise']) && isset($generique_item['entreprise']))
                                    <td>(<a target="_blank" href="{{ $generique_item['url_entreprise'] }}">{{ $generique_item['entreprise'] }}</a>)</td>
                                @elseif (isset($generique_item['entreprise']))
                                    <td>({{ $generique_item['entreprise'] }})</td>
                                @else
                                    <td></td>
                                @endif

                                <td>{{ $generique_item['role'] }}</td>
                            </tr>
                            @endforeach
                        </table>
                        <div class="spacer"></div>
                        @endforeach
                    </x-single_block>

                    <x-single_block icon="folder" title="Dates clés" show="{{count($single['key_dates'])+count($single['diffusions'])}}">
                        @if(count($single['key_dates']) > 0)
                        <strong>Calendrier de production</strong>
                        <table>
                            @foreach( $single['key_dates'] as $state_label => $date )
                            @if( key_exists($state_label, $single['key_dates']) )
                            <tr>
                                <td>{{ $state_label }}</td>
                                <td>{{ $date }}</td>
                            </tr>
                            @endif
                            @endforeach
                        </table>
                        @endif
                        @if(count($single['diffusions']) > 0)
                        <div class="spacer"></div>
                        <strong>Diffusions</strong>
                        <table>
                            @foreach( $single['diffusions'] as $diffusion )
                            <tr>
                                <td>
                                    <a href="{{ $diffusion['url'] }}">{{ $diffusion['titre'] }}</a>
                                </td>
                                <td>{{ $diffusion['date'] }}</td>
                            </tr>
                            @endforeach
                        </table>
                        @endif
                    </x-single_block>

                    <div searchParam="{{$searchParam}}">
                        <x-single_block icon="folder" title="Articles associés à cette production" show="{{count($articles)}}">
                            <ul class="single__complementary-block__list">
                                @foreach( $articles as $article )
                                <li points="{{$article['points']}}">
                                    <a class="single__complementary-block-link single__complementary-block-link--article" href="{{$article['url_article']}}">{{html_entity_decode($article['titre'])}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </x-single_block>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 single__complementary-sidebar">

                    <x-single_sideblock icon="folder" title="Spécifications">

                        <x-single_sideblockentry icon="video" show="{{ $single['type']['titre'] }}">
                            {{ $single['type']['titre'] }}
                        </x-single_sideblockentry>
                        <x-single_sideblockentry icon="tags" show="{{count($single['genres'])}}">
                            @foreach( $single['genres'] as $genre )
                            {{$genre['genres_id']['titre']}}@if($genre != end($single['genres'])){{', '}}@endif
                            @endforeach
                        </x-single_sideblockentry>
                        <x-single_sideblockentry icon="language" show="{{ count($single['languages']['vo']) + count($single['languages']['sous-titres']) + count($single['languages']['doublage']) }}">
                            <x-single_sideblockentry show="{{count($single['languages']['vo'])}}" hr="no">
                                <strong>VO :</strong>
                                @foreach( $single['languages']['vo'] as $item)
                                {{$item}}@if($item != end($single['languages']['vo'])){{', '}}@endif
                                @endforeach
                                <br />
                            </x-single_sideblockentry>
                            <x-single_sideblockentry show="{{count($single['languages']['sous-titres'])}}" hr="no">
                                <strong>Sous-titres :</strong>
                                @foreach( $single['languages']['sous-titres'] as $item)
                                {{$item}}@if($item != end($single['languages']['sous-titres'])){{', '}}@endif
                                @endforeach
                                <br />
                            </x-single_sideblockentry>
                            <x-single_sideblockentry show="{{count($single['languages']['doublage'])}}" hr="no">
                                <strong>Doublage :</strong>
                                @foreach( $single['languages']['doublage'] as $item)
                                {{$item}}@if($item != end($single['languages']['doublage'])){{', '}}@endif
                                @endforeach
                            </x-single_sideblockentry>

                        </x-single_sideblockentry>

                        <x-single_sideblockentry icon="bullseye" show="{{$single['clientele']}}">
                            {{ $single['clientele'] }}
                        </x-single_sideblockentry>

                        <x-single_sideblockentry icon="hashtag" show="{{$single['nbr_episodes']}}">
                            {{ $single['nbr_episodes'] }} épisodes
                        </x-single_sideblockentry>

                    </x-single_sideblock>

                    <div class="single__complementary-sidebar-wrapper text-center">
                        <x-ad id="cn-bigbox-2" />
                    </div>

                    <div class="spacer"></div>

                    <x-single_sideblock title="[Co]Production" show="{{($single['budget'] || count($single['copros']) || $single['copro_requested'] || $single['contact'])}}">
                        <x-single_sideblockentry icon="dollar-sign" show="{{$single['budget']}}">
                            <strong>Budget :</strong> {{ $single['budget'] }}
                        </x-single_sideblockentry>

                        <x-single_sideblockentry icon="handshake" show="{{count($single['copros'])}}">
                            <strong>Coproducteur(s):</strong> <br />
                            @foreach( $single['copros'] as $copro )
                            @isset($copro['entites_id'])
                            <a href="{{$copro['entites_id']['web']}}">
                                {{$copro['entites_id']['nom']}}
                            </a> ({{$copro['entites_id']['pays']}})@if($copro != end($single['copros'])){{', '}}@endif
                            @endif
                            @endforeach
                        </x-single_sideblockentry>

                        <x-single_sideblockentry icon="bullhorn" show="###">
                            <strong>Recherche de coproducteurs:</strong> <br />
                            Non précisé
                        </x-single_sideblockentry>

                        <x-single_sideblockentry icon="at" show="{{$single['contact']}}">
                            {{$single['contact']}}
                        </x-single_sideblockentry>
                    </x-single_sideblock>

                    <div class="single__complementary-sidebar-wrapper text-center">
                        <x-ad id="cn-bigbox-3" />
                    </div>

                    <div class="spacer"></div>

                    <x-single_sideblock title="Présence en ligne" show="{{
                            strlen($single['website'])
                            +strlen($single['facebook'])
                            +strlen($single['twitter'])
                            +strlen($single['youtube'])
                            +strlen($single['vimeo'])
                            }}">
                        <x-single_sideblockentry icon="globe" show="{{strlen($single['website'])}}">
                            <a href="{{$single['website']}}">{{$single['website']}}</a>
                        </x-single_sideblockentry>
                        <x-single_sideblockentry icon="facebook-square fab" show="{{strlen($single['facebook'])}}">
                            <a href="{{$single['facebook']}}">Page facebook</a>
                        </x-single_sideblockentry>
                        <x-single_sideblockentry icon="twitter-square fab" show="{{strlen($single['twitter'])}}">
                            <a href="{{$single['twitter']}}">Compte twitter</a>
                        </x-single_sideblockentry>
                    </x-single_sideblock>
                </div>

            </div>
        </div>

</div>
</section>
</div>
@endsection
