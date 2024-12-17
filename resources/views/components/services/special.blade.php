<x-layout>

    @section('metaTags')
        <title>Exterior Cleaning</title>
        <meta name="description" content="full exterior high-pressure wash & rinse with paint-enhancing wash & wax High-pressure clean and acid bath on wheels Clean & shine windows & mirrors in in melbourne australia"/>
    @endsection

    <x-navbar id="navbar" />

    <x-pathing/>

    <div class="container m-auto pt-20 md:pt-32">
        <x-services.items
            img="assets/images/s1.jpg"
            header="Maximize Your Energy Independence"
            text="We offer professional installation of high-quality solar panels on your caravan, ensuring a sustainable and reliable energy source during your travels. With solar power, you can charge your batteries, power appliances, and stay off-grid for longer without relying on external power sources."
            order="md:order-last"/>

        <x-services.items
            img="assets/images/s2.jpg"
            header="Durable and Efficient"
            text="We use robust, weather-resistant solar panels built to withstand harsh conditions while delivering maximum performance. Whether you're on the road or parked, enjoy clean energy that reduces your reliance on fuel and minimizes your environmental footprint."
            order="md:order-first"/>

        <x-services.items
            img="assets/images/s3.jpg"
            header="Safe and Reliable Gas Solutions"
            text="We provide professional gas tank installation services for your caravan, ensuring a safe and efficient fuel source for cooking, heating, and other essential needs. Our certified team guarantees secure connections and compliance with all safety standards."
            order="md:order-last"/>

    </div>

</x-layout>
