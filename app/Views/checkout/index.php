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
                    <h2 class="text-2xl font-semibold text-gray-800">Payment Methods</h2>
                </div>
                
                <ul>
                    <li class="border-b border-gray-200 last:border-b-0">
                        <div class="flex items-center p-4">
                            <div class="flex-shrink-0">
                                <img src="https://cdn3.iconfinder.com/data/icons/banks-in-indonesia-logo-badge/100/BCA-512.png" class="h-8" alt="ic-bca">
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="text-lg font-medium text-gray-800">BCA</h3>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">SELECT</button>
                            </div>
                        </div>
                    </li>
                    <li class="border-b border-gray-200 last:border-b-0">
                        <div class="flex items-center p-4">
                            <div class="flex-shrink-0">
                                <img src="https://cdn3.iconfinder.com/data/icons/banks-in-indonesia-logo-badge/100/Mandiri-512.png" class="h-8" alt="ic-mandiri">
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="text-lg font-medium text-gray-800">MANDIRI</h3>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">SELECT</button>
                            </div>
                        </div>
                    </li>
                    <li class="border-b border-gray-200 last:border-b-0">
                        <div class="flex items-center p-4">
                            <div class="flex-shrink-0">
                                <img src="https://cdn3.iconfinder.com/data/icons/banks-in-indonesia-logo-badge/100/BNI-512.png" class="h-8" alt="ic-bni">
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="text-lg font-medium text-gray-800">BNI</h3>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">SELECT</button>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="w-full md:w-3/4 mt-4 md:mt-0 bg-white shadow-lg rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-6 text-center">Customer's Detail</h2>

                <div class="rounded-lg p-8 w-full mt-4">
                    <div class="mb-4">
                        <p class="text-gray-700 font-medium mb-2">Fullname</p>
                        <p class="font-bold w-full break-words">Reihan Agam</p>
                    </div>

                    <div class="mb-4">
                        <p class="block text-gray-700 font-medium mb-2">Phone Number</p>
                        <p class="font-bold">089670558381</p>
                    </div>

                    <div class="mb-4">
                        <p class="text-gray-700 font-medium mb-2">Address</p>
                        <p class="font-bold w-full break-words">Merdeka Square, Jalan Lapangan Monas, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="flex justify-end mt-4">
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded flex items-center">
            <span class="mr-2">Submit</span>
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>

</div>


<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const isOpen = content.classList.contains('block');
            if (button.parentElement.classList.contains('accordion-item')) {
                // Toggle parent section
                const parentContent = button.nextElementSibling;
                parentContent.classList.toggle('hidden');
                button.classList.toggle('bg-gray-300');
                
                // Close all child sections under the same parent
                if (!isOpen) {
                    parentContent.querySelectorAll('.accordion-content').forEach(childContent => {
                        childContent.classList.add('hidden');
                        childContent.previousElementSibling.classList.remove('bg-gray-300');
                    });
                }
            } else {
                // Toggle child section
                content.classList.toggle('hidden');
                button.classList.toggle('bg-gray-300');
            }
        });
    });
</script>

<?= $this->endSection() ?>