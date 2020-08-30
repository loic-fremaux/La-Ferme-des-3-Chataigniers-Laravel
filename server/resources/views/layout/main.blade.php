<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="/img/la_ferme_des_3_chataigniers.png">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/css/nav.css">
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta name="theme-color" content="#009999">
    <meta name="description" content="Site officiel de la Ferme des 3 Châtaigniers">
    <meta name="keywords" content="La Ferme des 3 Châtaigniers">
    <meta name="author" content="Loïc Frémaux">
    <meta property="og:site_name" content="La Ferme des 3 Châtaigniers"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://www.lafermedes3chataigniers.com/img/logo.png"/>
    <meta property="og:title" content="La Ferme des 3 Châtaigniers"/>
    <meta property="og:description" content="Site officiel de la Ferme des 3 Châtaigniers"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('scss/app.scss') }}" rel="stylesheet">

    <link href="{{ asset('favicon.png') }}" rel="icon">
</head>
<header>
    <img id="main-logo" src="/img/la_ferme_des_3_chataigniers.png" alt="Logo">

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
</header>
<body>

@yield('content')

</body>
<footer>
    <div class="footer_element links">
        <h3>Liens utiles</h3>
        <p><a href="/acces_et_contact"><strong>></strong> Accès et contact</a></p>
        <p><a href="/liens_utiles"><strong>></strong> Mentions légales</a></p>
        <p><a href=""><strong>></strong> Conditions d'utilisation</a></p>
        <p><a href=""><strong>></strong> Politique des cookies</a></p>
        <p><a href=""><strong>></strong> Politique de confidentialité</a></p>
    </div>
    <div class="footer_element contact">
        <h3>Nous contacter</h3>
        <div>
            <p>Numéro de téléphone:
                <strong>
                    <a href="tel:03-22-37-26-73">03.22.37.26.73</a>
                </strong>
            </p>
            <p>Mail:
                <strong>
                    <a href="mailto:lafermedes3chataigniers@gmail.com">lafermedes3chataigniers@gmail.com</a>
                </strong>
            </p>
            <p>Adresse: <strong>24 Bis RUE DE BELLE ASSISE</strong></p>
            <p><strong>80 500 VILLERS TOURNELLE</strong></p>
        </div>
    </div>
    <div class="footer_element description">
        <h3>Description</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium adipisci blanditiis cum doloribus
            earum magni nihil rem sit totam! Aperiam dolores laudantium minima molestias omnis optio pariatur, ratione
            velit.
        </p>
    </div>
</footer>
</html>