<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="container mx-auto p-6">

    <div class="lg:col-span-2 bg-white p-4 rounded-lg shadow-md">
        <div class="divide-y divide-gray-200">
            <div class="flex items-center py-4">
                <img class="w-24 h-24 rounded-lg object-cover mr-4" src="https://images.tokopedia.net/img/KRMmCm/2022/9/23/74c8ec25-e12c-4743-96a4-2a3dd264a7c6.jpg" alt="Ikan Segar">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold">Ikan</h3>
                </div>
                <div class="text-lg font-semibold"><?= formatRupiah(10000) ?></div>
            </div>
        </div>
    </div>

    <div class="w-full mt-4">

        <div class="flex flex-col gap-6 md:flex-row  md:justify-between">

            <div class="w-full md:w-2/6 bg-white rounded-lg shadow-md overflow-hidden">
                
                <div class="p-4 border-b border-gray-200">
                    <h2 class="text-2xl text-center font-semibold text-gray-800">Payment Methods</h2>
                </div>
                
                <form>
                    <ul>
                        <li class="border-b border-gray-200 last:border-b-0">
                            <div class="flex items-center p-4">
                                <div class="flex-shrink-0">
                                    <img src="https://cdn3.iconfinder.com/data/icons/banks-in-indonesia-logo-badge/100/BCA-512.png" class="h-8" alt="ic-bca">
                                </div>
                                <div class="ml-4 flex-1">
                                    <label for="payment-mandiri" class="text-gray-700">BCA</label>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <input type="radio" id="payment-bni" name="delivery-option" class="payment-select form-radio text-blue-600">
                                </div>
                            </div>
                        </li>
                        <li class="border-b border-gray-200 last:border-b-0">
                            <div class="flex items-center p-4">
                                <div class="flex-shrink-0">
                                    <img src="https://cdn3.iconfinder.com/data/icons/banks-in-indonesia-logo-badge/100/Mandiri-512.png" class="h-8" alt="ic-mandiri">
                                </div>
                                <div class="ml-4 flex-1">
                                    <label for="payment-mandiri" class="text-gray-700">MANDIRI</label>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                <input type="radio" id="payment-mandiri" name="delivery-option" class="payment-select form-radio text-blue-600">
                                </div>
                            </div>
                        </li>
                        <li class="border-b border-gray-200 last:border-b-0">
                            <div class="flex items-center p-4">
                                <div class="flex-shrink-0">
                                    <img src="https://cdn3.iconfinder.com/data/icons/banks-in-indonesia-logo-badge/100/BNI-512.png" class="h-8" alt="ic-bni">
                                </div>
                                <div class="ml-4 flex-1">
                                    <label for="payment-bni" class="text-gray-700">BNI</label>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <input type="radio" id="payment-bni" name="delivery-option" class="payment-select form-radio text-blue-600">
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>

            </div>

            <div class="w-full md:w-3/4 mt-4 md:mt-0 bg-white shadow-lg rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-6 text-center">Customer's Detail</h2>

                <div class="rounded-lg p-8 w-full mt-4">
                    <div class="mb-4">
                        <p class="text-gray-700 font-medium mb-2">Fullname</p>
                        <p class="font-bold w-full break-words"><?= $fullname ?></p>
                    </div>

                    <div class="mb-4">
                        <p class="block text-gray-700 font-medium mb-2">Phone Number</p>
                        <p class="font-bold"><?= $phone ?></p>
                    </div>

                    <div class="mb-4">
                        <p class="text-gray-700 font-medium mb-2">Shipping Address</p>
                        <p class="font-bold w-full break-words"><?= $address ?></p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="w-full mt-4 p-8 bg-white rounded-lg shadow-md overflow-hidden">
        <h2 class="text-2xl font-bold mb-6">Courier</h2>
        <div class="flex items-center space-x-2">
            <form>
                <input type="radio" id="kurir-pos" name="delivery-option" class="form-radio text-blue-600">
                <label for="kurir-pos" class="ml-2 text-gray-700">Kurir (POS)</label>
            </form>
        </div>
    </div>

    <div class="flex justify-end my-4">
        <button id="btn-submit" class="bg-gray-500 text-white font-semibold py-2 px-4 rounded flex items-center">
            <span class="mr-2">Submit</span>
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

    <script>

        $('.payment-select').change(function() {
            if ($(this).is(':checked')) {
                // ?
            }
        })

        $('#kurir-pos').change(function() {
            if ($(this).is(':checked')) {
                $("#btn-submit").css("background-color", "#F46300")
            }
        })

        $('#btn-submit').click(function(e) {

            if ($('.payment-select:checked').length == 0) {
                alert('Please select an payment methods option before submitting.')
                return
            }

            if ($('#kurir-pos:checked').length == 0) {
                alert('Please select an courier option before submitting.')
                return
            }

            $(this).text("Please wait...")

            setTimeout(() => {
                $(this).text("Submit")
            }, 1000);

        })


    </script>

<?= $this->endSection() ?>