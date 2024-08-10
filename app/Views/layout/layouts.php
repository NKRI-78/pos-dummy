<?php 
    use GuzzleHttp\Client;

    $uri = current_url(true);
    
    $client = new Client();
    $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/cart-pos');
     
    $data = json_decode($response->getBody(), true);

    $cartCount = count(($data["data"]));
?>

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

        <nav class="flex justify-between items-center">

            <div class="hidden lg:block navbar-c flex-1 rounded-md py-4 my-4 ml-12 mr-12">
                <div class="container mx-auto flex justify-around items-center">
                    <a href="<?= base_url() ?>" class="<?=$uri->getSegment(1) === 'term-and-condition' ? ' font-bold text-white' : 'text-white' ?>">Cart (<?= $cartCount ?>)</a>
                    <a href="<?= base_url() ?>about-us" class="<?=$uri->getSegment(1) === 'about-us' ? ' font-bold text-white' : 'text-white' ?>">My Orders</a>
                </div>
            </div>

            <div class="lg:hidden navbar-c rounded-md my-4 mx-4">
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="mobile-menu z-50">
                    <ul class="menu-items">
                        <li><a href="<?= base_url() ?>" class="text-sm">Cart (<?= $cartCount ?>)</a></li>
                        <li><a href="<?= base_url() ?>about-us" class="text-sm">My Orders</a></li>
                    </ul>
                </nav>
            </div>

        </nav>

        <div class="flex flex-col justify-center items-center my-2">
            <div id="reader" style="width: 300px; height: 300px; display: none;"></div>
        </div>

        <?php if($uri->getSegment(1) == 'shipping' || $uri->getSegment(1) == 'checkout' || $uri->getSegment(1) == 'delivery'): ?>
            <div class="flex flex-row justify-center mt-8 items-center gap-4">
                <div>
                    <button">
                        <img src="<?= base_url("public/assets/image/ic-back.png") ?>" onclick="history.back()" class="h-10 cursor-pointer" alt="ic-back">
                    </button>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <img src="<?= base_url("public/assets/image/cart-active.png") ?>" class="h-5" alt="Cart">
                    <img src="<?= base_url("public/assets/image/divider.png") ?>" class="h-1" alt="Divider">
                    <img src="<?= $uri->getSegment(1) == 'checkout' ? base_url("public/assets/image/personal-info-active.png") : $uri->getSegment(1) == 'delivery' ? base_url("public/assets/image/personal-info-active.png") : base_url("public/assets/image/personal-info-current.png") ?>" class="h-5" alt="Personal Information">
                    <img src="<?= base_url("public/assets/image/divider.png") ?>" class="h-1" alt="Divider">
                    
                    <?php if($uri->getSegment(1) == 'checkout'): ?>
                        <img src="<?= base_url("public/assets/image/checkout-current.png") ?>" class="h-5" alt="Checkout">
                    <?php endif; ?>

                    <?php if($uri->getSegment(1) == 'delivery'): ?>
                        <img src="<?= base_url("public/assets/image/checkout-active.png") ?>" class="h-5" alt="Checkout">
                    <?php endif; ?>

                    <?php if($uri->getSegment(1) == 'shipping'): ?>
                        <img src="<?= base_url("public/assets/image/checkout.png") ?>" class="h-5" alt="Checkout">
                    <?php endif; ?>
                    
                    <img src="<?= base_url("public/assets/image/divider.png") ?>" class="h-1" alt="Divider">
                    
                    <img src="<?= $uri->getSegment(1) == 'delivery' ? base_url("public/assets/image/delivery-active.png") : base_url("public/assets/image/delivery.png") ?>" class="h-5" alt="Delivery">
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

        <!-- html5 qr code -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.8/html5-qrcode.min.js"></script>


        <?= $this->renderSection('script') ?>


    <script>
        document.addEventListener("DOMContentLoaded", async function() {
            const menuToggle = document.querySelector('.menu-toggle')
            const mobileMenu = document.querySelector('.mobile-menu')

            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('active')
            })
        })
    </script>

    </body>

</html>