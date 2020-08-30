@extends('layout.main')

@section('content')
<div id="wrapper">

    <section class="content_wrapper">
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
                "sulfites, traces possibles de gluten ", "3ans",  "boudin.jpg",
                "boudin.jpg"
            ],
            [
                "Fritons al bière in Somme", " porc, gras de porc, bière blonde 7,5%, persil, ail, sel, poivre",
                "sulfites, traces possibles de gluten ", "3ans",  "boudin.jpg ",
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

        <div class="frames">
            <?php foreach ($list as $key): ?>
            <div class="frames_div">
                <p class="text">type: <?= $key[0] ?><br> ingrédients: <?= $key[1] ?><br> alègéne: <?= $key[2] ?><br>
                    DLC/DLUO
                    <?= $key[3] ?><br>
                </p>
                <img class="img_body" src="/img/pate/<?= $key[4] ?>" alt="<?= $key[5] ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
@endsection