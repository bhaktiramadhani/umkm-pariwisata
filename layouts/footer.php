<footer class="mt-[100px]">
    <div class="bg-gray-800 text-white py-8 text-center">
        <p class="text-3xl">Copyright 2024 Bhakti Ramadhani</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
<script>
    document.addEventListener("scroll", function() {
        const navbar = document.getElementById("navbar");
        const links = navbar.querySelectorAll("ul li a");
        if (window.scrollY > 50) {
            navbar.classList.add("bg-white", "shadow-md", "dark:bg-gray-900");
            links.forEach((link) => {
                link.classList.add("text-black");
                link.classList.remove("text-white");
            });
        } else {
            navbar.classList.remove("bg-white", "shadow-md", "dark:bg-gray-900");
            links.forEach((link) => {
                link.classList.remove("text-black");
                link.classList.add("text-white");
            });
        }
    });
</script>
</body>

</html>