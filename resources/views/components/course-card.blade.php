@props(['course'])

<div class="lg:w-1/3 md:w-1/2 p-2">
    <div class="relative overflow-hidden rounded-md">
        <div class="relative block w-full">
            <img src="{{ asset($course->thumbnail) }}" class=" items-center object-cover pointer-events-none justify-evenly dark:text-white" loading="lazy" alt="">
            <span class="absolute z-10 px-2 bg-white rounded bottom-1 left-1">2 hours</span>
        </div>
    </div>
    <div class="flex flex-col mt-2">
        <div class="flex flex-row">
            <a href="{{ $course->author->slug .'/'. $course->slug }}" class="px-1 mr-2 bg-black rounded-full hover:transition dark:bg-gray-100 hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24"
                     fill="currentColor" aria-hidden="true"
                     data-slot="icon"
                     class="w-5 h-5 mt-1 ml-0.5 mb-1 text-white rounded-full dark:text-black"
                >
                    <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd">
                    </path>
                </svg>
            </a>
            <h3 class="text-lg font-bold">{{ $course->title }}</h3>
        </div>
        <div class="flex mt-2">
            <p>{{ $course->excerpt }}</p>
        </div>
    </div>
</div>
