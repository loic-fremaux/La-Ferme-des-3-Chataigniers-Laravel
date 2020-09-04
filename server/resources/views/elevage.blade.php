@extends('layout.main')

@section('content')
    <div class="title_group">
        <div class="title_line"></div>
        <h2>L'élevage</h2>
        <div class="right_line"></div>
    </div>

    <div class="contact_infos">
        <div>
            <p>
                <strong>Emmanuel</strong> élève ses porcs sur paille comme autrefois : dans ces conditions, les
                animaux bénéficient d'un confort qui leur permet d'exprimer leur comportement naturel.
                <br> Élevés sans
                antibiotiques, ils sont nourris avec les céréales de la ferme et de la graine de lin.<br>
                Riche en oméga 3, le lin donne à la viande une saveur et un moelleux incomparable.
            </p>
        </div>
    </div>
    <div>

        <?php

        $list = [
            [
                "1", "slicer1.jpg"
            ], [
                "2", "slicer2.jpg"
            ], [
                "3", "slicer3.jpg"
            ], [
                "4", "slicer4.jpg"
            ], [
                "5", "slicer5.jpg"
            ], [
                "6", "slicer6.jpg"
            ], [
                "7", "slicer7.jpg"
            ], [
                "8", "slicer8.jpg"
            ]
        ]
        ?>

        <div class="slideshow-container">
            <?php foreach ($list as $key): ?>
            <div class="mySlides fade">
                <img class="img_slider" src="/img/elevage/<?= $key[1] ?>">
                <div class="text_slicer"><?= $key[0] ?> / 8</div>
            </div>
            <?php endforeach; ?>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 3000); // Change image every 2 seconds
            }
        </script>
    </div>


    <div class="contact_infos">

        <p><strong>Jean-Marie</strong> s'occupe des cultures : céréales et oléo protéagineux, sur près de 180
            hectares.<br>
            Il pratique une agriculture raisonnée qui se traduit par un apport réduit et contrôlé des intrants
            et
            pesticides.<br><br>
            La majeure partie des cultures sert à composer les rations de nourriture des porcs.
        </p>

        <div class="flex_bottom">
            <img class="img_bottom" src="/img/elevage/image1.jpg" alt="cerial">
            <img class="img_bottom" src="/img/elevage/image2.jpg" alt="cerial">
            <img class="img_bottom" src="/img/elevage/image3.jpg" alt="cerial">
            <img class="img_bottom" src="/img/elevage/image4.jpg" alt="cerial">
            <img class="img_bottom" src="/img/elevage/image5.jpg" alt="cerial">
            <img class="img_bottom" src="/img/elevage/image6.jpg" alt="cerial">
        </div>
    </div>

@endsection