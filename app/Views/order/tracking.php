<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="max-w-xl mx-auto">
    <div class="border-b border-gray-200 mb-4">
        <nav class="-mb-px flex space-x-4" aria-label="Tabs">
            <a href="#" class="text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" id="tab1">
                Waiting Payment
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" id="tab2">
                On Process
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" id="tab3">
                Delivery
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" id="tab4">
                Finish
            </a>
        </nav>
    </div>

    <div id="tab-content1" class="p-4 bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <p class="text-gray-700">Method Payment - <?= $payment ?></p>
            <p class="text-gray-700"><?= $courier ?></p>
        </div>
        <?php foreach($products as $product): ?>
            <div class="flex justify-between items-center py-4">   
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-lg object-cover mr-4" src="<?= $product["img"] ?>" alt="<?= $product["name"] ?>">
                    <p class="text-gray-700"><?= $product["name"] ?> x <?= $product["qty"] ?></p>
                </div>
                <div>
                    <p><?= formatRupiah($product["price"]) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="flex justify-between items-center py-4">   
            <div class="flex items-center">
                <p class="text-gray-700 font-bold">Total</p>
            </div>
            <div>
                <p><?= formatRupiah($total_price) ?></p>
            </div>
        </div>
    </div>
    <div id="tab-content2" class="hidden p-4 bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <p class="text-gray-700">Method Payment - <?= $payment ?></p>
            <p class="text-gray-700"><?= $courier ?></p>
        </div>
        <?php foreach($products as $product): ?>
            <div class="flex justify-between items-center py-4">   
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-lg object-cover mr-4" src="<?= $product["img"] ?>" alt="<?= $product["name"] ?>">
                    <p class="text-gray-700"><?= $product["name"] ?> x <?= $product["qty"] ?></p>
                </div>
                <div>
                    <p><?= formatRupiah($product["price"]) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="flex justify-between items-center py-4">   
            <div class="flex items-center">
                <p class="text-gray-700 font-bold">Total</p>
            </div>
            <div>
                <p><?= formatRupiah($total_price) ?></p>
            </div>
        </div>
    </div>
    <div id="tab-content3" class="hidden p-4 bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <p class="text-gray-700">Method Payment - <?= $payment ?></p>
            <p class="text-gray-700"><?= $courier ?></p>
        </div>
        <?php foreach($products as $product): ?>
            <div class="flex justify-between items-center py-4">   
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-lg object-cover mr-4" src="<?= $product["img"] ?>" alt="<?= $product["name"] ?>">
                    <p class="text-gray-700"><?= $product["name"] ?> x <?= $product["qty"] ?></p>
                </div>
                <div>
                    <p><?= formatRupiah($product["price"]) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="flex justify-between items-center py-4">   
            <div class="flex items-center">
                <p class="text-gray-700 font-bold">Total</p>
            </div>
            <div>
                <p><?= formatRupiah($total_price) ?></p>
            </div>
        </div>
    </div>
    <div id="tab-content4" class="hidden p-4 bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <p class="text-gray-700">Method Payment - <?= $payment ?></p>
            <p class="text-gray-700"><?= $courier ?></p>
        </div>
        <?php foreach($products as $product): ?>
            <div class="flex justify-between items-center py-4">   
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-lg object-cover mr-4" src="<?= $product["img"] ?>" alt="<?= $product["name"] ?>">
                    <p class="text-gray-700"><?= $product["name"] ?> x <?= $product["qty"] ?></p>
                </div>
                <div>
                    <p><?= formatRupiah($product["price"]) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="flex justify-between items-center py-4">   
            <div class="flex items-center">
                <p class="text-gray-700 font-bold">Total</p>
            </div>
            <div>
                <p><?= formatRupiah($total_price) ?></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

  <script>
    const tabs = document.querySelectorAll('[id^="tab"]')
    const contents = document.querySelectorAll('[id^="tab-content"]')

    tabs.forEach(tab => {
        tab.addEventListener('click', (e) => {
            e.preventDefault()
            tabs.forEach(t => t.classList.remove('border-indigo-500', 'text-indigo-600'))
            contents.forEach(c => c.classList.add('hidden'))

            tab.classList.add('border-indigo-500', 'text-indigo-600')
            document.querySelector(`#tab-content${tab.id.slice(-1)}`).classList.remove('hidden')
        })
    })
  </script>

<?= $this->endSection() ?>