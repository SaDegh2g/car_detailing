<div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-5 pb-24 md:pb-56 ">
    <!-- Text Explanation -->
    <div>
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">{{$header}}</h2>
        <p class="text-lg text-gray-600">
            {{$text}}
        </p>
    </div>

    <!-- Image -->
    <div class="{{$order}}">
        <img src="{{asset('assets/images/1.jpg')}}" alt="Caravan Cleaning" class="w-full max-h-[500px] object-cover rounded-lg shadow-lg">
    </div>
</div>
