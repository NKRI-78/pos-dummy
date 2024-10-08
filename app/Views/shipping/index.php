<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="container mx-auto p-6">

    <div class="flex flex-col md:flex-row gap-6 items-start">

        <div class="w-full md:w-3/5 lg:col-span-2 bg-white p-4 rounded-lg shadow-md">
            
            <div class="flex justify-between">
                <h2 class="text-2xl font-semibold mb-4">My Orders</h2>
            </div>
            
            <?php foreach($products as $item): ?>
                <div class="divide-y divide-gray-200">
                    <div class="flex items-center py-4">
                        <img class="w-24 h-24 rounded-lg object-cover mr-4" src="<?= $item["img"] ?>" alt="Ikan Segar">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold"><?= $item["name"] ?> </h3>
                            <p>
                                x <?= $item["qty"] ?>
                            </p>
                        </div>
                        <div class="text-lg font-semibold"><?= formatRupiah($item["price"]) ?></div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="w-full md:w-2/5 flex items-center justify-center">

            <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">

                <h2 class="text-2xl font-bold mb-6 text-center">For further processing, please fill in the data below.</h2>

                <form>
                    <div class="mb-4">
                        <label for="fullname" class="block text-gray-700 font-medium mb-2">Full Name *</label>
                        <input type="text" id="fullname" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your full name">
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number *</label>
                        <input type="tel" id="phone" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your phone number">
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 font-medium mb-2">Address *</label>
                        <textarea id="address" rows="4" class="block p-2 w-full text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your address"></textarea>
                        </textarea>
                    </div>

                    <div class="text-center">
                        <a href="javascript:void(0)" id="btn-submit" class="w-full inline-block text-white p-2 rounded-lg hover:bg-blue-600 focus:outline-none" style="background-color: #F46300;">Next</a>
                    </div>
                </form>

            </div>

        </div>

    </div>


</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

    <script>

        var baseUrl = '<?= base_url('shipping/save-personal-info') ?>'

        $("#btn-submit").click(function(e) {
            e.preventDefault()

            var fullname = $("#fullname").val()
            var phone = $("#phone").val()
            var address = $("#address").val()

            if(fullname.trim() == "") {
                alert("Field full name is required")
                return
            }

            if(phone.trim() == "") {
                alert("Field phone is required")
                return
            }

            if(address.trim() == "") {
                alert("Field address is required")
                return
            }

            $.ajax({
                url: baseUrl, 
                type: "POST",
                data: {
                    fullname: fullname,
                    phone: phone,
                    address: address
                },
                success: function(response) {
                    console.log(response);
                    location.href = "<?= base_url("checkout/1") ?> "
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            })
        })

    </script>

<?= $this->endSection() ?>