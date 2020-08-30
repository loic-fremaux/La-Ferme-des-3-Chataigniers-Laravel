<img id="main-logo" src="{{ asset('img/la_ferme_des_3_chataigniers.png') }}" alt="Logo">

<nav class="nav-menu">
    <ul>
        <li><a href="{{ url('/') }}">Page d'accueil</a></li>
        <li><a href="{{ url('/elevage') }}">L'élevage de porcs</a></li>
        <li><a href="{{ url('/vente_a_la_boutique') }}">Vente à la boutique ▼</a>
            <ul class="unroll">
                <li><a href="{{ url('/pates_et_plats_cuisines') }}">Pâtés et plats cuisinés</a></li>
                <li><a href="{{ url('/viande_detaille') }}">Viande au détail</a></li>
                <li><a href="{{ url('/caissette_de_viande') }}">Caissettes de viande</a></li>
            </ul>
        </li>
    </ul>
</nav>