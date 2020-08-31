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
            "boudin noir", " ingrédients: Sang de porc, piment doux, gras de porc, oignons, persil,
                muscade, sel, poivre ", "d'allergènes, traces possibles de gluten", "3ans", "boudin.jpg", "boudin"
        ],
        [
            "Fritons", " Porc, gras de porc, vin blanc, persil, ail, sel, poivre",
            "sulfites, traces possibles de gluten ", "3ans", "boudin.jpg",
            "boudin.jpg"
        ],
        [
            "Fritons al bière in Somme", " porc, gras de porc, bière blonde 7,5%, persil, ail, sel, poivre",
            "sulfites, traces possibles de gluten ", "3ans", "boudin.jpg ",
            "boudin.jpg"
        ],
        [
            "Rillettes", " ingrédients: Porc, gras de porc, vin blanc, thym, laurier, romarin, basilic,
                         marjolaine, sel, poivre ", " Sulfites, traces possibles de gluten ", "3ans",
            "boudin.jpg ", "boudin.jpg"
        ],
        [
            "Rillettes", " ingrédients: Porc, gras de porc, vin blanc, thym, laurier, romarin, basilic,
                         marjolaine, sel, poivre ", " Sulfites, traces possibles de gluten ", "3ans",
            "boudin.jpg ", "boudin.jpg"
        ],
        [
            "Pâté de tête", " Porc, vin blanc, persil, ail, sel, poivre  ", "Sulfites", "3ans",
            "boudin.jpg ", "boudin.jpg"
        ]
    ]

    ?>

    <div class="box">
        @foreach ($list as $key)
        <div class="div_box">
            <img  class="img_box" src="/img/pate/{{$key[4] }}" alt="{{$key[5] }}">
            <p class="text_box"> <strong>Type: </strong>{{$key[0] }}<br>
                <strong>Ingrédients:</strong>{{$key[1] }}<br>
                <strong>Alègéne: </strong>{{$key[2] }}<br>
                <strong>DLC/DLUO:</strong>DLC/DLUO {{$key[3] }}
            </p>
        </div>
        @endforeach
    </div>

@endsection