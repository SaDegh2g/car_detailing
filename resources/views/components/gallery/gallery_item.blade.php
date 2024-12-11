<div class="container relative mx-auto px-10 py-10">
    <div class="grid gap-2 content-center">
        <!-- Image Section -->
        <div class="w-full p-4">
            <img src="{{$img1}}" alt="Gallery Image" class="w-full h-[500px] object-cover rounded-lg shadow-md">
        </div>

        <div class="w-full p-4">
            <img src="{{$img2}}" alt="Gallery Image" class="w-full h-[500px] object-cover rounded-lg shadow-md">
        </div>

        <!-- Text Section -->
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl font-bold mb-4">{{$header}}</h2>
            <p class="text-gray-700 mb-4">
                {{$message}}
            </p>
        </div>
    </div>
</div>
