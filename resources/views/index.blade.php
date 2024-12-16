<x-layout>

    @section('metaTags')
        <title>Pretty Caravan</title>
    @endsection

    <x-navbar class="bg-transparent"/>
<x-hero/>
        <h2 class="bg-gray-100 text-4xl tex font-bold text-center pt-28">some of our services</h2>
<x-gallery.gallery/>


<script>
    document.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-gray-800', 'shadow-lg');
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-gray-800', 'shadow-lg');
        }
    });
</script>

</x-layout>




