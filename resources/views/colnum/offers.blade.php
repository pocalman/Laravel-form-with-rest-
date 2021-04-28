@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<div class="offers  text-center">
    <div class="container">

        <h1 class="offers__title">Nos offres</h1>
        <section class="offers__block">
            <h2 class="offers__block-title">Vous êtes un professionnel ?</h2>
            <div class="offers__block-card-wrapper">
                <div class="offers__block-card">
                    <h3 class="offers__block-card-title">Simple</h3>
                    <div class="offers__block-card-content">
                    Inscrivez-vous pour soumettre vos projets, suggérer un ajout ou une correction et faciliter la découvrabilité de vos projets et de vos oeuvres sur le Web.
                    </div>
                    <div class="offers__block-card-price">Gratuit</div>
                    {{-- <a href="https://lienmultimedia.com/achat/boutique/" class="cta  cta--reverse">Continuez</a> --}}
                    <a href="{{ url('production/creer') }}" class="cta  cta--reverse">Continuez</a>
                </div>
                <div class="offers__block-card">
                    <h3 class="offers__block-card-title">Pro</h3>
                    <div class="offers__block-card-content">
                    Consultez tous les projets, y compris ceux en préparation, identifiez des occasions de collaboration, contrat, coproduction… Soumettez, gérez, actualisez vos projets. Et en prime, recevez CONVERGENCE, le magazine de la culture et de l'entreprise numérique (12 numéros / an).
                    </div>
                    <div class="offers__block-card-price"><span>à partir de</span> 10 $</div>
                    <a href="https://lienmultimedia.com/achat/boutique/" class="cta  cta--reverse">Continuez</a>
                </div>
            </div>
        </section>

        <section class="offers__block">
            <h2 class="offers__block-title">Vous êtes une entreprise ?</h2>
            <div class="offers__block-card-wrapper">
                <div class="offers__block-card">
                    <h3 class="offers__block-card-title">Super Pro</h3>
                    <p class="offers__block-card-content">Tous les avantages de l’abonnement Pro + un accès complet à www.lienmultimedia.com (77 750 articles, 1350 vidéos, podcasts et webinaires, infolettres quotidienne et hebdomadaire + CONVERGENCE - 12 numéros /an)
20 $/mois.</p>
                    <div class="offers__block-card-price">20 $ <span>/mois</span></div>
                    <a href="https://lienmultimedia.com/achat/boutique/" class="cta  cta--reverse">Continuez</a>
                </div>
                <div class="offers__block-card">
                    <h3 class="offers__block-card-title">Guide de l'industrie:: NUMÉRIQUE</h3>
                    <p class="offers__block-card-content">Le parfait complément à la Collection numérique, un livre (imprimé) de 300 pages vous présentant toute l’industrie québécoise du numérique, à portée de main.  En prime: un accès d'un mois à la Collection numérique.</p>
                    <div class="offers__block-card-price">35 $</div>
                    <a href="https://lienmultimedia.com/achat/boutique/" class="cta  cta--reverse">Continuez</a>
                </div>
            </div>
        </section>

        <section class="offers__block">
            <h2 class="offers__block-title">Élargissez vos réseaux, approfondissez vos connaissances !</h2>
            <div class="offers__block-card-wrapper">
                <div class="offers__block-card">
                    <h3 class="offers__block-card-title">Guide de l'industrie:: RÉALITÉ VIRTUELLE</h3>
                    <p class="offers__block-card-content">Un livre numérique (PDF) de 285 pages pour approfondir vos connaissances de l'écosystème québécois de la réalité virtuelle, ses entreprises, studios, les processus, les marchés, etc. En prime: un accès d'un mois à la Collection numérique.</p>
                    <div class="offers__block-card-price">30 $</div>
                    <a href="https://lienmultimedia.com/achat/boutique/" class="cta cta--reverse">Continuez</a>
                </div>
                <div class="offers__block-card">
                    <h3 class="offers__block-card-title">Guide Qui fait Quoi de la COPRODUCTION</h3>
                    <div class="offers__block-card-content">Un livre numérique (PDF) de 250 pages pour stimuler vos initiatives de coopération et coproduction locale, nationale ou internationale. Témoignages, études des cas, infos pratiques. En prime: un accès d'un mois à la Collection numérique.</p>
                    <div class="offers__block-card-price">35 $</div>
                    <a href="https://lienmultimedia.com/achat/boutique/" class="cta cta--reverse">Continuez</a>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection