@extends('layout.main')

@section('content')
    <div class="title_group">
        <div class="title_line"></div>
        <h2>Viande au detail </h2>
        <div class="right_line"></div>
    </div>
    <?php
    $list = [
        [
            'Boudin noir',
            'Sous vide par lot de 2 ',
            '360g',
            'boudin_noir.jpg',
            'boudin blanc'
        ],
        [
            'Chair à saucisse',
            'Sous vide',
            '500g',
            'chaire_saucisse.jpg',
            'chaire a saucisse'
        ],
        [
            'Chipolatas',
            'Sous vide par lot de 6',
            '360g',
            'chipolatas.jpg',
            'chipolatas'
        ],
        [
            'Chipolatas aux herbes de Provence',
            'Sous vide par lot de 6',
            '360g',
            'chipolatas_au_herbe_de_provences.jpg',
            'chipolatas_au_herbe_de_provences'
        ],
        [
            'Chipolatas épices merguez',
            'Sous vide par lot de  6',
            '360g',
            'chipolats_epices_merguez.jpg',
            'chipolats_epices_merguez'
        ],
        [
            "Chipolatas au piment d'espelette",
            "Sous vide par lot de 6",
            "360g",
            'chipolatas_au_piment_espelette.jpg',
            'chipolatas_au_piment_espelette'
        ],
        [
            'Côtes premières',
            'Sous vide par lot de 2',
            '400g',
            'cote_premiere.jpg',
            'cote_premiere'
        ],
        [
            'Crépinettes conditionnées',
            'Sous vide par lot de  2',
            '360g',
            'crepinettes.jpg',
            'crepinettes'
        ],
        [
            'Escalopes',
            'Sous vide par lot de  4 ou 5',
            '500g',
            'escalopes.jpg',
            'escalopes'
        ],
        [
            'Filet mignon',
            'Sous vide',
            '650g',
            'filet_mignion.jpg',
            'filet_mignion'
        ],
        [
            'Foie',
            'Sous vide par lot de  3 ou 4',
            '350g',
            'foie_tranché.jpg',
            'foie_tranché'
        ],
        [
            'Jambon blanc tranché',
            'Sous vide par  lot de 2 tranches',
            '160g',
            'jambon_blanc_2_tranches.jpg',
            'jambon_blanc_2_tranches'
        ],
        [
            'Jambon sec',
            'Sous vide par lot de 6 tranches ',
            '120g',
            'jambon_sec_6_tranches.jpg',
            'jambon_sec_6_tranches'
        ],
        [
            'Jarret',
            'Sous vide ',
            '1,200kg',
            'jarret_de_porc.jpg',
            'jarret_de_porc'
        ],
        [
            'Joues',
            'Sous vide par lot de  2',
            '180g',
            'joue.jpg',
            'joue'
        ],
        [
            'Langue',
            'Sous vide',
            '1,600kg',
            "langues.jpg",
            'langues'
        ],
        [
            'Pieds de porc',
            'Sous-vide par lot de 2',
            '500g',
            'pieds.jpg',
            'pieds'
        ],
        [
            'Poitrine',
            'Sous vide',
            '1,000kg',
            'poitrine_morceaux.jpg',
            'poitrine_morceaux'
        ],
        [
            'Poitrine tranchée ou grillades',
            'Sous vide par lot de  5 tranches',
            '500g',
            'grillade.jpg',
            'grillade'
        ],
        [
            'Rognons',
            'Sous vide par lot de 2',
            '200g',
            'rogons_de_porcs.png',
            'rogons_de_porcs'
        ],
        [
            "Rôti dans le filet ou dans l'échine",
            "Sous vide",
            '1,000kg',
            'roti_de_porc.jpg',
            'roti_de_porc'
        ],
        [
            "Rouelle de jambon",
            "Sous vide",
            "1,400kg",
            'rouelle_de_jambon.jpg',
            'rouelle_de_jambon'
        ],
        [
            "Rouelle d'épaule",
            "Sous vide",
            "1,200kg",
            'rouelle_epaules.jpg',
            'rouelle_epaules'
        ],
        [
            "Saucise paysanne",
             "Sous vide",
             "500g",
             'saucisses_pyasane.jpg',
             'saucisses_pyasane'
        ],
        [
            "Saucise de Toulouse",
            "Sous vide",
            "500g",
            'saucisses_de_toulouse.jpg',
            'saucisses_de_toulouse'
        ],
        [
            "Sauté de porc en brochettes ou sauté",
            "Sous vide",
            "500g",
            'saute_de_porc.jpg',
            'saute_de_porc'
        ],
        [
            "Travers de porc",
            "Sous vide",
            "850g",
            'travers.jpg',
            'travers'
        ]
    ]
    ?>

    <div class="card">
        @foreach($list as $key)
            <div class="small_card_element">
                <img src="/img/viande_detail/{{ $key[3] }}" alt="{{ $key[4] }}" class="small_element_img">
                <div class="card_sub_element">
                    <h3>{{ $key[0] }}</h3>
                    <p><strong>Poids :</strong> {{ $key[2] }} environ</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection