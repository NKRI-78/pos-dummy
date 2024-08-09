<?php $uri = current_url(true) ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POS</title>
        <meta name="description" content="-">
        <meta name="keywords" content="-">

        <!-- include tailwind css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

        <!-- add custom css -->
        <link href="<?= base_url("public/assets/css/custom.css") ?>" rel="stylesheet" type="text/css" />

        <!-- popup sweetalert -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">

        <!-- swiper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    </head>

    <body class="flex flex-col">

        <?php if($uri->getSegment(1) == 'shipping' || $uri->getSegment(1) == 'checkout'): ?>
            <div class="flex flex-row justify-center mt-8 items-center gap-4">
                <div>
                    <button">
                        <img src="<?= base_url("public/assets/image/ic-back.png") ?>" onclick="history.back()" class="h-10 cursor-pointer" alt="ic-back">
                    </button>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <img src="<?=  base_url("public/assets/image/cart-active.png") ?>" class="h-5" alt="Cart">
                    <img src="<?= base_url("public/assets/image/divider.png") ?>" class="h-1" alt="Divider">
                    <img src="<?= $uri->getSegment(1) == 'checkout' ? base_url("public/assets/image/personal-info-active.png") : base_url("public/assets/image/personal-info-current.png") ?>" class="h-5" alt="Personal Information">
                    <img src="<?= base_url("public/assets/image/divider.png") ?>" class="h-1" alt="Divider">
                    <img src="<?= $uri->getSegment(1) == 'checkout' ? base_url("public/assets/image/checkout-current.png") : base_url("public/assets/image/checkout.png") ?>" class="h-5" alt="Checkout">
                    <img src="<?= base_url("public/assets/image/divider.png") ?>" class="h-1" alt="Divider">
                    <img src="<?= base_url("public/assets/image/delivery.png") ?>" class="h-5" alt="Delivery">
                </div>
            </div>
        <?php endif; ?>

        <?= $this->renderSection('content') ?>

        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

        <!-- sweet alert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>

        <!-- axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <?= $this->renderSection('script') ?>

    </body>

</html>