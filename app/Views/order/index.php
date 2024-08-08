<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="container mx-auto p-6">

    <div class="flex flex-col md:flex-row gap-6 items-start">

      <div class="w-full md:w-3/5 bg-white p-4 rounded-lg shadow-md">
        <div class="flex justify-between">
          <h2 class="text-2xl font-semibold mb-4">My Orders</h2>
          <img src="https://img.icons8.com/?size=100&id=6ozUksPEPg6G&format=png&color=000000" class="h-8 cursor-pointer" alt="ic-scan">
        </div>

        <div class="divide-y divide-gray-200">
          <div class="flex items-center py-4">
            <img class="w-24 h-24 rounded-lg object-cover mr-4" src="https://images.tokopedia.net/img/KRMmCm/2022/9/23/74c8ec25-e12c-4743-96a4-2a3dd264a7c6.jpg" alt="Ikan Segar">
            <div class="flex-1">
                <h3 class="text-lg font-semibold">Ikan</h3>
                <!-- <div class="mt-2">
                  <button aria-label="Decrease quantity" class="text-gray-500 hover:text-gray-700 mr-2">-</button>
                    <span class="text-gray-700">1</span>
                  <button aria-label="Increase quantity" class="text-gray-500 hover:text-gray-700 ml-2">+</button>
                </div> -->
            </div>
            <div class="text-lg font-semibold"><?= formatRupiah(10000) ?></div>
            <!-- <button class="text-red-500 hover:text-red-700 ml-4">Remove</button> -->
          </div>
        </div>
      </div>

      <div class="w-full md:w-2/5 bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Summary</h2>
        <div class="flex justify-between mb-2">
          <span class="text-gray-500">Subtotal</span>
          <span class="text-gray-700"><?= formatRupiah(10000) ?></span>
        </div>
        <div class="border-t border-gray-200 my-2"></div>
        <div class="flex justify-between font-bold text-lg">
          <span>Total</span>
          <span><?= formatRupiah(10000) ?></span>
        </div>
        <a href="<?= base_url("shipping/1") ?>" class="w-full bg-blue-500 text-center inline-block text-white py-2 rounded-lg mt-4 hover:bg-blue-600">
          Checkout
        </a>
      </div>

    </div>
  </div>

<?= $this->endSection() ?>

















