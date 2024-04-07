<div class="mx-auto">
    <div class="grid grid-cols-4 gap-4">
        <div class="item1 col-span-1">
            @for ($i = 1; $i < $fileCount + 1; $i++)

                <div class="flex flex-col w-full text-center mr-2 p-2 mt-1 rounded-xl text-gray-700
                    {{ $i == request('video') || (request('video') == NULL && $i == 1) ?
                    'bg-blue-300 hover:bg-blue-500' : 'bg-gray-300 hover:bg-gray-200'}}"
                >
                    <a wire:navigate href="/courses/{{ $authorSlug }}/{{ $courseSlug }}/?video={{ $i }}">
                        <span>Video {{ $i }}</span>
                    </a>
                </div>
            @endfor
        </div>
        <div class="item1 col-span-3">
            <video width="1200" height="658" controls>
                @if(request('video') !== NULL)
                    <source src="{{ asset($authorSlug . '/' . $courseSlug . '/video/video' . request('video') . '.mp4') }}" type="video/mp4">
                @else
                    <source src="{{ asset($authorSlug . '/' . $courseSlug . '/video/video1.mp4') }}" type="video/mp4">
                @endif
            </video>
        </div>
    </div>
</div>
