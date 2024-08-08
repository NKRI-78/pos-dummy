<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>
<style>
    .swiper {
      width: 100%;
      padding-top: 20px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 400px;
      height: 400px;
      border-radius: 20px;
      overflow: hidden;
    }

    .swiper-slide img {
        display: block;
        border-radius: 20px;
        width: 100%;
    }
  </style>

<div class="lg:w-4/5 w-full lg:my-8 mb-8 mx-auto">
    <div class="mb-4 lg:my-4 lg:mx-16 py-4" style="height: 31rem">
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <div class="swiper-slide">
            <img src="<?= base_url('public/assets/image/slider/cover-1.png') ?>" />
        </div>
      <?php for ($x = 1; $x <= 10; $x++) { ?>
        <div class="swiper-slide">
            <img src="<?= base_url() ?>public/assets/image/slider/<?=$x?>.png" />
        </div>
        <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>

     <!-- Swiper -->
  <!-- <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"> <img src="<?= base_url() ?>assets/image/slider/cover-1.png" alt="Cover"></div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div> -->

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
     var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
    });
  </script>
    </div>
</div>

<?= $this->endSection() ?>

















