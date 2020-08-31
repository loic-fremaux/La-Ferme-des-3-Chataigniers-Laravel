@extends('layout.main')

@section('content')
    <div class="title_group">
        <div class="title_line"></div>
        <h2>Viande au detail </h2>
        <div class="right_line"></div>
    </div>

    <div class="title_group_caisse">
        <div class="title_line"></div>
        <h3> Viande au detail </h3>
        <div class="right_line"></div>
    </div>
    <?php
    $list = [
        [
            "boudin noir", "Sang de porc, piment doux, gras de porc, oignons, persil,
                    muscade, sel, poivre.", "d'allergènes, traces possibles de gluten", "3ans", "270g", "boudin.jpg",
            "boudin.jpg"
        ],
        [
            "Fritons", "Porc, gras de porc, vin blanc, persil, ail, sel, poivre ",
            "d'allergènes, traces possibles de gluten", "3ans", "270g", "friton.jpg", "friton.jpg"
        ],
        [
            "Fritons al bière in Somme", "porc, gras de porc, bière blonde 7,5%, persil, ail, sel, poivre ",
            "d'allergènes, traces possibles de gluten", "3ans", "250g", "Fritons al bière in Somme.jpg",
            "Fritons al bière in Somme.jpg"
        ],
        [
            "Rillettes", "ingrédients: Porc, gras de porc, vin blanc, thym, laurier, romarin, basilic,
                    marjolaine, sel, poivre", "Sulfites, traces possibles de gluten", "3ans", "270g", "rilette.png",
            "rilette.png"
        ],
        [
            "Pâté de tête", " Porc, vin blanc, persil, ail, sel, poivre ",
            "Sulfite d'allergènes, traces possibles de gluten", "3ans", "270g", "rilette.png",
            "rilette.png"
        ]
    ]
    ?>
    <div class="box">
        @foreach($list as $key)
            <div class="div_box">
                <img class="img_body" src="{{ asset('/img/pate/' .$key[5]) }}" alt="{{ $key[6] }}">
                <div class="div_div_box">
                    <h5 class="title_box">title</h5>
                    <p>
                        <strong>{{ $key[0] }}</strong><br><br>
                        <strong>Ingrédients:</strong>{{ $key[1] }}<br><br>
                        <strong>Allergène:</strong>{{ $key[2] }}<br><br>
                        <strong>DLC/DLUO:</strong>{{ $key[3] }}<br><br>
                        <strong>Poids:</strong>{{ $key[4] }}
                    </p>
                </div>
            </div>
    </div>
    @endforeach
    </div>
    <div>
        <div class="title_group">
            <div class="title_line"></div>
            <h2>Pâtés de campagne </h2>
            <div class="right_line"></div>
        </div>
        <div class="frames">
            <div class="frames_div">
                <p class="text">Pâtés de campagne nature<br>
                    Ingrédients:Porc, poitrine de porc, foie de porc, oeufs, oignons, sucre, ail, persil,
                    laurier sel, poivre<br>
                    Allergène: oeufs, traces possibles de sulfite<br>
                    DLC/DLUO: 3ans<br>
                    Poids: 270g
                </p>
                <img class="img_body" src="/img/pate/............."
                     alt="Pâtes de campagne nature">
            </div>
            <div class="frames_div">
                <p class="text">Pâtés de campagne à l'ail<br>
                    Ingrédients:Porc, poitrine de porc, foie de porc, oeufs, oignons, sucre, ail,
                    persil, laurier sel, poivre", "sulfites, traces possibles de gluten<br>
                    Allergène: oeufs, traces possibles de sulfite<br>
                    DLC/DLUO: 3ans<br>
                    Poids: 270g
                </p>
                <img class="img_body" src="/img/pate/pate_camp_aie.jpg"
                     alt="Pâtes de campagne à l'ail">
            </div>
            <div class="frames_div">
                <p class="text">Pâtés de campagne au poivre vert<br>
                    Ingrédients: Porc, poitrine de porc, foie de porc, œuf, oignons, poivre vert, vinaigre,
                    ail,
                    persil, sel, poivre<br>
                    Allergène: oeufs, traces possibles de sulfite<br>
                    DLC/DLUO: 3ans<br>
                    Poids: 270g
                </p>
                <img class="img_body" src="/img/pate/pate_camp_aie.jpg"
                     alt="Pâtes de campagne à l'ail">
            </div>
            <div class="frames_div">
                <p class="text">Pâtés de campagne au vin blanc<br>
                    Ingrédients: Porc, foie de porc, oeufs, oignons, vin blanc, ail, persil, sucre, laurier,
                    sel, poivre<br>
                    Allergène: oeufs, traces possibles de sulfite<br>
                    DLC/DLUO: 3ans<br>
                    Poids: 270g
                </p>
                <img class="img_body" src="/img/pate/............"
                     alt="Pâtes de campagne au vin blanc">
            </div>
            <div class="frames_div">
                <p class="text">Pâtés de campagne au salicornes<br>
                    Ingrédients: Porc, foie de porc, oignons, salicornes, vinaigre, échalotes,
                    oeufs, ail, persil, sucre, laurier, sel, poivre", " Oeufs, traces possibles de
                    sulfites<br>
                    Allergène: oeufs, traces possibles de sulfite<br>
                    DLC/DLUO: 3ans<br>
                    Poids: 270g
                </p>
                <img class="img_body" src="/img/pate/............"
                     alt="Pâté de campagne aux salicornes">
            </div>
        </div>
        <div class="body-div">
            <div class="title_group">
                <div class="title_line"></div>
                <h2>Tio pateu </h2>
                <div class="right_line"></div>
            </div>
            <div class="frames">
                <div class="frames_div">
                    <p class="text">Tio pateu ach'cid<br>
                        Ingrédients: Porcelet, poitrine de porc, porc, cidre, sucre roux de canne, pomme,
                        piment
                        doux, sel, poivres<br>
                        Allergène: Sulfite<br>
                        DLC/DLUO: 3ans<br>
                        Poids: 270g
                    </p>
                    <img class="img_body" src="/img/pate/tio1.jpg"
                         alt="Tio pateu ach'cid">
                </div>
                <div class="frames_div">
                    <p class="text">Tio pâteu Al Bière El Belle<br>
                        Ingrédients: Porcelet, poitrine de porc, oignons, bière blonde 5,5%, orge malté,
                        sucre
                        roux de canne, paprika,coriandre, sel, poivre<br>
                        Allergène: Sulfites, traces possibles de gluten<br>
                        DLC/DLUO: 3ans<br>
                        Poids: 270g
                    </p>
                    <img class="img_body" src="/img/pate/tio2.jpg"
                         alt="Tio pateu ach'cid">
                </div>
                <div class="frames_div">
                    <p class="text">Tio pateu ed'Campagne<br>
                        Ingrédients: Porcelet, poitrine de porc, oignons, bière blonde 5,5%, orge malté,
                        sucre
                        roux de canne, paprika,coriandre, sel, poivre<br>
                        Allergène: Sulfites, traces possibles de gluten<br>
                        DLC/DLUO: 3ans<br>
                        Poids: 270g
                    </p>
                    <img class="img_body" src="/img/pate/tio3.jpg"
                         alt="Tio pateu ach'cid">
                </div>
                <div class="frames_div">
                    <p class="text">Tio pateu ed'Campagne<br>
                        Ingrédients: Porcelet, porc, persil, ail, piment rouge, coriandre, sucre laurier,
                        sel
                        poivre<br>
                        Allergène: d'allergènes, traces possibles de Sulfites<br>
                        DLC/DLUO: 3ans<br>
                        Poids: 270g
                    </p>
                    <img class="img_body" src="/img/pate/tio4.jpg"
                         alt="Tio pateu ed'Campagne">
                </div>
            </div>
            <div>
                <div class="title_group">
                    <div class="title_line"></div>
                    <h2>Coéchon</h2>
                    <div class="right_line"></div>
                </div>
                <div class="frames">
                    <div class="frames_div">
                        <p class="text">catchuse in jlée<br>
                            Ingrédients:Porc, gélatine alimentaire (issue de couenne de porc), dextrose,
                            acidifiant, acide citrique E330, arômes (noix), colorant E150a, persil, basilic,
                            laurier,
                            sel, poivre<br>
                            Allergène: Fruits à coque, traces possibles de Sulfites<br>
                            DLC/DLUO: 3ans<br>
                            Poids: 700g
                        </p>
                        <img class="img_body" src="/img/pate/pate_camp_aie.jpg"
                             alt="Tio pateu ed'Campagne">
                    </div>
                    <div class="frames_div">
                        <p class="text">Coéchon al bière El Belle<br>
                            Ingrédients: Porc, gélatine alimentaire (issue de couenne de porc),
                            dextrose, acidifiant, acide citrique E330, arômes (noix), colorant E150a, bière
                            brune,
                            persil, basilic, laurier, sel, poivre<br>
                            Allergène: Fruits à coque, traces possibles de Sulfites<br>
                            DLC/DLUO: 3ans<br>
                            Poids: 700g
                        </p>
                        <img class="img_body" src="/img/pate/pate_camp_aie.jpg"
                             alt="Coéchon pâteu Al Bière El Belle">
                    </div>
                    <div class="frames_div">
                        <p class="text">Coéchon al geniève<br>
                            Ingrédients: Porcelet, porc, foie de porc, ail, persil, sucre, sel, poivre<br>
                            Allergène: Fruits à coque, traces possibles de Sulfites<br>
                            DLC/DLUO: 3ans<br>
                            Poids: 270g
                        </p>
                        <img class="img_body" src="/img/pate/pate_camp_aie.jpg"
                             alt="Coéchon ô porio">
                    </div>
                    <div class="frames_div">
                        <p class="text">Coéchon ô porio<br>
                            Ingrédients: Porc, poireau, crème fraîche, ferment lactique, lait, eau, oignons,
                            farine de blé, muscade, sucre, sel, poivre<br>
                            Allergène:Lait, gluten, traces possibles de Sulfites<br>
                            DLC/DLUO: 3ans<br>
                            Poids: 270g
                        </p>
                        <img class="img_body" src="/img/pate/pate_camp_aie.jpg"
                             alt="Coéchon ô porio">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection