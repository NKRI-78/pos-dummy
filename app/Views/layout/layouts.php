<?php $uri = current_url(true) ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - <?= ucfirst($uri->getSegment(1)) ?></title>
    <meta name="description" content="-">
    <meta name="keywords" content="-">

    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <!-- add custom css -->
    <link href="<?= base_url("public/assets/css/custom.css") ?>" rel="stylesheet" type="text/css" />

    <!-- popup sweetalert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="flex flex-col">

    <nav class="flex justify-between items-center">

        <!-- NAVIGATION -->
        <div class="hidden lg:block navbar-c flex-1 rounded-md py-4 my-4 ml-2 mr-4">
            <div class="container mx-auto flex justify-around items-center">
                <a href="<?= base_url() ?>" class="<?=$uri->getSegment(1) === '' ? ' font-bold text-white' : 'text-white ' ?>">Home</a>
                <a href="<?= base_url() ?>my-orders" class="<?=$uri->getSegment(1) === 'term-and-condition' ? ' font-bold text-white' : 'text-white' ?>">My Orders</a>
                <a href="<?= base_url() ?>cart/1" class="<?=$uri->getSegment(1) === 'cart' ? ' font-bold text-white' : 'text-white' ?>">Cart</a>
                <a href="<?= base_url() ?>profile" class="<?=$uri->getSegment(1) === 'how-to-use' ? ' font-bold text-white' : 'text-white' ?>">Profile</a>
            </div>
        </div>

        <!-- Mobile Menu Button (Hidden on larger screens) -->
        <div class="lg:hidden navbar-c rounded-md my-4 mr-12">
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="mobile-menu z-50">
                <ul class="menu-items">
                    <li><a href="<?= base_url() ?>" class="text-sm">Home</a></li>
                    <li><a href="<?= base_url() ?>my-orders" class="text-sm">My Orders</a></li>
                    <li><a href="<?= base_url() ?>cart/1" class="text-sm">Cart</a></li>
                    <li><a href="<?= base_url() ?>profile" class="text-sm">Profile</a></li>
                </ul>
            </nav>
        </div>

    </nav>

    <?= $this->renderSection('content') ?>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
      
    </script>

    <?= $this->renderSection('script') ?>

</body>

</html>