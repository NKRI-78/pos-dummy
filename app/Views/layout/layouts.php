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

        <div class="flex justify-center my-10 items-center gap-3">
            <img src="<?= base_url("public/assets/image/ic-back.png") ?>" class="h-14 mr-10 cursor-pointer" alt="Cart">
            <img src="<?= base_url("public/assets/image/cart.png") ?>" class="h-6" alt="Cart">
            <img src="<?= base_url("public/assets/image/divider.png") ?>" class="h-1" alt="Divider">
            <img src="<?= base_url("public/assets/image/personal-info.png") ?>" class="h-6" alt="Personal Information">
            <img src="<?= base_url("public/assets/image/divider.png") ?>" class="h-1" alt="Divider">
            <img src="<?= base_url("public/assets/image/checkout.png") ?>" class="h-6" alt="Checkout">
            <img src="<?= base_url("public/assets/image/divider.png") ?>" class="h-1" alt="Divider">
            <img src="<?= base_url("public/assets/image/delivery.png") ?>" class="h-6" alt="Delivery">
        </div>

        <?= $this->renderSection('content') ?>

        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

        <!-- sweet alert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <?= $this->renderSection('script') ?>

    </body>

</html>