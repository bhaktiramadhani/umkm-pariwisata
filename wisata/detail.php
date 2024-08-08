<?php
include '../config/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM wisata where id = $id");
$wisata = mysqli_fetch_assoc($query);
if (!$wisata) {
    header('Location: /');
}

include '../layouts/header.php';
include '../layouts/navbar.php';
?>

<section class="py-8 bg-white md:py-16 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
            <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                <img class="w-full" src="../assets/img/<?= $wisata['gambar'] ?>" alt="<?= $wisata['nama'] ?>" />
                <iframe class="mt-4 w-full" width="350" height="300" src="<?= $wisata['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="mt-6 sm:mt-8 lg:mt-0">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">
                    <?= $wisata['nama'] ?>
                </h1>
                <p class="my-4 text-gray-500">
                    <?= $wisata['deskripsi'] ?>
                </p>
                <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                    <a href="/pemesanan/index.php?wisata=<?= $wisata['id'] ?>" class="px-5 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Daftar Wisata
                    </a>
                    <a href="#" class="px-5 py-2.5 text-sm font-medium text-white bg-[#1faf38] hover:bg-[#1f9232] focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:focus:ring-blue-800 flex items-center justify-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg>
                        Konsultasi Via Whatsapp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include '../layouts/footer.php';
?>