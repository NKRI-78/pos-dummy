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