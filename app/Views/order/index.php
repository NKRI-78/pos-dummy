<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="container mx-auto p-6">

    <div class="flex flex-col md:flex-row gap-6 items-start">

      <div class="w-full md:w-3/5 bg-white p-4 rounded-lg shadow-md">
        <div class="flex justify-between">
          <h2 class="text-2xl font-semibold mb-4">My Orders</h2>
          <img src="<?= base_url("public/assets/image/ic-scan.png") ?>" id="start-scan" class="h-12 cursor-pointer" alt="ic-scan">
        </div>

        <?php foreach($data as $item): ?>
          <div class="item divide-y divide-gray-200" data-price="<?= $item["price"] ?>">
            <div class="flex items-center py-4">
              <img class="w-24 h-24 rounded-lg object-cover mr-4" src="<?= $item["img"] ?>" alt="<?= $item["name"] ?>">
              <div class="flex-1">
                  <h3 class="text-lg font-semibold"><?= $item["name"] ?></h3>
                  <div class="mt-2">
                    <button aria-label="Decrease quantity" class="decrement-qty text-gray-500 hover:text-gray-700 mr-2">-</button>
                      <span class="text-gray-700 qty">1</span>
                    <button aria-label="Increase quantity" class="increment-qty text-gray-500 hover:text-gray-700 ml-2">+</button>
                  </div>
              </div>
              <div class="text-lg font-semibold price-per-item"><?= formatRupiah($item["price"]) ?></div>
              <!-- <button class="text-red-500 hover:text-red-700 ml-4">Remove</button> -->
            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <div class="w-full md:w-2/5 bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Summary</h2>
        <div class="flex justify-between mb-2">
          <span class="text-gray-500">Subtotal</span>
          <span class="text-gray-700 total-price"><?= formatRupiah(10000) ?></span>
        </div>
        <div class="border-t border-gray-200 my-2"></div>
        <div class="flex justify-between font-bold text-lg">
          <span>Total</span>
          <span class="total-price"><?= formatRupiah(10000) ?></span>
        </div>
        <a href="<?= base_url("shipping/1") ?>" class="w-full bg-blue-500 text-center inline-block text-white py-2 rounded-lg mt-4 hover:bg-blue-600">
          Checkout
        </a>
      </div>

    </div>
  </div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

  <script>

    function formatCurrencyIDR(amount) {
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      }).format(amount);
    }

    // function updateTotalPrice(item) {
    //   var pricePerItem = parseInt(item.data("price"))
    //   var quantity = parseInt(item.find(".qty").text())
    //   var totalPrice = pricePerItem * quantity
      
    //   $(".total-price").text(totalPrice);
    // }

    function updateSummary() {
      var totalQuantity = 0;
      var totalPrice = 0;

      $(".item").each(function() {
        var item = $(this);
        var quantity = parseInt(item.find(".qty").text());
        var pricePerItem = parseInt(item.data("price"));
        var itemTotalPrice = quantity * pricePerItem;

        totalQuantity += quantity;
        totalPrice += itemTotalPrice;
      })

      $(".total-price").text(formatCurrencyIDR(totalPrice));
    }

    $(".increment-qty").click(function() {
      var item = $(this).closest(".item")
      var plus = parseInt(item.find(".qty").text()) + 1
      item.find(".qty").text(plus)
      updateSummary()
      // updateTotalPrice(item)
    });

    $(".decrement-qty").click(function() {
      var item = $(this).closest(".item")
      var currentQty = parseInt(item.find(".qty").text())
      if (currentQty != 1) { 
        var minus = currentQty - 1
        item.find(".qty").text(minus)
        updateSummary()
        // updateTotalPrice(item)
      }
    });

  </script>


<?= $this->endSection() ?>









