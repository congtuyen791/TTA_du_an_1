<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php for ($i = 0; $i < count($ht_slider); $i++) { ?>
            <div class="swiper-slide"><img src="<?= $ht_slider[$i]['anh_slider'] ?>" alt=""></div>
            <!-- <div class="swiper-slide"><img src="" alt=""></div> -->

        <?php } ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>