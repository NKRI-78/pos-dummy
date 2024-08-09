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

        <div class="flex flex-col justify-center items-center my-2">
            <div id="reader" style="width: 300px; height: 300px; display: none;"></div>
        </div>

        <?php if($uri->getSegment(1) == 'shipping' || $uri->getSegment(1) == 'checkout' || $uri->getSegment(1) == 'delivery'): ?>
            <div class="flex flex-row justify-center mt-8 items-center gap-4">
                <div>
                    <button">
                        <img src="<?= base_url("public/assets/image/ic-back.png") ?>" class="h-10 cursor-pointer" alt="ic-back">
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

        <script>

            document.getElementById('start-scan').addEventListener('click', function() {
                document.getElementById('reader').style.display = 'block'

                const html5QrCode = new Html5Qrcode("reader")

                html5QrCode.start(
                    { facingMode: "environment" }, 
                    {
                        fps: 10, 
                        qrbox: {
                            width: 250, 
                            height: 250 
                        } 
                    },
                    qrCodeMessage => {
                        alert(`QR Code detected: ${qrCodeMessage}`)
                        html5QrCode.stop()
                        document.getElementById('reader').style.display = 'none'
                    },
                    errorMessage => {
                        console.log(`Scan error: ${errorMessage}`)
                    }
                ).catch(err => {
                    console.error(`Unable to start scanning: ${err}`)
                })
            })

            // const video = document.getElementById('video')
            // const canvas = document.getElementById('canvas')
            // const context = canvas.getContext('2d')

            // navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } }).then((stream) => {
            //     video.srcObject = stream
            //     video.play()
            //     requestAnimationFrame(scanQRCode)
            // })

            // function scanQRCode() {
            //     canvas.width = video.videoWidth
            //     canvas.height = video.videoHeight
            //     context.drawImage(video, 0, 0, canvas.width, canvas.height)
            //     const imageData = context.getImageData(0, 0, canvas.width, canvas.height)
            //     const code = jsQR(imageData.data, imageData.width, imageData.height)

            //     if (code) {
            //         alert(`QR Code Detected: ${code.data}`)
            //     } else {
            //         requestAnimationFrame(scanQRCode)
            //     }
            // }
        </script>

        <?= $this->renderSection('script') ?>

    </body>

</html>