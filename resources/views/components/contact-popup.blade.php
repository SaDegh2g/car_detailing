<!-- Fixed Container -->
<div x-data="{ showPhone: false }" class="fixed flex bottom-10 right-10">

    <!-- Phone Number Section -->
    <div
        x-show="showPhone"
        x-transition
        class="mx-1 px-4 bg-gray-800 rounded-md content-center"
    >
        <p class="text-md text-white">
            Phone: <a href="tel:+1234567890" class="text-white hover:underline">+123 456 7890</a>
        </p>
    </div>

    <!-- Phone Icon Button -->
    <div
        @click="showPhone = !showPhone"
        :class="showPhone ? 'bg-gray-100 text-gray-800' : 'bg-gray-800 text-white'"
        class="w-14 h-14 cursor-pointer flex items-center justify-center rounded-full transition-colors duration-300"
    >
        <i class="fa-solid fa-phone text-2xl"></i>
    </div>
</div>
