<img id="main-logo" src="{{ asset('img/la_ferme_des_3_chataigniers.png') }}" alt="Logo">

<nav class="nav-menu">
    <ul>
        <li><a href="{{ route('home') }}">Page d'accueil</a></li>
        <li><a href="{{ route('elevage') }}">L'élevage de porcs</a></li>
        <li><a href="{{ route('vente_a_la_boutique.index') }}">Vente à la boutique ▼</a>
            <ul class="unroll">
                <li><a href="{{ route('vente_a_la_boutique.pates_et_plats_cuisines') }}">Pâtés et plats cuisinés</a></li>
                <li><a href="{{ route('vente_a_la_boutique.viande_au_detail') }}">Viande au détail</a></li>
            </ul>
        </li>
    </ul>
</nav>