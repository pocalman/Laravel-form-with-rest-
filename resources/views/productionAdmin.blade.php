@extends('layouts.app')

@section('title', 'Ajouter votre projet')

@section('content')

<head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



</head>

<div class="container-form">

    <h1>Ajouter votre projet</h1>
    <h2>Faites-nous savoir ! Faites-vous voir !</h2>
    <p class="text--dark">La COLLECTION NUMÉRIQUE du Lien MULTIMÉDIA met en valeur et facilite la découvrabilité des productions québécoises en jeu vidéo, arts numériques et immersifs, réalité virtuelle, animation et applications mobiles culturelles, entre autres. Cette plateforme témoigne et démontre l'effervescence et la créativité de l'industrie du numérique au Québec.</p>
    <h2>C'est gratuit!</h2>
    <p class="text--dark">Inscrivez les informations relatives à vos productions en cours. Elles seront versées gratuitement dans notre base de données et accessibles aux abonnés de notre site Internet. Il est à noter que les champs avec les astérix sont requis.</p>
    <p class="text--dark">Cliquez sur l’icône &#x25C1 pour remplir les sections et cliquez sur l’icône &#x25BD pour masquer certaines sections.</p>



                    <!--<a class="accordion">Section 1</a>
            <div class="panel">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div> -->


    <form action="{{ url('/admin/production/creer') }}" method="POST">
        @csrf



        <section class="pb-2">
            <a class="atitle accordion2"
            style="cursor:pointer;"
            data-toggle="collapse"
            href="#collapsePrime"
            role="button"
            aria-expanded="true"
            aria-controls="collapseExample"

            >

            <span class="atitle text-white">Présentation</span>
            </a>
            <div class="separateur panel margintoprem2 collapse show margintoprem3" id="collapsePrime">
                <div class="row">
                    <fieldset class="col-12 col-xl-10 col-lg-10 col-md-10" >
                        <label for="titre"  >Titre<span class="red"> *</span>  <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Ce champ est obligatoire. Si votre projet n’a pas encore de titre, inscrivez un titre temporaire."><sup class="circle">?</sup></span></label>
                        <input required name="titre"  type="text">

                    </fieldset>
                    <fieldset class="col-12 col-xl-2 col-lg-2 col-md-2" >
                        <label for="saison">Saison</label>
                        <input name="saison" type="number" id="saison" maxlength="2" pattern="[0-9]{1,2}" type="text" min="1" max="99" datspana-toggle="tooltip" data-placement="top" title="Inscrivez le numéro de la saison si cela s’applique (série télé, websérie)..">
                    </fieldset>
                    <fieldset class="col-12">
                        <label for="maison_production">Maison de production <span class="red"> *</span><span class="top" datspana-toggle="tooltip" data-placement="top"  title="Ce champ est obligatoire. Inscrivez la maison de production sous laquelle sera listée la production. Servez-vous du champ à autocomplétion pour ajouter l’entreprise : inscrivez au moins les 3 premières lettres de celle-ci et cliquez sur le nom de l’entreprise."><sup class="circle">?</sup></span></label>
                        <select name="maison_production" size="1">
                            <option selected="selected" disabled>Choisir</option>
                            @foreach($entites as $entite)
                            <option value="{{$entite['id']}}"  >{{$entite['nom']}}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="col-12">
                        <label for="presentation">Synopsis</label>
                        <textarea  name="presentation" id="presentation" cols="30" rows="8"></textarea>
                    </fieldset>
                    <fieldset class="col-12">
                        <label for="synopsis_en">Synopsis (anglais) </label>
                        <textarea name="synopsis_en"  id="synopsis_en" cols="30" rows="5"></textarea>
                    </fieldset>
                </div>
            </div>
        </section>

        <section class="pb-2 margintoprem3">
        <a class="atitle"
            style="cursor:pointer;"
            data-toggle="collapse"
            href="#collapse0"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample"

            >

            <span class="accordion text-white atitle">Détails</span>
            </a>
            <div class="collapse separateur panel margintoprem2" id="collapse0">
                <div class="row">
                    <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <label for="nbrepisodes">Nombre d'épisodes</label>
                        <input name="nbrepisodes" id="nbrepisodes" type="number" maxlength="5">
                    </fieldset>
                    <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <label for="duree">Durée <span class="top" datspana-toggle="tooltip" data-placement="top" title="Inscrivez la durée de la production sous la forme d’heures, minutes et secondes (HH : MM : SS)."><sup class="circle">?</sup></span></label>
                        <input type="text" name="duree" id="duree" pattern="[0-9]{0,2}[:][0-9]{1,2}[:][0-9]{2}" maxlength="8" placeholder="00:00:00"  >
                    </fieldset>
                    <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <div class="multiselect">
                            <label>Public(s)</label>
                            <div class="selectBox">
                                <select>
                                    <option>Choisir</option>
                                </select>
                                <div class="overSelect"></div>
                                <div id="publicCheckboxes" class="dropdown">
                                    <label for="jeunesse" class="dropdownMarge" ><input name="clienteles[]" type="checkbox" value="jeunesse" id="jeunesse" />Jeunesse</label>
                                    <label for="adolescent" class="dropdownMarge"><input name="clienteles[]" type="checkbox" value="adolescents"  id="adolescent"/>Adolescent</label>
                                    <label for="adultes" class="dropdownMarge"><input name="clienteles[]" type="checkbox" value="adultes" id="adultes"/>Adultes</label>
                                    <label for="prescolaire" class="dropdownMarge"><input name="clienteles[]" type="checkbox" value="prescolaire" id="prescolaire"/>Préscolaire</label>
                                    <label for="scolaire" class="dropdownMarge"><input name="clienteles[]" type="checkbox" value="scolaire" id="scolaire"/>Scolaire</label>
                                    <label for="professionnels"class="dropdownMarge" ><input name="clienteles[]" type="checkbox" value="professionnels" id="professionnels" />Professionnels</label>
                                    <label for="grand_public" class="dropdownMarge"><input name="clienteles[]" type="checkbox" value="grand_public" id="grand_public"/>Grand public</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label for="type">Type de production <span class="red"> *</span></label>
                        <select required name="type" size="1">
                            <option selected="selected" disabled>Choisir</option>
                            @foreach($types as $type)
                                <option value="{{$type['id']}}" >{{$type['titre']}}</option>
                            @endforeach
                        </select>
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label for="format" >Format(s)</label>
                        <div class="multiselect">
                            <div class="selectBox">
                                <select>
                                    <option>Choisir</option>
                                </select>
                                <div class="overSelect"></div>
                                <div id="formatCheckboxes" class="dropdown">
                                <label class="dropdownMarge bold">Numérique</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'numerique')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Téléphone intelligent</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'telephone_intelligent')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Console de jeu</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'console_de_jeu')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Disque optique</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'disque_optique')
                                        <label for="format-{{$format['id']}}" class="dropdownMarge">
                                        <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Disque optique</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'disque_optique')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Vidéo analogique</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'video_analogique')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Ordinateur</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'ordinateur')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Web</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'web')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Vidéo numérique</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'video_numerique')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Vidéo analogique</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'video_analogique')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                    <label class="dropdownMarge bold">Ratio d'image</label>
                                    @foreach($formats as $format)
                                        @if($format['categorie'] === 'ratio_image')
                                            <label for="format-{{$format['id']}}" class="dropdownMarge">
                                            <input id="format-{{$format['id']}}" name="format[]" type="checkbox" value="{{ $format['id'] }}" />{{ $format['titre'] }}</label>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="row">
                    <fieldset class="col-12">
                        <label >Genre(s) </label>
                        <div class="multiselect">
                            <div class="selectBox">
                                <select>
                                    <option>Choisir</option>
                                </select>
                                <div class="overSelect"></div>
                                <div id="genreCheckboxes" class="dropdown">
                                @foreach(array_chunk($genres, 4) as $chunk)
                                    <div class="row">
                                        @foreach($chunk as $add)
                                            <div class="col-md-3">
                                                <label for="genre-{{ $add['id'] }}" class="dropdownMarge" >
                                                <input id="genre-{{ $add['id']}}" name="genre[]" type="checkbox" value="{{ $add['id'] }}" />{{ $add['titre'] }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </section>

        <section class="pb-2 margintoprem3">
            <a class="text-white atitle accordion" style="cursor:pointer;"  data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
            Informations sur la production
            </a>
            <div class="collapse separateur panel margintoprem2" id="collapse1">

            <fieldset class="width-half">
                    <label for="annee">Année de production </label>
                    <input name="annee_production" id="annee_production" pattern="[0-9]{4}"  maxlength="4" type="integer" min="1000" max="9999">
                </fieldset>
                <fieldset class="width-half">
                    <label for="type">Année de sortie </label>
                    <input name="annee_sortie" id="annee_sortie" pattern="[0-9]{4}"  maxlength="4" type="integer" min="1000" max="9999" >
                </fieldset>

                <div id="tournage">
                    <div class="row lieuTournage">
                    <fieldset  class="col-xl-6 col-lg-6 col-md-6 col-12" >
                        <label for="lieuxTournage">Lieu de tournage</label>
                        <input  name="lieuxTournage[]" type="text" placeholder="Inscrire ville, lieu précis...">
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12" >
                        <label for="pays">Pays</label>
                        <select name="country" size="1" class="countryInput">
                                <option selected="selected" disabled>Choisir un pays</option>
                                @foreach($country as $pays)
                                <option value="{{$pays['id']}}"  >{{$pays['name_fr_fr']}}</option>
                                @endforeach
                            </select>
                            <select name='province' size='1' class="province disappear">
                 <option selected='selected' disabled>Choisir une province ou un territoire</option>
                @foreach($provinces as $province)
                <option value="{{$province['nom_fr']}}"  >{{$province['nom_fr']}}</option>
                @endforeach
                 </select>
                        </fieldset>
                    </div>
                </div>

                <a id="btnAddTournage" class="text-white buttonFormAdd" style="cursor:pointer;"  >
                    <label>&#43 Ajouter un lieu de tournage supplémentaire</label>
                </a>

                <div class="subsection">
                    <label for="coproduction"class="margintoprem bold subsection">En coproduction <span class="red"> *</span>  <span class="top" datspana-toggle="tooltip" data-placement="top" title="Veuillez sélectionner si oui ou non vous êtes en coproduction."><sup class="circle">?</sup></span></label>
                    <div class="row-without-margin">
                     <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="coprod" id="inlineRadio3" value="1">
                            <label class="form-check-label" for="coprod" >Oui</label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="coprod" id="inlineRadio4" value="0">
                            <label class="form-check-label" for="coprod">Non</label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="coprod" id="inlineRadio4" value="0">
                            <label class="form-check-label" for="coprod">À déterminer</label>
                        </div>
                        </div>
                        <div class="row">
                        <fieldset class="col-12 margintopmed coprod disappear">
                        <label for="copro" required>Pays de coproduction <span class="red"> *</span> <span class="top" datspana-toggle="tooltip" data-placement="top" title="Veuillez sélectionner tous les pays applicables, dans le cas d’une coproduction."><sup class="circle">?</sup></span></label>
                        <select name="country" size="1" class="countryInput" >
                                <option selected="selected" disabled>Choisir un pays</option>
                                @foreach($country as $pays)
                                <option value="{{$pays['id']}}"  >{{$pays['name_fr_fr']}}</option>
                                @endforeach
                            </select>
                    </fieldset>
                    </div>
                        <label class="margintoprem bold subsection">À la recherche de coproduction <span class="red"> *</span> <span class="top" datspana-toggle="tooltip" data-placement="top" title="Veuillez sélectionner si oui ou non vous cherchez un partenaire de coproduction."><sup class="circle">?</sup></span></label>
                        <div class="row-without-margin">
                        <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="rechercheCoprod" >Oui</label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio2" value="0">
                            <label class="form-check-label" for="rechercheCoprod"value="false">Non</label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="coprod" id="inlineRadio4" value="0">
                            <label class="form-check-label" for="coprod">À déterminer</label>
                        </div>
                        </div>
                        <div class="row">
                        <fieldset class="col-12 margintopmed recherchecoprod disappear">
                        <label for="copro"> Intéressé(e) de travailler avec <span class="red"> *</span><span class="red"> *</span> <span class="top" datspana-toggle="tooltip" data-placement="top" title="Veuillez sélectionner le ou les pays avec lequel ou lesquels vous souhaitez coproduire votre projet."><sup class="circle">?</sup></span></label>
                        <select name="country" size="1" class="countryInput" >
                                <option selected="selected" disabled>Choisir un pays</option>
                                @foreach($country as $pays)
                                <option value="{{$pays['id']}}"  >{{$pays['name_fr_fr']}}</option>
                                @endforeach
                            </select>
                    </fieldset>
                    </div>
                    <div class="subsection" id="diffusion">
                    <label class="margintoprem bold subsection">Diffusion</label>
                    <div id="diffusion-list">
                        <div class="row">
                            <fieldset class="col-xl-6 col-lg-6 col-12">
                                <label for="diffusions[0][Titre]">Nom (diffuseur, festival...) <span class="red"> *</span></label>
                                <input name="diffusions[0][Titre]" id="diffuseur" type="text">
                            </fieldset>
                            <fieldset class="col-xl-6 col-lg-6  col-12">
                                <label for="diffusions[0][URL]">Site Web du diffuseur  <span class="red"> *</span> </label>
                                <input name="diffusions[0][URL]" type="text" placeholder="Site Web du diffuseur">
                            </fieldset>
                            <fieldset class="col-xl-3 col-lg-3  col-12">
                                <label for="diffusions[0][diffusion]">Date de diffusion: <span class="red"> *</span> <span class="top" datspana-toggle="tooltip" data-placement="top" title="Sélectionnez la date complète de diffusion si vous la connaissez. Sinon, sélectionnez le mois et l’année, la saison et l’année ou l’année seulement."><sup class="circle">?</sup></span></label>
                                <input name="diffusions[0][diffusion]" type="date" >
                            </fieldset>
                            <fieldset class="col-xl-1 col-lg-1  col-12">
                                <label class="MTBcenter">ou</label>
                            </fieldset>
                            <fieldset class="col-xl-3 col-lg-3 col-12">
                                <label for="mois">Mois</label>
                                <select name="mois" size="1" >
                            <option disabled selected >Choisir</option>
                            <option value="1">Janvier</option>
                            <option value="2">Février</option>
                            <option value="3">Mars</option>
                            <option value="4">Avril</option>
                            <option value="5">Mai</option>
                            <option value="6">Juin</option>
                            <option value="7">Juillet</option>
                            <option value="8">Août</option>
                            <option value="9">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                            </fieldset>
                            <fieldset class="col-xl-3 col-lg-3 col-12">
                            <label for="mois">Saison</label>
                                <select name="mois" size="1" >
                            <option disabled selected >Choisir</option>
                            <option value="1">Hiver</option>
                            <option value="2">Printemps</option>
                            <option value="3">Été</option>
                            <option value="4">Automne</option>
                        </select>
                            </fieldset>
                            <fieldset class="col-xl-2 col-lg-2 col-12">
                                <label for="diffusions[0][diffusion]">Année</label>
                                <input name="annee" id="annee_sortie" pattern="[0-9]{4}"  maxlength="4" type="integer" min="1000" max="9999">
                            </fieldset>
                        </div>
                    </div>
                    <a  id="ajout-diffusion" class="text-white buttonFormAdd">
                        <label style="cursor:pointer;">&#43 Ajouter une diffusion supplémentaire</label>
                    </a>
                </div>


                    <!--
                        <label for="travail" class="spaceForm">Intéressé(e) à travailler avec</label>
                        <select multiple data-style="bg-white px-5 py-3 shadow-sm " class="selectpicker w-100" >
                            <option disabled selected >Choisir</option>
                            <option value="1">Canada</option>
                            <option value="2">France</option>
                            <option value="3">États-Unis</option>
                            <option value="3">Allemagne</option>
                            <option value="3">Chine</option>
                        </select>
                    -->
                </div><!-- close subsection -->
            </div>
        </section>

        <section class="pb-2 margintoprem3">
            <a class="text-white atitle accordion" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="true" aria-controls="collapseExample">
              Étapes de production <span class="red"> *</span>
            </a>

            <div class="collapse panel separateur margintoprem2" id="collapse3">
            <label class="littleLabel marginbottomrem2"required >Indiquez l'étape actuelle de votre projet (obligatoire).
                Ensuite, si vous connaissez les dates plus précises de votre projet, vous pourrez les indiquer et même déterminer comment
                elles seront affichées.
            </label>
                <label class="bold underline mt-4 margintoprem3" style="padding-top:3rem;"></label>
                <div class="row-without-margin">
                        <div class="form-check col-xl-2 col-lg-2 col-12">
                            <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label etape" for="rechercheCoprod" >Projet</label>
                        </div>
                        <div class="form-check col-xl-3 col-lg-3 col-12">
                            <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio2" value="0">
                            <label class="form-check-label etape" for="rechercheCoprod"value="false">Préproduction</label>
                        </div>
                        <div class="form-check col-xl-2 col-lg-2 col-12">
                            <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio2" value="0">
                            <label class="form-check-label etape" for="rechercheCoprod"value="false">Production</label>
                        </div>
                        <div class="form-check col-xl-3 col-lg-3 col-12">
                            <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio2" value="0">
                            <label class="form-check-label etape" for="rechercheCoprod"value="false">Postproduction</label>
                        </div>
                        <div class="form-check col-xl-2 col-lg-2 col-12">
                            <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio2" value="0">
                            <label class="form-check-label etape" for="rechercheCoprod"value="false">Terminé</label>
                        </div>
                        </div>

                        <div style="padding-top:3rem;" >
                        <a class="text-white btitle accordion" data-toggle="collapse" href="#collapse3-1" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Projet <span style="font-size:1.5rem;">(précisez)</span>
                         </a>
                        <div class="collapse panel" id="collapse3-1">
                        <div class="row">
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="">Date de début<span class="red"> *</span> <span class="top" datspana-toggle="tooltip" data-placement="top" title="Sélectionnez dans le calendrier la date à laquelle le projet a débuté ou débutera, puis, sélectionnez la valeur d’affichage « Date complète », afin que cette date soit affichée sur le site de QfQ. Si la date précise n’est pas connue, inscrivez une date approximative et définissez la valeur qui sera affichée sur le site de QfQ soit le mois, la saison ou l’année seulement."><sup class="circle">?</sup></span></label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2 bold">
                        <input type="date" name="dateProjet" >
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="">Que voulez-vous afficher?</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Date complète</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Mois</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Saison</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Année</label>
                </fieldset>
                </div>
                </div>
                </div>

                <div style="padding-top:2rem;" >
                        <a class="text-white btitle accordion" data-toggle="collapse" href="#collapse3-2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Préproduction <span style="font-size:1.5rem;">(précisez) </span>
                         </a>
                        <div class="collapse panel" id="collapse3-2">
                        <div class="row">
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="" data-toggle="tooltip" data-placement="top">Date de début <span class="top" datspana-toggle="tooltip" data-placement="top" title="Sélectionnez dans le calendrier la date à laquelle la préproduction a débuté ou débutera, puis, sélectionnez la valeur d’affichage « Date complète », afin que cette date soit affichée sur le site de QfQ. Si la date précise n’est pas connue, inscrivez une date approximative et définissez la valeur qui sera affichée sur le site de QfQ soit le mois, la saison ou l’année seulement."><sup class="circle">?</sup></span></label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                        <input type="date" name="datePreproduction">
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="">Que voulez-vous afficher?</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Date complète</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Mois</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Saison</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Année</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                       <label for="">Date de fin <span class="top" datspana-toggle="tooltip" data-placement="top" title="Sélectionnez dans le calendrier la date à laquelle la préproduction a pris fin ou prendra fin, puis, sélectionnez la valeur d’affichage « Date complète », afin que cette date soit affichée sur le site de QfQ. Si la date précise n’est pas connue, inscrivez une date approximative et définissez la valeur qui sera affichée sur le site de QfQ soit le mois, la saison ou l’année seulement."><sup class="circle">?</sup></span></label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                        <input type="date" name="datePreproduction">
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                       <label for="">Que voulez-vous afficher?</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Date complète</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Mois</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Saison</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Année</label>
                </fieldset>
                </div>
                </div>
                </div>


                <div style="padding-top:2rem;" >
                        <a class="text-white btitle accordion" data-toggle="collapse" href="#collapse3-3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Production <span style="font-size:1.5rem;">(précisez)</span>
                         </a>
                        <div class="collapse panel" id="collapse3-3">
                <div class="row">
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="">Date de début<span class="top" datspana-toggle="tooltip" data-placement="top"  title="Sélectionnez dans le calendrier la date à laquelle la production a débuté ou débutera, puis, sélectionnez la valeur d’affichage « Date complète », afin que cette date soit affichée sur le site de QfQ. Si la date précise n’est pas connue, inscrivez une date approximative et définissez la valeur qui sera affichée sur le site de QfQ soit le mois, la saison ou l’année seulement."><sup class="circle">?</sup></span></label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                        <input type="date" name="dateProduction">
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="">Que voulez-vous afficher?</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Date complète</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Mois</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Saison</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Année</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                       <label for="">Date de fin<span class="top" datspana-toggle="tooltip" data-placement="top" title="Sélectionnez dans le calendrier la date à laquelle la production a pris fin ou prendra fin, puis, sélectionnez la valeur d’affichage « Date complète », afin que cette date soit affichée sur le site de QfQ. Si la date précise n’est pas connue, inscrivez une date approximative et définissez la valeur qui sera affichée sur le site de QfQ soit le mois, la saison ou l’année seulement."><sup class="circle">?</sup></span></label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                        <input type="date" name="dateProduction">
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                       <label for="">Que voulez-vous afficher?</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Date complète</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Mois</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Saison</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Année</label>
                </fieldset>
                </div>
                </div>
                </div>

                <div style="padding-top:2rem;" >
                        <a class="text-white btitle accordion" data-toggle="collapse" href="#collapse3-4" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Postproduction <span style="font-size:1.5rem;">(précisez)</span>
                         </a>
                        <div class="collapse panel" id="collapse3-4">
                <div class="row">
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="">Date de début<span class="top" datspana-toggle="tooltip" data-placement="top"  title="Sélectionnez dans le calendrier la date à laquelle la postproduction a débuté ou débutera, puis, sélectionnez la valeur d’affichage « Date complète », afin que cette date soit affichée sur le site de QfQ. Si la date précise n’est pas connue, inscrivez une date approximative et définissez la valeur qui sera affichée sur le site de QfQ soit le mois, la saison ou l’année seulement."><sup class="circle">?</sup></span></label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                        <input type="date" name="datePostproduction">
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="">Que voulez-vous afficher?</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Date complète</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Mois</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Saison</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Année</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                       <label for="">Date de fin<span class="top" datspana-toggle="tooltip" data-placement="top"  title="Sélectionnez dans le calendrier la date à laquelle la postproduction a pris fin ou prendra fin, puis, sélectionnez la valeur d’affichage « Date complète », afin que cette date soit affichée sur le site de QfQ. Si la date précise n’est pas connue, inscrivez une date approximative et définissez la valeur qui sera affichée sur le site de QfQ soit le mois, la saison ou l’année seulement."><sup class="circle">?</sup></span></label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                        <input type="date" name="datePostproduction">
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                       <label for="">Que voulez-vous afficher?</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem3">
                <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Date complète</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Mois</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Saison</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Année</label>
                </fieldset>
                </div>
                </div>
                </div>

                <div style="padding-top:2rem; padding-bottom:3rem;" >
                        <a class="text-white btitle accordion" data-toggle="collapse" href="#collapse3-5" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Projet terminé <span style="font-size:1.5rem;">(précisez)</span>
                         </a>
                        <div class="collapse panel" id="collapse3-5">
                <div class="row">
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="">Date de fin <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Sélectionnez dans le calendrier la date à laquelle le projet a pris fin ou prendra fin, puis, sélectionnez la valeur d’affichage « Date complète », afin que cette date soit affichée sur le site de QfQ. Si la date précise n’est pas connue, inscrivez une date approximative et définissez la valeur qui sera affichée sur le site de QfQ soit le mois, la saison ou l’année seulement."><sup class="circle">?</sup></span></label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                        <input type="date" name="dateProductionTerminee">>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                       <label for="">Que voulez-vous afficher?</label>
                </fieldset>
                <fieldset class="col-xl-3 col-lg-3 col-12 margintoprem2">
                <input class="form-check-input" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Date complète</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Mois</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Saison</label>
                            <input class="form-check-input marginbottomrem" type="radio" name="rechercheCoprod" id="inlineRadio1" value="1">
                            <label class="form-check-label marginbottomrem" for="rechercheCoprod" >Année</label>
                </fieldset>
                </div>
                </div>
                </div>
            </div>
        </section>

        <section class="pb-2 margintoprem3">
            <a class="text-white atitle accordion" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapseExample">
            Générique
            </a>
            <div class="collapse panel margintoprem2 separateur" id="collapse5">
                <div id="generique-wrapper">
                    <div class="row">

                        <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <label for="generiques[0][entite]" >Personne ou entreprise <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Inscrivez le nom de la personne ou de l’organisation ayant contribué à la conception, création, réalisation, interprétation, production et/ou diffusion de la production. Servez-vous du champ à autocomplétion pour ajouter cette personne ou organisation : inscrivez au moins les 3 premières lettres de celle-ci et cliquez sur son nom."><sup class="circle">?</sup></span></label>
                            <select name="generiques[0][entite]" size="1">
                                <option selected="selected" disabled>Choisir</option>
                                @foreach($entites as $entite)
                                <option value="{{$entite['id']}}" >{{$entite['nom']}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <label for="generiques[0][entite_liee]" >Entreprise liée <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Inscrivez le nom de la personne ou de l’organisation ayant contribué à la conception, création, réalisation, interprétation, production et/ou diffusion de la production. Servez-vous du champ à autocomplétion pour ajouter cette personne ou organisation : inscrivez au moins les 3 premières lettres de celle-ci et cliquez sur son nom."><sup class="circle">?</sup></span></label>
                            <select name="generiques[0][entite_liee]" size="1">
                                <option selected="selected" disabled>Choisir</option>
                                @foreach($entites as $entite)
                                    <option value="{{$entite['id']}}" >{{$entite['nom']}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <label for="generiques[0][categorie_generique]" >Fonction <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Inscrivez la fonction occupée par la personne ou l’organisation sur la production."><sup class="circle">?</sup></span></label>
                            <select  name="generiques[0][categorie_generique]" size="1">
                                <option selected="selected" disabled>Choisir</option>
                                @foreach($generique_categories as $generique_categorie)
                                <option value="{{$generique_categorie['id']}}" >{{$generique_categorie['categorie']}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <label for="generiques[0][details]">Détails (rôle, équipe)</label>
                            <textarea name="generiques[0][details]" cols="30" rows="1"></textarea>
                        </fieldset>
                        <!--   <fieldset class="col-12">
                            <label for="generiques[0][ref_qfq]">Référence à Qui fait Quoi</label>
                            <input type="integer" name="generiques[0][ref_qfq]" length="7">
                        </fieldset> -->
                    </div>{{-- close .row --}}
                </div>{{-- close .collapse --}}
                <a id="btnAddGenerique" class="text-white mb-3 mt-5 buttonFormAdd" style="cursor:pointer;" >
                    <label>&#43 Ajouter une nouvelle personne ou entreprise</label>
                </a>
            </div>
        </section>


        <section class="pb-2 margintoprem3">
            <a class="text-white atitle accordion " style="cursor:pointer;"  data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapseExample">
             Photo(s)
            </a>
            <div class="collapse panel margintoprem2 separateur" id="collapse7">
           <!--       <div id="image">
                <div class="row">
                  <fieldset class="col-12">
                        <label for="file">Image de la production (Cliquez sur le bouton pour ajouter un fichier)</label>
                        <a style="display:block;width:200px; line-height:50px; text-align:center; font-size:2.2rem; color:black; background:white;" onclick="document.getElementById('getFile').click()">Choisir un fichier</a>
                        <input type='file' id="getFile" style="display:none">
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label  for="description">Légende</label>
                        <input  name="description" id="description" type="text" data-toggle="tooltip" data-placement="top" title="Ce champ est obligatoire. Veuillez décrire le plus brièvement possible l’image.">
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label  for="credit">Crédit</label>
                        <input  type="text" name="credit" id="email" data-toggle="tooltip" data-placement="top" title="Ce champ est obligatoire. Indiquez le nom du/de la photographe ou la source de l’image."> >
                    </fieldset>
                    <fieldset class="col-12">
                        <label for="descriptionimage">Description</label>
                        <textarea cols="30" rows="2" name="descriptionimage" data-toggle="tooltip" data-placement="top" title="Indiquez tout autre détail concernant la photo : le contexte de l’image, la restriction des droits, etc. (cette information n’est pas publiée)."></textarea>
                    </fieldset>
                    </div>
                    <a id="ajout-image" class="text-white mb-3 mt-6 col-12 buttonFormAdd">
                    <label class="margintoprem">&#43 Ajouter une image supplémentaire</label>
                </a>
                </div> -->
                <div id="urlprod" >
                <div class="row margintoprem">
                    <fieldset class="col-xl-8 col-lg-8 col-md-8 col-12">
                        <label for="urls[0][nom]" >Lien vers une banque de photos <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Inscrivez l’adresse Web qui contient une ou plusieurs image(s) de votre production."><sup class="circle">?</sup></span></label>
                        <input  name="urls[0][nom]" type="text" placeholder="Adresse web (http://...)" >
                    </fieldset>
                    <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <label for="urls[0][urls[0][preciserurl]">Préciser</label>
                        <select name="urls[0][preciserUrls]">
                            <option disabled selected >Choisir</option>
                            <option value="tournage">Photo de tournage</option>
                            <option value="casting">Photo de casting</option>
                            <option value="promo">Photo de promotion</option>
                            <option value="affiche">Affiche</option>
                            <option value="tapis_rouge">Tapis rouge</option>
                            <option value="extrait">Extrait</option>
                            <option value="film">Film complet</option>
                            <option value="ba">Bande-annonce</option>
                        </select>
                    </fieldset>
                    </div>
                </div>
                <a id="ajout-url" class="text-white mb-3 mt-6 col-12 buttonFormAdd">
                    <label class="margintoprem">&#43 Ajouter une URL supplémentaire</label>
                </a>
            </div>
        </section>

        <section class="pb-2 margintoprem3">
            <a class="text-white atitle accordion " style="cursor:pointer;"  data-toggle="collapse" href="#collapseVideo" role="button" aria-expanded="false" aria-controls="collapseExample">
             Vidéo(s)
            </a>
            <div class="collapse panel margintoprem2 separateur" id="collapseVideo">
                <div id="urlvideo" >
                <div class="row margintoprem">
                    <fieldset class="col-xl-8 col-lg-8 col-md-8 col-12">
                        <label for="urls[0][nom]" >Lien vers une banque de vidéos <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Inscrivez l’adresse Web qui contient une ou plusieurs vidéo(s) de votre production."><sup class="circle">?</sup></span></label>
                        <input  name="urls[0][nom]" type="text" placeholder="Adresse web (http://...)" >
                    </fieldset>
                    <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <label for="urls[0][urls[0][preciservideos]">Préciser</label>
                        <select name="urls[0][preciservideos]">
                            <option disabled selected >Choisir</option>
                            <option value="tournage">Vidéo de tournage</option>
                            <option value="casting">Vidéo de casting</option>
                            <option value="promo">Vidéo de promotion</option>
                            <option value="tapis_rouge">Tapis rouge</option>
                            <option value="extrait">Extrait</option>
                            <option value="film">Film complet</option>
                            <option value="ba">Bande-annonce</option>
                        </select>
                    </fieldset>
                    </div>
                </div>
                <a id="ajout-video" class="text-white mb-3 mt-6 col-12 buttonFormAdd">
                    <label class="margintoprem">&#43 Ajouter une vidéo supplémentaire</label>
                </a>
            </div>
        </section>

        <section class="pb-2 margintoprem3" >
            <a class="text-white atitle accordion" data-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapseExample">
           Informations supplémentaires
            </a>
            <div class="collapse panel margintoprem2 separateur" id="collapse8" >
                <div class="row">
                    <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <div class="multiselect">
                            <label class="mt-3 mb-3">Langue(s) originale(s)</label>
                            <div class="selectBox">
                                <select>
                                    <option>Choisir</option>
                                </select>
                                <div class="overSelect"></div>
                                <div id="voCheckboxes" class="dropdown">
                                    @foreach($langues as $langue)
                                        <label for="vo-{{$langue['code_langue']}}" class="dropdownMarge" >
                                        <input id="vo-{{$langue['code_langue']}}" name="vo[]" type="checkbox" value="{{$langue['code_langue']}}" />{{$langue['langue']}}</label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <div class="multiselect">
                            <label class="mt-3 mb-3">Langue(s) de doublage</label>
                            <div class="selectBox">
                                <select>
                                    <option>Choisir</option>
                                </select>
                                <div class="overSelect"></div>
                                <div id="doublageCheckboxes" class="dropdown">
                                    @foreach($langues as $langue)
                                        <label for="dub-{{$langue['code_langue']}}" class="dropdownMarge">
                                        <input id="dub-{{$langue['code_langue']}}" name="doublage[]" type="checkbox" value="{{$langue['code_langue']}}" />{{$langue['langue']}}</label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <div class="multiselect">
                            <label class="mt-3 mb-3">Langue(s) des sous-titres</label>
                            <div class="selectBox">
                                <select>
                                    <option>Choisir</option>
                                </select>
                                <div class="overSelect"></div>
                                <div id="sousTitresCheckboxes" class="dropdown">
                                    @foreach($langues as $langue)
                                        <label for="srt-{{$langue['code_langue']}}" class="dropdownMarge" >
                                        <input id="srt-{{$langue['code_langue']}}" name="sous-titres[]" type="checkbox" value="{{$langue['code_langue']}}" />{{$langue['langue']}}</label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label for="budget">Budget <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Inscrivez le montant budgétaire alloué à la production (à titre indicatif seulement)"><sup class="circle">?</sup></span><</label>
                        <input type="number" name="budget" id="url"min="0" type="text" pattern="[0-9]{1,10}" maxlength="10">
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label for="devise">Devise <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Sélectionnez la devise appropriée du montant budgétaire."><sup class="circle">?</sup></span></label>
                        <select name="devise">
                            <option disabled selected >Choisir</option>
                            <option value="can">$CAN</option>
                            <option value="us">$US</option>
                            <option value="eur">Euros</option>
                        </select>
                    </fieldset>
                <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label for="autre_titre" >Autre titre <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Veuillez documenter ce champ s’il existe une ou plusieurs variantes de titre de votre projet (titre traduit p. ex.) ou lorsque le titre a été modifié (titre provisoire, p. ex.)."><sup class="circle">?</sup></span></label>
                        <input  name="autre_titre" id="titre" type="text">
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label  for="preciser">Veuillez définir la variante du titre. <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Veuillez définir la variante du titre dans le cas d’une traduction ou d’un titre provisoire, par exemple. "><sup class="circle">?</sup></span></label>
                        <select name="preciser" size="1">
                            <option selected="selected" disabled>Choisir</option>
                            <option value="travail" >Titre de travail</option>
                            <option value="traduit" >Titre traduit</option>
                        </select>
                    </fieldset>
                    </div>
                    <a id="ajout-autre-titre" class="text-white mb-3 mt-6 col-12 buttonFormAdd">
                    <label class="margintoprem">&#43 Ajouter un autre titre</label>
                </a>
                    </div>
            </section>

            <section class="pb-2 margintoprem3 marginbottomrem3">
                <a class="text-white accordion atitle collapsed"
            style="cursor:pointer;"
            data-toggle="collapse"
            href="#collapsetruc"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample">Formulaire rempli par</a>
                <div class="collapse panel margintoprem2" id="collapse10">
                    <div id="contacts-wrapper">
                        <div class="row">
                            <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <label for="contacts[0][prenom]">Prénom <span class="red"> *</span></label>
                                <input name="contacts[0][prenom]" id="contacts[0][prenom]" type="text"required>
                            </fieldset>

                            <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <label for="contacts[0][nom]"  >Nom <span class="red"> *</span></label>
                                <input name="contacts[0][nom]" id="contacts[0][nom]" type="text" required >
                            </fieldset>

                            <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <label for="contacts[0][email]" >Courrier électronique <span class="red"> *</span></label>
                                <input name="contacts[0][email]" id="contacts[0][email]" type="email" required>
                            </fieldset>

                            <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <label for="contacts[0][telephone]">Téléphone <span class="red"> *</span></label>
                                <input name="contacts[0][telephone]" id="contacts[0][telephone]" type="text"  placeholder="Numéro de téléphone (formulaire rempli par)">
                            </fieldset>
                            <fieldset class="col-12 margintoprem">
                                <label for="commentaires_client">Commentaires <span class="red"> *</span><span class="top" datspana-toggle="tooltip" data-placement="top"  title="Veuillez inscrire toute note ou remarque pertinente pour l’équipe de Qui fait Quoi/Le Lien MULTIMÉDIA." ><sup class="circle">?</sup></span></label>
                                <textarea id="commentaires_client" name="commentaires_client" rows="5" cols="33">
                                </textarea>
                            </fieldset> --}}
                            <!--   <fieldset class="col-12 margintoprem">
                                <label for="notes">Notes internes</label>
                                <textarea id="notes" name="notes" rows="2" cols="33">
                                </textarea>
                            </fieldset> --}} -->
                        </div>
                    </div>
                  <!--     <a id="addurl" class="text-white mb-3 mt-6 col-12 buttonFormAdd">
                    <label class="margintoprem">&#43 Ajouter un contact supplémentaire</label>
                </a> --}} -->
                </div>
            </section>


            {{-- <section>
                <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <label for="fonction">Régie vedette</label>
                    <label for="accueil"><input name="bandeau" type="checkbox" value="bandeau" />Accueil</label>
                    <label for="adultes"><input name="accueil" type="checkbox" value="accueil" />Bandeau</label>
                </fieldset>
            </section> --}}

            <button type="submit" class="cta  cta--reverse">Soumettre</button>
        </form>
<style>

.accordion {
    overflow-anchor: none;
}

.accordion2 {
    overflow-anchor: none;
}



</style>
    <script src="/js/production-form.js"></script>

    <script>

$(document).ready(function() {
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
});

$(".top").tooltip({
placement: "top"
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
        function deleteUrl(el) {
            $(el).parents('.urlSup').remove();
        }

        function deleteGen(el) {
            $(el).parents(".GeneriqueSup").remove();
        }

        function deleteTournage(el) {
            $(el).parents(".lieuTournage").remove();
        }

        function deleteDiffusion(el) {
            $(el).parents(".diffusionsup").remove();
        }

        function deleteContact(el) {
            $(el).parents(".contact").remove();
        }


        function deleteVideo(el) {
            $(el).parents(".videoSup").remove();
        }

        function deleteautretitre(el) {
            $(el).parents(".titreSup").remove();
        }









        $(document).ready(function() {
            var generiqueIndex = 0;
            $("#btnAddTournage").click(function(){
         var myNewInput = $("#tournage").append(
                   " <div class='lieuTournage row'>"
                    +"<fieldset class=' col-xl-6 col-lg-6 col-md-6 col-12' >"
                    +"<label for='pays'>Lieu de tournage</label>"
                    +" <input class='inputTournage' name='lieuxTournage[]' type='text' placeholder='Inscrire ville, lieu précis...'>"
                    +"</fieldset >"
                    +"<fieldset class='col-xl-6 col-lg-6 col-md-6 col-12' >"
                    +" <label for='province'>Pays</label>"
                    +"<select name='country' size='1' class='countryInput'> "
                    + "<option selected='selected' disabled>Choisir un pays</option>"
                    + " @foreach($country as $pays)"
                    +"<option value='{{$pays['id']}}'  >{{$pays['name_fr_fr']}}</option>"
                    + "@endforeach"
                    +  "</select>"
              +" <select name='province' size='1' class='province disappear'> "
              + "  <option selected='selected' disabled>Choisir une province ou un territoire</option>"
              + " @foreach($provinces as $province)"
              + "<option value='{{$province['nom_fr']}}'  >{{$province['nom_fr']}}</option>"
              +"  @endforeach"
               + " </select>"
              + " </fieldset>"
              +  "<fieldset class='col-12 text-center'>"
              +"  <button class='button-delete cta  cta--reverse centcinquante mx-auto justify-content-center'  onClick='deleteTournage(this);'>Supprimer</button>"
               + " </fieldset>"
                );
                $(myNewInput).find('.countryInput').on('change', function (event) {
                    if ($(event.currentTarget).val() == 37) {
        $(event.currentTarget).siblings(".province").removeClass("disappear");
    } else {
        $(event.currentTarget).siblings(".province").addClass("disappear");
    }
                 });
            });







            $('#btnAddGenerique').click(function(){
                generiqueIndex++;
                var appendGenerique = ``;

                // // type_generique
                // var types_generiques = @json($types_generiques);  // passes $types_generiques from php javascript view
                // appendGenerique += `<div class="row GeneriqueSup">
                //    <fieldset class="col-xl-6 col-lg-6 col-md-6">
                //    <label for="generiques[${generiqueIndex}][type_generique]">Type</label>
                //    <select name="generiques[${generiqueIndex}][type_generique]" size="1">
                //    <option selected="selected" disabled>Choisir</option>`;
                //    for( type_generique of types_generiques ) {
                //       appendGenerique += `<option value="${type_generique['id']}" >${type_generique['titre']}</option>`
                //   }
                //   appendGenerique += `</select></fieldset>`

                // categorie_generique


             /*   <fieldset class="col-xl-6 col-lg-6 col-md-6">
                            <label for="generiques[0][entite]" >Personne ou entreprise</label>
                            <select name="generiques[0][entite]" size="1">
                                <option selected="selected" disabled>Choisir</option>
                                @foreach($entites as $entite)
                                <option value="{{$entite['id']}}" >{{$entite['nom']}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="col-xl-6 col-lg-6 col-md-6">
                            <label for="generiques[0][entite_liee]" >Entreprise liée</label>
                            <select name="generiques[0][entite_liee]" size="1">
                                <option selected="selected" disabled>Choisir</option>
                                @foreach($entites as $entite)
                                    <option value="{{$entite['id']}}" >{{$entite['nom']}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="col-xl-6 col-lg-6 col-md-6">
                            <label for="generiques[0][categorie_generique]" >Fonction</label>
                            <select  name="generiques[0][categorie_generique]" size="1">
                                <option selected="selected" disabled>Choisir</option>
                                @foreach($generique_categories as $generique_categorie)
                                <option value="{{$generique_categorie['id']}}" >{{$generique_categorie['categorie']}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="col-12">
                            <label for="generiques[0][details]">Détails (rôle, équipe)</label>
                            <textarea name="generiques[0][details]" cols="30" rows="1"></textarea>
                        </fieldset>
                        <fieldset class="col-12">
                            <label for="generiques[0][ref_qfq]">Référence à Qui fait Quoi</label>
                            <input type="integer" name="generiques[0][ref_qfq]" length="7">
                        </fieldset> */


                            /*  <fieldset class="col-12">
                        <label for="file">Image de la production (Cliquez sur le bouton pour ajouter un fichier)</label>
                        <a style="display:block;width:200px; line-height:50px; text-align:center; font-size:2.2rem; color:black; background:white;" onclick="document.getElementById('getFile').click()">Choisir un fichier</a>
                        <input type='file' id="getFile" style="display:none">
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label  for="description">Légende</label>
                        <input  name="description" id="description" type="text">
                    </fieldset>
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label  for="credit">Crédit</label>
                        <input  type="text" name="credit" id="email" >
                    </fieldset>
                    <fieldset class="col-12">
                        <label for="descriptionimage">Description</label>
                        <textarea cols="30" rows="2" name="descriptionimage"></textarea>
                    </fieldset> */




                // entite
                var entites = @json($entites);  // passes $entites from php javascript view
                appendGenerique += `<div class="row GeneriqueSup">
                <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                <label for="generiques[${generiqueIndex}][entite]">Personne ou entreprise</label>
                <select name="generiques[${generiqueIndex}][entite]" size="1">
                <option selected="selected" disabled>Choisir</option>`;
                for( entite of entites ) {
                    appendGenerique += `<option value="${entite['id']}" >${entite['nom']}</option>`
                }
                appendGenerique += `</select></fieldset>`

                appendGenerique += `<fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                <label >Entreprise liée</label>
                <select name="generiques[${generiqueIndex}][entite_liee]" size="1">
                <option selected="selected" disabled>Choisir</option>`;
                for( entite of entites ) {
                    appendGenerique += `<option value="${entite['id']}" >${entite['nom']}</option>`
                }
                appendGenerique += `</select></fieldset>`

                var generique_categories = @json($generique_categories);  // passes $generique_categories from php javascript view
                appendGenerique += `<fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                <label for="generiques[${generiqueIndex}][categorie_generique]">Fonction</label>
                <select name="generiques[${generiqueIndex}][categorie_generique]" size="1">
                <option selected="selected" disabled>Choisir</option>`;
                for( generique_categorie of generique_categories ) {
                    appendGenerique += `<option value="${generique_categorie['id']}" >${generique_categorie['categorie']}</option>`
                }
                appendGenerique += `</select></fieldset>`;


                // details
                appendGenerique += `<fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                <label for="details">Détails (rôle, équipe)</label>
                <textarea required name="generiques[${generiqueIndex}][details]" cols="30" rows="1"></textarea>
                </fieldset>`;

                // ref_qfq
                appendGenerique += `
                <fieldset class='col-12 text-center'>
                <button class='button-delete cta  cta--reverse centcinquante' onClick='deleteGen(this);'>Supprimer</button>
                 </fieldset>
                </div>`;

                $("#generique-wrapper").append( appendGenerique);
            });


            var urlIndex = 0;
            $('#ajout-url').on('click', function () {
                urlIndex++;
                var appendurl = `<div class="urlSup row">`
                +`<fieldset class="col-xl-8 col-lg-8 col-md-8 col-12">`
                + `<label for="urls[${urlIndex}][nom]" >Lien vers une banque de photos</label>`
                + `<input name="urls[${urlIndex}][nom]" type="text" placeholder="Adresse web (http://...)" >`
                + `</fieldset>`
                + `<fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">`
                + `<label for="urls[${urlIndex}][preciserurl]">Préciser</label>`
                + `<select name="urls[${urlIndex}][preciserurl]">`
                + `<option disabled selected >Choisir</option>`
                + `<option value="tournage">Photo de tournage</option>`
                + `<option value="casting">Photo de casting</option>`
                + `<option value="promo">Photo de promotion</option>`
                + `<option value="affiche">Affiche</option>`
                + `<option value="tapis_rouge">Tapis rouge</option>`
                + `<option value="extrait">Extrait</option>`
                + `<option value="film">Film complet</option>`
                + `<option value="ba">Bande-annonce</option>`
                + `</select>`
                + `</fieldset>`
                +`<fieldset class="col-12 text-center">`
                + "<button class='button-delete cta  cta--reverse centcinquante' onClick='deleteUrl(this);'>Supprimer</button>"
                + `</fieldset>`
                + `</div>`;
                $('#urlprod').append(appendurl);
            });

            var urlIndex = 0;
            $('#ajout-video').on('click', function () {
                urlIndex++;
                var appendurl = `<div class="videoSup row">`
                +`<fieldset class="col-xl-8 col-lg-8 col-md-8 col-12">`
                + `<label for="urls[${urlIndex}][nom]" >Lien vers une banque de vidéos</label>`
                + `<input name="urls[${urlIndex}][nom]" type="text" placeholder="Adresse web (http://...)" >`
                + `</fieldset>`
                + `<fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">`
                + `<label for="urls[${urlIndex}][preciservideos]">Préciser</label>`
                + `<select name="urls[${urlIndex}][preciservideos]">`
                + `<option disabled selected >Choisir</option>`
                + `<option value="tournage"Vidéo de tournage</option>`
                + `<option value="casting">Vidéo de casting</option>`
                + `<option value="promo">Vidéo de promotion</option>`
                + `<option value="affiche">Affiche</option>`
                + `<option value="tapis_rouge">Tapis rouge</option>`
                + `<option value="extrait">Extrait</option>`
                + `<option value="film">Film complet</option>`
                + `<option value="ba">Bande-annonce</option>`
                + `</select>`
                + `</fieldset>`
                +`<fieldset class="col-12 text-center">`
                + "<button class='button-delete cta  cta--reverse centcinquante' onClick='deleteVideo(this);'>Supprimer</button>"
                + `</fieldset>`
                + `</div>`;
                $('#urlvideo').append(appendurl);
            });

            var contactIndex = 0;
            $('#addurl').on('click', function () {
                contactIndex++;
                var appendcontact = `<div class="row contact">
                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label for="contacts[${contactIndex}][prenom]" required >Prénom</label>
                        <input name="contacts[${contactIndex}][prenom]" id="contacts[${contactIndex}][prenom]" type="text">
                    </fieldset>

                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label for="contacts[${contactIndex}][nom]" required >Nom</label>
                        <input name="contacts[${contactIndex}][nom]" required id="contacts[${contactIndex}][nom]" type="text">
                    </fieldset>

                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label for="contacts[${contactIndex}][email]" required >Courrier électronique</label>
                        <input name="contacts[${contactIndex}][email]" required id="contacts[${contactIndex}][email]" type="email" >
                    </fieldset>

                    <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <label for="contacts[${contactIndex}][telephone]">Téléphone</label>
                        <input name="contacts[${contactIndex}][telephone]" id="contacts[${contactIndex}][telephone]" type="text">
                    </fieldset>
                    <fieldset class="col-12 margintoprem">
                                <label for="commentaires_client">Commentaires</label>
                                <textarea id="commentaires_client" name="commentaires_client" rows="5" cols="33">
                                </textarea>
                            </fieldset> --}}
                        <fieldset class="col-12 text-center">
                 <button class='button-delete cta  cta--reverse centcinquante' onClick='deleteContact(this);'>Supprimer</button>"
                 </fieldset>
                </div>`;
                $('#contacts-wrapper').append(appendcontact)
            });


         /*   <div class="row">
                            <fieldset class="col-xl-6 col-lg-6 col-12">
                                <label for="diffusions[0][Titre]">Nom (diffuseur, festival...)</label>
                                <input name="diffusions[0][Titre]" id="diffuseur" type="text">
                            </fieldset>
                            <fieldset class="col-xl-6 col-lg-6  col-12">
                                <label for="diffusions[0][URL]">Site Web du diffuseur</label>
                                <input name="diffusions[0][URL]" type="text">
                            </fieldset>
                            <fieldset class="col-xl-3 col-lg-3  col-12">
                                <label for="diffusions[0][diffusion]">Date de diffusion:</label>
                                <input name="diffusions[0][diffusion]" type="date" >
                            </fieldset>
                            <fieldset class="col-xl-1 col-lg-1  col-12">
                                <label class="MTBcenter">ou</label>
                            </fieldset>
                            <fieldset class="col-xl-3 col-lg-3 col-12">
                                <label for="mois">Mois</label>
                                <select name="mois" size="1" >
                            <option disabled selected >Choisir</option>
                            <option value="1">Janvier</option>
                            <option value="2">Février</option>
                            <option value="3">Mars</option>
                            <option value="4">Avril</option>
                            <option value="5">Mai</option>
                            <option value="6">Juin</option>
                            <option value="7">Juillet</option>
                            <option value="8">Août</option>
                            <option value="9">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                            </fieldset>
                            <fieldset class="col-xl-3 col-lg-3 col-12">
                            <label for="mois">Saison</label>
                                <select name="mois" size="1" >
                            <option disabled selected >Choisir</option>
                            <option value="1">Hiver</option>
                            <option value="2">Printemps</option>
                            <option value="3">Été</option>
                            <option value="4">Automne</option>
                        </select>
                            </fieldset>
                            <fieldset class="col-xl-2 col-lg-2 col-12">
                                <label for="diffusions[0][diffusion]">Année</label>
                                <input name="annee" id="annee_sortie" pattern="[0-9]{4}"  maxlength="4" type="integer" min="1000" max="9999">
                            </fieldset>
                        </div>
                    </div> */


                    $('#ajout-autre-titre').on('click', function () {
          var appendurl =`<div class="titreSup row">`
                 +`<fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">`
                +`<label for="autre_titre" >Autre titre <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Veuillez documenter ce champ s’il existe une ou plusieurs variantes de titre de votre projet (titre traduit p. ex.) ou lorsque le titre a été modifié (titre provisoire, p. ex.)."><sup class="circle">?</sup></span></label>`
                + `<input  name="autre_titre" id="titre" type="text">`
                + `   </fieldset>`
                + `  <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">`
                + `   <label  for="preciser">Précisez cet autre titre <span class="top" datspana-toggle="tooltip" data-placement="top"  title="Veuillez définir la variante du titre dans le cas d’une traduction ou d’un titre provisoire, par exemple.  "><sup class="circle">?</sup></span></label>`
                + ` <select name="preciser" size="1">`
                + ` <option selected="selected" disabled>Choisir</option>`
                + ` <option value="travail" >Titre de travail</option>`
                + `  <option value="traduit" >Titre traduit</option>`
                +   '</select>'
                + '</fieldset>'
                + `<fieldset class="col-12 text-center">`
                + `<button class='button-delete cta  cta--reverse centcinquante' onClick='deleteautretitre(this);'>Supprimer</button>`
                + `</fieldset>`
                + `</div>`;
                $('#collapse8').append(appendurl);
            });


                    $('#ajout-image').on('click', function () {
          var appendurl =`<div id="imageSup" class="row">`
                +`<fieldset class="col-12">`
                +`<label for="file">Image de la production</label>`
                + `  <a style="display:block;width:200px; line-height:50px; text-align:center; font-size:2.2rem; color:black; background:white;" onclick="document.getElementById('getFile').click()">Choisir un fichier</a>`
                + ` <input type='file' id="getFile" style="display:none">`
                + `  </fieldset>`
                + `<fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">`
                + ` <label  for="description">Légende</label>`
                + ` <input  name="description" id="description" type="text">`
                + `  </fieldset>`
                + `<fieldset class="col-12">`
                + `<label for="descriptionimage">Description</label>`
                + `<textarea cols="30" rows="2" name="descriptionimage"></textarea>`
                + `</fieldset>`
                + `<fieldset class="col-12 text-center">`
                + `<button class='button-delete cta  cta--reverse centcinquante' onClick='deleteImage(this);'>Supprimer</button>`
                + `</fieldset>`
                + `</div>`
                $('#image').append(appendurl);
            });




            var diffusionIndex = 0;
            $('#ajout-diffusion').on('click', function () {
                diffusionIndex++;
                var appendurl = /*`<div class="row">${diffusionIndex} A completer</div>`*/  '<div class="row diffusionsup">'
                +  '<fieldset class="col-xl-6 col-lg-6 col-12">'
                +  ' <label for="diffusions[0][Titre]">Nom (diffuseur, festival...)</label>'
                + '<input name="diffusions[0][Titre]" id="diffuseur" type="text">'
                  +   ' </fieldset>'
                   +'     <fieldset class="col-xl-6 col-lg-6  col-12">'
                +' <label for="diffusions[0][URL]">Site Web du diffuseur</label>'
                 + ' <input name="diffusions[0][URL]" type="text">'
                  + '</fieldset>'
                + ' <fieldset class="col-xl-3 col-lg-3  col-12">'
                 + ' <label for="diffusions[0][diffusion]">Date de diffusion:</label>'
                + '<input name="diffusions[0][diffusion]" type="date" >'
                 +  ' </fieldset>'
                + '<fieldset class="col-xl-1 col-lg-1  col-12">'
                 +  ' <label class="MTBcenter">ou</label>'
                  +  '</fieldset>'
                  + ' <fieldset class="col-xl-3 col-lg-3 col-12">'
                   + ' <label for="mois">Mois</label>'
                    + ' <select name="mois" size="1" >'
                     + ' <option disabled selected >Choisir</option>'
                      + '  <option value="1">Janvier</option>'
                       +   '  <option value="2">Février</option>'
                        +  '<option value="3">Mars</option>'
                         +'  <option value="4">Avril</option>'
                         + '  <option value="5">Mai</option>'
                        +'    <option value="6">Juin</option>'
                         + '  <option value="7">Juillet</option>'
                         +  ' <option value="8">Août</option>'
                         + '  <option value="9">Septembre</option>'
                         +  ' <option value="10">Octobre</option>'
                        + '  <option value="11">Novembre</option>'
                        + '  <option value="12">Décembre</option>'
                       + ' </select>'
                      +' </fieldset>'
                      +'<fieldset class="col-xl-3 col-lg-3 col-12">'
                       + '  <label for="mois">Saison</label>'
                        + ' <select name="mois" size="1" >'
                       +   '  <option disabled selected >Choisir</option>'
                        + '  <option value="1">Hiver</option>'
                        +'   <option value="2">Printemps</option>'
                        + '  <option value="3">Été</option>'
                        + ' <option value="4">Automne</option>'
                        +'</select>'
                        + '   </fieldset>'
                       +' </fieldset>'
                       +   ' <fieldset class="col-xl-2 col-lg-2 col-12">'
                       +   '  <label for="diffusions[0][diffusion]">Année</label>'
                        +   '  <input name="annee" id="annee_sortie" pattern="[0-9]{4}"  maxlength="4" type="integer" min="1000" max="9999">'
                        +  ' </fieldset>'
                        + `<fieldset class="col-12 text-center">`
                + "<button class='button-delete cta  cta--reverse centcinquante' onClick='deleteDiffusion(this);'>Supprimer</button>"
                + `</fieldset>`
                 +' </div>'

                ;
                $('#diffusion-list').append(appendurl)
            });
        });



    </script>
</div>
@endsection
