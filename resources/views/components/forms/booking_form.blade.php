<div class="mt-20">
    <form action="#" method="POST" class="max-w-xl mx-auto bg-white shadow-xl rounded-lg p-6 space-y-6">
        @csrf
        <h3 class="text-2xl font-bold text-gray-800">Booking Information</h3>

        <!-- Name -->
        <div class="flex flex-col">
            <label for="name" class="text-gray-700 font-medium">Name:</label>
            <input
                type="text"
                id="name"
                name="name"
                required
                class="mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                placeholder="Enter your name"
            >
        </div>

        <!-- Phone Number -->
        <div class="flex flex-col">
            <label for="phone_number" class="text-gray-700 font-medium">Phone Number:</label>
            <input
                type="tel"
                id="phone_number"
                name="phone_number"
                required
                class="mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                placeholder="Enter your phone number"
            >
        </div>

        <!-- Date -->
        <div class="flex flex-col">
            <label for="date" class="text-gray-700 font-medium">Booking Date:</label>
            <input
                type="date"
                id="date"
                name="date"
                required
                class="mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
            >
        </div>



        <!-- City -->
        <div class="flex flex-col">
            <label for="name" class="text-gray-700 font-medium">City:</label>
            <input
                type="text"
                id="city"
                name="city"
                required
                class="mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                placeholder="Enter your City"
            >
        </div>

        <h3 class="text-2xl font-bold text-gray-800">Services</h3>

        <!-- Services Selection -->
{{--        <div class="flex flex-col">--}}
{{--            <label for="services" class="text-gray-700 font-medium">Select Services:</label>--}}
{{--            <select--}}
{{--                id="services"--}}
{{--                name="services[]"--}}
{{--                multiple--}}
{{--                class="mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200">--}}
{{--                @foreach($services as $service)--}}
{{--                    <option value="{{ $service->id }}">{{ $service->name }} - ${{ $service->price }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <p class="text-sm text-gray-500 mt-2">Hold down Ctrl (Windows) or Command (Mac) to select multiple services.</p>--}}
{{--        </div>--}}

        <!-- Submit Button -->
        <div class="text-center">
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                Submit Booking
            </button>
        </div>
    </form>
</div>
