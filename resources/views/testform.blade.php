<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="app.css">
        <!-- jQuery first, then Popper.js, then Bootstrap JS, By the way, thank you the author of "https://bootstrapious.com/p/bootstrap-multiselect-dropdown" for his beautifull multiple select input-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->


<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</head>

</html>

<body>



  <div class="container">


          <h1>Ajouter votre projet</h1>
          <h2>Faites-nous savoir ! Faites-vous voir !</h2>
          <p class="text--dark">La COLLECTION NUMÉRIQUE du Lien MULTIMÉDIA met en valeur et facilite la découvrabilité des productions québécoises en jeu vidéo, arts numériques et immersifs, réalité virtuelle, animation et applications mobiles culturelles, entre autres. Cette plateforme témoigne et démontre l'effervescence et la créativité de l'industrie du numérique au Québec.</p>
          <h2>C'est gratuit!</h2>
          <p class="text--dark">Inscrivez les informations relatives à vos productions en cours. Elles seront versées gratuitement dans notre base de données et accessibles aux abonnés de notre site Internet.</p>
          <p class="text--dark">Cliquez sur l’icône - pour remplir les sections et cliquez sur l’icône + pour masquer certaines sections.</p>
          <form action="{{ url('/production/creer') }}" method="POST">
          @csrf



          <section class="pb-2">
         <a class="text-white" style="cursor:pointer;"  data-toggle="collapse" href="#collapsePrime" role="button" aria-expanded="false" aria-controls="collapseExample">
          <h2 class="accordion text-white">Présentation</h2>
            </a>
            <div class="collapse show" id="collapsePrime">
            <div class="row">
              <fieldset class="col-xl-9 col-lg-9 col-md-9 col-12">
                  <label for="titre" required>Titre du projet</label>
                  <input required name="titre" id="titre" type="number" placeholder="Ce champ est obligatoire." oninvalid="this.setCustomValidity('Ce champ est obligatoire. Si votre projet n’a pas encore de titre, entrez un titre temporaire.')" >
              </fieldset>
              <fieldset class="col-xl-3 col-lg-3 col-md-3 col-12">
                  <label for="titre">Saison ou édition</label>
                  <input required name="titre" id="titre" type="number"  >
              </fieldset>


              <fieldset class="col-12">
                  <label for="synopsis">Synopsis</label>
                  <textarea required name="synopsis" name="synopsis" id="synopsis" cols="30" rows="8"></textarea>
              </fieldset>
              <fieldset class="col-12">
                  <label for="synopsis (anglais)">Synopsis (anglais)</label>
                  <textarea required name="synopsisangl" name="synopsis(ang)" id="synopsis(angl)" cols="30" rows="8"></textarea>
              </fieldset>
              </div>
              </div>
              <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                Tooltip on top
              </button>
              <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                Tooltip on right
              </button>
              <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                Tooltip on bottom
              </button>
              <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                Tooltip on left
              </button>
              </section>

          <section class="pb-2">
              <div>
              <a class="text-white" style="cursor:pointer;"  data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
              <h2 class="accordion text-white">Détails</h2>
              </a>
              <div class="collapse show" id="collapse1">
              <div class="row">
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label for="episodes">Nombre d'épisodes</label>
                  <input name="nbepisodes" id="episodes" type="number">
              </fieldset>
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label required for="type">Type de production</label>
                  <select required name="type" >
                      <option selected="selected" disabled>Choisir</option>
                      <option >Jeux vidéo</option>
                      <option >Web séries et contenu multimédia</option>
                      <option >Réalité virtuelle</option>
                      <option >Applications web et mobiles</option>
                      <option >Balados et vidéoclips</option>
                      <option >Bornes, installation et expériences multimédias</option>
                  </select>
              </fieldset>
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label for="duree">Durée</label>
                    <input id="date-fin-projet" name="date-sortie" class="time" type="text" placeholder="00:00">
                          </fieldset>
                          <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label for="format">Format(s)</label>
                  <select multiple data-style="bg-white px-5 py-3 shadow-sm" class="selectpicker w-100" >
                  <option disabled selected >Sélectionnez un ou des formats</option>
                  <option >16 mm</option>
                      <option >2k</option>
                      <option >3D</option>
                      <option >Imax</option>
                  </select>
              </fieldset>
            </div>
                  <div class="row">
                  <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label for="genre">Genre(s)</label>
                  <select multiple data-style="bg-white px-5 py-3 shadow-sm" class="selectpicker w-100" >
                  <option disabled selected >Sélectionnez un ou des genres</option>
                  <option >Action</option>
                      <option >Comédia</option>
                      <option >Romance</option>
                      <option >Drame</option>
                      <option >Documentaire</option>
                      <option >Horreur</option>
                      <option >Cuisine</option>
                      <option >Corporatif</option>
                  </select>
              </fieldset>
                  </div>
                  </div>
                  </section>

               <section class="pb-2">
                  <div>
                  <a class="text-white" style="cursor:pointer;"  data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
              <h2 class="accordion text-white">Information sur la production</h2>
              </a>
              <div class="collapse show" id="collapse2">
                  <fieldset>
                  <label required for="production">Maison de production</label>
                  <input required name="maisonProduction" id="production" type="text">
              </fieldset>
              <fieldset id="tournage" >
                  <label for="tournage">Lieu(x) de tournage</label>
                  <input required name="tournage" type="text" placeholder="Inscrivez un lieu de tournage">
              </fieldset>
              <a id="btnAppend1" class="text-white" style="cursor:pointer;"  ><label>Ajouter un lieu de tournage supplémentaire</label></a>
                <div class="subsection">
              <label for="coproduction" class="spaceForm" required>En coproduction</label>
              <div class="row-without-margin">
              <div class="form-check col-4">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Oui</label>
              </div>
              <div class="form-check col-4">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Non</label>
              </div>
              <div class="form-check col-4">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">En attente</label>
              </div>
              </div>
              <label for="pays" class="spaceForm">Pays de coproduction</label>
              <select multiple data-style="bg-white px-5 py-3 shadow-sm " class="selectpicker w-100" >
               <option disabled selected >Choisir</option>
                <option value="1">Canada</option>
                  <option value="2">France</option>
              <option value="3">États-Unis</option>
              <option value="3">Allemagne</option>
              <option value="3">Chine</option>
               </select>
               <label for="coproduction"class="spaceForm" required>À la recherche de coproduction</label>
               <div class="row-without-margin">
              <div class="form-check col-4">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Oui</label>
              </div>
              <div class="form-check col-4">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Non</label>
              </div>
              <div class="form-check col-4">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2"> Indéterminé</label>
              </div>
              </div>
              <label for="travail" class="spaceForm">Intéressé(e) à travailler avec</label>
              <select multiple data-style="bg-white px-5 py-3 shadow-sm " class="selectpicker w-100" >
               <option disabled selected >Choisir</option>
                <option value="1">Canada</option>
                  <option value="2">France</option>
              <option value="3">États-Unis</option>
              <option value="3">Allemagne</option>
              <option value="3">Chine</option>
               </select>
              </div>
              </div>
              </div>

              </section>

          <section class="pb-2">
          <a class="text-white" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
          <h2 class="accordion text-white">Dates-clés</h2>
            </a>
            <div class="collapse show" id="collapse3">
              <fieldset class="width-half">
                  <label for="annee">Année de production</label>
                  <input name="nbepisodes" id="episodes" type="text">
              </fieldset>
              <fieldset class="width-half">
                  <label for="type">Année de sortie</label>
                  <input name="nbepisodes" id="episodes" type="text">
              </fieldset>

              <div class="subsection" id="diffusion">
              <label class="bold">Diffusion</label>
              <div class="row">
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label for="diffuseur">Nom</label>
                  <input name="diffuseur" id="diffuseur" type="text">
              </fieldset>
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label  for="type">URL</label>
                  <input name="url" id="url" type="text">
              </fieldset>
              <fieldset class="col-12">
              <label for="date">Date de diffusion :</label>
              <select name="Jour" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Jour</option>
                </select>
                <select name="Mois" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Mois</option>
                </select>
                <select name="Saison" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Saison</option>
                </select>
                <select name="Année" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Année</option>
                </select>
              </fieldset>
              </div>

              <a  id="btnAppend2" class="text-white" style="cursor:pointer;" ><label style="cursor:pointer;">Ajouter une diffusion supplémentaire</label></a>
              </div>


              <label class="bold underline mt-4">Étapes de production</label>
              <fieldset>
              <a class="text-white"  style="cursor:pointer;" data-toggle="collapse" href="#collapseprojet" role="button" aria-expanded="false" aria-controls="collapseExample">
              <label for="etape"class="bold pt-3 accordion2 text-white">Projet</label>
             </a>
              <div class="row-without-margin collapse show" id="collapseprojet">
              <label for="dateDebut"class="mt-3 col-12 p-0">Date de début</label>
              <select name="Jour" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Jour</option>
                </select>
                <select name="Mois" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Mois</option>
                </select>
                <select name="Saison" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Saison</option>
                </select>
                <select name="Année" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Année</option>
                </select>
              </div>
              </fieldset>
              <fieldset>
              <a class="text-white"  style="cursor:pointer;" data-toggle="collapse" href="#collapsepreprod" role="button" aria-expanded="false" aria-controls="collapseExample">
              <label for="etape"class="bold pt-3 accordion2 text-white">Préproduction</label>
              </a>
              <div class="row-without-margin collapse show" id="collapsepreprod">
              <label for="dateDebut"class="mt-3 col-12 p-0">Date de début</label>
              <select name="Jour" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Jour</option>
                </select>
                <select name="Mois" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Mois</option>
                </select>
                <select name="Saison" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Saison</option>
                </select>
                <select name="Année" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Année</option>
                </select>
              </div>
              </fieldset>
              <fieldset>
              <a class="text-white"  style="cursor:pointer;" data-toggle="collapse" href="#collapseprod" role="button" aria-expanded="false" aria-controls="collapseExample">
              <label for="etape"class="bold pt-3 accordion2 text-white">Production</label>
              </a>
              <div class="row-without-margin collapse show" id="collapseprod">
              <label for="dateDebut"class="mt-3 col-12 p-0">Date de début</label>
              <select name="Jour" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Jour</option>
                </select>
                <select name="Mois" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Mois</option>
                </select>
                <select name="Saison" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Saison</option>
                </select>
                <select name="Année" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Année</option>
                </select>
              </div>
              </fieldset>
                      <fieldset>
              <a class="text-white"  style="cursor:pointer;" data-toggle="collapse" href="#collapsepostprod" role="button" aria-expanded="false" aria-controls="collapseExample">
              <label for="etape"class="bold pt-3 accordion2 text-white">Postproduction</label>
              </a>
              <div class="row-without-margin collapse show" id="collapsepostprod">
              <label for="dateDebut"class="mt-3 col-12 p-0">Date de début</label>
              <select name="Jour" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Jour</option>
                </select>
                <select name="Mois" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Mois</option>
                </select>
                <select name="Saison" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Saison</option>
                </select>
                <select name="Année" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Année</option>
                </select>
              </div>
              </fieldset>
              <fieldset>
              <a class="text-white"  style="cursor:pointer;" data-toggle="collapse" href="#collapseprodfin" role="button" aria-expanded="false" aria-controls="collapseExample">
              <label for="etape"class="bold pt-3 accordion2 text-white">Production terminée</label>
              </a>
              <div class="row-without-margin collapse show" id="collapseprodfin">
              <select name="Jour" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Jour</option>
                </select>
                <select name="Mois" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Mois</option>
                </select>
                <select name="Saison" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Saison</option>
                </select>
                <select name="Année" class="col-xl-3 col-lg-3 col-md-3 col-12">
              <option disabled selected >Année</option>
                </select>
              </div>
              </fieldset>
              </div>
              </section>

  <section class="pb-2">
  <a class="text-white" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapseExample">
  <h2 class="accordion text-white">Générique</h2>
            </a>
            <div class="collapse show" id="collapse5">
            <div id="persona">
              <label >Ajouter une personne</label>
              <div class="row">
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label for="prenom">Prénom</label>
                  <input name="prenom" id="prenom" type="text">
              </fieldset>
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label for="nom">Nom</label>
                  <input name="nom" id="nom" type="text">
              </fieldset>
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12" id="fonctionPersonne">
              <label for="fonction">Fonction</label>
              <input class='selectpicker w-100' type='text'>
               <a id="btnAppendfunction" class="text-white" style="cursor:pointer;" ><label class="pt-4">Ajouter une fonction supplémentaire</label></a>
               </fieldset>
               </div>
               </div>
            <a id="btnAppend3" class="text-white mb-6" style="cursor:pointer;" ><label>Ajouter une personne supplémentaire</label></a>
              <label class="margintopmed"><span data-toggle="tooltip" data-placement="top" title="diffuseur, organisme de financement, maison de services…">Ajouter une entreprise<sup class="text-danger">?</sup></span></label>
            <div id="collapse6">
              <div class="row">
            <fieldset class="col-12">
                  <label for="nom">Nom</label>
                  <input name="entreprise" id="entreprise" type="text">
              </fieldset>
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12" id="fonctionEntreprise">
              <label for="fonction">Fonction</label>
              <input class='selectpicker w-100' type='text'>
               <a id="btnAppendfunction2" class="text-white" style="cursor:pointer;" ><label class="pt-4">Ajouter une fonction supplémentaire</label></a>
               </fieldset>
               </div>
               <a id="btnAppend4" class="text-white mb-3 mt-5" style="cursor:pointer;" ><label>Ajouter une entreprise supplémentaire</label></a>
            </div>


            </section>

            <section class="pb-2">
            <a class="text-white" style="cursor:pointer;"  data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapseExample">
            <h2 class="accordion text-white">Photo(s) et vidéo(s)</h2>
            </a>
            <div class="collapse show" id="collapse7">
            <div id="imageSection" class="row">
            <fieldset class="col-12">
              <label for="image">Image de la production (Cliquez sur le bouton pour ajouter un fichier)</label>
              <input type="file" id="image" name="image" accept="image/png, image/jpeg">
              </fieldset>
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label required for="legend">Légende</label>
                  <input required name="legend" id="legend" type="text">
              </fieldset>
              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label required for="credit">Crédit</label>
                  <input required type="text" name="email" id="email" >
              </fieldset>
              <fieldset class="col-12">
                  <label for="description">Description</label>
                  <textarea required name="synopsis" name="synopsis" id="synopsis" cols="30" rows="5"></textarea>
              </fieldset>
              <a style="cursor:pointer;" id="btnAppend5" class="text-white mb-3 mt-3 col-12"><label>Ajouter une image supplémentaire</label></a>
              </div>
              <div class="row" id="urlimage">
              <fieldset class="col-xl-8 col-lg-8 col-md-8 col-12">
                  <label for="email">URL (vers d’autres images ou vidéos)</label>
                  <input type="text" name="url" id="url" >
              </fieldset>
              <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
                  <label for="email">Préciser</label>
                  <select name="precision">
               <option disabled selected >Choisir</option>
                <option value="1">Anglais</option>
                  <option value="2">Français</option>
               </select>
              </fieldset>
              <a style="cursor:pointer;" id="ajouturl" class="text-white mb-3 mt-3 col-12"><label>Ajouter une URL supplémentaire</label></a>
              </div>
           </div>
               </section>


  <section>

  <a class="text-white" data-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapseExample">
  <h2 class="accordion text-white">Informations supplémentaires</h2>
            </a>
            <div class="collapse show" id="collapse8">
               <label class="mt-3 mb-3"required>Langue(s)</label>
               <div class="row">
               <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
              <label for="langue" required>Originale</label>
              <select name="fonction">
               <option disabled selected >Choisir</option>
                <option value="1">Français</option>
                  <option value="2">Anglais</option>
              <option value="3">Espagnol</option>
               </select>
               </fieldset>
               <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
              <label for="subtitle">Sous-titres</label>
              <select multiple data-style="bg-white px-5 py-3 shadow-sm " class="selectpicker w-100" >
               <option disabled selected >Choisir</option>
               <option value="1">Français</option>
                  <option value="2">Anglais</option>
              <option value="3">Espagnol</option>
               </select>
               </fieldset>
               <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
              <label for="episodes">Doublage</label>
              <select multiple data-style="bg-white px-5 py-3 shadow-sm " class="selectpicker w-100" >
               <option disabled selected >Choisir</option>
               <option value="1">Français</option>
                  <option value="2">Anglais</option>
              <option value="3">Espagnol</option>
               </select>
               </fieldset>

               <fieldset class="col-12" >
              <label for="public">Public(s) cible(s)</label>
              <select multiple data-style="bg-white px-5 py-3 shadow-sm " class="selectpicker w-100" >
               <option disabled selected >Choisir</option>
                <option value="1">Enfant</option>
                  <option value="2">Adolescent</option>
              <option value="3">Adulte</option>
               </select>
               </fieldset>

               <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
              <label for="budget">Budget</label>
              <input required type="number" name="url" id="url" >
               </fieldset>
               <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
              <label for="monnaie">Monnaie</label>
              <select name="cash">
               <option disabled selected >Choisir</option>
                <option value="1">Dollar canadien</option>
                  <option value="2">Dollar US</option>
              <option value="3">Euro</option>
              <option value="3">Livre sterling</option>
               </select>
               </fieldset>
             </div>
               <div class="row" id="autretitre">
               <fieldset class="col-xl-8 col-lg-8 col-md-8 col-12">
                  <label for="titre">Autre titre </label>
                  <input required name="titre" id="titre" type="text" placeholder="" oninvalid="this.setCustomValidity('Ce champ est obligatoire. Si votre projet n’a pas encore de titre, entrez un titre temporaire.')" >
              </fieldset>
              <fieldset class="col-xl-4 col-lg-4 col-md-4 col-12">
              <label for="fonction">Préciser</label>
              <select name="fonction">
               <option disabled selected >Choisir</option>
                <option value="1">Sous-titre</option>
                  <option value="2">Titre provisoire</option>
              <option value="3">Initale</option>
               </select>
               </fieldset>
               <a style="cursor:pointer;" id="ajouttitre" class="text-white mb-3 mt-3 col-12"><label>Ajouter un autre titre</label></a>
               </div>
              </div>
               </section>

               <section>

               <a class="text-white"  style="cursor:pointer;" data-toggle="collapse" href="#collapse10" role="button" aria-expanded="false" aria-controls="collapseExample">
               <h2 class="accordion text-white">Formulaire rempli par</h2>
            </a>
            <div class="collapse show" id="collapse10">
              <div class="row">
               <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label required for="prenom">Prénom</label>
                  <input required name="prenom" id="contact" type="text">
              </fieldset>

              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label required for="nom">Nom</label>
                  <input required name="nom" id="nom" type="text">
              </fieldset>

              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label required for="email">Courrier électronique</label>
                  <input required type="email" name="email" id="email" >
              </fieldset>

              <fieldset class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <label for="telephone">Téléphone</label>
                  <input name="telephone" id="telephone" type="text">
              </fieldset>
              <fieldset class="col-12">
                  <label for="note">Note(s)/Remarque(s)</label>
                  <textarea id="story" name="story" rows="5" cols="33">
          </textarea>
              </fieldset>
              </div>
              </div>


              <button type="submit" class="cta  cta--reverse">
               Soumettre
              </button>
          </form>
      </div>
  </div>
  </section>


  <script>

  $(document).ready(function(){
    $("#btnAppend1").click(function(){
      $("#tournage").append("<input required name='tournage' type='text' placeholder='Inscrivez un lieu de tournage' class='mt-3'>");
    });
  });

  $(document).ready(function(){
    $("#btnAppend2").click(function(){
      var appendContent2=
      "<div class='row'>"
           +   "<fieldset class='col-xl-6 col-lg-6 col-md-6 col-12'>"
             +     "<label for='diffuseur'>Diffuseur</label>"
                +  "<input name='diffuseur' id='diffuseur' type='text'>"
             +"</fieldset>"
            + " <fieldset class='col-xl-6 col-lg-6 col-md-6 col-12'>"
               +  "<label  for='type'>URL</label>"
                + " <input name='url' id='url' type='text'>"
             + "</fieldset>"
             + "<fieldset class='col-12'>"
             + "<label for='date'>Date de diffusion :</label>"
            + "<select name='Jour' class='col-xl-3 col-lg-3 col-md-3 col-12'>"
            +  "<option disabled selected >Jour</option>"
             +  " </select>"
             +  " <select name='Mois' class='col-xl-3 col-lg-3 col-md-3 col-12'>"
             +"<option disabled selected >Mois</option>"
             + "  </select>"
              + "<select name='Saison' class='col-xl-3 col-lg-3 col-md-3 col-12'>"
             +"<option disabled selected >Saison</option>"
              + " </select>"
              +  "<select name='Année' class='col-xl-3 col-lg-3 col-md-3 col-12'>"
            + " <option disabled selected >Année</option>"
             +  "</select>"
            + "</fieldset>"
            + "</div>";
      $("#diffusion").append( appendContent2
      );
    });
  });

  $("#btnAppend3").on('click', function () {
    var appendContent3=   "<div class='row'>"
    + " <fieldset class='col-xl-6 col-lg-6 col-md-6 col-12'> "
    +" <label for='prenom'>Prénom</label>"
    + "<input name='prenom' id='prenom' type='text'>"
    + "</fieldset> "
    + " <fieldset class='col-xl-6 col-lg-6 col-md-6 col-12'>"
    + " <label for='nom'>Nom</label>"
     + "<input name='nom' id='nom' type='text'>"
      +"</fieldset>"
      +"<fieldset class='col-xl-6 col-lg-6 col-md-6 col-12' id='fonctionPersonne'>"
      +"<label for='fonction'>Fonction</label>"
      +"<input class='selectpicker w-100' type='text'> "
      +"<a id='btnAppendfunction' class='text-white' style='cursor:pointer;'><label class='pt-4'>Ajouter une fonction supplémentaire</label></a>"
      +"</fieldset>"
      +"</div>"  ;
        $('#persona').append(appendContent3);
      });


    $( "#btnAppendfunction").on('click',function(){
      var appendfonction=  "<label for='fonction'>Fonction</label><input class='selectpicker w-100 mb-6 marginbot' type='text'> ";
      $("#fonctionPersonne").append( appendfonction);
    });



  $(document).ready(function(){
    $( "#btnAppend4").click(function(){
      var appendContent4=  "<div class='row'>"
           + "<fieldset class='col-12'>"
             +  " <label for='nom'>Nom</label>"
                + " <input name='entreprise' id='entreprise' type='text'>"
            + " </fieldset>"
            + "<fieldset class='col-6'>"
            + " <label for='fonctions'>Fonction</label>"
           + " <input class='selectpicker w-100' type='text'> "
          +  " <a id='btnAppendfunction2' class='text-white' style='cursor:pointer;'' ><label class='pt-4'>Ajouter une fonction supplémentaire</label></a>"
             + " </fieldset> "
             + " </div>";
      $("#collapse6").append( appendContent4
      );
    });
  });

  $( "#btnAppendfunction2").on('click',function(){
      var appendfonction2=  "<label for='fonction'>Fonction</label><input class='selectpicker w-100 mb-6 marginbot' type='text'> ";
      $("#fonctionEntreprise").append( appendfonction2);
    });




  $(document).ready(function(){
    $( "#btnAppend5").click(function(){
    var appendContent5= "<div id='imageSection' class='row'>"
           + "<fieldset class='col-12'>"
            + "<label for='image'>Image de la production (Cliquez sur le bouton pour ajouter un fichier)</label>"
            + " <input type='file' id='image' name='image' accept='image/png, image/jpeg'>"
            + " </fieldset>"
             + "<fieldset class='col-xl-6 col-lg-6 col-md-6 col-12'>"
               +  "<label required for='legend'>Légende</label>"
                +  "<input required name='legend' id='legend' type='text'>"
             + "</fieldset>"
            + "<fieldset class='col-xl-6 col-lg-6 col-md-6 col-12'>"
              +  " <label required for='credit'>Crédit</label>"
                + " <input required type='text' name='email' id='email' >"
             + "</fieldset>"
             + "<fieldset class='col-12'>"
               +   "<label for='description'>Description</label>"
                + " <textarea required name='synopsis' name='synopsis' id='synopsis' cols='30' rows='5'></textarea>"
             + "</fieldset>";
      $("#collapse7").append( appendContent5
      );
    });
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $('#btnAdd').on('click', function () {
    var appendContent3=   "<div class='row'>"
    + " <fieldset class='col-xl-6 col-lg-6 col-md-6 col-12'> "
    +" <label for='prenom'>Prénom</label>"
    + "<input name='prenom' id='prenom' type='text'>"
    + "</fieldset> "
    + " <fieldset class='col-xl-6 col-lg-6 col-md-6 col-12'>"
    + " <label for='nom'>Nom</label>"
     + "<input name='nom' id='nom' type='text'>"
      +"</fieldset>"
      +"<fieldset class='col-xl-6 col-lg-6 col-md-6 col-12' id='fonfontest'>"
      +"<label for='fonction'>Fonction</label>"
      +"<input class='selectpicker w-100' type='text'> "
      +"<a id='btnAppendfunction' class='fonfon text-white' style='cursor:pointer;'><label class='pt-4'>Ajouter une fonction supplémentaire</label></a>"
      +"</fieldset>"
      +"</div>"  ;
        $('ul').append(appendContent3);
      });

      $('#ajouturl').on('click', function () {
    var appendurl=  " <fieldset class='col-xl-8 col-lg-8 col-md-8 col-12'>"
                +" <label for='email'>URL (vers d’autres images ou vidéos)</label>"
               + " <input type='text' name='url' id='url' >"
             + "</fieldset>"
            + " <fieldset class='col-xl-4 col-lg-4 col-md-4 col-12'>"
             + "  <label for='email'>Préciser</label>"
             + "   <select name='precision'>"
             +" <option disabled selected >Choisir</option>"
              + " <option value='1'>Anglais</option>"
              + "  <option value='2'>Français</option>"
              +" </select> "
              + "</fieldset>";
        $('#urlimage').append(appendurl);
      });

      $('#ajouttitre').on('click', function () {
    var appendtitre= "<fieldset class='col-xl-8 col-lg-8 col-md-8 col-12'>"
                + " <label for='titre'>Autre titre </label>"
                + "<input required name='titre' id='titre' type='text'  oninvalid='this.setCustomValidity('Ce champ est obligatoire. Si votre projet n’a pas encore de titre, entrez un titre temporaire.')' >"
             +" </fieldset>"
            +" <fieldset class='col-xl-4 col-lg-4 col-md-4 col-12'>"
            +" <label for='fonction'>Préciser</label>"
            + " <select name='fonction'>"
             +" <option disabled selected >Choisir</option>"
              + " <option value='1'>Sous-titre</option>"
              + " <option value='2'>Titre provisoire</option>"
            + " <option value='3'>Initale</option>"
            +  "</select>"
            + " </fieldset>";
        $('#autretitre').append(appendtitre);
      });

      $('body').on('click', function () {
        $('#fonfontest').append("<label for='fonction'class='pt-4' >Fonction</label><input class='selectpicker w-100' type='text'>");
      });




  </script>


    </body>
 <style>

/**
  Properties
  -> toutes les variables.
**/

/* http://meyerweb.com/eric/tools/css/reset/
   v2.0-modified | 20110126
   License: none (public domain)
*/

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

/* make sure to set some focus styles for accessibility */

:focus {
  outline: 0;
}

.bootstrap-select .bs-ok-default::after {
  width: 0.3em;
  height: 0.6em;
  border-width: 0 0.1em 0.1em 0;
  transform: rotate(45deg) translateY(0.5rem);
}

.btn.dropdown-toggle:focus {
  outline: none !important;
}

.underline{
  text-decoration: underline;
}

.tooltip {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 1.5rem;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  /* ... */
}


/* HTML5 display-role reset for older browsers */

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}

body {
  line-height: 1;
}

ol,
ul {
  list-style: none;
}

blockquote,
q {
  quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
  content: "";
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

input[type=search]::-webkit-search-cancel-button,
input[type=search]::-webkit-search-decoration,
input[type=search]::-webkit-search-results-button,
input[type=search]::-webkit-search-results-decoration {
  -webkit-appearance: none;
  -moz-appearance: none;
}

input[type=search] {
  -webkit-appearance: none;
  -moz-appearance: none;
  box-sizing: content-box;
}

textarea {
  overflow: auto;
  vertical-align: top;
  resize: vertical;
}

.margintopmed{
  margin-top:2rem;
}

.subsection{
padding-top:1.5rem;
padding-bottom:1.5rem;
}
 .marginbot{
   margin-bottom:16px;
 }


.accordion {
  color: #444;
  cursor: pointer;
  width: 100%;
  border: none;
  outline: none;
  font-size: 24px;
  transition: 0.4s;
  margin-bottom: 15px;
}

.accordion2 {
  color: #444;
  cursor: pointer;
  width: 100%;
  border: none;
  outline: none;
  font-size: 18px;
  transition: 0.4s;
  margin-bottom: 15px;
}


.medium{
  font-size:2.2rem;
}




.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 18px;
  float:right;
}

.accordion2:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 18px;
  float:right;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}

/**
 * Correct `inline-block` display not defined in IE 6/7/8/9 and Firefox 3.
 */

audio,
canvas,
video {
  display: inline-block;
  *display: inline;
  *zoom: 1;
  max-width: 100%;
}

/**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */

audio:not([controls]) {
  display: none;
  height: 0;
}

/**
 * Address styling not present in IE 7/8/9, Firefox 3, and Safari 4.
 * Known issue: no IE 6 support.
 */

[hidden] {
  display: none;
}

/**
 * 1. Correct text resizing oddly in IE 6/7 when body `font-size` is set using
 *    `em` units.
 * 2. Prevent iOS text size adjust after orientation change, without disabling
 *    user zoom.
 */

html {
  font-size: 100%;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -ms-text-size-adjust: 100%;
  /* 2 */
}

/**
 * Address `outline` inconsistency between Chrome and other browsers.
 */

a:focus {
  outline: thin dotted;
}

/**
 * Improve readability when focused and also mouse hovered in all browsers.
 */

a:active,
a:hover {
  outline: 0;
}


/**
 * 1. Remove border when inside `a` element in IE 6/7/8/9 and Firefox 3.
 * 2. Improve image quality when scaled in IE 7.
 */

img {
  border: 0;
  /* 1 */
  -ms-interpolation-mode: bicubic;
  /* 2 */
}

/**
 * Address margin not present in IE 6/7/8/9, Safari 5, and Opera 11.
 */

figure {
  margin: 0;
}

/**
 * Correct margin displayed oddly in IE 6/7.
 */

form {
  margin: 0;
}

/**
 * Define consistent border, margin, and padding.
 */

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}

.margin
/**
 * 1. Correct color not being inherited in IE 6/7/8/9.
 * 2. Correct text not wrapping in Firefox 3.
 * 3. Correct alignment displayed oddly in IE 6/7.
 */

legend {
  border: 0;
  /* 1 */
  padding: 0;
  white-space: normal;
  /* 2 */
  *margin-left: -7px;
  /* 3 */
}

/**
 * 1. Correct font size not being inherited in all browsers.
 * 2. Address margins set differently in IE 6/7, Firefox 3+, Safari 5,
 *    and Chrome.
 * 3. Improve appearance and consistency in all browsers.
 */

button,
input,
select,
textarea {
  font-size: 100%;
  /* 1 */
  margin: 0;
  /* 2 */
  vertical-align: baseline;
  /* 3 */
  *vertical-align: middle;
  /* 3 */
}

/**
 * Address Firefox 3+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */

button,
input {
  line-height: normal;
}

/**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Chrome, Safari 5+, and IE 6+.
 * Correct `select` style inheritance in Firefox 4+ and Opera.
 */

button,
select {
  text-transform: none;
}

/**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 * 4. Remove inner spacing in IE 7 without affecting normal text inputs.
 *    Known issue: inner spacing remains in IE 6.
 */

button,
html input[type=button],
input[type=reset],
input[type=submit] {
  -webkit-appearance: button;
  /* 2 */
  cursor: pointer;
  /* 3 */
  *overflow: visible;
  /* 4 */
}

/**
 * Re-set default cursor for disabled elements.
 */

button[disabled],
html input[disabled] {
  cursor: default;
}

/**
 * 1. Address box sizing set to content-box in IE 8/9.
 * 2. Remove excess padding in IE 8/9.
 * 3. Remove excess padding in IE 7.
 *    Known issue: excess padding remains in IE 6.
 */

input[type=checkbox],
input[type=radio] {
  box-sizing: border-box;
  /* 1 */
  padding: 0;
  /* 2 */
  *height: 13px;
  /* 3 */
  *width: 13px;
  /* 3 */
}

/**
 * 1. Address `appearance` set to `searchfield` in Safari 5 and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari 5 and Chrome
 *    (include `-moz` to future-proof).
 */

input[type=search] {
  -webkit-appearance: textfield;
  /* 1 */
  /* 2 */
  box-sizing: content-box;
}

/**
 * Remove inner padding and search cancel button in Safari 5 and Chrome
 * on OS X.
 */

input[type=search]::-webkit-search-cancel-button,
input[type=search]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * Remove inner padding and border in Firefox 3+.
 */

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

/**
 * 1. Remove default vertical scrollbar in IE 6/7/8/9.
 * 2. Improve readability and alignment in all browsers.
 */

textarea {
  overflow: auto;
  /* 1 */
  vertical-align: top;
  /* 2 */
}

/**
 * Remove most spacing between table cells.
 */

table {
  border-collapse: collapse;
  border-spacing: 0;
}

html,
button,
input,
select,
textarea {
  color: #222;
}

::-moz-selection {
  background: #b3d4fc;
  text-shadow: none;
}

::selection {
  background: #b3d4fc;
  text-shadow: none;
}

img {
  vertical-align: middle;
}

fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}

textarea {
  resize: none;
}

.chromeframe {
  margin: 0.2em 0;
  background: #ccc;
  color: #000;
  padding: 0.2em 0;
}

.text,
.text--light {
  color: #333;
  margin-bottom: 3rem;
}

.text--dark {
  color: white;
  margin-bottom: 3rem;
}

/*
Grid
-> systeme de grille fait maison
*/

.row--gutter {
  margin-left: -10px;
  margin-right: -10px;
}

.row--center {
  align-items: center;
}

[class*=col-] {
  position: relative;
}

.row {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.col-1 {
  width: 8.3333333333%;
}

.row--gutter .col-1 {
  width: calc( 100%/12*1 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-2 {
  width: 16.6666666667%;
}

.row--gutter .col-2 {
  width: calc( 100%/12*2 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-3 {
  width: 25%;
}

.row--gutter .col-3 {
  width: calc( 100%/12*3 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-4 {
  width: 33.3333333333%;
}

.row--gutter .col-4 {
  width: calc( 100%/12*4 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-5 {
  width: 41.6666666667%;
}

.row--gutter .col-5 {
  width: calc( 100%/12*5 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-6 {
  width: 50%;
}

.row--gutter .col-6 {
  width: calc( 100%/12*6 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-7 {
  width: 58.3333333333%;
}

.row--gutter .col-7 {
  width: calc( 100%/12*7 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-8 {
  width: 66.6666666667%;
}

.row--gutter .col-8 {
  width: calc( 100%/12*8 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-9 {
  width: 75%;
}

.row--gutter .col-9 {
  width: calc( 100%/12*9 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-10 {
  width: 83.3333333333%;
}

.row--gutter .col-10 {
  width: calc( 100%/12*10 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-11 {
  width: 91.6666666667%;
}

.row--gutter .col-11 {
  width: calc( 100%/12*11 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

.col-12 {
  width: 100%;
}

.row--gutter .col-12 {
  width: calc( 100%/12*12 - 20px );
  margin-left: 10px;
  margin-right: 10px;
}

@media (max-width: 1024px) {
  .col-md-1 {
    width: 8.3333333333%;
  }

  .row--gutter .col-md-1 {
    width: calc( 100%/12*1 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-2 {
    width: 16.6666666667%;
  }

  .row--gutter .col-md-2 {
    width: calc( 100%/12*2 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-3 {
    width: 25%;
  }

  .row--gutter .col-md-3 {
    width: calc( 100%/12*3 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-4 {
    width: 33.3333333333%;
  }

  .row--gutter .col-md-4 {
    width: calc( 100%/12*4 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-5 {
    width: 41.6666666667%;
  }

  .row--gutter .col-md-5 {
    width: calc( 100%/12*5 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-6 {
    width: 50%;
  }

  .row--gutter .col-md-6 {
    width: calc( 100%/12*6 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-7 {
    width: 58.3333333333%;
  }

  .row--gutter .col-md-7 {
    width: calc( 100%/12*7 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-8 {
    width: 66.6666666667%;
  }

  .row--gutter .col-md-8 {
    width: calc( 100%/12*8 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-9 {
    width: 75%;
  }

  .row--gutter .col-md-9 {
    width: calc( 100%/12*9 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-10 {
    width: 83.3333333333%;
  }

  .row--gutter .col-md-10 {
    width: calc( 100%/12*10 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-11 {
    width: 91.6666666667%;
  }

  .row--gutter .col-md-11 {
    width: calc( 100%/12*11 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-md-12 {
    width: 100%;
  }

  .row--gutter .col-md-12 {
    width: calc( 100%/12*12 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }
}

@media (max-width: 750px) {
  .col-sm-1 {
    width: 8.3333333333%;
  }

  .row--gutter .col-sm-1 {
    width: calc( 100%/12*1 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-2 {
    width: 16.6666666667%;
  }

  .row--gutter .col-sm-2 {
    width: calc( 100%/12*2 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-3 {
    width: 25%;
  }

  .row--gutter .col-sm-3 {
    width: calc( 100%/12*3 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-4 {
    width: 33.3333333333%;
  }

  .row--gutter .col-sm-4 {
    width: calc( 100%/12*4 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-5 {
    width: 41.6666666667%;
  }

  .row--gutter .col-sm-5 {
    width: calc( 100%/12*5 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-6 {
    width: 50%;
  }

  .row--gutter .col-sm-6 {
    width: calc( 100%/12*6 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-7 {
    width: 58.3333333333%;
  }

  .row--gutter .col-sm-7 {
    width: calc( 100%/12*7 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-8 {
    width: 66.6666666667%;
  }

  .row--gutter .col-sm-8 {
    width: calc( 100%/12*8 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-9 {
    width: 75%;
  }

  .row--gutter .col-sm-9 {
    width: calc( 100%/12*9 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-10 {
    width: 83.3333333333%;
  }

  .row--gutter .col-sm-10 {
    width: calc( 100%/12*10 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-11 {
    width: 91.6666666667%;
  }

  .row--gutter .col-sm-11 {
    width: calc( 100%/12*11 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-sm-12 {
    width: 100%;
  }

  .row--gutter .col-sm-12 {
    width: calc( 100%/12*12 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }
}

@media (max-width: 413px) {
  .col-xs-1 {
    width: 8.3333333333%;
  }

  .row--gutter .col-xs-1 {
    width: calc( 100%/12*1 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-2 {
    width: 16.6666666667%;
  }

  .row--gutter .col-xs-2 {
    width: calc( 100%/12*2 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-3 {
    width: 25%;
  }

  .row--gutter .col-xs-3 {
    width: calc( 100%/12*3 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-4 {
    width: 33.3333333333%;
  }

  .row--gutter .col-xs-4 {
    width: calc( 100%/12*4 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-5 {
    width: 41.6666666667%;
  }

  .row--gutter .col-xs-5 {
    width: calc( 100%/12*5 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-6 {
    width: 50%;
  }

  .row--gutter .col-xs-6 {
    width: calc( 100%/12*6 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-7 {
    width: 58.3333333333%;
  }

  .row--gutter .col-xs-7 {
    width: calc( 100%/12*7 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-8 {
    width: 66.6666666667%;
  }

  .row--gutter .col-xs-8 {
    width: calc( 100%/12*8 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-9 {
    width: 75%;
  }

  .row--gutter .col-xs-9 {
    width: calc( 100%/12*9 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-10 {
    width: 83.3333333333%;
  }

  .row--gutter .col-xs-10 {
    width: calc( 100%/12*10 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-11 {
    width: 91.6666666667%;
  }

  .row--gutter .col-xs-11 {
    width: calc( 100%/12*11 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }

  .col-xs-12 {
    width: 100%;
  }

  .row--gutter .col-xs-12 {
    width: calc( 100%/12*12 - 20px );
    margin-left: 10px;
    margin-right: 10px;
  }
}

/*
-------------------
Responsive (RWD)
-------------------
2018-04-19
-> les mixins peuvent être réutilisées directement dans les classes semantiques de composents BEM.
-> exemple d'utilisation : Desktop only : .sm-md-hidden | Desktop hidden : .sm-md-only
*/

@media (max-width: 750px) {
  .md-only {
    display: none;
  }
}

@media (max-width: 1024px) {
  .md-hidden {
    display: none;
  }
}

@media (max-width: 750px) {
  .md-up-hidden {
    display: none;
  }
}

@media (max-width: 750px) {
  .md-down-hidden {
    display: none;
  }
}

@media (max-width: 1024px) {
  .md-down-hidden {
    display: none;
  }
}

.sm-only {
  display: none;
}

@media (max-width: 750px) {
  .sm-only {
    display: block;
  }
}

@media (max-width: 750px) {
  .sm-hidden {
    display: none;
  }
}

/**
  Default
  -> les comportements qui s'appliquent dessus le reset generique
  -> ne pas utiliser de valeur en dur, pour pouvoir le laisser transportable
**/

* {
  box-sizing: border-box;
}

::-moz-selection {
  background-color: rgba(0, 0, 0, 0.1);
  color: inherit;
}

::selection {
  background-color: rgba(0, 0, 0, 0.1);
  color: inherit;
}

*:focus {
  outline: 1px solid #ff4d55;
}

body.theme-colnum *:focus {
  outline-color: white;
}

html {
  min-height: 100%;
  overflow-x: hidden;
  overflow-y: scroll;
  font-size: 10px;
}

body {
  min-height: 100%;
  font-family: "Rubik", arial, sans-serif;
  font-size: 1.5rem;
  color: white;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
  background-color: #00264d;
  background-repeat: repeat;
  scroll-behavior: smooth;
}

body.theme-colnum {
  background-color: #0b243a;
}

input,
textarea,
select,
button {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

strong,
b {
  font-weight: bold;
}

main {
  margin-top: 20px;
}

hgroup,
h1,
h2,
h3,
h4 {
  font-family: "Rubik", arial, sans-serif;
  text-transform: uppercase;
  text-rendering: geometricPrecision;
  font-weight: 600;
  line-height: 1.2;
}

body.theme-colnum hgroup:not([class]),
body.theme-colnum h1:not([class]),
body.theme-colnum h2:not([class]),
body.theme-colnum h3:not([class]),
body.theme-colnum h4:not([class]) {
  color: white;
}

h1:not([class]) {
  font-size: 30px;
  margin-bottom: 20px;
}

h2:not([class]) {
  font-size: 24px;
  margin-bottom: 15px;
}

p:not([class]) {
  margin-bottom: 20px;
  line-height: 1.3;
}

body.theme-colnum a:not([class]) {
  color: white;
}

body.theme-colnum a:not([class]):hover,
body.theme-colnum a:not([class]):active {
  color: white;
}

/*
Utilities
	-> des utilities semantiques c'est mieux.
	-> les utilities peuvent être utilisés en tant que mixins ou directement dans le markup html
	-> https://adamwathan.me/css-utility-classes-and-separation-of-concerns/
	-> moi-meme : je pense qu'il est necessaire de créer une mixin seulement s'il y a plus que 1 seule déclaration.
*/

[debug] [debug],
[class*=col-] [debug] {
  outline-color: orange;
}

/*
-------------------
Textes
-------------------
*/

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.text-right {
  text-align: right;
}

.uppercase {
  text-transform: uppercase;
}

.primary {
  color: #ff4d55;
}

.reset {
  text-decoration: none;
  color: inherit;
}

section{
  margin-top:3rem ;
  margin-bottom:3rem ;
}

.spaceForm{
  padding-top:1rem ;
  padding-bottom:1rem ;
}

/*
-------------------
Alignements et espacements
-------------------
*/

.spacer {
  height: 40px;
}

.spacer-bottom {
  margin-bottom: 40px;
}

.block-center {
  margin-left: auto;
  margin-right: auto;
}

/*
-------------------
Container
-------------------
*/

.container {
  margin-left: auto;
  margin-right: auto;
  max-width: 1000px;
  padding-left: 20px;
  padding-right: 20px;
  width: 100%;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-20 {
  margin-top: 2rem;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.pt-20 {
  padding-top: 2rem;
}

.pb-20 {
  padding-bottom: 2rem;
}

.px-1 {
  padding-left: 5px;
  padding-right: 5px;
}

.px-2 {
  padding-left: 10px;
  padding-right: 10px;
}

.px-3 {
  padding-left: 15px;
  padding-right: 15px;
}

.px-4 {
  padding-left: 20px;
  padding-right: 20px;
}

.px-5 {
  padding-left: 25px;
  padding-right: 25px;
}

.px-6 {
  padding-left: 30px;
  padding-right: 30px;
}

.px-7 {
  padding-left: 35px;
  padding-right: 35px;
}

.px-8 {
  padding-left: 40px;
  padding-right: 40px;
}

.px-9 {
  padding-left: 45px;
  padding-right: 45px;
}

.px-10 {
  padding-left: 50px;
  padding-right: 50px;
}

.px-11 {
  padding-left: 55px;
  padding-right: 55px;
}

.px-12 {
  padding-left: 60px;
  padding-right: 60px;
}

.px-13 {
  padding-left: 65px;
  padding-right: 65px;
}

.px-14 {
  padding-left: 70px;
  padding-right: 70px;
}

.px-15 {
  padding-left: 75px;
  padding-right: 75px;
}

.px-16 {
  padding-left: 80px;
  padding-right: 80px;
}

.px-17 {
  padding-left: 85px;
  padding-right: 85px;
}

.px-18 {
  padding-left: 90px;
  padding-right: 90px;
}

.px-19 {
  padding-left: 95px;
  padding-right: 95px;
}

.px-20 {
  padding-left: 100px;
  padding-right: 100px;
}

.px-21 {
  padding-left: 105px;
  padding-right: 105px;
}

.px-22 {
  padding-left: 110px;
  padding-right: 110px;
}

.px-23 {
  padding-left: 115px;
  padding-right: 115px;
}

.px-24 {
  padding-left: 120px;
  padding-right: 120px;
}

.tt-uc {
  text-transform: uppercase;
}

.ta-j {
  text-align: justify;
}

.translation {
  font-size: 0.45em;
  opacity: 0.75;
  color: #ff4d55;
}

.translation--big {
  font-size: 0.8em;
}

.table,
table:not([class]) {
  border: 1px solid #ddd;
  width: 100%;
}

.table thead th,
table:not([class]) thead th {
  padding: 5px;
  font-weight: 900;
}

.table tr:nth-child(even),
table:not([class]) tr:nth-child(even) {
  background-color: #eee;
}

.table td,
table:not([class]) td {
  padding: 12px 20px;
  border: 1px solid #ccc;
  border-width: 1px 0;
}

.table a,
table:not([class]) a {
  color: #ff4d55;
  text-decoration: none;
}

body.theme-colnum .table a,
body.theme-colnum table:not([class]) a {
  color: #1b4f7f;
}

body.theme-colnum .table a:hover,
body.theme-colnum .table a:active,
body.theme-colnum table:not([class]) a:hover,
body.theme-colnum table:not([class]) a:active {
  color: black;
}

.table--mini thead {
  font-size: 0.9em;
}

.table--mini tbody {
  font-size: 0.9em;
}

.table--mini td {
  padding: 5px;
}

.warning {
  color: white;
  background-color: red !important;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.content {
  margin-top: 0;
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

@media (max-width: 750px) {
  .content {
    padding-top: 60px;
  }
}

@media (max-width: 400px) {
  .content {
    padding-top: 50px;
  }
}

/*
Utilities
	-> des utilities semantiques c'est mieux.
	-> les utilities peuvent être utilisés en tant que mixins ou directement dans le markup html
	-> https://adamwathan.me/css-utility-classes-and-separation-of-concerns/
	-> moi-meme : je pense qu'il est necessaire de créer une mixin seulement s'il y a plus que 1 seule déclaration.
*/

[debug] [debug],
[class*=col-] [debug] {
  outline-color: orange;
}

/*
-------------------
Textes
-------------------
*/

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.text-right {
  text-align: right;
}

.uppercase {
  text-transform: uppercase;
}

.primary {
  color: #ff4d55;
}

.reset {
  text-decoration: none;
  color: inherit;
}

/*
-------------------
Alignements et espacements
-------------------
*/

.spacer {
  height: 40px;
}

.spacer-bottom {
  margin-bottom: 40px;
}

.block-center {
  margin-left: auto;
  margin-right: auto;
}

/*
-------------------
Container
-------------------
*/

.container {
  margin-left: auto;
  margin-right: auto;
  max-width: 1000px;
  padding-left: 20px;
  padding-right: 20px;
  width: 100%;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-20 {
  margin-top: 2rem;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.pt-20 {
  padding-top: 2rem;
}

.pb-20 {
  padding-bottom: 2rem;
}

.px-1 {
  padding-left: 5px;
  padding-right: 5px;
}

.px-2 {
  padding-left: 10px;
  padding-right: 10px;
}

.px-3 {
  padding-left: 15px;
  padding-right: 15px;
}

.px-4 {
  padding-left: 20px;
  padding-right: 20px;
}

.px-5 {
  padding-left: 25px;
  padding-right: 25px;
}

.px-6 {
  padding-left: 30px;
  padding-right: 30px;
}

.px-7 {
  padding-left: 35px;
  padding-right: 35px;
}

.px-8 {
  padding-left: 40px;
  padding-right: 40px;
}

.px-9 {
  padding-left: 45px;
  padding-right: 45px;
}

.px-10 {
  padding-left: 50px;
  padding-right: 50px;
}

.px-11 {
  padding-left: 55px;
  padding-right: 55px;
}

.px-12 {
  padding-left: 60px;
  padding-right: 60px;
}

.px-13 {
  padding-left: 65px;
  padding-right: 65px;
}

.px-14 {
  padding-left: 70px;
  padding-right: 70px;
}

.px-15 {
  padding-left: 75px;
  padding-right: 75px;
}

.px-16 {
  padding-left: 80px;
  padding-right: 80px;
}

.px-17 {
  padding-left: 85px;
  padding-right: 85px;
}

.px-18 {
  padding-left: 90px;
  padding-right: 90px;
}

.px-19 {
  padding-left: 95px;
  padding-right: 95px;
}

.px-20 {
  padding-left: 100px;
  padding-right: 100px;
}

.px-21 {
  padding-left: 105px;
  padding-right: 105px;
}

.px-22 {
  padding-left: 110px;
  padding-right: 110px;
}

.px-23 {
  padding-left: 115px;
  padding-right: 115px;
}

.px-24 {
  padding-left: 120px;
  padding-right: 120px;
}

.tt-uc {
  text-transform: uppercase;
}

.ta-j {
  text-align: justify;
}

.translation {
  font-size: 0.45em;
  opacity: 0.75;
  color: #ff4d55;
}

.translation--big {
  font-size: 0.8em;
}

.table,
table:not([class]) {
  border: 1px solid #ddd;
  width: 100%;
}

.table thead th,
table:not([class]) thead th {
  padding: 5px;
  font-weight: 900;
}

.table tr:nth-child(even),
table:not([class]) tr:nth-child(even) {
  background-color: #eee;
}

.table td,
table:not([class]) td {
  padding: 12px 20px;
  border: 1px solid #ccc;
  border-width: 1px 0;
}

.table a,
table:not([class]) a {
  color: #ff4d55;
  text-decoration: none;
}

body.theme-colnum .table a,
body.theme-colnum table:not([class]) a {
  color: #1b4f7f;
}

body.theme-colnum .table a:hover,
body.theme-colnum .table a:active,
body.theme-colnum table:not([class]) a:hover,
body.theme-colnum table:not([class]) a:active {
  color: black;
}

.table--mini thead {
  font-size: 0.9em;
}

.table--mini tbody {
  font-size: 0.9em;
}

.table--mini td {
  padding: 5px;
}

.warning {
  color: white;
  background-color: red !important;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.cta,
.cta--primary {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  border: 1px solid #ff4d55;
  display: inline-block;
  padding: 10px;
  color: #ff4d55;
  text-decoration: none;
  margin: 15px;
  text-align: center;
  position: relative;
  border-radius: 5px;
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

body.theme-colnum .cta,
body.theme-colnum .cta--primary {
  color: white;
  border-color: white;
}

.cta--reverse {
  background-color:#1b4f7f;
  border-color: white;
  color: white;
}

body.theme-colnum .cta--reverse {
  background-color: #1b4f7f;
}

.cta--is-arrow-down {
  padding-right: 25px;
}

.cta--is-arrow-down:after {
  border: 4px solid transparent;
  border-top: 5px solid #ff4d55;
  content: "";
  display: block;
  height: 0;
  position: absolute;
  right: 10px;
  top: 55%;
  transform: translateY(-50%);
  transition: all 0.1s linear;
  width: 0;
}

body.theme-colnum .cta--is-arrow-down:after {
  border-top-color: white;
}

.cta--is-arrow-right {
  padding-right: 25px;
}

.cta--is-arrow-right:after {
  border: 4px solid transparent;
  border-left: 5px solid #ff4d55;
  content: "";
  display: block;
  height: 0;
  position: absolute;
  right: 10px;
  top: 51%;
  transform: translateY(-50%);
  transition: all 0.1s linear;
  width: 0;
}

body.theme-colnum .cta--is-arrow-right:after {
  border-left-color: white;
}

body.theme-colnum .cta--primary {
  color: white;
  border-color: #222;
  background-color: #222;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.navigation {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  width: 100%;
  background-color: white;
  color: #000;
  height: 48px;
  transition: height ease-in-out 0.5s;
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

@media (max-width: 1024px) {
  .navigation {
    height: 60px;
  }
}

@media (max-width: 400px) {
  .navigation {
    height: 50px;
  }
}

body.theme-colnum .navigation {
  background: #555;
  color: white;
}

@media (max-width: 750px) {
  .navigation {
    position: fixed;
    z-index: 999;
  }
}

.navigation__container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  height: 100%;
}

@media (max-width: 1024px) {
  .navigation__container {
    justify-content: space-between;
  }
}

.navigation__logo {
  display: inline-block;
  height: 100%;
  width: 86px;
  transition: height ease-in-out 0.5s, width ease-in-out 0.5s;
}

@media (max-width: 1024px) {
  .navigation__logo {
    width: 115px;
  }
}

@media (max-width: 750px) {
  .navigation__logo {
    width: 95px;
  }
}

.navigation__logo-link {
  z-index: 999;
  display: inline-block;
  height: 100%;
  width: auto;
  padding: 6px 0;
  transition: height ease-in-out 0.5s, width ease-in-out 0.5s, padding ease-in-out 0.5s;
}

@media (max-width: 750px) {
  .navigation__logo-link {
    padding: 5px 0;
  }
}

@media (max-width: 1024px) {
  .navigation__logo-link {
    width: 115px;
  }
}

.navigation__menu-lists {
  display: flex;
}

.navigation .menu__entry-link {
  color: #555;
}

body.theme-colnum .navigation .menu__entry-link {
  color: white;
}

.navigation__ctas-wrapper {
  margin-left: auto;
  display: flex;
  justify-content: flex-end;
}

@media (max-width: 750px) {
  .navigation__ctas-wrapper {
    display: none;
  }
}

.navigation__cta {
  color: white;
  border-color: white;
  margin: 0 10px;
}

.navigation__cta:first-child {
  margin-left: 0;
}

.navigation__cta:last-child {
  margin-right: 0;
}

@media (max-width: 750px) {
  .navigation__cta {
    display: block;
    border-bottom: 1px solid #ccc;
    padding: 15px 20px 15px 10px;
    font-size: 21px;
    text-decoration: none;
    margin: 0px;
  }
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

form {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  margin: 15px 0;
  font-size: 0;
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

form fieldset {
  margin-bottom: 25px;
}

form legend {
  font-size: 18px;
  display: block;
  width: 100%;
  padding-bottom: 10px;
  margin-bottom: 15px;
  border-bottom: 1px solid #ccc;
}

input[type="time" i] {
  align-items: center;
  display: -webkit-inline-flex;
  font-family: monospace;
  padding-inline-start: 1px;
  cursor: default;
  overflow: hidden;
  padding-left: 10px;
  padding-right: 10px;
}

body.theme-colnum form legend {
  color: white;
}

form label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
}

body.theme-colnum form label {
  color: white;
}

form input[type=text],
form input[type=date],
form input[type=email],
form input[type=number],
form input[type=integer],
form textarea,
form select,
form button {
  font-size: 18px;
  border: 1px solid #ccc;
  padding: 7.5px 10px;
  color: #000;
  width: 100%;
}

form input[type=file]{
  font-size: 18px;
  color: white;
}

body.theme-colnum form input[type=text],
body.theme-colnum form input[type=date],
body.theme-colnum form input[type=email],
body.theme-colnum form input[type=number],
body.theme-colnum form input[type=integer],
body.theme-colnum form textarea,
body.theme-colnum form select,
body.theme-colnum form button {
  border-color: #919191;
}

form select {
  height:37.8px;
  padding-right: 45px;
  background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc);
  background-position: calc(100% - 20px) calc(15px + 2px), calc(100% - 15px) calc(15px + 2px), calc(100% - 35px) 4px;
  background-size: 5px 5px, 5px 5px, 1px 25px;
  background-repeat: no-repeat;
}

form button {
  background-color: inherit;
  margin: 0 !important;
}

form input[type=checkbox],
form input[type=radio] {
  box-sizing: border-box;
  padding: 0;
}

form input[type=checkbox] {
  -webkit-appearance: checkbox;
  -moz-appearance: checkbox;
       appearance: checkbox;
}

form input[type=radio] {
  -webkit-appearance: radio;
  -moz-appearance: radio;
       appearance: radio;
}

form .width-half {
  width: calc(50% - 10px);
  margin-right: 10px;
  display: inline-block;
}

form .width-threequart {
  width: calc(75% - 10px);
  margin-right: 10px;
  display: inline-block;
}

form .width-quart {
  width: calc(25% - 10px);
  margin-right: 10px;
  display: inline-block;
}

form .width-half:nth-child(2) {
  margin-right: 0;
  margin-left: 10px;
}

form label[required]:after {
  content: "*";
  color: red;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.7rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.7rem;
}

.form-check-input:disabled ~ .form-check-label,
.form-check-input[disabled] ~ .form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
  display: inline-block;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #007bff;
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.header {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  border: none;
  height: auto;
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

@media (max-width: 750px) {
  .header {
    height: 0;
    margin: 0;
    overflow: hidden;
    display: block;
  }
}

body.theme-colnum .header {
  background-color: #1b4f7f;
  border: none;
}

.header__title {
  margin: 15px 0;
}

@media (max-width: 750px) {
  .header__title {
    position: fixed;
    top: 0px;
    text-align: center;
    width: 40%;
    display: flex;
    align-items: center;
    height: 60px;
    line-height: 1.3;
    margin: 0;
    z-index: 999;
    left: 50%;
    transform: translateX(-38%);
  }
}

@media (max-width: 400px) {
  .header__title {
    height: 50px;
    left: 50%;
    transform: translateX(-38%);
  }
}

.header__title-link {
  font-size: 21px;
  font-weight: 900;
  color: #333;
  text-decoration: none;
  display: inline-block;
  width: 100%;
}

body.theme-colnum .header__title-link {
  color: white;
  text-transform: uppercase;
}

@media (max-width: 750px) {
  .header__title-link {
    font-size: 18px;
  }
}

@media (max-width: 400px) {
  .header__title-link {
    font-size: 15px;
  }
}

.header__title-icon {
  width: 22px;
  fill: white;
  margin: 0 10px 0;
  top: 2px;
  position: relative;
}

@media (max-width: 750px) {
  .header__title-icon {
    display: none;
  }
}

@media (max-width: 1024px) {
  .header__title-icon {
    display: none;
  }
}

body.theme-colnum .header__menu {
  display: none;
}

.header__link {
  font-size: 13px;
  font-weight: 900;
  color: #333;
}

.header__link::first-letter {
  text-transform: uppercase;
}

body.theme-colnum .header__link {
  text-transform: uppercase;
  color: white;
}

.header__nav-button {
  margin-left: 10px;
  margin-right: 10px;
}

.header__nav-button:first-child {
  margin-left: 0;
}

.header__nav-button:last-child {
  margin-right: 0;
}

@media (max-width: 750px) {
  .header__nav-button {
    margin-left: 0;
    margin-right: 0;
  }
}

.header__row {
  transition: height ease-in-out 0.5s;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  padding: 0;
}

@media (max-width: 750px) {
  .header__row {
    flex-direction: column;
    height: auto;
    padding-top: 1rem;
  }
}

.header__delimiter {
  margin: 0;
  border-color: rgba(255, 255, 255, 0.1);
}

@media (max-width: 750px) {
  .header__search {
    order: 99;
  }
}

@media (max-width: 1024px) {
  .header__search {
    order: 99;
    margin-top: 0px;
  }
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.simple-search {
  display: flex;
  align-items: center;
  position: relative;
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
  #STATES
  \*------------------------------------*/
}

@media (max-width: 750px) {
  .simple-search {
    padding: 15px 10px;
    margin: 0;
    border-bottom: 1px solid #ccc;
  }
}

.simple-search__input {
  border: 0;
  padding: 10px;
  background-color: transparent;
  color: #333333;
}

body.theme-colnum .simple-search__input {
  background-color: rgba(255, 255, 255, 0.05);
  color: white;
}

.simple-search__input::-webkit-input-placeholder {
  color: #ccc;
}

.simple-search__input::-moz-placeholder {
  color: #ccc;
}

.simple-search__input:-ms-input-placeholder {
  color: #ccc;
}

.simple-search__input::-ms-input-placeholder {
  color: #ccc;
}

.simple-search__input::placeholder {
  color: #ccc;
}

.simple-search__icon {
  height: 30px;
  width: 40px;
  padding: 0 5px;
  border: 0;
  background: transparent;
}

.simple-search__icon > svg {
  vertical-align: middle;
}

.simple-search__icon > svg > path {
  fill: white;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.menu {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

.menu__mobile-controller {
  display: none;
}

.menu__mobile-icon {
  display: none;
  width: 47px;
  height: 100%;
  position: relative;
  top: -3px;
  box-sizing: border-box;
  background-color: white;
  font-size: 0;
  z-index: 130;
}

body.theme-colnum .menu__mobile-icon {
  background-color: #555;
  color: white;
}

@media (max-width: 750px) {
  .menu__mobile-icon {
    display: block;
  }
}

.menu__mobile-icon > span {
  display: inline-block;
  width: 40px;
  height: 5px;
  background-color: #ccc;
  margin: 2.5px 5px;
}

.menu__mobile-icon > span:last-child {
  margin-bottom: 0;
}

.menu__lists {
  display: flex;
}

@media (max-width: 750px) {
  .menu__lists {
    display: none;
  }
}

.menu__list {
  padding: 15px 30px;
  position: relative;
}

@media (max-width: 1024px) {
  .menu__list {
    padding: 15px 20px 15px 10px;
  }
}

@media (max-width: 750px) {
  .menu__list {
    font-size: 21px;
    padding: 0;
  }
}

.menu__list:after {
  content: "";
  position: absolute;
  right: 0;
  top: calc(50% - 15px);
  width: 1px;
  height: 30px;
  background-color: rgba(0, 0, 0, 0.075);
}

@media (max-width: 750px) {
  .menu__list:after {
    display: none;
  }
}

.menu__list-title {
  text-decoration: none;
  color: #919191;
}

body.theme-colnum .menu__list-title {
  color: white;
}

@media (max-width: 750px) {
  .menu__list-title {
    border-bottom: 1px solid #ccc;
    padding: 15px 20px 15px 10px;
    display: inline-block;
    font-size: 21px;
    width: 100%;
  }
}

.menu__entries {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  min-width: 250px;
  top: 68px;
  left: 0;
  padding: 30px 0 10px;
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.075);
  transition: visibility 0s ease-in-out 0.2s, opacity 0.2s ease-in-out;
  z-index: 101;
}

body.theme-colnum .menu__entries {
  background-color: #333333;
  border: #333333 1px solid;
}

@media (max-width: 750px) {
  .menu__entries {
    visibility: inherit;
    opacity: 1;
    position: relative;
    padding: 0;
    top: inherit;
    background: inherit;
    border: 0;
  }
}

.menu__entries:after {
  content: "";
  position: absolute;
  top: -6px;
  left: 35px;
  width: 12px;
  height: 12px;
  background-color: white;
  transform: rotate(45deg);
  border: 1px solid rgba(0, 0, 0, 0.075);
  border-width: 0 1px 1px 0;
}

body.theme-colnum .menu__entries:after {
  top: -8px;
  background-color: #333333;
  border: #333333 1px solid;
}

@media (max-width: 750px) {
  .menu__entries:after {
    display: none;
  }
}

.menu__entries-layout {
  min-width: 250px;
  padding-top: 15px;
  padding-bottom: 15px;
}

.menu__entry-link {
  display: block;
  padding: 10px 20px;
  text-decoration: none;
  color: #919191;
}

@media (max-width: 750px) {
  .menu__entry-link {
    color: white;
  }
}

body.theme-colnum .menu__entry-link {
  font-size: 14px;
  font-family: "Rubik", arial, sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  color: white;
  background-color: #333333;
}

body.theme-colnum .menu__entry-link:hover {
  color: #67913D;
}

.menu__list-title--has-sub-entries:after {
  border: 4px solid transparent;
  border-top: 5px solid #919191;
  content: "";
  display: block;
  height: 0;
  position: absolute;
  right: 15px;
  top: 55%;
  transform: translateY(-50%);
  transition: all 0.1s linear;
  width: 0;
}

@media (max-width: 750px) {
  .menu__list-title--has-sub-entries:after {
    display: none;
  }
}

@media (max-width: 1024px) {
  .menu__list-title--has-sub-entries:after {
    right: 8px;
  }
}

.menu__list:last-child:after {
  display: none;
}

.menu__list-title--reverse {
  color: white;
}

.menu__entries--reverse:before {
  background-color: white !important;
  border-color: white !important;
}

.menu__entries--has-layout {
  display: flex;
  padding: 0;
}

@media (max-width: 750px) {
  .menu__entries--has-layout {
    display: block;
  }
}

.menu__entries-layout--feature {
  background-color: #555;
}

@media (max-width: 750px) {
  .menu__entries-layout--feature {
    background-color: transparent;
  }
}

body.theme-colnum .menu__entries-layout--feature {
  color: white;
  background-color: #67913D;
}

.menu__entry-link--feature {
  color: white;
}

body.theme-colnum .menu__entry-link--feature {
  color: white;
  background-color: #67913D;
}

body.theme-colnum .menu__entry-link--feature:hover {
  color: #333333;
}

.menu--explore {
  margin-top: 1em 0 2em 0;
  font-size: 1rem;
}

body.theme-colnum .menu--explore {
  color: white;
  text-transform: uppercase;
}

.menu--explore__list-title {
  background: none;
  margin-bottom: 1em;
  font-weight: bold;
}

body.theme-colnum .menu--explore__list-title {
  color: white;
  text-transform: uppercase;
}

body.theme-colnum .menu--explore__list-title-link {
  color: white;
  text-transform: uppercase;
  foint-weight: bold;
  font-size: 1em;
  text-decoration: none;
}

.menu--explore__entries {
  background: none;
  margin-bottom: 2rem;
}

.menu--explore__entry {
  margin-bottom: 0.3rem;
}

.menu--explore__entry-link {
  background: none;
  text-decoration: none;
  font-size: 0.8em;
  line-height: 1.3;
}

body.theme-colnum .menu--explore__entry-link {
  color: white;
  text-transform: uppercase;
}

@media (max-width: 750px) {
  .menu__mobile-controller:checked ~ .menu__lists {
    display: flex;
    flex-direction: column;
    position: absolute;
    overflow: auto;
    padding: 60px 0px 20px 0px;
    top: 0;
    left: 0;
    background-color: #555;
    z-index: 120;
    width: 100%;
    height: 100vh;
  }

  .menu__mobile-controller:checked ~ .menu__lists:before {
    z-index: 998;
    height: 60px;
    width: 100%;
    display: block;
    content: " ";
    position: fixed;
    background-color: #555;
    top: 0px;
    border-bottom: 1px solid #ccc;
  }
}

@media (max-width: 400px) {
  .menu__mobile-controller:checked ~ .menu__lists {
    padding: 50px 0px 20px 0px;
  }

  .menu__mobile-controller:checked ~ .menu__lists:before {
    height: 50px;
  }
}

.menu__entry-link:hover,
.menu__list-title:hover {
  color: #ff4d55;
}

.menu__entry-link:hover:after,
.menu__list-title:hover:after {
  border-top-color: #ff4d55;
}

.menu__list-title--reverse:hover {
  color: #ccc;
}

.menu__list-title--reverse:hover:after {
  border-top-color: #ccc;
}

.menu__list:hover .menu__entries {
  visibility: visible;
  opacity: 1;
  transition-delay: 0s;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.cards {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  display: flex;
  margin-top: 20px;
  margin-bottom: 20px;
  justify-content: center;
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

.cards__item {
  display: flex;
  z-index: 1;
  transition: transform 0.2s 0s;
}

.cards--featured {
  margin: 0;
  background-color: #000;
}

.cards--featured .row {
  justify-content: center;
}

.cards__item:hover {
  transform: scale(1.06);
  z-index: 999;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.card {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  text-align: left;
  border-radius: 5px;
  overflow: hidden;
  border-width: 1px;
  border-style: solid;
  border-color: rgba(0, 0, 0, 0.075);
  margin: 10px 0;
  display: flex;
  width: 100%;
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

body.theme-colnum .card {
  border-color: #1b4f7f;
}

.card__wrapper-link {
  text-decoration: none;
  color: #ff4d55;
  display: flex;
  flex: 1;
  flex-direction: column;
  overflow: hidden;
}

body.theme-colnum .card__wrapper-link {
  color: #0b243a;
  background-color: #1b4f7f;
}

.card__image {
  width: 100%;
  height: 185px;
  -o-object-fit: cover;
     object-fit: cover;
  text-align: center;
  background-image: url(/images/icon-image-solid.svg?7231f1c2e2bd9952100f9f996b87c7f1);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: 35% auto;
  background-color: rgba(0, 0, 0, 0.22);
}

.card__content {
  padding: 30px 20px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.card__title {
  color: #ff4d55;
  font-size: 24px;
  font-weight: 900;
  margin-bottom: 30px;
  font-family: "Rubik", arial, sans-serif;
  text-transform: none;
  text-rendering: optimizeLegibility;
  font-weight: 400;
  line-height: 1.3;
}

body.theme-colnum .card__title {
  color: white;
  font-family: "Rubik", arial, sans-serif;
  text-transform: uppercase;
  text-rendering: geometricPrecision;
  font-weight: 600;
  line-height: 1.2;
  text-transform: none;
}

.card__producer {
  font-size: 15px;
  line-height: 1.5;
  padding-bottom: 20px;
  flex-grow: 1;
}

body.theme-colnum .card__producer {
  color: white;
}

.card__state {
  padding-bottom: 10px;
}

.card--featured {
  border-radius: 0;
  margin: 0;
}

body.theme-colnum .card--featured {
  border-color: #0b243a;
  border-width: 1px;
  border-style: solid;
}

.bold{
  font-weight:600;
}

.row-without-margin{
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;

}


.card--featured .card__image {
  height: 160px;
}

@media (max-width: 750px) {
  .card--featured .card__image {
    height: 95px;
  }
}

.card--featured .card__content {
  padding: 10px;
}

.card--featured .card__title {
  font-size: 15px;
  margin-bottom: 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.card .fa {
  color: #ff4d55;
  margin-right: 5px;
}

body.theme-colnum .card .fa {
  color: #0b243a;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.single {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

.single__carousel {
  min-width: 100%;
  background-color: #eee;
  text-align: center;
  margin-bottom: 30px;
  font-size: 0;
  overflow: hidden;
  overflow-x: auto;
  white-space: nowrap;
  overflow-y: hidden;
  position: relative;
}

body.theme-colnum .single__carousel {
  background-color: rgba(0, 0, 0, 0.8);
}

.single__carousel-item {
  position: relative;
  display: inline-block;
  margin: 2.5px;
  display: inline-block;
  height: 100%;
}

.single__carousel-item-image {
  height: 300px;
  width: auto;
  display: inline-block;
}

@media (max-width: 1024px) {
  .single__carousel-item-image {
    height: 237px;
  }
}

.single__carousel-item-legend {
  position: absolute;
  bottom: 4%;
  right: 0;
  font-size: 12px;
  color: white;
  background: rgba(0, 0, 0, 0.6);
  padding: 10px;
}

.single__subheader-wrapper {
  padding-bottom: 25px;
}

.single__advertisment-wrapper {
  position: relative;
}

.single__advertisment-wrapper img {
  max-width: 100%;
}

.single__breadcrumb {
  margin-bottom: 30px;
  color: #999;
}

.single__breadcrumb-entry {
  color: #999;
  text-decoration: none;
}

.single__title {
  font-size: 40px;
  color: #ff4d55;
  margin-bottom: 30px;
}

body.theme-colnum .single__title {
  color: white;
  font-family: "Rubik", arial, sans-serif;
  text-transform: uppercase;
  text-rendering: geometricPrecision;
  font-weight: 600;
  line-height: 1.2;
  text-transform: none;
}

.single__role {
  font-size: 17px;
  color: #999;
  margin-bottom: 3px;
  line-height: 1.3;
}

.single__role-name {
  color: #ff4d55;
  text-decoration: none;
}

body.theme-colnum .single__role-name {
  color: white;
}

.single__metas-wrapper {
  margin-top: 20px;
  font-size: 17px;
  margin-bottom: 30px;
}

.single__meta {
  margin-right: 20px;
  color: #333333;
}

body.theme-colnum .single__meta {
  color: white;
}

.single__meta .fa {
  color: #ff4d55;
  margin-right: 5px;
}

body.theme-colnum .single__meta .fa {
  color: white;
}

.single__status {
  display: flex;
  margin-bottom: 30px;
}

.single__status-step {
  border: 1px solid #ccc;
  border-right-width: 0;
  padding: 10px;
  width: 25%;
  text-align: center;
  color: #999;
}

.single__complementary-wrapper {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f9f9f9;
  overflow: hidden;
}

body.theme-colnum .single__complementary-wrapper {
  background-color: #1b4f7f;
}

.single__complementary-block {
  background-color: white;
  border: 1px solid #eee;
  border-radius: 5px;
  padding: 25px;
  margin-bottom: 40px;
}

.single__complementary-block > p:not([class]) {
  color: #333;
}

.single__complementary-block > p:not([class]) a:not([class]),
.single__complementary-block > p:not([class]) a:not([class]):active {
  color: #1b4f7f;
  font-weight: bold;
}

.single__complementary-block > p:not([class]) a:not([class]):hover,
.single__complementary-block > p:not([class]) a:not([class]):visited:hover {
  color: #2b79c1;
}

.single__complementary-block > p:not([class]) a:not([class]):visited {
  color: rgba(27, 79, 127, 0.7);
}

.single__complementary-block-title {
  font-size: 20px;
  font-weight: 700;
  color: #333;
  padding-bottom: 20px;
  border-bottom: 1px solid #ccc;
  margin-bottom: 20px;
}

.single__complementary-block-title > .fa {
  color: #ff4d55;
  margin-right: 10px;
}

body.theme-colnum .single__complementary-block-title > .fa {
  color: #1b4f7f;
}

.single__complementary-block-link {
  font-weight: bold;
}

.single__complementary-block-link,
.single__complementary-block-link:active {
  color: #1b4f7f;
}

.single__complementary-block-link:hover,
.single__complementary-block-link:visited:hover {
  color: #2b79c1;
}

.single__complementary-block-link:visited {
  color: rgba(27, 79, 127, 0.7);
}

.single__complementary-block-link--article {
  display: inline-block;
  padding-left: 10px;
  text-decoration: none;
  font-weight: normal;
  margin-bottom: 1em;
}

.single__complementary-block-link--article::last-child {
  margin-bottom: 0;
}

body.theme-colnum .single__complementary-block-link--article {
  border-left: #1b4f7f solid 2px;
}

.single__complementary-block-link--article,
.single__complementary-block-link--article:active {
  text-decoration: none;
}

body.theme-colnum .single__complementary-block-link--article,
body.theme-colnum .single__complementary-block-link--article:active {
  color: #555;
}

.single__complementary-block-link--article:hover,
.single__complementary-block-link--article:visited:hover {
  text-decoration: underline;
  cursor: pointer;
}

body.theme-colnum .single__complementary-block-link--article:hover,
body.theme-colnum .single__complementary-block-link--article:visited:hover {
  color: #555;
}

body.theme-colnum .single__complementary-block-link--article:visited {
  color: rgba(85, 85, 85, 0.7);
}

.single__complementary-block-content {
  line-height: 1.45;
}

.single__complementary-block-content hr {
  background-color: transparent;
  border: 0;
  margin-bottom: 2.5px;
}

.single__complementary-block-content-layout {
  display: flex;
  align-items: flex-start;
}

.single__complementary-block-content-layout > .fa,
.single__complementary-block-content-layout > .fab {
  text-align: center;
  margin-right: 5px;
  margin-top: 5px;
  width: 18px;
  font-size: 14px;
}

body.theme-colnum .single__complementary-block-content-layout a:not([class]),
body.theme-colnum .single__complementary-block-content-layout a:not([class]):active {
  color: #1b4f7f;
  font-weight: bold;
}

body.theme-colnum .single__complementary-block-content-layout a:not([class]):hover,
body.theme-colnum .single__complementary-block-content-layout a:not([class]):visited:hover {
  color: #2b79c1;
}

body.theme-colnum .single__complementary-block-content-layout a:not([class]):visited {
  color: rgba(27, 79, 127, 0.7);
}

.single__complementary-block__list {
  text-align: left;
}

.single__complementary-block__list-item {
  margin: 15px 0;
}

.single__complementary-block__list-link {
  text-decoration: none;
  display: inline-block;
  color: #333;
  padding-left: 10px;
  line-height: 1.2;
  border-left: 2px solid #ff4d55;
}

body.theme-colnum .single__complementary-block__list-link {
  border-color: #1b4f7f;
}

.single__complementary-sidebar-wrapper {
  overflow: hidden;
  position: relative;
}

.single__complementary-sidebar-wrapper img {
  max-width: 100%;
}

.single__status-step--is-active {
  background-color: #ff4d55;
  color: white;
}

body.theme-colnum .single__status-step--is-active {
  background-color: #1b4f7f;
}

.single__status-step:last-child {
  border-right-width: 1px;
}

.single__breadcrumb-entry:hover {
  color: #ff4d55;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.footer {
  /*------------------------------------*\
  #BLOCK
  \*------------------------------------*/
  background-color: #261e1e;
  padding: 30px 0;
  font-size: 11px;
  /*------------------------------------*\
  #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
  #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
  #STATES
  \*------------------------------------*/
}

body.theme-colnum .footer {
  background: url("http://www.lienmultimedia.com/squelettes/images/footer-border.png") no-repeat 0 top #232323;
}

.footer__list-wrapper {
  border-left: 2px solid #333;
  padding: 0 10px;
  margin-bottom: 2.5em;
}

.footer__list-title {
  color: #666;
  text-transform: uppercase;
  margin-bottom: 20px;
}

body.theme-colnum .footer__list-title {
  font-weight: bold;
  margin: 0 0 10px;
}

.footer__list li {
  padding: 3px 0 2px 0;
  line-height: 1.5;
}

.footer__list li a {
  color: #ccc;
  text-decoration: none;
}

.footer__copyright {
  padding: 25px 0 0;
  color: #666;
}

.height100{
  height:100px;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.category {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

.category ~ .category {
  margin-top: 50px;
}

.category__description {
  color: #999;
  font-size: 20px;
  line-height: 1.3;
}

.category__title {
  font-size: 30px;
  margin-bottom: 20px;
}

body.theme-colnum .category__title {
  color: white;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.explore {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  padding: 2em 0 0 0;
  border: none;
  height: auto;
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

@media (max-width: 750px) {
  .explore {
    height: 0;
    margin: 0;
    overflow: hidden;
    display: block;
  }
}

.explore__row {
  height: auto;
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.about {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
    #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

/*_   _   _
 / \ / \ / \
( B | E | M )
 \_/ \_/ \_/
 - Blocks................block properties only.
 - Elems................elements' Block.
 - Modifiers............modify the aspect of Element.
 - States...............hover, focus, active or class for temporary state.
*/

.offers {
  /*------------------------------------*\
    #BLOCK
  \*------------------------------------*/
  margin-top: 40px;
  margin-bottom: 50px;
  /*------------------------------------*\
    #ELEMENTS
  \*------------------------------------*/
  /*------------------------------------*\
      #MODIFIERS
  \*------------------------------------*/
  /*------------------------------------*\
    #STATES
  \*------------------------------------*/
}

.offers__title {
  font-size: 40px;
  margin-bottom: 40px;
}

body.theme-colnum .offers__title {
  color: white;
}

.offers__block {
  margin: 20px 0;
}

.offers__block-title {
  font-size: 25px;
  margin-bottom: 0px;
  color: #ff4d55;
  font-weight: 600;
}

body.theme-colnum .offers__block-title {
  color: white;
}

.offers__block-card-wrapper {
  display: flex;
  justify-content: center;
}

.offers__block-card {
  flex-basis: 100%;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 7px;
  margin: 50px 10px;
  max-width: 300px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

body.theme-colnum .offers__block-card {
  color: white;
}

.offers__block-card-title {
  font-size: 30px;
  margin-bottom: 20px;
}

.offers__block-card-price {
  color: #bbb;
  font-size: 35px;
  margin-bottom: 15px;
}

.offers__block-card-price span {
  display: block;
  font-size: 50%;
}

.offers__block-card-content {
  line-height: 1.3;
  margin-bottom: 15px;
  flex-grow: 1;
  align-self: stretch;
  display: flex;
  align-items: center;
}


@-webkit-keyframes bs-notify-fadeOut {
  0% {
    opacity: 0.9;
  }
  100% {
    opacity: 0;
  }
}
@-o-keyframes bs-notify-fadeOut {
  0% {
    opacity: 0.9;
  }
  100% {
    opacity: 0;
  }
}
@keyframes bs-notify-fadeOut {
  0% {
    opacity: 0.9;
  }
  100% {
    opacity: 0;
  }
}
select.bs-select-hidden,
.bootstrap-select > select.bs-select-hidden,
select.selectpicker {
  display: none !important;
}
.bootstrap-select {
  width: 220px \0;
  /*IE9 and below*/
  vertical-align: middle;
}
.bootstrap-select > .dropdown-toggle {
  position: relative;
  width: 100%;
  text-align: right;
  white-space: nowrap;
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.bootstrap-select > .dropdown-toggle:after {
  margin-top: -1px;
}
.bootstrap-select > .dropdown-toggle.bs-placeholder,
.bootstrap-select > .dropdown-toggle.bs-placeholder:hover,
.bootstrap-select > .dropdown-toggle.bs-placeholder:focus,
.bootstrap-select > .dropdown-toggle.bs-placeholder:active {
  color: #999;
}
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary:hover,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary:hover,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success:hover,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger:hover,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info:hover,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark:hover,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary:focus,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary:focus,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success:focus,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger:focus,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info:focus,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark:focus,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary:active,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary:active,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success:active,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger:active,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info:active,
.bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark:active {
  color: rgba(255, 255, 255, 0.5);
}
.bootstrap-select > select {
  position: absolute !important;
  bottom: 0;
  left: 50%;
  display: block !important;
  width: 0.5px !important;
  height: 100% !important;
  padding: 0 !important;
  opacity: 0 !important;
  border: none;
  z-index: 0 !important;
}
.bootstrap-select > select.mobile-device {
  top: 0;
  left: 0;
  display: block !important;
  width: 100% !important;
  z-index: 2 !important;
}
.has-error .bootstrap-select .dropdown-toggle,
.error .bootstrap-select .dropdown-toggle,
.bootstrap-select.is-invalid .dropdown-toggle,
.was-validated .bootstrap-select select:invalid + .dropdown-toggle {
  border-color: #b94a48;
}
.bootstrap-select.is-valid .dropdown-toggle,
.was-validated .bootstrap-select select:valid + .dropdown-toggle {
  border-color: #28a745;
}
.bootstrap-select.fit-width {
  width: auto !important;
}
.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
  width: 220px;
}
.bootstrap-select > select.mobile-device:focus + .dropdown-toggle,
.bootstrap-select .dropdown-toggle:focus {
  outline: thin dotted #333333 !important;
  outline: 5px auto -webkit-focus-ring-color !important;
  outline-offset: -2px;
}
.bootstrap-select.form-control {
  margin-bottom: 0;
  padding: 0;
  border: none;
  height: auto;
}
:not(.input-group) > .bootstrap-select.form-control:not([class*="col-"]) {
  width: 100%;
}
.bootstrap-select.form-control.input-group-btn {
  float: none;
  z-index: auto;
}
.form-inline .bootstrap-select,
.form-inline .bootstrap-select.form-control:not([class*="col-"]) {
  width: auto;
}
.bootstrap-select:not(.input-group-btn),
.bootstrap-select[class*="col-"] {
  float: none;
  display: inline-block;
  margin-left: 0;
}
.bootstrap-select.dropdown-menu-right,
.bootstrap-select[class*="col-"].dropdown-menu-right,
.row .bootstrap-select[class*="col-"].dropdown-menu-right {
  float: right;
}
.form-inline .bootstrap-select,
.form-horizontal .bootstrap-select,
.form-group .bootstrap-select {
  margin-bottom: 0;
}
.form-group-lg .bootstrap-select.form-control,
.form-group-sm .bootstrap-select.form-control {
  padding: 0;
}
.form-group-lg .bootstrap-select.form-control .dropdown-toggle,
.form-group-sm .bootstrap-select.form-control .dropdown-toggle {
  height: 100%;
  font-size: inherit;
  line-height: inherit;
  border-radius: inherit;
}
.bootstrap-select.form-control-sm .dropdown-toggle,
.bootstrap-select.form-control-lg .dropdown-toggle {
  font-size: inherit;
  line-height: inherit;
  border-radius: inherit;
}
.bootstrap-select.form-control-sm .dropdown-toggle {
  padding: 0.25rem 0.5rem;
}
.bootstrap-select.form-control-lg .dropdown-toggle {
  padding: 0.5rem 1rem;
}
.form-inline .bootstrap-select .form-control {
  width: 100%;
}
.bootstrap-select.disabled,
.bootstrap-select > .disabled {
  cursor: not-allowed;
}
.bootstrap-select.disabled:focus,
.bootstrap-select > .disabled:focus {
  outline: none !important;
}
.bootstrap-select.bs-container {
  position: absolute;
  top: 0;
  left: 0;
  height: 0 !important;
  padding: 0 !important;
}
.bootstrap-select.bs-container .dropdown-menu {
  z-index: 1060;
}
.bootstrap-select .dropdown-toggle .filter-option {
  position: static;
  top: 0;
  left: 0;
  float: left;
  height: 100%;
  width: 100%;
  text-align: left;
  overflow: hidden;
  -webkit-box-flex: 0;
  -webkit-flex: 0 1 auto;
      -ms-flex: 0 1 auto;
          flex: 0 1 auto;
}
.bs3.bootstrap-select .dropdown-toggle .filter-option {
  padding-right: inherit;
}
.input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option {
  position: absolute;
  padding-top: inherit;
  padding-bottom: inherit;
  padding-left: inherit;
  float: none;
}
.input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option .filter-option-inner {
  padding-right: inherit;
}
.bootstrap-select .dropdown-toggle .filter-option-inner-inner {
  overflow: hidden;
}
.bootstrap-select .dropdown-toggle .filter-expand {
  width: 0 !important;
  float: left;
  opacity: 0 !important;
  overflow: hidden;
}
.bootstrap-select .dropdown-toggle .caret {
  position: absolute;
  top: 50%;
  right: 12px;
  margin-top: -2px;
  vertical-align: middle;
}
.input-group .bootstrap-select.form-control .dropdown-toggle {
  border-radius: inherit;
}
.bootstrap-select[class*="col-"] .dropdown-toggle {
  width: 100%;
}
.bootstrap-select .dropdown-menu {
  min-width: 100%;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.bootstrap-select .dropdown-menu > .inner:focus {
  outline: none !important;
}
.bootstrap-select .dropdown-menu.inner {
  position: static;
  float: none;
  border: 0;
  padding: 0;
  margin: 0;
  border-radius: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.bootstrap-select .dropdown-menu li {
  position: relative;
}
.bootstrap-select .dropdown-menu li.active small {
  color: rgba(255, 255, 255, 0.5) !important;
}
.bootstrap-select .dropdown-menu li.disabled a {
  cursor: not-allowed;
}
.bootstrap-select .dropdown-menu li a {
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.bootstrap-select .dropdown-menu li a.opt {
  position: relative;
  padding-left: 2.25em;
}
.bootstrap-select .dropdown-menu li a span.check-mark {
  display: none;
}
.bootstrap-select .dropdown-menu li a span.text {
  display: inline-block;
}
.bootstrap-select .dropdown-menu li small {
  padding-left: 0.5em;
}
.bootstrap-select .dropdown-menu .notify {
  position: absolute;
  bottom: 5px;
  width: 96%;
  margin: 0 2%;
  min-height: 26px;
  padding: 3px 5px;
  background: #f5f5f5;
  border: 1px solid #e3e3e3;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  pointer-events: none;
  opacity: 0.9;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.bootstrap-select .dropdown-menu .notify.fadeOut {
  -webkit-animation: 300ms linear 750ms forwards bs-notify-fadeOut;
       -o-animation: 300ms linear 750ms forwards bs-notify-fadeOut;
          animation: 300ms linear 750ms forwards bs-notify-fadeOut;
}
.bootstrap-select .no-results {
  padding: 3px;
  background: #f5f5f5;
  margin: 0 5px;
  white-space: nowrap;
}
.bootstrap-select.fit-width .dropdown-toggle .filter-option {
  position: static;
  display: inline;
  padding: 0;
}
.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner,
.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner-inner {
  display: inline;
}
.bootstrap-select.fit-width .dropdown-toggle .bs-caret:before {
  content: '\00a0';
}
.bootstrap-select.fit-width .dropdown-toggle .caret {
  position: static;
  top: auto;
  margin-top: -1px;
}
.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
  position: absolute;
  display: inline-block;
  right: 15px;
  top: 5px;
}
.bootstrap-select.show-tick .dropdown-menu li a span.text {
  margin-right: 34px;
}
.bootstrap-select .bs-ok-default:after {
  content: '';
  display: block;
  width: 0.5em;
  height: 1em;
  border-style: solid;
  border-width: 0 0.26em 0.26em 0;
  -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
       -o-transform: rotate(45deg);
          transform: rotate(45deg);
}
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle,
.bootstrap-select.show-menu-arrow.show > .dropdown-toggle {
  z-index: 1061;
}
.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:before {
  content: '';
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid rgba(204, 204, 204, 0.2);
  position: absolute;
  bottom: -4px;
  left: 9px;
  display: none;
}
.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:after {
  content: '';
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid white;
  position: absolute;
  bottom: -4px;
  left: 10px;
  display: none;
}
.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:before {
  bottom: auto;
  top: -4px;
  border-top: 7px solid rgba(204, 204, 204, 0.2);
  border-bottom: 0;
}
.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:after {
  bottom: auto;
  top: -4px;
  border-top: 6px solid white;
  border-bottom: 0;
}
.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:before {
  right: 12px;
  left: auto;
}
.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:after {
  right: 13px;
  left: auto;
}
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle .filter-option:before,
.bootstrap-select.show-menu-arrow.show > .dropdown-toggle .filter-option:before,
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle .filter-option:after,
.bootstrap-select.show-menu-arrow.show > .dropdown-toggle .filter-option:after {
  display: block;
}
.bs-searchbox,
.bs-actionsbox,
.bs-donebutton {
  padding: 4px 8px;
}
.bs-actionsbox {
  width: 100%;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.bs-actionsbox .btn-group button {
  width: 50%;
}
.bs-donebutton {
  float: left;
  width: 100%;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.bs-donebutton .btn-group button {
  width: 100%;
}
.bs-searchbox + .bs-actionsbox {
  padding: 0 8px 4px;
}
.bs-searchbox .form-control {
  margin-bottom: 0;
  width: 100%;
  float: none;
}
 </style>



</html>