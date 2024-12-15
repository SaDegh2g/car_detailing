<div class="container relative mx-auto py-10 opacity-0 animate__animated ">
    <div class="grid gap-2 content-center">
        <!-- Image Section -->
        <div class="swiper-container w-full overflow-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="w-full p-4">
                        <img src="{{$img1}}" alt="" class="w-full h-[500px] object-cover rounded-lg shadow-md ">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full p-4">
                        <img src="{{$img2}}" alt="" class="w-full h-[500px] object-cover rounded-lg shadow-md ">
                    </div>
                </div>
            </div>
{{--            <!-- Swiper Pagination -->--}}
{{--            <div class="swiper-pagination"></div>--}}
{{--            <!-- Swiper Navigation -->--}}
{{--            <div class="swiper-button-next"></div>--}}
{{--            <div class="swiper-button-prev"></div>--}}
        </div>

        <!-- Text Section -->
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl font-bold mb-4">{{$header}}</h2>
            <p class="text-gray-700 mb-4">
                {{$message}}
            </p>
            <a href="{{$route}}" class="text-gray-700 underline hover:text-black cursor-pointer">
                See more
            </a>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const element = entry.target;
                        element.classList.remove("opacity-0");
                        element.classList.add('animate__fadeInRight'); // Add Animate.css animation class
                        observer.unobserve(element); // Stop observing
                    }
                });
            },
            {
                threshold: 0.5, // Adjust as needed
            }
        );

        const elements = document.querySelectorAll(".opacity-0");
        elements.forEach((el) => observer.observe(el));
    });
</script>

