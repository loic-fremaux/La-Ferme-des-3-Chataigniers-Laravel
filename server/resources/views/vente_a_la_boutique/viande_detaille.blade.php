<div id="wrapper">

    <section class="content_wrapper">
        <div class="title_group">
            <div class="title_line"></div>
            <h2>Viande au detail </h2>
            <div class="right_line"></div>
        </div>
        <?php
        $list = [
            [
                'boudin noir conditionné sous vide par 2 poids 360g environ', 'boudin_noir.jpg', 'boudin blanc'
            ],
            [
                'Chair à saucisse conditionnée en sachet sous vide de 500g environ', 'chaire_saucisse.jpg', 'chaire a saucisse'
            ],
            [
                'Chipolatas conditionnées sous vide par 6 poids 360g environ', 'chipolatas.jpg', 'chipolatas'
            ],
            [
                'Chipolatas aux herbes de Provence conditionnées sous vide par 6 poids 360g environ', 'chipolatas_au_herbe_de_provences.jpg', 'chipolatas_au_herbe_de_provences'
            ],
            [
                'chipolatas épices merguez conditionné sous vide par 6, poids 360g environ', 'chipolats_epices_merguez.jpg', 'chipolats_epices_merguez'
            ],
            [
                "Chipolatas au piment d'espelette conditionnées sous vide par 6 poids 360g environ", 'chipolatas_au_piment_espelette.jpg', 'chipolatas_au_piment_espelette'
            ],
            [
                'Côtes premières conditionnées par 2 sous vide poids 400g environ', 'cote_premiere.jpg', 'cote_premiere'
            ],
            [
                'Crépinettes conditionnées par 2 sous vide poids: 360g', 'crepinettes.jpg', 'crepinettes'
            ],
            [
                'Escalopes conditionnées sous vide par 4 ou 5 poids 500g environ', 'escalopes.jpg', 'escalopes'
            ],
            [
                'Filet mignon conditionné sous vide poids: 650g environ', 'filet_mignion.jpg', 'filet_mignion'
            ],
            [
                'foie tranché par 3 ou 4 sous vide poids: 350g', 'foie_tranché.jpg', 'foie_tranché'
            ],
            [
                'Jambon blanc conditionné sous vide par 2 tranches poids: 160g', 'jambon_blanc_2_tranches.jpg', 'jambon_blanc_2_tranches'
            ],
            [
                'Jambon blanc conditionné sous vide par 4 tranches: poids: 320g', 'jambon_blanc_4_tranches.jpg', 'jambon_blanc_4_tranches'
            ],
            [
                'Jambon blanc conditionné sous vide par 6 tranches: poids: 480g', 'jambon_blanc_6_tranches.jpg', 'jambon_blanc_6_tranches'
            ],
            [
                'Jambon sec conditionné par 6 tranches sous vide poids: 120g', 'jambon_sec_6_tranches.jpg', 'jambon_sec_6_tranches'
            ],
            [
                'Jarret conditionné sous vide poids: 1,200g', 'jarret_de_porc.jpg', 'jarret_de_porc'
            ],
            [
                'Joues conditionnées par 2 sous vide poids: 180g', 'joue.jpg', 'joue'
            ],
            [
                'Langue conditionnée sous vide', 'langues.jpg', 'langues'
            ],
            [
                'Pieds de porc conditionnés sous-vide par 2', 'pieds.jpg', 'pieds'
            ],
            [
                'Poitrine conditionnée sous vide poids: 1kg', 'poitrine_morceaux.jpg', 'poitrine_morceaux'
            ],
            [
                'Poitrine tranchée ou grillades conditionnées sous vide par 5 tranches poids: 500g environ', 'grillade.jpg', 'grillade'
            ],
            [
                'Rognons conditionnés par 2 sous vide', 'rogons_de_porcs.png', 'rogons_de_porcs'
            ],
            [
                "Rôti dans le filet ou dans l'échine conditionné sous vide poids: 1 kg", 'roti_de_porc.jpg', 'roti_de_porc'
            ],
            [
                "Rouelle de jambon conditionné sous vide poids: 1,400 kg", 'rouelle_de_jambon.jpg', 'rouelle_de_jambon'
            ],
            [
                "Rouelle d'épaule conditionné sous vide poids: 1,200kg", 'rouelle_epaules.jpg', 'rouelle_epaules'
            ],
            [
                " Saucise paysanne Poitrine conditionnée sous vide poids: 1kg", 'saucisses_pyasane.jpg', 'saucisses_pyasane'
            ],
            [
                " Saucise de Toulouse  Poitrine conditionnée sous vide poids: 1kg", 'saucisses_de_toulouse.jpg', 'saucisses_de_toulouse'
            ],
            [
                "Sauté de porc en brochettes ou sauté conditionnés par 500g sous vide", 'saute_de_porc.jpg', 'saute_de_porc'
            ],
            [
                "travers de porc conditionné sous vide poids: 850g environ", 'travers.jpg', 'travers'
            ]
        ]
        ?>

        <div class="frames">
            <?php foreach ($list as $key): ?>
            <div>
                <p class="text"><?= $key[0] ?> </p>
                <img class="img_body" src="/img/viande_detail/<?= $key[1] ?>" alt="<?= $key[3] ?>">
            </div>
            <?php endforeach; ?>
        </div>

    </section>

</div>