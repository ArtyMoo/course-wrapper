<x-layout>
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
    <x-show-container>
        <div class="mx-auto">
            <div class="grid grid-cols-4 gap-4">
                <div class="item1 col-span-1">
                    @for ($i = 1; $i < $fileCount + 1; $i++)
                        <div class="flex flex-col w-full text-center mr-2 p-2 mt-1 rounded-xl text-gray-700
                            {{ $i == request('video') ? 'bg-blue-300 hover:bg-blue-500' : 'bg-gray-300 hover:bg-gray-200'}}"
                        >
                            <a href="/{{ $authorSlug }}/{{ $courseSlug }}/?video={{ $i }}">
                                <span>Video {{ $i }}</span>
                            </a>
                        </div>
                    @endfor
                </div>
                <div class="item1 col-span-3">
                    <video
                           controls
                           id="my-video"
                           class="video-js"
                           preload="auto"
                           width="1200"
                           height="658"
                           poster=""
                           data-setup="{}"
                    >
                        <source src="{{ asset($authorSlug . '-' . $courseSlug . '/video/video' . request('video') . '.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </x-show-container>
</x-layout>
