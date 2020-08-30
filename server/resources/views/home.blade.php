@extends('layout.main')

@section('content')
    <div class="title_group">
        <div class="title_line"></div>
        <h2>Actualité de la Ferme</h2>
        <div class="right_line"></div>
    </div>

    <div class="news_content">
        <p>Notre Boucherie-Charcuterie vous accueille tous les
            <strong>vendredis</strong> de <strong>9h00</strong> à <strong>18h30</strong>
            et <strong>samedis</strong> de <strong>9h00</strong> à <strong>16h00</strong>.
        </p>
        <p>
            Vous pourrez y trouver du porc, du bœuf, du veau, de l'agneau, de la volaille, de la charcuterie,
            des produits laitiers ainsi que des produits du terroir.
        </p>

        <div class="contact_infos">
            <p>
                Pour passer commande, vous pouvez nous contacter au coordonnées suivantes :
            </p>
            <p>Mail:
                <strong>
                    <a href="mailto:lafermedes3chataigniers@gmail.com">lafermedes3chataigniers@gmail.com</a>
                </strong>
            </p>
            <p>Téléphone:
                <strong>
                    <a href="tel:03-22-37-26-73">03.22.37.26.73</a>
                </strong>
            </p>
        </div>

        <p class="command_info" style="font-style: italic; margin-top: 1.8em">
            Toute commande doit nous parvenir au plus tard le lundi soir
            pour la vente du vendredi et samedi qui suit !
        </p>
    </div>

    <div class="title_group">
        <div class="title_line"></div>
        <h2>Présentation de la Ferme</h2>
        <div class="right_line"></div>
    </div>

    <div class="presentation_content">
        <p style="margin-top: 1em">
            Jean-Michel, Emmanuel et Jean-Marie, associés de la Ferme des 3 Châtaigniers, vous accueillent
            et vous font découvrir leur métier. Ils vous partagerons leur passion à travers ce site.
        </p>
        <p style="margin-top: 0.8em">
            La Ferme, typiquement picarde par ces briques rouges et sa cour rectangulaire ouverte vers
            l'extérieur
            est située en Picardie, dans un charmant petit village de 180 habitants au sud
            du département de la Somme, à proximité de Montdidier. Vous y trouverez tous les animaux de la ferme
            :
        </p>
        <div class="animals_list">
            <p>> Les volailles : poules, coqs, canards, oies, dindes, pintades et paons</p>
            <p>> Les lapins</p>
            <p>> Les moutons et les chèvres</p>
            <p>> L'âne et les poneys</p>
            <p>> La vache</p>
            <p>> L'élevage de porcs où les animaux sont élevés sur paille</p>
        </div>
        <p style="margin-top: 0.5em">
            L'essentiel de nos cultures est utilisé pour la nutrition de l'élevage des porcs. Vous retrouverez
            les
            céréales, blé et orge, les poix protéagineux, les féveroles, le colza ainsi que les betteraves
            sucrières. Le GAEC pratique une agriculture respectueuse de l'environnement.
        </p>
    </div>
@endsection