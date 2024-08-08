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

</div>

<div class="flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">

        <h2 class="text-2xl font-bold mb-6 text-center">For further processing, please fill in the data below.</h2>

        <form>
            <div class="mb-4">
                <label for="fullname" class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" id="fullname" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your full name">
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                <input type="tel" id="phone" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your phone number">
            </div>

            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-medium mb-2">Address</label>
                <textarea id="address" rows="4" class="block p-2 w-full text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your address"></textarea>
                </textarea>
            </div>

            <div class="text-center">
                <a href="<?= base_url("checkout/1") ?>" class="w-full inline-block bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 focus:outline-none">Proceed</a>
            </div>
        </form>

    </div>

</div>


<?= $this->endSection() ?>