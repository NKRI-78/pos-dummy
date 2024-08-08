<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="container mx-auto p-6">

    <div class="lg:col-span-2 bg-white p-4 rounded-lg shadow-md">
        <div class="divide-y divide-gray-200">
            <div class="flex items-center py-4">
                <img class="w-24 h-24 rounded-lg object-cover mr-4" src="<?= $image ?>" alt="<?= $name ?>">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold"><?= $name ?></h3>
                </div>
                <div class="text-lg font-semibold"><?= formatRupiah($price) ?></div>
            </div>
        </div>
    </div>

</div>

<div class="flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
        <h2 class="text-2xl font-bold mb-6 text-center">User Information</h2>
        <form>
            <div class="mb-4">
                <label for="fullname" class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" id="fullname" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your full name">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your email">
            </div>

            <div class="mb-6">
                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                <input type="tel" id="phone" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your phone number">
            </div>

            <div class="text-center">
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 focus:outline-none">Submit</button>
            </div>
        </form>
    </div>

</div>


<?= $this->endSection() ?>