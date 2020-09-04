@extends('layout.main')

@section('content')
    <div class="title_group">
        <div class="title_line"></div>
        <h2>Caisette de viande </h2>
        <div class="right_line"></div>
    </div>

    <?php
    $list = [
        [
            "Boudin noir",
            "Sang de porc, piment doux, gras de porc, oignons, persil, muscade, sel, poivre",
            "Traces possibles de gluten",
            "3ans",
            "boudin.jpg",
            "boudin"
        ],
        [
            "Fritons",
            "Porc, gras de porc, vin blanc, persil, ail, sel, poivre",
            "Sulfites, traces possibles de gluten ",
            "3ans",
            "boudin.jpg",
            "boudin"
        ],
        [
            "Fritons al bière in Somme",
            "Porc, gras de porc, bière blonde 7,5%, persil, ail, sel, poivre",
            "Sulfites, traces possibles de gluten",
            "3ans",
            "boudin.jpg",
            "boudin"
        ],
        [
            "Rillettes",
            "Porc, gras de porc, vin blanc, thym, laurier, romarin, basilic, marjolaine, sel, poivre",
            "Sulfites, traces possibles de gluten",
            "3ans",
            "boudin.jpg",
            "boudin"
        ],
        [
            "Rillettes",
            "Porc, gras de porc, vin blanc, thym, laurier, romarin, basilic, marjolaine, sel, poivre",
            "Sulfites, traces possibles de gluten",
            "3ans",
            "boudin.jpg",
            "boudin"
        ],
        [
            "Pâté de tête",
            "Porc, vin blanc, persil, ail, sel, poivre",
            "Sulfites",
            "3ans",
            "boudin.jpg",
            "boudin"
        ]
    ]

    ?>

    <div class="card">
        @foreach ($list as $key)
            <div class="card_element">
                <img class="element_img" src="/img/pate/{{ $key[4] }}" alt="{{ $key[5] }}">
                <div class="card_sub_element">
                    <h3>{{ $key[0] }}</h3>
                    <p><strong>Ingrédients: </strong>{{ $key[1] }}</p><br>
                    <p><strong>Allergènes: </strong>{{ $key[2] }}</p><br>
                    <p><strong>DLC/DLUO: </strong> {{ $key[3] }}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection