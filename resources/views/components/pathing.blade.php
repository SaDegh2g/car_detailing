<div class="container px-5 pt-32 cursor-pointer underline text-gray-500 hover:text-black">
    <a href="{{route('home')}}">
        <i class="fa-solid fa-arrow-left px-2"></i>
        {{Request::decodedPath()}}
    </a>
</div>
