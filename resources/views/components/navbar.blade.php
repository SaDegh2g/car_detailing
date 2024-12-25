<!-- Navbar -->
<nav id="navbar" {{ $attributes->merge(['class' => 'fixed w-full z-50 bg-black transition-all duration-300'])}} x-data="{ isOpen: false }">
    <div class="container mx-auto xl:px-20 py-5 flex justify-between items-center">
        <a href="{{route('home')}}" class="lg:text-xl xl:text-2xl px-4 font-bold text-white uppercase">Pretty Caravan</a>

        <!-- Hamburger Menu Button for Mobile -->
        <button
            @click="isOpen = true"
            id="menuToggle"
            class="md:hidden text-2xl text-white uppercase font-semibold px-4 py-2">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-4 xl:space-x-8">
            <a href="{{route('services.exterior')}}" class="xl:text-lg font-semibold text-white uppercase hover:text-gray-300 transition">Exterior</a>
            <a href="{{route('services.interior')}}" class="xl:text-lg font-semibold text-white uppercase hover:text-gray-300 transition">Interior</a>
            <a href="{{route('services.special')}}" class="xl:text-lg font-semibold text-white uppercase hover:text-gray-300 transition">Special</a>
            <a href="{{route('booking')}}" class="xl:text-lg font-semibold text-white uppercase hover:text-gray-300 transition">Booking</a>
        </div>
    </div>

    <!-- Mobile Sidebar Navigation -->
    <div
        id="mobileMenu"
        class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg z-51 transform transition-transform duration-500"
        x-bind:class="isOpen ? 'translate-x-0' : 'translate-x-full'"
        @keydown.escape.window="isOpen = false">
        <!-- Close Button -->
        <button

            @click="isOpen = false"
            id="menuClose"
            class="absolute top-4 left-4 text-gray-800 font-bold">
            X
        </button>

        <!-- Sidebar Links -->
        <nav class="mt-16 space-y-4">
{{--            <div x-data="{ open: false }" class="flex flex-col">--}}
{{--                <a--}}
{{--                    @click.prevent="open = !open"--}}
{{--                    href="#"--}}
{{--                    class="block font-semibold px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">--}}
{{--                    Service--}}
{{--                    <i class="px-4 fas fa-chevron-down"></i>--}}
{{--                </a>--}}

{{--                <div x-show="open" x-transition class="flex flex-col gap-2 px-6 py-2 space-y-2">--}}
{{--                    <a href="#" class="">Exterior</a>--}}
{{--                    <a href="#" class="">Interior</a>--}}
{{--                    <a href="#" class="">Special</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        <a href="{{route('services.exterior')}}" class="block font-semibold px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">Exterior</a>
            <a href="{{route('services.interior')}}" class="block font-semibold px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">Interior</a>
            <a href="{{route('services.special')}}" class="block font-semibold px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">Special</a>
            <a href="{{route('booking')}}" class="block font-semibold px-6 py-2 text-gray-800 uppercase hover:bg-gray-100">Booking</a>
        </nav>
    </div>
</nav>




