@extends('layout.main')

@section('content')

    @foreach($elements as $group)
        <div class="title_group">
            <div class="title_line"></div>
            <h2>{{ $group->title }}</h2>
            <div class="right_line"></div>
        </div>
        <div class="card">
            @foreach($group->elements() as $elt)
                <div class="card_element">
                    <img class="img_body" src="{{ asset('/img/pate/' . $elt['image_path']) }}"
                         alt="{{ $elt['title'] }}">
                    <div class="card_sub_element">
                        <h3>{{ $elt['title'] }}</h3>
                        <p><strong>Ingrédients : </strong>{{ $elt->getIngredientsAsString() }}</p><br>
                        <p><strong>Allergènes : </strong>{{ $elt->getAllergenesAsString() }}</p><br>
                        <p><strong>Poids : </strong>{{ $elt['weight'] }}g environ</p>
                        <p><strong>DLC/DLUO : </strong>{{ $elt['title'] }}</p><br>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    <?php
    $list = [
        [
            "Boudin noir",
            "Sang de porc, piment doux, gras de porc, oignons, persil, muscade, sel, poivre.",
            "Traces possibles de gluten",
            "3ans",
            "270g",
            "boudin.jpg",
            "boudin"
        ],
        [
            "Fritons",
            "Porc, gras de porc, vin blanc, persil, ail, sel, poivre ",
            "Traces possibles de gluten",
            "3ans",
            "270g",
            "friton.jpg",
            "friton"
        ],
        [
            "Fritons al bière in Somme",
            "Porc, gras de porc, bière blonde 7,5%, persil, ail, sel, poivre ",
            "Traces possibles de gluten",
            "3ans",
            "250g",
            "Fritons al bière in Somme.jpg",
            "Fritons al bière in Somme"
        ],
        [
            "Rillettes",
            "Porc, gras de porc, vin blanc, thym, laurier, romarin, basilic, marjolaine, sel, poivre",
            "Traces possibles de gluten",
            "3ans",
            "270g",
            "rilette.png",
            "rilette"
        ],
        [
            "Pâté de tête",
            "Porc, vin blanc, persil, ail, sel, poivre ",
            "Traces possibles de gluten",
            "3ans",
            "270g",
            "rilette.png",
            "rilette"
        ]
    ];
    ?>

    <?php
    $list = [
        [
            "Pâtés de campagne nature",
            "Porc, poitrine de porc, foie de porc, oeufs, oignons, sucre, ail, persil, laurier sel, poivre",
            "Oeufs, traces possibles de sulfite",
            "3ans",
            "270g",
            "pate_camp_aie.jpg",
            "boudin.jpg"
        ],
        [
            "Pâtés de campagne à l'ail",
            "Porc, poitrine de porc, foie de porc, oeufs, oignons, sucre, ail,persil, laurier sel, poivre",
            "Oeufs, traces possibles de sulfites",
            "3ans",
            "270g",
            "pate_camp_aie.jpg",
            "pate_camp_aie"
        ],
        [
            "Pâtés de campagne au poivre vert",
            "Porc, poitrine de porc, foie de porc, œuf, oignons, poivre vert, vinaigre, ail, persil, sel, poivre",
            "Oeufs, traces possibles de sulfites",
            "3ans",
            "270g",
            "pate_camp_poivre_vert.jpg",
            "pate_camp_aie"
        ],
        [
            "Pâtés de campagne au vin blanc",
            "Porc, foie de porc, oeufs, oignons, vin blanc, ail, persil, sucre, laurier, sel, poivre",
            "Sulfites, traces possibles de gluten",
            "3ans",
            "270g",
            "Pâtes de campagne au vin blanc",
            "Pâtes de campagne au vin blanc"
        ],
        [
            "Pâtés de campagne au salicornes",
            "Porc, foie de porc, oignons, salicornes, vinaigre, échalotes,oeufs, ail, persil, sucre, laurier, sel,
                 oivre",
            "Oeufs, traces possibles de sulfites",
            "3ans",
            "270g",
            "#",
            "Pâté de campagne aux salicorne"
        ]
    ];
    $list = [
        [
            "Tio pateu ach'cid",
            "Porcelet, poitrine de porc, oignons, bière blonde 5,5%, orge malté, sucre roux de canne, paprika,
                    coriandre, sel, poivre",
            "Sulfites",
            "3ans",
            "270g",
            "tio1.jpg",
            "Tio pateu ach'cid"
        ],
        [
            "Tio pâteu Al Bière El Belle",
            "Porcelet, poitrine de porc, oignons, bière blonde 5,5%, orge malté, sucre roux de canne, paprika,
                    coriandre, sel, poivre",
            "Traces possibles de gluten",
            "3ans",
            "270g",
            "tio2.jpg",
            "Tio pâteu Al Bière El Belle"
        ],
        [
            "Tio pateu ed'Campagne",
            "Porcelet, poitrine de porc, oignons, bière blonde 5,5%, orge malté, sucre roux de canne, paprika,
                    coriandre, sel, poivre",
            "Traces possibles de gluten",
            "3ans",
            "250g",
            "tio2.jpg",
            "Tio pateu ed'Campagne"
        ],
        [
            "Tio pateu ed'Campagne",
            "Porcelet, porc, persil, ail, piment rouge, coriandre, sucre laurier, sel, poivre",
            "Sulfites, traces possibles de gluten",
            "3ans",
            "270g",
            "tio4.jpg",
            "Tio pateu ed'Campagne"
        ]
    ];
    ?>
@endsection