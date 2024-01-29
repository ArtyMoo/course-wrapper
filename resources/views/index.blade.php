<x-layout>
    <x-show-container>
        <x-filters :categories="$categories" :authors="$authors"></x-filters>
    </x-show-container>
    <x-show-container>
        <div class="mx-auto">
            <div class="flex flex-wrap justify-between">
                @foreach($courses as $course)
                    <x-course-card :course="$course"></x-course-card>
                @endforeach
            </div>
        </div>
    </x-show-container>
</x-layout>
