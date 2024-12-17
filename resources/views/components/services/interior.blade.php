<x-layout>

    @section('metaTags')
        <title>Exterior Cleaning</title>
        <meta name="description" content="full exterior high-pressure wash & rinse with paint-enhancing wash & wax High-pressure clean and acid bath on wheels Clean & shine windows & mirrors in in melbourne australia"/>
    @endsection

    <x-navbar id="navbar" />

    <x-pathing/>

    <div class="container m-auto pt-20 md:pt-32">
        <x-services.items
            img="assets/images/i1.jpg"
            header="Deep Interior Vacuuming"
            text="We thoroughly vacuum all carpets, upholstery, and nooks to eliminate dust, crumbs, and debris. This ensures a clean and fresh environment for your travels."
            order="md:order-last"/>

        <x-services.items
            img="assets/images/i2.jpg"
            header="Surface Cleaning and Sanitization"
            text="Our deep surface cleaning tackles tough stains, bugs, and environmental contaminants that regular washes can’t handle. We focus on restoring your caravan’s original look by giving extra care to all surfaces, including windows, panels, and trims."
            order="md:order-first"/>

        <x-services.items
            img="assets/images/i2.jpg"
            header="Upholstery and Carpet Shampooing"
            text="After cleaning, we finish with a professional polishing and shine protection service. This enhances the exterior’s shine while adding a protective layer to shield against UV rays, dirt, and weather conditions—keeping your caravan looking spotless for longer."
            order="md:order-last"/>

    </div>

</x-layout>


