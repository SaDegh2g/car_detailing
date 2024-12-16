<x-layout>

    @section('metaTags')
        <title>Exterior Cleaning</title>
        <meta name="description" content="full exterior high-pressure wash & rinse with paint-enhancing wash & wax High-pressure clean and acid bath on wheels Clean & shine windows & mirrors in in melbourne australia"/>
    @endsection

    <x-navbar id="navbar" />

    <x-pathing/>

    <div class="container m-auto pt-20 md:pt-32">
        <x-services.items
            img="assets/images/e1.jpg"
            header="Thorough Exterior Wash"
            text="We provide a thorough exterior wash to remove dirt, grime, and road dust that accumulate during travel. Using high-quality products and equipment, we ensure your caravan's surface shines like new and stays protected from long-term damage."
            order="md:order-last"/>
        <x-services.items
            img="assets/images/e2.jpg"
            header="Wheel and Undercarriage Cleaning"
            text="Our deep surface cleaning tackles tough stains, bugs, and environmental contaminants that regular washes can’t handle. We focus on restoring your caravan’s original look by giving extra care to all surfaces, including windows, panels, and trims."
            order="md:order-first"/>
        <x-services.items
            img="assets/images/e3.jpg"
            header="Polishing and Waxing"
            text="After cleaning, we finish with a professional polishing and shine protection service. This enhances the exterior’s shine while adding a protective layer to shield against UV rays, dirt, and weather conditions—keeping your caravan looking spotless for longer."
            order="md:order-last"/>

    </div>

</x-layout>


