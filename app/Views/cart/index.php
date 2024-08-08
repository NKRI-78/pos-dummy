<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Shopping Cart</h1>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- Cart Items -->
      <div class="lg:col-span-2 bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Cart Items</h2>
        <div class="divide-y divide-gray-200">

          <!-- Item 1 -->
          <div class="flex items-center py-4">
            <img class="w-24 h-24 rounded-lg object-cover mr-4" src="https://via.placeholder.com/150" alt="Product Image">
            <div class="flex-1">
              <h3 class="text-lg font-semibold">Product Name 1</h3>
              <p class="text-gray-500">Product description goes here.</p>
              <div class="mt-2">
                <button class="text-gray-500 hover:text-gray-700 mr-2">-</button>
                <span class="text-gray-700">1</span>
                <button class="text-gray-500 hover:text-gray-700 ml-2">+</button>
              </div>
            </div>
            <div class="text-lg font-semibold">$10.00</div>
            <button class="text-red-500 hover:text-red-700 ml-4">Remove</button>
          </div>
          <!-- Item 2 -->
          <!-- <div class="flex items-center py-4">
            <img class="w-24 h-24 rounded-lg object-cover mr-4" src="https://via.placeholder.com/150" alt="Product Image">
            <div class="flex-1">
              <h3 class="text-lg font-semibold">Product Name 2</h3>
              <p class="text-gray-500">Product description goes here.</p>
              <div class="mt-2">
                <button class="text-gray-500 hover:text-gray-700 mr-2">-</button>
                <span class="text-gray-700">2</span>
                <button class="text-gray-500 hover:text-gray-700 ml-2">+</button>
              </div>
            </div>
            <div class="text-lg font-semibold">$20.00</div>
            <button class="text-red-500 hover:text-red-700 ml-4">Remove</button>
          </div> -->

        </div>
      </div>
      <!-- Summary Section -->
      <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Summary</h2>
        <div class="flex justify-between mb-2">
          <span class="text-gray-500">Subtotal</span>
          <span class="text-gray-700">$30.00</span>
        </div>
        <div class="flex justify-between mb-2">
          <span class="text-gray-500">Shipping</span>
          <span class="text-gray-700">$5.00</span>
        </div>
        <div class="flex justify-between mb-2">
          <span class="text-gray-500">Tax</span>
          <span class="text-gray-700">$2.50</span>
        </div>
        <div class="border-t border-gray-200 my-2"></div>
        <div class="flex justify-between font-bold text-lg">
          <span>Total</span>
          <span>$37.50</span>
        </div>
        <button class="w-full bg-blue-500 text-white py-2 rounded-lg mt-4 hover:bg-blue-600">Checkout</button>
      </div>
    </div>
  </div>

<?= $this->endSection() ?>

















