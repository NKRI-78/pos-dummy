<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="w-4/5 my-8 mx-auto">
    <div class="my-4 mx-2">
        <div class="flex flex-col items-center text-center gap-y-36">
            <div class="flex flex-col items-center gap-y-12 ">
                <img class="w-52" src="<?= base_url('public/assets/image/logo.png') ?>" alt="Logo" class="logo-c">
                <p class="text-xl lg:px-14 px-4 text-[#767676]">TentangLoker adalah satu wadah bagi para pencari kerja untuk mempermudah mendapat pekerjaan sesuai dengan apa yang di inginkan tentunya dari berbagai perusahaan ternama yang ada di indonesia. Kami berusaha memberikan yang terbaik untuk anda.</p>
            </div>
            <div class="flex flex-col gap-y-4 justify-center text-center">
                <div class="flex flex-col gap-y-1">
                    <h6>Follow </h6>
                    <h6>Our Social Media</h6>
                </div>
                <div class="flex gap-x-4 justify-center">
                    <a href="https://www.instagram.com/tentangloker/" target="_blank">
                        <img class="w-12" src="<?= base_url('public/assets/image/instagram.png') ?>" alt="Instagram">
                    </a>
                    <a href="https://www.tiktok.com/@tentangloker.com" target="_blank">
                        <img class="w-12" src="<?= base_url('public/assets/image/tiktok.png') ?>" alt="Tiktok" >
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61557886747769" target="_blank">
                        <img class="w-12" src="<?= base_url('public/assets/image/facebook.png') ?>" alt="Facebook" >
                    </a>
                </div>
                <div class="mb-4 mt-6">
                    <p>PT. Nara Kaham Raya Investama Kemang Office
                    Jl. Kemang Selatan IX No.9A, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

















