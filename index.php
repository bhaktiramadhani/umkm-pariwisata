<?php
include 'config/koneksi.php';

$query = mysqli_query($db, "SELECT * FROM wisata");
$wisatas = mysqli_fetch_all($query, MYSQLI_ASSOC);


include 'layouts/header.php';
include 'layouts/navbarlanding.php';
?>
<!-- hero section -->
<section class="bg-center bg-no-repeat bg-[url('assets/img/bg-hero.png')]">
  <div class="flex flex-col justify-center items-center px-4 mx-auto max-w-screen-xl text-center h-[600px]">
    <h1 class="mb-4 text-6xl font-semibold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
      Wisata Alam Banjarmasin
    </h1>
    <p class="mb-8 text-[28px] font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-[360px]">
      Rasakan pengalaman luar biasa di Kalimantan Selatan dengan beragam
      wisata alam dan budaya yang siap untuk dijelajahi
    </p>
  </div>
</section>
<!-- search -->
<section class="mt-[50px]">
  <h2 class="text-center text-[50px] font-medium">Mau Wisata Kemana?</h2>

  <form class="max-w-md mx-auto mt-[30px]">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
      <input type="search" id="default-search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pasar terapung, Siring, Bekantan" required />
      <button type="submit" class="text-white absolute end-2.5 bottom-[6px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-[9px] dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
          <path d="M12.9017 24.8024C10.5478 24.8024 8.24669 24.1044 6.28947 22.7967C4.33224 21.489 2.80677 19.6303 1.90596 17.4556C1.00516 15.2809 0.769465 12.888 1.22869 10.5794C1.68792 8.27081 2.82144 6.15022 4.48592 4.4858C6.1504 2.82139 8.27109 1.6879 10.5798 1.22869C12.8885 0.769472 15.2816 1.00516 17.4563 1.90594C19.6311 2.80672 21.4899 4.33213 22.7976 6.28927C24.1054 8.24641 24.8034 10.5474 24.8034 12.9012C24.8034 14.4641 24.4956 16.0117 23.8975 17.4556C23.2994 18.8995 22.4227 20.2115 21.3175 21.3166C20.2123 22.4218 18.9003 23.2984 17.4563 23.8965C16.0123 24.4946 14.4647 24.8024 12.9017 24.8024ZM12.9017 1.5871C10.6707 1.5871 8.48979 2.24865 6.63476 3.48809C4.77974 4.72753 3.33391 6.4892 2.48013 8.55032C1.62635 10.6115 1.40296 12.8795 1.83822 15.0675C2.27347 17.2556 3.34782 19.2655 4.92539 20.843C6.50296 22.4205 8.51291 23.4948 10.7011 23.9301C12.8892 24.3653 15.1573 24.1419 17.2185 23.2882C19.2797 22.4344 21.0414 20.9887 22.2809 19.1337C23.5204 17.2787 24.182 15.0979 24.182 12.8669C24.182 9.87533 22.9935 7.00626 20.878 4.89088C18.7626 2.7755 15.8934 1.5871 12.9017 1.5871Z" fill="white" stroke="white" stroke-width="2" />
          <path d="M28.7208 29L28.7208 28.9999L28.7113 29C28.6757 29.0002 28.6403 28.9932 28.6073 28.9795C28.5744 28.9658 28.5445 28.9457 28.5194 28.9203L28.5195 28.9203L28.5151 28.9159L21.4558 21.8569C21.4103 21.804 21.3856 21.7361 21.3869 21.6661C21.3882 21.5922 21.4181 21.5218 21.4703 21.4696C21.5225 21.4174 21.593 21.3875 21.6668 21.3862C21.7369 21.3849 21.8049 21.4095 21.8578 21.4551L28.9166 28.5136C28.9167 28.5137 28.9168 28.5138 28.9169 28.514C28.9701 28.5674 29 28.6396 29 28.715C29 28.7905 28.97 28.8629 28.9166 28.9164L28.9127 28.9203C28.8876 28.9457 28.8577 28.9658 28.8248 28.9795C28.7918 28.9932 28.7565 29.0002 28.7208 29Z" fill="white" stroke="white" stroke-width="2" />
        </svg>
      </button>
    </div>
  </form>
</section>
<!-- paket wisata -->
<section id="paket-wisata" class="mt-[76px] mx-[100px]">
  <div class="flex justify-between items-center">
    <h2 class="font-medium text-[50px]">Paket Wisata</h2>
    <a href="/wisata" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
      Lihat Semua
    </a>
  </div>

  <div class="mt-10">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-[96px]">
      <?php foreach ($wisatas as $wisata) : ?>
        <div class="flex flex-col gap-[10px] text-center">
          <img class="h-auto max-w-full" src="assets/img/<?= $wisata['gambar'] ?>" alt="" />
          <h4 class="text-[32px]"><?= $wisata['nama'] ?></h4>
          <a href="wisata/detail.php?id=<?= $wisata['id'] ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 self-center">
            Selengkapnya
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- gallery -->
<section id="galery" class="mx-[100px] mt-[60px]">
  <h2 class="font-medium text-[50px] text-center">Galery</h2>
  <div class="grid grid-cols-2 md:grid-cols-3 gap-[96px] mt-10">
    <div class="">
      <img class="h-auto max-w-full" src="assets/img/lok-baintan2.png" alt="" />
    </div>
    <div class="">
      <img class="h-auto max-w-full" src="assets/img/siring-0km.png" alt="" />
    </div>
    <div class="">
      <img class="h-auto max-w-full" src="assets/img/bakantan.png" alt="" />
    </div>
    <div class="">
      <img class="h-auto max-w-full" src="assets/img/lok-baintan3.png" alt="" />
    </div>
    <div class="">
      <img class="h-auto max-w-full" src="assets/img/jembatan-basit.png" alt="" />
    </div>
    <div class="">
      <img class="h-auto max-w-full" src="assets/img/bukit-matang.png" alt="" />
    </div>
  </div>
</section>

<?php
include 'layouts/footer.php';
?>