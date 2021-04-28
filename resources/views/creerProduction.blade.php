@extends('layouts.app')

@section('title', 'Ajouter votre projet')

@section('content')
<div class="container">
    <div style="padding-top: 30px;">
        <h1>Ajouter votre projet</h1>
        <h2>Faites-nous savoir ! Faites-vous voir !</h2>
        <p class="text--dark">La COLLECTION NUMÉRIQUE du Lien MULTIMÉDIA met en valeur et facilite la découvrabilité des productions québécoises en jeu vidéo, arts numériques et immersifs, réalité virtuelle, animation et applications mobiles culturelles, entre autres. Cette plateforme témoigne et démontre l'effervescence et la créativité de l'industrie du numérique au Québec.</p>
        <h2>C'est gratuit!</h2>
        <p class="text--dark">Inscrivez les informations relatives à vos productions en cours. Elles seront versées gratuitement dans notre base de données et accessibles aux abonnés de notre site Internet.</p>

        <form action="{{ url('production/creer') }}" method="POST">
            @csrf

            <fieldset>
                <label required for="titre">Titre du projet</label>
                <input required name="titre" id="titre" type="text">
            </fieldset>

            <fieldset>
                <label for="synopsis">Synopsis</label>
                <textarea name="synopsis" id="synopsis" cols="30" rows="5"></textarea>
            </fieldset>

            <fieldset>
                <label for="note">Notes</label>
                <textarea name="note" id="note" id="" cols="30" rows="3"></textarea>
            </fieldset>

            <hr/>
            <br><p></p>
            <fieldset>
                <label required for="production">Maison de production</label>
                <input required name="production" id="production" type="text">
            </fieldset>

            <hr/>
            <br/><p></p>
            <div>
                <div class="row  row--gutter">
                    <div class="col-6">
                        <fieldset>
                            <label required for="date-fin-projet">Année de production</label>
                            <input required type="date" id="date-fin-projet" name="date-production" value="" min="javascript:date.now()" max="">
                        </fieldset>
                    </div>
                    <div class="col-6">
                        <fieldset>
                            <label required for="date-fin-projet">Année de sortie</label>
                            <input required type="date" id="date-fin-projet" name="date-sortie" value="" min="" max="">
                        </fieldset>
                    </div>
                </div>

                <legend>Étapes</legend>

                <div class="row row--gutter">
                    <fieldset class="col-3 form-group form-check">
                        <input class="form-check-input" required type="radio" value="projet" id="timeline-projet" name="etape">
                        <label class="form-check-label" required for="timeline-projet">Projet</label>
                    </fieldset>
                    <fieldset class="col-3 form-group form-check">
                        <input class="form-check-input" required type="radio" value="preprod" id="timeline-preprod" name="etape">
                        <label class="form-check-label" required for="timeline-preprod">Préproduction</label>
                    </fieldset>
                    <fieldset class="col-3 form-group form-check">
                        <input class="form-check-input" required type="radio" value="production"  id="timeline-prod" name="etape">
                        <label class="form-check-label" required for="timeline-prod">Production</label>
                    </fieldset>
                    <fieldset class="col-3 form-group form-check">
                        <input class="form-check-input" required type="radio" value="postprod"  id="timeline-postprod" name="etape">
                        <label class="form-check-label" required for="timeline-postprod">Postproduction</label>
                    </fieldset>
                    <fieldset class="col-3 form-group form-check">
                        <input class="form-check-input" required type="radio" value="termine"  id="timeline-end" name="etape">
                        <label class="form-check-label" required for="timeline-end">Production terminée</label>
                    </fieldset>
                </div>
            </div>

            <hr/>
            <br><p></p>
            <fieldset class="width-half">
                <label required for="type">Type de production</label>
                <select required name="type" size="1">
                    <option selected="selected" disabled>Choisir</option>
                    @foreach($types as $type)
                        <option value="">{{$type['titre']}}</option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset class="width-half">
                <label required for="genre">Genre</label>
                <select required name="genre" size="1">
                    <option selected="selected" disabled>Choisir</option>
                    @foreach($genres as $genre)
                        <option value="">{{$genre['titre']}}</option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset class="width-half">
                <label for="episodes">Nombre d'épisodes</label>
                <input name="episodes" id="episodes" type="text">
            </fieldset>

            <fieldset class="width-half">
                <label for="duree">Durée en minutes</label>
                <input name="duree" id="duree" type="number">
            </fieldset>

            <fieldset class="width-half">
                <label for="tournage">Période de tournage</label>
                <input name="tournage" id="tournage" type="text">
            </fieldset>

            <fieldset class="width-half">
                <label for="format">Format</label>
                <select name="format" id="format" size="1">
                <option selected="selected" disabled>Choisir</option>
                    @foreach($formats as $format)
                        <option value="">{{$format['titre']}}</option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset class="width-half">
                <label required for="contact">Personne contact</label>
                <input required name="contact" id="contact" type="text">
            </fieldset>

            <fieldset class="width-half">
                <label required for="email">Courrier électronique</label>
                <input required type="email" name="email" id="email" >
            </fieldset>

            <fieldset class="width-half">
                <label required for="telephone">Téléphone</label>
                <input required name="telephone" id="telephone" type="text">
            </fieldset>

            <fieldset class="width-half">
                <label for="telecopieur">Télécopieur</label>
                <input name="telecopieur" id="telecopieur" type="text">
            </fieldset>

            <!-- <fieldset>
                    <label for="">Date</label>
                    <input data-is-half type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                </fieldset> -->

            <button type="submit" class="cta  cta--reverse">
                Continuer l'inscription
            </button>
        </form>
    </div>
</div>
@endsection