<div class="mx-auto">
    <div class="grid grid-cols-4 gap-4">
        <div class="item1 col-span-1">
            @for ($i = 1; $i < $fileCount + 1; $i++)
                <livewire:lesson-tab :authorSlug="$authorSlug" :courseSlug="$courseSlug" :i="$i" />
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
