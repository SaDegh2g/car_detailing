<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 w-full z-50 bg-transparent transition-all duration-300">
    <div class="container mx-auto xl:px-20 py-5 flex justify-between items-center">
        <a href="#" class="lg:text-xl xl:text-2xl px-4 font-bold text-white uppercase">My Pretty Caravan</a>

        <!-- Hamburger Menu Button for Mobile -->
        <button
            id="menuToggle"
            class="md:hidden text-2xl text-white uppercase font-semibold px-4 py-2">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-4 xl:space-x-8">
            <a href="#" class="xl:text-lg font-semibold text-white uppercase hover:text-black transition">Home</a>
            <a href="#" class="xl:text-lg font-semibold text-white uppercase hover:text-black transition">Service</a>
            <a href="#" class="xl:text-lg font-semibold text-white uppercase hover:text-black transition">Featured Cars</a>
            <a href="#" class="xl:text-lg font-semibold text-white uppercase hover:text-black transition">New Cars</a>
            <a href="#" class="xl:text-lg font-semibold text-white uppercase hover:text-black transition">Brands</a>
            <a href="#" class="xl:text-lg font-semibold text-white uppercase hover:text-black transition">Contact</a>
        </div>
    </div>

    <!-- Mobile Sidebar Navigation -->
    <div id="mobileMenu" class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg z-50 transform translate-x-full transition-transform duration-300">
        <!-- Close Button -->
        <button id="menuClose" class="absolute top-4 left-4 text-gray-800 font-bold">X</button>

        <!-- Sidebar Links -->
        <nav class="mt-16 space-y-4">
            <a href="#" class="block px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">Home</a>
            <a href="#" class="block px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">Service</a>
            <a href="#" class="block px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">Featured Cars</a>
            <a href="#" class="block px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">New Cars</a>
            <a href="#" class="block px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">Brands</a>
            <a href="#" class="block px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">Contact</a>
        </nav>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuClose = document.getElementById('menuClose');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
        });

        menuClose.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
        });

        window.addEventListener('click', (event) => {
            if (!mobileMenu.contains(event.target) && event.target !== menuToggle) {
                mobileMenu.classList.add('translate-x-full');
            }
        });
    });
</script>
